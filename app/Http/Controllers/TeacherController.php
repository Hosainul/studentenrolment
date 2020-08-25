<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class TeacherController extends Controller
{
    public function teacher(){
        return view('admin.teacher');
    }

    public function add_teacher(){
        return view('admin.add_teacher');

    }


    public function save_teacher(Request $request){
        $data=array();
        $data['teacher_name']=$request->teacher_name;
        $data['teacher_email']=$request->teacher_email;
        $data['teacher_phone']=$request->teacher_phone;
        $data['teacher_address']=$request->teacher_address;
        $data['teacher_department']=$request->teacher_department;
        $image=$request->file('teacher_image');

        if($image){
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            if ($success){
                $data['teacher_image']=$image_url;

                    DB::table('teacher_tbl')->insert($data);
                    Session::put('message','Teacher added successfully!');
                    return Redirect::to('/add-teacher');
            }
        }
    }


    public function all_teacher(){
        
        $all_teacher_info=DB::table('teacher_tbl')
                            ->get();
        $manage_teacher=view('admin.teacher')
                        ->with('all_teacher_info', $all_teacher_info);
        return view('layout')
                ->with('admin.teacher', $manage_teacher);
    }

    public function view_teacher($teacher_id){
        $single_teacher=DB::table('teacher_tbl')
                ->select('*')
                ->where('teacher_id',$teacher_id)
                ->first();

        $manage_teacher = view('admin.teacherview')
        ->with('single_teacher', $single_teacher);

        return view('layout')
                ->with('admin.teacherview', $manage_teacher);
    }


    public function delete_teacher($teacher_id){
        Db::table('teacher_tbl')
                ->where('teacher_id',$teacher_id)
                ->delete();
        return Redirect::to('/teacher');
    }

    public function edit_teacher($teacher_id){
        $single_teacher_edit = DB::table('teacher_tbl')
                        ->select('*')
                        ->where('teacher_id',$teacher_id)
                        ->first();

        $manage_teacher = view('admin.teacheredit')
                        ->with('single_teacher_edit', $single_teacher_edit);

        return view('layout')
                ->with('teacheredit', $manage_teacher);
    }


    public function update_teacher(Request $request, $teacher_id){
        $data=array();
            $data['teacher_name']=$request->teacher_name;
            $data['teacher_email']=$request->teacher_email;
            $data['teacher_phone']=$request->teacher_phone;
            $data['teacher_address']=$request->teacher_address;

        DB::table('teacher_tbl')
                ->where('teacher_id',$teacher_id)
                ->update($data);

        Session::put('message','Teacher information updated successfully!');
        return Redirect::to('/teacher');
    }

}
