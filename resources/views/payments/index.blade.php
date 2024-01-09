@extends('.layout')

@section('content')
    <div class="card border-top border-0 rounded-0" style="margin-left: -55px; background-color: #ffffff08;">
        <div class="card-header">
            <h5>Payment Section</h5>
        </div>
        <div class="card-body">
            <a href="{{ url('/payments/create') }}" class="btn btn-success btn-System">
                <i class=" fa fa-plus" aria-hidden="true">Add New</i>
            </a>
            <br /><br />
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Enrollment No</th>
                            <th scope="col">Paid Date</th>
                            <th scope="col">Amount</th>

                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                            <tr>
                                {{-- <td>{{ $payment->enrollment->enroll_no }}</td>
                        <td>{{ $payment->paid_date }}</td>
                        <td>{{ $payment->amount }}</td> --}}
                       
                                <td>{{ $payment->enrollment ? $payment->enrollment->enroll_no : 'N/A' }}</td>
                                <td>{{ $payment->paid_date }}</td>
                                <td>{{ $payment->amount }}</td>

                                <td>
                                    <a href="{{ url('/payments/' . $payment->id) }}" title="View payment">
                                        <button class="btn btn-info btn-sm">View</button>
                                    </a>
                                    <a href="{{ url('/payments/' . $payment->id . '/edit') }}" title="Edit payment">
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ url('/payments/' . $payment->id) }}"
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete payment"
                                            onclick="return confirm('Confirm delete?')">Delete</button>
                                    </form>
                                    <a href="{{url('report/report1/'.$payment->id )}}" title="Edit Payment"><button type="button" class="btn btn-success">Print</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
