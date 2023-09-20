<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header">
        <!-- Logo -->
        <a class="font-semibold text-dual" href="/">
          <span class="smini-visible">
           <img
               style="object-fit: scale-down;width: 20px" src="{{asset('assets/logo/Logo.svg')}}" alt="">
          </span>
            <span class="smini-hide fs-5 tracking-wider"><span class="logo  fw-medium">Heli</span><span class="logo fw-bolder">Post</span> </span>
        </a>
        <!-- END Logo -->

        <!-- Extra -->
        <div>

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close"
               href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Extra -->
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="true" href="#">
                        <i class="nav-main-link-icon fa fa-file-invoice"></i>
                        <span class="nav-main-link-name">Accounting</span>
                    </a>
                </li>


                {{--                <li class="nav-main-heading">Various</li>--}}
                <li class="nav-main-item{{
    in_array(request()->url(),[
        route('dashboard.orders.successful')
        ,route('dashboard.orders.withDriver')
        ,route('dashboard.orders.clientNotResponding')
        ,route('dashboard.orders.hasIssue')
        ,route('dashboard.orders.returnedToShipper')
        ,route('dashboard.orders.postponed')
        ,route('dashboard.orders.toResend')]) ? ' open' : ''
}}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="true" href="#">
                        <i class="nav-main-link-icon fa fa-boxes"></i>
                        <span class="nav-main-link-name">Orders</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->url()==route('dashboard.orders.successful') ? ' active' : '' }}"
                               href="{{route('dashboard.orders.successful')}}">
                                <span class="nav-main-link-name">Successful Orders</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->url()==route('dashboard.orders.successful') ? ' active' : '' }}"
                               href="{{route('dashboard.orders.successful')}}">
                                <span class="nav-main-link-name">Ready At Your Office</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->url()==route('dashboard.orders.successful') ? ' active' : '' }}"
                               href="{{route('dashboard.orders.successful')}}">
                                <span class="nav-main-link-name">Arrived At Our Office</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->url()==route('dashboard.orders.withDriver') ? ' active' : '' }}"
                               href="{{route('dashboard.orders.withDriver')}}">
                                <span class="nav-main-link-name">With Driver</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->url()==route('dashboard.orders.clientNotResponding') ? ' active' : ''  }}"
                               href="{{route('dashboard.orders.clientNotResponding')}}">
                                <span class="nav-main-link-name">Client Not responding</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->url()==route('dashboard.orders.clientNotResponding') ? ' active' : ''  }}"
                               href="{{route('dashboard.orders.clientNotResponding')}}">
                                <span class="nav-main-link-name">Client Doesn't want it</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->url()==route('dashboard.orders.hasIssue') ? ' active' : ''  }}"
                               href="{{route('dashboard.orders.hasIssue')}}">
                                <span class="nav-main-link-name">Has issues</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->url()==route('dashboard.orders.returnedToShipper') ? ' active' : '' }}"
                               href="{{route('dashboard.orders.returnedToShipper')}}">
                                <span class="nav-main-link-name">Returned to shipper</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->url()==route('dashboard.orders.toResend') ? ' active' : ''  }}"
                               href="{{route('dashboard.orders.toResend')}}">
                                <span class="nav-main-link-name">To Re-Send</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->url()==route('dashboard.orders.postponed') ? ' active' : '' }}"
                               href="{{route('dashboard.orders.postponed')}} ">
                                <span class="nav-main-link-name">Postponed</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="true" href="#">
                        <i class="nav-main-link-icon fa fa-box"></i>
                        <span class="nav-main-link-name">Batches</span>
                    </a>
                    <ul class="nav-main-submenu">

                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->url()==route('dashboard.orders.postponed') ? ' active' : '' }}"
                               href="">
                                <span class="nav-main-link-name">Pending</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->url()==route('dashboard.orders.postponed') ? ' active' : '' }}"
                               href="">
                                <span class="nav-main-link-name">Done</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="true" href="#">
                        <i class="nav-main-link-icon fa fa-file-invoice"></i>
                        <span class="nav-main-link-name">Invoices</span>
                    </a>
                </li>

                <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="true" href="#">
                        <i class="nav-main-link-icon fa fa-building"></i>
                        <span class="nav-main-link-name">Shippers/Businesses</span>
                    </a>
                </li>
                <li class="nav-main-item{{ request()->url()==route('dashboard.drivers.index') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu"
                       aria-expanded="true" href="{{route('dashboard.drivers.index')}}">
                        <i class="nav-main-link-icon fa fa-drivers-license"></i>
                        <span class="nav-main-link-name">Drivers</span>
                    </a>
                </li>
                <li class="nav-main-item{{ request()->url()==route('dashboard.clients.index') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu"
                       aria-expanded="true" href="{{route('dashboard.clients.index')}}">
                        <i class="nav-main-link-icon fa fa-users"></i>
                        <span class="nav-main-link-name">Clients</span>
                    </a>
                </li>
                <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="true" href="#">
                        <i class="nav-main-link-icon fa fa-gear"></i>
                        <span class="nav-main-link-name">System Settings</span>
                    </a>
                </li>
                <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="true" href="#">
                        <i class="nav-main-link-icon fa fa-user-gear"></i>
                        <span class="nav-main-link-name">My Account Settings</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
