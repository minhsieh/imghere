<?php
ini_set('display_errors','1');
error_reporting(E_ALL);

require dirname(__DIR__)."/config/config.php";
require dirname(__DIR__)."/vendor/autoload.php";

use MiniPHP\App;
use App\Service\Placeholder;

$app = new App;

$app->get('/' , function() use($app){
    echo "This is index";
});

$app->get('/{size}' , function($size) use($app){
    // Get variables from $_GET
    $width           = isset($_GET['w']) ? trim($_GET['w']) : null;
    $height          = isset($_GET['h']) ? trim($_GET['h']) : null;
    $backgroundColor = isset($_GET['bgColor']) ? strtolower(trim($_GET['bgColor'])) : null;
    $textColor       = isset($_GET['textColor']) ? strtolower(trim($_GET['textColor'])) : null;
    $text          = isset($_GET['text']) ? trim($_GET['text']) : null;

    try {
        $placeholder = new Placeholder();
        $placeholder->setWidth($width);
        $placeholder->setHeight($height);
        if ($text) $placeholder->setText($text);
        if ($backgroundColor) $placeholder->setBackgroundColor($backgroundColor);
        if ($textColor) $placeholder->setTextColor($textColor);
        $placeholder->render();
    } catch (Exception $e){
        die($e->getMessage());
    }
});

$app->listen();
