@extends('student_layout')
@section('content')

<div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title" style="text-align: center;">All Students</h2>
        @php
          $student=DB::table('student_tbl')
                    ->count('student_id');
        @endphp
        <p style="font-family: cursive; font-size: 18px; font-weight: bold; text-align: center;">{{$student}}</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-1" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title" style="text-align: center;">All Teachers</h2>
        @php
          $teacher=DB::table('teacher_tbl')
                    ->count('teacher_id');
        @endphp
        <p style="font-family: cursive; font-size: 18px; font-weight: bold; text-align: center;">{{$teacher}}</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-2" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title" style="text-align: center;">Tution Fee</h2>
        <p style="font-family: cursive; font-size: 18px; font-weight: bold; text-align: center;">Monthly: 8,000</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-3" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title" style="text-align: center;">Revenue</h2>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-4" class="card-float-chart"></div>
      </div>
    </div>
  </div>
</div>
         




@endsection