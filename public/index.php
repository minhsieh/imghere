<?php

require dirname(__DIR__)."/vendor/autoload.php";

use MiniPHP\App;

$app = new App;

$app->get('/' , function() use($app){
    echo "Hellooooooo";
});

$app->listen();
