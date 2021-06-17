<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'name_patient', 'surname_patient', 'text_patient', 'email_patient'
    ];
}
