<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BbaController extends Controller
{
    public function bba(){
        // return view('admin.bba');
        $bbastudents_info = DB::table('student_tbl')
                        ->where(['student_department'=>2])
                        ->get();

        $manage_student = view('admin.bba')
                ->with('bbastudents_info', $bbastudents_info);

        return view('layout')
        ->with('admin.bba', $manage_student);
    }
}
