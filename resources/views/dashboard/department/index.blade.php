@extends('dashboard.layout.layoutdashboard')

@section('content')
{{-- <div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Medical Department list</h4>
            <h6>View/Search Medical Department</h6>
        </div>
        <div class="page-btn">
            <a href="/dashboard/department/create" class="btn btn-added">
                <img src={{ asset('"assets/img/icons/plus-circle.svg"') }} class="me-1" />
                Add Department
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-top">
                <div class="search-set">
                    <div class="search-input">
                        <a class="btn btn-searchset"><img src={{ asset('assets/img/icons/search.svg') }}
                                width="15" /></a>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table datanew">
                    <thead>
                        <tr>
                            <th>
                                <label class="checkboxs">
                                    <input type="checkbox" id="select-all" />
                                    <span class="checkmarks"></span>
                                </label>
                            </th>
                            <th>Image</th>
                            <th>Category name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src="assets/img/product/noimage.png" />
                                </a>
                                <a href="javascript:void(0);">Computers</a>
                            </td>
                            <td>Computers Description</td>
                            <td>Admin</td>
                            <td>
                                <a class="me-3" href="editcategory.html">
                                    <img src={{ asset('assets/img/icons/edit.svg') }} />
                                </a>
                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                    <img src={{ asset('assets/img/icons/delete.svg') }} />
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> --}}
<style>
    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .avatar-group img {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid white;
    }

    .avatar-group {
        display: flex;
        align-items: center;
    }

    .avatar-group img:not(:first-child) {
        margin-left: -10px;
    }
</style>
<div class="container">
    <div class="row">
        <!-- General Medicine -->
        @foreach ($specialities as $speciality)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="https://storage.googleapis.com/a1aa/image/9f60gkRjb4Xif0iJcPNfJxOMK4Yv5CcLk6iYhtVDkeRBgzZPB.jpg"
                        class="card-img-top" alt="Stethoscope and medical supplies">
                    <div class="card-body">
                        <h5 class="card-title">{{$speciality->name}}</h5>
                        <p class="card-text">{{$speciality->about}}</p>
                        <div class="d-flex justify-content-between">
                            <div class="avatar-group">
                                <img src="https://storage.googleapis.com/a1aa/image/xjFivYRXGfyzGKaY0MNPzMue1dd0fHwTUv9yrMvYlRfVgzZPB.jpg"
                                    alt="User 1">
                                <img src="https://storage.googleapis.com/a1aa/image/zcXAKVWwHW64OpbEpFWFRT0JlfBYZFkiCFKRMXjugKNBcO7JA.jpg"
                                    alt="User 2">
                                <span class="ml-2">+1 others</span>
                            </div>
                            <div class="">
                                <a href="#" class="btn btn-primary">See Detail</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @endsection