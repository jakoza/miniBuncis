<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    protected $fillable = ['event_id','guest_name','guest_position','guest_phone_number'];
    public function event(){
        return $this->belongsTo('App\event');
    }
}
