<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class fileUploadController extends Controller
{
    //
    function formUpload(){
        return View('fileUpload');
    }

    function fileupload_data(Request $req){

        $file = $req->file('file');
   
        //Display File Name
        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';
    
        //Display File Extension
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';
    
        //Display File Real Path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
    
        //Display File Size
        echo 'File Size: '.$file->getSize();
        echo '<br>';
    
        //Display File Mime Type
        echo 'File Mime Type: '.$file->getMimeType();
    
        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

        echo "<pre>";
        print_r($req->file());
        print_r($_FILES);
        print_r($_POST);

    }
}
