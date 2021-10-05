@extends('layouts.app')

@section('admin_content')
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('layouts.side-nav-nav')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('sidenav_content')
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
@endsection