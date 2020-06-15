<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;
class TestController extends Controller
{
    public function test()
    {
    	echo $image_file = public_path().'/photos/6751591610573.jpg';
    	echo "<br>";

		// dd($image_file);
		echo (new TesseractOCR($image_file))->run();
    }
}
