<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery_category_list;

class AdminGalleryController extends Controller
{
    //

    public function uploadImages(){

        return view("admin.galleryImageUpload");



    }

    public function manageGalleryImages(){

        return view("admin.galleryManageImages");



    }

    public function manageGalleryCategories(){


        $galleryCatData= Gallery_category_list::get();

        return view("admin.galleryCategoriesManage")->with(compact("galleryCatData"));


    }

    public function deleteGalleryCategory(Request $request, $hash_id=null){


        $newsData = Gallery_category_list::get();
        $role = Auth::user()->role;

          if(($role>1) &&($hash_id!='')){

              $id = base64_decode($hash_id);
              $deleteNews = Gallery_category_list::where('id', '=', $id)->delete();

              if($deleteNews){   return redirect('/admin/manage-gallery-categories')->with(compact("newsData"))->with('flash_message_success', 'Gallery category deleted sucessfully');  }
              else {   return redirect('/admin/manage-gallery-categories')->with(compact("newsData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }


          }



          return view("admin.newsSearchPosts")->with(compact("newsData"));


    }





    public function createGalleryCategory(Request $request){

        $galleryCatData= Gallery_category_list::get();

        if($request->isMethod('post')){
            $data=$request->all();


                $validatedData = $request->validate([
                    'catagory_name' => 'required|string|min:3|max:150',

                    ]);
                    // $email = Auth::user()->email;
                    // $ip= request()->ip();

            $data= $request->all();
            $galleryCategorySave = new Gallery_category_list;
            $galleryCategorySave->catagory_name= $data['catagory_name'];
            $galleryCategorySave->save();

            if(!$galleryCategorySave){      return redirect('/admin/manage-gallery-categories')->with('flash_message_error', 'Internal error. Please email to support@shreecollege.com'); }
            else {   return redirect('/admin/manage-gallery-categories')->with('flash_message_success', 'New gallery category created successfully');}

        }
        else {  return view("admin.galleryCategoriesManage")->with(compact("galleryCatData"));  }


    }


    public function editGalleryCategory(Request $request, $hash_id=null){
        $id= base64_decode($hash_id);
        $galleryCatDataSingle = Gallery_category_list::where('id', $id)->get();
        $galleryCatData = Gallery_category_list::get();
         $role = Auth::user()->role;


            if ('POST' === $request->getMethod()){

              $validatedData = $request->validate([
                'catagory_name' => 'required|string|min:5|max:150',
                ]);

                $data = $request->all();

            if(($role>1) &&($hash_id!='')){

                    $galleryCategoryEdit = new Gallery_category_list;

                    $id= base64_decode($hash_id);

                    $galleryCategoryEdit = Gallery_category_list::where("id", $id)->update(["catagory_name" => $data['catagory_name']]);


                       //  $galleryCategoryEdit->save()->where("id", $id);

                        if($galleryCategoryEdit){   return redirect("/admin/manage-gallery-categories")->with(compact("galleryCatData"))->with('flash_message_success', ' Gallery Category updated successfully');  }
                        else {   return redirect("/admin/manage-gallery-categories")->with(compact("galleryCatData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

                }




            } else {  return view("admin.galleryCategoriesEdit")->with(compact("galleryCatData"))->with(compact("galleryCatDataSingle")); }






    }
}
