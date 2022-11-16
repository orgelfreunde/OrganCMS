<?php

declare(strict_types=1);

namespace App\Actions\Post;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\ViewInterface;

final class NewPostAction
{
    /**
     * @Injection
     * @var ViewInterface
     */
    private ViewInterface $view;

    /**
     * The constructor.
     *
     * @param ViewInterface
     */
    public function __construct(ViewInterface $view)
    {
        $this->view = $view;
    }

    public function __invoke(Request $request, Response $response, array $args = []): Response
    {
        $response = $this->view->render($response, 'post/create', []);

        return $response;
    }
}