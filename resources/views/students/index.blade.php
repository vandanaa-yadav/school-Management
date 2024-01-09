@extends('.layout')

@section('content')

<div class="card border-top border-0 rounded-0" style="margin-left: -55px; background-color: #ffffff08;">
    <div class="card-header">
        <h5>Student</h5>
    </div>
    <div class="card-body">
        <a href="{{ url('/students/create') }}" class="btn btn-success btn-System">
            <i class=" fa fa-plus" aria-hidden="true">Add New</i>
        </a>
        <br /><br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Class</th>
                        <th scope="col">Age</th>
                        <th scope="col">Father Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->class }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->father_name }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->mobile }}</td>
                        <td>
                            <a href="{{ url('/students/' . $student->id) }}" title="View student">
                                <button class="btn btn-info btn-sm">View</button>
                            </a>
                            <a href="{{ url('/students/' . $student->id . '/edit') }}" title="Edit student">
                                <button class="btn btn-primary btn-sm">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ url('/students/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete student" onclick="return confirm('Confirm delete?')">Delete</button>
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
