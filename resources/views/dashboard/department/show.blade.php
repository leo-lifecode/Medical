@extends('dashboard.layout.layoutdashboard')

@section('content')

<div class="container mt-4 content">
    <div class="card">
        <img class="card-img-top" height="100"
            src="{{asset('storage/'.$speciality->image)}}"
            width="500" />
        <div class="card-body">
            <h1 class="card-title">{{$speciality->name}}</h1>
            <h4 class="mt-4">
                About
            </h4>
            <p>{{$speciality->about}}</p>
            <h4 class="mt-4">
                Description
            </h4>
            <div>{{$speciality->description}}</div>
        </div>
    </div>
</div>

@endsection