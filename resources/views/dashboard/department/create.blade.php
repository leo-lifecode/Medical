@extends('dashboard.layout.layoutdashboard')

@section('content')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Medical Add Department</h4>
            <h6>Create new Medical Department</h6>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="/dashboard/speciality" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="row">
                    <!-- Department Name -->
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="name">Department Name</label>
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" />
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- about -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="about">About</label>
                            <textarea name="about" id="about"
                                class="form-control @error('about') is-invalid @enderror">{{ old('about') }}</textarea>
                            @error('about')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <trix-toolbar id="my_toolbar"></trix-toolbar>
                            <div class="more-stuff-inbetween"></div>
                            <input id="description" type="hidden" name="description">
                            <trix-editor toolbar="my_toolbar" input="description"></trix-editor>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Medical Image -->
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

                    <!-- Submit and Cancel Buttons -->
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-submit me-2">Submit</button>
                        <a href="/dashboard/speciality" class="btn btn-cancel">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection