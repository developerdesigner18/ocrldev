<?php
require_once __DIR__ . '/vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;
echo (new TesseractOCR('/public/photos/6141591615254.png'))
->run();