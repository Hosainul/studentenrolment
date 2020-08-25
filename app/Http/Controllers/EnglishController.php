<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EnglishController extends Controller
{
    public function english(){
        // return view('admin.english');
        $englishstudents_info = DB::table('student_tbl')
        ->where(['student_department'=>3])
        ->get();

        $manage_student = view('admin.english')
        ->with('englishstudents_info', $englishstudents_info);

        return view('layout')
        ->with('admin.english', $manage_student);
    }
}
