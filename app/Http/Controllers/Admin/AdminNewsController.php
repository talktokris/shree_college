<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News_list;
use Intervention\Image\Facades\Image;


class AdminNewsController extends Controller
{
    //


    public function createNewsPost(Request $request){



        if($request->isMethod('post')){
            $data=$request->all();



	//id 	news_title 	news_content 	status

        $validatedData = $request->validate([
            'news_category' => 'required|string|min:5|max:150',
            'news_title' => 'required|string|min:10|max:150',
            'news_content' => 'required|string|min:20|max:1000',
            'home_page_status' => 'required|integer|between:0,10',
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
            $newsSave->news_category= $data['news_category'];
            $newsSave->home_page_status= $data['home_page_status'];
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
                'news_category' => 'required|string|min:5|max:150',
                'news_title' => 'required|string|min:10|max:150',
                'news_content' => 'required|string|min:20|max:1000',
                'home_page_status' => 'required|integer|between:0,10',
                'status' => 'required|integer|between:0,10'
                ]);

                $data = $request->all();

              //  dd($data);

              if(($role>1) &&($hash_id!='')){
              //  if($data['news_title']!=''){

                        $newsEditSave = new News_list;

                        $id= base64_decode($hash_id);



                         $newsEditSave = News_list::where("id", $id)->update(["news_category" => $data['news_category'],"home_page_status" => $data['home_page_status'],"news_title" => $data['news_title'],"news_content" => $data['news_content'],"status" => $data['status']]);


                       //  $newsEditSave->save()->where("id", $id);

                        if($newsEditSave){   return redirect("admin/search-news-posts")->with(compact("newsData"))->with('flash_message_success', ' News  updated successfully');  }
                        else {   return redirect("admin/search-news-posts")->with(compact("newsData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

                }




            }
            else {  return view("admin.newsEditPost")->with(compact("newsData")); }


    }


    public function newsImageUpload(Request $request, $hash_id=null){

        $News_listData= News_list::where('id','=', base64_decode($hash_id))->get();
        $id= base64_decode($hash_id);

        $savingPath='assets/images/news';

        if ('POST' === $request->getMethod()){

            $validatedData= $request->validate([
                'image_name'=>'required|mimes:png,jpg,jpeg|max:8048',

            ]);

            $data = $request->all();




            $imageName = $data['image_name'];

           // $get_id = $next_ID;
            $maxOriginalNameSize=20;
            $ImageNameOrg=$imageName->getClientOriginalName();
            if(strlen($ImageNameOrg) > $maxOriginalNameSize){ $ImageNewNameSet=substr($ImageNameOrg, 0, $maxOriginalNameSize);
                $ImageNewName= $ImageNewNameSet.'.'.$imageName->getClientOriginalExtension();
             }
            else { $ImageNewName = $ImageNameOrg;}// shorting the image name;

            $getImageName= date('Y-m-d-His').'-'.$ImageNewName;

            /* Saving the images Start */

            $thumbImgName='thumb-'.$getImageName;
            $largeImgName='large-'.$getImageName;

            $get_id = $id;

            $newPath= $savingPath.'/'.$get_id;

          if (!file_exists($newPath)) {  mkdir($newPath, 0777, true);  }



          $img = Image::make($imageName)->fit(200, 200, function ($constraint) {
            $constraint->upsize();
        });
         $img->save($newPath.'/'.$thumbImgName, 60);



        // Large Image Save
        $img3 = Image::make($imageName)->fit(1000, 1000, function ($constraint) {
            $constraint->upsize();
        });

        $img3->save($newPath.'/'.$largeImgName, 60);

                $imageSave = News_list::where("id", $get_id)->update(["thumbnail_img" => $thumbImgName,"large_img" => $largeImgName]);

                if($imageSave){
                     return redirect("admin/search-news-posts")->with('flash_message_success', ' Image uploaded successfully');  }
                else {   return  redirect("admin/search-news-posts")->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }


        }



        return view("admin.newsImageUpload")->with(compact("News_listData"))->with('hash_id', $hash_id);



    }

}