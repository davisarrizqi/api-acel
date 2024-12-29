<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalonTreatment extends Model
{
    public function salon(){
        return $this->belongsTo(Salon::class);
    }
}
