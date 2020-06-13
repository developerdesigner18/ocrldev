<?php

use thiagoalessio\TesseractOCR\TesseractOCR;

$image_file = public_path().'/photos/361591415735.jpg';
    dd($image_file);
echo (new TesseractOCR('/public/photos/6141591615254.png'))
->run();

?>