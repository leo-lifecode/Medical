<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialities = Speciality::all();
        $title = 'Delete Data!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('dashboard.department.index', ['specialities' => $specialities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|file|max:5000',
            'description' => 'nullable',
            'about' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('Speciality-images', 'public');
        }

        Speciality::create($validatedData);
        Alert::success('Success!', 'Speciality Created Successfully!');
        return redirect('/dashboard/speciality');
    }

    /**
     * Display the specified resource.
     */
    public function show(Speciality $speciality)
    {
        return view('dashboard.department.show', ['speciality' => $speciality]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speciality $speciality)
    {
        return view('dashboard.department.edit', ['speciality' => $speciality]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Speciality $speciality)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|file|max:5000',
            'description' => 'nullable',
            'about' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('Speciality-images', 'public');
        }

        $speciality->update($validatedData);
        Alert::success('Success!', 'Speciality Created Successfully!');
        return redirect('/dashboard/speciality');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speciality $speciality)
    {
        if ($speciality->image) {
            Storage::delete($speciality->image);
        }

        $speciality->delete();
        alert()->success('Success', 'Speciality Deleted Successfully!');
        return redirect('/dashboard/speciality');
    }
}
