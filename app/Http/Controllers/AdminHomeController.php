<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    //

    public function index(){

        return view("admin.dashboard");


    }



    public function register(){

        return view("register");


    }


    public function login(){

        return view("login");


    }





}
