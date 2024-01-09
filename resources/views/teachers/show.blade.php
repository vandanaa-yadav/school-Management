@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Teacher Page</div>
        <div>
           <div class="card-body">
              <h5 class="card-title">Name : {{$teachers->name}}</h5>
               <p class="card-text">Subject:{{$teachers->subject}}</p>
               <p class="card-text">Room No:{{$teachers->room_no}}</p>
               <p class="card-text">Email:{{$teachers->email}}</p>
             
               <p class="card-text">Phone:{{$teachers->phone}}</p>
            
           </div>
      
    </div>
</div>
@endsection