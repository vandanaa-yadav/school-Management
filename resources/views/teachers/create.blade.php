@extends('layout')
@section('content')
 <div class="card">
    <div class="card-header">Create Teacher</div>
    <div class="card-body">
        <form action="{{url('teachers/')}}" method="post">
         {!! csrf_field() !!}
         @method("POST")
         <input type="hidden" name="id"  id="id" />
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" /><br>

           <label for="subject">Subject</label>
          <input type="text" name="subject"  id="subject" class="form-control" /><br>
          
           <label for="room_no">Room No</label>
           <input type="text" name="room_no" id="room_no" class="form-control" /><br>

            <label for="email">Email</label>
          <input type="text" name="email"  id="email" class="form-control" /><br>

           <label for="phone">Phone</label>
          <input type="text" name="phone"  id="phone" class="form-control" /><br>
          
          

          <input type="submit" value="save" class=" btn btn-success"><br>
        
        </form>
    </div>
 </div>
 @stop