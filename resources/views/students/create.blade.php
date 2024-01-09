@extends('layout')
@section('content')
 <div class="card">
    <div class="card-header">Create student</div>
    <div class="card-body">
        <form action="{{url('students/')}}" method="post">
         {!! csrf_field() !!}
         @method("POST")
         <input type="hidden" name="id"  id="id" />
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" /><br>

           <label for="class">Class</label>
          <input type="text" name="class"  id="class" class="form-control" /><br>
          
           <label for="age">Age</label>
           <input type="text" name="age" id="age" class="form-control" /><br>

            <label for="father_name">Father Name</label>
          <input type="text" name="father_name"  id="father_name" class="form-control" /><br>

           <label for="address">Address</label>
          <input type="text" name="address"  id="address" class="form-control" /><br>
          
           <label for="mobile">Mobile</label>
           <input type="mobile" name="mobile"  id="mobile" class="form-control" /><br>

          <input type="submit" value="save" class=" btn btn-success"><br>
        
        </form>
    </div>
 </div>
 @stop