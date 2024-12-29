<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use App\Models\SalonBooking;
use Illuminate\Http\Request;
use App\Models\SalonTreatment;
use Illuminate\Support\Facades\Validator;

class SalonController extends Controller
{
    public function getTreatment(){
        $treatments = SalonTreatment::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Data Treatment',
            'dataset' => $treatments,
        ], 200);
    }

    public function getBooking(Request $request){
        $booking = SalonBooking::where('user_id', $request->user_id)->get();
        if($booking->isEmpty()){
            return response()->json([
                'status' => 'error',
                'message' => 'Data Booking Not Found',
            ], 404);
        }

        else {
            return response()->json([
                'status' => 'success',
                'message' => 'Data Booking',
                'dataset' => $booking,
            ], 200);
        }
    }

    public function createBooking(Request $request){
        $validatedData = Validator::make($request->all(), [
            'salon_id' => 'required|integer',
            'user_id' => 'required|integer',
            'treatment_id' => 'required|integer',
        ]);

        if($validatedData->fails()){
            return response()->json([
                'status' => 'error',
                'message' => 'Validation Error',
                'errors' => $validatedData->errors(),
            ], 400);
        }

        else {
            $booking = new SalonBooking();
            $booking->salon_id = $request->salon_id;
            $booking->user_id = $request->user_id;
            $booking->treatment_id = $request->treatment_id;
            $booking->save();
    
            return response()->json([
                'status' => 'success',
                'message' => 'Booking Created Successfully',
                'dataset' => $booking,
            ], 200);
        }
    }

    public function getSalons(){
        $salons = Salon::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Data Salon',
            'dataset' => $salons,
        ], 200);
    }
}
