<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery_category_list extends Model
{
    use HasFactory;

    protected $fillable = [
        'catagory_name'
    ];
}
