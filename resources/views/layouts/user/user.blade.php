<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Helipost</title>

    <meta name="description"
          content="Helipost">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{asset('assets/logo/Logo.svg')}}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{asset('assets/logo/Logo.svg')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/logo/Logo.svg')}}">

    <!-- Modules -->
    @yield('css')

    @vite(['resources/sass/main.scss', 'resources/js/oneui/app.js'])

    @yield('js')

</head>

<body>


<div id="page-container"
     class=" page-header-fixed" style="background:#F4F7FD">
    <header id="page-header" class="py-2 shadow-sm" style="background: #ffffff">
        <!-- Header Content -->
        <div class=" container d-flex flex-wrap align-items-center justify-content-between h-100">
            <!-- Left Section -->
            <div class="d-flex  align-items-center col-lg-2 h-100 ">

                <div class="nav-items w-100 header-a-logo h-100  d-flex align-items-center">
                    <a class="d-flex align-items-center" style="height: 50px" href="{{route('user.home')}}"> <img
                            style="object-fit: scale-down;height: 100%" src="{{asset('assets/logo/Logo.svg')}}" alt="">
                        <span class="logo  fw-medium">Heli</span><span class="logo d-block fw-bolder">Post</span> </a>
                </div>

                <!-- END Search Form -->
            </div>

            <div class="h-100 col-lg-8 d-flex align-items-center  justify-content-end">


                    <a href="{{route('user.home')}}" class="nav-item fw-semibold mx-2 {{ request()->url()==route('user.home') ? 'active' : '' }}">Home</a>
                    <a href="{{route('user.messages')}}" class="nav-item fw-semibold mx-2 {{ request()->url()==route('user.messages') ? 'active' : '' }}">Messages</a>
                    <a href="{{route('user.orders.create')}}" class="nav-item fw-semibold mx-2 {{ request()->url()==route('user.orders.create') ? 'active' : '' }}">Pickup Request</a>
                    <a href="{{route('user.profile.edit')}}" class="nav-item fw-semibold mx-2 {{ in_array(request()->url(),[route('user.profile.edit'),route('user.orders.index')]) ? 'active' : '' }}">Profile</a>


            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="d-flex justify-content-center align-items-center col-lg-2">
                <!-- User Dropdown -->

                @if(\Illuminate\Support\Facades\Auth::check())
                <button class="btn btn-sm logout-btn" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout <i class="fa-solid fa-right-from-bracket"></i>
                </button>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @else
                    <a href="{{route('login')}}" class="btn btn-sm logout-btn">Login</a>
                @endif
                <!-- END User Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->


        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-body-extra-light">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->
    <!-- Main Container -->
    <main id="main-container">
        <div class="content w-100">
            @yield('content')
        </div>
    </main>
    <!-- END Main Container -->


</div>
<!-- END Page Container -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/filepond.min.js')}}"></script>
<script src="{{asset('assets/js/fontawesome/all.min.js')}}"></script>
<script src="{{asset('assets/js/sweetalert2.all.js')}}"></script>
<script src="{{asset('assets/js/select2.full.min.js')}}"></script>

@yield('scripts')
</body>

</html>
