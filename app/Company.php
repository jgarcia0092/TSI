<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [

    ];
    protected $table = 'company';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo(User::class,'id','user_id');
    }
}
