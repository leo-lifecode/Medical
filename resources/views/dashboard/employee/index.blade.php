@extends('dashboard.layout.layoutdashboard')

@section('content')

<div class="content">
    <div class="page-header">
        <div class="page-title">
            <h4>Employee List</h4>
            <h6>Manage your Employee</h6>
        </div>
        <div class="page-btn">
            <a href="/dashboard/user/create" class="btn btn-added"><img src={{
                    asset('assets/img/icons/plus-circle.svg') }} class="me-1" />Add New Employee</a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-top">
                <div class="search-set">
                    <div class="search-input">
                        <a class="btn btn-searchset"><img src={{ asset('assets/img/icons/search.svg') }} width="15" /></a>
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
                            <th>Profile</th>
                            <th>Employee Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>
                                <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                </label>
                            </td>
                            <td class="productimgname">
                                <a href="javascript:void(0);" class="product-img">
                                    <img src={{ asset('storage/'.$user->image) }} />
                                </a>
                            </td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <td class="">
                                <a class="me-3" href="/dashboard/user/{{$user->id}}/edit">
                                    <img src={{ asset('assets/img/icons/edit.svg') }} />
                                </a>
                                <a class="confirm-text" href="javascript:void(0);" data-confirm-delete="true">
                                    <form action="/dashboard/user/{{$user->id}}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn mb-1">
                                            <img src={{ asset('assets/img/icons/delete.svg') }} />
                                        </button>
                                    </form>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection