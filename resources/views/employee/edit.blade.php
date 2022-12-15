@extends('layout.template-3')
@section('content3')
    <div class="container mt-3">
        <h2 class="display-4 text-center">Update Employee</h2>
        <hr>
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form action="/employee/update/{{$emp[0]->eid}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Employee Name</label>
                        <input type="text" value="{{ $emp[0]->ename }}" name="ename" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" value="{{ $emp[0]->age }}" name="age" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" value="{{ $emp[0]->email }}" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Department</label>
                        <select name="dname" class="form-select">
                            @foreach ($dp as $item)
                                <option value="{{ $item->did }}" @if ($item->did == $emp[0]->did)
                                     selected
                                @endif>
                                    {{ $item->dname }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
