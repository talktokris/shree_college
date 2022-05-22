<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact_list;

class AdminContactController extends Controller
{
    //


    public function createContacts(){
        return view("admin.contactCreate");
    }

    public function manageContacts(){

        $ContactData = Contact_list::get();
        return view("admin.contactManage")->with(compact("ContactData"));
    }


    public function deleteContact(Request $request, $hash_id=null){


        $teamData = Contact_list::get();
        $role = Auth::user()->role;

          if(($role>1) &&($hash_id!='')){

              $id = base64_decode($hash_id);
              $deleteNews = Contact_list::where('id', '=', $id)->delete();

              if($deleteNews){   return redirect('/admin/manage-contacts')->with(compact("teamData"))->with('flash_message_success', 'Contact deleted sucessfully');  }
              else {   return redirect('/admin/manage-contacts')->with(compact("teamData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }


          }



          return view("admin.contactManage")->with(compact("teamData"));


    }





    public function createContact(Request $request){

       // $ContactData= Contact_list::get();

        if($request->isMethod('post')){
            $data=$request->all();

        $validatedData = $request->validate([
            'organization_name' => 'required|string|min:10|max:150',
            'address' => 'required|string|min:5|max:100',
            'email_one' => 'required|email',
            'email_two' => 'email',
            'phone_one' => 'required|string|min:2|max:14',
            'phone_two' => 'nullable|max:14',
            'phone_three' => 'nullable|max:14',
            'phone_four' => 'nullable|max:14',
            'status' => 'required|integer|between:0,10'
            ]);
                    // $email = Auth::user()->email;
                    // $ip= request()->ip();
        //    name 	address 	post 	facebook_link 	twitter_link 	email 	status

            $data= $request->all();
            $ContactSave = new Contact_list;
            $ContactSave->organization_name= $data['organization_name'];
            $ContactSave->address= $data['address'];
            $ContactSave->google_map_link= $data['google_map_link'];
            $ContactSave->email_one= $data['email_one'];
            $ContactSave->email_two= $data['email_two'];
            $ContactSave->phone_one= $data['phone_one'];
            $ContactSave->phone_two= $data['phone_two'];
            $ContactSave->phone_three= $data['phone_three'];
            $ContactSave->phone_four= $data['phone_four'];

            $ContactSave->status= $data['status'];
            $ContactSave->save();

            if(!$ContactSave){      return redirect('/admin/create-contact')->with('flash_message_error', 'Internal error. Please email to support@shreecollege.com'); }
            else {   return redirect('/admin/create-contact')->with('flash_message_success', 'New contact created successfully');}

        }
        else {  return view("admin.contactCreate");  }


    }


    public function editContact(Request $request, $hash_id=null){
        $id= base64_decode($hash_id);
        $ContactDataSingle = Contact_list::where('id', $id)->get();
        $ContactData = Contact_list::get();
         $role = Auth::user()->role;



            if ('POST' === $request->getMethod()){

                $validatedData = $request->validate([
                    'organization_name' => 'required|string|min:10|max:150',
                    'address' => 'required|string|min:5|max:100',
                    'email_one' => 'required|email',
                    'email_two' => 'email',
                    'phone_one' => 'required|string|min:2|max:14',
                    'phone_two' => 'nullable|max:14',
                    'phone_three' => 'nullable|max:14',
                    'phone_four' => 'nullable|max:14',
                    'status' => 'required|integer|between:0,10'
                    ]);

                $data = $request->all();

            if(($role>1) &&($hash_id!='')){

                    $ContactEdit = new Contact_list;

                    $id= base64_decode($hash_id);

                    $ContactEdit = Contact_list::where("id", $id)->update(["organization_name" => $data['organization_name'],"address" => $data['address'],"google_map_link"=>$data['google_map_link'],"email_one" => $data['email_one'],"email_two" => $data['email_two'],"phone_one" => $data['phone_one'],"phone_two" => $data['phone_two'],"phone_three" => $data['phone_three'],"phone_four" => $data['phone_four'],"status" => $data['status']]);


                       //  $ContactEdit->save()->where("id", $id);

                        if($ContactEdit){   return redirect("/admin/manage-contacts")->with(compact("ContactData"))->with('flash_message_success', ' Contact Info updated successfully');  }
                        else {   return redirect("/admin/manage-contacts")->with(compact("ContactData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

                }




            } else {  return view("admin.contactEdit")->with(compact("ContactData"))->with(compact("ContactDataSingle")); }






    }


}
