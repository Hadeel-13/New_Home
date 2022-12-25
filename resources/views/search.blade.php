@extends('header&&footer')
@section('content')
<!DOCTYPE html>
<html lang="ar">

<head>
    <script src="libraries/JS/DataSet.js"></script>
    <style>
    /**************** section1 ****************/
    .section1 {
        background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("Images/properties/home-banner.jpg");
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        height: 40vh;
    }

    .section1 .topsearch {
        width: 50%;
        transform: translateY(-50%);
        z-index: 9
    }

    @media screen and (max-width:768px) {
        .section1 .topsearch {
            width: 100%;
        }
    }

    /**************** section2: search-box****************/
    .search-box .dropdown-menu {
        inset: 1px 0px auto auto !important;
    }

    .search-box .dropdown .dropdown-toggle {
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .08);
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    @media (max-width:360px) {
        .search-box {
            padding-left: 3% !important;
            padding-right: 3% !important;
        }
    }

    /**************** section3: button map click****************/
    .btn_map {
        background: var(--Second-color);
        color: #fff;
    }

    .btn_map.active {
        background: #fff;
        color: #000;
    }

    /* end button marker click */

    /***************** section3: Cards ****************/
    .card_shadow {
        margin: 0 0.5em;
        box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
    }

    .zoom img {
        transform: scale(1);
        transition: all 0.4s;
    }

    .zoom:hover img {
        transform: scale(1.2);
    }

    .media-count span {
        font-size: 0.75rem;
        margin-top: 2px;
        transform: translate(-50%, -50%);
    }

    .item-type li:not(:last-child):before,
    .item-type li:not(:last-child):after {
        content: "";
        position: absolute;
    }

    .item-type li:not(:last-child):before {
        border-bottom: 30px solid #b82ea1;
        border-left: 25px solid transparent;
        right: 100%;
    }

    /***************** section2: pagination ****************/
    .pagination .page-item a,
    .pagination .page-item span {
        background-color: #f4f5f9;
        color: #222;
        margin: 0 5px;
        padding: 3px 12px !important;
    }

    .pagination .page-item.active span {
        background: var(--Second-color);
    }

    .pagination .page-item.disabled .page-link {
        background-color: #f4f5f9;
        border-color: #dee2e6;
        cursor: not-allowed;
    }

    /***************** section3: map ****************/
    #map {
        min-height: 650px;
    }
    </style>
</head>

