@extends('dashboard.sidenavbar')
@section('content')
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            overflow-x: hidden;
            background-repeat: repeat-y;
        }
    </style>
</head>

<body class="bd-gray-100">
    <section dir="rtl">
        <div class="container">
            <div class="row shadow my-4 py-4">
                <div class="col-sm-6">
                    <div class="d-none d-sm-block fs-4 fw-bold text-end">الإحصائيات</div>
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
                        <!-- <span class="px-2 position-relative ms-2" data-bs-toggle="modal" data-bs-target="#notification"><i class="fas fa-bell fs-5"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger placeholder">
                                9
                            </span>
                        </span> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section dir="ltr">
        <div class="container pt-5">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-4">
                <div class="col mb-5">
                    <div class="shadow bg-body" style="border-radius: 15px;">
                        <div class="p-3 pt-2">
                            <div class="position-absolute shadow text-white text-center" style="width:64px; height:64px; margin-top: -30px; border-radius: 0.75rem; background: radial-gradient(rgb(202, 111, 202), purple); ">
                                <i class="fa-solid fa-house-circle-check position-relative fs-3" style="top: 18px;"></i>
                            </div>
                            <div class="text-end pt-3 mt-4">
                                <div class="fs-6 text-muted">عدد العقارات المستثمرة</div>
                                <div class="fs-4 mt-1">{{$statistics['sale_posts']}}</div>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="p-3 text-muted text-end fw-light">
                            <span>{{now()}}</span>&nbsp;منذ&nbsp;
                            <i class="fa-solid fa-calendar-days" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="تاريخ" title="تاريخ " alt="icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="shadow bg-body" style="border-radius: 15px;">
                        <div class="p-3 pt-2">
                            <div class="position-absolute shadow text-white text-center" style="width:64px; height:64px; margin-top: -30px; border-radius: 0.75rem; background: radial-gradient(#603872, #898989); ">
                                <i class="fa-solid fa-house-chimney position-relative fs-3" style="top: 18px;"></i>
                            </div>
                            <div class="text-end pt-3 mt-4">
                                <div class="fs-6 text-muted">عدد العقارات الكلي</div>
                                <div class="fs-4 mt-1">{{$statistics['posts']}}</div>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="p-3 text-muted text-end fw-light">
                            <span>{{now()}}</span>&nbsp;منذ&nbsp;
                            <i class="fa-solid fa-calendar-days" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="تاريخ" title="تاريخ " alt="icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="shadow bg-body" style="border-radius: 15px;">
                        <div class="p-3 pt-2">
                            <div class="position-absolute shadow text-white text-center" style="width:64px; height:64px; margin-top: -30px; border-radius: 0.75rem; background: radial-gradient(#875773, #ff00a2); ">
                                <i class='fa-solid fa-people-roof position-relative fs-3' style="top: 18px;"></i>
                            </div>
                            <div class="text-end pt-3 mt-4">
                                <div class="fs-6 text-muted">عدد الموظفين</div>
                                <div class="fs-4 mt-1">{{$statistics['agents']}}</div>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="p-3 text-muted text-end fw-light">
                            <span>{{now()}}</span>&nbsp;منذ&nbsp;
                            <i class="fa-solid fa-calendar-days" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="تاريخ" title="تاريخ " alt="icon"></i>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="shadow bg-body" style="border-radius: 15px;">
                        <div class="p-3 pt-2">
                            <div class="position-absolute shadow text-white text-center" style="width:64px; height:64px; margin-top: -30px; border-radius: 0.75rem; background: radial-gradient(#bf87d7, #561b70); ">
                                <i class="fa-solid fa-house-user position-relative fs-3" style="top: 18px;"></i>
                            </div>
                            <div class="text-end pt-3 mt-4">
                                <div class="fs-6 text-muted">عدد المستخدمين الكلي</div>
                                <div class="fs-4 mt-1">{{$statistics['users']}}</div>
                            </div>
                        </div>
                        <hr class="my-0">
                        <div class="p-3 text-muted text-end fw-light">
                            <span>{{now()}}</span>&nbsp;منذ&nbsp;
                            <i class="fa-solid fa-calendar-days" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="تاريخ" title="تاريخ " alt="icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section dir="rtl" class="border-bottom border-top">
        <div class="container pt-5">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-3">
                <div class="col">
                    <div class="fs-5 fw-bold text-center">المستخدم الأكثر تفاعلاً</div>
                    <div class="row my-5">
                        <div class="col">
                            <div class="shadow" style="border-radius: 15px; background: radial-gradient(#ffffff, #fdfaff , #efdbf8);">
                                <div class="pt-2">
                                    <div class="mx-auto" style="width: 80px; height: 80px; ">
                                        <a href="/Profile_anotheruser/{{$statistics['active_user_id']}}"><img class="shadow-lg" src="Images\user\{{$statistics['active_user_image_url']}}" style="width: 80px; height: 80px; margin-top: -30px; border-radius: 0.75rem; background: radial-gradient(rgb(202, 111, 202), purple);"></a>
                                    </div>
                                    <div class="text-center fw-bold fs-5">{{$statistics['active_user']}}</div>
                                    <div class="p-3 d-flex flex-row justify-content-evenly">
                                        <span class="align-self-end text-muted fs-5 fw-light">
                                            <i class="far fa-comments"></i>&nbsp;{{$statistics['active_user_comments']}}
                                        </span>
                                        <span class="align-self-start fs-5">
                                            <i class="far fa-newspaper fs-4"></i>&nbsp;{{$statistics['active_user_posts']}}
                                        </span>
                                        <span class="align-self-end text-muted fs-5 fw-light">
                                            <i class="far fa-thumbs-up"></i>&nbsp;{{$statistics['active_user_likes']}}
                                        </span>
                                    </div>
                                </div>
                                <hr class="my-0">
                                <div class="p-3 text-muted text-end fw-normal">
                                    <i class="fa-solid fa-calendar-days" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="تاريخ" title="تاريخ " alt="icon"></i>
                                    &nbsp;منذ&nbsp;<span>{{now()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fs-5 fw-bold text-center">المستخدم ذو العدد الأكبر من التعليقـات</div>
                    <div class="row my-5">
                        <div class="col">
                            <div class="shadow" style="border-radius: 15px; background: radial-gradient(#ffffff, #fdfaff , #f5d1e1);">
                                <div class="pt-2">
                                    <div class="mx-auto" style="width: 80px; height: 80px; ">
                                        <a href="/Profile_anotheruser/{{$statistics['most_comment_id']}}"> <img class="shadow-lg" src="Images\user\{{$statistics['most_comment_image_url']}}" style="width: 80px; height: 80px; margin-top: -30px; border-radius: 0.75rem; background: radial-gradient(rgb(202, 111, 202), purple);"></a>
                                    </div>
                                    <div class="text-center fw-bold fs-5">{{$statistics['most_comment_user']}}</div>
                                    <div class="p-3 d-flex flex-row justify-content-evenly">
                                        <span class="align-self-end text-muted fs-5 fw-light">
                                            <i class="far fa-newspaper"></i>&nbsp;{{$statistics['most_comment_posts_count']}}
                                        </span>
                                        <span class="align-self-start fs-5">
                                            <i class="far fa-comments fs-4"></i>&nbsp;{{$statistics['most_comment_count']}}
                                        </span>
                                        <span class="align-self-end text-muted fs-5 fw-light">
                                            <i class="far fa-thumbs-up"></i>&nbsp;{{$statistics['most_comment_likes_count']}}
                                        </span>
                                    </div>
                                </div>
                                <hr class="my-0">
                                <div class="p-3 text-muted text-end fw-normal">
                                    <i class="fa-solid fa-calendar-days" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="تاريخ" title="تاريخ " alt="icon"></i>
                                    &nbsp;منذ&nbsp;<span>{{now()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fs-5 fw-bold text-center">المستخدم ذو العدد الأكبر من الإعجابـات</div>
                    <div class="row my-5">
                        <div class="col">
                            <div class="shadow" style="border-radius: 15px; background: radial-gradient(#ffffff, #fdfaff , #d6d6d6);">
                                <div class="pt-2">
                                    <div class="mx-auto" style="width: 80px; height: 80px; ">
                                        <a href="/Profile_anotheruser/{{$statistics['most_like_id']}}"> <img class="shadow-lg" src="Images\user\{{$statistics['most_like_image_url']}}" style="width: 80px; height: 80px; margin-top: -30px; border-radius: 0.75rem; background: radial-gradient(rgb(202, 111, 202), purple);"></a>
                                    </div>
                                    <div class="text-center fw-bold fs-5"> {{$statistics['most_like_user']}}</div>
                                    <div class="p-3 d-flex flex-row justify-content-evenly">
                                        <span class="align-self-end fs-5 text-muted fw-light">
                                            <i class="far fa-comments"></i>&nbsp;{{$statistics['most_like_comments_count']}}
                                        </span>
                                        <span class="align-self-start fs-4">
                                            <i class="far fa-thumbs-up"></i>&nbsp;{{$statistics['most_like_count']}}
                                        </span>
                                        <span class="align-self-end fs-5 text-muted fw-light">
                                            <i class="far fa-newspaper"></i>&nbsp;{{$statistics['most_like_posts_count']}}
                                        </span>
                                    </div>
                                </div>
                                <hr class="my-0">
                                <div class="p-3 text-muted text-end fw-normal">
                                    <i class="fa-solid fa-calendar-days" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="تاريخ" title="تاريخ " alt="icon"></i>
                                    &nbsp;منذ&nbsp;<span>{{now()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fs-5 fw-bold text-center"> المنشور الأكثر تفاعلا</div>
                    <div class="row my-5">
                        <div class="col">
                            <div class="shadow" style="border-radius: 15px; background: radial-gradient(#ffffff, #fdfaff , #d6d6d6);">
                                <div class="pt-2">
                                    <div class="mx-auto" style="width: 80px; height: 80px; ">
                                        <a href="/Profile_anotheruser/{{$statistics['active_post']->user->id}}"><img class="shadow-lg" src="Images\user\{{$statistics['active_post']->user->image_url}}" style="width: 80px; height: 80px; margin-top: -30px; border-radius: 0.75rem; background: radial-gradient(rgb(202, 111, 202), purple);"></a>
                                    </div>
                                    <div class="text-center fw-bold fs-5">&nbsp;{{$statistics['active_post']->user->name}}</div>
                                    <div class="p-3 d-flex flex-row justify-content-evenly">
                                        <span class="align-self-end text-muted fs-5 fw-light">
                                            <i class="far fa-comments"></i>&nbsp;{{$statistics['active_post_comments']}}
                                        </span>
                                        <a class="d-flex flex-row text-decoration-none mt-3" style="color:#561b70" href="/show_post/{{$statistics['active_post']->id}}"><span class="align-self-start fs-5">
                                                <i class="far fa-newspaper fs-4"></i>&nbsp; عرض المنشور
                                            </span></a>
                                        <span class="align-self-end text-muted fs-5 fw-light">
                                            <i class="far fa-thumbs-up"></i>&nbsp;{{$statistics['active_post_likes']}}
                                        </span>
                                    </div>
                                </div>
                                <hr class="my-0">
                                <div class="p-3 text-muted text-end fw-normal">
                                    <i class="fa-solid fa-calendar-days" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="تاريخ" title="تاريخ " alt="icon"></i>
                                    &nbsp;منذ&nbsp;<span>{{now()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fs-5 fw-bold text-center"> المنشور الحائز على أكثر تعليقات</div>
                    <div class="row my-5">
                        <div class="col">
                            <div class="shadow" style="border-radius: 15px; background: radial-gradient(#ffffff, #fdfaff , #f5d1e1);">
                                <div class="pt-2">
                                    <div class="mx-auto" style="width: 80px; height: 80px; ">
                                        <a href="/Profile_anotheruser/{{$statistics['most_comment_Post']->user->id}}"><img class="shadow-lg" src="Images\user\{{$statistics['most_comment_Post']->user->image_url}}" style="width: 80px; height: 80px; margin-top: -30px; border-radius: 0.75rem; background: radial-gradient(rgb(202, 111, 202), purple);"></a>
                                    </div>
                                    <div class="text-center fw-bold fs-5">&nbsp;{{$statistics['most_comment_Post']->user->name}}</div>
                                    <div class="p-3 d-flex flex-row justify-content-evenly">
                                        <span class="align-self-end text-muted fs-5 fw-light">
                                            <i class="far fa-comments"></i>&nbsp;{{$statistics['most_comment_Post']->comments_count}}
                                        </span>
                                        <a class="d-flex flex-row text-decoration-none mt-3" style="color:#561b70" href="/show_post/{{$statistics['most_comment_Post']->id}}"><span class="align-self-start fs-5">
                                                <i class="far fa-newspaper fs-4"></i>&nbsp; عرض المنشور
                                            </span></a>
                                        <span class="align-self-end text-muted fs-5 fw-light">
                                            <i class="far fa-thumbs-up"></i>&nbsp;{{$statistics['likes_count_post_1']}}
                                        </span>
                                    </div>
                                </div>
                                <hr class="my-0">
                                <div class="p-3 text-muted text-end fw-normal">
                                    <i class="fa-solid fa-calendar-days" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="تاريخ" title="تاريخ " alt="icon"></i>
                                    &nbsp;منذ&nbsp;<span>{{now()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="fs-5 fw-bold text-center"> المنشور الحائز على أكثر اعجابات</div>
                    <div class="row my-5">
                        <div class="col">
                            <div class="shadow" style="border-radius: 15px; background: radial-gradient(#ffffff, #fdfaff , #efdbf8);">
                                <div class="pt-2">
                                    <div class="mx-auto" style="width: 80px; height: 80px; ">
                                        <a href="/Profile_anotheruser/{{$statistics['most_likes_post']->user->id}}"><img class="shadow-lg" src="Images\user\{{$statistics['most_likes_post']->user->image_url}}" style="width: 80px; height: 80px; margin-top: -30px; border-radius: 0.75rem; background: radial-gradient(rgb(202, 111, 202), purple);"></a>
                                    </div>
                                    <div class="text-center fw-bold fs-5">&nbsp;{{$statistics['most_likes_post']->user->name}}</div>
                                    <div class="p-3 d-flex flex-row justify-content-evenly">
                                        <span class="align-self-end text-muted fs-5 fw-light">
                                            <i class="far fa-comments"></i>&nbsp;{{$statistics['comments_count_post_2']}}
                                        </span>
                                        <a class="d-flex flex-row text-decoration-none mt-3" style="color:#561b70" href="/show_post/{{$statistics['most_likes_post']->id}}"><span class="align-self-start fs-5">
                                                <i class="far fa-newspaper fs-4"></i>&nbsp; عرض المنشور
                                            </span></a>
                                        <span class="align-self-end text-muted fs-5 fw-light">
                                            <i class="far fa-thumbs-up"></i>&nbsp;{{$statistics['most_likes_post']->likes_count}}
                                        </span>
                                    </div>
                                </div>
                                <hr class="my-0">
                                <div class="p-3 text-muted text-end fw-normal">
                                    <i class="fa-solid fa-calendar-days" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="تاريخ" title="تاريخ " alt="icon"></i>
                                    &nbsp;منذ&nbsp;<span> {{now()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-body py-4" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="fs-5 fw-bold text-end mb-3">المـوظـفـيـن</div>
                <div class="col-lg-6 col-md-12 border-bottom table-responsive" style=" height: 300px; overflow-y: scroll;">
                    <div class="table-responsive-lg">
                        <table class="table table-striped table-hover border">
                            <thead style=" background: radial-gradient(#ffffff, #fdfaff , #d6d6d6);">
                                <tr>
                                    <th scope="col" class="fs-6">#</th>
                                    <th scope="col" class="fs-6">الاسم</th>
                                    <th scope="col" class="fs-6">الكنية</th>
                                    <th scope="col" class="fs-6">الجنس</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agents as $agent)
                                <tr onclick=changeChartdoughnut(<?php echo $loop->index; ?>);>
                                    <td>
                                        <img src="Images/user/profile2.jpg" alt="" style="width: 50px; height: 50px" class="rounded-circle" />&nbsp;
                                        <span class="fw-bold">{{$agent->user->name}} </span>
                                    </td>
                                    <td class="fw-normal">{{$agent->first_name}} </td>
                                    <td class="fw-normal">{{$agent->last_name}} </td>
                                    <td class="fw-normal"> @switch($agent->gender)
                                        @case('0')أنثى@break
                                        @case('1')ذكر@break
                                        @endswitch
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 mt-3">
                    <canvas id="myChartdoughnut" style="width:100%;max-width:600px"></canvas>
                </div>
            </div>
        </div>
    </section>
    <div class="zigzag"></div>
    <section class="border-bottom py-5" dir="rtl">
        <div class="container">
            <div class="row">
                <form method="post" action="/user_year_update">
                    @csrf
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <select class="form-select mb-4 shadow-sm" id="users_year" aria-label="Default select example" class="form-select" id="realEstateType" onchange="change_bar()" oninput=" this.className = 'form-select mb-4' " name="year" required>
                            <option selected disabled value="">اختر السنة؟</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <canvas id="myChartbar" style="width:100%; max-width:800px"></canvas>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-body py-5" dir="rtl">
        <div class="container">
            <div class="row">
                <form method="post" action="/user_year_update">
                    @csrf
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <select class="form-select mb-4 shadow-sm" name="year_2" id="RE_year" aria-label="Default select example" class="form-select" id="realEstateType" onchange="change_bar_2()" oninput=" this.className = 'form-select mb-4' " required>
                            <option selected disabled value="">اختر السنة؟</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <canvas id="myChart" style="width:100%;max-width:800px"></canvas>
                </div>
            </div>
        </div>
    </section>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script> -->
    <script src="libraries\JS\Chart.js"></script>

    <script>
        document.querySelectorAll(".nav_link")[0].classList.add("myactive");
        var currentYear = new Date().getFullYear();
        var option = "";
        for (var year = 2021; year <= currentYear; year++) {
            var option = document.createElement("option");
            option.text = year;
            option.value = year;
            // if (year == currentYear) {
            //     option.selected = true;
            // }
            document.getElementById("users_year").appendChild(option);
        }
        for (var year = 2021; year <= currentYear; year++) {
            var option = document.createElement("option");
            option.text = year;
            option.value = year;
            // if (year == currentYear) {
            //     option.selected = true;
            // }
            document.getElementById("RE_year").appendChild(option);
        }
        //pie
        yChangeValuesdoughnut = [
            <?php foreach ($agents as $agent) : ?>[<?php echo $agent->user->unsale_posts->count(); ?>, <?php echo $agent->user->sale_posts->count(); ?>],
            <?php endforeach; ?>

        ];
        var xValuesdoughnut = ["عدد العقارات الغير السمتثمرة", "عدد العقارات المستثمرة"];
        var yValuesdoughnut = [3, 6];
        var barColorsdoughnut = [
            "rgba(105, 0, 132, .2)",
            "#f5d1e1",
        ];
        var myChartdoughnut = new Chart("myChartdoughnut", {
            type: "doughnut",
            data: {
                labels: xValuesdoughnut,
                datasets: [{
                    backgroundColor: barColorsdoughnut,
                    borderColor: ["rgba(153, 102, 255, 0.2)", "#e8c3b9"],
                    data: yValuesdoughnut
                }]
            },
            options: {
                title: {
                    display: true,
                    text: "نسبة العقارات المستثمرة وغير المستثمرة لكل موظف",
                    fontSize: 20,
                    fontFamily: "system-ui,-apple-system",
                },
                legend: {
                    position: 'top',
                    labels: {
                        padding: 20,
                        boxWidth: 10,
                        fontSize: 18,
                        fontFamily: "system-ui,-apple-system",
                    }
                    // display: false
                },
            }
        });
        //
        // yChangeValuesbar = [
        //     [30, 30, 30, 03, 30, 03, 30, 30, 30, 30, 03, 03],
        //     [5, 55, 44, 33, 30, 03, 30, 30, 30, 30, 03, 03],
        // ];
        var xValuesbar = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
        var yValuesbar = [<?php echo $userArr[1]; ?>, <?php echo $userArr[2]; ?>, <?php echo $userArr[3]; ?>, <?php echo $userArr[4]; ?>, <?php echo $userArr[5]; ?>, <?php echo $userArr[6]; ?>, <?php echo $userArr[7]; ?>, <?php echo $userArr[8]; ?>, <?php echo $userArr[9]; ?>, <?php echo $userArr[10]; ?>, <?php echo $userArr[11]; ?>, <?php echo $userArr[12]; ?>];
        var barColorsbar = ['#f5d1e1', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)',
            'rgba(153, 102, 255, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(255, 159, 64, 0.2)', '#f5d1e1',
            'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(75, 192, 192, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ];
        var myChartbar = new Chart("myChartbar", {
            type: "bar",
            data: {
                labels: xValuesbar,
                datasets: [{
                    fill: true,
                    pointRadius: 1,
                    backgroundColor: barColorsbar,
                    borderColor: ["rgba(0,0,255,0.1)", "rgba(54, 162, 235, 0.2)",
                        "rgba(255, 206, 86, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(75, 192, 192, 0.2)"
                    ],
                    data: yValuesbar,
                    borderWidth: 2,
                }],
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "عدد المستخدمين بكل شهر",
                    fontSize: 20,
                    fontFamily: "system-ui,-apple-system",
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontSize: 18,
                            fontFamily: "system-ui,-apple-system",
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            fontSize: 18,
                            fontFamily: "system-ui,-apple-system",
                        }
                    }],
                }
            }
        });
        //
        var xValues = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
        var yValues = [<?php echo $postArr[1]; ?>, <?php echo $postArr[2]; ?>, <?php echo $postArr[3]; ?>, <?php echo $postArr[4]; ?>, <?php echo $postArr[5]; ?>, <?php echo $postArr[6]; ?>, <?php echo $postArr[7]; ?>, <?php echo $postArr[8]; ?>, <?php echo $postArr[9]; ?>, <?php echo $postArr[10]; ?>, <?php echo $postArr[11]; ?>, <?php echo $postArr[12]; ?>];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    fill: true,
                    // lineTension: 0,
                    backgroundColor: "rgba(153, 102, 255, 0.2)",
                    borderColor: "#e8c3b9",
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false

                },
                title: {
                    display: true,
                    text: "عدد العقارات المستثمرة بكل شهر",
                    fontSize: 20,
                    fontFamily: "system-ui,-apple-system",
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            fontSize: 18,
                            fontFamily: "system-ui,-apple-system",
                            // beginAtZero: true
                            // min: 6,
                            // max: 16
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            fontSize: 18,
                            fontFamily: "system-ui,-apple-system",
                        }
                    }],
                }
            }
        });

        function changeChartdoughnut(i) {
            // yValuesdoughnut = yChangeValuesdoughnut[i];
            myChartdoughnut.data.datasets[0].data.pop();
            myChartdoughnut.data.datasets[0].data.pop();
            myChartdoughnut.data.datasets[0].data.push(yChangeValuesdoughnut[i][0]);
            myChartdoughnut.data.datasets[0].data.push(yChangeValuesdoughnut[i][1]);
            myChartdoughnut.update();
        };
        // document.getElementById("users_year").onfocus = function() {
        //     console.log("ggg");
        //     var j = 0;
        //     for (var i = 0; i < 12; i++) {
        //         myChartbar.data.datasets[0].data.pop();
        //         myChartbar.data.datasets[0].backgroundColor.pop();
        //         myChartbar.data.datasets[0].borderColor.pop();
        //         myChartbar.data.labels.pop();
        //         myChartdoughnut.update();
        //     }
        //     for (var i = 0; i < 12; i++) {
        //         myChartbar.data.datasets[0].data.pop();
        //         myChartbar.data.datasets[0].data.push(yChangeValuesbar[1][j]);
        //         j++;
        //     }
        // }
        //

        // كود تعديل المخطط
        function change_bar() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });

            var year = $('#users_year').val();
            $.ajax({
                type: "post",
                url: "/user_year_update",
                data: {
                    'year': year,
                },
                success: function(res) {
                    if (res.status == 200) {
                        var xValuesbar = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
                        var yValuesbar = [res.userArr[1], res.userArr[2], res.userArr[3], res.userArr[4], res.userArr[5], res.userArr[6], res.userArr[7], res.userArr[8], res.userArr[9], res.userArr[10], , res.userArr[11], , res.userArr[12]];
                        var barColorsbar = ['#f5d1e1', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)',
                            'rgba(153, 102, 255, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(255, 159, 64, 0.2)', '#f5d1e1',
                            'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ];
                        var myChartbar = new Chart("myChartbar", {
                            type: "bar",
                            data: {
                                labels: xValuesbar,
                                datasets: [{
                                    fill: false,
                                    pointRadius: 1,
                                    backgroundColor: barColorsbar,
                                    borderColor: ["rgba(0,0,255,0.1)", "rgba(54, 162, 235, 0.2)",
                                        "rgba(255, 206, 86, 0.2)",
                                        "rgba(153, 102, 255, 0.2)",
                                        "rgba(75, 192, 192, 0.2)"
                                    ],
                                    data: yValuesbar,
                                    borderWidth: 2,
                                }],
                            },
                            options: {
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: "عدد المستخدمين بكل شهر",
                                    fontSize: 20,
                                    fontFamily: "system-ui,-apple-system",
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            fontSize: 18,
                                            fontFamily: "system-ui,-apple-system",
                                        }
                                    }],
                                    xAxes: [{
                                        ticks: {
                                            fontSize: 18,
                                            fontFamily: "system-ui,-apple-system",
                                        }
                                    }],
                                }
                            }
                        });
                    } else {
                        alert(res.message);
                    }
                }
            });
        }
        // -------------------------------
        function change_bar_2() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });

            var year = $('#RE_year').val();
            $.ajax({
                type: "post",
                url: "/user_year_update_2",
                data: {
                    'year': year,
                },
                success: function(res) {
                    if (res.status == 200) {
                        var xValues = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
                        var yValues = [res.postArr[1], res.postArr[2], res.postArr[3], res.postArr[4], res.postArr[5], res.postArr[6], res.postArr[7], res.postArr[8], res.postArr[9], res.postArr[10], , res.postArr[11], , res.postArr[12]];
                        new Chart("myChart", {
                            type: "line",
                            data: {
                                labels: xValues,
                                datasets: [{
                                    fill: true,
                                    // lineTension: 0,
                                    backgroundColor: "rgba(153, 102, 255, 0.2)",
                                    borderColor: "#e8c3b9",
                                    data: yValues
                                }]
                            },
                            options: {
                                legend: {
                                    display: false

                                },
                                title: {
                                    display: true,
                                    text: "عدد العقارات المستثمرة بكل شهر",
                                    fontSize: 20,
                                    fontFamily: "system-ui,-apple-system",
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            fontSize: 18,
                                            fontFamily: "system-ui,-apple-system",
                                            // beginAtZero: true
                                            // min: 6,
                                            // max: 16
                                        }
                                    }],
                                    xAxes: [{
                                        ticks: {
                                            fontSize: 18,
                                            fontFamily: "system-ui,-apple-system",
                                        }
                                    }],
                                }
                            }
                        });

                    } else {
                        alert(res.message);
                    }
                }
            });
        }
    </script>
</body>
@endsection

</html>
