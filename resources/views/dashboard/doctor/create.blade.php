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
                            <label>Age</label>
                            <input type="text" name="age" value="{{ old('age') }}" class="form-control" />
                            @error('age')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="select">
                                <option value="Female" {{ old('gender')=='Female' ? 'selected' : '' }}>Female</option>
                                <option value="Male" {{ old('gender')=='Male' ? 'selected' : '' }}>Male</option>
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
                                <option value="" selected disabled>Choose Schedule</option>
                                <option value="Monday to Friday: 9:00 AM - 5:00 PM" {{
                                    old('schedule')=='Monday to Friday: 9:00 AM - 5:00 PM' ? 'selected' : '' }}>Monday
                                    to Friday: 9:00 AM - 5:00 PM
                                </option>
                                <option value="Monday to Friday: 12:00 AM - 3:00 PM" {{
                                    old('schedule')=='Monday to Friday: 12:00 AM - 3:00 PM' ? 'selected' : '' }}>Monday
                                    to Friday: 12:00 AM - 3:00 PM
                                </option>
                                <option value="Monday: 10:00 AM - 5:00 PM" {{
                                    old('schedule')=='Monday: 10:00 AM - 5:00 PM' ? 'selected' : '' }}>Monday: 10:00 AM
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
                            <label>Password</label>
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control" />
                            @error('password')
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
                                <option value="{{ $speciality->id }}" {{ old('speciality_id')=="$speciality->id"
                                    ? 'selected' : '' }}>
                                    {{$speciality->name}}
                                </option>
                                @endforeach
                            </select>
                            @error('speciality_id')
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


<script>


</script>
@endsection