<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected $fillable = [

    ];
    protected $table = 'shipping';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class,'id','user_id');
    }

}
