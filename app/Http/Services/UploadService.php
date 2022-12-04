<?php

namespace App\Http\Services;
use Illuminate\Http\Request;


class UploadService
{
    public function store($request){

        if($request->hasFile('avatar')){

            try{
                $file = $request->file('avatar');

                $name = $file->getClientOriginalName();

                $pathFull='uploads';
                $request->file('avatar')->storeAs(
                    'public/'.$pathFull, $name
                );

                $localVar = "http://127.0.0.1:8000";

                return $localVar . '/storage/'.$pathFull.'/'.$name;
            }catch (\Exception $error){
                return false;
            }

        }
        
        // if($request->hasFile('file')){

        //     try{
        //         $file = $request->file('file');

        //         $name = $file->getClientOriginalName();

        //         $pathFull='uploads/'.date("Y/m/d");

        //         $file->storeAs(
        //             'public/'.$pathFull, $name
        //         );

        //         return  '/storage/'.$pathFull.'/'.$name;

        //     }catch (\Exception $error){
        //         return false;
        //     }
        // }
    }

}