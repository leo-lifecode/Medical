@extends('dashboard.layout.layoutdashboard')

@section('content')

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>user Edit</h4>
        </div>
    </div>

    <div class="card">
        <form action="/dashboard/user/{{$user->id}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>user Name</label>
                            <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}"
                                class="form-control" />
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" value="{{ old('email', $user->email ?? '') }}"
                                class="form-control" />
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" />
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
                                <option value="user" {{ old('schedule', $user->role ?? '')=='user' ? 'selected' : ''
                                    }}>user</option>
                                <option value="admin" {{ old('schedule', $user->role ?? '')=='admin' ? 'selected' : ''
                                    }}>admin</option>
                                <option value="doctor" {{old('schedule', $user->role ?? '')=='doctor' ? 'selected' : ''
                                    }}>doctor</option>
                            </select>
                            @error('schedule')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="hidden" name="oldImage" value="{{ $user->image }}">
                            <img src="{{ asset('storage/' . $user->image) }}" id="file-preview">
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
                        <a href="/dashboard/user" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection