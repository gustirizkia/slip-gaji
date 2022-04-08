<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Default - Mazer Admin Dashboard</title>

    @include('includes.style-dashboard')
</head>

<body>
    <div id="app">
        @include('includes.sidebar')
        @yield('content')
    </div>
    <script src="{{asset('dashboard/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('dashboard/dist/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('dashboard/dist/assets/js/main.js')}}"></script>
</body>

</html>