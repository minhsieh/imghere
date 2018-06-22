<?php
ini_set('display_errors','1');
error_reporting(E_ALL);

require dirname(__DIR__)."/config/config.php";
require dirname(__DIR__)."/vendor/autoload.php";

use MiniPHP\App;
use App\Service\Placeholder;
use App\Service\Resize;
use \Redis;

$app = new App;

$app->get('/' , function() use($app){
    echo "This is index";
});

$app->get('/photo/{size}',function($size) use ($app){
    $redis = new Redis;
    $redis->connect(REDIS_HOST,REDIS_PORT);
    $redis->select(REDIS_DB);
    
    $rand = rand(0,892);

    $key = $redis->lindex("unsplash_list",$rand);
    $resize = new Resize(UNSPLASH_PATH.$key.".jpg");

    preg_match("/(\d+)x(\d+)/",$size , $size);
    // Get variables from $_GET
    $width           = isset($_GET['w']) ? trim($_GET['w']) : $size[1];
    $height          = isset($_GET['h']) ? trim($_GET['h']) : $size[2];

    $resize->resizeImage($width,$height,"crop");
    $resize->showImage();
});

$app->get('/{size}' , function($size) use($app){
    preg_match("/(\d+)x(\d+)/",$size , $size);

    // Get variables from $_GET
    $width           = isset($_GET['w']) ? trim($_GET['w']) : $size[1];
    $height          = isset($_GET['h']) ? trim($_GET['h']) : $size[2];
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
