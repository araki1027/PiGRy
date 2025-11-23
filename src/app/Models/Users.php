<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    
    public function WeightLogs(){
        return $this->hasMany(WeightLogs::class);
    } 

    public function WeightTarget(){
        return $this->hasOne(WeightTarget::class);
    }
}
