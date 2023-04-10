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
    //Last Line
}
