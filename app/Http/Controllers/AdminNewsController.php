<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    //

    use HasFactory;
    
    protected $fillable = [
        'transaction_nature',
        'transaction_type',
        'transaction_from_id',
        'from_user_short_name',
        'transaction_to_id',
        'earning_triger_id',
        'trigger_leader_bonus_name',
        'earning_name',
        'transaction_usd',
        'transaction_date',
        'transaction_status',
        'count_status',
    ];
}
