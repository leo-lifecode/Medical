<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    
    {
        $totalPatients = DB::table('patients')->count();

        // Count the total number of doctors
        $totalDoctors = DB::table('doctors')->count();

        // Count the total number of appointments
        $totalAppointments = DB::table('appointments')->count();

        // Count the total number of departments
        $totalDepartments = DB::table('specialities')->count();


        // Get patients count grouped by month
        $patientsPerMonth = DB::table('patients')
            ->select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month');

        // Get appointments count grouped by month
        $appointmentsPerMonth = DB::table('appointments')
            ->select(DB::raw('MONTH(date) as month'), DB::raw('COUNT(*) as count'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month');

        // Prepare month labels
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        // Initialize data arrays with zeros for all 12 months
        $patientsData = array_fill(0, 12, 0);
        $appointmentsData = array_fill(0, 12, 0);

        // Populate patients data by month
        foreach ($patientsPerMonth as $month => $count) {
            $patientsData[$month - 1] = $count;
        }

        // Populate appointments data by month
        foreach ($appointmentsPerMonth as $month => $count) {
            $appointmentsData[$month - 1] = $count;
        }

        return view('dashboard.index', compact('patientsData', 'appointmentsData', 'months', 'totalPatients', 'totalDoctors', 'totalAppointments', 'totalDepartments'));
    }
}
