<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class AllstudentController extends Controller
{
    public function allstudent(){
        $allstudents_info = DB::table('student_tbl')
                        ->get();
        
        $manage_student = view('admin.allstudent')
                        ->with('allstudents_info', $allstudents_info);

        return view('layout')
                ->with('admin.allstudent', $manage_student);
    }

    public function student_delete($student_id){
        DB::table('student_tbl')
                ->where('student_id',$student_id)
                ->delete();

        return Redirect::to('/allstudent');
    }

    public function student_view($student_id){
        $single_student_view = DB::table('student_tbl')
                        ->select('*')
                        ->where('student_id',$student_id)
                        ->first();
        
        $manage_student = view('admin.studentview')
                        ->with('single_student_view', $single_student_view);

        return view('layout')
                ->with('admin.studentview', $manage_student);
        
    }

    public function student_edit($student_id){
        $single_student_edit = DB::table('student_tbl')
                        ->select('*')
                        ->where('student_id',$student_id)
                        ->first();

        $manage_student = view('admin.student_edit')
                        ->with('single_student_edit', $single_student_edit);

        return view('layout')
                ->with('student_edit', $manage_student);
    } 

    public function update_student(Request $request, $student_id){
            $data=array();
            $data['student_name']=$request->student_name;
            $data['student_roll']=$request->student_roll;
            $data['student_fathername']=$request->student_fathername;
            $data['student_mothername']=$request->student_mothername;
            $data['student_email']=$request->student_email;
            $data['student_phone']=$request->student_phone;
            $data['student_address']=$request->student_address;
            $data['student_password']=md5($request->student_password);
            $data['student_admissionyear']=$request->student_admissionyear;

        DB::table('student_tbl')
                ->where('student_id',$student_id)
                ->update($data);

        Session::put('message','Student information updated successfully!');
        return Redirect::to('/allstudent');
    }


}
