<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SendiT+') }}</title>



    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datatable-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

    <style>
        .loader-container {
            width: 100%;
            height: 100vh;
            position: fixed;
            background: #000
        url("https://media.giphy.com/media/8agqybiK5LW8qrG3vJ/giphy.gif") center
        no-repeat;
    z-index: 1;
}
.spinner {
    width: 64px;
    height: 64px;
    border: 8px solid;
    border-color: #3d5af1 transparent #3d5af1 transparent;
    border-radius: 50%;
    animation: spin-anim 1.2s linear infinite;
}

@keyframes spin-anim {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
.loader-container {
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    background:#fff;
    z-index: 1;
}
.loader-container-hidden {
    display: none;
}

        </style>


</head>
<div class="loader-container">
    <div class="spinner"></div>
</div>
<body class="sb-nav-fixed">

    <div id="app">

        {{-- Start Header --}}
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-custom">
            <a class="navbar-brand ps-3 " href="{{route('dashboard')}}"><h2 class="title_font"><i class="fa fa-paper-plane" aria-hidden="true"></i> sendiT+</h2></a>

            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-white" id="sidebarToggle" href="#!"><i class="fa fa-bars"></i></button>

            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <button class="btn btn-primary btn-background" id="btnNavbarSearch" type="button"><i class="fa fa-bell"></i></button> -->
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />-->
                    {{-- <a class="nav-link text-white"  href="#" role="button" aria-expanded="false"></a> --}}
                </div>
            </form>
            {{--  --}}
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell "></i> 0</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="">List</a></li>
                        <li><a class="dropdown-item" href="">List</a></li>

                    </ul>
                </li>
            </ul>
            {{--  --}}
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{-- <i class="fa fa-user fa-fw"></i> --}}
                <img  src="/uploads/avatars/{{auth::user()->avatar;}}" style="width:32px; height:32px; border-radius:50%; margin-right:1px;" >
                {{auth::user()->firstname }}</a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('user.profile') }}">User Profile</a></li>
                        <!-- <li><a class="dropdown-item" href="activity-logs.php">Activity Log</a></li> -->
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>    </li>

                    </ul>
                </li>
            </ul>



        </nav>
        {{-- End Header --}}
        <div id="layoutSidenav">


            <div id="layoutSidenav_content">
                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark bg-custom_side " id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <!-- <div class="sb-sidenav-menu-heading">Core</div> -->

                                <a class="nav-link text-white" href="{{ route('dashboard')}}">
                                    <div class="sb-nav-link-icon text-white"><i class="fa fa-tachometer"></i></div>
                                    Dashboard
                                </a>


                                @if (auth::user()->username=='superadmin')
                                    <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRole" aria-expanded="false" aria-controls="collapsePages">
                                        <div class="sb-nav-link-icon text-white"><i class="fa fa-user"></i></div>
                                        Access Management
                                        <div class="sb-sidenav-collapse-arrow text-white"><i class="fa fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse bg-secondary" id="collapseRole" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                         <a class="nav-link text-white" href="/subscription">Subscription</a>
                                         <a class="nav-link text-white" href="/role">Roles</a>
                                         <a class="nav-link text-white" href="/permission">Permission</a>
                                        </nav>
                                    </div>
                                    @endif
                                    <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon text-white"><i class="fa fa-paper-plane-o"></i></div>
                                        SMS
                                        <div class="sb-sidenav-collapse-arrow text-white"><i class="fa fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse bg-secondary" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link text-white" href="/sms-panel">Send</a>
                                            <a class="nav-link text-white" href="/sms-inbox">Inbox</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseEmail" aria-expanded="false" aria-controls="collapseLayouts">
                                        <div class="sb-nav-link-icon text-white"><i class="fa fa-envelope-o"></i></div>
                                        Email
                                        <div class="sb-sidenav-collapse-arrow text-white"><i class="fa fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse bg-secondary" id="collapseEmail" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                        <nav class="sb-sidenav-menu-nested nav">
                                        <!-- <a class="nav-link text-white" href="email-panel.php">Send</a> -->
                                        <a class="nav-link text-white" href="/email-inbox">Inbox</a>
                                        </nav>
                                    </div>



                                <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBills" aria-expanded="false" aria-controls="collapsePages">
                                    <div class="sb-nav-link-icon text-white"><i class="fa fa-envelope-open"></i></div>
                                    Billing
                                    <div class="sb-sidenav-collapse-arrow text-white"><i class="fa fa-angle-down"></i></div>
                                </a>
                                <div class="collapse bg-secondary" id="collapseBills" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                     <a class="nav-link text-white" href="/bill_setup">Make Invoice</a>
                                     <a class="nav-link text-white" href="/bill_history">Statement</a>
                                    </nav>
                                </div>
                                @if (auth::user()->username=='superadmin')
                                        <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#collapseReport" aria-expanded="false" aria-controls="collapsePages">
                                            <div class="sb-nav-link-icon text-white"><i class="fa fa-area-chart"></i></div>
                                            Reports
                                            <div class="sb-sidenav-collapse-arrow text-white"><i class="fa fa-angle-down"></i></div>
                                        </a>
                                        <div class="collapse bg-secondary" id="collapseReport" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                            <a class="nav-link text-white" href="activitylogs">Activity Logs</a>

                                            </nav>
                                        </div>
                                @endif

                            </div>
                        </div>

                        <div class="sb-sidenav-footer">

                        </div>
                    </nav>
                </div>

                <main class="py-4">
                    @yield('content')
                </main>
                {{-- footer --}}
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; coreDev Solution Inc. 2022</div>
                            <div>
                                <!-- <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a> -->
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
    </div>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>

    <script src="{{ asset('js/Chart.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/demo/chart-area-demo.js') }}" defer></script>
    <script src="{{ asset('js/demo/chart-weekly.js') }}" defer></script>
    <script src="{{ asset('js/demo/chart-bar-demo.js') }}" defer></script>
    <script src="{{ asset('js/sample-datatables.js') }}" defer></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}" defer></script>
    <script src="{{ asset('js/datatables-simple-demo1.js') }}" defer></script>
    <script src="{{ asset('js/js/all.js') }}" crossorigin="anonymous" defer></script>




    <script>
        const loaderContainer = document.querySelector('.loader-container');
        window.addEventListener('load', () => {
            loaderContainer.parentElement.removeChild(loaderContainer);
        });




                    </script>




</body>
</html>
