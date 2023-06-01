<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{

    protected $fillable = [

    ];
    protected $table = 'billing';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class,'id','user_id');
    }

}
