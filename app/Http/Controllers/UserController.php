<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use SanitizesInput;

class UserController extends Controller
{
    /** Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request['name']);
        // Id like to request more: dd($request->all()); 

        $validatedData = $request->validate([

            //ToDo: Add 'password' 
            'name' => 'required|max:30',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required|string',

        ]);

        //return "Passed Validation"; 

        $u = new User;
        $u->name = $validatedData['name'];
        $u->email = $validatedData['email'];
        $u->password = $validatedData['password'];
        $u->role = $validatedData['role'];

        //ToDo: $u->sanitize(); ??

        $u->save();
                                //ToDo: Make message dynamic
        session()->flash('message', 'User created.');

        return redirect()->route('users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
