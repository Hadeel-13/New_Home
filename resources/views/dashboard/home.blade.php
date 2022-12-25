<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="UTF-8" />
  <title>Dashboard</title>
  <link href="../fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
  <link href="../bootstrap-5.1.3\dist\css\bootstrap.min.css" rel="stylesheet" />
  <link media="all" type="text/css" rel="stylesheet" href="../libraries/bootstrap/bootstrap.min.v4.css">
    <link media="all" type="text/css" rel="stylesheet" href="../libraries/fontawesome/css/fontawesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="../css/style26f8.css?v=2.32.4">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png"> -->
  <!-- Fonts and icons 
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
     Nucleo Icons 
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
     Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
  <!-- CSS Files  -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Amiri&family=Tajawal:wght@300&display=swap");

    * {
      font-family: "Amiri", serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      /*-------Colors----------*/
      --body-color: #f2f2f2;
      --sidebar-color: #fff;
      --primary-color: #82498c;
      /*#5b1464*/
      --primary-color-light: #e7e6eb;
      --toggle-color: rgba(201, 201, 201, 0.867);
      --text-color: #443333;
      /*-------Transition-------*/
      --tran-02: all 0.2s ease;
      --tran-03: all 0.3s ease;
      --tran-04: all 0.4s ease;
      --tran-05: all 0.5s ease;
    }

    body {
      height: 120vh;
      background: var(--body-color);
      transition: var(--tran-02);
      text-align: right;
    }

    body.dark {
      --body-color: #18191a;
      --sidebar-color: #242526;
      --primary-color: #fff;
      --primary-color-light: #3a3b3c;
      --toggle-color: #fff;
      --text-color: #ccc;
    }

    /* -------------sidebar-------------- */

    .sidebar {
      position: fixed;
      top: 0;
      right: 0;
      height: 100%;
      width: 250px;
      padding: 10px 14px;
      background: var(--sidebar-color);
      transition: var(--tran-05);
      overflow-y: auto;
      margin-left: -250px;
    }

    .sidebar.close {
      width: 88px;
      margin-left: -88px;
    }

    /* -------------Reusable css-------------- */

    .sidebar .text {
      font-size: 16px;
      font-weight: 500;
      color: var(--text-color);
      transition: var(--tran-03);
      white-space: nowrap;
      opacity: 1;
    }

    .sidebar.close .text {
      opacity: 0;
    }

    .sidebar .image {
      min-width: 60px;
      display: flex;
      align-items: center;
    }

    .sidebar li {
      height: 45px;
      margin-top: 10px;
      list-style: none;
      display: flex;
      align-items: center;
    }

    .sidebar li .icon {
      display: flex;
      align-items: center;
      justify-content: center;
      min-width: 60px;
      font-size: 20px;
    }

    .sidebar li .icon,
    .sidebar li .text {
      color: var(--text-color);
      transition: var(--tran-02);
    }

    .sidebar header {
      position: relative;
    }

    .sidebar .image-text img {
      width: 40px;
      border-radius: 6px;
    }

    .sidebar header .image-text {
      display: flex;
      align-items: center;
    }

    header.image-text .header-text {
      display: flex;
      flex-direction: column;
    }

    .header-text .name {
      font-weight: 600;
    }

    .header-text .profession {
      margin-top: -2px;
    }

    /* -----------زر الإغلاق في حالة النهاري-----------*/

    .sidebar header .toggle {
      position: absolute;
      top: 50%;
      left: -18px;
      transform: translateY(-50%) rotate(180deg);
      height: 25px;
      width: 25px;
      background: var(--primary-color);
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      color: var(--sidebar-color);
      font-size: 20px;
      transition: var(--tran-05);
    }

    .sidebar.close header .toggle {
      transform: translateY(-50%);
    }

    /* ------------زر الإغلاق في حالة الليلي-----------*/

    body.dark .sidebar.close header .toggle {
      transform: translateY(-50%);
    }

    body.dark .sidebar header .toggle {
      transform: translateY(-50%) rotate(180deg);
      color: var(--text-color);
    }

    .sidebar .search-box {
      background: var(--primary-color-light);
      border-radius: 6px;
    }

    .search-box input {
      height: 100%;
      width: 100%;
      outline: none;
      border: none;
      border-radius: 6px;
      background: var(--primary-color-light);
    }

    .sidebar li a {
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      text-decoration: none;
      border-radius: 30px 0;
      transition: var(--tran-04);
    }

    .sidebar li a:hover {
      background: var(--primary-color);
    }

    .sidebar li :hover .icon,
    .sidebar li :hover .text {
      color: var(--sidebar-color);
    }

    .sidebar.close li a:hover .icon {
      color: var(--sidebar-color);
      background: var(--primary-color);
      /* border-radius: 6px; */
      height: 100%;
    }

    body.dark .sidebar.close li a .icon:hover {
      color: var(--sidebar-color);
      background: var(--primary-color);
      /* border-radius: 6px; */
      height: 100%;
    }

    body.dark .sidebar li a:hover .icon,
    body.dark .sidebar li a:hover .text {
      color: var(--sidebar-color);
    }

    .sidebar .menu-bar {
      height: calc(100% -50px);
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .menu-bar .mode {
      position: relative;
      border-radius: 6px;
      background: var(--primary-color-light);
    }

    .menu-bar .mode .moon-sun {
      height: 50px;
      width: 60px;
      display: flex;
      align-items: center;
    }

    .menu-bar .mode i {
      position: absolute;
    }

    .menu-bar .mode .sun {
      opacity: 0;
    }

    .menu-bar .mode .toggle-switch {
      position: absolute;
      left: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
      min-width: 60px;
      cursor: pointer;
      border-radius: 6px;
      background: var(--primary-color-light);
    }

    .toggle-switch .switch {
      position: relative;
      height: 22px;
      width: 44px;
      border-radius: 25px;
      background: var(--toggle-color);
    }

    .switch::before {
      content: "";
      position: absolute;
      height: 15px;
      width: 15px;
      border-radius: 50%;
      top: 50%;
      right: 5px;
      transform: translateY(-50%);
      background: var(--sidebar-color);
      transition: var(--tran-03);
    }

    body.dark .switch::before {
      right: 24px;
    }

    /*-----------------------------------------------*/

    .drop-btn {
      margin-right: 20px;
    }

    /*-----------------------------------------------*/

    .main {
      margin-right: 88px;
      transition: all 0.5s ease-in-out;
      padding: 16px;
    }

    .main2 {
      margin-right: 250px;
    }
  </style>
</head>

<body>
  <div class="layoutSidenav">
    <div class="layoutSidenav_nav">
      <nav class="sidebar close">
        <header>
          <div class="image-text">
            <span class="image">
              <img src="logo1.jpg" alt="logo" />
            </span>
            <div class="text header-text">
              <span class="name">New Home</span>
              <span class="profession"></span>
            </div>
          </div>
          <i class="fas fa-angle-left toggle"></i>
        </header>
        <div class="menu-bar">
          <div class="menu">
            <!-- <li class="search-box">
                            <i class="fas fa-search icon"></i>
                            <input type="search" placeholder="بحث...">
              </li> -->
            <ul class="menu-links">
              <li class="nav-item">
               <a href="{{route('admin.profile')}}">
                  <i class="fas fa-home icon"></i>
                  <span class="text nav-text">لوحة التحكم</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.profile')}}">
                  <i class="fas fa-id-badge icon"></i>
                  <span class="text nav-text">الملف الشخصي</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user.show')}}">
                  <i class="fas fa-users icon"></i>
                  <span class="text nav-text">المستخدمين</span>
                </a>
              </li>
              <li class="nav-item collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
               
                  <i class="fas fa-copy icon"></i>
                  <span class="text nav-text">المنشورات<i class="fas fa-angle-down drop-btn"></i>
                  </span>
              </li>
              <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion" style="
                    margin-right: 20px;
                    background-color: #fcebff;
                    border-radius: 30px 0;
                    transition: all 0.6s ease-in-out;">
                <!-- <ul class="sb-sidenav-menu-nested nav"> -->
                <li class="nav-item" href="layout-static.html">
                  <a href="{{route('posts.show')}}">
                    <i class="fas fa-eye icon"></i>
                    <span class="text nav-text">عرض المنشورات</span>
                  </a>
                </li>
                <li class="nav-item" href="layout-static.html">
                  <a href="Users.html">
                    <i class="fas fa-plus icon"></i>
                    <span class="text nav-text">إضافة منشور</span>
                  </a>
                </li>
                <!-- </ul> -->
              </div>
              <li class="nav-item">
              <a href="{{route('agents_admin.show')}}">
                  <i class="fas fa-user-friends icon"></i>
                  <span class="text nav-text">الوكلاء</span>
                </a>
              </li>

              <li class="nav-item">
               <a href="{{route('admin.profile')}}">
                  <i class="fas fa-heart icon"></i>
                  <span class="text nav-text">المميزة</span>
                </a>
              </li>
              <li class="nav-item">
               <a href="{{route('messages.show')}}">
                  <i class="fas fa-envelope icon"></i>
                  <span class="text nav-text">الرسائل</span>
                </a>
              </li>
              <li class="nav-item">
               <a href="{{route('admin.profile')}}">
                  <i class="fas fa-info-circle icon"></i>
                  <span class="text nav-text">حول</span>
                </a>
              </li>
            </ul>
          </div>

          <div class="botton-content">
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <!-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> -->
            <li class="nav-item">
              <a class="fas fa-sign-out-alt icon" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <span class="text nav-text">خروج</span>
              </a>
            </li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
            </li>
            @endguest
            <li class="mode">
              <div class="moon-sun">
                <i class="fas fa-moon icon moon"></i>
                <i class="fas fa-sun icon sun"></i>
              </div>
              <span class="mode-text text">الوضع الليلي</span>
              <div class="toggle-switch">
                <span class="switch"></span>
              </div>
            </li>
          </div>
        </div>
      </nav>
    </div>
    <div class="main">
      <!-- Navbar -->
      <!-- <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl position-sticky blur shadow-blur mt-4 left-auto top-1 z-index-sticky" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0">
              <li class="breadcrumb-item text-sm ps-2">
                <a class="opacity-5 text-dark" href="javascript:;">لوحات القيادة</a>
              </li>
              <li class="breadcrumb-item text-sm active text-dark" aria-current="page">
                RTL
              </li>
            </ol>
            <h6 class="font-weight-bolder mb-0">RTL</h6>
          </nav>
          <div class="collapse navbar-collapse mt-sm-0 mt-2 px-0" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <label class="form-label">أكتب هنا...</label>
                <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
              </div>
            </div>
            <ul class="navbar-nav me-auto ms-0 justify-content-end">
              <li class="nav-item d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1" aria-hidden="true"></i>
                  <span class="d-sm-inline d-none">يسجل دخول</span>
                </a>
              </li>
              <li class="nav-item d-xl-none pe-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer" aria-hidden="true"></i>
                </a>
              </li>
              <li class="nav-item dropdown ps-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-bell cursor-pointer" aria-hidden="true"></i>
                </a>
                <ul class="dropdown-menu px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="../assets/img/team-2.jpg" class="avatar avatar-sm ms-3" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New message</span> from Laur
                          </h6>
                          <p class="text-xs mb-0 text-white opacity-8">
                            <i class="fa fa-clock me-1" aria-hidden="true"></i> 13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="my-auto">
                          <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark ms-3" />
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">New album</span> by Travis Scott
                          </h6>
                          <p class="text-xs mb-0 text-white opacity-8">
                            <i class="fa fa-clock me-1" aria-hidden="true"></i> 1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                      <div class="d-flex py-1">
                        <div class="avatar avatar-sm bg-gradient-secondary ms-3 my-auto">
                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="#252f40" fill-rule="evenodd">
                              <g transform="translate(-2169.000000, -745.000000)" fill="#252f40" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="text-sm font-weight-normal mb-1">
                            Payment successfully completed
                          </h6>
                          <p class="text-xs mb-0 text-white opacity-8">
                            <i class="fa fa-clock me-1" aria-hidden="true"></i> 2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav> -->
      <!-- End Navbar -->
      <!-- <div class="container-fluid py-4">
        <div class="row">
          <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">weekend</i>
                </div>
                <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize">أموال اليوم</p>
                  <h4 class="mb-0">$53k</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <p class="mb-0 text-start">
                  <span class="text-success text-sm font-weight-bolder ms-1">+55% </span>من الأسبوع الماضي
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">leaderboard</i>
                </div>
                <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize">مستخدمو اليوم</p>
                  <h4 class="mb-0">2,300</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <p class="mb-0 text-start">
                  <span class="text-success text-sm font-weight-bolder ms-1">+33% </span>من الأسبوع الماضي
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">store</i>
                </div>
                <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize">عملاء جدد</p>
                  <h4 class="mb-0">
                    <span class="text-danger text-sm font-weight-bolder ms-1">-2%</span>
                    +3,462
                  </h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <p class="mb-0 text-start">
                  <span class="text-success text-sm font-weight-bolder ms-1">+5% </span>من الشهر الماضي
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape shadow-info text-center border-radius-xl mt-n4 position-absolute" style="background-color: purple;">
                  <i class="material-icons opacity-10">person_add</i>
                </div>
                <div class="text-start pt-1">
                  <p class="text-sm mb-0 text-capitalize">مبيعات</p>
                  <h4 class="mb-0">$103,430</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <p class="mb-0 text-start">
                  <span class="text-success text-sm font-weight-bolder ms-1">+7% </span>مقارنة بيوم أمس
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <div class="chart">
                    <canvas id="chart-bars" class="chart-canvas" style="
                          display: block;
                          box-sizing: border-box;
                          height: 170px;
                          width: 665px;
                        " width="665" height="170"></canvas>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0">مشاهدات الموقع</h6>
                <p class="text-sm">آخر أداء للحملة</p>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto ms-1">schedule</i>
                  <p class="mb-0 text-sm">الحملة أرسلت قبل يومين</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class=" shadow-success border-radius-lg py-3 pe-1" style="background-color: purple;">
                  <div class="chart">
                    <canvas id="chart-line" class="chart-canvas" style="
                          display: block;
                          box-sizing: border-box;
                          height: 170px;
                          width: 665px;
                        " width="665" height="170"></canvas>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0">المبيعات اليومية</h6>
                <p class="text-sm">
                  (<span class="font-weight-bolder">+15%</span>) زيادة في مبيعات اليوم.
                </p>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto ms-1">schedule</i>
                  <p class="mb-0 text-sm">تم التحديث منذ 4 دقائق</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mb-3">
            <div class="card z-index-2">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                  <div class="chart">
                    <canvas id="chart-line-tasks" class="chart-canvas" style="
                          display: block;
                          box-sizing: border-box;
                          height: 170px;
                          width: 665px;
                        " width="665" height="170"></canvas>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0">المهام المكتملة</h6>
                <p class="text-sm">آخر أداء للحملة</p>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0 text-sm">تم تحديثه للتو</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-4">
          <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="card">
              <div class="card-header pb-0">
                <div class="row mb-3">
                  <div class="col-6">
                    <h6>المشاريع</h6>
                    <p class="text-sm">
                      <i class="fa fa-check text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">30 انتهى</span> هذا الشهر
                    </p>
                  </div>
                  <div class="col-6 my-auto text-start">
                    <div class="dropdown float-start ps-4">
                      <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-n4" aria-labelledby="dropdownTable">
                        <li>
                          <a class="dropdown-item border-radius-md" href="javascript:;">عمل</a>
                        </li>
                        <li>
                          <a class="dropdown-item border-radius-md" href="javascript:;">عمل آخر</a>
                        </li>
                        <li>
                          <a class="dropdown-item border-radius-md" href="javascript:;">شيء آخر هنا</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body p-0 pb-2">
                <div class="table-responsive">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          المشروع
                        </th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                          أعضاء
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          ميزانية
                        </th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                          إكمال
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm ms-3" />
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">
                                Material XD الإصدار
                              </h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Tompson">
                              <img alt="Image placeholder" src="../assets/img/team-1.jpg" />
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Romina Hadid">
                              <img alt="Image placeholder" src="../assets/img/team-2.jpg" />
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Alexander Smith">
                              <img alt="Image placeholder" src="../assets/img/team-3.jpg" />
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Jessica Doe">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg" />
                            </a>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold">
                            $14,000
                          </span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/small-logos/logo-atlassian.svg" class="avatar avatar-sm ms-3" />
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">
                                أضف مسار التقدم إلى التطبيق الداخلي
                              </h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Romina Hadid">
                              <img alt="Image placeholder" src="../assets/img/team-2.jpg" />
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Jessica Doe">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg" />
                            </a>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold">
                            $3,000
                          </span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">10%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/small-logos/logo-slack.svg" class="avatar avatar-sm ms-3" />
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">
                                إصلاح أخطاء النظام الأساسي
                              </h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Romina Hadid">
                              <img alt="Image placeholder" src="../assets/img/team-3.jpg" />
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Jessica Doe">
                              <img alt="Image placeholder" src="../assets/img/team-1.jpg" />
                            </a>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold">
                            غير مضبوط
                          </span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">100%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm ms-3" />
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">
                                إطلاق تطبيق الهاتف المحمول الخاص بنا
                              </h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Tompson">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg" />
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Romina Hadid">
                              <img alt="Image placeholder" src="../assets/img/team-3.jpg" />
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Alexander Smith">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg" />
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Jessica Doe">
                              <img alt="Image placeholder" src="../assets/img/team-1.jpg" />
                            </a>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold">
                            $20,500
                          </span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">100%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/small-logos/logo-jira.svg" class="avatar avatar-sm ms-3" />
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">
                                أضف صفحة التسعير الجديدة
                              </h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Tompson">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg" />
                            </a>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> $500 </span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">25%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="../assets/img/small-logos/logo-invision.svg" class="avatar avatar-sm ms-3" />
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">
                                إعادة تصميم متجر جديد على الإنترنت
                              </h6>
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="avatar-group mt-2">
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Ryan Tompson">
                              <img alt="Image placeholder" src="../assets/img/team-1.jpg" />
                            </a>
                            <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Jessica Doe">
                              <img alt="Image placeholder" src="../assets/img/team-4.jpg" />
                            </a>
                          </div>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold">
                            $2,000
                          </span>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">40%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card h-100">
              <div class="card-header pb-0">
                <h6>نظرة عامة على الطلبات</h6>
                <p class="text-sm">
                  <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                  <span class="font-weight-bold">24%</span> هذا الشهر
                </p>
              </div>
              <div class="card-body p-3">
                <div class="timeline timeline-one-side">
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-icons text-success text-gradient">notifications</i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">
                        $2400, تغييرات في التصميم
                      </h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                        22 DEC 7:20 PM
                      </p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-icons text-danger text-gradient">code</i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">
                        طلب جديد #1832412
                      </h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                        21 DEC 11 PM
                      </p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-icons text-info text-gradient">shopping_cart</i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">
                        مدفوعات الخادم لشهر أبريل
                      </h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                        21 DEC 9:34 PM
                      </p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-icons text-warning text-gradient">credit_card</i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">
                        تمت إضافة بطاقة جديدة للطلب #4395133
                      </h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                        20 DEC 2:20 AM
                      </p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-icons text-primary text-gradient">key</i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">
                        فتح الحزم من أجل التطوير
                      </h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                        18 DEC 4:54 AM
                      </p>
                    </div>
                  </div>
                  <div class="timeline-block">
                    <span class="timeline-step">
                      <i class="material-icons text-dark text-gradient">payments</i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">
                        طلب جديد #9583120
                      </h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">
                        17 DEC
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer py-4">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-end">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  2022, made with
                  <i class="fa fa-heart" aria-hidden="true"></i> by
                  <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                  for a better web.
                </div>
              </div>
           
            </div>
          </div>
        </footer>
      </div> -->
      @yield('content');
      <!--  -->
      <!-- <div class="ps__rail-x" style="left: -343px; bottom: -2139px; width: 749px">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 513px"></div>
      </div>
      <div class="ps__rail-y" style="top: 2139px; height: 653px; right: 1077px">
        <div class="ps__thumb-y" tabindex="0" style="top: 501px; height: 152px"></div>
      </div> -->
    </div>

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
      move.classList.toggle("main2");
    });

    modeSwitch.addEventListener("click", () => {
      body.classList.toggle("dark");
    });
  </script>
  <!--   Core JS Files   -->
  <!-- <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script> -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6,
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        interaction: {
          intersect: false,
          mode: "index",
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "rgba(255, 255, 255, .2)",
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
              color: "#fff",
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "rgba(255, 255, 255, .2)",
            },
            ticks: {
              display: true,
              color: "#f8f9fa",
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
        },
      },
    });

    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: [
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6,
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        interaction: {
          intersect: false,
          mode: "index",
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "rgba(255, 255, 255, .2)",
            },
            ticks: {
              display: true,
              color: "#f8f9fa",
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5],
            },
            ticks: {
              display: true,
              color: "#f8f9fa",
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "bar",
      data: {
        labels: [
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6,
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        interaction: {
          intersect: false,
          mode: "index",
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: "rgba(255, 255, 255, .2)",
            },
            ticks: {
              display: true,
              padding: 10,
              color: "#f8f9fa",
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5],
            },
            ticks: {
              display: true,
              color: "#f8f9fa",
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: "normal",
                lineHeight: 2,
              },
            },
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf("Win") > -1;
    if (win && document.querySelector("#sidenav-scrollbar")) {
      var options = {
        damping: "0.5",
      };
      Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.2"></script>
  <script src="bootstrap-5.1.3\dist\js\bootstrap.min.js"></script>
</body>

</html>