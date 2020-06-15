<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;
class TestController extends Controller
{
    public function test()
    {
    	$image_file = public_path().'/photos/7631591416660.jpg';
		$result=(new TesseractOCR($image_file))->run();
		echo $result;
    }
}
