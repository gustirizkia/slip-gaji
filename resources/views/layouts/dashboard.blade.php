<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" sizes="144x144" href="{{ asset('image/logo-icon.png') }}">
    <title>@yield('title', 'Dashboard') | UNPAM</title>

    @include('includes.style-dashboard')
</head>

<body>
    <div id="app">
        @include('includes.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>@yield('title', 'Dashboard')</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Table</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            {{-- allert --}}
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>success!</strong> {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            {{-- endallert --}}

            {{-- validasi --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong class="text-white">ERROR!</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            {{-- validasi end --}}
            @yield('content')
        </div>
    </div>
    <script src="{{asset('dashboard/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('dashboard/dist/assets/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('dashboard/dist/assets/js/main.js')}}"></script>
    @include('sweetalert::alert')
</body>

</html>
