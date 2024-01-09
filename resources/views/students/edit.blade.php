@extends('layout')
@section('content')
 <div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">
        <form action="{{url('students/' .$students->id)}}" method="post">
         {!! csrf_field() !!}
         @method("PATCH")
         <input type="hidden" name="id" value="{{$students->id}}" id="id" />
          <label for="name">Name</label>
          <input type="text" name="name" value="{{$students->name}}" id="name" class="form-control" /><br>

           <label for="class">Class</label>
          <input type="text" name="class" value="{{$students->class}}" id="class" class="form-control" /><br>
          
           <label for="age">Age</label>
           <input type="text" name="age" value="{{$students->age}}" id="age" class="form-control" /><br>

            <label for="father_name">Father Name</label>
          <input type="text" name="father_name" value="{{$students->father_name}}" id="father_name" class="form-control" /><br>

           <label for="address">Address</label>
          <input type="text" name="address" value="{{$students->address}}" id="address" class="form-control" /><br>
          
           <label for="mobile">Mobile</label>
           <input type="mobile" name="mobile" value="{{$students->mobile}}" id="mobile" class="form-control" /><br>

          <input type="submit" value="update" class=" btn btn-success"><br>
        
        </form>
    </div>
 </div>
 @stop