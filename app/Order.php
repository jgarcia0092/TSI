<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [

    ];
    protected $table = 'order';
    public $timestamps = true;

    public function event(){
        return $this->hasOne(Event::class,'id','event_id');
    }

    public function shipments(){
        return $this->hasMany(Shipment::class,'order_id','id');
    }

    public function charges(){
        return $this->hasMany(Charge::class,'order_id','id');
    }

}
