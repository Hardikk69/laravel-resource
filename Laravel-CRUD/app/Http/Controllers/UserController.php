<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Master;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $AdminValidation=$request;
        $AdminValidation->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd($request->all());
        $user = new User_Master;
            //		Email						
            $user->First_Name= $AdminValidation->First_Name;
            $user->Last_Name= $AdminValidation->Last_Name;
            $user->Type= $AdminValidation->Type;
            $user->Email= $AdminValidation->Email;
            $user->Password= $AdminValidation->Password;
            $user->Gender = $AdminValidation->Gender;
            $user->Designation = $AdminValidation->Designation;
            $user->Program_Ref_Id = $AdminValidation->Program_Ref_Id;
            $user->Created_By = $AdminValidation->Created_By;
            $user->save();
            return response()->json([
                'message' => 'User created successfully',
                'user' => $user,
            ]);
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
