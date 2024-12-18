@extends('dashboard.layout.layoutdashboard')

@section('content')
<style>
    body {
        background-color: #f8f9fa;
    }

    .profile-header {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .profile-header img {
        border-radius: 50%;
        width: 60px;
        height: 60px;
    }

    .profile-header .info {
        display: flex;
        align-items: center;
    }

    .profile-header .info .name {
        margin-left: 15px;
    }

    .profile-header .info .name h2 {
        margin: 0;
        font-size: 1.5rem;
    }

    .profile-header .info .name .badge {
        background-color: #1a202c;
        color: #ffffff;
        font-size: 0.8rem;
        padding: 5px 10px;
        border-radius: 5px;
    }

    .profile-header .actions {
        display: flex;
        align-items: center;
    }

    .profile-header .actions .btn {
        margin-left: 10px;
    }

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #ffffff;
        border-bottom: none;
        font-weight: bold;
    }

    .card-body {
        background-color: #ffffff;
    }

    .card-body .info-item {
        margin-bottom: 10px;
    }

    .card-body .info-item span {
        display: block;
        font-weight: bold;
    }

    .patient-notes .note {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 10px;
    }

    .patient-notes .note h6 {
        margin: 0;
        font-size: 1rem;
        font-weight: bold;
    }

    .patient-notes .note p {
        margin: 5px 0 0;
        font-size: 0.9rem;
    }
</style>
<div class="container mt-5">
    <div class="profile-header">
        <div class="info">
            <img height="60" width="60"
                src="{{ asset('storage/'.$patient->image) }}" />
            <div class="name">
                <h4>{{$patient->name}} <span class="badge"> Active </span> </h4>
            </div>
        </div>
        <div class="actions">
            <a href="/dashboard/patient/{{$patient->id}}/edit">
                <button class="btn btn-primary">
                    Edit Data
                </button>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <h3 class="card-header">
                    Contact Info
                </h3>
                <div class="card-body">
                    <div class="info-item">
                        <span>Phone Number</span>
                        {{$patient->phone}}
                    </div>
                    <div class="info-item">
                        <span> Email </span>
                        {{$patient->email}}
                    </div>
                    <div class="info-item">
                        <span>Address</span>
                        {{$patient->address}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-3">
                <h3 class="card-header">
                    General Info
                </h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-item">
                                <span>Gender</span>
                                {{$patient->gender}}
                            </div>
                            <div class="info-item">
                                <span>Age</span>
                                {{$patient->age}}
                            </div>
                            <div class="info-item">
                                <span>date of birth</span>
                                {{$patient->dob}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card patient-notes">
                <div class="card-header">
                    Patient Notes
                </div>
                <div class="card-body">
                    <div class="note">
                        {!!$patient->notes!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection