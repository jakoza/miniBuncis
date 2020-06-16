<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guest extends Model
{
    protected $fillable = ['guest_name','guest_position','guest_phone_number'];
    public function company(){
        return $this->belongsTo('App\company');
    }
}
