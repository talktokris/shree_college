<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    public function gallery(){

        return view("public.galleryPage");
    
    
    }
}
