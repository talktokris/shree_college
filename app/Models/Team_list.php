<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team_list extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'job_scope',
        'facebook_link',
        'twitter_link',
        'email',
        'image',
        'status'
    ];
}
