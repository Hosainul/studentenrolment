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
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Image</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($all_teacher_info as $v_teacher)
            <tr>
                <td>{{$v_teacher->teacher_name}}</td>
                <td>{{$v_teacher->teacher_email}}</td>
                <td>{{$v_teacher->teacher_phone}}</td>
                <td><img src="{{URL::to($v_teacher->teacher_image)}}" style="height: 90px; width: 100px;"></td>
                <td>
                    @if($v_teacher->teacher_department ==1)
                        <span class="label label-success">{{'CSE'}}</span>
                    @elseif($v_teacher->teacher_department == 2)
                        <span class="label label-success">{{'BBA'}}</span>
                    @elseif($v_teacher->teacher_department == 3)
                        <span class="label label-success">{{'English'}}</span>
                    @elseif($v_teacher->teacher_department == 4)
                        <span class="label label-success">{{'LAW'}}</span>
                    @else($v_teacher->teacher_department == 5)
                        <span class="label label-success">{{'PHARMACY'}}</span>
                    @endif
                </td>
                <td>
                <a href="{{URL::to('/view-teacher/'.$v_teacher->teacher_id)}}"><button class="btn btn-outline-primary">View</button></a>
                <a href="{{URL::to('/edit-teacher/'.$v_teacher->teacher_id)}}"><button class="btn btn-outline-warning">Edit</button></a>
                <a href="{{URL::to('/delete-teacher/'.$v_teacher->teacher_id)}}"><button class="btn btn-outline-danger">Delete</button></a>
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