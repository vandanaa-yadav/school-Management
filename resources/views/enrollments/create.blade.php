@extends('layout')
@section('content')
 <div class="card">
    <div class="card-header">Student Enrollment</div>
    <div class="card-body">
        <form action="{{url('enrollments/')}}" method="post">
         {!! csrf_field() !!}
         @method("POST")
         <input type="hidden" name="id"  id="id" />
          <label for="enroll_no">Enrollment.no</label>
          <input type="text" name="enroll_no" id="enroll_no" class="form-control" /><br>

           <label for="batch_id">Batch</label>
          {{-- <input type="text" name="batch_id"  id="batch_id" class="form-control" /><br> --}}
          <select name="batch_id" id="batch_id" class="form-control-custom">
                     @foreach($batches as $id => $name) 
                      <option value ="{{$id}}">{{$name}}</option> 
                      @endforeach     
          </select>
          
           <label for="stu_id">Student</label>
          
            <select name="stu_id" id="stu_id" class="form-control-custom">
                     @foreach($students as $id => $name) 
                      <option value ="{{$id}}">{{$name}}</option> 
                      @endforeach     
          </select>

            <label for="join_date">Join Date</label>
            <input type="date" name="join_date"  id="join_date" class="form-control" /><br>

           <label for="fee">Fee</label>
          <input type="text" name="fee"  id="fee" class="form-control" /><br>
          
           

          <input type="submit" value="save" class=" btn btn-success"><br>
        
        </form>
    </div>
 </div>
 @stop