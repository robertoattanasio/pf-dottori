<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = ['user_id', 'name', 'surname', 'phone_number', 'created_at', 'expires_at'];
}
