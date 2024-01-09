@extends('layout')
@section('content')
 <div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="{{url('teachers/' .$teachers->id)}}" method="post">
         {!! csrf_field() !!}
         @method("PATCH")
         <input type="hidden" name="id" value="{{$teachers->id}}" id="id" />
          <label for="name">Name</label>
          <input type="text" name="name" value="{{$teachers->name}}" id="name" class="form-control" /><br>

           <label for="subject">Subject</label>
          <input type="text" name="subject" value="{{$teachers->subject}}" id="subject" class="form-control" /><br>
          
           <label for="room_no">Room No</label>
           <input type="text" name="room_no" value="{{$teachers->room_no}}" id="room_no" class="form-control" /><br>

            <label for="email">Email</label>
          <input type="text" name="email" value="{{$teachers->email}}" id="email" class="form-control" /><br>

           <label for="phone">Phone</label>
          <input type="text" name="phone" value="{{$teachers->phone}}" id="phone" class="form-control" /><br>
          
         

          <input type="submit" value="update" class=" btn btn-success"><br>
        
        </form>
    </div>
 </div>
 @stop