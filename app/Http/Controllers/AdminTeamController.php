<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    //


    public function createTeamMember(){

        return view("admin.teamCreateMember");


    }

    public function manageTeamMembers(){

        return view("admin.teamManageMember");


    }

}
