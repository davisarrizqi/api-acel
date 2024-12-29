<?php

namespace App\Models;

use App\Models\Salon;
use Illuminate\Database\Eloquent\Model;

class SalonBooking extends Model
{
    public function salon(){
        return $this->belongsTo(Salon::class);
    }

    public function treatments(){
        return $this->belongsTo(SalonTreatment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
