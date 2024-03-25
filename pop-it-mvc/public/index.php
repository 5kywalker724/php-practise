<?php
declare(strict_types=1);

try{
    $app = require_once __DIR__ . '/../core/bootstrap.php'
    $app->run();
} cath (\Throwable $exception){
    echo '<pre>';
    print_r($exception);
    echo '</pre>';
}