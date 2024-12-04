<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.employee.index',['users' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        return view('dashboard.employee.create',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:users',
            'image' => 'required|image|file|max:5000',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required',
            'role' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('User-images', 'public');
        }

        User::create($validatedData);
        Alert::success('Success!', 'User Created Successfully!');
        return redirect('/dashboard/user');
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
    public function edit(User $user)
    {
        return view('dashboard.employee.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'image|file|max:5000',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('User-images', 'public');
        }

        $user->update($validatedData);
        Alert::success('Success!', 'User Updated Successfully!');
        return redirect('/dashboard/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if($user->image){
            Storage::delete($user->image);
        }
        User::destroy($user->id);
        alert()->success('Success', 'User Deleted Successfully!');
        return redirect('/dashboard/user');
    }
}
