@extends('layout.template')
@section('content')
    
<div class="container">
    <h2 class="display-4 text-center">Update Student</h2><hr>
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <form action="{{url('student/update')}}/{{$st['sid']}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" value="{{$st['stname']}}" class="form-control">
                    @error('name')
                        <p class="text-danger" style="font-size: 13px;">{{$message}}</p>
                    @enderror
                  </div>
                <div class="mb-3">
                    <label class="form-label">Guardian Name</label>
                    <input type="text" name="guardian" value="{{$st['guardian']}}" class="form-control">
                    @error('guardian')
                    <p class="text-danger" style="font-size: 13px;">{{$message}}</p>
                @enderror
                  </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" name="age" value="{{$st['age']}}" class="form-control">
                    @error('age')
                    <p class="text-danger" style="font-size: 13px;">{{$message}}</p>
                @enderror
                  </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{$st['email']}}" class="form-control">
                    @error('email')
                    <p class="text-danger" style="font-size: 13px;">{{$message}}</p>
                @enderror
                  </div>
                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input type="file" name="Newimg" class="form-control">
                    <input type="hidden" name="oldImg" value="{{$st['img']}}">
                  </div>
                  <img src="/images/{{$st['img']}}" alt="{{$st['img']}}" width="50" class="mb-3">
                  <div class="d-grid">
                      <button class="btn btn-primary">Update</button>
                    </div>
            </form>
        </div>
    </div>
</div>
   
@endsection