<?php
require_once __DIR__ . '/vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;
$image_file = public_path().'/photos/'.$record['path'];
    dd($image_file);
echo (new TesseractOCR('/public/photos/6141591615254.png'))
->run();