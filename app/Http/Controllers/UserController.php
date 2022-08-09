<?php
namespace App\HTTP\Controllers;

use App\Models\User;
use Illuminate\HTTP\Request;

class UserController extends Controller
{
    
    public function index()
    
    {
         //$users=User::all();
         $users=User::withoutTrashed()->paginate(15);
        return view('users.index',compact('users'));
       // return view('users.index',['users'=>$users]);
      // $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);   
    }

    
    public function create()
    {
        return view('users.create');
        //return redirect()->route('users.index');
    }

    public function store(Request $request )
    {
        dd($request->all());
      //$users=User::create($request->all());
        $users=new User;
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->password=$request->input('password');
      
        $users->save();
        $users->fill(['name','email','password']);
      //return"data stored";
       return redirect()->route('users.index');
    }

    public function show($id)
    { $users=User::all();
        return view('users.show')>with(['users'=>$users]);
    // return redirect('users.show', compact('user'));
    }

    public function edit($id)
    {
    //     $users = json_decode(\Illuminate\Support\Facades\File::get(storage_path('users.json')),true);
    //     $users=$users[$id-1];
    //    $users=User::all();
    //    return redirect()->route('users.edit');
        $users=User::find($id);
       //return view('users.edit',compact('users'));
      return view('users.edit')>with(['users'=>$users]);

    }

    public function update(Request $request ,$id)
    {
        $users=User::find($id);
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->password=$request->input('password');
        $users->update();
        return redirect()->route('users.index');
       // return "info updated".redirect()->route('users.index');
        
    }

    public function destroy($id)
    {
        //return "id deleted".$id;
        $users=User::find($id);
        $users->delete();
        return redirect()->route('users.index');
    }
}
