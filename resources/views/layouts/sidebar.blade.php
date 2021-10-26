<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
            target="_blank">
            <img src="{{ asset('assets/img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse" style="height:auto !important;" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ Request::segment(1) == 'home' ? 'bg-gradient-primary active' : '' }}"
                    href="{{ route('home') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            @if (Auth::user()->roles == 'admin')
                @include('layouts.sidebar.admin')
            @elseif(Auth::user()->roles == "direktur")
                @include('layouts.sidebar.directur')
            @elseif(Auth::user()->roles == "kasir")
                @include('layouts.sidebar.kasir')
            @elseif(Auth::user()->roles == "pemasok")
                @include('layouts.sidebar.pemasok')
            @elseif(Auth::user()->roles == "manager_keuangan")
                @include('layouts.sidebar.manager_keuangan')
            @elseif(Auth::user()->roles == "manager_pengadaan")
                @include('layouts.sidebar.manager_pengadaan')
            @elseif(Auth::user()->roles == "pengadaan")
                @include('layouts.sidebar.pengadaan')
            @else
                <li class="nav-item">
                    <a href="#">Anda tidak memiliki otorisasi</a>
                </li>
            @endif
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-primary mt-4 w-100" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</aside>
