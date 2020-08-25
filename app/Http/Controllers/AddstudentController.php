<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class AddstudentController extends Controller
{
    public function addstudent(){
        return view('admin.addstudent');
    }

    public function savestudent(Request $request){

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
        $data['student_department']=$request->student_department;
        $image=$request->file('student_image');

        if($image){
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            if ($success){
                $data['student_image']=$image_url;

                    DB::table('student_tbl')->insert($data);
                    Session::put('message','Student added successfully!');
                    return Redirect::to('/addstudent');
            }
        }
    }
}
