<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class SchoolController extends Controller
{
    public function index()
    {
        $data = DB::table('guru')->get();
        return view('school.index', compact('data'));
    }

    public function add()
    {
        $data = DB::table('guru')->get();
        $status = 'success';
        $msg = 'Save Successfully';
        return view('school.add', compact('data','status','msg'));
    }

    public function pdf_single()
    {
        $data_guru = DB::table('guru')->get();
        $data = [
            'title' => 'Welcome to Daniar',
            'date' => date('m/d/Y'),
            'data_guru' => $data_guru
        ];
          
        $pdf = PDF::loadView('school.pdfSingle', $data);
        return $pdf->download('data-guru.pdf');
    }

    //Last Line
}
