@extends('dashboard.sidenavbar')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <style>
        thead {
            /* min-width: 400px; */
            /* overflow: hidden; */
            background-image: radial-gradient(#efdbf8, #efdbf8, #dfc6e4);
        }

        .table tbody tr {
            border-bottom: 1px solid #dfc6e4;
        }

        /* .table-striped>tbody>tr:nth-of-type(odd)>* {
        --bs-table-accent-bg: #dfc6e4;
    } */

        .table-striped>tbody>tr:nth-of-type(even)>* {
            --bs-table-accent-bg: #fff;
        }

        .table-hover>tbody>tr:hover>* {
            --bs-table-accent-bg: #dfc6e4;
            color: var(--bs-table-hover-color);
        }
    </style>
</head>

<body class="bd-gray-100">
    <!-- <div include-html="list.html" id="show"></div> -->
    <section dir="rtl">
        <div class="container">
            <div class="row shadow my-4 py-4">
                <div class="col-sm-6">
                    <div class="d-none d-sm-block fs-4 fw-bold text-end">المستخدمين</div>
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
                            <i class="fas fa-search fs-5 me-3 link-dark"></i>
                        </a>
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
    <section class="my-5" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <input type="text" class="form-control" placeholder="ابحث.." aria-label="Search" id="myInput">
                </div>
            </div>
        </div>
    </section>
    <section dir="rtl">
        <div class="container">
            <div class="table-responsive-xl">
                <table class="table table-striped table-hover text-end border rounded-3 shadow">
                    <thead style="background-image: radial-gradient(#efdbf8, #efdbf8, #dfc6e4);">
                        <tr>
                            <th>#</th>
                            <th>الصورة</th>
                            <th>اسم المستخدم</th>
                            <th>البريد الإلكتروني</th>
                            <th>رقم الجوال</th>
                            <th>حالة المستخدم</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach($users as $user)
                        <tr onmouseover="style.color='#690f79'" onmouseout="style.color='black'">
                            <td>{{$loop->index+1}}</td>
                            <td><a href="/Profile_anotheruser/{{$user->id}}"><img class="rounded-circle" width="50" height="50" src="images/user/{{$user->image_url}}"></a></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone}}</td>
                            <td>
                                <form method="post" action="user_state_update/{{$user->id}}">
                                    @csrf
                                    <select class="form-select shadow-sm" name="role" onchange="this.form.submit()" value="" style="min-width: max-content;">
                                        <option value="1" {{($user->role==1)?'selected':null}}>مستخدم عادي </option>
                                        <option value="2" {{($user->role==2)?'selected':null}}>مستخدم ممنوع من النشر
                                        </option>
                                    </select>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="d-flex align-items-center justify-content-center pt-2 my-5">
        {{ $users->links("pagination::bootstrap-4") }}
    </div>
    <script src="libraries/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
    <script>
        document.querySelectorAll(".nav_link")[3].classList.add("myactive");
        $(document).ready(function() {
            $('#show').load('list.html');
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</body>
@endsection

</html>
