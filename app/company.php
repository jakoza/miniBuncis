<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = ['event_id','company_name'];

    public function event(){
        return $this->belongsTo('App\event');
    }
}
