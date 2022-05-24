<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News_list;


class NewsPageController extends Controller
{
    //

    public function news(){

        $newsDataLimit= News_list::where('status','=',1)->orderBy('updated_at', 'DESC')->limit(5)->get();
        $newsData= News_list::where('status','=',1)->orderBy('updated_at', 'DESC')->get();

        return view("public.newsPage")->with(compact("newsDataLimit"))->with(compact("newsData"));


    }
}
