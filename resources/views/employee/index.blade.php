@extends('layout.template-3')
@section('content3')
    
     <div class="container">
        <h2 class="display-4 text-center">All Employees</h2><hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dp as $item)
                    <tr>
                        <td>{{$item->eid}}</td>
                        <td>{{$item->ename}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->did}}</td>
                        <td><div class="input-group">
                            <a href="" class="btn btn-outline-warning">Update</a>
                            <a href="" class="btn btn-outline-danger">Delete</a>
                        </div></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
     </div>

@endsection