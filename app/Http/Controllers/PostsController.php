<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Request $request)
    
    {
        // $posts=Post::all();
        //$posts=Post::withoutTrashed()->paginate(15);
        $posts=Post::with(relations:'user')
        ->when($request->has(key:'archive'),function($query){
            $query->onlyTrashed();
        }
        )
        ->get();
        return view('posts.index',compact('posts'));
       // return view('users.index',['users'=>$users]);
      // $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);   
    }

    
    public function create()
    {
        return view('posts.create');
        //return redirect()->route('users.index');
    }

    public function store(Request $request )
    {
        dd($request->all());
      //$users=User::create($request->all());
        $posts=new Post();
        $posts->name=$request->input('title');
        $posts->email=$request->input('body');
       
      
        $posts->save();
        $posts->fill(['title','body']);
      //return"data stored";
       return redirect()->route('posts.index');
    }

    public function show($id)
    { $posts=Post::all();
        return view('posts.show')>with(['posts'=>$posts]);
    // return redirect('users.show', compact('user'));
    }

    public function edit($id)
    {
    //     $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);
    //     $users=$users[$id-1];
    //    $users=User::all();
    //    return redirect()->route('users.edit');
    $posts=Post::find($id);
       //return view('users.edit',compact('users'));
      return view('posts.edit')>with(['posts'=>$posts]);

    }

    public function update(Request $request ,$id)
    {
        $posts=Post::find($id);
        $posts->title=$request->input('title');
        $posts->body=$request->input('body');
        $posts->update();
        return redirect()->route('posts.index');
       // return "info updated".redirect()->route('users.index');
        
    }

    public function destroy($id)
    {
        //return "id deleted".$id;
        $posts=Post::find($id);
        $posts->delete();
        return redirect()->route('posts.index');
    }
    public function restore(Request $request ,$id){
Post::onlyTrashed()->find($id)->restore();
return redirect()->route('users.index');
    }
}

