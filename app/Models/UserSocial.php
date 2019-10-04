<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    protected $fillable = [
    'user_id',
    'social_network',
    'social_id',
    'social_email',
    'social_avatar'
    ];

}
