@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Edit Teacher</h2>
            <p class="alert-success">
              <?php
                $message=Session::get('message');
                if($message){
                  echo $message;
                  Session::put('message',null);
                }
              ?>
            </p>
            <form class="forms-sample" method="post" action="{{URL::to('/update_teacher',$single_teacher_edit->teacher_id)}}">
            {{ csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Teacher Name</label>
                    <input type="text" class="form-control p-input" name="teacher_name" aria-describedby="emailHelp" value="{{$single_teacher_edit->teacher_name}}">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control p-input" name="teacher_email" value="{{$single_teacher_edit->teacher_email}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" class="form-control p-input" name="teacher_phone" value="{{$single_teacher_edit->teacher_phone}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control p-input" name="teacher_address" value="{{$single_teacher_edit->teacher_address}}">
                </div>
                <button type="submit" class="btn btn-success btn-block">Update</button>
            </form>
        </div>
    </div>
</div>



@endsection