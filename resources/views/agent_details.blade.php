<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Explain_Agent</title>
    <link media="all" type="text/css" rel="stylesheet" href="../libraries/bootstrap/bootstrap.min.v4.css">
    <link media="all" type="text/css" rel="stylesheet" href="../libraries/fontawesome/css/fontawesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="../css/style26f8.css?v=2.32.4">
    <script src="../libraries/jquery.min.js" type="c772d48a9c608fd4d00243aa-text/javascript"></script>
    <script src="../libraries/bootstrap/popper.min.js" type="c772d48a9c608fd4d00243aa-text/javascript"></script>
    <script src="../libraries/bootstrap/bootstrap.min.js" type="c772d48a9c608fd4d00243aa-text/javascript"></script>
    <script src="../libraries/owl-carousel/owl.carousel.min.js" type="c772d48a9c608fd4d00243aa-text/javascript"></script>
    <script src="../libraries/jquery.matchHeight-min.js" type="c772d48a9c608fd4d00243aa-text/javascript"></script>
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Amiri&family=Tajawal:wght@300&display=swap");

        * {
            font-family: "Amiri", serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 20px;
        }

        :root {

            --primary-color: #6f0183;
            --primary-color-rgb: rgba(123, 44, 191, 0.8);
            --primary-color-hover: #6f0183;
            --primary-font: "Amiri", serif;
            --primary-font: #e7e6eb;
        }


        /*****footer****** */
        body {
            margin-top: 20px;

        }

        .deneb_footer .widget_wrapper {
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 200px;
            padding-bottom: 70px;
            background-color: #fff;
        }

        @media (max-width: 767px) {
            .deneb_footer .widget_wrapper .widget {
                margin-bottom: 40px;
            }
        }

        .deneb_footer .widget_wrapper .widget .widget_title {
            margin-bottom: 30px;
        }

        .deneb_footer .widget_wrapper .widget .widget_title h4 {
            font-weight: bold;
        }

        .deneb_footer .widget_wrapper .widget .widget_title h4:after {
            content: "";
            display: block;
            background: url(../images/shape/line.png) no-repeat;
            max-width: 38px;
            height: 2px;
            margin-top: 5px;
        }

        .deneb_cta .cta_wrapper {
            padding: 45px 50px 42px;
            max-width: 970px;
            border-radius: 15px;
            margin: auto;
            margin-bottom: -135px;
            position: relative;
            background: linear-gradient(115deg, #6f0183, #82498C, #c45db8);
            background-image: -moz-linear-gradient(0deg, #6f0183 0%, #6f0183 100%);
            background-image: -webkit-linear-gradient(0deg, #6f0183 0%, #6f0183 100%);
            background-image: -ms-linear-gradient(0deg, #6f0183 0%, #6f0183 100%);
            box-shadow: 2.5px 4.33px 15px 0px rgba(254, 0, 224, 0.4);
            z-index: 1;
        }

        .deneb_cta .cta_wrapper:after {
            content: "";
            background: url(../images/shape/cta_shape.png) no-repeat;
            background-position: bottom;
            width: 100%;
            height: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        .deneb_cta .cta_wrapper .cta_content h3 {
            color: #fff;
            font-weight: bold;
        }

        @media (max-width: 767px) {
            .deneb_cta .cta_wrapper .cta_content h3 {
                font-size: 24px;
            }
        }

        .deneb_cta .cta_wrapper .cta_content h3:after {
            content: "";
            display: block;
            background: url(../images/shape/line_2.png) no-repeat;
            max-width: 110px;
            height: 2px;
            margin-top: 13px;
            margin-bottom: 24px;
        }

        .deneb_cta .cta_wrapper .cta_content p {
            color: #fff;
        }

        .deneb_cta .cta_wrapper .button_box {
            float: right;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .deneb_cta .cta_wrapper .button_box {
                float: none;
                text-align: left;
                margin-top: 30px;
            }
        }

        @media (max-width: 767px) {
            .deneb_cta .cta_wrapper .button_box {
                float: none;
                text-align: center;
                margin-top: 30px;
            }
        }

        .deneb_cta .cta_wrapper .button_box .deneb_btn {
            background: #fff;
            color: #011a3e;
        }

        .deneb_cta .cta_wrapper .button_box .deneb_btn:hover,
        .deneb_cta .cta_wrapper .button_box .deneb_btn:focus {
            box-shadow: 2.5px 4.33px 15px 0px rgba(0, 0, 0, 0.15);
        }

        .copyright_area {
            text-align: center;
            margin-top: 10px;
            background-color: #ffff;
        }

        /*///////////////socail_icons////////////////*/


        *:focus,
        *:active {
            outline: none !important;
            -webkit-tap-highlight-color: transparent;
        }

        .wrapper {
            display: inline-flex;
            list-style: none;
            justify-content: center;
            padding-top: 4%;
        }

        .wrapper .icon {
            position: relative;
            background: #ffffff;
            border-radius: 50%;
            padding: 15px;
            margin: 10px;
            width: 50px;
            height: 50px;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .tooltip {
            position: absolute;
            top: 0;
            font-size: 14px;
            background: #ffffff;
            color: #ffffff;
            padding: 5px 8px;
            border-radius: 5px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .tooltip::before {
            position: absolute;
            content: "";
            height: 8px;
            width: 8px;
            background: #ffffff;
            bottom: -3px;
            left: 50%;
            transform: translate(-50%) rotate(45deg);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .icon:hover .tooltip {
            top: -45px;
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .wrapper .icon:hover span,
        .wrapper .icon:hover .tooltip {
            text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
        }

        .wrapper .facebook:hover,
        .wrapper .facebook:hover .tooltip,
        .wrapper .facebook:hover .tooltip::before {
            background: #1877F2;
            color: #ffffff;
        }

        .wrapper .twitter:hover,
        .wrapper .twitter:hover .tooltip,
        .wrapper .twitter:hover .tooltip::before {
            background: #1DA1F2;
            color: #ffffff;
        }

        .wrapper .instagram:hover,
        .wrapper .instagram:hover .tooltip,
        .wrapper .instagram:hover .tooltip::before {
            background: #E4405F;
            color: #ffffff;
        }

        .wrapper .github:hover,
        .wrapper .github:hover .tooltip,
        .wrapper .github:hover .tooltip::before {
            background: #333333;
            color: #ffffff;
        }

        .wrapper .youtube:hover,
        .wrapper .youtube:hover .tooltip,
        .wrapper .youtube:hover .tooltip::before {
            background: #CD201F;
            color: #ffffff;
        }

        /******************************views*********/
        ul {
            list-style-type: none;
        }

        a,
        a:hover {
            text-decoration: none;
        }

        body {
            font-family: "Montserrat", sans-serif;
        }

        body .testimonial {
            padding: 100px 0;
        }

        body .testimonial .row .tabs {
            all: unset;
            margin-right: 50px;
            display: flex;
            flex-direction: column;
        }

        body .testimonial .row .tabs li {
            all: unset;
            display: block;
            position: relative;
        }

        body .testimonial .row .tabs li.active::before {
            position: absolute;
            content: "";
            width: 50px;
            height: 50px;
            background-color: #6f0183;
            border-radius: 50%;
        }

        body .testimonial .row .tabs li.active::after {
            position: absolute;
            content: "";
            width: 30px;
            height: 30px;
            background-color: #6f0183;
            border-radius: 50%;
        }

        body .testimonial .row .tabs li:nth-child(1) {
            align-self: flex-end;
        }

        body .testimonial .row .tabs li:nth-child(1)::before {
            left: 64%;
            bottom: -50px;
        }

        body .testimonial .row .tabs li:nth-child(1)::after {
            left: 97%;
            bottom: -81px;
        }

        body .testimonial .row .tabs li:nth-child(1) figure img {
            margin-left: auto;
        }

        body .testimonial .row .tabs li:nth-child(2) {
            align-self: flex-start;
        }

        body .testimonial .row .tabs li:nth-child(2)::before {
            right: -65px;
            top: 50%;
        }

        body .testimonial .row .tabs li:nth-child(2)::after {
            bottom: 101px;
            border-radius: 50%;
            right: -120px;
        }

        body .testimonial .row .tabs li:nth-child(2) figure img {
            margin-right: auto;
            max-width: 300px;
            width: 100%;
            margin-top: -50px;
        }

        body .testimonial .row .tabs li:nth-child(3) {
            align-self: flex-end;
        }

        body .testimonial .row .tabs li:nth-child(3)::before {
            right: -10px;
            top: -66%;
        }

        body .testimonial .row .tabs li:nth-child(3)::after {
            top: -130px;
            border-radius: 50%;
            right: -46px;
        }

        body .testimonial .row .tabs li:nth-child(3) figure img {
            margin-left: auto;
            margin-top: -50px;
        }

        body .testimonial .row .tabs li:nth-child(3):focus {
            border: 10px solid red;
        }

        body .testimonial .row .tabs li figure {
            position: relative;
        }

        body .testimonial .row .tabs li figure img {
            display: block;
        }

        body .testimonial .row .tabs li figure::after {
            content: "";
            position: absolute;
            top: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            border: 4px solid #6f0183;
            border-radius: 50%;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }

        body .testimonial .row .tabs li figure:hover::after {
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);

        }

        body .testimonial .row .tabs.carousel-indicators li.active figure::after {
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
        }

        body .testimonial .row .carousel>h3 {
            font-size: 20px;
            line-height: 1.45;
            color: rgba(0, 0, 0, 0.5);
            font-weight: 600;
            margin-bottom: 0;
        }

        body .testimonial .row .carousel h1 {
            font-size: 40px;
            line-height: 1.225;
            margin-top: 23px;
            font-weight: 700;
            margin-bottom: 0;
        }

        body .testimonial .row .carousel .carousel-indicators {
            all: unset;
            padding-top: 43px;
            display: flex;
            list-style: none;
        }

        body .testimonial .row .carousel .carousel-indicators li {
            background: #000;
            background-clip: padding-box;
            height: 2px;
        }

        body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper {
            margin-top: 42px;
        }

        body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper p {
            font-size: 25px;
            line-height: 1.72222;
            font-weight: 500;
            color: rgba(0, 0, 0, 0.7);
        }

        body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper h3 {
            color: #000;
            font-weight: 700;
            margin-top: 37px;
            font-size: 20px;
            line-height: 1.45;
            text-transform: uppercase;
        }

        @media only screen and (max-width: 1200px) {
            body .testimonial .row .tabs {
                margin-right: 25px;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <div id="alert-container"></div>
        <div class="bravo_topbar d-none d-sm-block dir">
            <div class="container-fluid w90">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <div class="topbar-left">
                                <div class="top-socials">
                                    <a href="https://www.facebook.com/" title="Facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" title="Twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="https://youtube.com/" title="Youtube">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>

                            </div>
                            <div class="topbar-right">
                                <ul class="topbar-items">
                                    <li class="login-item">
                                        <a href="login"><i class="fas fa-sign-in-alt"></i>تسجيل الدخول</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="topmenu bg-light dir" style="direction: rtl ;">
            <div id="header-waypoint" class="main-header">
                <div class="container-fluid2 w90">
                    <div class="row">
                        <div class="col-12">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="index.html">
                                    <img src="storage/logo/logo.png" class="logo" height="40" alt="">
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" id="header-waypoint" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="fas fa-bars"></span>
                                </button>
                                <div class="collapse navbar-collapse justify-content-end animation" id="navbarSupportedContent">
                                    <div class="main-menu-darken"></div>
                                    <div class="main-menu-content">
                                        <div class="d-lg-none bg-primary p-2">
                                            <span class="text-white">Menu</span>
                                            <span class="float-right toggle-main-menu-offcanvas text-white">
                                                <i class="far fa-times-circle"></i>
                                            </span>
                                        </div>
                                        <div class="main-menu-nav d-lg-flex">
                                            <ul class="navbar-nav justify-content-end menu menu--mobile">
                                                <li class="menu-item   ">
                                                    <a href="projects.html" target="_self">
                                                        المنشورات
                                                    </a>
                                                </li>
                                                <li class="menu-item   ">
                                                    <a href="{{route('agents.show')}}" target="_self">
                                                        الوكلاء
                                                    </a>
                                                </li>

                                                <li class="menu-item   ">
                                                    <a href="contact.html" target="_self">
                                                        تواصل
                                                    </a>
                                                </li>
                                            </ul>
                                            <a class="btn btn-primary add-property" href="login.html">
                                                <i class="fas fa-plus-circle"></i> إضافة إعلان
                                            </a>
                                            <div class="d-sm-none">
                                                <div>
                                                    <ul class="topbar-items d-block">
                                                        <li class="login-item">
                                                            <a href="wishlist.html"><i class="fas fa-heart"></i> Wishlist(<span class="wishlist-count">0</span>)</a>
                                                        </li>
                                                    </ul>

                                                    <div class="header-deliver">/</div>

                                                    <ul class="topbar-items d-block">
                                                        <li class="login-item">
                                                            <a href="login.html"><i class="fas fa-sign-in-alt"></i> تسجيل الدخول</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="main-homes">
            <div class="bgheadproject hidden-xs" style="background: url('../images/breadcrumb-background.jpg')">
                <div class="description">
                    <div class="container-fluid w90">
                        <h1 class="text-center">تفاصيل الوكيل</h1>
                        <p class="text-center">قم بالتعرف على وكيلك بشكل أفضل</p>
                        <ul class="breadcrumb">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid w90 padtop30" style="direction: rtl ;">
                <div class="rowm10">
                    <h5 class="headifhouse">معلومات الوكيل</h5>
                    <div class="agent-details">

                        @foreach($agent_details as $agent_detail)
                        <div>
                            <a href="judy37.html">
                                <img src="..\images\{{$agent_detail->image_url}}" class="img-thumbnail mb-2 mt-2">
                            </a>
                        </div>
                        <div>
                            <h4 class="text-right mr-2 mb-2">{{$agent_detail->first_name}}{{$agent_detail->last_name}}</h4>
                            <p class="text-right mr-2"><strong class="d-inline-block">البريد الالكتروني : </strong><span class="d-inline-block">&nbsp{{$agent_detail->email}}</span></p>
                            <p class="text-right mr-2"><strong class="d-inline-block">الرقم</strong>: <span class="d-inline-block">{{$agent_detail->phone}}</span></p>
                            <p class="text-right mr-2"><strong class="d-inline-block">تاريخ الانضمام</strong>: <span class="d-inline-block">{{$agent_detail->created_at}}</span></p>
                        </div>
                        @endforeach
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <h5 class="headifhouse">الملكيات الخاصة بهذا الوكيل</h5>
                    <div class="projecthome px-2">
                        <div class="row">
                            @foreach($agent_properties as $agent_property)
                            <div class="col-6 col-lg-3 col-md-4 col-sm-6  colm10">
                                <div class="item">
                                    <div class="blii">
                                        <div class="img">
                                            <img class="thumb" src="../images/b2-410x270.jpg" alt="Property For sale , Johannesburg, South Africa">
                                        </div>
                                        <a href="/property_details/{property_id}" class="linkdetail"></a>
                                        <div class="media-count-wrapper">
                                            <div class="media-count">
                                                <?php
                                                $count_images = App\Models\Image::get()->where('post_id', '=', $agent_property->id);
                                                $count = $count_images->count();
                                                ?>
                                                <img src="../images/media-count.svg" alt="media">
                                                <span>{{$count}}</span>
                                            </div>
                                        </div>
                                        <div class="status"><span class="label-success status-label">{{$agent_property->realestate_status}}1111</span></div>
                                        <ul class="item-price-wrap hide-on-list">
                                            <li class="item-price">{{$agent_property->price}}1111111111</li>
                                            <li class="h-type"><span>{{$agent_property->realestate_type}}1111111</span></li>
                                        </ul>
                                    </div>
                                    <div class="description">
                                        <a class="text-orange heart mt-2"><i onclick="myFunction(this)" class="far fa-heart"></i></a>
                                        <h5 class="text-right">{{$agent_property->contract_type}}</h5>
                                        <p class="dia_chi text-right"><i class="fas fa-map-marker-alt"></i>{{$agent_property->city}}{{$agent_property->town}}</p>
                                        <p class="threemt bold500">
                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rooms"><i class="vti ">{{$agent_property->bedrooms_num}}</i><i><img src="../images/bed.svg" alt="icon"></i></span>
                                            <span data-toggle="tooltip" data-placement="top" data-original-title="Number of rest rooms"> <i class="vti">{{$agent_property->bathrooms_num}}</i><i><img src="../images/bath.svg" alt="icon"></i> </span>
                                            <span data-toggle="tooltip" data-placement="top" data-original-title="المساحة"><i class="vti mr-2">{{$agent_property->space}}</i><i><img src="../images/area.svg" alt="icon"></i></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{ $agent_properties->links("pagination::bootstrap-4") }}
    </div>
    </section>
    <br>
    <div class="col-sm-12">
        <nav class="d-flex justify-content-center pt-3" aria-label="Page navigation example">
        </nav>
    </div>
    <br>
    <br>
    </div>
    <!----------------------------------footer --------------------------------->
    <section class="deneb_cta">
        <div class="container">
            <div class="cta_wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="button_box" style="float:left">
                            <a href="#" class="btn" style="background-color:#fff;">تواصل معنا</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cta_content dir">
                            <h3>إن كنت تملك ملاحظات عن الموقع فلا تتردد في مراسلتنا:)</h3>
                            <p>خدمات نيو هووم تساعدك على بيع وشراء العقارات بسهولة بالإضافة إلى تزويدك بمعلومات أساسية لإتخاذ واحد من أهم القرارات المالية في حياتك.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="deneb_footer " style="direction: rtl ;">
        <div class="widget_wrapper" style="background-image: url(../images/footer_bg.png);">
            <div class="container">
                <div class="row">

                    <div class="row">
                        <div class="col-sm-3">
                            <p>
                                <a href="index.html">
                                    <img src="storage/logo/logo.png" style="max-height: 38px" alt="">
                                </a>
                            </p>
                            <p><i class="fas fa-map-marker-alt"></i> &nbsp;حلب الشهباء مقابل مكتبة الشهباء</p>
                            <p><i class="fas fa-phone-square"></i> Hotline: &nbsp;<a href="tel:18006268">18006268</a></p>
                            <p><i class="fas fa-envelope"></i> Email: &nbsp;<a href="cdn-cgi/l/email-protection.html#89eae6e7fde8eafdc9efe5ecf1a4e1e6e4eca7eae6e4"><span class="__cf_email__" data-cfemail="c7a4a8a9b3a6a4b387a1aba2bfeaafa8aaa2e9a4a8aa">[email&#160;protected]</span></a>
                            </p>
                        </div>
                        <div class="col-sm-9 padtop10">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="menufooter">
                                        <h4>ماذا عنا؟</h4>
                                        <ul>
                                            <li>
                                                <a href="about-us.html">
                                                    <span>عن الموقع</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact.html">
                                                    <span>تواصل معنا</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="careers.html">
                                                    <span>الوظائف</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="terms-conditions.html">
                                                    <span>مصطلحات &amp; شروط</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="menufooter">
                                        <h4>وصول سريع</h4>
                                        <ul>
                                            <li>
                                                <a href="projects.html">
                                                    <span>كل المنشورات</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="properties.html">
                                                    <span>منشورات البيع</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="properties1e1d.html?type=sale">
                                                    <span>منشورات الآجار</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="properties530f.html?type=rent">
                                                    <span>منشورات الرهن</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="menufooter">
                                        <h4>الاحدث</h4>
                                        <ul>
                                            <li>
                                                <a href="news.html">
                                                    <span>أحدث المنشورات </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="news/house-architecture.html">
                                                    <span> أحدث منشورات البيع</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="news/house-design.html">
                                                    <span>أحدث منشورات الآجار</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row widegt_about">
                    <ul class="wrapper">
                        <li class="icon facebook">
                            <span class="tooltip">Facebook</span>
                            <span><i class="fab fa-facebook-f"></i></span>
                        </li>
                        <li class="icon twitter">
                            <span class="tooltip">Twitter</span>
                            <span><i class="fab fa-twitter"></i></span>
                        </li>
                        <li class="icon instagram">
                            <span class="tooltip">Instagram</span>
                            <span><i class="fab fa-instagram"></i></span>
                        </li>
                        <li class="icon github">
                            <span class="tooltip">Github</span>
                            <span><i class="fab fa-github"></i></span>
                        </li>
                        <li class="icon youtube">
                            <span class="tooltip">Youtube</span>
                            <span><i class="fab fa-youtube"></i></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <p>Copyright &copy; 2022 All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="action_footer">
        <a href="#" class="cd-top"><i class="fas fa-arrow-up"></i></a>
        <a href="tel:18006268" class="cd-phone"><i class="fas fa-phone"></i> <span> &nbsp;18006268</span></a>
    </div>
    <script src="js/app26f8.js?v=2.32.4" type="c772d48a9c608fd4d00243aa-text/javascript"></script>
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="c772d48a9c608fd4d00243aa-|49" defer=""></script>
    <script>
        function myFunction(x) {
            x.classList.toggle("fa-thumbs-up");
        }
    </script>
</body>

<!-- Mirrored from flex-home.botble.com/agents/judy37 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2022 19:59:23 GMT -->
</body>

</html>