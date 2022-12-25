@extends('header&&footer')
@section('content')
<!DOCTYPE html>
<html lang="ar">

<head>
    <link rel="stylesheet" href="libraries/swiper/swiper-bundle.min.css">
    <style>
    /**************** section1 ****************/
    .section1 {
        background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url("Images/properties/home-banner.jpg");
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        height: 80vh;
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

    /**************** section2: Cards ****************/

    .card_shadow {
        margin: 0 0.5em;
        box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
        /* border: none; */
        /* border-radius: 0; */
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

    /**************** section3: Employees ****************/
    .overlay::before,
    .overlay::after {
        content: '';
        position: absolute;
        right: 0;
        bottom: -40px;
        height: 40px;
        width: 40px;
        background-color: var(--Second-color);
    }

    .overlay::after {
        border-radius: 0 25px 0 0;
        background-color: #FFF;
    }

    .swiper-pagination-bullet-active {
        background: var(--Second-color);
    }

    .card-img {
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid var(--Second-color);
    }

    @media screen and (max-width: 768px) {
        .slide-content {
            margin: 0 10px;
        }

        .swiper-navBtn {
            display: none;
        }
    }

    @media screen and (max-width: 768px) {
        .slide-content {
            margin: 0 !important;
        }
    }

    /**************** section4: Cities ****************/
    .carousel-control-prev,
    .carousel-control-next {
        background-color: var(--color-light);
        width: 5vh;
        height: 5vh;
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
    }

    @media screen and (max-width: 576px) {
        .mycard:not(:first-child) {
            display: none;
        }
    }
    </style>
</head>

<body>
    <!--section1: -->
    <section class="">
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
    <!-- offcanvas comments-->
    <div class="offcanvas offcanvas-end w-100" tabindex="-1" id="comments" aria-labelledby="offcanvasResponsiveLabel"
        dir="rtl">
        <div class="offcanvas-header shadow-sm d-flex justify-content-between">
            <div class="fs-5" data-bs-toggle="modal" data-bs-target="#dis_like" role="button">
                <i class="far fa-thumbs-up text-purple"></i>&nbsp;<div class="vr"></div>
                <i class="far fa-thumbs-down text-danger"></i>&nbsp;<span>55</span>&nbsp;&nbsp;
                <i class="fas fa-angle-left text-muted fs-4"></i>
            </div>
            <div><button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                    data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="offcanvas-title fw-bold fs-3 text-center" id="offcanvasResponsiveLabel">التعليقات</div>
            <!-- one comment -->
            <div class="text-decoration-none d-flex flex-row my-4" href="">
                <a href=""><img class="rounded-circle align-self-start ms-1"
                        src="Images/svg/icon/circle-user_secondary.svg" width="60"></a>
                <div class="d-flex flex-column justify-content-start bd-gray-100 rounded-3 px-3 py-2 w-100">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="d-flex flex-column justify-content-start">
                            <span class="d-block text-dark fs-6 fw-bold">ريّان حوري</span>
                            <span class="text-black-50 pb-1">منذ ثلاث دقائق</span>
                        </div>
                        <div class="dropdown">
                            <span data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                            </span>
                            <ul class="dropdown-menu text-end">
                                <li>
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editcomment"
                                        role="button">
                                        <i class="far fa-edit text-muted"></i>&nbsp;تعديل
                                    </a>
                                </li>
                                <li><a class="dropdown-item"><i class="far fa-trash-alt text-muted"></i>&nbsp;حذف</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="text-muted">السعر؟؟؟؟</span>
                </div>
            </div>
            <div class="text-decoration-none d-flex flex-row my-4" href="">
                <a href=""><img class="rounded-circle align-self-start ms-1"
                        src="Images/svg/icon/circle-user_secondary.svg" width="60"></a>
                <div class="d-flex flex-column justify-content-start bd-gray-100 rounded-3 px-3 py-2 w-100">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="d-flex flex-column justify-content-start">
                            <span class="d-block text-dark fs-6 fw-bold">ريّان حوري</span>
                            <span class="text-black-50 pb-1">منذ ثلاث دقائق</span>
                        </div>
                        <div class="dropdown">
                            <span data-bs-toggle="dropdown">
                                <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                            </span>
                            <ul class="dropdown-menu text-end">
                                <li>
                                    <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editcomment"
                                        role="button">
                                        <i class="far fa-edit text-muted"></i>&nbsp;تعديل
                                    </a>
                                </li>
                                <li><a class="dropdown-item"><i class="far fa-trash-alt text-muted"></i>&nbsp;حذف</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <span class="text-muted">السعر؟؟؟؟</span>
                </div>
            </div>
        </div>
        <div class="modal-footer d-block shadow p-1">
            <div class="d-flex justify-content-start">
                <img class="rounded-circle align-self-start ms-1" src="Images/svg/icon/circle-user_secondary.svg"
                    width="60">
                <textarea class="form-control" rows="3" placeholder="اكتب تعليقاً"></textarea>
                <button type="button" class="text-secondary align-self-start border-0"
                    style="background-color: transparent;">
                    <img src="Images/svg/icon/send.svg" alt="send" width="35px" style="transform: scaleX(-1);">
                </button>
            </div>
        </div>
    </div>
    <!-- Modal disLike/Like -->
    <div class="modal fade" id="dis_like" aria-hidden="true" aria-labelledby="dis_like" tabindex="-1" dir="rtl">
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
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true"><i
                                    class="far fa-thumbs-up text-purple fs-4"></i>&nbsp;<span>55</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false"><i
                                    class="far fa-thumbs-down text-danger fs-4"></i>&nbsp;<span>55</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content w-50" id="myTabContent">
                        <!-- Like -->
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <a href="" class="d-flex flex-row text-decoration-none mt-3">
                                <img class="rounded-circle align-self-start ms-1"
                                    src="Images/svg/icon/circle-user_secondary.svg" width="60">
                                <span class="d-block align-self-center fs-6 text-dark">
                                    ريّان حوري
                                </span>
                            </a>
                            <a href="" class="d-flex flex-row text-decoration-none mt-3">
                                <img class="rounded-circle align-self-start ms-1"
                                    src="Images/svg/icon/circle-user_secondary.svg" width="60">
                                <span class="d-block align-self-center fs-6 text-dark">
                                    ريّان حوري
                                </span>
                            </a>
                        </div>
                        <!-- disLike -->
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <a href="" class="d-flex flex-row text-decoration-none mt-3">
                                <img class="rounded-circle align-self-start ms-1"
                                    src="Images/svg/icon/circle-user_secondary.svg" width="60">
                                <span class="d-block align-self-center fs-6 text-dark">
                                    هديل الابراهيم
                                </span>
                            </a>
                            <a href="" class="d-flex flex-row text-decoration-none mt-3">
                                <img class="rounded-circle align-self-start ms-1"
                                    src="Images/svg/icon/circle-user_secondary.svg" width="60">
                                <span class="d-block align-self-center fs-6 text-dark">
                                    ياسين إلياس
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- Modal edit comment-->
    <div class="modal fade" id="editcomment" aria-hidden="true" aria-labelledby="editcomment" tabindex="-1" dir="rtl">
        <div class="modal-dialog modal-md modal-fullscreen-lg-down modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold fs-4" id="exampleModalLabel">تعديل</h5>
                    <div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="text-decoration-none d-flex flex-row my-4">
                        <img class="rounded-circle align-self-start ms-1"
                            src="Images/svg/icon/circle-user_secondary.svg" width="60">
                        <textarea class="form-control" rows="4">من يجعل الشمس</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-purple text-light" data-bs-dismiss="modal">تحديث</button>
                </div>
            </div>
        </div>
    </div>
    <!--section2: Cards-->
    <section class="bd-gray-100 py-5">
        <div class="container">
            <h2 class="row text-center pb-3"><strong class="position-relative px-2">المنشورات المميزة</strong>
            </h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 mt-3" dir="rtl">
                <div class="col">
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
                                    <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                                </span>
                                <ul class="dropdown-menu text-end">
                                    <li>
                                        <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#comments"
                                            aria-controls="offcanvasResponsive">
                                            <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="">
                                            <i class="fa-solid fa-eye text-muted"></i>&nbsp;عرض المنشور</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="UpdateRE">
                                            <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل المنشور</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف المنشور</a>
                                    </li>
                                    <li><a class="dropdown-item"><i class="far fa-save text-muted"></i>&nbsp;حفظ
                                            المنشور</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="zoom overflow-hidden position-relative text-light" style="padding-top: 66.6667%;">
                            <div class="position-absolute bottom-0 top-0 start-0 end-0">
                                <div id="postCard1" class="carousel slide carousel-fade" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-1.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-3.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\411.jpg" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <!-- <img class="w-100 h-100" src="Images\properties\1-3.jpg" alt="..." /> -->
                                <!-- <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a> -->
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
                                        <span class="placeholder">100000</span>مترمربع
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
                                    <span href="#" title="أعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="أعجبني">
                                        <i class="far fa-thumbs-up"></i>
                                    </span>&nbsp;&nbsp;
                                    <span href="#" title="لم يعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="لم يعجبني">
                                        <i class="far fa-thumbs-down"></i>
                                    </span>
                                </div>
                            </div>
                            <hr />
                            <p class="zoom d-flex justify-content-evenly">
                                <span>
                                    <img src="Images\svg\icon\bed.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الغرف" title="عدد الغرف"
                                        alt="icon" />
                                    <span class="placeholder">12</span>
                                </span>
                                <span>
                                    <img src="Images\svg\icon\bath.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الحمامات" title="عدد الحمامات"
                                        alt="icon" />
                                    <span class="placeholder">2</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
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
                                    <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                                </span>
                                <ul class="dropdown-menu text-end">
                                    <li>
                                        <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#comments"
                                            aria-controls="offcanvasResponsive">
                                            <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-table-list text-muted"></i>&nbsp;عرض المنشور</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل المنشور</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف المنشور</a>
                                    </li>
                                    <li><a class="dropdown-item"><i class="far fa-save text-muted"></i>&nbsp;حفظ
                                            المنشور</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="zoom overflow-hidden position-relative text-light" style="padding-top: 66.6667%;">
                            <div class="position-absolute bottom-0 top-0 start-0 end-0">
                                <div id="postCard1" class="carousel slide carousel-fade" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-1.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-3.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\411.jpg" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <!-- <img class="w-100 h-100" src="Images\properties\1-3.jpg" alt="..." /> -->
                                <!-- <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a> -->
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
                                        <span class="placeholder">100000</span>مترمربع
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
                                    <span href="#" title="أعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="أعجبني">
                                        <i class="far fa-thumbs-up"></i>
                                    </span>&nbsp;&nbsp;
                                    <span href="#" title="لم يعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="لم يعجبني">
                                        <i class="far fa-thumbs-down"></i>
                                    </span>
                                </div>
                            </div>
                            <hr />
                            <p class="zoom d-flex justify-content-evenly">
                                <span>
                                    <img src="Images\svg\icon\bed.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الغرف" title="عدد الغرف"
                                        alt="icon" />
                                    <span class="placeholder">12</span>
                                </span>
                                <span>
                                    <img src="Images\svg\icon\bath.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الحمامات" title="عدد الحمامات"
                                        alt="icon" />
                                    <span class="placeholder">2</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
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
                                    <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                                </span>
                                <ul class="dropdown-menu text-end">
                                    <li>
                                        <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#comments"
                                            aria-controls="offcanvasResponsive">
                                            <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-table-list text-muted"></i>&nbsp;عرض المنشور</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل المنشور</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف المنشور</a>
                                    </li>
                                    <li><a class="dropdown-item"><i class="far fa-save text-muted"></i>&nbsp;حفظ
                                            المنشور</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="zoom overflow-hidden position-relative text-light" style="padding-top: 66.6667%;">
                            <div class="position-absolute bottom-0 top-0 start-0 end-0">
                                <div id="postCard1" class="carousel slide carousel-fade" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-1.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-3.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\411.jpg" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <!-- <img class="w-100 h-100" src="Images\properties\1-3.jpg" alt="..." /> -->
                                <!-- <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a> -->
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
                                        <span class="placeholder">100000</span>مترمربع
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
                                    <span href="#" title="أعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="أعجبني">
                                        <i class="far fa-thumbs-up"></i>
                                    </span>&nbsp;&nbsp;
                                    <span href="#" title="لم يعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="لم يعجبني">
                                        <i class="far fa-thumbs-down"></i>
                                    </span>
                                </div>
                            </div>
                            <hr />
                            <p class="zoom d-flex justify-content-evenly">
                                <span>
                                    <img src="Images\svg\icon\bed.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الغرف" title="عدد الغرف"
                                        alt="icon" />
                                    <span class="placeholder">12</span>
                                </span>
                                <span>
                                    <img src="Images\svg\icon\bath.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الحمامات" title="عدد الحمامات"
                                        alt="icon" />
                                    <span class="placeholder">2</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
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
                                    <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                                </span>
                                <ul class="dropdown-menu text-end">
                                    <li>
                                        <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#comments"
                                            aria-controls="offcanvasResponsive">
                                            <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-table-list text-muted"></i>&nbsp;عرض المنشور</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل المنشور</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف المنشور</a>
                                    </li>
                                    <li><a class="dropdown-item"><i class="far fa-save text-muted"></i>&nbsp;حفظ
                                            المنشور</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="zoom overflow-hidden position-relative text-light" style="padding-top: 66.6667%;">
                            <div class="position-absolute bottom-0 top-0 start-0 end-0">
                                <div id="postCard1" class="carousel slide carousel-fade" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-1.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-3.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\411.jpg" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <!-- <img class="w-100 h-100" src="Images\properties\1-3.jpg" alt="..." /> -->
                                <!-- <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a> -->
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
                                        <span class="placeholder">100000</span>مترمربع
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
                                    <span href="#" title="أعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="أعجبني">
                                        <i class="far fa-thumbs-up"></i>
                                    </span>&nbsp;&nbsp;
                                    <span href="#" title="لم يعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="لم يعجبني">
                                        <i class="far fa-thumbs-down"></i>
                                    </span>
                                </div>
                            </div>
                            <hr />
                            <p class="zoom d-flex justify-content-evenly">
                                <span>
                                    <img src="Images\svg\icon\bed.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الغرف" title="عدد الغرف"
                                        alt="icon" />
                                    <span class="placeholder">12</span>
                                </span>
                                <span>
                                    <img src="Images\svg\icon\bath.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الحمامات" title="عدد الحمامات"
                                        alt="icon" />
                                    <span class="placeholder">2</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
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
                                    <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                                </span>
                                <ul class="dropdown-menu text-end">
                                    <li>
                                        <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#comments"
                                            aria-controls="offcanvasResponsive">
                                            <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-table-list text-muted"></i>&nbsp;عرض المنشور</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل المنشور</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف المنشور</a>
                                    </li>
                                    <li><a class="dropdown-item"><i class="far fa-save text-muted"></i>&nbsp;حفظ
                                            المنشور</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="zoom overflow-hidden position-relative text-light" style="padding-top: 66.6667%;">
                            <div class="position-absolute bottom-0 top-0 start-0 end-0">
                                <div id="postCard1" class="carousel slide carousel-fade" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-1.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-3.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\411.jpg" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <!-- <img class="w-100 h-100" src="Images\properties\1-3.jpg" alt="..." /> -->
                                <!-- <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a> -->
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
                                        <span class="placeholder">100000</span>مترمربع
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
                                    <span href="#" title="أعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="أعجبني">
                                        <i class="far fa-thumbs-up"></i>
                                    </span>&nbsp;&nbsp;
                                    <span href="#" title="لم يعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="لم يعجبني">
                                        <i class="far fa-thumbs-down"></i>
                                    </span>
                                </div>
                            </div>
                            <hr />
                            <p class="zoom d-flex justify-content-evenly">
                                <span>
                                    <img src="Images\svg\icon\bed.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الغرف" title="عدد الغرف"
                                        alt="icon" />
                                    <span class="placeholder">12</span>
                                </span>
                                <span>
                                    <img src="Images\svg\icon\bath.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الحمامات" title="عدد الحمامات"
                                        alt="icon" />
                                    <span class="placeholder">2</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
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
                                    <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                                </span>
                                <ul class="dropdown-menu text-end">
                                    <li>
                                        <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#comments"
                                            aria-controls="offcanvasResponsive">
                                            <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-table-list text-muted"></i>&nbsp;عرض المنشور</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل المنشور</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف المنشور</a>
                                    </li>
                                    <li><a class="dropdown-item"><i class="far fa-save text-muted"></i>&nbsp;حفظ
                                            المنشور</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="zoom overflow-hidden position-relative text-light" style="padding-top: 66.6667%;">
                            <div class="position-absolute bottom-0 top-0 start-0 end-0">
                                <div id="postCard1" class="carousel slide carousel-fade" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-1.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-3.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\411.jpg" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <!-- <img class="w-100 h-100" src="Images\properties\1-3.jpg" alt="..." /> -->
                                <!-- <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a> -->
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
                                        <span class="placeholder">100000</span>مترمربع
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
                                    <span href="#" title="أعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="أعجبني">
                                        <i class="far fa-thumbs-up"></i>
                                    </span>&nbsp;&nbsp;
                                    <span href="#" title="لم يعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="لم يعجبني">
                                        <i class="far fa-thumbs-down"></i>
                                    </span>
                                </div>
                            </div>
                            <hr />
                            <p class="zoom d-flex justify-content-evenly">
                                <span>
                                    <img src="Images\svg\icon\bed.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الغرف" title="عدد الغرف"
                                        alt="icon" />
                                    <span class="placeholder">12</span>
                                </span>
                                <span>
                                    <img src="Images\svg\icon\bath.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الحمامات" title="عدد الحمامات"
                                        alt="icon" />
                                    <span class="placeholder">2</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
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
                                    <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                                </span>
                                <ul class="dropdown-menu text-end">
                                    <li>
                                        <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#comments"
                                            aria-controls="offcanvasResponsive">
                                            <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-table-list text-muted"></i>&nbsp;عرض المنشور</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل المنشور</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف المنشور</a>
                                    </li>
                                    <li><a class="dropdown-item"><i class="far fa-save text-muted"></i>&nbsp;حفظ
                                            المنشور</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="zoom overflow-hidden position-relative text-light" style="padding-top: 66.6667%;">
                            <div class="position-absolute bottom-0 top-0 start-0 end-0">
                                <div id="postCard1" class="carousel slide carousel-fade" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-1.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-3.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\411.jpg" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <!-- <img class="w-100 h-100" src="Images\properties\1-3.jpg" alt="..." /> -->
                                <!-- <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a> -->
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
                                        <span class="placeholder">100000</span>مترمربع
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
                                    <span href="#" title="أعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="أعجبني">
                                        <i class="far fa-thumbs-up"></i>
                                    </span>&nbsp;&nbsp;
                                    <span href="#" title="لم يعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="لم يعجبني">
                                        <i class="far fa-thumbs-down"></i>
                                    </span>
                                </div>
                            </div>
                            <hr />
                            <p class="zoom d-flex justify-content-evenly">
                                <span>
                                    <img src="Images\svg\icon\bed.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الغرف" title="عدد الغرف"
                                        alt="icon" />
                                    <span class="placeholder">12</span>
                                </span>
                                <span>
                                    <img src="Images\svg\icon\bath.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الحمامات" title="عدد الحمامات"
                                        alt="icon" />
                                    <span class="placeholder">2</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
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
                                    <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                                </span>
                                <ul class="dropdown-menu text-end">
                                    <li>
                                        <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#comments"
                                            aria-controls="offcanvasResponsive">
                                            <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-table-list text-muted"></i>&nbsp;عرض المنشور</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل المنشور</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item">
                                            <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف المنشور</a>
                                    </li>
                                    <li><a class="dropdown-item"><i class="far fa-save text-muted"></i>&nbsp;حفظ
                                            المنشور</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="zoom overflow-hidden position-relative text-light" style="padding-top: 66.6667%;">
                            <div class="position-absolute bottom-0 top-0 start-0 end-0">
                                <div id="postCard1" class="carousel slide carousel-fade" data-bs-ride="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-1.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\1-3.jpg" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100 h-100" src="Images\properties\411.jpg" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#postCard1"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <!-- <img class="w-100 h-100" src="Images\properties\1-3.jpg" alt="..." /> -->
                                <!-- <a href="properties/nice-apartment-for-rent-in-berlin.html" class="linkdetail"></a> -->
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
                                        <span class="placeholder">100000</span>مترمربع
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
                                    <span href="#" title="أعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="أعجبني">
                                        <i class="far fa-thumbs-up"></i>
                                    </span>&nbsp;&nbsp;
                                    <span href="#" title="لم يعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        data-bs-title="لم يعجبني">
                                        <i class="far fa-thumbs-down"></i>
                                    </span>
                                </div>
                            </div>
                            <hr />
                            <p class="zoom d-flex justify-content-evenly">
                                <span>
                                    <img src="Images\svg\icon\bed.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الغرف" title="عدد الغرف"
                                        alt="icon" />
                                    <span class="placeholder">12</span>
                                </span>
                                <span>
                                    <img src="Images\svg\icon\bath.svg" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="عدد الحمامات" title="عدد الحمامات"
                                        alt="icon" />
                                    <span class="placeholder">2</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-cards btn-2 mt-5 rounded-3">عرض المزيد</button>
        </div>
    </section>
    <!--section3: Employees-->
    <section class="container my-3 py-5">
        <div class="container">
            <h2 class="title_section text-center pb-5"><strong class="position-relative px-3">الموظفين</strong></h2>
            <div class="w-100 pb-5 swiper" style="max-width: 1120px;">
                <div class="slide-content mx-5 overflow-hidden border-4">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="card e-card bg-body swiper-slide" style="border-radius: 25px;">
                            <div class="d-flex flex-column align-items-center position-relative py-4">
                                <span class="overlay position-absolute start-0 top-0 h-100 w-100 bg-purple"
                                    style="border-radius: 25px 25px 0 25px;"></span>
                                <div class="position-relative bg-body p-1"
                                    style="height: 150px; width: 150px; border-radius: 50%;">
                                    <img class="card-img h-100 w-100 placeholder" src="Images/user/user1.jpg" alt="img">
                                </div>
                            </div>
                            <div class="card-content d-flex flex-column p-3 text-start">
                                <h5 class="align-self-center fw-bold py-2 placeholder">ياسين إلياس</h5>
                                <p class="align-self-end">
                                    <span class="fs-6 placeholder">mohammad@email.com</span>
                                    <i class="far fa-envelope fs-5 text-muted placeholder" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="البريد الإلكتروني"
                                        title="البريد الإلكتروني"></i>
                                </p>
                                <p class="align-self-end">
                                    <span class="placeholder">+963 953 436 787</span>
                                    <i class="fas fa-phone fs-5 text-muted placeholder" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="رقم الجوال" title="رقم الجوال"></i>
                                </p>
                                <button tabindex="-1"
                                    class="btn bg-purple text-light align-self-center disabled placeholder"
                                    aria-hidden="true">عرض المزيد</button>
                            </div>
                        </div>
                        <div class="card e-card bg-body swiper-slide" style="border-radius: 25px;">
                            <div class="d-flex flex-column align-items-center position-relative py-4">
                                <span class="overlay position-absolute start-0 top-0 h-100 w-100 bg-purple"
                                    style="border-radius: 25px 25px 0 25px;"></span>
                                <div class="position-relative bg-body p-1"
                                    style="height: 150px; width: 150px; border-radius: 50%;">
                                    <img class="card-img h-100 w-100 placeholder" src="Images/user/user2.jpg" alt="img">
                                </div>
                            </div>
                            <div class="card-content d-flex flex-column p-3 text-start">
                                <h5 class="align-self-center fw-bold py-2 placeholder">ياسين إلياس</h5>
                                <p class="align-self-end">
                                    <span class="fs-6 placeholder">mohammad@email.com</span>
                                    <i class="far fa-envelope fs-5 text-muted placeholder" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="البريد الإلكتروني"
                                        title="البريد الإلكتروني"></i>
                                </p>
                                <p class="align-self-end">
                                    <span class="placeholder">+963 953 436 787</span>
                                    <i class="fas fa-phone fs-5 text-muted placeholder" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="رقم الجوال" title="رقم الجوال"></i>
                                </p>
                                <button tabindex="-1"
                                    class="btn bg-purple text-light align-self-center disabled placeholder"
                                    aria-hidden="true">عرض المزيد</button>
                            </div>
                        </div>
                        <div class="card e-card bg-body swiper-slide" style="border-radius: 25px;">
                            <div class="d-flex flex-column align-items-center position-relative py-4">
                                <span class="overlay position-absolute start-0 top-0 h-100 w-100 bg-purple"
                                    style="border-radius: 25px 25px 0 25px;"></span>
                                <div class="position-relative bg-body p-1"
                                    style="height: 150px; width: 150px; border-radius: 50%;">
                                    <img class="card-img h-100 w-100 placeholder" src="Images/user/user5.jpg" alt="img">
                                </div>
                            </div>
                            <div class="card-content d-flex flex-column p-3 text-start">
                                <h5 class="align-self-center fw-bold py-2 placeholder">ياسين إلياس</h5>
                                <p class="align-self-end">
                                    <span class="fs-6 placeholder">mohammad@email.com</span>
                                    <i class="far fa-envelope fs-5 text-muted placeholder" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="البريد الإلكتروني"
                                        title="البريد الإلكتروني"></i>
                                </p>
                                <p class="align-self-end">
                                    <span class="placeholder">+963 953 436 787</span>
                                    <i class="fas fa-phone fs-5 text-muted placeholder" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="رقم الجوال" title="رقم الجوال"></i>
                                </p>
                                <button tabindex="-1"
                                    class="btn bg-purple text-light align-self-center disabled placeholder"
                                    aria-hidden="true">عرض المزيد</button>
                            </div>
                        </div>
                        <div class="card e-card bg-body swiper-slide" style="border-radius: 25px;">
                            <div class="d-flex flex-column align-items-center position-relative py-4">
                                <span class="overlay position-absolute start-0 top-0 h-100 w-100 bg-purple"
                                    style="border-radius: 25px 25px 0 25px;"></span>
                                <div class="position-relative bg-body p-1"
                                    style="height: 150px; width: 150px; border-radius: 50%;">
                                    <img class="card-img h-100 w-100 placeholder" src="Images/user/user4.jpg" alt="img">
                                </div>
                            </div>
                            <div class="card-content d-flex flex-column p-3 text-start">
                                <h5 class="align-self-center fw-bold py-2 placeholder">ياسين إلياس</h5>
                                <p class="align-self-end">
                                    <span class="fs-6 placeholder">mohammad@email.com</span>
                                    <i class="far fa-envelope fs-5 text-muted placeholder" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="البريد الإلكتروني"
                                        title="البريد الإلكتروني"></i>
                                </p>
                                <p class="align-self-end">
                                    <span class="placeholder">+963 953 436 787</span>
                                    <i class="fas fa-phone fs-5 text-muted placeholder" data-bs-toggle="tooltip"
                                        data-bs-placement="bottom" data-bs-title="رقم الجوال" title="رقم الجوال"></i>
                                </p>
                                <button tabindex="-1"
                                    class="btn bg-purple text-light align-self-center disabled placeholder"
                                    aria-hidden="true">عرض المزيد</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn text-secondary end-0"></div>
                <div class="swiper-button-prev swiper-navBtn text-secondary start-0"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!--section4: Cities-->
    <section class="bd-gray-100 my-3 py-5">
        <div class="container">
            <h2 class="title_section text-center pb-3"><strong class="position-relative px-3">المحافظات</strong>
            </h2>
            <p class="text-muted text-center fs-5">استعراض العقارات التابعة لكل محافظة</p>
            <div id="carouselExampleDark" class="carousel carousel-dark slide d-none d-md-block"
                data-bs-ride="carousel">
                <div class="carousel-inner py-3">
                    <div class="carousel-item active">
                        <div class="cards-wrapper d-flex justify-content-center">
                            <a class="card card_shadow mx-3 text-decoration-none link-dark" href=""
                                style="width: 250px;">
                                <img src="Images\Cities\Aleppo_Citadel.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">حلب</h5>
                                </div>
                            </a>
                            <a class="card card_shadow mx-3 text-decoration-none link-dark d-none d-md-block" href=""
                                style="width: 250px;">
                                <img src="Images\Cities\Damascus_Citadel2.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">دمشق</h5>
                                </div>
                            </a>
                            <a class="card card_shadow mx-3 text-decoration-none link-dark d-none d-md-block" href=""
                                style="width: 250px;">
                                <img src="Images\Cities\Hama_Citadel.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">حماه</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper d-flex justify-content-center">
                            <a class="card card_shadow mx-3 text-decoration-none link-dark d-none d-md-block" href=""
                                style="width: 250px;">
                                <img src="Images\Cities\Palmyra _Citadel.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">حمص</h5>
                                </div>
                            </a>
                            <a class="card card_shadow mx-3 text-decoration-none link-dark d-none d-md-block" href=""
                                style="width: 250px;">
                                <img src="Images\Cities\Raqqa_Citadel.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">الرقة</h5>
                                </div>
                            </a>
                            <a class="card card_shadow mx-3 text-decoration-none link-dark d-none d-md-block" href=""
                                style="width: 250px;">
                                <img src="Images\Cities\ALhasakah.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">الحسكة</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper d-flex justify-content-center">
                            <a class="card card_shadow mx-3 text-decoration-none link-dark" style="width: 250px;"
                                href="">
                                <img src="Images\Cities\Latakia_Citadel.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">اللاذقية</h5>
                                </div>
                            </a>
                            <a class="card card_shadow mx-3 text-decoration-none link-dark d-none d-md-block"
                                style="width: 250px;" href="">
                                <img src="Images\Cities\Tartous_Citadel.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">طرطوس</h5>
                                </div>
                            </a>
                            <a class="card card_shadow mx-3 text-decoration-none link-dark d-none d-md-block"
                                style="width: 250px;" href="">
                                <img src="Images\Cities\As_Suwayda2.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">السويداء</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper d-flex justify-content-center">
                            <a class="card card_shadow mx-3 text-decoration-none link-dark" style="width: 250px;"
                                href="">
                                <img src="Images\Cities\Daraa.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">درعا</h5>
                                </div>
                            </a>
                            <a class="card card_shadow mx-3 text-decoration-none link-dark d-none d-md-block"
                                style="width: 250px;" href="">
                                <img src="Images\Cities\deirEzzor.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">دير الزور</h5>
                                </div>
                            </a>
                            <a class="card card_shadow mx-3 text-decoration-none link-dark d-none d-md-block"
                                style="width: 250px;" href="">
                                <img src="Images\Cities\Idlib2.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">إدلب</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper d-flex justify-content-center">
                            <a class="card card_shadow mx-3 text-decoration-none link-dark" style="width: 250px;"
                                href="">
                                <img src="Images\Cities\Quneitra.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">القنيطرة</h5>
                                </div>
                            </a>
                            <a class="card card_shadow mx-3 text-decoration-none link-dark d-none d-md-block"
                                style="width: 250px;" href="">
                                <img src="Images\Cities\DamascusSide_Citadel.jpg" class="w-100 placeholder"
                                    style="height: 11em; object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center placeholder">ريف دمشق</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <div class="carousel-indicators mt-3" style="position: inherit !important;">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                </div>
            </div>
            <div id="carouselExampleDarkSmallScreen" class="carousel slide d-md-none" data-bs-ride="carousel">
                <div class="carousel-inner p-2">
                    <div class="carousel-item active">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\Aleppo_Citadel.jpg" class="placeholder"
                                height="300px object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">حلب</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\Damascus_Citadel2.jpg" class="placeholder"
                                height="300px object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">دمشق</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\Hama_Citadel.jpg" class="placeholder"
                                height="300px object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">حماه</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\Palmyra _Citadel.jpg" class="placeholder"
                                height="300px object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">حمص</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\Raqqa_Citadel.jpg" class="placeholder"
                                height="300px object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">الرقة</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\ALhasakah.jpg" class="placeholder" height="300px object-fit: cover;"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">الحسكة</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\Latakia_Citadel.jpg" class="placeholder"
                                height="300px object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">اللاذقية</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\Tartous_Citadel.jpg" class="placeholder"
                                height="300px object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">طرطوس</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\As_Suwayda2.jpg" class="placeholder"
                                height="300px object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">السويداء</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\Daraa.jpg" class="placeholder" height="300px object-fit: cover;"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">درعا</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\deirEzzor.jpg" class="placeholder" height="300px object-fit: cover;"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">دير الزور</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\Idlib2.jpg" class="placeholder" height="300px object-fit: cover;"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">إدلب</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\Quneitra.jpg" class="placeholder" height="300px object-fit: cover;"
                                alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">القنيطرة</h5>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="card card_shadow mycard text-decoration-none link-dark" href="">
                            <img src="Images\Cities\DamascusSide_Citadel.jpg" class="placeholder"
                                height="300px object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center placeholder">ريف دمشق</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDarkSmallScreen"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDarkSmallScreen"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <script src="libraries/swiper/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 1,
        spaceBetween: 25,
        loop: false,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            800: {
                slidesPerView: 2,
            },
            1026: {
                slidesPerView: 3,
            },
        },
    });
    </script>
</body>

</html>



@endsection