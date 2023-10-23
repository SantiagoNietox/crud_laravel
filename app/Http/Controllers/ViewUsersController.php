<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
class ViewUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $users = Usuario::all();
        return view('users', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
    
          ]);
    
            $user = new Usuario();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->email= $request->email;
            $user->password = bcrypt($request->password);
            $user->age = $request->age;
            $user->address = $request->address;
            $user ->sexo = $request->gender;
            $user->save();
            
            return redirect()->route('viewusers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = Usuario::find($id);
        return view('edituser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = Usuario::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->age = $request->age;
        $users->address = $request->address;
        $users->sexo = $request->sexo;


       

        $users->save();
        return redirect()->route('viewusers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = Usuario::find($id);
        $users->delete();
        return redirect()->route('viewusers.index');
    }




   
}
