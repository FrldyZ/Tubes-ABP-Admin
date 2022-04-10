<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oleh-Shop Dashboard</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('')}}assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('')}}assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.svg')}}" type="image/x-icon">
</head>
<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <!-- <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a> -->
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>                
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item {{ ($title === 'Dashboard') ? 'active' : '' }} ">
                            <a href="/dashboard" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item {{ ($title === 'Daftar Oleh') ? 'active' : '' }}  ">
                            <a href="/DaftarOleh" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Oleh-Oleh</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
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
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="">Oleh-Shop</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>feather.replace()</script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendors/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>