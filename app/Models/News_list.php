<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_list extends Model
{
    use HasFactory;



    protected $fillable = [
        'news_title',
        'news_content',
        'status',
        
    ];
}
