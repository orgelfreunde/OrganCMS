<?php

declare (strict_types=1);

namespace App\Action\Frontend\Gallery;

use App\Renderer\TemplateRenderer;
use Psr\Http\Message\ResponseInterface as Response;

final class GalleryAction
{
    /**
     * @Injection
     * @var TemplateRenderer
     */
    private TemplateRenderer $renderer;

    /**
     * The constructor.
     *
     * @param TemplateRenderer $renderer Template renderer
     */
    public function __construct(TemplateRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * The invoker.
     *
     * @param Response $response Representation of an outgoing, server-side response.
     *
     * @return Response
     */
    public function __invoke(Response $response): Response
    {
        $response = $this->renderer->render($response, 'frontend/gallery/gallery.html', []);

        return $response;
    }
}
