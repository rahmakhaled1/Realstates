<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/media/icons/logo-tap.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('assets/media/icons/logo-tap.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('assets/media/icons/logo-tap.png') }}" />
    <meta name="color-scheme" content="light only">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('styles')


    <title>@yield('title', 'Dashboard')</title>
</head>

<body>
<!-- Start Nav -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ URL('seller') }}">
            Dashboard
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('edit-user-profile')}}">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL('seller') }}">
                        <i class="fa-duotone fa-house"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out-alt"></i> Logout
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- End Nav -->

<!-- Start All products -->
<div class="container pt-120">
    <div class="card-header">
        <h3 class="text-center mb-4">@yield('title', '')</h3>
    </div>
</div>
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
