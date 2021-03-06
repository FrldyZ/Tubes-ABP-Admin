<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oleh-Shop Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/iconly/bold.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="logo text-center">
                    <a href="/dashboard"><img src="{{asset('assets/images/logo/logo.png')}}" alt="Logo" class="mx auto" width="150" height="150"></a>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item {{ Request::is('dashboard') ? 'active' : '' }} ">
                            <a href="/dashboard" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Request::is('oleh') ? 'active' : '' }}  ">
                            <a href="/oleh" class='sidebar-link'>
                                <i class="bi bi-box"></i>
                                <span>Oleh-Oleh</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Request::is('pengguna') ? 'active' : '' }}  ">
                            <a href="/pengguna" class='sidebar-link'>
                                <i class="iconly-boldProfile"></i>
                                <span>Daftar Pengguna</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ Request::is('transaksi/*') ? 'active' : '' }} has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-receipt"></i>
                                <span>Transaksi</span>
                            </a>
                            <ul class="submenu {{ Request::is('transaksi/*') ? 'active' : '' }}">
                                <li class="submenu-item {{ Request::is('transaksi/belum_bayar*') ? 'active' : '' }}">
                                    <a href="/transaksi/belum_bayar">Belum Dibayar</a>
                                </li>
                                <li class="submenu-item {{ Request::is('transaksi/belum_ambil*') ? 'active' : '' }}">
                                    <a href="/transaksi/belum_ambil">Belum Diambil</a>
                                </li>
                                <li class="submenu-item {{ Request::is('transaksi/sudah_ambil*') ? 'active' : '' }}">
                                    <a href="/transaksi/sudah_ambil">Sudah Diambil</a>
                                </li>
                                <li class="submenu-item {{ Request::is('transaksi/batal*') ? 'active' : '' }}">
                                    <a href="/transaksi/batal">Batal</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item {{ Request::is('contact') ? 'active' : '' }}  ">
                            <a href="/contact" class='sidebar-link'>
                                <i class="bi bi-file-person"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/logout" class='sidebar-link'>
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                @yield('heading')
            </div>
            <div class="page-content">
                @yield('content')
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Oleh-Shop</p>
                    </div>
                    <!-- <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="">Oleh-Shop</a></p>
                    </div> -->
                </div>
            </footer>
        </div>
    </div>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    <script src="{{URL::asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    @yield('script')
</body>

</html>