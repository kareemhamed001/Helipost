@extends('layouts.user.user')
@section('content')

    <section class="container d-flex flex-wrap">
        <div class="col-md-4 col-12">
            <ul class="nav-items shadow-sm" style="background-color: var(--form-color)">
                <li class="nav-item rounded border-bottom px-3 py-3 d-flex align-items-center">
                    <img
                        style="height: 70px;border-radius: 50% ;width: 70px;object-fit: contain;border: 1.5px solid var(--primary-color)"
                        src="{{asset('media/IMG_0073.jpg')}}" alt="">
                    <div class="mx-3">
                        <div class="h2 p-0 m-0">Kareem</div>
                        <div class="fw-normal h3 m-0" style="color: var(--muted-text-color)">0123456789</div>
                    </div>
                </li>

                <li class="nav-item rounded border-bottom px-3 py-4 d-flex align-items-center">
                    <i class="fa-regular fa-pen-to-square"></i>
                    <div class="h3 p-0 m-0 mx-1 fw-normal "><a class="{{ request()->url()==route('user.profile.edit') ? 'active' : 'text-black' }}" href="{{route('user.profile.edit')}}">Edit Profile</a>
                    </div>
                </li>

                @if(auth()->user()?->hasRole('shipper'))
                    <li class="nav-item rounded border-bottom px-3 py-4 d-flex align-items-center">
                        <i class="fa-regular fa-building"></i>
                        <div class="h3 p-0 m-0 mx-1 fw-normal"><a class="{{ request()->url()==route('user.orders.create') ? 'active' : 'text-black' }}" href="{{route('user.profile.edit')}}">My Building</a>
                        </div>
                    </li>
                @endif

                <li class="nav-item rounded border-bottom px-3 py-4 d-flex align-items-center">
                    <i class="fa-regular fa-box"></i>
                    <div class="h3 p-0 m-0 mx-1 fw-normal"><a class="{{ request()->url()==route('user.orders.index') ? 'active' : 'text-black' }}" href="{{route('user.orders.index')}}">My Orders</a>
                    </div>
                </li>
                <li class="nav-item rounded border-bottom px-3 py-4 d-flex align-items-center">
                    <i class="fa-regular fa-lock"></i>
                    <div class="h3 p-0 m-0 mx-1 fw-normal"><a class="{{ request()->url()==route('user.orders.create') ? 'active' : 'text-black' }}" href="{{route('user.profile.edit')}}">Change Password</a>
                    </div>
                </li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="nav-item rounded border-bottom px-3 py-4 d-flex align-items-center" style="color: #f64141">
                        <i class="fa-regular fa-right-from-bracket" ></i>
                        <div class="h3 p-0 m-0 mx-1 fw-normal">
                            <a  style="color: #f64141" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif

            </ul>

        </div>
        <div class="col-md-8 col-12">

            <div class="container">
                @yield('profile-content')
            </div>

        </div>
    </section>

@endsection
