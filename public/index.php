<?php
ini_set('display_errors','1');
error_reporting(E_ALL);

require dirname(__DIR__)."/config/config.php";
require dirname(__DIR__)."/vendor/autoload.php";

use MiniPHP\App;
use App\Service\Placeholder;

$app = new App;

$app->get('/img' , function() use($app){
    // Get variables from $_GET
    $width           = isset($_GET['w']) ? trim($_GET['w']) : null;
    $height          = isset($_GET['h']) ? trim($_GET['h']) : null;
    $backgroundColor = isset($_GET['bgColor']) ? strtolower(trim($_GET['bgColor'])) : null;
    $textColor       = isset($_GET['textColor']) ? strtolower(trim($_GET['textColor'])) : null;

    try {
        $placeholder = new Placeholder();
        // echo $placeholder->getFont();
        // exit;
        $placeholder->setWidth(500);
        $placeholder->setHeight(200);
        if ($backgroundColor) $placeholder->setBackgroundColor($backgroundColor);
        if ($textColor) $placeholder->setTextColor($textColor);
        $placeholder->render();
    } catch (Exception $e){
        die($e->getMessage());
    }
});

$app->listen();