<body>
    <!--section1: -->
    <section>
        <div class="section1 w-100 position-relative">
            <div class="topsearch start-0 end-0 m-auto position-absolute top-50">
                <h1 class="text-center text-white mb-4">ابحث عن عقارك المفضل في موقعنا</h1>
                <form action="" method="Post" id="frmhomesearch">
                    <div class="row bg-secondary bg-opacity-50 justify-content-center p-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="">
                                <a href="" class="link-secondary"><i class="fas fa-search fs-5"></i></a>
                            </span>
                            <input type="text" class="form-control text-end" dir="rtl" placeholder="أدخل كلمة مفتاحية">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--section2: search-box-->
    <section class="search-box container-fluid px-5 py-3">
        <form method="get" id="">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 g-4 mb-3" dir="rtl">
                <div class="col">
                    <label for="" class="form-label fw-bold">الموقع:</label>
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle text-end text-muted w-100 bg-body border"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"> <i
                                class="fas fa-location"></i>
                            المحافظة، المدينة...
                        </button>
                        <div class="dropdown-menu w-100 p-4">
                            <div class="mb-3">
                                <select class="form-select" id="validationCustom01" required>
                                    <option selected disabled value="">اختر المحافظة؟</option>
                                    <option value="حلب">حلب</option>
                                    <option value="دمشق">دمشق</option>
                                    <option value="درعا">درعا</option>
                                    <option value="اللاذقية">اللاذقية</option>
                                    <option value="القنيطرة">القنيطرة</option>
                                    <option value="السويداء">السويداء</option>
                                    <option value="ريف دمشق">ريف دمشق</option>
                                    <option value="حمص">حمص</option>
                                    <option value="حماه">حماه</option>
                                    <option value="طرطوس">طرطوس</option>
                                    <option value="ديرالزور">ديرالزور</option>
                                    <option value="الرقة">الرقة</option>
                                    <option value="إدلب">إدلب</option>
                                    <option value="الحسكة">الحسكة</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select mb-4 d-none" id="validationCustom02"
                                    aria-label="Default select example" required></select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select mb-4 d-none" id="validationCustom03"
                                    aria-label="Default select example" required></select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select mb-4 d-none" id="validationCustom04"
                                    aria-label="Default select example" required></select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="" class="form-label fw-bold">الخيارات:</label>
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle text-end text-muted w-100 bg-body border"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="fa-solid fa-list-check"></i>
                            القسم، النوع ...
                        </button>
                        <!-- <div class="dropdown-menu p-4"> -->
                        <div class="dropdown-menu p-4 w-100">
                            <div class="row  mb-2">
                                <label class="form-label fw-bold text-end mb-1">القسم:</label>
                                <select class="form-select" name="" id="">
                                    <option selected value="">اختر القسم؟</option>
                                    <option value="sale">بيع</option>
                                    <option value="rent">آجار</option>
                                    <option value="rent">رهن</option>
                                </select>
                            </div>
                            <div class="row">
                                <label class="form-label fw-bold text-end mb-1">النوع:</label>
                                <select class="form-select" name="" id="">
                                    <option selected value="">اختر نوع العقار؟</option>
                                    <optgroup label="شقق">
                                        <option value="شقة">شقة</option>
                                        <!--جزء من سطح مبنى-->
                                        <option value="روف">روف</option>
                                        <option value="ستوديو">ستوديو</option>
                                        <option value="دوبلكس">دوبلكس</option>
                                        <option value="بنتهاوس">بنتهاوس</option>
                                        <option value="دور كامل">دور كامل</option>
                                        <option value="شقة بحديقة">شقة بحديقة</option>
                                        <option value="شقة مفروشة">شقة مفروشة</option>
                                    </optgroup>
                                    <optgroup label="مباني">
                                        <option value="برج">برج</option>
                                        <option value="مبنى">مبنى</option>
                                        <option value="عمارة">عمارة</option>
                                        <option value="مصنع">مصنع</option>
                                        <option value="منزل/بيت عربي">منزل/بيت عربي</option>
                                    </optgroup>
                                    <optgroup label="فلل">
                                        <option value="قصر">قصر</option>
                                        <option value="فيلا">فيلا</option>
                                        <option value="شاليه">شاليه</option>
                                        <option value="توين هاوس">توين هاوس</option>
                                        <option value="تاون هاوس">تاون هاوس</option>
                                        <option value="فيلا منفصلة">فيلا منفصلة</option>
                                    </optgroup>
                                    <optgroup label="إداري">
                                        <option value="إداري">إداري</option>
                                        <option value="مكتب">مكتب</option>
                                        <option value="برج إداري">برج إداري</option>
                                        <option value="مقر إداري">مقر إداري</option>
                                        <option value="مبنى إداري">مبنى إداري</option>
                                        <option value="دور كامل إداري">دور كامل إداري</option>
                                        <option value="مساحة مكتبية">مساحة مكتبية</option>
                                        <option value="غرفة في مكتب">غرفة في مكتب</option>
                                    </optgroup>
                                    <optgroup label="تجاري">
                                        <option value="محل">محل</option>
                                        <option value="مول">مول</option>
                                        <option value="مخزن">مخزن</option>
                                        <option value="فندق">فندق</option>
                                        <option value="كافيه">كافيه</option>
                                        <option value="تجاري">تجاري</option>
                                        <option value="مصنع">مصنع</option>
                                        <option value="معرض">معرض</option>
                                        <option value="مطعم">مطعم</option>
                                        <option value="مستودع">مستودع</option>
                                        <option value="مدرسة">مدرسة</option>
                                        <option value="حضانة أطفال">حضانة أطفال</option>
                                    </optgroup>
                                    <optgroup label="طبي">
                                        <option value="طبي">طبي</option>
                                        <option value="عيادة">عيادة</option>
                                        <option value="صيدلية">صيدلية</option>
                                        <option value="مستشفى">مستشفى</option>
                                        <option value="مركز طبي">مركز طبي</option>
                                        <option value="معمل طبي">معمل طبي</option>
                                        <option value="غرفة في عيادة">غرفة في عيادة</option>
                                    </optgroup>
                                    <optgroup label="أراضي">
                                        <option value="أرض">أرض</option>
                                        <option value="أرض إدارية">أرض إدارية</option>
                                        <option value="أرض تجارية">أرض تجارية</option>
                                        <option value="أرض زراعية">أرض زراعية</option>
                                        <option value="أرض صناعية">أرض صناعية</option>
                                        <option value="أرض مباني سكنية">أرض مباني سكنية</option>
                                    </optgroup>
                                    <optgroup label="أخرى">
                                        <option value="قبر">قبر</option>
                                        <option value="مدفنة">مدفنة</option>
                                        <option value="غرف مشاركة">غرف مشاركة</option>
                                        <option value="عقار آخر">عقار آخر</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">الميزانية:</label>
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle text-end text-muted w-100 bg-body border"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="fa-solid fa-money-bill-wave"></i>
                            <span>من، إلى</span>
                        </button>
                        <div class="dropdown-menu p-4 w-100">
                            <div class="row mb-2">
                                <label class="form-label fw-bold text-end mb-1">من:</label>
                                <input type="number" name="min_price" class="form-control" id="min_price" value=""
                                    onkeypress="return(event.charCode>=48 && event.charCode<=57)" placeholder="من"
                                    min="1" step="1">
                            </div>
                            <div class="row">
                                <label class="form-label fw-bold text-end mb-1">إلى:</label>
                                <input type="number" name="min_price" class="form-control" id="min_price" value=""
                                    onkeypress="return(event.charCode>=48 && event.charCode<=57)" placeholder="إلى"
                                    min="1" step="1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">المساحة:</label>
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle text-end text-muted w-100 bg-body border"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <img src="Images\svg\icon\area.svg" width="20px" alt="area">
                            <span>من، إلى</span>
                        </button>
                        <div class="dropdown-menu p-4 w-100">
                            <div class="row mb-2">
                                <label class="form-label fw-bold text-end mb-1">من:</label>
                                <input type="number" class="form-control" name="min_square" id="min_square" value=""
                                    onkeypress="return(event.charCode>=48 && event.charCode<=57)" placeholder="من"
                                    min="1" step="1">
                            </div>
                            <div class="row">
                                <label class="form-label fw-bold text-end mb-1">إلى:</label>
                                <input type="number" class="form-control" name="max_square" id="max_square" value=""
                                    onkeypress="return(event.charCode>=48 && event.charCode<=57)" placeholder="إلى"
                                    min="1" step="1">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col">
                    <label for="" class="form-label fw-bold">خيارات أخرى:</label>
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle text-end text-muted w-100 bg-body border"
                            data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="fa-solid fa-list-check"></i>
                            عدد الغرف، عدد الحمامات ...
                        </button>
                        <div class="dropdown-menu p-4 w-100">
                            <div class="row mb-3">
                                <label class="form-label fw-bold text-end mb-1">عدد الغرف:</label>
                                <select class="form-select" name="" id="">
                                    <option selected disabled value="">اختر العدد</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5+</option>
                                </select>
                            </div>
                            <div class="row mb-3">
                                <label class="form-label fw-bold text-end mb-1">عدد الحمامات:</label>
                                <select class="form-select" name="" id="">
                                    <option selected disabled value="">اختر العدد</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5+</option>
                                </select>
                            </div>
                            <div class="row">
                                <label class="form-label fw-bold text-end mb-1">الطابق:</label>
                                <select class="form-select" name="" id="">
                                    <option selected disabled value="">اختر؟</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5+</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" class="text-light btn bg-purple btn-purple">بحث</button>
                </div>
            </div>
        </form>
    </section>
    <!--section2-->
    <section class="container-fluid border bd-gray-100">
        <div class="row my-5" dir="rtl">
            <!--section2: -->
            <div class="col-xl-6 col-lg-5 col-md-12" id="cardswithMap">
                <div class="d-flex flex-row justify-content-between my-3">
                    <div>
                        <select class="form-select" name="per_page" id="per-page">
                            <option selected>عرض</option>
                            <option value="15">15</option>
                            <option value="30">30</option>
                            <option value="45">45</option>
                            <option value="75">75</option>
                            <option value="120">120</option>
                        </select>
                    </div>
                    <div>
                        <div class="d-flex">
                            <select class="form-select" name="sort_by" id="sort-by" title=" ">
                                <option selected>الترتيب حسب</option>
                                <option value="def">الافتراضي</option>
                                <option value="date_asc">الأقدم</option>
                                <option value="date_desc">الأحدث</option>
                                <option value="price_asc">السعر تصاعدياً</option>
                                <option value="price_desc">السعر تنازليا</option>
                            </select>
                            <button class="btn btn_map me-2 align-self-center border" id="btnMap"
                                onclick="myFunction()">
                                <i class="fas fa-map-marker-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!--section2: Cards-->
                <div style="overflow-y: scroll; overflow-x: hidden; height: 630px;">
                    <div class="row">
                        <img class="" src="Images\svg\illustrations\HouseSearching.svg" width="300px" height="450px">
                    </div>
                    <div class="row">
                        <img class="" src="Images/svg/illustrations/No-data-cuate.svg" width="300px" height="350px">
                        <p class="text-dark fs-5 text-center">
                            لا يوجد منشورات مطابقة لنتيجة البحث
                        </p>
                    </div>
                    <div class="row row-cols-1 row-cols-xm-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-1 row-cols-xl-2 g-4 mt-3"
                        dir="rtl" id="cards">
                        <div class="col pb-3">
                            <div class="card border card_shadow">
                                <div class="card-header d-flex justify-content-between rounded-0 border-0">
                                    <a class="text-decoration-none d-flex flex-row" href="">
                                        <img class="rounded-circle ms-2 placeholder"
                                            src="Images/svg/icon/circle-user_secondary.svg" width="50">
                                        <div class="d-flex flex-column justify-content-start placeholder">
                                            <span class="d-block text-dark">ريّان حوري</span>
                                            <span class="text-black-50">منذ ثلاث دقائق</span>
                                        </div>
                                    </a>
                                    <div class="dropdown">
                                        <span data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v mt-2 p-2 text-purple"
                                                style="cursor: pointer;"></i>
                                        </span>
                                        <ul class="dropdown-menu text-end">
                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="offcanvas"
                                                    data-bs-target="#comments" aria-controls="offcanvasResponsive">
                                                    <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <i class="fa-solid fa-table-list text-muted"></i>&nbsp;عرض
                                                    المنشور</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل
                                                    المنشور</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف
                                                    المنشور</a>
                                            </li>
                                            <li><a class="dropdown-item"><i class="far fa-save text-muted"></i>&nbsp;حفظ
                                                    المنشور</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="zoom overflow-hidden position-relative text-light"
                                    style="padding-top: 66.6667%;">
                                    <div class="position-absolute bottom-0 top-0 start-0 end-0">
                                        <div id="postCard1" class="carousel slide carousel-fade" data-bs-ride="false">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100 h-100" src="Images\properties\1-1.jpg"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 h-100" src="Images\properties\1-3.jpg"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 h-100" src="Images\properties\411.jpg"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#postCard1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#postCard1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="display-inline-block position-absolute"
                                            style="left: 10px; top: 10px; z-index: 9;">
                                            <div class="media-count overflow-hidden position-relative text-nowrap">
                                                <img src="Images\svg\icon\media-count.svg" alt="media" />
                                                <span
                                                    class="text-light position-absolute start-50 top-50 align-middle placeholder">5</span>
                                            </div>
                                        </div>
                                        <div class="position-absolute" style="right: 10px; top: 10px; z-index: 9;">
                                            <span class="bg-purple py-1 px-3 fs-5 placeholder">بيع</span>
                                        </div>
                                        <ul class="position-absolute item-type bottom-0 end-0 m-0 p-0 fs-6"
                                            style="background-color: #fa67d5ea; z-index: 9;">
                                            <li class="float-start px-2 placeholder">طابو أخضر</li>
                                            <li class="float-start px-2 placeholder"><span>شقة مفروشة</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="d-flex flex-column">
                                            <span class="mb-1">
                                                <img src="Images\svg\icon\area.svg" width="20" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" data-bs-title="المساحة" title="المساحة"
                                                    alt="icon" />
                                                <span class="placeholder">10000</span>مترمربع
                                            </span>
                                            <span class="mb-1">
                                                <i class="fa-solid fa-money-bill-wave text-muted fs-6" title="السعر"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    data-bs-title="السعر"></i>&nbsp;
                                                <span class="placeholder">100000000</span>ل.س
                                            </span>
                                            <span><i class="fas fa-map-marker-alt text-muted fs-5" title="الموقع"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    data-bs-title="الموقع"></i>&nbsp;&nbsp;
                                                <span class="placeholder">حلب</span>
                                            </span>
                                        </div>
                                        <div>
                                            <span href="#" title="أعجبني" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" data-bs-title="أعجبني">
                                                <i class="far fa-thumbs-up"></i>
                                            </span>&nbsp;&nbsp;
                                            <span href="#" title="لم يعجبني" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" data-bs-title="لم يعجبني">
                                                <i class="far fa-thumbs-down"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col pb-3">
                            <div class="card border card_shadow">
                                <div class="card-header d-flex justify-content-between rounded-0 border-0">
                                    <a class="text-decoration-none d-flex flex-row" href="">
                                        <img class="rounded-circle ms-2 placeholder"
                                            src="Images/svg/icon/circle-user_secondary.svg" width="50">
                                        <div class="d-flex flex-column justify-content-start placeholder">
                                            <span class="d-block text-dark">ريّان حوري</span>
                                            <span class="text-black-50">منذ ثلاث دقائق</span>
                                        </div>
                                    </a>
                                    <div class="dropdown">
                                        <span data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v mt-2 p-2 text-purple"
                                                style="cursor: pointer;"></i>
                                        </span>
                                        <ul class="dropdown-menu text-end">
                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="offcanvas"
                                                    data-bs-target="#comments" aria-controls="offcanvasResponsive">
                                                    <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <i class="fa-solid fa-table-list text-muted"></i>&nbsp;عرض
                                                    المنشور</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل
                                                    المنشور</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف
                                                    المنشور</a>
                                            </li>
                                            <li><a class="dropdown-item"><i class="far fa-save text-muted"></i>&nbsp;حفظ
                                                    المنشور</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="zoom overflow-hidden position-relative text-light"
                                    style="padding-top: 66.6667%;">
                                    <div class="position-absolute bottom-0 top-0 start-0 end-0">
                                        <div id="postCard1" class="carousel slide carousel-fade" data-bs-ride="false">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100 h-100" src="Images\properties\1-1.jpg"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 h-100" src="Images\properties\1-3.jpg"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 h-100" src="Images\properties\411.jpg"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#postCard1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#postCard1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="display-inline-block position-absolute"
                                            style="left: 10px; top: 10px; z-index: 9;">
                                            <div class="media-count overflow-hidden position-relative text-nowrap">
                                                <img src="Images\svg\icon\media-count.svg" alt="media" />
                                                <span
                                                    class="text-light position-absolute start-50 top-50 align-middle placeholder">5</span>
                                            </div>
                                        </div>
                                        <div class="position-absolute" style="right: 10px; top: 10px; z-index: 9;">
                                            <span class="bg-purple py-1 px-3 fs-5 placeholder">بيع</span>
                                        </div>
                                        <ul class="position-absolute item-type bottom-0 end-0 m-0 p-0 fs-6"
                                            style="background-color: #fa67d5ea; z-index: 9;">
                                            <li class="float-start px-2 placeholder">طابو أخضر</li>
                                            <li class="float-start px-2 placeholder"><span>شقة مفروشة</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="d-flex flex-column">
                                            <span class="mb-1">
                                                <img src="Images\svg\icon\area.svg" width="20" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" data-bs-title="المساحة" title="المساحة"
                                                    alt="icon" />
                                                <span class="placeholder">10000</span>مترمربع
                                            </span>
                                            <span class="mb-1">
                                                <i class="fa-solid fa-money-bill-wave text-muted fs-6" title="السعر"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    data-bs-title="السعر"></i>&nbsp;
                                                <span class="placeholder">100000000</span>ل.س
                                            </span>
                                            <span><i class="fas fa-map-marker-alt text-muted fs-5" title="الموقع"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    data-bs-title="الموقع"></i>&nbsp;&nbsp;
                                                <span class="placeholder">حلب</span>
                                            </span>
                                        </div>
                                        <div>
                                            <span href="#" title="أعجبني" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" data-bs-title="أعجبني">
                                                <i class="far fa-thumbs-up"></i>
                                            </span>&nbsp;&nbsp;
                                            <span href="#" title="لم يعجبني" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" data-bs-title="لم يعجبني">
                                                <i class="far fa-thumbs-down"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col pb-3">
                            <div class="card border card_shadow">
                                <div class="card-header d-flex justify-content-between rounded-0 border-0">
                                    <a class="text-decoration-none d-flex flex-row" href="">
                                        <img class="rounded-circle ms-2 placeholder"
                                            src="Images/svg/icon/circle-user_secondary.svg" width="50">
                                        <div class="d-flex flex-column justify-content-start placeholder">
                                            <span class="d-block text-dark">ريّان حوري</span>
                                            <span class="text-black-50">منذ ثلاث دقائق</span>
                                        </div>
                                    </a>
                                    <div class="dropdown">
                                        <span data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v mt-2 p-2 text-purple"
                                                style="cursor: pointer;"></i>
                                        </span>
                                        <ul class="dropdown-menu text-end">
                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="offcanvas"
                                                    data-bs-target="#comments" aria-controls="offcanvasResponsive">
                                                    <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <i class="fa-solid fa-table-list text-muted"></i>&nbsp;عرض
                                                    المنشور</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل
                                                    المنشور</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item">
                                                    <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف
                                                    المنشور</a>
                                            </li>
                                            <li><a class="dropdown-item"><i class="far fa-save text-muted"></i>&nbsp;حفظ
                                                    المنشور</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="zoom overflow-hidden position-relative text-light"
                                    style="padding-top: 66.6667%;">
                                    <div class="position-absolute bottom-0 top-0 start-0 end-0">
                                        <div id="postCard1" class="carousel slide carousel-fade" data-bs-ride="false">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100 h-100" src="Images\properties\1-1.jpg"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 h-100" src="Images\properties\1-3.jpg"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 h-100" src="Images\properties\411.jpg"
                                                        alt="...">
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#postCard1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#postCard1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="display-inline-block position-absolute"
                                            style="left: 10px; top: 10px; z-index: 9;">
                                            <div class="media-count overflow-hidden position-relative text-nowrap">
                                                <img src="Images\svg\icon\media-count.svg" alt="media" />
                                                <span
                                                    class="text-light position-absolute start-50 top-50 align-middle placeholder">5</span>
                                            </div>
                                        </div>
                                        <div class="position-absolute" style="right: 10px; top: 10px; z-index: 9;">
                                            <span class="bg-purple py-1 px-3 fs-5 placeholder">بيع</span>
                                        </div>
                                        <ul class="position-absolute item-type bottom-0 end-0 m-0 p-0 fs-6"
                                            style="background-color: #fa67d5ea; z-index: 9;">
                                            <li class="float-start px-2 placeholder">طابو أخضر</li>
                                            <li class="float-start px-2 placeholder"><span>شقة مفروشة</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="d-flex flex-column">
                                            <span class="mb-1">
                                                <img src="Images\svg\icon\area.svg" width="20" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" data-bs-title="المساحة" title="المساحة"
                                                    alt="icon" />
                                                <span class="placeholder">10000</span>مترمربع
                                            </span>
                                            <span class="mb-1">
                                                <i class="fa-solid fa-money-bill-wave text-muted fs-6" title="السعر"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    data-bs-title="السعر"></i>&nbsp;
                                                <span class="placeholder">100000000</span>ل.س
                                            </span>
                                            <span><i class="fas fa-map-marker-alt text-muted fs-5" title="الموقع"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    data-bs-title="الموقع"></i>&nbsp;&nbsp;
                                                <span class="placeholder">حلب</span>
                                            </span>
                                        </div>
                                        <div>
                                            <span href="#" title="أعجبني" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" data-bs-title="أعجبني">
                                                <i class="far fa-thumbs-up"></i>
                                            </span>&nbsp;&nbsp;
                                            <span href="#" title="لم يعجبني" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" data-bs-title="لم يعجبني">
                                                <i class="far fa-thumbs-down"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--section2: Pagination-->
                <nav class="d-flex justify-content-center pt-3 my-3" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                            <span class="page-link rounded-0 border-0" aria-hidden="true">&lsaquo;</span>
                        </li>
                        <li class="page-item active" aria-current="page">
                            <span class="page-link rounded-0 border-0">1</span>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 border-0" href="properties4658.html?page=2">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 border-0" href="properties4658.html?page=2" rel="next"
                                aria-label="Next &raquo;">&rsaquo;</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 mt-5" id="MyMap">
                <div id="map" class="border shadow"></div>
            </div>
        </div>
    </section>
    <script>
    // ----------hide and display map-----------------
    function myFunction() {
        var markericon = document.getElementById("btnMap");
        if (document.getElementById("MyMap").style.display === "none") {
            document.getElementById("MyMap").style.display = "block";
            document.getElementById("cardswithMap").classList.remove("col-12");
            document.getElementById("cardswithMap").classList.add("col-xl-6", "col-lg-5", "col-md-12");
            document.getElementById("cards").classList.remove("row-cols-lg-3", "row-cols-xl-4");
            document.getElementById("cards").classList.add("row-cols-lg-1", "row-cols-xl-2");
            document.getElementById("btnMap").classList.remove("active");
        } else {
            document.getElementById("MyMap").style.display = "none";
            document.getElementById("cardswithMap").classList.remove("col-xl-6", "col-lg-5", "col-md-12");
            document.getElementById("cardswithMap").classList.add("col-12");
            document.getElementById("cards").classList.remove("row-cols-lg-1", "row-cols-xl-2");
            document.getElementById("cards").classList.add("row-cols-lg-3", "row-cols-xl-4");
            document.getElementById("btnMap").classList.add("active");
        }
    }
    const dropdownElementList = document.querySelectorAll('.dropdown-toggle');
    const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl));
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    let map;

    function initModal() {
        map = new google.maps.Map(document.getElementById("map"), {
            scaleControl: true,
            zoom: 12,
            center: {
                lat: 36.18470978127759,
                lng: 37.121107464539456
            },
            zoomControl: true,
            mapTypeControl: false,
            scaleControl: true,
            streetViewControl: false,
            rotateControl: true,
            fullscreenControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        const tourStops = [
            [{
                    lat: 36.18470978127759,
                    lng: 37.121107464539456
                }, "صلاح الدين",
                '<div class="text-end" dir="rtl"><img class="shadow-sm rounded-3 mb-2" src="Images/properties/b4-1-410x270.jpg" width="200" alt=""><br><div class="d-flex flex-column fs-6"><div class="fs-6"><i class="fa-solid fa-money-bill-wave text-muted"></i>&nbsp;<span>100000000</span>ل.س</div><a class="text-decoration-none link-dark" href=""><i class="fa-solid fa-eye text-muted"></i>&nbsp;عرض المنشور</a></div></div>'
            ],
            [{
                    lat: 36.19212675941669,
                    lng: 37.12758779790006
                }, "سيف الدولة",
                '<div class="text-end" dir="rtl"><img class="shadow-sm rounded-3 mb-2" src="Images/properties/b4-1-410x270.jpg" width="200" alt=""><br><div class="d-flex flex-column fs-6"><div class="fs-6"><i class="fa-solid fa-money-bill-wave text-muted"></i>&nbsp;<span>100000000</span>ل.س</div><a class="text-decoration-none link-dark" href=""><i class="fa-solid fa-eye text-muted"></i>&nbsp;عرض المنشور</a></div></div>'
            ],
            [{
                    lat: 36.17734151203305,
                    lng: 37.09904117617582
                }, "الحمدانية",
                '<div class="text-end" dir="rtl"><img class="shadow-sm rounded-3 mb-2" src="Images/properties/b4-1-410x270.jpg" width="200" alt=""><br><div class="d-flex flex-column fs-6"><div class="fs-6"><i class="fa-solid fa-money-bill-wave text-muted"></i>&nbsp;<span>100000000</span>ل.س</div><a class="text-decoration-none link-dark" href=""><i class="fa-solid fa-eye text-muted"></i>&nbsp;عرض المنشور</a></div></div>'
            ],
            [{
                    lat: 36.20312046100798,
                    lng: 37.11540800173195
                }, "الفرقان",
                '<div class="text-end" dir="rtl"><img class="shadow-sm rounded-3 mb-2" src="Images/properties/1-410x270.jpg" width="200" alt=""><br><div class="d-flex flex-column fs-6"><div class="fs-6"><i class="fa-solid fa-money-bill-wave text-muted"></i>&nbsp;<span>100000000</span>ل.س</div><a class="text-decoration-none link-dark" href=""><i class="fa-solid fa-eye text-muted"></i>&nbsp;عرض المنشور</a></div></div>'
            ],
            [{
                    lat: 36.19935190634902,
                    lng: 37.096878518176545
                }, "حلب الجديدة",
                '<div class="text-end" dir="rtl"><img class="shadow-sm rounded-3 mb-2" src="Images/properties/b4-1-410x270.jpg" width="200" alt=""><br><div class="d-flex flex-column fs-6"><div class="fs-6"><i class="fa-solid fa-money-bill-wave text-muted"></i>&nbsp;<span>100000000</span>ل.س</div><a class="text-decoration-none link-dark" href=""><i class="fa-solid fa-eye text-muted"></i>&nbsp;عرض المنشور</a></div></div>'
            ],
        ];
        tourStops.forEach(([position, title, content], i) => {
            const marker = new google.maps.Marker({
                icon: {
                    path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
                    strokeColor: "#FFF",
                    fillColor: "#a501a5",
                    fillOpacity: 0.9,
                    strokeWeight: 0,
                    rotation: 0,
                    scale: 2,
                    // anchor: new google.maps.Point(15, 30),
                    label: {
                        text: 'Label text',
                        fontFamily: "system-ui,-apple-system"
                    },
                    zIndex: 30,
                },
                position,
                map,
                label: {
                    fontFamily: "system-ui,-apple-system"
                },
                title: `${i + 1}. ${title}`,
                label: `${i + 1}`,
                optimized: false,
            });
            const infoWindow = new google.maps.InfoWindow();

            // Add a click listener for each marker, and set up the info window.
            marker.addListener("click", () => {
                if (infoWindow) {
                    infoWindow.close();
                }
                infoWindow.setContent(content);
                infoWindow.open(marker.getMap(), marker);
            });
        });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxRuFn9Ny7G-z-EmWCKnXCHK7uyfVvvT0&callback=initModal"
        async defer></script>
    <script>
    var List1 = document.getElementById("validationCustom01"); //for city
    var List2 = document.getElementById("validationCustom02"); //for town
    var List3 = document.getElementById("validationCustom03"); //for region
    var List4 = document.getElementById("validationCustom04"); //for side
    let RElocation = "";
    document.getElementById("validationCustom01").onchange = function() {
        document.getElementById("validationCustom01").classList.remove("alert-danger");
        document.getElementById("validationCustom03").classList.add("d-none");
        document.getElementById("validationCustom04").classList.add("d-none");
        while (List2.options.length) {
            List2.remove(0);
        }
        if (List1.options[List1.selectedIndex].value != "") {
            document.getElementById("validationCustom02").classList.remove("d-none");
        }
        var sel1 = List1.options[List1.selectedIndex].value;
        console.log(sel1);
        var towns = arr2[sel1];
        if (towns) {
            var i;
            for (i = 0; i < towns.length; i++) {
                var town;
                if (i == 0) {
                    town = new Option(towns[i], "");
                    town.disabled = true;
                    town.selected = true;
                } else {
                    town = new Option(towns[i], towns[i]);
                }
                List2.options.add(town);
            }
        }
    }
    document.getElementById("validationCustom02").onchange = function() {
        document.getElementById("validationCustom02").classList.remove("alert-danger");
        document.getElementById("validationCustom04").classList.add("d-none");
        while (List3.options.length) {
            List3.remove(0);
        }
        if (List1.options[List1.selectedIndex].value == "دمشق") {
            RElocation = document.getElementById("validationCustom02").value;
            document.getElementById("validationCustom03").classList.add("d-none");
            document.getElementById("validationCustom03").options.add(new Option(" ", " "));
            while (List4.options.length) {
                List4.remove(0);
            }
            document.getElementById("validationCustom04").options.add(new Option(" ", " "));
        } else if (List2.options[List2.selectedIndex].value != "") {
            document.getElementById("validationCustom03").classList.remove("d-none");
        }
        var sel2 = List2.options[List2.selectedIndex].value;
        var regions = arr3[sel2];
        if (regions) {
            var i;
            for (i = 0; i < regions.length; i++) {
                var region;
                if (i == 0) {
                    region = new Option(regions[i], "");
                    region.disabled = true;
                    region.selected = true;
                } else {
                    region = new Option(regions[i], regions[i]);
                }
                List3.options.add(region);
            }
        }
    }
    document.getElementById("validationCustom03").onchange = function() {
        document.getElementById("validationCustom03").classList.remove("alert-danger");
        while (List4.options.length) {
            List4.remove(0);
        }
        if (List1.options[List1.selectedIndex].value == "القنيطرة" ||
            List1.options[List1.selectedIndex].value == "طرطوس" ||
            List1.options[List1.selectedIndex].value == "إدلب" ||
            List2.options[List2.selectedIndex].value == "مصياف" ||
            List2.options[List2.selectedIndex].value == "السلمية" ||
            List2.options[List2.selectedIndex].value == "مدينة حلب") {
            RElocation = document.getElementById("validationCustom03").value;
            document.getElementById("validationCustom04").classList.add("d-none");
            document.getElementById("validationCustom04").options.add(new Option(" ", " "));
            //console.log("HI");
        } else if (List3.options[List3.selectedIndex].value != "") {
            document.getElementById("validationCustom04").classList.remove("d-none");
        }
        var sel3 = List3.options[List3.selectedIndex].value;
        var sides = arr4[sel3];
        if (sides) {
            var i;
            for (i = 0; i < sides.length; i++) {
                var side;
                if (i == 0) {
                    side = new Option(sides[i], "");
                    side.disabled = true;
                    side.selected = true;
                } else {
                    side = new Option(sides[i], sides[i]);
                }
                List4.options.add(side);
            }
        }
    }
    document.getElementById("validationCustom04").oninput = function() {
        RElocation = document.getElementById("validationCustom04").value;
        document.getElementById("validationCustom04").classList.remove("alert-danger");
    }
    </script>
</body>

</html>


@endsection