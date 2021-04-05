@extends('layout')
@section('content')
<div class="container-fluid">
  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Simple Crud App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/">All students</a>
            <a class="nav-link" href="{{route('student.create')}}">New student</a>
            
          </div>
        </div>
      </div>
    </nav>
      <div class="col-lg-12 margin-tb">
          <div class="pull-right">
              <h2>Create student</h2>
          </div>
      </div>
  </div>
 
  <form method="POST" action="{{route('student.store')}}">
    {{csrf_field()}}
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Phone number</label>
        <input type="text" name="phone" class="form-control" id="exampleInputPhone">
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Address</label>
          <input type="text" name="address" class="form-control" id="exampleInputAddress">
        </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection