<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        return view('dashboard.doctor.index', ['doctors' => $doctors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specialities = Speciality::all();
        return view('dashboard.doctor.create', ['specialities' => $specialities]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns',
            'speciality_id' => 'required|exists:specialities,id',
            'phone' => 'required',
            'bio' => 'nullable|max:255',
            'schedule' => 'required',
            'location' => 'required',
            'image' => 'nullable|image|file|max:5000',
            'password' => 'required|min:8',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('Doctor-images', 'public');
        }
        $validateData['password'] = bcrypt($request->password);
        if (true) {
            $validateDataUser = $request->validate([
                'name' => 'required',
                'email' => 'required|email:dns',
                'password' => 'min:8|required',
            ]);
            $validateDataUser['password'] = bcrypt($request->password);
            $validateDataUser['role'] = 'doctor';
            User::create($validateDataUser);
        }
        Doctor::create($validateData);

        return redirect('/dashboard/doctor')->with('success', 'Doctor Added Successfully!');
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
        return view('dashboard.doctor.edit');
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
