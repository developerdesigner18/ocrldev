<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;
class TestController extends Controller
{
	public function photoUpload()
	{
		return view('upload');
	}
    public function test($image)
    {
        // $image=$request->image;
        echo $image;
        // $image=$request->file('image');
    	move_uploaded_file($image, public_path().'/photos/'.$image);
     	$image_file = public_path().'/photos/'.$image;

    	// $image_file = public_path().'/photos/7631591416660.jpg';
		$result=(new TesseractOCR($image_file))->run();
		echo $result;
        die;
        return $result;
		
    }
}
