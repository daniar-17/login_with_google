<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchoolController extends Controller
{
    public function index()
    {
        $data = DB::table('guru')->get();
        return view('school.index', compact('data'));
    }
}
