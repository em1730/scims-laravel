<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return User::orderBy('created_at', 'desc')->limit(10)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:user_accounts',
            'job_position' => 'required',
            'fullname' => 'required',
            'department' => 'required',
            'division' => 'required',
            'password' => 'required',
        ]);

        $user = User::create($validatedData);

        return response()->json(['user' => $user], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['user' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user): JsonResponse
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:user_accounts,username,' . $user->id,
            'job_position' => 'required',
            'fullname' => 'required',
            'department' => 'required',
            'division' => 'required',
        ]);

        $user->update($validatedData);

        return response()->json(['user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user ): JsonResponse
    {
        $user->delete();
        return response()->json(['message'=>'User deleted Successfully']);
    }

}
