@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Student Page</div>
        <div>
           <div class="card-body">
              <h5 class="card-title">Name : {{$students->name}}</h5>
               <p class="card-text">Class:{{$students->class}}</p>
               <p class="card-text">Age:{{$students->age}}</p>
               <p class="card-text">Father-name:{{$students->father_name}}</p>
             
              <p class="card-text">Address:{{$students->address}}</p>
              <p class="card-text">Mobile:{{$students->mobile}}</p>
           </div>
      
    </div>
</div>
@endsection