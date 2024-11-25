<nav class="navbar navbar-expand-md text-white w-100 d-flex align-items-center">
    <div class="container">
        <div class="pb-2">
            <h1 class="text-white m-0 fs-2"><a href="/" class="text-decoration-none text-white">Medical</a></h1>
        </div>
        <button class="navbar-toggler pb-2" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar"
            aria-expanded="false">
            <img src={{ asset('assets/img/svg/burger.svg') }} alt="">
        </button>
        <div class="collapse navbar-collapse nav__menu" id="mynavbar">
            <ul class="navbar-nav ms-auto d-flex justify-content-center align-items-center gap-1">
                <li class="nav-item">
                    <a class="nav-link text-white flex-shrink-0 d-flex" href="#aboutus">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#doctors">Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" data-bs-toggle="modal" href="#exampleModalToggle">Appointment</a>
                </li>

                @auth
                <button type="button" class="btn-nav btn btn-primary px-3 rounded flex-shrink-0">
                    <a href="/dashboard" class="text-decoration-none text-white">Dashboard</a>
                </button>

                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="btn-nav btn btn-primary px-3 rounded flex-shrink-0">
                        Logout
                    </button>
                </form>
                @else
                    <button type="button" class="btn-nav btn btn-primary px-3 rounded flex-shrink-0">
                        <a href="/login" class="text-decoration-none text-white">Login / Sign Up</a>
                    </button>
                @endauth
            </ul>
        </div>

    </div>


</nav>