@extends('dashboard.home')
@section('content')
<html>
<!DOCTYPE html>

<html>
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
<meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="UTF-8" />
    <title>Edit_Profile</title>

    <link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
    <link href="bootstrap-5.1.3\dist\css\bootstrap.min.css" rel="stylesheet" />

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
            --Background-color: #5c3463;
            --body-color: #f2f2f2;
            --primary-color: #82498c;
            --primary-color-light: #e7e6eb;
            --text-color: #707070;
            --text-color2: #8c8c8c;
        }

        /* generic  */

        body {
            color: #3f3f3f;
            font-family: "Droid Sans", Tahoma, Arial, Verdana sans-serif;
            font-size: 18px;
            /* background: var(--body-color); */
            background: linear-gradient(115deg, #e7e6eb, #5C3463, #e7e6eb);
        }

        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        menu,
        nav,
        section {
            display: block;
        }

        h1 {
            text-align: center;
            font-size: 40px;
            padding: 0;
            margin: 0 0 20px 0;
            position: relative;
            color: var(--text-color2);
        }

        /* * have a nice ampersand *
   ================================================== */

        h1:after {
            font-size: 25px;
            color: #d6cfcb;
            content: "&";
            display: block;
            width: 100%;
            text-shadow: 0px 1px 0px #fff;
        }

        /* * create the gradient bottom *
   ================================================== */

        h1:before {
            position: absolute;
            bottom: 15px;
            content: " ";
            display: block;
            height: 2px;
            width: 100%;
            background: -moz-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(182, 180, 180, 0.7) 42%, rgba(180, 178, 178, 0) 43%, rgba(168, 166, 166, 0) 50%, rgba(180, 178, 178, 0) 57%, rgba(182, 180, 180, 0.7) 58%, rgba(238, 237, 237, 0.3) 90%, rgba(255, 255, 255, 0) 100%);
            /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(182, 180, 180, 0.7) 42%, rgba(180, 178, 178, 0) 43%, rgba(168, 166, 166, 0) 50%, rgba(180, 178, 178, 0) 57%, rgba(182, 180, 180, 0.7) 58%, rgba(238, 237, 237, 0.3) 90%, rgba(255, 255, 255, 0) 100%);
            /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(182, 180, 180, 0.7) 42%, rgba(180, 178, 178, 0) 43%, rgba(168, 166, 166, 0) 50%, rgba(180, 178, 178, 0) 57%, rgba(182, 180, 180, 0.7) 58%, rgba(238, 237, 237, 0.3) 90%, rgba(255, 255, 255, 0) 100%);
            /* Opera 11.10+ */
            background: -ms-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(182, 180, 180, 0.7) 42%, rgba(180, 178, 178, 0) 43%, rgba(168, 166, 166, 0) 50%, rgba(180, 178, 178, 0) 57%, rgba(182, 180, 180, 0.7) 58%, rgba(238, 237, 237, 0.3) 90%, rgba(255, 255, 255, 0) 100%);
            /* IE10+ */
            background: linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(182, 180, 180, 0.7) 42%, rgba(180, 178, 178, 0) 43%, rgba(168, 166, 166, 0) 50%, rgba(180, 178, 178, 0) 57%, rgba(182, 180, 180, 0.7) 58%, rgba(238, 237, 237, 0.3) 90%, rgba(255, 255, 255, 0) 100%);
            /* W3C */
        }

        /* ===[ Here comes to good stuff : content styling ]=== */

        #content {
            max-width: 500px;
            position: relative;
            margin: 50px auto;
            min-height: 200px;
            z-index: 100;
            padding: 30px;
            border: 1px solid var(--text-color);
            /* My stipped background */
            background: var(--primary-color-light);
            /* FF3.6+ */
            background: repeating-linear-gradient(-45deg, #efc1cb, #efc1cb 30px, #f2f2f2 30px, #f2f2f2 40px, #c798cf 40px, #c798cf 70px, #f2f2f2 70px, #f2f2f2 80px);
            /*border-radius*/
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
            /*box-shadow*/
            -webkit-box-shadow: 0px 1px 6px #3f3f3f;
            -moz-box-shadow: 0px 1px 6px #3f3f3f;
            box-shadow: 0px 1px 6px #3f3f3f;
        }

        /* * my "fake" background that will hover the stripes *
   ================================================== */

        #content form {
            z-index: 101;
        }

        #content:after {
            background: #f9f9f9;
            margin: 10px;
            position: absolute;
            content: " ";
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            z-index: -1;
            border: 1px #e5e5e5 solid;
            /*border-radius*/
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
        }

        /* * labels*
   ================================================== */
        /* * adding our icon font !!
   ================================================== */
        /*         
        .iconic:before {
            font-size: 25px;
        }
        
        .iconic.quote-alt::after {
            content: '';
        }
        
        .iconic.comment:before {
            content: '';
        }
        
        .iconic.user:before {
            content: '';
        }
        
        .iconic.mail-alt:before {
            content: '';
        }
         */

        #display_image {
            width: 100px;
            height: 100px;
            margin: 1px auto;
            border-radius: 50%;
            background-color: var(--text-color2);
            background-position: center;
            background-size: cover;
            background-image: url(image/user_profile.png);
        }

        .img-choose {
            margin: 2% 32%;
            display: flex;
            justify-content: center;
            border: 1px solid #c479d1;
            color: #c479d1;
            border-radius: 20px;
            width: 150px;
            padding: 3px;
            font-weight: bold;
        }

        .img-choose:hover {
            cursor: pointer;
            background-color: #c479d1;
            color: #fff;
        }

        label {
            color: #7f7e7e;
            -webkit-transition: color 0.8s ease;
            -moz-transition: color 0.8s ease;
            transition: color 0.8s ease;
            float: right;
            margin: 5px;
        }

        label:hover {
            color: var(--Background-color);
        }

        label:before {
            color: #c1bfbd;
            -webkit-transition: color 1s ease;
            -moz-transition: color 1s ease;
            transition: color 1s ease;
        }

        label:hover:before {
            color: #969696;
            -webkit-transition: color 1s ease;
            -moz-transition: color 1s ease;
            transition: color 1s ease;
        }

        .form-control {
            direction: rtl;
        }

        p {
            margin-bottom: 20px;
        }

        /* * Styling the send button *
   ================================================== */

        input[type="submit"] {
            cursor: pointer;
            background: none;
            border: 1px solid #c479d1;
            color: #c479d1;
            font-size: 18px;
            padding: 10px;
            margin: 10px auto;
            background: rgb(247, 247, 247);
            background: -moz-linear-gradient(top, rgba(247, 247, 247, 1) 1%, rgba(242, 242, 242, 1) 100%);
            /* background: -webkit-gradient( linear, left top, left bottom, color-stop(1%, rgba(247, 247, 247, 1)), color-stop(100%, rgba(242, 242, 242, 1)));
            background: -webkit-linear-gradient( top, rgba(247, 247, 247, 1) 1%, rgba(242, 242, 242, 1) 100%);
            background: -o-linear-gradient( top, rgba(247, 247, 247, 1) 1%, rgba(242, 242, 242, 1) 100%);
            background: -ms-linear-gradient( top, rgba(247, 247, 247, 1) 1%, rgba(242, 242, 242, 1) 100%);
            background: linear-gradient( top, rgba(247, 247, 247, 1) 1%, rgba(242, 242, 242, 1) 100%); */
            /*border-radius*/
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            /*transition*/
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.3s linear;
        }

        input[type="submit"]:hover {
            color: #fff;
            background: #c479d1;
            /*box-shadow*/
        }

        #postcard {
            z-index: 102;
            margin: 50px auto;
            position: absolute;
            transform: scale(1.2) rotate(30deg);
            left: 650px;
            width: 530px;
            height: 600px;
        }

        .move {
            animation-duration: 4s;
            animation-timing-function: ease-in-out;
            animation-delay: 1s;
            animation-direction: alternate;
            animation-fill-mode: forwards;
            animation-iteration-count: 1;
            animation-play-state: running;
            animation-name: anim;
        }

        @keyframes anim {
            from {
                left: 650px;
                transform: scale(1.2) rotate(30deg);
                z-index: 102;
            }

            50% {
                left: 1150px;
                top: -200px;
                transform: scale(0.8) rotate(45deg);
                z-index: 102;
            }

            75% {
                left: 1000px;
                top: -200px;
                transform: scale(0.8) rotate(45deg);
                z-index: 1;
            }

            to {
                left: 650px;
                transform: scale(1) rotate(20deg);
                z-index: 1;
            }
        }

        @keyframes animTabletHor {
            from {
                left: 450px;
                transform: scale(1.2) rotate(30deg);
                z-index: 102;
            }

            50% {
                left: 950px;
                top: -200px;
                transform: scale(0.8) rotate(45deg);
                z-index: 102;
            }

            75% {
                left: 700px;
                top: -200px;
                transform: scale(0.8) rotate(45deg);
                z-index: 1;
            }

            to {
                left: 450px;
                transform: scale(1) rotate(20deg);
                z-index: 1;
            }
        }

        @keyframes animTablet {
            from {
                left: 250px;
                transform: scale(1.2) rotate(28deg);
                z-index: 102;
            }

            50% {
                left: 800px;
                top: -200px;
                transform: scale(0.8) rotate(45deg);
                z-index: 102;
            }

            75% {
                left: 600px;
                top: -200px;
                transform: scale(0.8) rotate(45deg);
                z-index: 1;
            }

            to {
                left: 300px;
                transform: scale(1) rotate(20deg);
                z-index: 1;
            }
        }

        @keyframes animPhone {
            from {
                transform: scale(1.2) rotate(360deg);
            }

            25% {
                transform: scale(1) rotate(0deg);
            }

            50% {
                transform: scale(0.8) rotate(0deg);
                top: -550px;
                z-index: 102;
            }

            75% {
                transform: scale(0.9) rotate(0deg);
                top: -200px;
                z-index: 1;
            }

            to {
                transform: scale(0.8) rotate(0deg);
                top: -100px;
                z-index: 1;
            }
        }

        @media (min-width: 981px) and (max-width: 1280px) {
            #postcard {
                left: 450px;
            }

            .move {
                animation-name: animTabletHor;
            }
        }

        @media (min-width: 768px) and (max-width: 980px) {
            #postcard {
                transform: scale(1.1) rotate(0deg);
                left: 250px;
            }

            .move {
                animation-name: animTablet;
            }
        }

        @media (max-width: 767px) {
            #postcard {
                left: auto;
                top: 0px;
            }

            .move {
                animation-name: animPhone;
            }
        }
    </style>
