<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boost extends Model
{
    public function users() {
        return $this->belongsToMany('App\User');
    }

    protected $fillable = [
        'boost_name', 'hours', 'price'];
}
