<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Gallery_category_list;
use App\Models\Gallery_images_list;
use Intervention\Image\Facades\Image;

class AdminGalleryController extends Controller
{
    //

    public function uploadImages(Request $request, $hash_id=null){

        $galleryCatData= Gallery_category_list::get();
        $galleryDataAll= Gallery_images_list::where('status','=',1)->get();
     //   dd($galleryDataAll);


       // $gallryImgLast= Gallery_images_list::latest()->first();
       // $next_ID =$gallryImgLast['id']+1;

        $savingPath='assets/images/gallery';

        if ('POST' === $request->getMethod()){

            $validatedData= $request->validate([
                'image_name'=>'required|mimes:png,jpg,jpeg|max:8048',

            ]);

            $data = $request->all();




            $imageName = $data['image_name'];
            $catagory_name = $data['catagory_name'];

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

            $imageSave = new Gallery_images_list;
            $imageSave->thumbnail_img = $thumbImgName;
            $imageSave->large_img = $largeImgName;
            $imageSave->catagory_name = $catagory_name;
            $imageSave->status = 1;
            $imageSave->save();

            /* Saving the images end */


            $get_id = $imageSave->id;

            $newPath= $savingPath.'/'.$get_id;

          if (!file_exists($newPath)) {  mkdir($newPath, 0777, true);  }





            $img = Image::make($imageName)->fit(800, 514, function ($constraint) {
                $constraint->upsize();
            });
             $img->save($newPath.'/'.$thumbImgName, 60);



            // Large Image Save
            $img3 = Image::make($imageName)->fit(1800, 1157, function ($constraint) {
                $constraint->upsize();
            });

            $img3->save($newPath.'/'.$largeImgName, 60);


              //  $imageSave = Gallery_images_list::where("id", $get_id)->update(["thubnail_img" => $midImgName,"large_img" => $largeImgName]);




                if($imageSave){
                     return redirect("admin/manage-gallery-images")->with(compact("galleryCatData"))->with('flash_message_success', ' Image uploaded successfully');  }
                else {   return  redirect("admin/manage-gallery-images")->with(compact("galleryCatData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }





          //  dd($data);





        }



        return view("admin.galleryImageUpload")->with(compact("galleryCatData"));



    }

    public function deleteGalleryImage($hash_id=null){

        $deleteImagData= Gallery_images_list::where('id','=', base64_decode($hash_id))->get();



        if($hash_id!=''){

            $id = base64_decode($hash_id);



            $img_location= 'assets/images/gallery/'.$id;

            foreach($deleteImagData as $dRow){

               $imgDelNmOne = $img_location.'/'.$dRow->large_img;
             //  dd($imgDelNmOne);
              if (file_exists($imgDelNmOne)) { unlink($imgDelNmOne);  }


               $imgDelNmThree = $img_location.'/'.$dRow->thumbnail_img;
               if (file_exists($imgDelNmThree)) { unlink($imgDelNmThree);  }

            }



            $deleteTourType = Gallery_images_list::where('id', '=', $id)->delete();


            if($deleteTourType){
                return redirect("admin/manage-gallery-images")->with('flash_message_success', ' Image deleted successfully');  }
           else {   return  redirect("admin/manage-gallery-images")->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }



        }

    }

    public function manageGalleryImages(Request $request, $hash_id=null){

        $galCatData= Gallery_category_list::get();



        if ('POST' === $request->getMethod()){

            $data = $request->all();
         //   dd($data);

            $catagory_name=$data['catagory_name'];

            if($catagory_name=="all"){

                $galleryDataAll= Gallery_images_list::where('status','=',1)->get();

            }else {
            $galleryDataAll= Gallery_images_list::where('catagory_name','=',$catagory_name)->get();


            }




        } else{

            $galleryDataAll= Gallery_images_list::where('status','=',1)->get();

        }

        return view("admin.galleryManageImages")->with(compact("galCatData"))->with(compact("galleryDataAll"));



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
