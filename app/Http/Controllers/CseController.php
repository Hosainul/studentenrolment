<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CseController extends Controller
{
    public function cse(){
        // return view('admin.cse');
        $csestudents_info = DB::table('student_tbl')
                        ->where(['student_department'=>1])
                        ->get();

        $manage_student = view('admin.cse')
                ->with('csestudents_info', $csestudents_info);

        return view('layout')
        ->with('admin.cse', $manage_student);
    }
}
