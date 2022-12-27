<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="Images/svg/Logo/IconWebsite.svg">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/colors.css" />
    <link rel="stylesheet" href="../libraries/fontawesome-free-6.1.1-web/css/all.min.css" />
    <!-- CSS Files  -->
    <!-- <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" /> -->
    <style>
        :root {
            /* *************** Colors *************** */
            --body-color: #fefaff;
            --text-color: #23004d;
            --first-color: #82498c;
            --Second-color: #9c27be;
            --Third-color: #a501a5;
            --fourth-color: #ff97bb;
            --fifth-color: #9d4bff;
            --Background-color: #5c3463;
            --color-light: #a49eac;
            --color-lighten: #f2f2f2;
            /* *************** Font and typography *************** */
            --tiny-font-size: 0.625rem;
            /*-------Transition-------*/
            --tran-02: all 0.2s ease;
            --tran-03: all 0.3s ease;
            --tran-04: all 0.4s ease;
            --tran-05: all 0.5s ease;
        }

        body {
            color: var(--text-color);
            transition: var(--tran-02);
        }

        /**************** dropdown ****************/

        .dropdown-item.active,
        .dropdown-item:active {
            background-color: var(--color-lighten);
            color: black;
        }

        .dropdown-toggle::after {
            border: none;
            margin-left: 0;
        }

        .dropdown-menu {
            inset: 0px -120px auto 0px !important;
            background-color: #f6f6f6;
        }

        .form-control.alert-danger:focus,
        select.alert-danger:focus {
            color: #842029;
            border-color: #842029;
            box-shadow: 0 0 0 0.25rem rgb(220 53 69 / 25%);
        }

        .form-control:focus,
        .form-check-input:focus,
        .form-select:focus,
        .btn-close:focus {
            border-color: var(--Second-color);
            box-shadow: 0 0 0 0.25rem #82498c41;
            opacity: 1;
        }

        .form-check-input:checked {
            border-color: var(--Second-color);
            background-color: var(--Second-color);
        }

        /***************** section2: pagination ****************/
        .pagination .page-item a,
        .pagination .page-item span {
            color: var(--text-color);
        }

        .pagination .page-item.active span {
            background: var(--Second-color);
            border-color: var(--text-color);
        }

        .page-link:focus {
            z-index: 3;
            outline: 0;
            box-shadow: 0 0 0 .25rem #82498c41;
        }

        .page-item:first-child .page-link {
            border-top-right-radius: .25rem;
            border-bottom-right-radius: .25rem;
        }

        .page-item:last-child .page-link {
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem;
        }

        /**************** button ****************/
        .btn:active {
            transform: scale(0.97);
            --bs-body-font-family: var(--bs-font-sans-serif) !important;
        }

        .btn:disabled {
            cursor: not-allowed;
            background-color: var(--line-border-empty);
        }

        .btn-check:focus+.btn,
        .btn:focus,
        .btn:hover {
            outline: 0;
            box-shadow: 0 0 0 0.25rem #82498c41;
        }

        .btn-gradient {
            transition: 0.5s;
            background-size: 200% auto;
            box-shadow: 0 0 20px #eee;
            background-image: linear-gradient(to right, var(--Second-color) 0%, #d541b0ea 51%, var(--Second-color) 100%);

        }

        .btn-gradient:hover {
            background-position: right center;
        }

        .btn-purple:hover {
            background: var(--body-color) !important;
            border: 1px solid var(--Second-color) !important;
            color: var(--Second-color) !important;
        }



        /* *************** sidebar *************** */

        .sidebar {
            /* margin-left: -250px; */
            width: 280px;
            transition: var(--tran-05);
            overflow-y: auto;
            overflow-x: hidden;
        }

        .sidebar.close {
            width: 88px;
            /* margin-left: -88px; */
        }

        /* *************** Reusable css *************** */

        .sidebar .text {
            color: var(--text-color);
            transition: var(--tran-03);
            white-space: nowrap;
            opacity: 1;
        }

        .sidebar.close .text {
            opacity: 0;
        }

        .sidebar li {
            height: 45px;
            margin-top: 10px;
            /* list-style: none; */
        }

        .sidebar li .icon {
            min-width: 60px;
        }

        .sidebar li .icon,
        .sidebar li .text {
            color: var(--text-color);
            transition: var(--tran-02);
        }

        .sidebar li a:hover {
            border-radius: 30px 0;
            background: var(--Second-color);
        }

        .myactive {
            border-radius: 30px 0;
            background: var(--Second-color);
        }

        .sidebar li a:hover .icon,
        .sidebar li a:hover .text,
        .nav_link.myactive .icon,
        .nav_link.myactive .text {
            color: #fff;
        }

        /* ------------ btn close -----------*/

        .sidebar header .toggle {
            left: 0px;
            height: 25px;
            width: 25px;
            transition: var(--tran-05);
            transform: translateY(-50%) rotate(180deg);
        }

        .sidebar.close header .toggle {
            transform: translateY(-50%);
        }

        .main {
            margin-right: 88px;
            transition: all 0.5s ease-in-out;
        }
    </style>
</head>

<body>
    <nav class="sidebar bg-body position-fixed top-0 end-0 h-100 close shadow" style="z-index: 2;">
        <header class="position-relative mt-3">
            <i class="mb-1 fas fa-angle-left toggle position-absolute t-50 bg-purple rounded-circle d-flex align-items-center justify-content-center text-white fs-5"></i>
            <a href="/">
            <img class="me-2" src="Images/svg/Logo/LogoT.png" alt="" width="70px" />
            </a>
        </header>
        <hr>
        <ul class="d-flex flex-column justify-content-between align-items-start px-2">
            <li class="d-flex align-items-center w-100">
                <a class="nav_link h-100 w-100 d-flex align-items-center text-decoration-none" href="{{route('admin.home')}}">
                    <i class="fas fa-home h-100 d-flex justify-content-center align-items-center fs-5 icon"></i>
                    <span class="text">الإحصائيات</span>
                </a>
            </li>
            <li class="d-flex align-items-center w-100">
                <a class="nav_link h-100 w-100 d-flex align-items-center text-decoration-none" href="{{route('control_posts.show')}}">
                    <i class="fa-solid fa-newspaper h-100 d-flex justify-content-center align-items-center fs-5 icon"></i>
                    <span class="text">المنشورات</span>
                </a>
            </li>
            <li class="d-flex align-items-center w-100">
                <a class="nav_link h-100 w-100 d-flex align-items-center text-decoration-none" href="{{route('featured_posts.show')}}">
                    <i class="fa-solid fa-heart-circle-check h-100 d-flex justify-content-center align-items-center fs-5 icon"></i>
                    <span class="text">المنشورات المميزة</span>
                </a>
            </li>
            <li class="d-flex align-items-center w-100">
                <a class="nav_link h-100 w-100 d-flex align-items-center text-decoration-none" href="/users">
                    <i class="fa-solid fa-house-user h-100 d-flex justify-content-center align-items-center fs-5 icon"></i>
                    <span class="text">المستخدمين</span>
                </a>
            </li>
            <li class="d-flex align-items-center w-100">
                <a class="nav_link h-100 w-100 d-flex align-items-center text-decoration-none" href="{{route('agents.show')}}">
                    <i class="fa-solid fa-people-roof h-100 d-flex justify-content-center align-items-center fs-5 icon"></i>
                    <span class="text">الموظفين</span>
                </a>
            </li>
            <li class="d-flex align-items-center w-100">
                <a class="nav_link h-100 w-100 d-flex align-items-center text-decoration-none" href="{{route('messages.show')}}">
                    <i class="fas fa-envelope h-100 d-flex justify-content-center align-items-center fs-5 icon"></i>
                    <span class="text">الرسائل</span>
                </a>
            </li>
            <li class="d-flex align-items-center w-100">
                <a class="nav_link h-100 w-100 d-flex align-items-center text-decoration-none" href="{{route('add_information')}}">
                    <i class="fas fa-info-circle h-100 d-flex justify-content-center align-items-center fs-5 icon"></i>
                    <span class="text">حول الموقع</span>
                </a>
            </li>
            <img id="imgDashboard" class="mt-2 mx-auto d-none" src="Images/svg/illustrations/Site Stats-amico.svg" alt="H" width="180px" />
        </ul>
    </nav>
    <div class="main h-100">
    <script src="libraries/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
        @yield('content')
    </div>
    <script>
        const body = document.querySelector("body"),
            sidebar = body.querySelector(".sidebar"),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text"),
            move = document.querySelector(".main");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
            move.classList.toggle("opacity-50");
            document.getElementById("imgDashboard").classList.toggle("d-none");
        });
        move.addEventListener("click", () => {
                if (move.classList.contains("opacity-50")) {
                    sidebar.classList.toggle("close");
                    move.classList.toggle("opacity-50");
                    document.getElementById("imgDashboard").classList.toggle("d-none");
                }
            });
    </script>
</body>



</html>
