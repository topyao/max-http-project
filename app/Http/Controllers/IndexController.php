<?php

declare(strict_types=1);

/**
 * This file is part of MaxPHP.
 *
 * @link     https://github.com/marxphp
 * @license  https://github.com/marxphp/max/blob/master/LICENSE
 */

namespace App\Http\Controllers;

use App\Http\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class IndexController
{
    public function index(): ResponseInterface
    {
        return Response::HTML('Hello, world.');
    }

    /**
     * 注意： 如果需要使用请求变量，切记变量名为$request，否则不能注入.
     */
    public function api(ServerRequestInterface $request): ResponseInterface
    {
        return Response::JSON([
            'code'    => 0,
            'status'  => true,
            'message' => 'Hello, ' . $request->get('name', 'MaxPHP') . '!',
            'data'    => [],
        ]);
    }
}
