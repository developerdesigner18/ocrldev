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
    	$image_name = rand(1, 999).time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path().'/photos/',$image_name);
 
     	$image_file = public_path().'/photos/'.$image_name;
    	
		// $result=(new TesseractOCR($image_file))->run();
		// echo $result;


		// $image_="8911591423706.jpg";
    	// $img=$request->photo->move(public_path('/photos'));
    	// $image_file = public_path().'/photos/'.$img;
    	echo $image_file;

    	// $image_file = public_path().'/photos/7631591416660.jpg';
		$result=(new TesseractOCR($image_file))->run();
		echo $result;
		die;
    }
}
