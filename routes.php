<?php

use App\Controllers\PublicController;
use App\Router;

use App\Controllers\PostsController;
Router::get('/', [PublicController::class, 'index']);

Router::get('/us', [PublicController::class, 'us']);
Router::get('/form', [PublicController::class, 'form']);
Router::post('/answer', [PublicController::class, 'answer']);
Router::get('/posts', [PostsController::class, 'index']);