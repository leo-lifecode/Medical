@extends('dashboard.layout.layoutdashboard')

@section('content')

<div class="content">
    <div class="row">
        <!-- Patients -->
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count">
                <div class="dash-counts">
                    <h4>{{ $totalPatients }}</h4>
                    <h5>Patients</h5>
                </div>
                <div class="dash-imgs">
                    <i data-feather="user"></i>
                </div>
            </div>
        </div>
        <!-- Doctors -->
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das1">
                <div class="dash-counts">
                    <h4>{{ $totalDoctors }}</h4>
                    <h5>Doctors</h5>
                </div>
                <div class="dash-imgs">
                    <i data-feather="user-check"></i>
                </div>
            </div>
        </div>
        <!-- Appointments -->
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das2">
                <div class="dash-counts">
                    <h4>{{ $totalAppointments }}</h4>
                    <h5>Appointments</h5>
                </div>
                <div class="dash-imgs">
                    <i data-feather="calendar"></i>
                </div>
            </div>
        </div>
        <!-- Departments -->
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das3">
                <div class="dash-counts">
                    <h4>{{ $totalDepartments }}</h4>
                    <h5>Departments</h5>
                </div>
                <div class="dash-imgs">
                    <i data-feather="briefcase"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6 col-12">
            <canvas id="patientChart"></canvas>
        </div>
        <div class="col-lg-6 col-12">
            <canvas id="appointmentChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Data dari server
    const months = @json($months);
    const patientsData = @json($patientsData);
    const appointmentsData = @json($appointmentsData);

    // Bar Chart for Patients
    const patientCtx = document.getElementById('patientChart').getContext('2d');
    new Chart(patientCtx, {
        type: 'bar',
        data: {
            labels: months,
            datasets: [{
                label: 'Patients',
                data: patientsData,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Line Chart for Appointments
    const appointmentCtx = document.getElementById('appointmentChart').getContext('2d');
    new Chart(appointmentCtx, {
        type: 'line',
        data: {
            labels: months,
            datasets: [{
                label: 'Appointments',
                data: appointmentsData,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endsection
