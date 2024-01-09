@extends('layout')
@section('content')
 <div class="card">
    <div class="card-header">Payment</div>
    <div class="card-body">
        <form action="{{url('payments/')}}" method="post">
         {!! csrf_field() !!}
         @method("POST")
         <input type="hidden" name="id"  id="id" />
          <label for="enrollment_id">Enrollment ID</label>
          {{-- <input type="text" name="enrollment_id" id="enrollment_id" class="form-control" /><br> --}}
           <select name="enrollment_id" id="enrollment_id" class="form-control-custom">
                     @foreach($enrollments as $id => $enroll_no) 
                      <option value ="{{$id}}">{{$enroll_no}}</option> 
                      @endforeach     
          </select>

 {{-- <select name="enrollment_id" id="enrollment_id" class="form-control-custom">
                     @foreach($payments as $id => $enrollno) 
                      <option value ="{{$id}}">{{$enrollno}}</option> 
                      @endforeach     
          </select> --}}
           <label for="paid_date">Paid Date</label>
          <input type="date" name="paid_date"  id="paid_date" class="form-control" /><br>
          {{-- <select name="course_id" id="course_id" class="form-control-custom">
                     @foreach($courses as $id => $name) 
                      <option value ="{{$id}}">{{$name}}</option> 
                      @endforeach     
          </select> --}}
          
           <label for="amount">Amount</label></label>
           <input type="number" name="amount" id="amount" class="form-control" /><br>

           

          <input type="submit" value="save" class=" btn btn-success"><br>
        
        </form>
    </div>
 </div>
 @stop