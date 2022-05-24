<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact_list;

class ContactPageController extends Controller
{
    //


    public function contact(){

        $contactData = Contact_list::where([['status','=', 1],['id','>',1]])->get();
       // dd($contactData);
        $contactHq = Contact_list::where('id','=',1)->get();

        return view("public.contactPage")->with(compact("contactData"))->with(compact("contactHq"));


    }
}
