<?php 
namespace Sheremet\Adminpanel;
use \Illuminate\Routing\Controller;
use \Illuminate\Support\Facades\Input;
use \Illuminate\Support\Facades\Response;

class UploadfileController extends \BaseController {

  public function imageUpload(){
    $file = Input::file('file');
    $destinationPath = 'uploads';
    // If the uploads fail due to file system, you can try doing public_path().'/uploads' 
    //$filename = str_random(12);
    $filename = $file->getClientOriginalName();
    $extension =$file->getClientOriginalExtension();
    $upload_success = Input::file('file')->move($destinationPath, $filename);
//    print_r($filename);
//die();
    if( $upload_success ) {
      $array = array(
        'filelink' => '/uploads/'.$filename,
        'filename' => $filename
        );
      return Response::json($array);
    } else {
       return Response::json('error', 400);
    }
  }
}