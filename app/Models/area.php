<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    public function teacher(){
        return $this->hasmany(teacher::class);
    }
    public function couser(){
        return $this->hasmany(couser::class);
    }
}
