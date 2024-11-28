<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Medical Website</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href={{ asset('assets/img/favicon.png') }} rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('assets/css/style.css')}}>
</head>

<body>
    <x-topnavbar></x-topnavbar>

    <header class="d-flex position-sticky top-0 h-100" style="background-color: #1F2B6C; z-index: 999;">
        <x-navbar></x-navbar>
    </header>

    @yield('content')

    <x-footer></x-footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src={{asset('assets/js/script.js')}}></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>