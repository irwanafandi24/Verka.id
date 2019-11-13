<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    protected $table = "photographer";

    protected $fillable = [
      'name', 'quot', 'email', 'line', 'phone', 'location', 'photo', 'status', 'schedule_1', 'schedule_2', 'schedule_3'
    ];

    public function order(){
      return $this->hasOne('App\Order');
    }
}
