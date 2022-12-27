@extends('dashboard.sidenavbar')
@section('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Users</title>
    <!-- International Telephone Input Validation -->
    <link rel="stylesheet" href="libraries/intl-tel-input\build\css\demo.css">
    <link rel="stylesheet" href="libraries/intl-tel-input\examples\css\prism.css">
    <link rel="stylesheet" href="libraries/intl-tel-input\build\css\intlTelInput.min.css">
    <style>
        .table tbody tr {
            border-bottom: 1px solid #efdbf8;
        }

        /* #efdbf8, #efdbf8, #dfc6e4 */
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

        .offcanvas {
            color: var(--text-color);
            background-color: var(--color-lighten);
            background-image: url("Images/svg/bg/bgNH.png");
            background-repeat: repeat-y;
            transition: transform .5s ease-in-out;
        }

        #regForm {
            min-width: 300px;
            max-width: 800px;
        }

        #display_image {
            width: 100px;
            height: 100px;
            background-position: center;
            background-size: cover;
            background-image: url(Images/svg/icon/circle-user_secondary.svg);
        }

        .img-choose {
            width: 160px;
            display: flex;
            justify-content: center;
            transition: 0.5s;
            background-size: 200% auto;
            color: black;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
        }

        .img-choose:hover {
            cursor: pointer;
            background-position: right center;
            /* change the direction of the change here */
            color: var(--color-lighten);
        }

        .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-left: -1 !important;
            border-top-left-radius: 0rem !important;
            border-bottom-left-radius: 0rem !important;
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
        }

        .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
        .input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu) {
            margin-left: -1px !important;
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
            border-top-right-radius: .25rem !important;
            border-bottom-right-radius: .25rem !important;
        }
    </style>
</head>

<body class="bd-gray-100">
    <section dir="rtl">
        <div class="container">
            <div class="row shadow my-4 py-4">
                <div class="col-sm-6">
                    <div class="d-none d-sm-block fs-4 fw-bold text-end">الموظفين</div>
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
                        <a class="px-2 mx-2" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="إضافة موظف" title="إضافة موظف" href="/agent_add">
                            <i class="fa-solid fa-circle-plus fs-5 link-dark"></i>
                        </a>
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
    <section class="my-5" dir="rtl">
        <div class="container">
            @if (session('success'))
            <div class="alert alert-success message" role="alert" id="alert">
                {{ session('success') }}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <input type="text" class="form-control" placeholder="ابحث.." aria-label="Search" id="myInput">
                </div>
            </div>
        </div>
    </section>
    <section dir="rtl">
        <div class="container">
            <div class="table-responsive-xl shadow">
                <table class="table table-striped table-hover text-end border rounded-3">
                    <thead style="background-image: radial-gradient(#efdbf8, #efdbf8, #dfc6e4);">
                        <tr>
                            <th>#</th>
                            <th>الصورة</th>
                            <th>اسم المستخدم</th>
                            <th>اسم الموظف</th>
                            <th>البريد الإلكتروني</th>
                            <th>رقم الجوال</th>
                            <th> العنوان</th>
                            <th> الجنس</th>
                            <th>حالة الموظف</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach($agents as $agent)
                        <tr onmouseover="style.color='#690f79'" onmouseout="style.color='black'">
                            <td>{{$loop->index+1}}</td>
                            @if($agent->user->image_url!=null)
                            <td><a href="/Profile_anotheruser/{{$agent->user->id}}"><img class="rounded-circle" width="50" height="50" src="images/user/{{$agent->user->image_url}}"></a></td>
                            @else
                            <td><a href="/Profile_anotheruser/{{$agent->user->id}}"><img class="rounded-circle" width="50" height="50" src="images/svg/icon/circle-user.svg"></a>
                            </td>
                            @endif
                            <td>{{$agent->user->name}}</td>
                            <td>{{$agent->first_name}}&nbsp;{{$agent->last_name}}</td>
                            <td>{{$agent->user->email}}</td>
                            <td>{{$agent->user->phone}}</td>
                            <td>{{$agent->address}}</td>
                            <td>@switch($agent->gender)
                                @case('0')أنثى@break
                                @case('1')ذكر@break
                                @endswitch
                            </td>
                            <td>
                                <form method="post" action="agent_state_update/{{$agent->id}}">
                                    @csrf
                                    <select class="form-select shadow-sm" name="work_state" onchange="this.form.submit()" title=" " value="" style="min-width: max-content;">
                                        <option value="1" {{($agent->work_state==1)?'selected':null}}>قيد العمل</option>
                                        <option value="2" {{($agent->work_state==2)?'selected':null}}>مستقيل</option>
                                    </select>
                                </form>
                            </td>
                            <td><a data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="تعديل بيانات الموظف" title="تعديل بيانات الموظف" href="/agent_update/{{$agent->id}}"><i class="fas fa-edit text-muted"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <div class="d-flex align-items-center justify-content-center pt-2 my-5">
        {{ $agents->links("pagination::bootstrap-4") }}
    </div>
    <script src="libraries/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="libraries/intl-tel-input/build/js/intlTelInput.js"></script>
    <script>
        document.querySelectorAll(".nav_link")[4].classList.add("myactive");
        const dropdownElementList = document.querySelectorAll('.dropdown-toggle');
        const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl));
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
        //for Popover
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        });
        //search box
        $(document).ready(function() {
            $('#show').load('list.html');
        });
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        //uploaded_image
        const image_input = document.querySelector("#image_input");
        var uploaded_image;
        image_input.addEventListener('change', function() {
            const reader = new FileReader();
            reader.addEventListener('load', () => {
                uploaded_image = reader.result;
                document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
            });
            reader.readAsDataURL(this.files[0]);
        });
    </script>
</body>

</html>







@endsection
