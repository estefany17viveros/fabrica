<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class couser extends Model
{
    public function teacher(){
        return $this->belongsToMany(teacher::class);
    }
    public function area(){
        return $this->hasMany(area::class);
    }
    public function training_center(){
        return $this->hasMany(training_center::class);
    }
    public function aprendiz(){
        return $this->belongsToMany(aprendiz::class);
}
}