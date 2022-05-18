<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNewsController extends Controller
{



        public function createNewsPost(){

            return view("admin.newsCreatePost");


        }

        public function searchNewsPosts(){

            return view("admin.newsSearchPosts");


        }


}
