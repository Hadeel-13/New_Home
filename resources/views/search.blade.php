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

        /***************** section3: pagination ****************/
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
    <section class="">
        <div class="section1 w-100 position-relative">
            <div class="topsearch start-0 end-0 m-auto position-absolute top-50">
                <h1 class="text-center text-white mb-4">ابحث عن عقارك المفضل في موقعنا</h1>
                <form action="/open_search " method="get" id="frmhomesearch">
                    @csrf
                    <div class="row bg-secondary bg-opacity-50 justify-content-center p-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="">
                                <a href="" class="link-secondary"><button type="submit" class="btn"><i class="fas fa-search fs-5"></i></button></a>
                            </span>
                            <input type="text" class="form-control text-end" dir="rtl" placeholder="أدخل كلمة مفتاحية" name="keyword">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--section2: search-box-->
    <section class="search-box container-fluid px-5 py-3">
        <form method="post" action="/search_post" id="form_search">
            @csrf
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 g-4 mb-3" dir="rtl">
                <div class="col">
                    <label for="" class="form-label fw-bold">الموقع:</label>
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle text-end text-muted w-100 bg-body border" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"> <i class="fas fa-location"></i>
                            المحافظة، المدينة...
                        </button>
                        <div class="dropdown-menu w-100 p-4">
                            <div class="mb-3">
                                <select class="form-select" id="validationCustom01" name="location1">
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
                                <select class="form-select mb-4 d-none" id="validationCustom02" name="location2" aria-label="Default select example"></select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select mb-4 d-none" id="validationCustom03" name="location3" aria-label="Default select example"></select>
                            </div>
                            <div class="mb-3">
                                <select class="form-select mb-4 d-none" id="validationCustom04" name="location4" aria-label="Default select example"></select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label for="" class="form-label fw-bold">الخيارات:</label>
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle text-end text-muted w-100 bg-body border" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="fa-solid fa-list-check"></i>
                            القسم، النوع ...
                        </button>
                        <!-- <div class="dropdown-menu p-4"> -->
                        <div class="dropdown-menu p-4 w-100">
                            <div class="row  mb-2">
                                <label class="form-label fw-bold text-end mb-1">القسم:</label>
                                <select class="form-select" name="realestate_department">
                                    <option selected value="">اختر القسم؟</option>
                                    <option value="1">بيع</option>
                                    <option value="2">آجار</option>
                                    <option value="4">رهن</option>
                                </select>
                            </div>
                            <div class="row">
                                <label class="form-label fw-bold text-end mb-1">النوع:</label>
                                <select class="form-select" name="realestate_type">
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
                        <button type="button" class="btn dropdown-toggle text-end text-muted w-100 bg-body border" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="fa-solid fa-money-bill-wave"></i>
                            <span>من، إلى</span>
                        </button>
                        <div class="dropdown-menu p-4 w-100">
                            <div class="row mb-2">
                                <label class="form-label fw-bold text-end mb-1">من:</label>
                                <input type="number" name="min_price" class="form-control" id="min_price" value="" onkeypress="return(event.charCode>=48 && event.charCode<=57)" placeholder="من" min="1" step="1">
                            </div>
                            <div class="row">
                                <label class="form-label fw-bold text-end mb-1">إلى:</label>
                                <input type="number" name="max_price" class="form-control" id="max_price" value="" onkeypress="return(event.charCode>=48 && event.charCode<=57)" placeholder="إلى" min="1" step="1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">المساحة:</label>
                    <div class="dropdown">
                        <button type="button" class="btn dropdown-toggle text-end text-muted w-100 bg-body border" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <img src="Images\svg\icon\area.svg" width="20px" alt="area">
                            <span>من، إلى</span>
                        </button>
                        <div class="dropdown-menu p-4 w-100">
                            <div class="row mb-2">
                                <label class="form-label fw-bold text-end mb-1">من:</label>
                                <input type="number" class="form-control" name="min_square" id="min_square" value="" onkeypress="return(event.charCode>=48 && event.charCode<=57)" placeholder="من" min="1" step="1">
                            </div>
                            <div class="row">
                                <label class="form-label fw-bold text-end mb-1">إلى:</label>
                                <input type="number" class="form-control" name="max_square" id="max_square" value="" onkeypress="return(event.charCode>=48 && event.charCode<=57)" placeholder="إلى" min="1" step="1">
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
                    <!-- <div>
                        <select class="form-select" name="per_page" id="per-page">
                            <option selected>عرض</option>
                            <option value="15">15</option>
                            <option value="30">30</option>
                            <option value="45">45</option>
                            <option value="75">75</option>
                            <option value="120">120</option>
                        </select>
                    </div> -->
                    <div>
                        <!-- <div class="d-flex">
                            <select class="form-select" name="sort_by" id="sort-by" title=" ">
                                <option selected>الترتيب حسب</option>
                                <option value="def">الافتراضي</option>
                                <option value="date_asc">الأقدم</option>
                                <option value="date_desc">الأحدث</option>
                                <option value="price_asc">السعر تصاعدياً</option>
                                <option value="price_desc">السعر تنازليا</option>
                            </select>
                            <button class="btn btn_map me-2 align-self-center border" id="btnMap" onclick="myFunction()">
                                <i class="fas fa-map-marker-alt"></i>
                            </button>
                        </div> -->
                    </div>
                </div>
                <!--section2: Cards-->
                <div style="overflow-y: scroll; overflow-x: hidden; height: 630px;">
                    <!-- <div class="row">
                        <img class="" src="Images\svg\illustrations\HouseSearching.svg" width="300px" height="450px">
                    </div> -->
                    <div class="row row-cols-1 row-cols-xm-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-1 row-cols-xl-2 g-4 mt-3" dir="rtl" id="cards">
                        @forelse($posts as $post)
                        @foreach($post->comments as $comment)
                        <!-- Modal edit comment-->
                        <div class="modal fade editModal" id="editcomment-{{$comment->id}}" aria-hidden="true" aria-labelledby="editcomment" tabindex="-1" dir="rtl">
                            <div class="modal-dialog modal-md modal-fullscreen-lg-down modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold fs-4" id="exampleModalLabel">تعديل</h5>
                                        <div>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <form action="" method="Post" id="frmhomesearch">
                                        <div class="modal-body">
                                            <div class="text-decoration-none d-flex flex-row my-4">
                                                <textarea class="form-control " id="text_comment{{$comment->id}}" rows="4">{{$comment->comment}}</textarea>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="modal-footer">
                                        <button type="button" class="btn bg-purple text-light editComment" data-bs-dismiss="modal" value="{{$comment->id}}">تحديث</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- كود لحساب عدد الاعجابات -->
                        <?php $like_count = 0;
                        $dislike_count = 0;
                        $like_color = 'text-dark';
                        $dislike_color = 'text-dark';
                        ?>
                        @foreach($post->likes as $like)
                        <?php
                        if ($like->like == 1)
                            $like_count++;
                        if ($like->like == 0) {
                            $dislike_count++;
                        }
                        if (Illuminate\Support\Facades\Auth::check()) {
                            if ($like->like == 1 && $like->user_id == Illuminate\Support\Facades\Auth::user()->id) {
                                $like_color = "text-purple";
                            }
                            if ($like->like == 0 && $like->user_id == Illuminate\Support\Facades\Auth::user()->id) {
                                $dislike_color = "text-purple";
                            }
                        }
                        ?>
                        @endforeach
                        <!-- Modal disLike/Like -->
                        <div class="modal fade" id="dis_like-{{$post->id}}" aria-hidden="true" aria-labelledby="dis_like" tabindex="-1" dir="rtl">
                            <div class="modal-dialog modal-md modal-fullscreen-md-down modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title fw-bold fs-4" id="exampleModalLabel">الأشخاص الذين تفاعلوا</h5>
                                        <div>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            @if($post->likes_count->count() != 0)
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane-{{$post->id}}" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><i class="far fa-thumbs-up text-purple fs-4"></i>&nbsp;<span>{{$like_count}}</span>
                                                </button>
                                            </li>
                                            @endif
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane-{{$post->id}}" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><i class="far fa-thumbs-down text-danger fs-4"></i>&nbsp;<span>{{$dislike_count}}</span>
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content w-50" id="myTabContent">
                                            <!-- Like -->
                                            <div class="tab-pane fade show active" id="home-tab-pane-{{$post->id}}" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                @foreach($post->likes as $like)
                                                @if($like->like == 1)
                                                <a href="" class="d-flex flex-row text-decoration-none mt-3">
                                                    @if($like->user->image_url != null)
                                                    <img class="rounded-circle align-self-start ms-1" src="../Images/user/{{$like->user->image_url }}" width="60">
                                                    @else
                                                    <img class="rounded-circle align-self-start ms-1" src="../Images/svg/icon/circle-user_secondary.svg" width="60">
                                                    @endif
                                                    <span class="d-block align-self-center fs-6 text-dark">
                                                        {{ $like->user->name}}
                                                    </span>
                                                </a>
                                                @endif
                                                @endforeach
                                            </div>
                                            <!-- disLike -->
                                            @foreach($post->likes as $dislike)
                                            @if($post->dislikes_count->count() == 0)
                                            @elseif($dislike->like == 0)
                                            <div class="tab-pane fade" id="profile-tab-pane-{{$post->id}}" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                                <a href="" class="d-flex flex-row text-decoration-none mt-3">
                                                    <img class="rounded-circle align-self-start ms-1" src="../Images/svg/icon/circle-user_secondary.svg" width="60">
                                                    <span class="d-block align-self-center fs-6 text-dark">
                                                        {{ $like->user->name}}
                                                    </span>
                                                </a>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="modal-footer"></div>
                                </div>
                            </div>
                        </div>
                        <!-- offcanvas comments-->
                        <div class="offcanvas offcanvas-end w-100 m-0" tabindex="-1" id="comments-{{$post->id}}" aria-labelledby="offcanvasResponsiveLabel" dir="rtl">
                            <div class="offcanvas-header shadow-sm d-flex justify-content-between">
                                <div class="fs-5" data-bs-toggle="modal" data-bs-target="#dis_like-{{$post->id}}" role="button">
                                    <i class="far fa-thumbs-up text-purple"></i>&nbsp;<div class="vr"></div>
                                    <i class="far fa-thumbs-down text-danger"></i>&nbsp;<span>{{$post->likes->count()}}</span>&nbsp;&nbsp;
                                    <i class="fas fa-angle-left text-muted fs-4"></i>
                                </div>
                                <div><button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                                </div>
                            </div>
                            <div class="offcanvas-body" id="offcanvas-body-{{$post->id}}">
                                <div class="offcanvas-title fw-bold fs-3 text-center" id="offcanvasResponsiveLabel">التعليقات</div>
                                @forelse($post->comments as $comment)
                                <!-- one comment -->
                                <div class="text-decoration-none d-flex flex-row my-4 " id="comment_{{$comment->id}}" href="">
                                    <a href="">
                                        @if($comment->user->image_url != null)
                                        <img class="rounded-circle align-self-start ms-1" src="Images/user/{{$comment->user->image_url}}" width="60"></a>
                                    @else
                                    <img class="rounded-circle align-self-start ms-1" src="Images/svg/icon/circle-user_secondary.svg" width="60"></a>
                                    @endif</a>
                                    <div class="d-flex flex-column justify-content-start bd-gray-100 rounded-3 px-3 py-2 w-100">
                                        <div class="d-flex flex-row justify-content-between">
                                            <div class="d-flex flex-column justify-content-start">
                                                <span class="d-block text-dark fs-6 fw-bold">{{$comment->user->name}}</span>
                                                <span class="text-black-50 pb-1">{{$comment->created_at->diffForHumans()}}</span>
                                            </div>
                                            @if(Auth::check() && Auth::id() == $comment->user_id)
                                            <div class="dropdown">
                                                <span data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                                                </span>
                                                <ul class="dropdown-menu text-end">
                                                    <!-- <li>
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editcomment" role="button">
                                                    <i class="far fa-edit text-muted"></i>&nbsp;تعديل
                                                </a>
                                            </li> -->
                                                    <li><button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#editcomment-{{$comment->id}}" role="button" value="{{$comment->id}}"><i class="far fa-edit text-muted"></i>&nbsp;تعديل</button>
                                                    </li>
                                                    <!-- <li><a class="dropdown-item deleteComment" type="button" value="{{$comment->id}}"><i class="far fa-trash-alt text-muted" ></i>&nbsp;حذف</a> -->
                                                    <li><button class="dropdown-item  deleteComment" type="button" value="{{$comment->id}}"><i class="far fa-trash-alt text-muted"></i>&nbsp;حذف</button>
                                                    </li>
                                                </ul>
                                            </div>
                                            @endif
                                        </div>
                                        <span class="text-muted " id="comment{{$comment->id}}">{{$comment->comment}}</span>
                                    </div>
                                </div>
                                @empty
                                <!-- no comments -->
                                <div class="d-flex flex-column align-items-center" id="image-comment-{{$post->id}}">
                                    <img src="Images/svg/illustrations/No-data-cuate.svg" width="450px" height="350px">
                                    <p class="d-block text-dark fs-5 placeholder">لا يوجد تعليقات</p>
                                </div>
                                @endforelse
                            </div>
                            <form id="MessageForm" name="MessageForm" novalidate="">
                                <div class="modal-footer d-block shadow p-1">
                                    <div class="d-flex justify-content-start">
                                        <textarea @guest onclick="preventFunction()" @endguest class="form-control" id="text_addComment-{{$post->id}}" name="comment" rows="3" placeholder="اكتب تعليقاً"></textarea>
                                        <button class="text-secondary align-self-start border-0" style="background-color: transparent;" id="addComment" type="button" value="{{$post->id}}">
                                            <img src="Images/svg/icon/send.svg" alt="send" width="35px" style="transform: scaleX(-1);">
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- card -->
                        <div class="col" id="delete-{{$post->id}}">
                            <div class="card border card_shadow">
                                <div class="card-header d-flex justify-content-between rounded-0 border-0">
                                    <a class="text-decoration-none d-flex flex-row">
                                        @if($post->user->image_url != null)
                                        <img class="rounded-circle ms-2 placeholder" src="../Images/user/{{$post->user->image_url}}" width="50">
                                        @else
                                        <img class="rounded-circle ms-2 placeholder" src="../Images/svg/icon/circle-user_secondary.svg" width="50">
                                        @endif
                                        <div class="d-flex flex-column justify-content-start placeholder">
                                            <span class="d-block text-dark">{{$post->user->name}}</span>
                                            <span class="text-black-50">{{$post->created_at->diffForHumans()}}</span>
                                        </div>
                                    </a>
                                    <div class="dropdown">
                                        <span data-bs-toggle="dropdown">
                                            <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                                        </span>
                                        <ul class="dropdown-menu text-end">
                                            <li>
                                                <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#comments-{{$post->id}}" aria-controls="offcanvasResponsive">
                                                    <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="show_post/{{$post->id}}">
                                                    <i class="fa-solid fa-eye text-muted"></i>&nbsp;عرض المنشور</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            @if(Auth::check() && Auth::id() == $post->user_id)
                                            <li>
                                                <a class="dropdown-item" href="/post_update/{{$post->id}}">
                                                    <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل المنشور</a>
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="dropdown-item" id="delete_post" value="{{$post->id}}"> <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف المنشور</button>
                                            </li>
                                            @endif
                                            @guest
                                            @endguest
                                            @auth
                                            @if($post->user_id != Auth::user()->id)
                                            @if(auth()->user()->isSaved($post->id))
                                            <li><button type="button" class="dropdown-item" id="removeSavedPost" value="{{$post->id}}"><i class="far fa-save text-muted"></i>&nbsp;إزالة الحفظ </button>
                                            </li>
                                            @else
                                            <li><button type="button" class="dropdown-item" id="addSavedPost" value="{{$post->id}}"><i class="far fa-save text-muted"></i>&nbsp; حفظ </button>
                                            </li>
                                            @endif
                                            @endif
                                            @endauth
                                        </ul>
                                    </div>
                                </div>
                                <div class="zoom overflow-hidden position-relative text-light" style="padding-top: 66.6667%;">
                                    <div class="position-absolute bottom-0 top-0 start-0 end-0">
                                        <div id="postCard-{{$loop->index}}" class="carousel slide carousel-fade" data-bs-ride="false">
                                            <div class="carousel-inner">
                                                <?php $active_image_url = App\Models\Image::where('post_id', '=', $post->id)->first(); ?>
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100 h-100" src="..\Images\properties\{{$active_image_url->image_url}}" alt="...">
                                                </div>
                                                @foreach($post->Image as $image)
                                                <div class="carousel-item">
                                                    <img class="d-block w-100 h-100" src="..\Images\properties\{{$image->image_url}}" alt="...">
                                                </div>
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#postCard-{{$loop->index}}" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#postCard-{{$loop->index}}" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <!-- <img class="w-100 h-100" src="..\Images\properties\1-3.jpg" alt="..." /> -->
                                        <!-- <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a> -->
                                        <div class="display-inline-block position-absolute" style="left: 10px; top: 10px; z-index: 9;">
                                            <div class="media-count overflow-hidden position-relative text-nowrap">
                                                <img src="..\Images\svg\icon\media-count.svg" alt="media" />
                                                <span class="text-light position-absolute start-50 top-50 align-middle placeholder">{{$post->Image->count()}}</span>
                                            </div>
                                        </div>
                                        <div class="position-absolute" style="right: 10px; top: 10px; z-index: 9;">
                                            <span class="bg-purple py-1 px-3 fs-5 placeholder">
                                                @switch($post->realestate_department)
                                                @case('1')<td>بيع</td>@break
                                                @case('3')<td>بيع أو آجار</td>@break
                                                @case('5')<td>بيع أو رهن</td>@break
                                                @case('7')<td>بيع أو رهن أو آجار </td>@break
                                                @case('2')<td>آجار</td>@break
                                                @case('6')<td>آجار أو رهن</td>@break
                                                @case('4')<td>رهن</td>@break
                                                @case('5')<td>بيع أو رهن</td>@break
                                                @endswitch
                                            </span>
                                        </div>
                                        <ul class="position-absolute item-type bottom-0 end-0 m-0 p-0 fs-6" style="background-color: #fa67d5ea; z-index: 9;">
                                            <li class="float-start px-2 placeholder">{{$post->contract_type}} </li>
                                            <li class="float-start px-2 placeholder"><span>{{$post->realestate_type }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex flex-column">
                                        <span class="mb-1 align-self-end">
                                            <span href="#" title="أعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="أعجبني">
                                                <button type="button" class=" like p-0 bd-gray-100 border-0 {{ $like_color }}" data-like="{{$like_color}}" data-post_id="{{$post->id}}_l" @guest onclick="preventFunction(this)" @endguest><i class="far fa-thumbs-up"></i>&nbsp;<span class="like_count">{{$like_count}}</span></button>
                                            </span>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span href="#" title="لم يعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="لم يعجبني">
                                                <button class=" p-0 border-0 bd-gray-100 dislike {{ $dislike_color}}" data-like="{{$like_color}}" data-post_id="{{$post->id}}_d" @guest onclick="preventFunction(this)" @endguest><i class="far fa-thumbs-down" onclick="myFunction1(this)"></i>&nbsp;<span class="dislike_count">{{$dislike_count}}</span></button>
                                            </span>
                                            <!-- <button type="button" class="btn like {{ $like_color }}" data-like="{{$like_color}}" data-post_id="{{$post->id}}_l">like<i class="far fa-thumbs-up"></i><span class="like_count">{{$like_count}}</span></button>
                                        <button class="btn icon-link col  mt-2 dislike {{ $dislike_color}}" data-like="{{$like_color}}" data-post_id="{{$post->id}}_d"> dislike<i class="far fa-thumbs-down" onclick="myFunction1(this)"></i><span class="dislike_count">{{$dislike_count}}</span></button> -->
                                        </span>
                                        <span class="mb-1">
                                            <img src="..\Images\svg\icon\area.svg" width="20" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="المساحة" title="المساحة" alt="icon" />
                                            <span class="placeholder">{{$post->space}}</span>مترمربع
                                        </span>
                                        @if($post->realestate_department == 1)
                                        <span class="mb-1">
                                            <i class="fa-solid fa-money-bill-wave text-muted fs-6" title="السعر" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="السعر"></i>&nbsp;
                                            <span class="placeholder">{{$post->sale_price}} ل.س </span>
                                        </span>
                                        @elseif($post->realestate_department == 2 )
                                        <span class="mb-1">
                                            <i class="fa-solid fa-money-bill-wave text-muted fs-6" title="السعر" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="السعر"></i>&nbsp;
                                            <span class="placeholder"> {{$post->rent_price}} ل.س</span>
                                        </span>
                                        @elseif($post->realestate_department == 4)
                                        <span class="mb-1">
                                            <i class="fa-solid fa-money-bill-wave text-muted fs-6" title="السعر" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="السعر"></i>&nbsp;
                                            <span class="placeholder"> {{$post->mort_price}} ل.س</span>
                                        </span>
                                        @else
                                        @endif
                                        <span><i class="fas fa-map-marker-alt text-muted fs-5" title="الموقع" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="الموقع"></i>&nbsp;&nbsp;
                                            <span class="placeholder">{{$post->city}}</span>
                                        </span>
                                    </div>

                                    <hr />
                                    <p class="zoom d-flex justify-content-evenly">
                                        @if($post->rooms_num!=null)
                                        <span>
                                            <img src="../Images\svg\icon\bed.svg" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="عدد الغرف" title="عدد الغرف" alt="icon" />
                                            <span class="placeholder">{{$post->rooms_num}}</span>
                                        </span>
                                        @endif
                                        @if($post->bathrooms_num!=null)
                                        <span>
                                            <img src="../Images\svg\icon\bath.svg" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="عدد الحمامات" title="عدد الحمامات" alt="icon" />
                                            <span class="placeholder">{{$post->bathrooms_num}}</span>
                                        </span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        @empty
                        <!-- no post -->
                        <div class="d-flex flex-column align-items-center">
                            <img src="Images/svg/illustrations/No-data-cuate.svg" width="450px" height="350px">
                            <p class="d-block text-dark fs-5 placeholder">لا يوجد نتائج مطابقة</p>
                        </div>
                        @endforelse
                    </div>
                </div>
                <!--section2: Pagination-->
                <nav class="d-flex justify-content-center pt-3 my-3" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item " aria-disabled="true" aria-label="&laquo; Previous">
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
        let placeholders = document.querySelectorAll(".placeholder");
        window.onload = function() {
            for (placeholder of placeholders) {
                // console.log("placeholder");
                placeholder.classList.remove("placeholder");
                placeholder.classList.remove("disabled");
            }

        };
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
                zoom: 7,
                center: {
                    lat: 35.019563971329376,
                    lng: 38.63134906929138
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
                <?php foreach ($posts as $post) : ?>[{
                            lat: <?php echo $post->lat; ?>,
                            lng: <?php echo $post->lng; ?>
                        }, "<?php echo $post->city; ?> <?php echo $post->town; ?>  <?php echo $post->region; ?>",
                        '<div class="text-end" dir="rtl"><img class="shadow-sm rounded-3 mb-2" src="Images/properties/<?php echo $post->Image[0]->image_url; ?>" width="200" alt=""><br><div class="d-flex flex-column fs-6"><div class="fs-6"><i class="fas fa-map-marker-alt text-muted"></i>&nbsp;<span><?php echo $post->city; ?></span></div><a class="text-decoration-none link-dark" href="/show_post/<?php echo $post->id; ?>"><i class="fa-solid fa-eye text-muted"></i>&nbsp;عرض المنشور</a></div></div>'
                    ],
                <?php endforeach; ?>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxRuFn9Ny7G-z-EmWCKnXCHK7uyfVvvT0&callback=initModal" async defer></script>
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
        $(".like").on('click', function() {
            var like_s = $(this).attr('data-like');
            var post_id = $(this).attr('data-post_id');
            post_id = post_id.slice(0, -2);

            $.ajax({
                type: 'post',
                url: "{{route('like.save')}}",
                data: {
                    like_s: like_s,
                    post_id: post_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    // alert(data.is_like);
                    // alert(post_id);
                    if (data.is_like == 1) {
                        $('*[data-post_id="' + post_id + '_l"]').removeClass('text-dark').addClass('text-purple');
                        $('*[data-post_id="' + post_id + '_d"]').removeClass('text-purple').addClass('text-dark');
                        var cu_like = $('*[data-post_id="' + post_id + '_l"]').find('.like_count').text();
                        var new_like = parseInt(cu_like) + 1;
                        var cu_like = $('*[data-post_id="' + post_id + '_l"]').find('.like_count').text(new_like);
                        if (data.change_like == 1) {
                            var cu_dislike = $('*[data-post_id="' + post_id + '_d"]').find('.dislike_count').text();
                            var new_dislike = parseInt(cu_dislike) - 1;
                            $('*[data-post_id="' + post_id + '_d"]').find('.dislike_count').text(new_dislike);


                        }

                    }
                    if (data.is_like == 0) {
                        $('*[data-post_id="' + post_id + '_l"]').removeClass('text-purple').addClass('text-dark');
                        var cu_like = $('*[data-post_id="' + post_id + '_l"]').find('.like_count').text();
                        var new_like = parseInt(cu_like) - 1;
                        var cu_like = $('*[data-post_id="' + post_id + '_l"]').find('.like_count').text(new_like);
                    }
                }
            })
        });
        // كود الخاص بال  dislike
        $(".dislike").on('click', function() {
            var like_s = $(this).attr('data-like');
            var post_id = $(this).attr('data-post_id');
            post_id = post_id.slice(0, -2);

            $.ajax({
                type: 'post',
                url: "{{route('dislike.save')}}",
                data: {
                    like_s: like_s,
                    post_id: post_id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(data) {
                    //  alert(data.change_dislike);
                    if (data.is_dislike == 1) {
                        $('*[data-post_id="' + post_id + '_d"]').removeClass('text-dark').addClass('text-purple');
                        $('*[data-post_id="' + post_id + '_l"]').removeClass('text-purple').addClass('text-dark');
                        var cu_dislike = $('*[data-post_id="' + post_id + '_d"]').find('.dislike_count').text();
                        var new_dislike = parseInt(cu_dislike) + 1;
                        $('*[data-post_id="' + post_id + '_d"]').find('.dislike_count').text(new_dislike);
                        if (data.change_dislike == 1) {
                            var cu_like = $('*[data-post_id="' + post_id + '_l"]').find('.like_count').text();
                            var new_like = parseInt(cu_like) - 1;
                            $('*[data-post_id="' + post_id + '_l"]').find('.like_count').text(new_like);
                        }
                    }
                    if (data.is_dislike == 0) {
                        $('*[data-post_id="' + post_id + '_d"]').removeClass('text-purple').addClass('text-dark');
                        var cu_dislike = $('*[data-post_id="' + post_id + '_d"]').find('.dislike_count').text();
                        var new_dislike = parseInt(cu_dislike) - 1;
                        $('*[data-post_id="' + post_id + '_d"]').find('.dislike_count').text(new_dislike);
                    }
                }
            })
        });

        function preventFunction(x) {
            alert("عليك تسجيل الدخول أولا");
        }

        function myFunction1(y) {
            y.classList.toggle("fa-heart");
        }
        // كود لحذف المنشور
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '#delete_post', function() {
                if (confirm('هل أنت متأكد من حذف هذا المنشور')) {
                    var thisClicked = $(this);
                    var post_id = thisClicked.val();
                    $.ajax({
                        type: "post",
                        url: "/delete-post",
                        data: {
                            'post_id': post_id
                        },
                        success: function(res) {
                            if (res.status == 200) {
                                $('#delete-' + post_id).remove();
                                alert(res.message);
                            } else {
                                alert(res.message);
                            }
                        }
                    });
                }
            });
        });
        // كود لحذف التعليق
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '.deleteComment', function() {
                if (confirm('هل أنت متأكد من حذف هذا التعليق')) {
                    var thisClicked = $(this);
                    var comment_id = thisClicked.val();
                    $.ajax({
                        type: "post",
                        url: "/delete-comment",
                        data: {
                            'comment_id': comment_id
                        },
                        success: function(res) {
                            if (res.status == 200) {
                                // thisClicked.closest('.comment-container').remove();
                                alert(res.message);
                                $('#comment_' + comment_id).remove();
                            } else {
                                alert(res.message);
                            }
                        }
                    });
                }
            });
        });
        // كود تعديل التعليق
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '.editComment', function() {
                var thisClicked = $(this);
                var comment_id = thisClicked.val();
                var comment = $('#text_comment' + comment_id).val();
                $.ajax({
                    type: "post",
                    url: "/edit-comment",
                    data: {
                        'comment_id': comment_id,
                        'comment': comment
                    },
                    success: function(res) {
                        if (res.status == 200) {
                            $('#comment' + res.comment.id).text(res.comment.comment);
                            $('.editModal').hide();
                        } else {
                            alert(res.message);
                        }
                    }
                });
            });
        });
        // كود إضافة تعليق
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '#addComment', function() {
                var thisClicked = $(this);
                var post_id = thisClicked.val();
                var comment = $('#text_addComment-' + post_id).val();
                $.ajax({
                    type: "post",
                    url: "/save-comment",
                    data: {
                        'post_id': post_id,
                        'comment': comment,
                    },
                    success: function(res) {
                        if (res.status == 200) {
                            var model = ' <div class="modal fade editModal" id="editcomment-' + res.comment.id + '" aria-hidden="true" aria-labelledby="editcomment" tabindex="-1" dir="rtl"><div class="modal-dialog modal-md modal-fullscreen-lg-down modal-dialog-centered modal-dialog-scrollable"><div class="modal-content"><div class="modal-header"><h5 class="modal-title fw-bold fs-4" id="exampleModalLabel">تعديل</h5><div><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div></div><form action="" method="Post" id="frmhomesearch"><div class="modal-body"><div class="text-decoration-none d-flex flex-row my-4"><textarea class="form-control " id="text_comment' + res.comment.id + '" rows="4">' + res.comment.comment + '</textarea></div></div></form><div class="modal-footer"><button type="button" class="btn bg-purple text-light editComment" data-bs-dismiss="modal" value="' + res.comment.id + '">تحديث</button></div></div></div></div>';
                            $('#cards').append(model);
                            var newComment = '<div class="text-decoration-none d-flex flex-row my-4 " id="comment_' + res.comment.id + '" href=""><a href=""><img class="rounded-circle align-self-start ms-1" src="../../Images/user/' + res.user.image_url + '" width="60"></a><div class="d-flex flex-column justify-content-start bd-gray-100 rounded-3 px-3 py-2 w-100"><div class="d-flex flex-row justify-content-between"><div class="d-flex flex-column justify-content-start"><span class="d-block text-dark fs-6 fw-bold">' + res.user.name + '</span><span class="text-black-50 pb-1"><?php echo now()->diffForHumans(); ?></span></div><div class="dropdown"><span data-bs-toggle="dropdown"><i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i></span><ul class="dropdown-menu text-end"><li><button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#editcomment-' + res.comment.id + '"role="button" value="' + res.comment.id + '"><i class="far fa-edit text-muted"></i>&nbsp;تعديل</button></li> <li><button class="dropdown-item  deleteComment" type="button" value="' + res.comment.id + '"><i class="far fa-trash-alt text-muted"></i>&nbsp;حذف</button></li></ul></div></div><span class="text-muted " id="comment' + res.comment.id + '">' + res.comment.comment + '</span></div></div>';
                            $("#offcanvas-body-" + res.comment.post_id).append(newComment);
                            // $('#text_addComment').reset();
                            document.getElementById('text_addComment-' + res.comment.post_id).value = "";
                            document.getElementById("image-comment-" + post_id).classList.add("d-none");
                        } else {
                            alert(res.status);
                        }
                    }
                });
                setTimeout(function() {
                    document.getElementById("offcanvas-body-" + post_id).scrollTo(0, document.getElementById("offcanvas-body-" + post_id).scrollHeight)
                }, 500);
            });
        });
        // كود إضافة بوست للمحفوظات
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '#addSavedPost', function() {
                var thisClicked = $(this);
                var post_id = thisClicked.val();
                $.ajax({
                    type: "post",
                    url: "/add_saved_post",
                    data: {
                        'post_id': post_id,
                    },
                    success: function(res) {
                        if (res.status == 200) {
                            document.getElementById('addSavedPost').textContent = 'إلغاء الحفظ';
                            document.getElementById("addSavedPost").setAttribute("id", "removeSavedPost");
                            alert(res.message);
                        } else {
                            alert(res.status);
                        }
                    }
                });
            });
        });
        // كود إزالة بوست للمحفوظات
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '#removeSavedPost', function() {
                if (confirm('هل أنت متأكد من إزالة المنشور من محفوظاتك')) {
                    var thisClicked = $(this);
                    var post_id = thisClicked.val();
                    $.ajax({
                        type: "post",
                        url: "/remove_saved_post",
                        data: {
                            post_id: post_id
                        },
                        success: function(res) {
                            if (res.status == 200) {
                                document.getElementById('removeSavedPost').textContent = 'حفظ';
                                document.getElementById("removeSavedPost").setAttribute("id", "addSavedPost");
                                alert(res.message);
                            } else {
                                alert(res.status);
                            }
                        }
                    });
                }
            });
        });
    </script>
    <script src="\libraries\JS\post_activity.js"></script>
</body>

</html>
@endsection
