@extends('layouts.app')
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
        <td><a>{{$user->id}}</a></td>
        <td><a href="{{route('users.show',['id'=>$user['id']])}}">{{$user['name']}}</a></td>
        <td><a href="{{route('users.show',['id'=>$user['id']])}}">{{$user['email']}}</a></td>
       
        <td><a href="{{route('users.edit',['id'=>$user['id']])}}" class="btn btn-primary">Edit</a>  </td>
    <td>
       <td>
       <form action="{{route('users.destroy',['id'=>$user['id']])}}"method="POST">
       @method('DELETE')
       @csrf  
        <button type="submit" class="btn btn-danger">Delete</button>

      </form>
       </td>  
    </td>  
</tr>
  @endforeach
  </tbody>
</table>
@endsection



