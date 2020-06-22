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
        // $image = Input::get('image');
        // $image=$request->file('image');
        $image=$request->image;
        // echo $image;
        // $image='7631591416660.jpg';

        
        // $url='http://127.0.0.1:8000/photos/'.$image;

        // $url = 'https://www.ocrldev.xyz/photos/'.$image;
        // $img =  public_path().'/photos/'.$image;
        // file_put_contents($img, file_get_contents($url));

       
     	$image_file = public_path().'/photos/'.$image;
        // echo $image_file;
        // echo "<br>";
    	// $image_file = public_path().'/photos/7631591416660.jpg';
		$result=(new TesseractOCR($image_file))->run();
        // echo $result;
        // die;
		
        return $result;
		
    }
}
