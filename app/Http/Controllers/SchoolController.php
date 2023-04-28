<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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

    public function pdf_parsing(Request $request)
    {
        $data_guru = DB::table('guru')->get();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'data_guru' => $data_guru,
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('school.pdfParsing', $data);
        
        $data_email["email"] = $request->email;
        $data_email["title"] = "Information CV & Data Guru";

        $files["cv"] = public_path('attachments/DaniarNurAmin_CV.pdf');
        $files["pdf"] = $pdf;

        Mail::send('emails.send', $data_email, function($message)use($data_email, $files) {
            $message->to($data_email["email"])
                    ->from($address = "daniarnuramin1@gmail.com", $name = "Info Daniar")
                    ->subject($data_email["title"])
                    ->attachData($files["pdf"]->output(), "Data Guru.pdf")
                    ->attach($files["cv"]);
        });

        return $this->index();
    }

    //Last Line
}
