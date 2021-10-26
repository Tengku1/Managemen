@include('layouts.header')
@include('layouts.sidebar')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layouts.navbar')
    @yield('content')
</main>
@yield('scripts')
@include('layouts.footer')
