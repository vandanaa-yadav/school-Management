@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Cource Page</div>
        <div>
           <div class="card-body">
              <h5 class="card-title">Name : {{$batches->name}}</h5>
               <p class="card-text">Course:{{$batches->course->name}}</p>
               <p class="card-text">Start From:{{$batches->start_date}}</p>
               
      
    </div>
</div>
@endsection