<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <meta name="csrf-token" content="QqBtN5CqMjZ9uSdOlPXb3jGAmME1XZ1UnMVYI6TH">
 -->
    <style>
         :root {
            /*-------Colors----------*/
            --Background-color: #5c3463;
            --body-color: #f2f2f2;
            --primary-color: #82498c;
            --primary-color-light: #e7e6eb;
            --text-color: #707070;
            --text-color2: #8c8c8c;
        }
        
        body {
            min-height: 100vh;
        }
    </style>
    <link media="all" type="text/css" rel="stylesheet" href="libraries/bootstrap/bootstrap.min.v4.css">
    <link media="all" type="text/css" rel="stylesheet" href="libraries/fontawesome/css/fontawesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/style26f8.css">
    <script src="jquery.min.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script src="libraries/bootstrap/popper.min.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script src="libraries/bootstrap/bootstrap.min.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script src="libraries/jquery.matchHeight-min.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <!-------------------------------------poper--------------------------------------------------------------------------------------->
    <script src="libraries/owl-carousel/owl.carousel.min.css" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <!-- <link rel="shortcut icon" href="storage/logo/favicon.png">
    <title>Properties</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42586526-15" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script type="a37465c26838ecfb33ba58c9-text/javascript">
        "use strict";
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-42586526-15');
    </script>
    <meta property="og:site_name" content="Flex Home">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Properties">
    <meta property="og:image" content="https://flex-home.botble.com/storage/general/open-graph-image.png">
    <meta name="twitter:title" content="Properties">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/plugins/cookie-consent/css/cookie-consente209.css?v=1.0.0">
    <link media="all" type="text/css" rel="stylesheet" href="vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">
    <link media="all" type="text/css" rel="stylesheet" href="libraries/bootstrap/bootstrap.min.v4.css">
    <link media="all" type="text/css" rel="stylesheet" href="libraries/fontawesome/css/fontawesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="libraries/owl-carousel/owl.carousel.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="libraries/owl-carousel/owl.theme.default.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/style26f8.css?v=2.32.4">
    <link media="all" type="text/css" rel="stylesheet" href="libraries/leaflet.css">
    <script src="libraries/jquery.min.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script src="libraries/bootstrap/popper.min.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script src="libraries/bootstrap/bootstrap.min.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script src="libraries/owl-carousel/owl.carousel.min.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script src="libraries/jquery.matchHeight-min.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <link type="application/atom+xml" rel="alternate" title="Properties feed" href="feed/properties">
    <link type="application/atom+xml" rel="alternate" title="Properties feed" href="vi/feed/properties">
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="feed/posts">
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="vi/feed/posts"> -->
</head>

