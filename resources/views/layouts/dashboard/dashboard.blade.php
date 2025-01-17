<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Helipost</title>

    <meta name="description"
          content="">
    <meta name="author" content="kareem Turk">
    <meta name="robots" content="noindex, nofollow">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{asset('assets/logo/Logo.svg')}}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{asset('assets/logo/Logo.svg')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/logo/Logo.svg')}}">

    <!-- Modules -->
    @yield('css')

    @vite(['resources/sass/main.scss', 'resources/js/oneui/app.js'])
    <style>
        :root {
            --bs-body-font-family: 'ADLaM Display', cursive;
        }
    </style>
    @yield('js')
</head>

<body class="bg-light">

<div id="page-container"
     class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
    <!-- Side Overlay-->
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    @include('layouts.dashboard.includes.sidebar')
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="d-flex align-items-center">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class=" btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-sm btn-alt-secondary bg-light me-2 d-none d-lg-inline-block"
                        data-toggle="layout" data-action="sidebar_mini_toggle">
                    <i class="fa fa-fw fa-ellipsis-v"></i>
                </button>
                <!-- END Toggle Mini Sidebar -->

                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout"
                        data-action="header_search_on">
                    <i class="fa fa-fw fa-search"></i>
                </button>

                <!-- END Search Form -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="d-flex align-items-center">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block ms-2">
                    <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                        <img class="rounded-circle" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="Header Avatar"
                             style="width: 21px;">
                        <span class="d-none d-sm-inline-block ms-2">John</span>
                        <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ms-1 mt-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
                         aria-labelledby="page-header-user-dropdown">
                        <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                            <img class="img-avatar img-avatar48 img-avatar-thumb"
                                 src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                            <p class="mt-2 mb-0 fw-medium">John Smith</p>
                            <p class="mb-0 text-muted fs-sm fw-medium">Web Developer</p>
                        </div>
                        <div class="p-2">
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)">
                                <span class="fs-sm fw-medium">Profile</span>
                                <span class="badge rounded-pill bg-primary ms-2">1</span>
                            </a>
                        </div>
                        <div role="separator" class="dropdown-divider m-0"></div>
                        <div class="p-2">

                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                               href="javascript:void(0)">
                                <span class="fs-sm fw-medium">Log Out</span>
                            </a>
                        </div>
                    </div>
                </div>
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
        @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-3">
            <div class="row fs-sm">
                <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                                                                               href="https://1.envato.market/ydb"
                                                                               target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                    <a class="fw-semibold" href="https://1.envato.market/AVD6j" target="_blank">OneUI</a> &copy; <span
                        data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->
</body>

</html>
