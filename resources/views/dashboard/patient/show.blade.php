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
            <img alt="Profile picture of Caren G. Simpson" height="60"
                src="https://storage.googleapis.com/a1aa/image/qAal6cYw9uLwJxKOU65afb6R1X8E9pg7r6VoVTNfLOCvf7snA.jpg"
                width="60" />
            <div class="name">
                <h4>
                    Caren G. Simpson
                    <span class="badge">
                        Active
                    </span>
                </h4>
            </div>
        </div>
        <div class="actions">
            <button class="btn btn-primary">
                Edit Data
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Contact Info
                </div>
                <div class="card-body">
                    <div class="info-item">
                        <span>
                            Phone Number
                        </span>
                        +1 555-123-4567
                    </div>
                    <div class="info-item">
                        <span>
                            Email
                        </span>
                        caren.simpson@example.com
                    </div>
                    <div class="info-item">
                        <span>
                            Address
                        </span>
                        123 Maple Street
                        <br />
                        Springfield, IL, USA
                    </div>
                    <div class="info-item">
                        <span>
                            Emergency Contact
                        </span>
                        John Simpson - Brother
                        <br />
                        +1 555-234-5678
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">
                    General Info
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-item">
                                <span>
                                    Gender
                                </span>
                                Female
                            </div>
                            <div class="info-item">
                                <span>
                                    Age
                                </span>
                                35 years old
                            </div>
                            <div class="info-item">
                                <span>
                                    Date of Birth
                                </span>
                                1989-06-15
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-item">
                                <span>
                                    Occupation
                                </span>
                                Software Engineer
                            </div>
                            <div class="info-item">
                                <span>
                                    Insurance
                                </span>
                                HealthPlus
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
                        <h6>
                            Jun 8, 2027, 4:45 PM
                        </h6>
                        <p>
                            Asthma
                        </p>
                        <p>
                            Ensure the patient always carries an inhaler and avoids allergy triggers.
                        </p>
                    </div>
                    <div class="note">
                        <h6>
                            Apr 9, 2028, 9:15 AM
                        </h6>
                        <p>
                            Hypertension
                        </p>
                        <p>
                            Advise the patient to engage in light exercise and monitor blood pressure weekly.
                        </p>
                    </div>
                    <div class="note">
                        <h6>
                            Oct 10, 2027, 2:30 PM
                        </h6>
                        <p>
                            Type 2 Diabetes
                        </p>
                        <p>
                            Patient needs to monitor blood sugar levels regularly &amp; follow the recommended diet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection