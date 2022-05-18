<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    //


    public function aboutShree(){

        return view("public.aboutShreePage");
    
    
    }


    public function shreeTeam(){

        return view("public.shreeTeamPage");
    
    
    }


    public function shreeCertification(){

        return view("public.shreeCertificationPage");
    
    
    }
}
