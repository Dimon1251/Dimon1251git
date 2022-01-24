<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
   public function upload(Request $request)
   {
    $path = $request->file('image')->store('storage/app/public/uploads','public');
    return view('default', ['path'=>$path]);

   }
}
