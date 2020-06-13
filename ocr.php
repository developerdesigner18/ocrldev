<?php
use thiagoalessio\TesseractOCR\TesseractOCR;

$image_file = 'https://ocrldev.herokuapp.com/public/photos/361591415735.jpg';

echo (new TesseractOCR($image_file))->run();


?>
