<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursePageController extends Controller
{
    //


    public function acca(){

        return view("public.accaPage");
    
    
    }


    public function cima(){

        return view("public.cimaPage");
    
    
    }
}
