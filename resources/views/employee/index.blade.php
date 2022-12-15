@extends('layout.template-3')
@section('content3')
    <div class="container">
        <h2 class="display-4 text-center">All Employees</h2>
        <hr>
        {{-- <div class="row">
            <div class="offset-md-3 col-md-6">
                <form action="/employee/index" method="get">
                    <div class="input-group m-4">
                     <input type="text" placeholder="Searching..." name="search" class="form-control">
                     <button class="btn btn-primary">Search</button>
                    </div>
                </form>
            </div>
        </div> --}}
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dp as $item)
                    <tr>
                        <td>{{ $item->eid }}</td>
                        <td>{{ $item->ename }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->dname }}</td>
                        <td>{{ $item->location }}</td>
                        <td>
                            <div class="input-group">
                                <a href="/employee/edit/{{ $item->eid }}" class="btn btn-outline-warning">Update</a>
                                <a href="/employee/delete/{{ $item->eid }}" class="btn btn-outline-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex mt-5">{{ $dp->links() }}</div>
    </div>
    <style>
        svg.w-5.h-5 {
            width: 22px;
        }
        a{
            text-decoration: none;
        }
        .text-sm{
            margin: 15px 0;
            font-size: 14px;
        }
    </style>
@endsection
