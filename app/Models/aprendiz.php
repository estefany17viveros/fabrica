<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aprendiz extends Model
{
  public function couser(){
        return $this->hasMany(couser::class);
    }
    public function computer(){
        return $this->belongsTo(computer::class);
    }
}
