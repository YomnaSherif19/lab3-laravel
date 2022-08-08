<?php
namespace App\HTTP\Controllers;

use App\Models\User;
use Illuminate\HTTP\Request;

class UserController extends Controller
{

    public function index()
    
    {
        $users=User::all();
        return view('users.index',['users'=>$users]);
       
       // $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true); 
     
      
    }

    
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request )
    {
        dd($request->all());
    //    $users=new User;
    //    $users->name=$request->input('name');
    //    $users->email=$request->input('email');
    //    $users->password=$request->input('password');
    //    $users->save();
    $users=User::create($request->all());
    return redirect()->route('users.index');

    }

    
    public function show()
    {
        //return view('users.show')>with('id',$id);
    }

    public function edit($id)
    {
        //$users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);
       // $users=$users[$id-1];
       $users=User::all();
       return view('users.edit')>with(['users'=>$users]);
    }

    public function update(Request $request ,$id)
    {
        return "info updated".$id;
    }

    public function destroy($id)
    {
        //return "id deleted".$id;
        return redirect()->route('users.index');
    }
}