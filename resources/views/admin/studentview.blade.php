@extends('layout')
@section('content')

          
<div class="row user-profile">

    <div class="col-lg-12 side-left">
        <div class="card mb-6">
        
        <div class="card-body avatar">
        <p class="alert-success">
              <?php
                $message=Session::get('message');
                if($message){
                  echo $message;
                  Session::put('message',null);
                }
              ?>
        </p>
            <h2 class="card-title">Info</h2>
            <img src="{{URL::to($single_student_view->student_image)}}" style="width: 200px; height: 180px" alt="">
            <p class="name">{{$single_student_view->student_name}}</p>
            <p class="designation">- 
                     @if($single_student_view->student_department ==1)
                        <span class="label label-success">{{'CSE'}}</span>
                    @elseif($single_student_view->student_department == 2)
                        <span class="label label-success">{{'BBA'}}</span>
                    @elseif($single_student_view->student_department == 3)
                        <span class="label label-success">{{'English'}}</span>
                    @elseif($single_student_view->student_department == 4)
                        <span class="label label-success">{{'LAW'}}</span>
                    @else($single_student_view->student_department == 5)
                        <span class="label label-success">{{'PHARMACY'}}</span>
                    @endif
             -</p>
            <a class="email" href="#">{{$single_student_view->student_email}}</a>
            <a class="number" href="#">++{{$single_student_view->student_phone}}</a>
        
        </div>
       
        </div>
        <div class="card mb-6">
        <div class="card-body overview">
            <ul class="achivements">
            <li><p>34</p><p>Projects</p></li>
            <li><p>23</p><p>Task</p></li>
            <li><p>29</p><p>Completed</p></li>
            </ul>
            <div class="wrapper about-user">
            <h1 class="text-center" style="color:lightblue;">Gono Bishwabidyalay</h1>
            <h2 class="card-title mt-4 mb-3">About</h2>
            <p>Students father name, mother name, admission year and address full information given below.</p>
            </div>
            <div class="info-links">
            <a class="website">
                <i class="icon-globe icon">Fathers Name:</i>
                <span style="font-family: varnada; font-size: 15px;">{{$single_student_view->student_fathername}}</span>
            </a>
            <a class="website">
                <i class="icon-globe icon">Mother Name:</i>
                <span style="font-family: varnada; font-size: 15px;">{{$single_student_view->student_mothername}}</span>
            </a>
            <a class="website">
                <i class="icon-globe icon">Address:</i>
                <span style="font-family: varnada; font-size: 15px;">{{$single_student_view->student_address}}</span>
            </a>
            <a class="website">
                <i class="icon-globe icon">Admission Year:</i>
                <span style="font-family: varnada; font-size: 15px;">{{$single_student_view->student_admissionyear}}</span>
            </a>
           
            </div>
        </div>
        </div>
    </div>

</div>
      
        <!-- content-wrapper ends -->


@endsection