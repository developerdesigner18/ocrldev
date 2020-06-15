<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;
class TestController extends Controller
{
    public function test()
    {
    	$image_file="https://www.ocrldev.xyz/photos/8911591423706.jpg";
    	echo $image_file;
    	die;
    	// $image_file = public_path().'/photos/7631591416660.jpg';
		$result=(new TesseractOCR($image_file))->run();
		echo $result;
		die;
    }
}
