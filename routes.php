<?php

use App\controllers\PublicController;
use App\Router;

Router::addRoute('/', [PublicController::class, 'index']);

Router::addRoute('/us', PublicController::class, 'us');
Router::addRoute('/form', PublicController::class, 'us');
