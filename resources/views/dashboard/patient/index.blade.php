@extends('dashboard.layout.layoutdashboard')

@section('content')

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Patient List</h4>
            <h6>Manage your Patients</h6>
        </div>
        <div class="page-btn">
            <a href="/dashboard/patient/create" class="btn btn-added"><img src={{
                    asset('assets/img/icons/plus-circle.svg') }} class="me-1" />Add New Patient</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-top">
                <div class="search-set">
                    <div class="search-input">
                        <a class="btn btn-searchset"><img src={{ asset('assets/img/icons/search.svg') }} width="15" /></a>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table datanew">
                    <thead>
                        <tr>
                            <th>
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all" />
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Treatment</th>
                            <th>Doctor Assigned</th>
                            <th>Room</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($patients as $patient)
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src={{ asset('storage/'.$patient->image) }} />
                                </a>
                            </td>
                            <td>{{$patient->name}}</td>
                            <td>{{$patient->age}}</td>
                            <td>{{$patient->treatment}}</td>
                            <td>{{$patient->doctor->name}}</td>
                            <td>{{$patient->room}}</td>
                            <td class="">
                                <a class="me-3" href="/dashboard/patient/{{$patient->id}}">
                                    <img src={{ asset('assets/img/icons/eye.svg') }} />
                                </a>
                                <a class="me-3" href="/dashboard/patient/{{$patient->id}}/edit">
                                    <img src={{ asset('assets/img/icons/edit.svg') }} />
                                </a>
                                <a class="confirm-text" href="/dashboard/patient/{{$patient->id}}" data-confirm-delete="true">
                                    <img src={{ asset('assets/img/icons/delete.svg') }} />
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection