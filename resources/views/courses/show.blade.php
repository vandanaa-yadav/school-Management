@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Cource Page</div>
        <div>
           <div class="card-body">
              <h5 class="card-title">Course : {{$courses->course_name}}</h5>
               <p class="card-text">Syllabus:{{$courses->syllabus}}</p>
               <p class="card-text">Duration:{{$courses->duration()}}</p>
               
      
    </div>
</div>
@endsection