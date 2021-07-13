<?php

namespace App\Http\Controllers;

use App\image;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    //

    public function index()
    {
        // $images = image::all();
        // return response()->json($images);
    }





    public function upload(Request $request)
    {
        $image = $request->file('file')->store('imageAPI');
        return ["result" => $image];
    }
}
