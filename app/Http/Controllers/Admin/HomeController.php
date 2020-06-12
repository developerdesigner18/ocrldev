<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use App\Photo;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Swagger\Client as Swagger;
use thiagoalessio\TesseractOCR\TesseractOCR;

class HomeController extends Controller
{
    public function photoList()
    {
    	$photo=new Photo();
    	$photos=$photo->getPhoto();
    	return view('admin.photo-list',compact('photos'));
    }
    public function photoUpload()
    {
    	return view('admin.photo-upload');
    }
    public function postPhotoUpload(Request $request)
    {
    	$request->validate([
            'title'=>'required',
            'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

    	$image=$request->file('photo');
    	$image_name = rand(1, 999).time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path().'/photos/',$image_name);

         $data=array(
            'title'=>$request->get('title'),
            'path'=>$image_name,
        );
        $photo=new Photo();
        $newPhoto=$photo->addPhoto($data);
        if($newPhoto)
        {
        	return redirect('admin/photoList')->with('message', 'Photo upload successfully!');
        }
        else
        {
        	return redirect('admin/photoList')->with('message', 'Something went wrong!');
        }
    }

    // public function photoScan($id)
    // {
    //     $photo=new Photo();
    //     $record=$photo->getPhotoById($id);
    //     require_once(base_path().'/vendor/autoload.php');

    //     $config = Swagger\Configuration::getDefaultConfiguration()->setApiKey('Apikey','853d1f98-7c38-4b46-8478-1a5dce4e59df');
    //     $client = new \GuzzleHttp\Client();
    //     $apiInstance = new Swagger\Api\ImageOcrApi($client,$config
    //     );
        
    //     //server
    //     // $image_file = $_SERVER['DOCUMENT_ROOT'].'/public/photos/'.$record['path'];

    //     //local
    //     $image_file = $_SERVER['DOCUMENT_ROOT'].'/photos/'.$record['path'];
    //     // echo $image_file;
    //     $recognition_mode = "Basic"; 
    //     $language = "English"; 
    //     $preprocessing = "preprocessing_example"; 

    //     try 
    //     {
    //         $result = $apiInstance->imageOcrPost($image_file, $recognition_mode, $language, $preprocessing);
    //         // print_r($result);
    //         return $result;
    //     } 
    //     catch (Exception $e) 
    //     {
    //         echo 'Exception when calling ImageOcrApi->imageOcrPost: ', $e->getMessage(), PHP_EOL;
    //     }
    // }

    public function photoScan($id)
    {
        //require_once(base_path().'/vendor/autoload.php');
        $photo=new Photo();
        $record=$photo->getPhotoById($id);
        
        $image_file = public_path().'/photos/'.$record['path'];
     
        echo (new TesseractOCR($image_file))->run();

    }
}
