@extends('dashboard.layout.layoutdashboard')

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Doctor Edit</h4>
        </div>
    </div>

    <div class="card">
        <form action="/dashboard/doctor/{{$doctor->id}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Doctor Name</label>
                            <input type="text" name="name" value="{{ old('name', $doctor->name ?? '') }}" class="form-control" />
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Schedule</label>
                            <select name="schedule" class="form-control select">
                                <option value="">Choose Schedule</option>
                                <option value="Morning" {{ old('schedule', $doctor->schedule ?? '') == 'Morning' ? 'selected' : '' }}>Morning</option>
                                <option value="Afternoon" {{ old('schedule', $doctor->schedule ?? '') == 'Afternoon' ? 'selected' : '' }}>Afternoon</option>
                            </select>
                            @error('schedule')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Speciality</label>
                            <select name="speciality" class="form-control select">
                                <option value="">Choose Speciality</option>
                                <option value="Cardiology" {{ old('speciality', $doctor->speciality ?? '') == 'Cardiology' ? 'selected' : '' }}>Cardiology</option>
                                <option value="Neurology" {{ old('speciality', $doctor->speciality ?? '') == 'Neurology' ? 'selected' : '' }}>Neurology</option>
                            </select>
                            @error('speciality')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" name="location" value="{{ old('location', $doctor->location ?? '') }}" class="form-control" />
                            @error('location')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email', $doctor->email ?? '') }}" class="form-control" />
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{ old('phone', $doctor->phone ?? '') }}" class="form-control" />
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Bio</label>
                            <textarea name="bio" class="form-control">{{ old('bio', $doctor->bio ?? '') }}</textarea>
                            @error('bio')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Doctor Image</label>
                            <div class="image-upload">
                                <input type="file" name="image" class="form-control" />
                                <div class="image-uploads">
                                    <img src="{{ asset('assets/img/icons/upload.svg') }}" />
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit">Submit</button>
                        <a href="/dashboard/doctor" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
