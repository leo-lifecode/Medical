@extends('layout.homelayout')


@section('content')


<div class="container">

    <div class="text-center mt-4">
        <h2>Appointment</h2>
    </div>
    <div class="text-center text-primary">
        @if (session('success'))
            <h4>{{ session('success') }}</h4>
        @endif
    </div>

    <div class="row my-5">
        <div class="col">
            <div class="table-responsive md">
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