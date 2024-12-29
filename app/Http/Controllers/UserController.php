<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function indexPage(){
        return view('index');
    }

    public function getHandler(){
        return redirect()->route('login');
    }

    public function loginHandler(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return json_encode([
                'status' => 'success',
                'message' => 'Login successful',
                'dataset' => User::where('email', $request->email)->first(),
            ], 200);
        } 
        
        else {
            return json_encode([
                'status' => 'error',
                'message' => 'Login failed',
            ], 401);
        }
    }

    public function registerHandler(Request $request){
        $validated = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if($validated->fails()){
            return json_encode([
                'status' => 'error',
                'message' => 'Registrasi Gagal, Silahkan Coba Lagi',
                'errors' => $validated->errors(),
            ], 400);
        }

        else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            return json_encode([
                'status' => 'success',
                'message' => 'Registrasi Berhasil',
                'dataset' => $user,
            ], 200);
        }
    }
}
