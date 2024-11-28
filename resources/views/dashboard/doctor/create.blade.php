@extends('dashboard.layout.layoutdashboard')

@section('content')
<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Doctor Add</h4>
            <h6>Create new Doctor</h6>
        </div>
    </div>

    <div class="card">
        <form action="/dashboard/doctor" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Doctor Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" />
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Schedule</label>
                            <select name="schedule" class="form-control select">
                                <option value="" selected disabled>Choose Schedule</option>
                                <option value="Morning" {{ old('schedule')=='Morning' ? 'selected' : '' }}>Morning
                                </option>
                                <option value="Evening" {{ old('schedule')=='Evening' ? 'selected' : '' }}>Evening
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
                            <select name="speciality" class="form-control select">
                                <option value="" selected disabled>Choose Speciality</option>
                                <option value="Cardiology" {{ old('speciality')=='Cardiology' ? 'selected' : '' }}>
                                    Cardiology</option>
                                <option value="Neurology" {{ old('speciality')=='Neurology' ? 'selected' : '' }}>
                                    Neurology</option>
                            </select>
                            @error('speciality')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" name="location" value="{{ old('location') }}" class="form-control" />
                            @error('location')
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
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Bio</label>
                            <textarea name="bio" class="form-control">{{ old('bio') }}</textarea>
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