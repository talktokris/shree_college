<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    //

    public function createContact(){
        return view("admin.contactCreate");
    }

    public function manageContacts(){
        return view("admin.contactManage");
    }




}
