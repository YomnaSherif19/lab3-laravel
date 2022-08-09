@extends('layouts.app')
@section('content')


    <a href="'posts.restore',['id'=>$post['id']])}}">View deleted posts</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Post</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
        <td><a>{{$post->id}}</a></td>
        <td><a href="{{route('posts.show',['id'=>$post['id']])}}">{{$post['title']}}</a></td>
        <td><a href="{{route('posts.show',['id'=>$post['id']])}}">{{$post['body']}}</a></td>
       
        <td><a href="{{route('posts.edit',['id'=>$post['id']])}}" class="btn btn-primary">Edit</a>  </td>
    
       <td>
       <form action="{{route('posts.destroy',['id'=>$post['id']])}}"method="POST">
       @method('DELETE')
       @csrf  
        <button type="submit" class="btn btn-danger">Delete</button>

      </form>
       </td>  
       
       <td>
        @if($post->trashed())
       <form action="{{route('posts.restore',['id'=>$post['id']])}}"method="POST">
       @csrf  
        <button type="submit" class="btn btn-danger">Restore</button>

      </form>
      @endif
       </td> 
     
</tr>
  @endforeach
  </tbody>
</table>
@endsection



