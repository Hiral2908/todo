<?php

namespace App\Http\Controllers;

use App\Models\Todo;    
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class TodoController extends Controller
{
    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('todo_create');
    }

    
    public function store(Request $request)
    {
        $validated =  $request->validate([
            'first_name' => 'required|min:3|max:50',
            'last_name' => 'required|min:3|max:50',
            'email'=>'required|string|email|max:255|min:8|unique:todos',
            'password'=>'required|confirmed|min:6',
        ]);
        // dd($request->all());
        $res=new Todo;
        $res->first_name=$request->input('first_name');
        $res->last_name=$request->input('last_name');
        $res->email=$request->input('email');
        // $res->password=$request->input('password');
        // $res->password = bcrypt($request->password);
        $res->password = Hash::make($request->password);
        $res->gender=$request->input('gender');
        $res->employment=$request->input('employment');
        $res->is_active=$request->input('is_active');
        $res->save();

        $request->session()->flash('msg','Data Inserted');
        return redirect('todo_show');
        
        
            
      
    }

   
    public function show(Todo $todo)
    {
      return view('todo_show')->with('todoArr',Todo::all());
    }

    
    public function edit(Todo $todo, $id)
    {
        return view('todo_edit')->with('todoArr',Todo::find($id));
    }

   
    public function update(Request $request, Todo $todo)
    {
        $request->validate
        ([
            'email' => 'required|email|unique:todos,email,'.$todo->id,
        ]);


       $res=Todo::find($request->id);
       $res->first_name=$request->input('first_name');
       $res->last_name=$request->input('last_name');
       $res->email=$request->input('email');
       $res->password = Hash::make($request->password);
       $res->gender=$request->input('gender');
       $res->employment=$request->input('employment');
       $res->is_active=$request->input('is_active');
       $res->save();

       $request->session()->flash('msg','Data Updated');
       return redirect('todo_show');
    }

    public function destroy(Todo $todo,$id)
    {
        Todo::destroy(array('id',$id));
        return redirect('todo_show');
    }
    
    
}
