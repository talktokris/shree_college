<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view("admin.galleryCategoriesManage");


    }
}
