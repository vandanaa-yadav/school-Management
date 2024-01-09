@extends('.layout')

@section('content')
    <div class="card border-top border-0 rounded-0" style="margin-left: -55px; background-color: #ffffff08;">
        <div class="card-header">
            <h5>Teacher</h5>
        </div>
        <div class="card-body">
            <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-System">
                <i class=" fa fa-plus" aria-hidden="true">Add New</i>
            </a>
            <br /><br />
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Room No</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>

                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->subject }}</td>
                                <td>{{ $teacher->room_no }}</td>
                                <td>{{ $teacher->email }}</td>
                                <td>{{ $teacher->phone }}</td>

                                <td>
                                    <a href="{{ url('/teachers/' . $teacher->id) }}" title="View teacher">
                                        <button class="btn btn-info btn-sm">View</button>
                                    </a>
                                    <a href="{{ url('/teachers/' . $teacher->id . '/edit') }}" title="Edit teacher">
                                        <button class="btn btn-primary btn-sm">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <form method="POST" action="{{ url('/teachers/' . $teacher->id) }}"
                                        accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete teacher"
                                            onclick="return confirm('Confirm delete?')">Delete</button>
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
