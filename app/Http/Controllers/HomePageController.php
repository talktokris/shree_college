<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News_list;

class HomePageController extends Controller
{
    //


    public function index(){

        $newsDataLimit= News_list::where([['status','=',1],['home_page_status','=',1]])->orderBy('updated_at', 'DESC')->limit(5)->get();


    return view("public.homePage")->with(compact('newsDataLimit', $newsDataLimit));


    }
}