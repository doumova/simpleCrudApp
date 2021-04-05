@extends('layout')
@section('content')
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
            <h2>Simple Crud Application</h2>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
  {{$message}}
</div> 
@endif
<div class="row" align="left">
    <table class="table table-striped">
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
          <th scope="col">Action</th>
        </tr>
      @foreach ($students as $student)
        <tr>
          <th scope="row">{{$student['id']}}</th>
          <td>{{$student['name']}}</td>
          <td>{{$student['phone']}} </td>
          <td>{{$student['address']}}</td>
          <td>
            <form action="{{route('student.destroy', $student['id'])}}" method="POST">
              <a class="btn btn-info" href="{{route('student.edit',$student['id'])}}">Edit</a>
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <input type="submit" class="btn btn-danger delete-user" value="Delete"/>
            </form>
          </td>
        </tr>
      @endforeach
      
    </table>

</div>
@endsection