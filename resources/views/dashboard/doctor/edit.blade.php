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
                            <label>Age</label>
                            <input type="text" name="age" value="{{ old('age', $doctor->age ?? '') }}" class="form-control" />
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control select">
                                <option value="Female" {{ old('gender', $doctor->gender ?? '')=='Female' ? 'selected' : '' }}>Female</option>
                                <option value="Male" {{ old('gender', $doctor->gender ?? '')=='Male' ? 'selected' : '' }}>Male</option>
                            </select>
                            @error('gender')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Schedule</label>
                            <select name="schedule" class="form-control select">
                                <option value="">Choose Schedule</option>
                                <option value="Monday to Friday: 9:00 AM - 5:00 PM" {{
                                    old('schedule', $doctor->schedule ?? '')=='Monday to Friday: 9:00 AM - 5:00 PM' ? 'selected' : '' }}>Monday
                                    to Friday: 9:00 AM - 5:00 PM
                                </option>
                                <option value="Monday to Friday: 12:00 AM - 3:00 PM" {{
                                    old('schedule', $doctor->schedule ?? '')=='Monday to Friday: 12:00 AM - 3:00 PM' ? 'selected' : '' }}>Monday
                                    to Friday: 12:00 AM - 3:00 PM
                                </option>
                                <option value="Monday: 10:00 AM - 5:00 PM" {{
                                    old('schedule', $doctor->schedule ?? '')=='Monday: 10:00 AM - 5:00 PM' ? 'selected' : '' }}>Monday: 10:00 AM
                                    - 5:00 PM
                                </option>
                            </select>
                            @error('schedule')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Speciality</label>
                            <select name="speciality_id" class="form-control select">
                                <option value="" selected disabled>Choose Speciality</option>
                                @foreach ($specialities as $speciality)
                                <option value="{{ $speciality->id }}" {{ old('speciality_id', $doctor->speciality_id ?? '') == "$speciality->id" ? 'selected' : '' }}>
                                    {{$speciality->name}}
                                </option>
                                @endforeach
                                @error('speciality_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </select>
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
                            <input type="hidden" name="oldImage" value="{{ $doctor->image }}">
                            <img src="{{ asset('storage/' . $doctor->image) }}" id="file-preview">
                            <label for="formFile" class="form-label">
                                Choose profile photo
                            </label>
                            <input id="file-input" name="image" type="file" class="form-control" />
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
