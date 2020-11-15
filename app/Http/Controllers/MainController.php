<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MainController extends Controller
{
    public function getImage(Request $request){
        $name = $request->full_name;
        $img = Image::make(public_path('img/Cert.jpg'));
        $img->text("{{$name}}", 1200, 950, function($font){
            $font->size(200);
            $font->align('center');
        });
        $img->save(public_path("img/$name.jpg"));

        return response()->download(public_path("img/$name.jpg"));;
    }
}
