@extends('layout')
@section('content')
 <div class="card">
    <div class="card-header">Student Batches</div>
    <div class="card-body">
        <form action="{{url('batches/')}}" method="post">
         {!! csrf_field() !!}
         @method("POST")
         <input type="hidden" name="id"  id="id" />
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" /><br>

           <label for="course_id">Select Course</label>
          {{-- <input type="text" name="course_id"  id="course_id" class="form-control" /><br> --}}
          <select name="course_id" id="course_id" class="form-control-custom">
                     @foreach($batches as $id => $name) 
                      <option value ="{{$id}}">{{$name}}</option> 
                      @endforeach     
          </select>
          
           <label for="start_date">Start Form</label></label>
           <input type="date" name="start_date" id="start_date" class="form-control" /><br>

           

          <input type="submit" value="save" class=" btn btn-success"><br>
        
        </form>
    </div>
 </div>
 @stop