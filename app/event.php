<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $fillable = ['event_name','event_type','event_date','event_location','event_duration']; 
}
