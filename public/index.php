<?php

use com\bangkitanomsedhayu\uqi\academy\App\Router;
use com\bangkitanomsedhayu\uqi\academy\Controller\AcademyController;


require_once __DIR__ . "/../vendor/autoload.php";

Router::add('GET', '/', AcademyController::class, 'index', []);
Router::add('GET', '/about', AcademyController::class, 'about', []);

Router::run();