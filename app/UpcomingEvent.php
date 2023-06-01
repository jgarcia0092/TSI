<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpcomingEvent extends Model
{
    protected $fillable = [

    ];
    protected $table = 'upcoming_event';
    public $timestamps = true;


    public function venue(){
        return $this->hasOne(Venue::class,'id','venue_id');
    }

    public function tradeshow(){
        return $this->hasOne(TradeShow::class,'id','trade_show_id');
    }
}
