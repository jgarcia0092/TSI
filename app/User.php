<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function billing(){
        return $this->hasOne(Billing::class,'user_id','id');
    }

    public function company(){
        return $this->hasOne(Company::class,'user_id','id');
    }

    public function shipping(){
        return $this->hasMany(Shipping::class,'id','user_id');
    }

    public function events(){
        return $this->belongsToMany(Event::class,'user_event','user_id','event_id');
    }


}
