<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;
class TestController extends Controller
{
	
    public function photoUpload(Request $request)
    {
        $image=$request->image;
        $url = 'https://www.ocrldev.xyz/photos/'.$image;
        $img =  public_path().'/photos/'.$image;
        file_put_contents($img, file_get_contents($url));
    }
    public function test(Request $request)
    {
        // $image = Input::get('image');
        // $image=$request->file('image');
        $image=$request->image;
        // echo $image;
        // $image='7631591416660.jpg';

        
        // $url='http://127.0.0.1:8000/photos/'.$image;

        $url = 'https://www.ocrldev.xyz/photos/'.$image;
        $img =  public_path().'/photos/'.$image;
        file_put_contents($img, file_get_contents($url));

       
     	$image_file = public_path().'/photos/'.$image;
        // echo $image_file;
		$result=(new TesseractOCR($image_file))->whitelist(range(0, 9),range('A', 'Z'))->run();
        // echo $result;
        // die;
		
        return $result;
		
    }
}
