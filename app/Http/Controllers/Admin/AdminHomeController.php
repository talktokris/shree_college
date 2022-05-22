<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //

    public function index(){

        return view("admin.adminDashboard");


    }



    public function register(){

        return view("register");


    }


    public function login(){

        return view("login");


    }

}
