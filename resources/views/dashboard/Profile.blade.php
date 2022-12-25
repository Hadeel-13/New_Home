@extends('dashboard.home')
@section('content')
<html>

<head>
    <meta charset="UTF-8" />
    <title>Profile</title>
    <link href="../../fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
    <link href="../../bootstrap-5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../animate.min.css">
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
            --Background-color: #5C3463;
            --body-color: #f2f2f2;
            --primary-color: #82498c;
            --primary-color-light: #e7e6eb;
            --text-color: #707070;
        }
        
        body {
            min-height: 100vh;
            background: linear-gradient(115deg, #e7e6eb, #5C3463, #e7e6eb);
        }
        
        .sub-bac {
            position: relative;
            width: 950px;
            height: 520px;
            box-shadow: 0 8px 20px #0e0020;
            background: linear-gradient(115deg, #d7bebe, #5C3463, #ff97bd);
        }
        
        .card {
            position: absolute;
            height: 500px;
            top: 50px;
            display: flex;
            box-shadow: 0 5px 45px rgba(0, 0, 0, 0.15);
            width: 900px;
            background-image: linear-gradient(#dfc6e4, #dfc6e4, #dfc6e4);
            transition: all 0.5s;
            margin-top: 100px;
        }
        
        .image .img {
            transition: all 0.5s;
        }
        
        .card:hover .image .img {
            transform: scale(1.4);
        }
        
        .name {
            font-size: 22px;
            font-weight: bold
        }
        
        .idd {
            font-size: 14px;
            font-weight: 600
        }
        
        .idd1 {
            font-size: 12px
        }
        
        .number {
            font-size: 22px;
            font-weight: bold
        }
        
        .follow {
            font-size: 16px;
            font-weight: 500;
            color: #545454;
        }
        
        .text span {
            font-size: 15px;
            color: #545454;
            cursor: pointer;
        }
        
        .text span:hover {
            color: var(--Background-color);
        }
        
        .icons i {
            font-size: 19px;
        }
        
        .join {
            font-size: 14px;
            color: #707070;
            font-weight: bold
        }
        
        .date {
            background-color: #dfc6e4;
            margin-top: 70px;
        }
        
        .add {
            background: #707070;
            color: var(--primary-color-light);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            position: relative;
            cursor: pointer;
        }
        
        .add span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .btn-edit {
            border: 2px solid var(--Background-color);
        }
        /*-------------------css nav------------------------*/
        
        .nav-pills .nav-item .nav-link:hover {
            /* color: #fff;
            background-color: #9c27b0; */
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, .2), 0 13px 24px -11px rgba(156, 39, 176, .6);
            background-color: rgba(200, 200, 200, 0.2);
        }
        
        .nav-pills .nav-item .nav-link {
            min-width: 100px;
            color: #555;
            transition: all .3s;
            border-radius: 30px;
            text-align: center;
        }
        
        .nav-pills .nav-item i {
            display: block;
            font-size: 20px;
            padding: 10px 0;
        }
        /*----------------------end css nav-----------------------*/
    </style>
</head>

<body>
    <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
        <!-- <div class="sub-bac"> </div> -->
        <div class="card p-4">
            <div class=" image d-flex flex-column justify-content-center align-items-center">
                <img class="img" src="images/7-150x150.jpg" height="120" width="120" style="border-radius: 50%; margin: 1%;" />
                <span class="name mt-3">{{Auth::user()->name}}</span>
                <span class="idd">{{Auth::user()->email}}</span>
                <!-- <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                    <span class="idd1">Oxc4c16a645_b21a</span> <span><i class="fa fa-copy"></i></span>
                </div> -->
                <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="follow">متابع</span> <span class="number">1000</span>
                </div>
                <div class=" d-flex mt-2">
                    <a href="{{route('profile.update')}}" id="animatebutton" class="btn btn-edit  animatebutton">
                      تعديل الملف الشخصي 
                      <i class="fa fa-pencil-alt"></i>
                    </a>
                </div>
                <div class="text mt-3" style="direction: rtl;">
                    <div class="row">
                        <div class="col ml-auto mr-auto">
                            <div class="profile-tabs">
                                <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#studio" role="tab" data-toggle="tab">
                                            <i class="fa fa-plus"></i> إضافة منشور
                                        </a>
                                    </li>
                                    <li class="nav-item" id="nav-item">
                                        <a class="nav-link" href="{{route('user_posts.show')}}" role="tab" data-toggle="tab">
                                            <i class="fas fa-copy icon"></i> منشوراتك
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('admin_saved_posts.show')}}" role="tab" data-toggle="tab">
                                            <i class="fas fa-heart"></i> المحفوظات
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" px-2 rounded date "> <span class="join">  ........تارريخ الانضمام  </span> </div>
            </div>
        </div>
        <script src="bootstrap-5.1.3\dist\js\bootstrap.min.js"></script>
        <script src="public/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                // Bounce button
                $("#animatebutton").hover(function() {
                    const element = document.querySelector('.animatebutton');
                    element.classList.add('animated', 'swing');
                    setTimeout(function() {
                        element.classList.remove('swing');
                    }, 1000);
                });
            });
        </script>
</body>

</html>
@endsection