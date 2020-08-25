@extends('layout')
@section('content')

<!-- partial -->

<div class="card">
<div class="card-body">
    <h2 class="card-title">Data table</h2>
    <p class="alert-success">
              <?php
                $message=Session::get('message');
                if($message){
                  echo $message;
                  Session::put('message',null);
                }
              ?>
    </p>
    <div class="row">
    <div class="col-12">
        <table id="order-listing" class="table table-striped" style="width:100%;">
        <thead>
            <tr>
                <th>Std Roll</th>
                <th>Std name</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Address</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($allstudents_info as $v_students)
            <tr>
                <td>{{$v_students->student_roll}}</td>
                <td>{{$v_students->student_name}}</td>
                <td>{{$v_students->student_phone}}</td>
                <td><img src="{{URL::to($v_students->student_image)}}" style="height: 90px; width: 100px;"></td>
                <td>{{$v_students->student_address}}</td>
                <td>
                    @if($v_students->student_department ==1)
                        <span class="label label-success">{{'CSE'}}</span>
                    @elseif($v_students->student_department == 2)
                        <span class="label label-success">{{'BBA'}}</span>
                    @elseif($v_students->student_department == 3)
                        <span class="label label-success">{{'English'}}</span>
                    @elseif($v_students->student_department == 4)
                        <span class="label label-success">{{'LAW'}}</span>
                    @else($v_students->student_department == 5)
                        <span class="label label-success">{{'PHARMACY'}}</span>
                    @endif
                </td>
                <td>
                <a href="{{URL::to('/student-view/'.$v_students->student_id)}}"><button class="btn btn-outline-primary">View</button></a>
                <a href="{{URL::to('/student-edit/'.$v_students->student_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                <a href="{{URL::to('/student-delete/'.$v_students->student_id)}}"><button class="btn btn-outline-danger" >Delete</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div>
</div>

<!-- content-wrapper ends -->



@endsection