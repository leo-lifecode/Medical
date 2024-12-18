@extends('dashboard.layout.layoutdashboard')

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Appointment List</h4>
            <h6>Manage your Appointment</h6>
        </div>
        {{-- <div class="page-btn">
            <a href="/dashboard/doctor/create" class="btn btn-added"><img src={{
                    asset('assets/img/icons/plus-circle.svg') }} class="me-1" />Add New Doctor</a>
        </div> --}}
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-top">
                <div class="search-set">
                    <div class="search-input">
                        <a class="btn btn-searchset"><img src={{ asset('assets/img/icons/search.svg') }}
                                width="15" /></a>
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
                            <th>Name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Doctor</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td>{{$appointment->user->name}}</td>
                            <td>{{$appointment->date}}</td>
                            <td>{{$appointment->time}}</td>
                            <td>{{$appointment->doctor->name}}</td>
                            <td><span class="badges {{$appointment->status == 'Approved' ? 'bg-lightgreen' : 'bg-danger'}}">{{$appointment->status}}</span></td>
                            <td class="d-flex align-items-center gap-1">
                                <a class="" href="javascript:void(0);">
                                    <form action="/dashboard/appointment/{{$appointment->id}}" method="POST" class="d-inline">
                                        @method('PUT')
                                        @csrf
                                        <input type="text" name="status" hidden value="Reschedule">
                                        <button type="submit" class="btn badges bg-black">Reschedule</button>
                                    </form>
                                </a>
                                <a class="" href="javascript:void(0);">
                                    <form action="/dashboard/appointment/{{$appointment->id}}" method="POST" class="d-inline">
                                        @method('PUT')
                                        @csrf
                                        <input type="text" name="status" hidden value="Approved">
                                        <button type="submit" class="btn badges bg-lightgreen">Approved</button>
                                    </form>
                                </a>
                                <a class="confirm-text" href="javascript:void(0);"
                                    data-confirm-delete="true">
                                    <form action="/dashboard/appointment/{{$appointment->id}}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn badges bg-danger">Delete</button>
                                    </form>
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