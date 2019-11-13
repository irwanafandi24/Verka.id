<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $table = "customer";

  protected $fillable = [
    'name', 'major', 'phone', 'line', 'address'
  ];

  public function order(){
    return $this->hasOne('App\Order', 'order', 'customer_id', 'photographer_id');
  }
}
