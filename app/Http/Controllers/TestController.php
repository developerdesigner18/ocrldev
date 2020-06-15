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
    public function test(Request $request)
    {
    	$image=$request->file('photo');
    	echo $image;
    	echo "<br>";
        $image->move(public_path().'/photos/',$image);

    	
  //   	$image_file = public_path().'/photos/7631591416660.jpg';
    	
		// $result=(new TesseractOCR($image_file))->run();
		// echo $result;


		// $image_="8911591423706.jpg";
    	// $img=$request->photo->move(public_path('/photos'));
    	// $image_file = public_path().'/photos/'.$img;
    	echo $image;

    	// $image_file = public_path().'/photos/7631591416660.jpg';
		$result=(new TesseractOCR($image))->run();
		echo $result;
		die;
    }
}
