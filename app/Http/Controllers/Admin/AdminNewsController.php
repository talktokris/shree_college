<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News_list;

class AdminNewsController extends Controller
{
    //


    public function createNewsPost(Request $request){



        if($request->isMethod('post')){
            $data=$request->all();



	//id 	news_title 	news_content 	status

        $validatedData = $request->validate([
            'news_title' => 'required|string|min:10|max:150',
            'news_content' => 'required|string|min:20|max:1000',
            'status' => 'required|integer|between:0,10'
            ]);


         //   $user_id = Auth::user()->id;
            $email = Auth::user()->email;

            $ip= request()->ip();
           // $RandumSting= strtoupper(substr(md5(uniqid(rand(1,9))), 0, 8));
           // $message_thread=$user_id.'-'.$RandumSting;
            //$TimeStamp=date('Y-m-d H:i:s');

            $data= $request->all();
            $newsSave = new News_list;
            $newsSave->news_title= $data['news_title'];
            $newsSave->news_content= $data['news_content'];
            $newsSave->status= $data['status'];
            $newsSave->posted_user_email= $email;
            $newsSave->save();

          //  dd($newsSave);


            if(!$newsSave){      return redirect('/admin/create-news-post')->with('flash_message_error', 'Internal error. Please email to support@shreecollege.com'); }
            else {   return redirect('/admin/create-news-post')->with('flash_message_success', 'News created successfully');}

        }

        return view("admin.newsCreatePost");


    }

    public function searchNewsPosts(){

        $newsData = News_list::get();

        return view("admin.newsSearchPosts")->with(compact("newsData"));


    }

    public function deleteNewsPost(Request $request, $hash_id=null){

      //  $id= base64_decode($hash_id);

      $newsData = News_list::get();

      $role = Auth::user()->role;
     // $role=1;



        if(($role>1) &&($hash_id!='')){

          //  dd($role);

            $id = base64_decode($hash_id);


            $deleteNews = News_list::where('id', '=', $id)->delete();


            if($deleteNews){   return redirect('admin/search-news-posts')->with(compact("newsData"))->with('flash_message_success', 'News deleted sucessfully');  }
            else {   return redirect('admin/search-news-posts')->with(compact("newsData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }


        }



        return view("admin.newsSearchPosts")->with(compact("newsData"));


    }

    public function editNewsPost(Request $request, $hash_id=null){


        $id= base64_decode($hash_id);




        $newsData = News_list::where('id', $id)->get();
        // dd($newsData);

         $role = Auth::user()->role;


            if ('POST' === $request->getMethod()){

              //  dd($request);

              $validatedData = $request->validate([
                'news_title' => 'required|string|min:10|max:150',
                'news_content' => 'required|string|min:20|max:1000',
                'status' => 'required|integer|between:0,10'
                ]);




                $data = $request->all();

              //  dd($data);

              if(($role>1) &&($hash_id!='')){
              //  if($data['news_title']!=''){

                        $newsEditSave = new News_list;

                        $id= base64_decode($hash_id);



                         $newsEditSave = News_list::where("id", $id)->update(["news_title" => $data['news_title'],"news_content" => $data['news_content'],"status" => $data['status']]);


                       //  $newsEditSave->save()->where("id", $id);

                        if($newsEditSave){   return redirect("admin/search-news-posts")->with(compact("newsData"))->with('flash_message_success', ' News  updated successfully');  }
                        else {   return redirect("admin/search-news-posts")->with(compact("newsData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

                }




    }
    else {  return view("admin.newsEditPost")->with(compact("newsData")); }






      }

}
