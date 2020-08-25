<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PharmacyController extends Controller
{
    public function pharmacy(){
        // return view('admin.english');
        $pharmacystudents_info = DB::table('student_tbl')
        ->where(['student_department'=>5])
        ->get();

        $manage_student = view('admin.pharmacy')
        ->with('pharmacystudents_info', $pharmacystudents_info);

        return view('layout')
        ->with('admin.pharmacy', $manage_student);
    }
}
