<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
Session_start();
class AdminController extends Controller
{

    public function admin_dashboard(){
        return view('admin.dashboard');
    }
    public function student_dashboard(){
        return view('student.dashboard');
    }

    public function logout(){

        Session::put('admin_name',null);
        Session::put('admin_id',null);
        
        return Redirect::to('/backend');
    }

    public function viewprofile(){
        return view('admin.view');
    }

    public function setting(){
        return view('admin.setting');
    }

    public function login_dashboard(Request $request){
       
       $email=$request->admin_email;
       $password=md5($request->admin_password);
       $result=DB::table('admin_tbl')
               ->where('admin_email',$email)
               ->where('admin_password',$password)
               ->first();
        // echo "<pre>";
        // print_r($result);

       if($result){
        //    Session:put('admin_name',$result->name);
        //    Session:put('admin_password',$result->password);
           
           return Redirect::to('/admin_dashboard');
       }else{
           Session::put('exception','Invalid email or password!');
           return Redirect::to('/backend');
       }
    }


    //student login
        public function student_login_dashboard(Request $request){
       
        $email=$request->student_email;
        $password=md5($request->student_password);
        $result=DB::table('student_tbl')
                ->where('student_email',$email)
                ->where('student_password',$password)
                ->first();
         // echo "<pre>";
         // print_r($result);
 
        if($result){
         //    Session:put('admin_name',$result->name);
         //    Session:put('admin_password',$result->password);
            
            return Redirect::to('/student_dashboard');
        }else{
            Session::put('exception','Invalid email or password!');
            return Redirect::to('/');
        }
     }


     public function student_logout(Request $request){
        Session::put('student_name',null);
        Session::put('student_id',null);
        
        return Redirect::to('/');
     }
}
