<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsPageController extends Controller
{
    //

    public function news(){

        return view("public.newsPage");
    
    
    }
}
