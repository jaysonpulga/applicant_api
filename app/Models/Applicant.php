<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'user_id',
        'page_id',
        'first_name',
        'last_name',
        'gender',
        'profile_pic',
        'subscribed'
    ];
}
