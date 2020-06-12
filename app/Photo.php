<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Carbon\Carbon;
class Photo extends Model
{
    protected $table='photos';
    protected $primaryKey="id";

    protected $fillable = ["title","path"];

    public function getPhoto()
    {
    	return $this->get();
    }
    public function getPhotoById($id)
    {
      return $this->where('id',$id)->first();
    }
    public function addPhoto($data)
    {
    	// dd($data);
      $newPhoto=new Photo();
      $newPhoto->title=$data['title'];
      $newPhoto->path=$data['path'];
      if($newPhoto->save())
      {
          return $newPhoto;
      }
      return false;
    }
}
