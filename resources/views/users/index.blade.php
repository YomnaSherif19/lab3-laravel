@extends('layouts.app')

<html>
    <head>

    </head>
    <body>
      
      @section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
       
        <td><a href="{{route('users.edit',['id'=>$user['id']])}}" class="btn btn-success"><button>edit<button></a><td>
        <td>
          <a href="{{route('users.destroy',['id'=>$user['id']])}}" class="btn btn-darger"><button>delete<button></a>
          
</td>
       
    <tr>
        @endforeach
  </tbody>
</table>
@endsection
</body>


