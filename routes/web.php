<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student_login');
});

Route::get('/backend', function () {
    return view('admin.admin_login');
});

//admin
Route::post('/adminlogin','AdminController@login_dashboard');
Route::get('/admin_dashboard','AdminController@admin_dashboard');
Route::get('/logout','AdminController@logout');
Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/setting','AdminController@setting');

//student login
Route::post('/studentlogin','AdminController@student_login_dashboard');
Route::get('/student_dashboard','AdminController@student_dashboard');

//student logout
Route::get('/student-logout','AdminController@student_logout');

//student setting
Route::get('/student-setting','AdminController@student_setting');


//add student
Route::get('/addstudent','AddstudentController@addstudent');
Route::post('/save_student','AddstudentController@savestudent');

Route::get('/allstudent','AllstudentController@allstudent');
Route::get('/tutionfee','TutionController@tutionfee');
Route::get('/cse','CseController@cse');
Route::get('/bba','BbaController@bba');
Route::get('/english','EnglishController@english');
Route::get('/law','LawController@law');
Route::get('/pharmacy','PharmacyController@pharmacy');
Route::get('/teacher','TeacherController@teacher');

//student action
Route::get('/student-delete/{student_id}','AllstudentController@student_delete');
Route::get('/student-view/{student_id}','AllstudentController@student_view');
Route::get('/student-edit/{student_id}','AllstudentController@student_edit');
Route::post('/update_student/{student_id}','AllstudentController@update_student');


//teacher section
Route::get('/add-teacher','TeacherController@add_teacher');
Route::post('/save-teacher','TeacherController@save_teacher');
Route::get('/teacher','TeacherController@all_teacher');
Route::get('/view-teacher/{teacher_id}','TeacherController@view_teacher');
Route::get('/delete-teacher/{teacher_id}','TeacherController@delete_teacher');
Route::get('/edit-teacher/{teacher_id}','TeacherController@edit_teacher');
Route::post('/update_teacher/{teacher_id}','TeacherController@update_teacher');
