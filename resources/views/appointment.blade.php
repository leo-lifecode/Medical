@extends('layout.homelayout')


@section('content')


<div class="container">

    <div class="text-center mt-4">
        <h2>Appointment</h2>
    </div>
    <div class="text-center text-primary">
        @if (session('success'))
            <h4>{{ session('success') }}</h4>
        @endif
    </div>

    <div class="row my-5">
        <div class="col">
            {{-- <div class="card" style="width: 18rem;">
                <img src={{ asset('assets/img/hero-bg-2.png') }} class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div> --}}
            <div class="table-responsive-md ">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Thornton</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td colspan="2">Larry the Bird</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td colspan="2">Larry the Bird</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            <td colspan="2">Larry the Bird</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>
@endsection