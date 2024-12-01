<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <title>Medical Management System</title>
    <link href={{ asset('assets/img/favicon.png') }} rel="shortcut icon" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('assets/plugins/select2/css/select2.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/css/animate.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/dataTables.bootstrap4.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/plugins/fontawesome/css/all.min.css') }} />
    <link rel="stylesheet" href={{ asset('assets/css/styledashboard.css') }} />

</head>

<body>
    @include('sweetalert::alert')
    <div id="global-loader">
        <div class="whirly-loader"></div>
    </div>

    <div class="main-wrapper">
        <div class="header">
            <div class="header-left active">
                <a href="/dashboard" class="logo">
                    <img src={{ asset('assets/img/logo.png') }} alt="" />
                </a>
                <a href="/dashboard" class="logo-small">
                    <img src={{ asset('assets/img/logo.png') }} alt="" />
                </a>
                <a id="toggle_btn" href="javascript:void(0);"> </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">
                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>
                        <form action="#">
                            <div class="searchinputs">
                                <input type="text" placeholder="Search Here ..." />
                                <div class="search-addon">
                                    <span><img src={{ asset('assets/img/icons/closes.svg') }} /></span>
                                </div>
                            </div>
                            <a class="btn" id="searchdiv"><img src={{ asset('assets/img/icons/search.svg') }} /></a>
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <img src={{ asset('assets/img/icons/notification-bing.svg') }} />
                        <span class="badge rounded-pill">4</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src={{ asset('assets/img/profiles/avatar-17.jpg') }} />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Rolland Webber</span>
                                                    completed task
                                                    <span class="noti-title">Patient and Doctor video
                                                        conferencing</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src={{ asset('assets/img/profiles/avatar-13.jpg') }} />
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details">
                                                    <span class="noti-title">Bernardo Galaviz</span>
                                                    added new task
                                                    <span class="noti-title">Private chat module</span>
                                                </p>
                                                <p class="noti-time">
                                                    <span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                width="65" />
                            <span class="status online"></span>
                        </span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="https://cdn-icons-png.flaticon.com/512/149/149071.png"
                                        width="65" />
                                    <span class="status online"></span>
                                </span>
                                <div class="profilesets">
                                    <h6>{{ Auth::user()->name }}</h6>
                                    <h5>{{ Auth::user()->role }}</h5>
                                </div>
                            </div>
                            <hr class="m-0" />
                            <a class="dropdown-item" href="/my-profile/{{Auth::user()->id}}">
                                <i class="me-2" data-feather="user"></i>
                                My Profile
                            </a>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item logout pb-0">
                                    <img src={{ asset('assets/img/icons/log-out.svg') }} class="me-2" />
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa fa-ellipsis-v"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="/my-profile/{{ Auth::user()->id }}">My Profile</a>
                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item logout pb-0">
                            <img src={{ asset('assets/img/icons/log-out.svg') }} class="me-2" />
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                            <a href="/dashboard"><img src={{ asset('assets/img/icons/dashboard.svg') }} />
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="/dashboard/appointment"
                                class="{{ request()->is('dashboard/appointment*') ? 'active' : '' }}"><img src={{
                                    asset('assets/img/icons/appointment.svg') }} />
                                <span>Appointment</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/dashboard/appointment"
                                        class="{{ request()->is('dashboard/appointment') ? 'active' : '' }}">Appointment
                                        List</a></li>
                                <li><a href="/dashboard/appointment/create"
                                        class="{{ request()->is('dashboard/appointment/create') ? 'active' : '' }}">Add
                                        Appointment</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="/dashboard/doctor"
                                class="{{ request()->is('dashboard/doctor*') ? 'active' : '' }}"><img src={{
                                    asset('assets/img/icons/doctor.svg') }} />
                                <span>Doctor</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/dashboard/doctor"
                                        class="{{ request()->is('dashboard/doctor') ? 'active' : '' }}">Doctor List</a>
                                </li>
                                <li><a href="/dashboard/doctor/create"
                                        class="{{ request()->is('dashboard/doctor/create') ? 'active' : '' }}">Add
                                        Doctor</a></li>
                            </ul>
                        </li>
                        <li class="submenu ">
                            <a href="/dashboard/patient"
                                class="{{ request()->is('dashboard/patient*') ? 'active' : '' }}"><img src={{
                                    asset('assets/img/icons/patient.svg') }} />
                                <span>Patient</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/dashboard/patient"
                                        class="{{ request()->is('dashboard/patient') ? 'active' : '' }}">Patient
                                        List</a></li>
                                <li><a href="/dashboard/patient/create"
                                        class="{{ request()->is('dashboard/patient/create') ? 'active' : '' }}">Add
                                        Patient</a></li>
                            </ul>
                        </li>
                        <li class="submenu ">
                            <a href="/dashboard/user"
                                class="{{ request()->is('dashboard/user*') ? 'active' : '' }}"><img src={{
                                    asset('assets/img/icons/user.svg') }} />
                                <span>Employee</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/dashboard/user"
                                        class="{{ request()->is('dashboard/user') ? 'active' : '' }}">Employee List</a>
                                </li>
                                <li><a href="/dashboard/user/create"
                                        class="{{ request()->is('dashboard/user/create') ? 'active' : '' }}">Add
                                        Employee</a></li>
                            </ul>
                        </li>
                        <li class="submenu ">
                            <a href="/dashboard/speciality"
                                class="{{ request()->is('dashboard/specility*') ? 'active' : '' }}"><img src={{
                                    asset('assets/img/icons/service.svg') }} />
                                <span>Department</span>
                                <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="/dashboard/speciality"
                                        class="{{ request()->is('dashboard/speciality') ? 'active' : '' }}">Department
                                        List</a></li>
                                <li><a href="/dashboard/speciality/create"
                                        class="{{ request()->is('dashboard/speciality/create') ? 'active' : '' }}">Add
                                        Department</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <script src={{ asset('assets/js/jquery-3.6.0.min.js') }}></script>
        <div class="page-wrapper">
            @yield('content')
        </div>

    </div>

    <script src={{ asset('assets/js/feather.min.js') }}></script>
    <script src={{ asset('assets/js/jquery.slimscroll.min.js') }}></script>
    <script src={{ asset('assets/js/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('assets/plugins/select2/js/select2.min.js') }}></script>
    <script src={{ asset('assets/js/dataTables.bootstrap4.min.js') }}></script>
    <script src={{ asset('assets/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('assets/js/scriptdashboard.js') }}></script>
    <script src={{ asset('assets/js/jfileinput.js') }}></script>

</body>

</html>