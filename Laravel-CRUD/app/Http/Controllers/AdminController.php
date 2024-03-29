<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return w::all()->json;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

/**
 
class userController extends Controller
{
    protected function index()
    {
        return view('user.index', [
            'users' => user::all()
        ]);
    }

    protected function create()
    {
        return view('user.create');
    }
    protected function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd($request->all());
        $user = new user;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return back()->withSuccess('user Create!!!');
    }

    protected function edit($id)
    {
        $user = user::where('id', $id)->first();
        return view('user.edit', ['user' => $user]);
    }
    
    protected function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd($request->all());
        $user = user::where('id', $id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return back()->withSuccess('user Updated!!!');   
    }
    protected function destroy($id)
    {
        $user = user::where('id', $id)->first();
        $user->delete();
        return back()->withSuccess('user Deleted!!!');   
    }
}

 */
