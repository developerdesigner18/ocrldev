<?php
use thiagoalessio\TesseractOCR\TesseractOCR;

$image_file = 'https://ocrldev.herokuapp.com/public/photos/6141591615254.jpg';

echo (new TesseractOCR($image_file))->run();


?>
