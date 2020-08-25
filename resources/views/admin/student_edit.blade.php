@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Add Student</h2>
            <p class="alert-success">
              <?php
                $message=Session::get('message');
                if($message){
                  echo $message;
                  Session::put('message',null);
                }
              ?>
            </p>
            <form class="forms-sample" method="post" action="{{URL::to('/update_student',$single_student_edit->student_id)}}">
            {{ csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" value="{{$single_student_edit->student_name}}">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Roll</label>
                    <input type="text" class="form-control p-input" name="student_roll" value="{{$single_student_edit->student_roll}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Father's Name</label>
                    <input type="text" class="form-control p-input" name="student_fathername" value="{{$single_student_edit->student_fathername}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mother's Name</label>
                    <input type="text" class="form-control p-input" name="student_mothername" value="{{$single_student_edit->student_mothername}}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control p-input" name="student_email" value="{{$single_student_edit->student_email}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" class="form-control p-input" name="student_phone" value="{{$single_student_edit->student_phone}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control p-input" name="student_address" value="{{$single_student_edit->student_address}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control p-input" name="student_password" value="{{$single_student_edit->student_password}}">
                </div>

                <div class="form-group">
                    <label for="exampleTextarea">Admission Year</label>
                    <input type="date" class="form-control p-input" name="student_admissionyear" value="{{$single_student_edit->student_admissionyear}}">
                </div>
                <button type="submit" class="btn btn-success btn-block">Update</button>
            </form>
        </div>
    </div>
</div>



@endsection