<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team_list;
use App\Models\News_list;

class AboutPageController extends Controller
{
    //


    public function aboutShree(){

        return view("public.aboutShreePage");


    }


    public function shreeTeam(){


        $newsDataLimit= News_list::where('status','=',1)->orderBy('updated_at', 'DESC')->limit(5)->get();
        $teamData = Team_list::where('status','=',1)->orderBy('job_scope', 'ASC')->get();

        return view("public.shreeTeamPage")->with(compact("teamData"))->with(compact("newsDataLimit"));;


    }


    public function shreeCertification(){
        $newsDataLimit= News_list::where('status','=',1)->orderBy('updated_at', 'DESC')->limit(5)->get();

        return view("public.shreeCertificationPage")->with(compact("newsDataLimit"));


    }
}
