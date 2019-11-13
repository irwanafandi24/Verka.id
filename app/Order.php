<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";

    protected $fillable = [
      'customer_id', 'photographer_id', 'session', 'status'
    ];

    public function orderCus(){
      return $this->belongsTo('App\Customer');
    }

    public function orderPhoto(){
      return $this->belongsTo('App\Photographer');
    }
}
