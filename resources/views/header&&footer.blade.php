<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- ==========To_back_ajax====== -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ========= -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/svg/Logo/IconWebsite.svg">
    <title>New Home</title>
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/colors.css" />
    <link rel="stylesheet" href="../libraries/fontawesome-free-6.1.1-web/css/all.min.css" />

    <style>
        /*=============== VARIABLES CSS ===============*/

        :root {
            --header-height: 3rem;
            /*========== Colors ==========*/
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
            /*========== Font and typography ==========*/
            --tiny-font-size: 0.625rem;
        }

        .bd-callout {
            border: 1px solid #9b27be4e;
            border-right-width: .25rem;
            border-right-color: var(--Second-color);
        }

        .addshadow:hover {
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
        }

        body {
            scroll-behavior: smooth;
            color: var(--text-color);
        }

        ul {
            list-style: none;
        }

        a {
            color: var(--color-dark);
        }

        .text-decoration-none {
            color: var(--color-dark);
        }

        .placeholder {
            opacity: 0.1;
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
        .btn:focus {
            outline: 0;
            color: white;
            box-shadow: 0 0 0 0.25rem #82498c41;
        }

        .btn-cards {
            width: 150px;
            height: 50px;
            transition: 0.5s;
            background-size: 200% auto;
            color: var(--color-lighten);
            box-shadow: 0 0 20px #eee;
        }

        .btn-cards:hover {
            background-position: right center;
            /* change the direction of the change here */
            color: var(--color-lighten);
        }

        .btn-purple:hover {
            background: var(--body-color) !important;
            border: 1px solid var(--Second-color) !important;
            color: var(--Second-color) !important;
        }

        .btn-2 {
            background-image: linear-gradient(to right, #93006eea 0%, #d541b0ea 51%, var(--Second-color) 100%);
        }

        /**************** header ****************/
        .header {
            z-index: 100;
            transition: 0.4s;
        }

        /**************** nav ****************/
        .mynav {
            height: 4.5rem;
        }

        .nav__list {
            display: flex;
            justify-content: space-around;
        }

        .nav__link {
            row-gap: 4px;
            font-weight: 600;
        }

        .nav__name {
            font-size: var(--tiny-font-size);
        }

        /****************Active link****************/
        .nav__item a:hover {
            color: var(--Second-color) !important;
        }

        /**************** Change background header ****************/
        .scroll-header {
            box-shadow: 0 1px 12px hsla(174, 63%, 15%, 0.15);
        }

        /**************** MEDIA QUERIES ****************/
        @media screen and (max-width: 767px) {
            .nav__menu {
                position: fixed;
                bottom: 0;
                left: 0;
                background-color: #fff;
                box-shadow: 0 -1px 12px hsla(174, 63%, 15%, 0.15);
                width: 100%;
                height: 4rem;
                /* padding: 0 1rem; */
                display: grid;
                align-content: center;
                border-radius: 1.25rem 1.25rem 0 0;
                transition: 0.4s;
            }
        }

        @media screen and (max-width: 320px) {
            .nav__name {
                display: none;
            }
        }

        /* For medium devices */

        @media screen and (min-width: 576px) {
            .nav__list {
                justify-content: space-evenly;
                column-gap: 3rem;
            }
        }

        @media screen and (min-width: 767px) {
            /* .nav__icon {
                display: none;
            } */

            .nav__name {
                font-size: var(--bs-body-font-size);
            }
        }
    </style>
</head>

<body style="overflow-x: hidden;" class="placeholder-glow">
    @auth
    <!-- Modal notification-->
    <div class="modal fade" id="notification" tabindex="-1" aria-labelledby="notification" aria-hidden="true" dir="rtl">
        <div class="modal-dialog modal-fullscreen-md-down modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold fs-4" id="">الإشعارات</h5>
                    <div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body">
                    @foreach(auth()->user()->unreadNotifications as $notification)
                    <?php $notification_id = $notification->id; ?>
                    @if($notification->type=="App\Notifications\CommentNotification")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm bd-purple-100 addshadow" data-notif-id="{{$notification->id}}" href="/show_post/{{$notification->data['comment']['post_id']}}">
                        @if($notification->data['user']['image_url'] !=null)<img class="rounded-circle placeholder" src="Images/user/{{$notification->data['user']['image_url']}} " width="60">@else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60px" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['user']['name']}} قام بالتعليق على منشورك
                            </span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @elseif($notification->type=="App\Notifications\UserFollowed")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm bd-purple-100 addshadow" onclick="markNotificationAsRead_one()" href="/Profile_anotheruser/{{$notification->data['follower_id']}}">
                        @if($notification->data['image_url'] !=null) <img class="rounded-circle placeholder" src="Images/user/{{$notification->data['image_url']}}" width="60">
                        @else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['follower_name']}} قام بمتابعتك
                            </span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @elseif($notification->type=="App\Notifications\LikeNotification")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm bd-purple-100 addshadow" onclick="markNotificationAsRead_one()" href="/show_post/{{$notification->data['post_id']}}">
                        @if($notification->data['image_url'] !=null) <img class="rounded-circle placeholder" src="Images/user/{{$notification->data['image_url']}}" width="60">
                        @else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['user_name']}} قام بالاعجاب بمنشورك</span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @elseif($notification->type=="App\Notifications\DislikeNotification")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm bd-purple-100 addshadow" onclick="markNotificationAsRead_one()">
                        @if($notification->data['image_url'] !=null) <img class="rounded-circle placeholder" src="Images/user/{{$notification->data['image_url']}}" width="60">
                        @else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['user_name']}} قام بعدم الاعجاب بمنشورك
                            </span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @elseif($notification->type=="App\Notifications\PostNotification")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm bd-purple-100 addshadow" href="/show_post/{{$notification->data['post_id']}}">
                        @if($notification->data['image_url'] !=null) <img class="rounded-circle placeholder" src="Images/user/{{$notification->data['image_url']}}" width="60">
                        @else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['user_name']}} قام بإنشاء منشور جديد </span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @elseif($notification->type=="App\Notifications\messageNotification")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm bd-purple-100 addshadow" href="/show_messages">
                        @if($notification->data['image_url'] !=null) <img class="rounded-circle placeholder" src="Images/user/{{$notification->data['image_url']}}" width="60">
                        @else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['user_name']}} قام بإرسال رسالة للموقع </span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @elseif($notification->type=="App\Notifications\registerNotification")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm bd-purple-100 addshadow" href="">
                        @if($notification->data['image_url'] !=null) <img class="rounded-circle placeholder" src="Images/user/{{$notification->data['image_url']}}" width="60">
                        @else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['user_name']}} قام بالتسجيل بالموقع </span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @endif

                    @endforeach

                    @foreach(auth()->user()->readNotifications as $notification)
                    @if($notification->type=="App\Notifications\CommentNotification")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm  addshadow" href="/show_post/{{$notification->data['comment']['post_id']}}">
                        @if($notification->data['user']['image_url'] !=null)<img class="rounded-circle placeholder" src="Images/user/{{$notification->data['user']['image_url']}} " width="60">@else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60px" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['user']['name']}} قام بالتعليق على منشورك
                            </span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @elseif($notification->type=="App\Notifications\UserFollowed")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm  addshadow" id="markAsRead" href="/Profile_anotheruser/{{$notification->data['follower_id']}}">
                        @if($notification->data['image_url'] !=null) <img class="rounded-circle placeholder" src="Images/user/{{$notification->data['image_url']}}" width="60">
                        @else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['follower_name']}} قام بمتابعتك
                            </span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @elseif($notification->type=="App\Notifications\LikeNotification")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm addshadow" href="/show_post/{{$notification->data['post_id']}}">
                        @if($notification->data['image_url'] !=null) <img class="rounded-circle placeholder" src="Images/user/{{$notification->data['image_url']}}" width="60">
                        @else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['user_name']}} قام بالاعجاب بمنشورك</span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @elseif($notification->type=="App\Notifications\PostNotification")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm addshadow" href="/show_post/{{$notification->data['post_id']}}">
                        @if($notification->data['image_url'] !=null) <img class="rounded-circle placeholder" src="Images/user/{{$notification->data['image_url']}}" width="60">
                        @else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['user_name']}} قام بإنشاء منشور جديد </span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @elseif($notification->type=="App\Notifications\messageNotification")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm addshadow" href="/show_messages">
                        @if($notification->data['image_url'] !=null) <img class="rounded-circle placeholder" src="Images/user/{{$notification->data['image_url']}}" width="60">
                        @else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['user_name']}} قام بإرسال رسالة للموقع </span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @elseif($notification->type=="App\Notifications\registerNotification")
                    <a class="text-decoration-none d-flex flex-row user-info bd-callout my-4 p-3 rounded w-100 shadow-sm addshadow" href="">
                        @if($notification->data['image_url'] !=null) <img class="rounded-circle placeholder" src="Images/user/{{$notification->data['image_url']}}" width="60">
                        @else <img src="Images/svg/icon/circle-user.svg" alt="img" width="60" />
                        @endif
                        <div class="d-flex flex-column justify-content-start m-2">
                            <span class="d-block text-dark placeholder"> {{$notification->data['user_name']}} قام بالتسجيل بالموقع </span>
                            <span class="text-black-50 placeholder">{{$notification->created_at->diffForHumans()}}</span>
                        </div>
                    </a>
                    @endif
                    @endforeach
                    @if( count(auth()->user()->unreadNotifications) + count(auth()->user()->readNotifications) == 0)
                    <!-- no notifications -->
                    <div class="d-flex flex-column align-items-center">
                        <img src="Images/svg/illustrations/No-data-cuate.svg" width="450px" height="350px">
                        <p class="d-block text-dark fs-5 placeholder">لا يوجد إشعارات</p>
                    </div>
                    @endif


                </div>
                @if( count(auth()->user()->unreadNotifications) !=0)
                <div class="modal-footer">
                    <button type="button" class="btn bg-purple mb-2 py-2 px-4 me-2 text-light" onclick="markNotificationAsRead()" value="">
                        اعتبارها مقروءة
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- HEADER -->
    <header class="header position-fixed w-100 top-0 start-0 bg-body scroll-header" id="header">
        <nav class="mynav d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-between align-items-center">
                <div class="dropdown me-4">
                    <span class="dropdown-toggle ms-1 rounded-circle" data-bs-toggle="dropdown">
                        @if( Auth::user()->image_url != null)
                        <img src="../Images/user/{{ Auth::user()->image_url }}" alt="img" class="rounded-circle" width="30px" style="object-fit:cover;" />
                        @else
                        <img src="../Images/svg/icon/circle-user_secondary.svg" alt="img" class="rounded-circle" width="30px" style="object-fit:cover;" />
                        @endif
                    </span>{{ Auth::user()->name }}
                    <ul class="dropdown-menu mt-4 text-end">
                        @if(Auth::user()->role == 0)
                        <li><a class="dropdown-item" href="{{route('admin.home')}}">لوحة التحكم&nbsp;<i class="fas fa-home text-muted"></i></a> </li>
                        @endif
                        <!-- <li><a class="dropdown-item">المفضلة&nbsp;<i class="fas fa-heart text-muted"></i></a> -->
                        <li><a class="dropdown-item" href="/profile">الملف الشخصي&nbsp;<i class="fas fa-user-cog text-muted"></i></a>
                        </li>
                        </li>
                        @if(Auth::user()->role == 2)
                        <li> <a class="dropdown-item" onclick="prevrnt_sharing()">إنشاء منشور&nbsp;
                                <i class="fa-solid fa-circle-plus text-muted"></i></a> </li>
                        @else
                        <li>
                            <a class="dropdown-item" href="../AddRE">إنشاء منشور&nbsp;
                                <i class="fa-solid fa-circle-plus text-muted"></i></a>
                        </li>
                        @endif
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">تسجيل الخروج&nbsp;
                                <i class="fas fa-sign-out-alt text-muted"></i></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <a data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="بحث متقدم" title=" بحث متقدم" href="/search">
                    <i class="fas fa-search fs-5 me-3 link-dark"></i></a>
                <!-- Button trigger modal -->
                <span class="px-2 position-relative ms-2" data-bs-toggle="modal" data-bs-target="#notification"><i class="fas fa-bell fs-5"></i>
                    @if(count(auth()->user()->unreadNotifications) != 0)
                    <span class="number-notification position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger placeholder">
                        {{count(auth()->user()->unreadNotifications)}} </span>
                    @endif
                </span>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <div class="nav__menu" id="nav-menu" dir="rtl">
                    <ul class="nav__list mt-3">
                        <li class="nav__item">
                            <a href="/" class="text-decoration-none nav__link flex-column d-flex align-items-center">
                                <i class='fa-solid fa-house-chimney nav__icon fs-3'></i>
                                <span class="nav__name">الصفحة الرئيسية</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="/show_posts" class="text-decoration-none nav__link flex-column d-flex align-items-center">
                                <i class='fa-regular fa-rectangle-list nav__icon fs-3'></i>
                                <span class="nav__name">المنشورات</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="/index_agents" class="text-decoration-none nav__link flex-column d-flex align-items-center">
                                <i class='fa-solid fa-people-roof nav__icon fs-3'></i>
                                <span class="nav__name">الموظفين</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="/" class="pe-2 nav__logo"><img src="../Images/svg/Logo/LogoT.png" alt="" width="70px" /></a>
            </div>
        </nav>
    </header>

    @endauth

    @guest
    <header class="header position-fixed w-100 top-0 start-0 bg-body scroll-header" id="header">
        <nav class="mynav d-flex justify-content-between align-items-center">

            <div class="d-flex justify-content-between align-items-center">
                <div class="dropdown me-4">
                    <span class="dropdown-toggle ms-1 rounded-circle" data-bs-toggle="dropdown">
                        <img src="../Images/svg/icon/circle-user.svg" alt="img" width="29px" />
                    </span>
                    <ul class="dropdown-menu mt-4 text-end">
                        <li>
                            <a class="dropdown-item" @guest onclick="preventFunction()" @endguest @auth href="/AddRE" @endauth>إنشاء منشور&nbsp;
                                <i class="fa-solid fa-circle-plus text-muted"></i></a>
                        </li>
                        <li><a href="{{ route('login') }}" class="dropdown-item">تسجيل الدخول&nbsp;<i class="fas fa-sign-in-alt text-muted"></i></a>
                        </li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="dropdown-item">إنشاء حساب&nbsp;
                                <i class="fa-solid fa-circle-plus text-muted"></i></a>
                        </li>
                        @endif
                    </ul>
                </div>
                <a data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="بحث متقدّم" title="بحث متقدّم" href="/search">
                    <i class="fas fa-search fs-5 me-3 link-dark"></i></a>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="nav__menu" id="nav-menu" dir="rtl">
                    <ul class="nav__list mt-3">
                        <li class="nav__item">
                            <a href="/" class="text-decoration-none nav__link flex-column d-flex align-items-center">
                                <i class='fa-solid fa-house-chimney nav__icon fs-3'></i>
                                <span class="nav__name">الصفحة الرئيسية</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="/show_posts" class="text-decoration-none nav__link flex-column d-flex align-items-center">
                                <i class='fa-regular fa-rectangle-list nav__icon fs-3'></i>
                                <span class="nav__name">المنشورات</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="/agents" class="text-decoration-none nav__link flex-column d-flex align-items-center">
                                <i class='fa-solid fa-people-roof nav__icon fs-3'></i>
                                <span class="nav__name">الموظفين</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <a href="/" class="pe-2 nav__logo"><img src="Images/svg/Logo/LogoT.png" alt="" width="70px" /></a>
            </div>
        </nav>
    </header>

    @endguest
    <section style="height: 76.500px;"></section>
    <script src="../libraries/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
    <script src="../libraries/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="../libraries/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
    @yield('content')
    <footer class="shadow-sm bg-body">
        <!-- style="padding-top: 200px; padding-bottom: 70px;" -->
        <?php $about = \App\Models\About::all(); ?>
        <div class="container py-3">
            <div class="row text-end" dir="rtl">
                @foreach($about as $_about)
                <div class="col-lg-3 col-md-6 mb-4">
                    <p>
                        <a href="/"><img src="Images/svg/Logo/LogoT.png" width="70" alt=""></a>
                    </p>
                    <p><i class="fas fa-map-marker-alt fs-5 text-muted"></i>&nbsp;
                        <span class="">{{$_about->address}}</span>
                    </p>
                    <p><i class="fas fa-phone-square fs-5 text-muted"></i>&nbsp;
                        <span class="text-decoration-none link-secondary" href="tel:+963934528484" dir="ltr">
                            {{$_about->phone}} </span>
                    </p>
                    <p><i class="fas fa-envelope fs-5 text-muted"></i>&nbsp;
                        <span data-cfemail="">{{$_about->email}} </span>
                    </p>
                </div>
                @endforeach
                <div class="col-lg-3 col-md-6 my-4">
                    <h4>الأحدث</h4>
                    <hr>
                    <li><a class="text-decoration-none link-secondary" href="/new_posts">أحدث المنشورات</a></li>
                    <li><a class="text-decoration-none link-secondary" href="/new_sale_posts">أحدث منشورات البيع</a></li>
                    <li><a class="text-decoration-none link-secondary" href="/new_rent_posts">أحدث منشورات الآجار</a></li>
                    <li><a class="text-decoration-none link-secondary" href="/new_mort_posts">أحدث منشورات الرهن</a></li>

                </div>
                <div class="col-lg-3 col-md-6 my-4">
                    <h4>وصول سريع</h4>
                    <hr>
                    <li><a class="text-decoration-none link-secondary" href="/show_posts">كل المنشورات</a></li>
                    <li><a class="text-decoration-none link-secondary" href="/sale_posts">منشورات البيع</a></li>
                    <li><a class="text-decoration-none link-secondary" href="/rent_posts">منشورات الآجار</a></li>
                    <li><a class="text-decoration-none link-secondary" href="/mort_posts">منشورات الرهن</a></li>
                </div>
                <div class="col-lg-3 col-md-6 my-4">
                    <h4>ماذا عنا؟</h4>
                    <hr>
                    <!-- <li><a class="text-decoration-none link-secondary" href="">عن الموقع</a></li> -->
                    <li><a class="text-decoration-none link-secondary" href="/contact">تواصل معنا</a></li>
                    <li><a class="text-decoration-none link-secondary" href="/names">مصطلحات </a></li>
                </div>
            </div>
        </div>
        <div class="row bg-purple text-light py-2">
            <div class="col-12">
                <p class="text-center">جميع الحقوق محفوظة لعام 2021-2022
                    <span class="fs-5">&copy;</span>
                </p>
            </div>
        </div>
        <div class="d-md-none my-5"> </div>
    </footer>
    <script>
        // const dropdownElementList = document.querySelectorAll('.dropdown-toggle');
        // const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl));
        // const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        // const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

        // code_for_notifications

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('2a598ead0e2a7dbe6ec2', {
            cluster: 'mt1',
            encrypted: false
        });

        var notificationsWrapper = $('.dropdown-notifications');
        var notificationsToggle = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('span[data-count]');
        var notificationsCount = parseInt(notificationsCountElem.data('count'));
        var notifications = notificationsWrapper.find('li.scrollable-container');
        // Subscribe to the channel we specified in our Laravel Event

        var channel = pusher.subscribe('App.Models.User.' + userId);
        // Bind a function to a Event (the full Laravel class)
        channel.bind('BroadcastNotificationCreated', function(data) {
            parseInt(document.querySelector(".number-notification").classList.add("d-none"))+1;
            alert("ممتاز");
            var existingNotifications = notifications.html();
            var newNotificationHtml = `<a href="` + data.user_id + `">
        <div class="media-body">
        <p class="notification-text font-small-3 text-muted text-right">` +
                data.comment +
                `</p></div>
        </a>`;
            notifications.html(newNotificationHtml + existingNotifications);
            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();
        });
        // كود لجعل الاشعارات مقروءة
        function markNotificationAsRead() {
            $.get('/markAsRead');
            for (var i = 0; i < document.querySelectorAll(".bd-callout").length; i++) {
                document.querySelectorAll(".bd-callout")[i].classList.remove("bd-purple-100");
                document.querySelector(".number-notification").classList.add("d-none");
            }
        }

        function prevrnt_sharing() {
            alert("عذراً أنت  ممنوع من  النشر");
        }
    </script>
</body>


</html>
