<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery_category_list;
use App\Models\Gallery_images_list;



class GalleryPageController extends Controller
{
    public function gallery(){

        $galleryCatData = Gallery_category_list::get();
        $galleryImagesData = Gallery_images_list::get();

        return view("public.galleryPage")->with(compact("galleryCatData"))->with(compact("galleryImagesData"));


    }
    public function galleryType(Request $request, $hash_id=null){

        $type = base64_decode($hash_id);

        $galleryCatData = Gallery_category_list::get();
        $galleryImagesData = Gallery_images_list::where('catagory_name','=', $type)->get();

        return view("public.galleryPage")->with(compact("galleryCatData"))->with(compact("galleryImagesData"));


    }
}
