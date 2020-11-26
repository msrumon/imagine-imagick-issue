<?php

use Imagine\Exception\RuntimeException;
use Imagine\Imagick\Imagine;

require_once './vendor/autoload.php';

try {
    $imagine = new Imagine();
    $image = $imagine->open('Untitled.eps');
    echo 'Image:' . PHP_EOL;
    var_dump($image);
} catch (RuntimeException $ex) {
    echo 'Runtime Exception:' . PHP_EOL;
    var_dump($ex);
}
