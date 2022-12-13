@extends('layout.template-2')
@section('content2')
    <div class="container">
        <h2 class="display-4 text-center">All Departments</h2>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Department Name</th>
                    <th>Department Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dp as $item)
                    <tr>
                        <td>{{ $item->did }}</td>
                        <td>{{ $item->dname }}</td>
                        <td>{{ $item->location }}</td>
                        <td>
                            <div class="input-group">
                                <a href="/department/edit/{{$item->did}}" class="btn btn-outline-warning">Update</a>
                                <a href="/department/delete/{{$item->did}}" class="btn btn-outline-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
