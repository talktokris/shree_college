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

    public function newsCat($cat=null){



        if($cat=='general-notices'){ $catStrig='General Notices'; $headTitle='General Notices';}
        elseif($cat=='examination-notices'){ $catStrig='Examination Notices'; $headTitle='Examination Notices';}
        elseif($cat=='news-events'){ $catStrig='News Events'; $headTitle='News & Events';}
        else {$catStrig=''; $headTitle='News';}
       // $catStrig=strval($catStrig);


        $newsDataLimit= News_list::where([['news_category','=',"$catStrig"],['status','=',1]])->orderBy('updated_at', 'DESC')->limit(5)->get();

        $newsData= News_list::where([['news_category','=',"$catStrig"],['status','=',1]])->orderBy('updated_at', 'DESC')->get();
 //dd($newsData);
        return view("public.newsPage")->with(compact("newsDataLimit"))->with("headTitle", $headTitle)->with(compact("newsData"));


    }


}