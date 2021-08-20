<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileName;
use App\Models\GifName;
use App\Models\GifName2;
use App\Models\GifName3;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        //  VIDEO UPLOAD METHOD
        if(!empty($request->videoSelect)){

            fileName::whereNotNull('id')->delete();

            $request->file('videoSelect')->store('public');  
            $videoFileName = $request->videoSelect->hashName();
            
            $fileName = new FileName;
            $fileName->video_name = $videoFileName;
            $fileName->save();
        }

        //  GIF UPLOAD METHOD START
        if(!empty($request->gif1)){

            GifName::whereNotNull('id')->delete();

            $request->file('gif1')->store('public');  
            $gifFileName1 = $request->gif1->hashName();

            $GifName = new GifName;
            $GifName->name = $gifFileName1;
            $GifName->save();
 
        }
        if(!empty($request->gif2)){

            GifName2::whereNotNull('id')->delete();

            $request->file('gif2')->store('public');  
            $gifFileName2 = $request->gif2->hashName();

            $GifName2 = new GifName2;
            $GifName2->name = $gifFileName2;
            $GifName2->save();
 
        }
        if(!empty($request->gif3)){

            GifName3::whereNotNull('id')->delete();

            $request->file('gif3')->store('public');  
            $gifFileName3 = $request->gif3->hashName();

            $GifName3 = new GifName3;
            $GifName3->name = $gifFileName3;
            $GifName3->save();

        }
        //  GIF UPLOAD METHOD END


    }
}
