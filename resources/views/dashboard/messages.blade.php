@extends('dashboard.sidenavbar')
@section('content')
<html>

<head>
    <meta charset="UTF-8" />
    <title>Messages</title>
    <style>
        .comment-row:hover {
            background: #e2d9f3 !important;
            transform: skewX(-2deg);
        }

        .comment-row {
            border: 1px solid rgba(255, 146, 222, 0.5);
            border-radius: 50px;
        }
    </style>
</head>

<body class="bd-gray-100">
    <section dir="rtl">
        <div class="container">
            <div class="row shadow my-4 py-4">
                <div class="col-sm-6">
                    <div class="d-none d-sm-block fs-4 fw-bold text-end">الرسائل</div>
                </div>
                <div class="col-sm-6" dir="ltr">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="dropdown me-4">
                            <span class="dropdown-toggle ms-1 rounded-circle" data-bs-toggle="dropdown">
                                @if( Auth::user()->image_url != null)
                                <img src="../Images/user/{{ Auth::user()->image_url }}" alt="img" class="rounded-circle" width="30px" style="object-fit:cover;" />
                                @else
                                <img src="../Images/svg/icon/circle-user.svg" alt="img" class="rounded-circle" width="30px" style="object-fit:cover;" />
                                @endif
                            </span>
                            <ul class="dropdown-menu mt-4 text-end">
                                </li>
                                <!-- <li><a class="dropdown-item">المفضلة&nbsp;<i class="fas fa-heart text-muted"></i></a> -->
                                <li><a class="dropdown-item" href="{{route('admin.profile')}}">الملف الشخصي&nbsp;<i class="fas fa-user-cog text-muted"></i></a>
                                </li>
                                </li>
                                <li><a class="dropdown-item" href="AddRE">إنشاء منشور&nbsp;
                                        <i class="fa-solid fa-circle-plus text-muted"></i></a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">تسجيل
                                        الخروج&nbsp;
                                        <i class="fas fa-sign-out-alt text-muted"></i></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <a data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="ابحث" title="ابحث" href="search">
                            <i class="fas fa-search fs-5 me-3 link-dark"></i></a>
                        <!-- <span class="px-2 position-relative ms-2" data-bs-toggle="modal"
                            data-bs-target="#notification"><i class="fas fa-bell fs-5"></i>
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger placeholder">
                                9
                            </span>
                        </span> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container" dir="rtl">
        @if($messages->count()>0)
        @foreach($messages as $message)
        <div class="row comment-row bg-body shadow mt-5 mb-1">
            <div class="col-12 d-flex flex-row my-1 align-items-end  m-1">
                @if($message->user->image_url!=null)
                <img src="images/user/{{$message->user->image_url}}" class="rounded-circle mt-1" alt="user" width="75">&nbsp;
                @else<img src="Images/svg/icon/circle-user_secondary.svg" class="rounded-circle mt-1" alt="user" width="75">&nbsp;
                @endif
                <div>
                    <div class="text-purple fw-bold fs-5">{{$message->user->name}}</div>
                    <div class="text-muted mb-1"><i class="far fa-envelope"></i>&nbsp;{{$message->user->email}}</div>
                </div>
            </div>
            <div class="row mb-2  m-1">
                <div class="text-muted ">
                    <i class="fa-solid fa-calendar-days"></i>&nbsp;{{$message->created_at->diffForHumans()}}
                </div>
                <div>{{$message->content}}</div>
            </div>
        </div>
        @endforeach
        @else
        <div class="d-flex flex-row comment-row m-2">
            <div class="w-100">
                <p class="m-b-5 m-t-10">ليس هناك رسائل لعرضها</p>
            </div>
        </div>
        @endif
    </div>
    <div class="d-flex align-items-center justify-content-center my-5">
        {{ $messages->links("pagination::bootstrap-4") }}
    </div>
    <script>
        document.querySelectorAll(".nav_link")[5].classList.add("myactive");
    </script>
</body>
@endsection





</html>
