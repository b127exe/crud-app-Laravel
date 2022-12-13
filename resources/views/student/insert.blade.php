@extends('layout.template')

@section('content')
    
        <div class="container">
            <h2 class="display-4 text-center">Add Student</h2><hr>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form action="{{url('student/store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <p class="text-danger" style="font-size: 13px;">{{$message}}</p>
                            @enderror
                          </div>
                        <div class="mb-3">
                            <label class="form-label">Guardian Name</label>
                            <input type="text" name="guardian" class="form-control">
                            @error('guardian')
                            <p class="text-danger" style="font-size: 13px;">{{$message}}</p>
                        @enderror
                          </div>
                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="number" name="age" class="form-control">
                            @error('age')
                            <p class="text-danger" style="font-size: 13px;">{{$message}}</p>
                        @enderror
                          </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                            @error('email')
                            <p class="text-danger" style="font-size: 13px;">{{$message}}</p>
                        @enderror
                          </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="img" class="form-control">
                          </div>
                          <div class="d-grid">
                              <button class="btn btn-primary">Insert</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

@endsection