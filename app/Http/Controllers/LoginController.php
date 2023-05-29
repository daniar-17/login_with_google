<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }

    public function create_password()
    {
        return view('login.create_password');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return view('home');
            }else{
                return view('login.create_password', compact('user'));
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function postlogin(Request $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'google_id' => $request->google_id,
                'password' => bcrypt($request->password)
            ]);

            return response()->json([
                'status' => true,
                'email' => $request->email,
                'info' => 'Register Data Success'
            ], 201);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function regularlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return response()->json([
                'status' => true,
                'info' => 'Sign In Success'
            ], 201);
        }else{
            return response()->json([
                'status' => false,
                'info' => 'Email atau Password Tidak Sesuai !'
            ], 201);
            return false;
        }
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => true,
            'info' => 'Log Out Success'
        ], 201);
    }
    //Last Line
}
