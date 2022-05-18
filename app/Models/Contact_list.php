<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_list extends Model
{
    use HasFactory;



    protected $fillable = [
        'organization_name',
        'address',
        'google_map_link',
        'email_one',
        'email_two',
        'phone_one',
        'phone_two',
        'phone_three',
        'phone_four',
        'status',
    ];
}
