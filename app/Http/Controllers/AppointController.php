<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class AppointController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.appointment.index', ['appointments' => Appointment::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        appointment::insert([
            'user_id' => Auth::user()->id,
            'email' => $request->email,
            'phone' => $request->phone,
            'doctor_id' => $request->doctor_id,
            'status' => 'Pending',
            'date' => $request->date,
            'time' => $request->time
        ]);

        return redirect("/appointment")->with('success', 'Appointment Booked Successfully!');
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
    public function update(Request $request, Appointment $appointment)
    {
        $appointment->status = $request->status;
        $appointment->save();
        alert()->success('Success', 'appointment Updated Successfully!');
        return redirect('/dashboard/appointment');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        alert()->success('Success', 'appointment Deleted Successfully!');
        return redirect('/dashboard/appointment');
    }
}
