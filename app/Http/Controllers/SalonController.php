<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalonTreatment;

class SalonController extends Controller
{
    public function getTreatment(){
        $treatments = SalonTreatment::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Data Treatment',
            'data' => $treatments,
        ], 200);
    }

    public function getBooking(){

    }
}
