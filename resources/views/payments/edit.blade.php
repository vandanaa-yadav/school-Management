@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">Edit Batch Page</div>
        <div class="card-body">
            <form action="{{ url('payments/' . $payments->id) }}" method="post">
                {!! csrf_field() !!}
                @method('PATCH')
                <input type="hidden" name="id" value="{{ $payments->id }}" id="id" />
                <label for="enrollment_id">Enrollment No</label>
                {{-- <input type="text" name="name" value="{{$payments->name}}" id="enrollment_id" class="form-control" /><br> --}}
                  <select name="enrollment_id" id="enrollment_id" class="form-control-custom">
                     @foreach($enrollments as $id => $enroll_no) 
                      <option value ="{{$id}}">{{$enroll_no}}</option> 
                      @endforeach     
          </select>

                <label for="paid_date">Paid Date</label>
                <input type="text" name="paid_date" value="{{ $payments->paid_date }}" id="paid_date"
                    class="form-control" /><br>

                <label for="amount">Amount</label>
                <input type="number" name="amount" value="{{ $payments->amount }}" id="amount"
                    class="form-control" /><br>



                <input type="submit" value="update" class=" btn btn-success"><br>

            </form>
        </div>
    </div>
@stop
