<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotografer extends Model
{
    protected $table = "fotografer";

    protected $fillable = [
      'nama', 'fotografer_img', 'slot1', 'slot2', 'foto'
    ];
}
