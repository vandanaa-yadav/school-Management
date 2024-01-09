@extends('layout')
@section('content')
 <div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="{{url('enrollments/' .$enrollments->id)}}" method="post">
         {!! csrf_field() !!}
         @method("PATCH")
         <input type="hidden" name="id" value="{{$enrollments->id}}" id="id" />
          <label for="enroll_no">Enrollment.no</label></label>
          <input type="text" name="enroll_no" value="{{$enrollments->enroll_no}}" id="enroll_no" class="form-control" /><br>

           <label for="batch_id">Batch</label>
          <input type="text" name="batch_id" value="{{$enrollments->batch_id}}" id="batch_id" class="form-control" /><br>
          
           <label for="stu_id">Student</label>
           <input type="text" name="stu_id" value="{{$enrollments->stu_id}}" id="stu_id" class="form-control" /><br>

            <label for="join_date">Join Date</label>
          <input type="date" name="join_date" value="{{$enrollments->join_date}}" id="join_date" class="form-control" /><br>

           <label for="fee">Fee</label>
          <input type="text" name="fee" value="{{$enrollments->fee}}" id="fee" class="form-control" /><br>
          
          
          <input type="submit" value="update" class=" btn btn-success"><br>
        
        </form>
    </div>
 </div>
 @stop