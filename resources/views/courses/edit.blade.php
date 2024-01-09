@extends('layout')
@section('content')
 <div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="{{url('courses/' .$courses->id)}}" method="post">
         {!! csrf_field() !!}
         @method("PATCH")
         <input type="hidden" name="id" value="{{$courses->id}}" id="id" />
          <label for="name">Course</label>
          <input type="text" name="name" value="{{$courses->name}}" id="name" class="form-control" /><br>

           <label for="syllabus">Syllabus</label>
          <input type="text" name="syllabus" value="{{$courses->syllabus}}" id="syllabus" class="form-control" /><br>
          
           <label for="duration">Duration(in months)</label>
           <input type="text" name="duration" value="{{$courses->duration}}" id="duration" class="form-control" /><br>

            

          <input type="submit" value="update" class=" btn btn-success"><br>
        
        </form>
    </div>
 </div>
 @stop