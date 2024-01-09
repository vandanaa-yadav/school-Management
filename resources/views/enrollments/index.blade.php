@extends('.layout')

@section('content')

<div class="card border-top border-0 rounded-0" style="margin-left: -55px; background-color: #ffffff08;">
    <div class="card-header">
        <h5>Enrollment</h5>
    </div>
    <div class="card-body">
        <a href="{{ url('/enrollments/create') }}" class="btn btn-success btn-System">
            <i class=" fa fa-plus" aria-hidden="true">Add New</i>
        </a>
        <br /><br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Enrollment.No</th>
                        <th scope="col">Batch</th>
                        <th scope="col">Student</th>
                        <th scope="col">Join</th>
                        <th scope="col">Fee</th>
                        
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($enrollments as $enrollment)
                    <tr>
                        <td>{{ $enrollment->enroll_no }}</td>
                        <td>{{ $enrollment->batch->name }}</td>
                        {{-- <td>{{ $enrollment->student->name }}</td> --}}
                        @if ($enrollment->student)
    <td>{{ $enrollment->student->name }}</td>
@else
    <td>No student associated</td>
@endif
                        <td>{{ $enrollment->join_date }}</td>
                        <td>{{ $enrollment->fee }}</td>
                        
                        <td>
                            <a href="{{ url('/enrollments/' . $enrollment->id) }}" title="View enrollment">
                                <button class="btn btn-info btn-sm">View</button>
                            </a>
                            <a href="{{ url('/enrollments/' . $enrollment->id . '/edit') }}" title="Edit enrollment">
                                <button class="btn btn-primary btn-sm">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ url('/enrollments/' . $enrollment->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete enrollment" onclick="return confirm('Confirm delete?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
