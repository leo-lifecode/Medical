<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.patient.index', ['patients' => Patient::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.patient.create',['doctors' => Doctor::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'dob' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:patients',
            'phone' => 'required|string|max:15',
            'treatment' => 'required|string|max:255',
            'doctor_id' => 'required|exists:doctors,id',
            'room' => 'required|string|max:50',
            'notes' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('patients', 'public');
        }

        Patient::create([
            'name' => $request->name,
            'age' => $request->age,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'treatment' => $request->treatment,
            'doctor_id' => $request->doctor_id,
            'room' => $request->room,
            'notes' => $request->notes,
            'image' => $imagePath, 
        ]);

        alert()->success('Success!', 'Patient Added Successfully!');
        return redirect('/dashboard/patient');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        return view('dashboard.patient.show', ['patient' => $patient]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        return view('dashboard.patient.edit',['patient' => $patient] , ['doctors' => Doctor::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'dob' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:patients,email,' . $id, // Exclude current email
            'phone' => 'required|string|max:15',
            'treatment' => 'required|string|max:255',
            'doctor_id' => 'required|exists:doctors,id',
            'room' => 'required|string|max:50',
            'notes' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $patient = Patient::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($patient->image && Storage::exists('public/' . $patient->image)) {
                Storage::delete('public/' . $patient->image);
            }

            $imagePath = $request->file('image')->store('patients', 'public');
        } else {
            $imagePath = $patient->image;
        }

        $patient->update([
            'name' => $request->name,
            'age' => $request->age,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'treatment' => $request->treatment,
            'doctor_id' => $request->doctor_id,
            'room' => $request->room,
            'notes' => $request->notes,
            'image' => $imagePath, 
        ]);
        toast('Edit Data Successfully!', 'success');
        return redirect('/dashboard/patient');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        if($patient->image){
            Storage::delete($patient->image);
        }
        
        $patient->delete();
        alert()->success('Success', 'Patient Deleted Successfully!');
        return redirect('/dashboard/patient');
    }
}
