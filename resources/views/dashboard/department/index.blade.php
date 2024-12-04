@extends('dashboard.layout.layoutdashboard')

@section('content')
<style>
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }
</style>
<div class="container">
    <div class="row">
        <!-- card -->
        @foreach ($specialities as $speciality)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/'.$speciality->image) }}"
                    class="card-img-top" alt="Stethoscope and medical supplies">
                <div class="card-body">
                    <h5 class="card-title">{{$speciality->name}}</h5>
                    <p class="card-text">{{$speciality->about}}</p>
                    <div class="d-flex flex-row-reverse">
                        <div class="">
                            <a href="/dashboard/speciality/{{$speciality->id}}" class="btn btn-primary">See Detail</a>
                            <a href="/dashboard/speciality/{{$speciality->id}}/edit"
                                class="btn btn-warning text-white">Edit</a>

                            <a href="/dashboard/speciality/{{$speciality->id}}" class="btn btn-danger" data-confirm-delete="true">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection