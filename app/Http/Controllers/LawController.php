<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LawController extends Controller
{
    public function law(){
        // return view('admin.english');
        $lawstudents_info = DB::table('student_tbl')
        ->where(['student_department'=>4])
        ->get();

        $manage_student = view('admin.law')
        ->with('lawstudents_info', $lawstudents_info);

        return view('layout')
        ->with('admin.law', $manage_student);
    }
}
