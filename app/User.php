<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public function requests() {
        return $this->hasMany('App\Request');
    }
    
    public function boosts() {
        return $this->belongsToMany('App\Boost');
    }

    public function specializations() {
        return $this->belongsToMany('App\Specialization');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'address', 'street_number', 'city', 'county', 'password', 'email', 'profile_pic', 'phone_number', 'cv'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',];
}
