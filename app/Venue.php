<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    protected $fillable = [

    ];
    protected $table = 'venue';
    public $timestamps = true;

    public function event(){
        return $this->belongsTo(UpcomingEvent::class,'venue_id','id');
    }
}
