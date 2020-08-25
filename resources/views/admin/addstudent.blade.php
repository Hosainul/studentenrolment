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
            <form class="forms-sample" method="post" action="{{URL::to('/save_student')}}" enctype="multipart/form-data">
            {{ csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control p-input" name="student_name" aria-describedby="emailHelp" placeholder="Enter name">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Roll</label>
                    <input type="text" class="form-control p-input" name="student_roll" placeholder="student role">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Father's Name</label>
                    <input type="text" class="form-control p-input" name="student_fathername" placeholder="Father's Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mother's Name</label>
                    <input type="text" class="form-control p-input" name="student_mothername" placeholder="Mother's Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control p-input" name="student_email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" class="form-control p-input" name="student_phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control p-input" name="student_address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control p-input" name="student_password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div class="row">
                    <div class="col-12">
                        <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Browse</label>
                        <input type="file" class="form-control-file" name="student_image" id="exampleInputFile2" aria-describedby="fileHelp">
                    </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleTextarea">Admission Year</label>
                    <input type="date" class="form-control p-input" name="student_admissionyear" placeholder="Admission Year">
                </div>

                <div class="form-group">
                    <label for="exampleTextarea">Department</label>
                    <select class="form-control p-input" name="student_department">
                        <option value="1">CSE</option>
                        <option value="2">BBA</option>
                        <option value="3">English</option>
                        <option value="4">LAW</option>
                        <option value="5">PHARMACY</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
    </div>
</div>



@endsection