@extends('dashboard.layout.layoutdashboard')

@section('content')
<div class="content">
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
</div>
@endsection