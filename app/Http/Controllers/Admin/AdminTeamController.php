<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Team_list;

class AdminTeamController extends Controller
{
    //


    public function createTeamMembers(){

        return view("admin.teamCreateMember");


    }

    public function manageTeamMembers(){

        $teamData = Team_list::get();

        return view("admin.teamManageMember")->with(compact("teamData"));


    }


    public function deleteTeamMember(Request $request, $hash_id=null){


        $teamData = Team_list::get();
        $role = Auth::user()->role;

          if(($role>1) &&($hash_id!='')){

              $id = base64_decode($hash_id);
              $deleteNews = Team_list::where('id', '=', $id)->delete();

              if($deleteNews){   return redirect('/admin/manage-team-members')->with(compact("teamData"))->with('flash_message_success', 'Team member deleted sucessfully');  }
              else {   return redirect('/admin/manage-team-members')->with(compact("teamData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }


          }



          return view("admin.teamManageMember")->with(compact("teamData"));


    }





    public function createTeamMember(Request $request){

       // $teamMemberData= Team_list::get();

        if($request->isMethod('post')){
            $data=$request->all();

        $validatedData = $request->validate([
            'name' => 'required|string|min:10|max:150',
            'job_scope' => 'required|string|min:5|max:100',
            'post' => 'required|string|min:2|max:50',
            'email' => 'required|email',
            'status' => 'required|integer|between:0,10'
            ]);
                    // $email = Auth::user()->email;
                    // $ip= request()->ip();
        //    name 	job_scope 	post 	facebook_link 	twitter_link 	email 	status

            $data= $request->all();
            $TeamMemberSave = new Team_list;
            $TeamMemberSave->name= $data['name'];
            $TeamMemberSave->job_scope= $data['job_scope'];
            $TeamMemberSave->post= $data['post'];
            $TeamMemberSave->facebook_link= $data['facebook_link'];
            $TeamMemberSave->twitter_link= $data['twitter_link'];
            $TeamMemberSave->email= $data['email'];
            $TeamMemberSave->status= $data['status'];
            $TeamMemberSave->save();

            if(!$TeamMemberSave){      return redirect('/admin/create-team-member')->with('flash_message_error', 'Internal error. Please email to support@shreecollege.com'); }
            else {   return redirect('/admin/create-team-member')->with('flash_message_success', 'New team created successfully');}

        }
        else {  return view("admin.teamCreateMember");  }


    }


    public function editTeamMember(Request $request, $hash_id=null){
        $id= base64_decode($hash_id);
        $teamMemberDataSingle = Team_list::where('id', $id)->get();
        $teamMemberData = Team_list::get();
         $role = Auth::user()->role;



            if ('POST' === $request->getMethod()){

                $validatedData = $request->validate([
                    'name' => 'required|string|min:10|max:150',
                    'job_scope' => 'required|string|min:5|max:100',
                    'post' => 'required|string|min:2|max:50',
                    'email' => 'required|email',
                    'status' => 'required|integer|between:0,10'
                    ]);

                $data = $request->all();

            if(($role>1) &&($hash_id!='')){

                    $TeamMemberEdit = new Team_list;

                    $id= base64_decode($hash_id);

                    $TeamMemberEdit = Team_list::where("id", $id)->update(["name" => $data['name'],"job_scope" => $data['job_scope'],"post" => $data['post'],"email" => $data['email'],"facebook_link" => $data['facebook_link'],"twitter_link" => $data['twitter_link'],"status" => $data['status']]);


                       //  $TeamMemberEdit->save()->where("id", $id);

                        if($TeamMemberEdit){   return redirect("/admin/manage-team-members")->with(compact("teamMemberData"))->with('flash_message_success', ' Team member Info updated successfully');  }
                        else {   return redirect("/admin/manage-team-members")->with(compact("teamMemberData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

                }




            } else {  return view("admin.teamEditMember")->with(compact("teamMemberData"))->with(compact("teamMemberDataSingle")); }






    }

}
