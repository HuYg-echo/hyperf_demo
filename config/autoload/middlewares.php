<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

return [
    'http' => [
//        \Phper666\JwtAuth\Middleware\JwtAuthMiddleware::class
        \Hyperf\Validation\Middleware\ValidationMiddleware::class,
        \Hyperf\Session\Middleware\SessionMiddleware::class,
        \App\Middleware\HeaderMiddleware::class
    ],
];
