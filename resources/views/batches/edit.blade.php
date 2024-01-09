@extends('layout')
@section('content')
 <div class="card">
    <div class="card-header">Edit Batch Page</div>
    <div class="card-body">
        <form action="{{url('batches/' .$batches->id)}}" method="post">
         {!! csrf_field() !!}
         @method("PATCH")
         <input type="hidden" name="id" value="{{$batches->id}}" id="id" />
          <label for="name">Name</label>
          <input type="text" name="name" value="{{$batches->name}}" id="name" class="form-control" /><br>

           <label for="course_id">Course</label>
          <input type="text" name="course_id" value="{{$batches->course->id}}" id="course_id" class="form-control" /><br>
          
           <label for="start_date">Start From</label>
           <input type="date" name="start_date" value="{{$batches->start_date}}" id="start_date" class="form-control" /><br>

            

          <input type="submit" value="update" class=" btn btn-success"><br>
        
        </form>
    </div>
 </div>
 @stop