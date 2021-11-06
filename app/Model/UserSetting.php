<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    protected $table = 'user_setting';
    protected $fillable = ['user_id','settings'];
}
