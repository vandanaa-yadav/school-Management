<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="container-fluid p-0 overflow-hidden">
        <!-- As a link -->

        <div class="col-md-12">

            <nav class="navbar navbar-light" style="background-color:#fff;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Student Mangagement System</a>
                </div>
            </nav>
        </div>

        <div class="row">
            <div class="col-md-2 ">
                <div class="sidebar">
                    <header>
                        <div class="image-text">
                            <span class="image">
                                <img src="https://png.pngtree.com/png-vector/20230408/ourmid/pngtree-school-logo-design-template-vector-png-image_6681515.png"
                                    alt="logo" />
                            </span>
                            <div class="text header-text">
                                <span class="main">School Management</span>
                                <span class="sub">System</span>
                            </div>
                        </div>
                        <i class="bx bx-chevron-right toggle"></i>
                    </header>

                    <div class="menu-bar">
                        <div class="menu">
                            <ul class="menu-links">
                                <li class="search-bar">
                                    <i class="bx bx-search icons"></i>
                                    <input type="search" placeholder="Search..." />
                                </li>
                                <li class="nav-link">
                                    <a href="/">
                                        <i class="bx bx-home-alt icons"></i>
                                        <span class="text nav-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-link">
                                    <a href="{{url('/students')}}">
                                        <i class="bx bx-bar-chart-alt-2 icons"></i>
                                        <span class="text nav-text">Student</span>
                                    </a>
                                </li>
                                <li class="nav-link">
                                    <a href="{{url('/teachers')}}">
                                        <i class="bx bx-bell icons"></i>
                                        <span class="text nav-text">Teacher</span>
                                    </a>
                                </li>
                                <li class="nav-link">
                                    <a href="{{url('/courses')}}">
                                        <i class="bx bx-pie-chart-alt icons"></i>
                                        <span class="text nav-text">Course</span>
                                    </a>
                                </li>
                                 <li class="nav-link">
                                    <a href="{{url('/batches')}}">
                                        <i class="bx bx-pie-chart-alt icons"></i>
                                        <span class="text nav-text">Batches</span>
                                    </a>
                                </li>
                                <li class="nav-link">
                                    <a href="{{url('/enrollments')}}">
                                        <i class="bx bx-heart icons"></i>
                                        <span class="text nav-text">Enrollment</span>
                                    </a>
                                </li>
                                <li class="nav-link">
                                    <a href="{{url('/payments')}}">
                                        <i class="bx bx-wallet-alt icons"></i>
                                        <span class="text nav-text">Payment</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="bottom-content">
                            <li class="nav-link">
                                <a href="#">
                                    <i class="bx bx-log-out icons"></i>
                                    <span class="text nav-text">Log Out</span>
                                </a>
                            </li>
                            <li class="mode">
                                <div class="moon-sun">
                                    <i class="bx bx-moon icons moon"></i>
                                    <i class="bx bx-sun icons sun"></i>
                                </div>
                                <span class="mode-text text">Dark Mode</span>
                                <div class="toggle-switch">
                                    <span class="switch"></span>
                                </div>
                            </li>
                        </div>
                    </div>


                </div>


            </div>
            <div class="col-md-10">

                @yield('content')

            </div>
        </div>
    </div>



</body>

</html>
