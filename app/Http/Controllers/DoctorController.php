<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
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
            'age' => 'required',
            'gender' => 'required',
            'email' => 'required|email:dns',
            'speciality_id' => 'required|exists:specialities,id',
            'phone' => 'required',
            'bio' => 'nullable',
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
        alert()->success('Success!', 'Doctor Added Successfully!');
        return redirect('/dashboard/doctor')->with('success', 'Doctor Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('dashboard.doctor.show', ['doctor' => $doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::find($id);
        $specialities = Speciality::all();
        return view('dashboard.doctor.edit', ['doctor' => $doctor, 'specialities' => $specialities]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'email' => 'required|email:dns',
            'speciality_id' => 'required|exists:specialities,id',
            'phone' => 'required',
            'bio' => 'nullable',
            'schedule' => 'required',
            'location' => 'required',
            'image' => 'nullable|image|file|max:5000',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('Doctor-images', 'public');
        }

        Doctor::where('id', $doctor->id)->update($validateData);

        toast('Edit Data Successfully!', 'success');
        return redirect('/dashboard/doctor');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        if ($doctor->image) {
            Storage::delete($doctor->image);
        }
        User::where('name', $doctor->name)->delete();
        Doctor::destroy($doctor->id);
        alert()->success('Success', 'Doctor Deleted Successfully!');
        return redirect('/dashboard/doctor');
    }
}
