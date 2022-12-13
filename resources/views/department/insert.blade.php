@extends('layout.template-2')
@section('content2')
    
   <div class="container mt-3">
      <h2 class="display-4 text-center">Add Department</h2><hr>
       <div class="row">
          <div class="offset-md-3 col-md-6">
              <form action="{{url('/department/store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Department Name</label>
                    <input type="text" name="dname" class="form-control">
                  </div>
                <div class="mb-4">
                    <label class="form-label">Department Location</label>
                    <input type="text" name="location" class="form-control">
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-primary">Add</button>
                  </div>
              </form>
          </div>
       </div>
   </div>

@endsection