@extends('.layout')

@section('content')

<div class="card border-top border-0 rounded-0" style="margin-left: -55px; background-color: #ffffff08;">
    <div class="card-header">
        <h5>Cource</h5>
    </div>
    <div class="card-body">
        <a href="{{ url('/batches/create') }}" class="btn btn-success btn-System">
            <i class=" fa fa-plus" aria-hidden="true">Add New</i>
        </a>
        <br /><br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Batch Name</th>
                        <th scope="col">Course</th>
                        <th scope="col">Start From</th>
                        
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($batches as $batche)
                    <tr>
                        <td>{{ $batche->name }}</td>
                        <td>{{ $batche->course->name }}</td>
                        <td>{{ $batche->start_date }}</td>
                        
                        <td>
                            <a href="{{ url('/batches/' . $batche->id) }}" title="View batche">
                                <button class="btn btn-info btn-sm">View</button>
                            </a>
                            <a href="{{ url('/batches/' . $batche->id . '/edit') }}" title="Edit batche">
                                <button class="btn btn-primary btn-sm">Edit</button>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ url('/batches/' . $batche->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete batche" onclick="return confirm('Confirm delete?')">Delete</button>
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
