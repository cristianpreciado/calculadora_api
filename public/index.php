<?php

use App\Kernel;
header('Access-Control-Allow-Origin: http://localhost:3000');
require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