</head>

<body>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="row">
            <img id="postcard" src="images/update.jpg" alt="postcard" class="img-responsive move" />
            <div id="content">
                <h1>المعلومات الشخصية</h1>

                <form id="MessageForm" name="MessageForm">

                    <input type="text" class="form-control" hidden name="id" placeholder="" value="{{Auth::user()->id}}" id="id" />
                    <div id="display_image"></div>
                    <label class="img-choose">اختر صورة شخصية
                        <!-- <input type="file" id="image_input" class="form-control" name="imge_url" style="display: none;" id="imge_url" value="{{Auth::user()->image_url}}" accept=".jpg,.png,.jpeg,.gif,.svg"> -->
                    </label>
                    <div class="form-group">
                        <label class="iconic user"> اسم المستخدم <span><i class="fas fa-user "></i></span></label>
                        <input type="text" class="form-control" name="name" placeholder="" value="{{Auth::user()->name}}" id="name" />
                    </div>
                    <div class="form-group">
                        <label class="iconic mail-alt"> البريد الالكتروني <span><i class="fas fa-info "></i></span></label>
                        <input type="email" class="form-control" name="email" placeholder="" value="{{Auth::user()->email}}" id="email" />
                    </div>
                    <div class="form-group">
                        <label class="iconic quote-alt"> كلمة المرور <span><i class="fas fa-unlock-alt "></i></span></label>
                        <input type="password" class="form-control" name="password" placeholder="" id="password" />
                    </div>
                    <div class="form-group">
                        <label class="iconic quote-alt">رقم الهاتف<span><i class="fas fa-phone "></i></span></label>
                        <input type="text" class="form-control" name="phone" placeholder="" value="{{Auth::user()->phone}}" id="phone" />
                    </div>
                    <button id="btn">حفظ ★</button>
                </form>
            </div>
        </div>

    </div>
    <script src="bootstrap-5.1.3\dist\js\bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/app26f8.js?v=2.32.4" type="559488745ffc121fc50d3536-text/javascript"></script>
    <script src="libraries/jquery.waypoints.min.js" type="559488745ffc121fc50d3536-text/javascript"></script>
    <script src="libraries/bootstrap/popper.min.js" type="db4c9c39dcd52cec68b0a314-text/javascript"></script>
    <script src="libraries/bootstrap/bootstrap.min.js" type="db4c9c39dcd52cec68b0a314-text/javascript"></script>
    <script src="js/jquery.js"></script>
    <script>
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
    <script>
        jQuery(document).ready(function($) {
            // CREATE
            $("#btn").click(function(e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                e.preventDefault();
                var formData = {
                    name: jQuery('#name').val(),
                    email: jQuery('#email').val(),
                    phone: jQuery('#phone').val(),
                };
                var state = jQuery('#btn').val();
                var type = "POST";
                var ajaxurl = 'profile_update_save';
                $.ajax({
                    type: type,
                    url: ajaxurl,
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        jQuery('#MessageForm').trigger("reset");
                        printMsg(response);
                    },
                    error: function(data) {
                        console.log(data);

                    }
                });
            });

            function printMsg(msg) {
                if ($.isEmptyObject(msg.error)) {
                    console.log(msg.success);
                    $('.alert-block').css('display', 'block').append('<strong>' + msg.success + '</strong>');
                } else {
                    $.each(msg.error, function(key, value) {
                        $('.' + key + '_err').text(value);
                    });
                }
            }
        });
    </script>
</body>

</html>
@endsection