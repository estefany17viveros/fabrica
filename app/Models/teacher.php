<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    public function couser(){
        return $this->belongsToMany(couser::class);
    }
    public function training_center(){
        return $this->belongsTo(training_center::class);
    }
    public function area(){
        return $this->belongsTo(area::class);
    }
}
