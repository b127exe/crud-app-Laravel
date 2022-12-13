@extends('layout.template')
@section('content')
    
   <div class="container mt-3">
     <h2 class="display-4">Record View</h2><hr>
     <div class="row mt-5">
        <div class="col-md-4 d-flex justify-content-center align-item-center">
            <img src="{{url('/')}}/images/{{$st['img']}}" alt="{{$st['img']}}" width="60%" style="border-radius: 50%;">
        </div>
        <div class="col-md-8">
           <h2>Profile</h2>
           <ul class="list-group list-group-flush mt-3">
             <li class="list-group-item">ID: {{$st['sid']}}</li>
             <li class="list-group-item">Name: {{$st['stname']}}</li>
             <li class="list-group-item">Guardian: {{$st['guardian']}}</li>
             <li class="list-group-item">Age: {{$st['age']}}</li>
             <li class="list-group-item">Email: {{$st['email']}}</li>
           </ul>
        </div>
     </div>
   </div>

@endsection