@extends('.layout')

@section('content')

<div class="card border-top border-0 rounded-0" style="margin-left: -55px; background-color: #ffffff08;">
    <div class="card-header">
        <h5>Cource</h5>
    </div>
    <div class="card-body">
        <a href="{{ url('/courses/create') }}" class="btn btn-success btn-System">
            <i class=" fa fa-plus" aria-hidden="true">Add New</i>
        </a>
        <br /><br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Cource</th>
                        <th scope="col">Syllabus</th>
                        <th scope="col">Duration</th>
                        
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->syllabus }}</td>
                        <td>{{ $course->duration() }}</td>
                        
                        <td>
                            <a href="{{ url('/courses/' . $course->id) }}" title="View course">
                                <button class="btn btn-info btn-sm">View</button>
                            </a>
                            <a href="{{ url('/courses/' . $course->id . '/edit') }}" title="Edit course">
                                <button class="btn btn-primary btn-sm">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ url('/courses/' . $course->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete course" onclick="return confirm('Confirm delete?')">Delete</button>
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
