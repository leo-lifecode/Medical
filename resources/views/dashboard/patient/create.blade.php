@extends('dashboard.layout.layoutdashboard')

@section('content')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Create Patient</h4>
        </div>
    </div>

    <div class="card">
        <form action="/dashboard/patient" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Patient Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" />
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="age" value="{{ old('age') }}" class="form-control" />
                            @error('age')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Date of birth</label>
                            <input type="text" name="dob" value="{{ old('dob') }}" class="form-control" />
                            @error('dob')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control select">
                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                            </select>
                            @error('gender')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" value="{{ old('address') }}" class="form-control" />
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" />
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" />
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Treatment</label>
                            <input type="text" name="treatment" value="{{ old('treatment') }}" class="form-control" />
                            @error('treatment')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Doctor</label>
                            <select name="doctor_id" class="form-control select">
                                @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->id }}" {{ old('doctor_id') == $doctor->id ? 'selected' : '' }}>{{ $doctor->name }}</option>
                                @endforeach
                            </select>
                            @error('doctor_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Room</label>
                            <input type="text" name="room" value="{{ old('room') }}" class="form-control" />
                            @error('room')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Notes</label>
                            <trix-toolbar id="my_toolbar"></trix-toolbar>
                            <div class="more-stuff-inbetween"></div>
                            <input id="notes" type="hidden" name="notes" value="{{ old('notes') }}">
                            <trix-editor toolbar="my_toolbar" input="notes"></trix-editor>
                            @error('notes')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="formFile" class="form-label">Choose profile photo</label>
                            <input id="file-input" name="image" type="file" class="form-control" />
                            @error('image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit">Submit</button>
                        <a href="/dashboard/patient" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
