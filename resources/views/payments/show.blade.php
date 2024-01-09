@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Show Payment</div>
    <div class="card-body">
        <h5 class="card-title">Enrollment: {{ $payments->enrollment->enroll_no }}</h5>
        <p class="card-text">Paid Date: {{ $payments->paid_date }}</p>
        <p class="card-text">Amount: {{ $payments->amount }}</p>
    </div>
</div>
@endsection
