@extends('layout.template')

@section('content')
    <div class="container mt-3">
        <h2 class="display-4 text-center">All Record</h2>
        <hr>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th >
                        <th>Name</th>
                        <th>Guardian Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($st as $item)
                        <tr>
                            <td>{{ $item->sid }}</td>
                            <td>{{ $item->stname }}</td>
                            <td>{{ $item->guardian }}</td>
                            <td>{{ $item->age }}</td>
                            <td>{{ $item->email }}</td>
                            <td><img src="{{ url('/') }}/images/{{ $item->img }}" width="50"
                                    alt="{{ $item->img }}"></td>
                            <td>
                                <div class="input-group">
                                    <a href="{{ url('student/edit')}}/{{ $item->sid }}"
                                        class="btn btn-outline-warning">Update</a>
                                    <a href="{{url('student/delete')}}/{{ $item->sid }}"
                                        class="btn btn-outline-danger">Delete</a>
                                    <a href="{{url('student/view')}}/{{ $item->sid }}" class="btn btn-outline-primary">View</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
