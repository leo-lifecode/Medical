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
                <img src="https://storage.googleapis.com/a1aa/image/9f60gkRjb4Xif0iJcPNfJxOMK4Yv5CcLk6iYhtVDkeRBgzZPB.jpg"
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
                                {{-- <form action="/dashboard/speciality/{{$speciality->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn p-0 btn-danger">Delete</button>
                                </form> --}}
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