<body>

    <div id="app">
        <section class="main-homes pb-3">

            <div class="container-fluid w90 padtop30">
                <div class="projecthome">
                    <form action="https://flex-home.botble.com/properties" method="get" id="ajax-filters-form">
                        <div class="search-box" style="direction: rtl;">
                            <div class="screen-darken"></div>
                            <div class="search-box-content">
                                <div class="d-md-none bg-primary p-2">
                                    <span class="float-right toggle-filter-offcanvas text-white">
                                        <i class="far fa-times-circle"></i>
                                    </span>
                                    <span class="text-white"><i class="fas fa-search"></i></span>
                                </div>
                                <div class="search-box-items">
                                    <div class="row ml-md-0 mr-md-0" style="justify-content:center;">
                                        <div class="col-lg-2 col-md-4 px-1">
                                            <div class="form-group">
                                                <label for="keyword" class="control-label float-right">كلمة مفتاحية</label>
                                                <div class="input-has-icon">
                                                    <i class="far fa-search"></i>
                                                    <input type="text" id="keyword" class="form-control" name="k" value="" placeholder="ابحث">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 px-1">
                                            <div class="form-group" style="position: relative;">
                                                <input type="hidden" name="city_id">
                                                <label for="location" class="control-label float-right">الموقع</label>
                                                <div class="location-input" data-url="https://flex-home.botble.com/ajax/cities" style="position: relative;">
                                                    <div class="input-has-icon">
                                                        <input class="select-city-state form-control" id="location" name="location" value="" placeholder="المحافظة , المدينة" autocomplete="off">
                                                        <i class="far fa-location"></i>
                                                    </div>
                                                    <div class="spinner-icon">
                                                        <i class="fas fa-spin fa-spinner"></i>
                                                    </div>
                                                    <div class="suggestion">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 px-1">
                                            <label for="select-type" class="control-label float-right">الخيارات</label>
                                            <div class="dropdown mb-2 select-dropdown" data-text-default="النوع , الفئة ...">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuChoise" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span>النوع , الفئة ...</span>
                                                </button>
                                                <div class="dropdown-menu keep-open" style="min-width: 20em" aria-labelledby="dropdownMenuChoise">
                                                    <div class="dropdown-item">
                                                        <div class="row">
                                                            <div class="col-6 pr-1">
                                                                <label for="select-type " class="control-label float-right">النوع</label>
                                                                <select class="form-control" name="type" id="select-type">
                                                                        <option value="">-- اختر --</option>
                                                                        <option value="sale">بيع</option>
                                                                        <option value="rent">آجار</option>
                                                                        <option value="rent">رهن</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-6 pl-1">
                                                                <div class="form-group">
                                                                    <label for="select-category" class="control-label float-right">الفئة</label>
                                                                    <select class="form-control" name="category_id" id="select-category">
                                                                            <option value="">-- اختر --</option>
                                                                            <option value="1"> Apartment</option>
                                                                            <option value="2"> Villa</option>
                                                                            <option value="3"> Condo</option>
                                                                            <option value="4"> House</option>
                                                                            <option value="5"> Land</option>
                                                                            <option value="6"> Commercial property</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="row">
                                                            <div class="col-6 pr-1">
                                                                <div class="form-group">
                                                                    <label for="select-bedroom" class="control-label float-right">عدد الغرف</label>
                                                                    <select class="form-control" name="bedroom" id="select-bedroom">
                                                                                <option value="">-- اختر --</option>
                                                                                <option value="1">
                                                                                1 room
                                                                                </option>
                                                                                <option value="2">
                                                                                2 rooms
                                                                                </option>
                                                                                <option value="3">
                                                                                3 rooms
                                                                                </option>
                                                                                <option value="4">
                                                                                4 rooms
                                                                                </option>
                                                                                <option value="5">5+ rooms</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 pl-1">
                                                                <div class="form-group">
                                                                    <label for="select-bathroom" class="control-label float-right">عدد الحمامات</label>
                                                                    <select name="bathroom" id="select-bathroom" class="form-control">
                                                                            <option value="">-- اختر --</option>
                                                                            <option value="1">
                                                                            1 room
                                                                            </option>
                                                                            <option value="2">
                                                                            2 rooms
                                                                            </option>
                                                                            <option value="3">
                                                                            3 rooms
                                                                            </option>
                                                                            <option value="4">
                                                                            4 rooms
                                                                            </option>
                                                                            <option value="5">5+ rooms</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item">
                                                        <div class="row">
                                                            <div class="col-6 pr-1">
                                                                <div class="form-group">
                                                                    <label class="control-label float-right" for="select-floor">الدور</label>
                                                                    <select name="floor" id="select-floor" class="form-control">
                                                                            <option value="">-- اختر --</option>
                                                                            <option value="1">
                                                                            1 floor
                                                                            </option>
                                                                            <option value="2">
                                                                            2 floors
                                                                            </option>
                                                                            <option value="3">
                                                                            3 floors
                                                                            </option>
                                                                            <option value="4">
                                                                            4 floors
                                                                            </option>
                                                                            <option value="5">5+ floors</option>
                                                                            </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-6" style="align-self: flex-end">
                                                                <div class="form-group">
                                                                    <div class="col-xs-auto">
                                                                        <button class="btn-purple ml-1"><i class="fas fa-check"></i></button>
                                                                        <button type="button" class=" btn-purple bg-secondary float-left btn-clear"><i class="fas fa-times"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 px-1 mb-2">
                                            <label for="select-type" class="control-label float-right">مجال السعر</label>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuPrice" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span>من , إلى ...</span>
                                                </button>
                                                <div class="dropdown-menu" style="min-width: 20em;" aria-labelledby="dropdownMenuPrice">
                                                    <div class="dropdown-item">
                                                        <div class="form-group min-max-input" data-calc="[{&quot;number&quot;:1000000000,&quot;label&quot;:&quot;__value__ billion&quot;},{&quot;number&quot;:1000000,&quot;label&quot;:&quot;__value__ million&quot;},{&quot;number&quot;:1000,&quot;label&quot;:&quot;__value__ thousand&quot;},{&quot;number&quot;:0,&quot;label&quot;:&quot;__value__&quot;}]"
                                                            data-all="من , إلى ...">
                                                            <div class="row">
                                                                <div class="col-5 pr-1">
                                                                    <label for="min_price" class="control-label float-right">من السعر (ل.س)</label>
                                                                    <input type="number" name="min_price" class="form-control min-input" id="min_price" value="" placeholder="من" min="0" step="1">
                                                                    <span class="position-absolute min-label d-none"></span>
                                                                </div>
                                                                <div class="col-5 px-1">
                                                                    <label for="max_price" class="control-label">إلى السعر (ل.س)</label>
                                                                    <input type="number" name="max_price" class="form-control max-input" id="max_price" value="" placeholder="إلى" min="0" step="1">
                                                                    <span class="position-absolute max-label d-none"></span>
                                                                </div>
                                                                <div class="col-2 px-0 btn-min-max" style="align-self: flex-end">
                                                                    <button class="btn-purple ml-2"><i class="fas fa-check"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 px-1 mb-2">
                                            <label for="select-type" class="control-label float-right">مجال المساحة</label>
                                            <div class="dropdown">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuSquare" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <span>من , إلى ...</span>
                                                </button>
                                                <div class="dropdown-menu" style="min-width: 20em;" aria-labelledby="dropdownMenuSquare">
                                                    <div class="dropdown-item">
                                                        <div class="form-group min-max-input" data-calc="[{&quot;number&quot;:0,&quot;label&quot;:&quot;__value__ m\u00b2&quot;}]" data-all="من , إلى ...">
                                                            <div class="row">
                                                                <div class="col-5 pr-1">
                                                                    <label for="min_square" class="control-label">من المساحة</label>
                                                                    <input type="number" name="min_square" class="form-control min-input" id="min_square" value="" placeholder="من" step="10" min="0">
                                                                    <span class="position-absolute min-label d-none"></span>
                                                                </div>
                                                                <div class="col-5 px-1">
                                                                    <label for="max_square" class="control-label">إلى المساحة</label>
                                                                    <input type="number" name="max_square" class="form-control max-input" id="max_square" value="" placeholder="إلى" step="10" min="0">
                                                                    <span class="position-absolute max-label d-none"></span>
                                                                </div>
                                                                <div class="col-2 px-0" style="align-self: flex-end">
                                                                    <span class="btn-purple ml-2"><i class="fas fa-check"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="list-of-suggetions mt-4">
                                                            <li data-value="0-100">> 100 m²</li>
                                                            <li data-value="100-200">100 m² - 200 m²</li>
                                                            <li data-value="200-300">200 m² - 300 m²</li>
                                                            <li data-value="300-400">300 m² - 400 m²</li>
                                                            <li data-value="400-500">400 m² - 500 m²</li>
                                                            <li data-value="500-0">> 500 m²</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-xl-1 col-md-2 px-1 button-search-wrapper" style="align-self: flex-end;">
                                            <div class="btn-group text-center w-100 ">
                                                <button type="submit" class="btn-purple btn-full">بحث</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row rowm10" style="direction: rtl;">
                            <div class=" col-lg-7 left-page-content" style="overflow-y: scroll;" data-class-full="col-lg-12 full-page-content" data-class-left="col-lg-7 left-page-content" id="properties-list">
                                <div class="shop__sort bg-light p-2 round">
                                    <div class="row">
                                        <div class="col-toggle-filter col-12 col-xs-2 col-sm-2 d-md-none my-1 pr-sm-1">
                                            <div class="toggle-filter-offcanvas bg-light toggle-filter-mobile">
                                                <i class="fal fa-filter mr-1"></i> <span class="toggle-filter-name d-block d-xs-none d-sm-block d-md-block">البحث</span>
                                            </div>
                                        </div>
                                        <div class="col-showing col-6 col-md-5 col-sm-4  my-1">
                                            <div class="form-group--inline">
                                                <select class="form-select m-1 p-1 bg-light" name="per_page" id="per-page">
                                                    <option disabled>عرض</option>
                                                    <option value="">15</option>
                                                    <option value="30">30</option>
                                                    <option value="45">45</option>
                                                    <option value="75">75</option>
                                                    <option value="120">120</option>
                                               </select>
                                            </div>
                                        </div>
                                        <div class="col-sort-by col-6 col-md-7 col-sm-6  my-2">
                                            <div class="sort-by-wrap d-flex">
                                                <div class="form-group--inline">
                                                    <select class="form-select mb-1 p-1 bg-light" name="sort_by" id="sort-by">
                                                            <option disabled>ترتيب العرض حسب</option>
                                                            <option value="default">الافتراضي</option>
                                                            <option value="date_asc">الأقدم</option>
                                                            <option value="date_desc">الأحدث</option>
                                                            <option value="price_asc">السعر: من الأقل إلى الأكثر</option>
                                                            <option value="price_desc">السعر: من الأكثر إلى الأقل</option>
                                                    </select>
                                                    <div class="change-view  p-1" onclick="myFunction()">
                                                        <i class="fas fa-map-marker-alt view-type-map  active "></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="data-listing mt-2">
                                    <div id="loading">
                                        <div class="half-circle-spinner">
                                            <div class="circle circle-1"></div>
                                            <div class="circle circle-2"></div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="page" data-value="1">
                                    <!--------------------------------------Cards---------------------------------->
                                    <div class="row">
                                        <div class="colm10 property-item" data-lat="42.621994" data-long="-75.219623">
                                            <div class="item" data-lat="42.621994" data-long="-75.219623">
                                                <div class="blii">
                                                    <div class="img">
                                                        <img class="thumb" data-src="https://flex-home.botble.com/storage/properties/t3-410x270.jpg" src="storage/properties/t3-410x270.jpg" alt="Nice Apartment for rent in Berlin">
                                                    </div>
                                                    <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a>
                                                    <div class="media-count-wrapper">
                                                        <div class="media-count">
                                                            <img src="themes/flex-home/images/media-count.svg" alt="media">
                                                            <span>5</span>
                                                        </div>
                                                    </div>
                                                    <div class="status"><span class="label-success status-label">بيع</span></div>
                                                    <ul class="item-price-wrap hide-on-list">
                                                        <li class="item-price">18مليون </li>
                                                        <li class="h-type"><span>أرض</span></li>
                                                    </ul>
                                                </div>
                                                <div class="description">
                                                    <a href="#" class="text-orange heart add-to-wishlist" data-id="17" title="I care about this property!!!"><i class="far fa-heart mt-3"></i></a>
                                                    <a href="properties/nice-apartment-for-rent-in-berlin.html">
                                                        <h5>طابو أخضر</h5>
                                                        <p class="dia_chi"><i class="fas fa-map-marker-alt"></i>الشهباء شارع الفيلات
                                                        </p>
                                                    </a>
                                                    <p class="threemt bold500">
                                                        <span data-toggle="tooltip" data-placement="top" data-original-title="عدد الغرف">
                                                            <i class="vti mr-2">1</i><i><img src="themes/flex-home/images/bed.svg" alt="icon"></i> 
                                                        </span>
                                                        <span class="mr-3" data-toggle="tooltip" data-placement="top" data-original-title="عدد الحمامات"> 
                                                            <i class="vti mr-2">1</i><i><img src="themes/flex-home/images/bath.svg" alt="icon"></i> </span>
                                                        <span class="mr-3" data-toggle="tooltip" data-placement="top" data-original-title="المساحة">
                                                             <i class="vti mr-2">33 m²</i> <i><img src="themes/flex-home/images/area.svg" alt="icon"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="colm10 property-item" data-lat="42.621994" data-long="-75.219623">
                                            <div class="item" data-lat="42.621994" data-long="-75.219623">
                                                <div class="blii">
                                                    <div class="img">
                                                        <img class="thumb" data-src="https://flex-home.botble.com/storage/properties/t3-410x270.jpg" src="storage/properties/t3-410x270.jpg" alt="Nice Apartment for rent in Berlin">
                                                    </div>
                                                    <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a>
                                                    <div class="media-count-wrapper">
                                                        <div class="media-count">
                                                            <img src="themes/flex-home/images/media-count.svg" alt="media">
                                                            <span>5</span>
                                                        </div>
                                                    </div>
                                                    <div class="status"><span class="label-success status-label">بيع</span></div>
                                                    <ul class="item-price-wrap hide-on-list">
                                                        <li class="item-price">18مليون </li>
                                                        <li class="h-type"><span>أرض</span></li>
                                                    </ul>
                                                </div>
                                                <div class="description">
                                                    <a href="#" class="text-orange heart add-to-wishlist" data-id="17" title="I care about this property!!!"><i class="far fa-heart mt-3"></i></a>
                                                    <a href="properties/nice-apartment-for-rent-in-berlin.html">
                                                        <h5>طابو أخضر</h5>
                                                        <p class="dia_chi"><i class="fas fa-map-marker-alt"></i>الشهباء شارع الفيلات
                                                        </p>
                                                    </a>
                                                    <p class="threemt bold500">
                                                        <span data-toggle="tooltip" data-placement="top" data-original-title="عدد الغرف">
                                                            <i class="vti mr-2">1</i><i><img src="themes/flex-home/images/bed.svg" alt="icon"></i> 
                                                        </span>
                                                        <span class="mr-3" data-toggle="tooltip" data-placement="top" data-original-title="عدد الحمامات"> 
                                                            <i class="vti mr-2">1</i><i><img src="themes/flex-home/images/bath.svg" alt="icon"></i> </span>
                                                        <span class="mr-3" data-toggle="tooltip" data-placement="top" data-original-title="المساحة">
                                                             <i class="vti mr-2">33 m²</i> <i><img src="themes/flex-home/images/area.svg" alt="icon"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="colm10 property-item" data-lat="42.621994" data-long="-75.219623">
                                            <div class="item" data-lat="42.621994" data-long="-75.219623">
                                                <div class="blii">
                                                    <div class="img">
                                                        <img class="thumb" data-src="https://flex-home.botble.com/storage/properties/t3-410x270.jpg" src="storage/properties/t3-410x270.jpg" alt="Nice Apartment for rent in Berlin">
                                                    </div>
                                                    <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a>
                                                    <div class="media-count-wrapper">
                                                        <div class="media-count">
                                                            <img src="themes/flex-home/images/media-count.svg" alt="media">
                                                            <span>5</span>
                                                        </div>
                                                    </div>
                                                    <div class="status"><span class="label-success status-label">بيع</span></div>
                                                    <ul class="item-price-wrap hide-on-list">
                                                        <li class="item-price">18مليون </li>
                                                        <li class="h-type"><span>أرض</span></li>
                                                    </ul>
                                                </div>
                                                <div class="description">
                                                    <a href="#" class="text-orange heart add-to-wishlist" data-id="17" title="I care about this property!!!"><i class="far fa-heart mt-3"></i></a>
                                                    <a href="properties/nice-apartment-for-rent-in-berlin.html">
                                                        <h5>طابو أخضر</h5>
                                                        <p class="dia_chi"><i class="fas fa-map-marker-alt"></i>الشهباء شارع الفيلات
                                                        </p>
                                                    </a>
                                                    <p class="threemt bold500">
                                                        <span data-toggle="tooltip" data-placement="top" data-original-title="عدد الغرف">
                                                            <i class="vti mr-2">1</i><i><img src="themes/flex-home/images/bed.svg" alt="icon"></i> 
                                                        </span>
                                                        <span class="mr-3" data-toggle="tooltip" data-placement="top" data-original-title="عدد الحمامات"> 
                                                            <i class="vti mr-2">1</i><i><img src="themes/flex-home/images/bath.svg" alt="icon"></i> </span>
                                                        <span class="mr-3" data-toggle="tooltip" data-placement="top" data-original-title="المساحة">
                                                             <i class="vti mr-2">33 m²</i> <i><img src="themes/flex-home/images/area.svg" alt="icon"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="colm10 property-item" data-lat="42.621994" data-long="-75.219623">
                                            <div class="item" data-lat="42.621994" data-long="-75.219623">
                                                <div class="blii">
                                                    <div class="img">
                                                        <img class="thumb" data-src="https://flex-home.botble.com/storage/properties/t3-410x270.jpg" src="storage/properties/t3-410x270.jpg" alt="Nice Apartment for rent in Berlin">
                                                    </div>
                                                    <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a>
                                                    <div class="media-count-wrapper">
                                                        <div class="media-count">
                                                            <img src="themes/flex-home/images/media-count.svg" alt="media">
                                                            <span>5</span>
                                                        </div>
                                                    </div>
                                                    <div class="status"><span class="label-success status-label">بيع</span></div>
                                                    <ul class="item-price-wrap hide-on-list">
                                                        <li class="item-price">18مليون </li>
                                                        <li class="h-type"><span>أرض</span></li>
                                                    </ul>
                                                </div>
                                                <div class="description">
                                                    <a href="#" class="text-orange heart add-to-wishlist" data-id="17" title="I care about this property!!!"><i class="far fa-heart mt-3"></i></a>
                                                    <a href="properties/nice-apartment-for-rent-in-berlin.html">
                                                        <h5>طابو أخضر</h5>
                                                        <p class="dia_chi"><i class="fas fa-map-marker-alt"></i>الشهباء شارع الفيلات
                                                        </p>
                                                    </a>
                                                    <p class="threemt bold500">
                                                        <span data-toggle="tooltip" data-placement="top" data-original-title="عدد الغرف">
                                                            <i class="vti mr-2">1</i><i><img src="themes/flex-home/images/bed.svg" alt="icon"></i> 
                                                        </span>
                                                        <span class="mr-3" data-toggle="tooltip" data-placement="top" data-original-title="عدد الحمامات"> 
                                                            <i class="vti mr-2">1</i><i><img src="themes/flex-home/images/bath.svg" alt="icon"></i> </span>
                                                        <span class="mr-3" data-toggle="tooltip" data-placement="top" data-original-title="المساحة">
                                                             <i class="vti mr-2">33 m²</i> <i><img src="themes/flex-home/images/area.svg" alt="icon"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="colm10 property-item" data-lat="42.621994" data-long="-75.219623">
                                            <div class="item" data-lat="42.621994" data-long="-75.219623">
                                                <div class="blii">
                                                    <div class="img">
                                                        <img class="thumb" data-src="https://flex-home.botble.com/storage/properties/t3-410x270.jpg" src="storage/properties/t3-410x270.jpg" alt="Nice Apartment for rent in Berlin">
                                                    </div>
                                                    <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a>
                                                    <div class="media-count-wrapper">
                                                        <div class="media-count">
                                                            <img src="themes/flex-home/images/media-count.svg" alt="media">
                                                            <span>5</span>
                                                        </div>
                                                    </div>
                                                    <div class="status"><span class="label-success status-label">بيع</span></div>
                                                    <ul class="item-price-wrap hide-on-list">
                                                        <li class="item-price">18مليون </li>
                                                        <li class="h-type"><span>أرض</span></li>
                                                    </ul>
                                                </div>
                                                <div class="description">
                                                    <a href="#" class="text-orange heart add-to-wishlist" data-id="17" title="I care about this property!!!"><i class="far fa-heart mt-3"></i></a>
                                                    <a href="properties/nice-apartment-for-rent-in-berlin.html">
                                                        <h5>طابو أخضر</h5>
                                                        <p class="dia_chi"><i class="fas fa-map-marker-alt"></i>الشهباء شارع الفيلات
                                                        </p>
                                                    </a>
                                                    <p class="threemt bold500">
                                                        <span data-toggle="tooltip" data-placement="top" data-original-title="عدد الغرف">
                                                            <i class="vti mr-2">1</i><i><img src="themes/flex-home/images/bed.svg" alt="icon"></i> 
                                                        </span>
                                                        <span class="mr-3" data-toggle="tooltip" data-placement="top" data-original-title="عدد الحمامات"> 
                                                            <i class="vti mr-2">1</i><i><img src="themes/flex-home/images/bath.svg" alt="icon"></i> </span>
                                                        <span class="mr-3" data-toggle="tooltip" data-placement="top" data-original-title="المساحة">
                                                             <i class="vti mr-2">33 m²</i> <i><img src="themes/flex-home/images/area.svg" alt="icon"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="colm10 property-item" data-lat="42.621994" data-long="-75.219623">
                                            <div class="item" data-lat="42.621994" data-long="-75.219623">
                                                <div class="blii">
                                                    <div class="img">
                                                        <img class="thumb" data-src="https://flex-home.botble.com/storage/properties/t3-410x270.jpg" src="storage/properties/t3-410x270.jpg" alt="Nice Apartment for rent in Berlin">
                                                    </div>
                                                    <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a>
                                                    <div class="media-count-wrapper">
                                                        <div class="media-count">
                                                            <img src="themes/flex-home/images/media-count.svg" alt="media">
                                                            <span>5</span>
                                                        </div>
                                                    </div>
                                                    <div class="status"><span class="label-success status-label">بيع</span></div>
                                                    <ul class="item-price-wrap hide-on-list">
                                                        <li class="item-price">18مليون </li>
                                                        <li class="h-type"><span>أرض</span></li>
                                                    </ul>
                                                </div>
                                                <div class="description">
                                                    <a href="#" class="text-orange heart add-to-wishlist" data-id="17" title="I care about this property!!!"><i class="far fa-heart mt-3"></i></a>
                                                    <a href="properties/nice-apartment-for-rent-in-berlin.html">
                                                        <h5>طابو أخضر</h5>
                                                        <p class="dia_chi"><i class="fas fa-map-marker-alt"></i>الشهباء شارع الفيلات
                                                        </p>
                                                    </a>
                                                    <p class="threemt bold500">
                                                        <span data-toggle="tooltip" data-placement="top" data-original-title="عدد الغرف">
                                                            <i class="vti mr-2">1</i><i><img src="themes/flex-home/images/bed.svg" alt="icon"></i> 
                                                        </span>
                                                        <span class="mr-3" data-toggle="tooltip" data-placement="top" data-original-title="عدد الحمامات"> 
                                                            <i class="vti mr-2">1</i><i><img src="themes/flex-home/images/bath.svg" alt="icon"></i> </span>
                                                        <span class="mr-3" data-toggle="tooltip" data-placement="top" data-original-title="المساحة">
                                                             <i class="vti mr-2">33 m²</i> <i><img src="themes/flex-home/images/area.svg" alt="icon"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <!--------------------------------------Pagination----------------------------------------------------------->
                                    <div class="col-sm-12">
                                        <nav class="d-flex justify-content-center pt-3" aria-label="Page navigation example">
                                            <nav>
                                                <ul class="pagination">
                                                    <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                                                        <span class="page-link" aria-hidden="true">&lsaquo;</span>
                                                    </li>
                                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                    <li class="page-item"><a class="page-link" href="properties4658.html?page=2">2</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="properties4658.html?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div id="myDIV">
                                    <div id="map"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script>
        var map;

        function initModal() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 36.20525,
                    lng: 37.15895
                },
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var myMarker = new google.maps.Marker({
                position: new google.maps.LatLng(36.20525, 37.15895),
                map: map,
                draggable: true
            });
            google.maps.event.addListener(myMarker, 'dragend', function(evt) {
                map.setCenter(myMarker.getPosition());
            });
        }
        // ----------hide and display map-----------------
        function myFunction() {
            var map = document.getElementById("myDIV");

            if (map.style.display === "none") {
                map.style.display = "block";

            } else {
                map.style.display = "none";

            }
        }
    </script>
    <script src="libraries\jquery.waypoints.min.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxRuFn9Ny7G-z-EmWCKnXCHK7uyfVvvT0&callback=initModal" async defer></script>
    <!-------------------popper-------------------------------------------->
    <script src="js\app26f8.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script src="js\rocket-loader.min.js" data-cf-settings="a37465c26838ecfb33ba58c9-|49" defer=""></script>
    <!-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script id="traffic-popup-map-template" type="text/x-custom-template">
            <div>
                <table width="100%">
                    <tr>
                        <td width="90">
                            <div class="blii"><img src="__image_thumb__" width="80" alt="__name__">
                                <div class="status">__status_html__</div>
                            </div>
                        </td>
                        <td>
                            <div class="infomarker">
                                <h5><a href="__url__" target="_blank">__name__</a></h5>
                                <div class="text-info"><strong>__price_html__</strong></div>
                                <div>__city_name__</div>
                                <div>
                                    <span>__square_text__</span> &nbsp; &nbsp;
                                    <span>
                            <i><img src="https://flex-home.botble.com/images/bed.svg" alt="icon"></i>
                            <i class="vti">__number_bedroom__</i></span> &nbsp; &nbsp; <span>
                            <i><img src="https://flex-home.botble.com/images/bath.svg" alt="icon"></i>
                            <i class="vti">__number_bathroom__</i>
                        </span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

        </script> -->
    <!-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="a37465c26838ecfb33ba58c9-text/javascript">
        window.trans = {
            "Price": "Price",
            "Number of rooms": "Number of rooms",
            "Number of rest rooms": "Number of rest rooms",
            "Square": "Square",
            "No property found": "No property found",
            "million": "million",
            "billion": "billion",
            "in": "in",
            "Added to wishlist successfully!": "Added to wishlist successfully!",
            "Removed from wishlist successfully!": "Removed from wishlist successfully!",
            "I care about this property!!!": "I care about this property!!!",
        }
        window.themeUrl = 'index.html';
        window.siteUrl = 'index.html';
        window.currentLanguage = 'en';
    </script> -->
    <!-- <script src="js/app26f8.js?v=2.32.4" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script src="js/components26f8.js?v=2.32.4" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script src="js/wishlist26f8.js?v=2.32.4" type="a37465c26838ecfb33ba58c9-text/javascript"></script> -->
    <!-- ------------------------------------------------for download ---------------------------------------------------------------- -->
    <script src="libraries/leaflet.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script src="libraries/leaflet.markercluster-src.js" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <!-- --------------------------------------------------------------------------------------------------------------------- -->
    <!-- <script src="vendor/core/plugins/cookie-consent/js/cookie-consente209.js?v=1.0.0" type="a37465c26838ecfb33ba58c9-text/javascript"></script>
    <script src="vendor/core/plugins/language/js/language-publice209.js?v=1.0.0" type="a37465c26838ecfb33ba58c9-text/javascript"></script> -->
    <!-- <div class="js-cookie-consent cookie-consent cookie-consent-full-width" style="background-color: #000000 !important; color: #FFFFFF !important;">
        <div class="cookie-consent-body" style="max-width: 1170px;">
            <span class="cookie-consent__message">
Your experience on this site will be improved by allowing cookies
<a href="cookie-policy.html">Cookie Policy</a>
</span>
            <button class="js-cookie-consent-agree cookie-consent__agree" style="background-color: #000000 !important; color: #FFFFFF !important; border: 1px solid #FFFFFF !important;">
Allow cookies
</button>
        </div>
    </div>
    <div data-site-cookie-name="cookie_for_consent"></div>
    <div data-site-cookie-lifetime="7300"></div>
    <div data-site-cookie-domain="flex-home.botble.com"></div>
    <div data-site-session-secure=""></div> -->
    <!-- <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="a37465c26838ecfb33ba58c9-|49" defer=""></script> -->

</body>

</html>