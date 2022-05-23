<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery_images_list extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail_img',
        'large_img',
        'catagory_name',
    ];
}
