<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.users.index', [
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'username' => 'required|unique:users|max:100',
            'email' => 'required|email|unique:users',
            'address' => 'max:255',
            'phone' => 'max:12',
            'password' => 'required',
        ]);

        $valid['password'] = bcrypt($valid['password']);
        
        User::create($valid);

        return view('admin.users.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('admin.users.show',[
            'user' => User::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.users.edit', [
            'user' => User::find($id),
        ]);
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
        $valid = $request->validate([
            'username' => 'required|max:100',
            'email' => 'required|email',
            'address' => 'max:255',
            'phone' => 'max:12',
            'password' => 'required',
        ]);

        $valid['password'] = bcrypt($valid['password']);

        $user = User::find($id);
        $user->username = $valid['username'];
        $user->fullname = $valid['fullname'];
        $user->email = $valid['email'];
        $user->password = $valid['password'];
        $user->address = $valid['address'];
        $user->phone = $valid['phone'];
        $user->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
