<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;
class TestController extends Controller
{
    public function test()
    {
    	$image_file = 'https://ocrldev.herokuapp.com/public/photos/6141591615254.png';
		// dd($image_file);
		echo (new TesseractOCR($image_file))->run();
    }
}
