@extends('header&&footer')
@section('content')
<!DOCTYPE html>
<html lang="ar">

<head>
    <title>New Home | show</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../libraries/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/colors.css" />
    <link rel="stylesheet" href="../libraries/fontawesome-free-6.1.1-web/css/all.min.css" />
    <style>
        :root {
            --first-color: #82498C;
            --Second-color: #9c27be;
            --Third-color: #070707;
            --fourth-color: #ff97bb;
            --Background-color: #5C3463;
            --text-color: #23004d;
            --color-light: #a49eac;
            --color-lighten: #f2f2f2;
            --line-border-fill: #9c27be;
            --line-border-empty: #bdbdbd;
        }

        /* *************** section1: GALLERY *************** */
        .gallery__card {
            width: 500px;
            height: 500px;
            border-radius: 3rem;
        }

        .gallery__card::after {
            position: absolute;
        }

        .gallery__img {
            /* min-width: 100%; */
            /* max-width: 100%; */
            inset: 0 0 0 0;
            transition: transform .3s;
        }

        .gallery__thumbnail {
            width: 65px;
            height: 65px;
            cursor: pointer;
            transition: transform .3s;
        }

        /* Swiper class */
        .gallery-cards,
        .gallery-thumbs {
            width: 500px;
        }

        .gallery-cards:hover .gallery__img {
            transform: scale(1.1);
        }

        .gallery .swiper-wrapper {
            padding: 2rem 0;
        }

        /* Active thumbnail */
        .swiper-slide-active .gallery__thumbnail {
            transform: translateY(-1.5rem) scale(1.2);
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

        /* Arrow buttons */

        .swiper-button-next::after,
        .swiper-button-prev::after {
            content: '';
        }

        .swiper-button-next {
            top: 5.5rem;
            right: -1.5rem;
            transform: rotate(15deg);
        }

        .swiper-button-prev {
            top: 5.5rem;
            left: -1.5rem;
            transform: rotate(-15deg);
        }

        /*=============== BREAKPOINTS ===============*/
        /* For small devices */

        @media screen and (max-width: 600px) {

            .swiper-button-next,
            .swiper-button-prev {
                display: none;
            }
        }

        /* For medium devices */

        @media screen and (min-width: 1024px) {
            .gallery__card {
                width: 700px;
                height: 550px;
            }

            .gallery__thumbnail {
                width: 65px;
                height: 65px;
            }

            .gallery-cards {
                width: 700px;
            }

            .gallery-thumbs {
                width: 700px;
            }
        }

        @media screen and (max-width: 550px) {
            .gallery__card {
                width: 300px;
                height: 300px;
            }

            .gallery__thumbnail {
                width: 40px;
                height: 40px;
            }

            .gallery-cards {
                width: 300px;
            }

            .gallery-thumbs {
                width: 300px;
            }
        }

        .agent-info1 .social {
            bottom: -100px;
            transition: all 0.5s ease 0s;
        }

        .agent-info1:hover .social {
            bottom: 0;
        }

        .agent-content {
            display: flex;
        }

        @media screen and (max-width: 500px) {
            .agent-content {
                display: block;
            }
        }

        @media screen and (max-width: 1186px) and (min-width:992px) {
            .agent-content {
                display: block;
            }
        }

        /* *************** section3: Details *************** */
        .table-striped>tbody>tr:nth-of-type(odd)>* {
            --bs-table-accent-bg: #e2d9f3;
        }

        .card:hover {
            top: -2px;
        }

        /**************** section5: Cards ****************/

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
    </style>
</head>

<body class="m-0 placeholder-glow" style="overflow-x: hidden;">
    <!-- section1: GALLERY CARDS -->
    <section class="bd-gray-100 gallery d-grid align-content-center justify-content-center">
        <!-- SWIPER GALLERY CARDS -->
        <div class="swiper gallery-cards ">
            <div class="swiper-wrapper">
                @foreach($post->Image as $image)
                <div class="swiper-slide">
                    <input type="hidden" id="active_image" value="{{$image->image_url}}" />
                    <article class="gallery__card position-relative overflow-hidden shadow-sm p-2">
                        <img src="../Images\properties\{{$image->image_url}}" alt="image gallery" class="gallery__img position-absolute m-auto w-100 h-100">
                    </article>
                </div>
                @endforeach
            </div>
        </div>
        <!-- =============== SWIPER GALLERY THUMBNAIL =============== -->
        <div class="gallery__overflow position-relative">
            <div class="swiper gallery-thumbs">
                <div class="swiper-wrapper">
                    @foreach($post->Image as $image)
                    <div class="swiper-slide">
                        <div class="gallery__thumbnail position-relative overflow-hidden shadow mx-auto rounded-3">
                            <img src="../Images\properties\{{$image->image_url}}" alt="image" style="inset: 0;" class="position-absolute m-auto mw-100 h-100 w-100">
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Swiper pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <!-- Swiper arrows -->
            <div class="swiper-button-next fs-5 text-purple">
                <i class="fas fa-arrow-right"></i>
            </div>
            <div class="swiper-button-prev fs-5 text-purple">
                <i class="fas fa-arrow-left"></i>
            </div>
        </div>
    </section>
    <!-- section2 -->
    <section class="border-top mb-5" style="box-shadow: 0 3px 3px #f2f2f2;">
        <div class="container py-2">
            <div class="row" dir="rtl">
                <div class="col-12">
                    <div class="fs-2 fw-bold mb-2">{{$post->realestate_type}}</div>
                    <div class="d-flex flex-row gap-4 text-muted">
                        <div>
                            <i class="fa-solid fa-location-dot" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="الموقع" title="الموقع" alt="icon"></i>
                            <span>{{$post->city}}</span>
                        </div>
                        <div>
                            <i class="fa-solid fa-calendar-days" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="تاريخ النشر" title="تاريخ النشر" alt="icon"></i>
                            <span>{{$post->created_at->format('d/m/Y')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section3: Details -->
    <section dir="rtl">
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="container py-2">
                    <div class="row mb-3">
                        <div class="fs-5 fw-bold border-bottom mb-3 py-2">تفاصيل العقار</div>
                        <table class="table table-bordered table-striped shadow border">
                            <tbody>
                                <tr>
                                    <td scope="row">حالة العقار</td>
                                    <th><span class="placeholder">
                                            @switch($post->realestate_status)
                                            @case('0')غير متوفر@break
                                            @case('1')متوفر@break
                                            @endswitch</span></th>
                                </tr>
                                <tr>
                                    <td scope="row">نوع العقار</td>
                                    <th><span class="placeholder">{{$post->realestate_type}}</span></th>
                                </tr>
                                <tr>
                                    <td scope="row">أقسام العقار</td>
                                    <td id="department-show"><span class="placeholder"></span></td>
                                    <input type="hidden" id="department-in" value="{{$post->realestate_department}}">
                                </tr>
                                <tr>
                                    <td scope="row">الموقع</td>
                                    <th><span class="placeholder">
                                            <span>{{$post->city}}</span>،&nbsp;
                                            <span class="fw-normal">{{$post->town}}</span>،&nbsp;
                                            <span class="fw-normal">{{$post->region}}</span>،&nbsp;
                                            <span class="fw-normal">{{$post->side}}</span>&nbsp;
                                        </span>
                                    </th>
                                </tr>
                                <tr class="d-none" id="PriceSell">
                                    <td scope="row">سعر البيع</td>
                                    <th colspan="2">
                                        <span class="placeholder">
                                            <span>{{$post->sale_price}}</span>
                                            <span class="fw-normal">&nbsp;ل.س</span>
                                        </span>
                                    </th>
                                </tr>
                                <tr class="d-none" id="PriceRent">
                                    <td scope="row">سعر الآجار</td>
                                    <th colspan="2">
                                        <span class="placeholder">
                                            <span>{{$post->rent_price}}</span>
                                            <span class="fw-normal">&nbsp;ل.س</span>
                                            <span class="fw-normal text-muted">&nbsp;بالشهر</span>
                                        </span>
                                    </th>
                                </tr>
                                <tr class="d-none" id="PriceMort">
                                    <td scope="row">سعر الرهن</td>
                                    <th colspan="2">
                                        <span class="placeholder">
                                            <span>{{$post->mort_price}}</span>
                                            <span class="fw-normal">&nbsp;ل.س</span>
                                            <span class="fw-normal text-muted">&nbsp;بالسنة</span>
                                        </span>
                                    </th>
                                </tr>
                                <tr>
                                    <td scope="row">المساحة</td>
                                    <th colspan="2">
                                        <span class="placeholder">
                                            <span>{{$post->space}}</span>
                                            <span class="fw-normal">متر مربع</span>
                                        </span>
                                    </th>
                                </tr>
                                @if($post->view != null)
                                <tr>
                                    <td scope="row">الاطلالة</td>
                                    <td><span class="placeholder">{{$post->view}}</span></td>
                                </tr>
                                @endif
                                <tr>
                                    <td scope="row">نوع العقد</td>
                                    <td><span class="placeholder">{{$post->contract_type}} </span></td>
                                </tr>
                                <tr>
                                    <td scope="row">نوع الإكساء</td>
                                    <td><span class="placeholder"> {{$post->finishing_type}}</span></td>
                                </tr>
                                <tr>
                                    <td scope="row">اتجاهات العقار</td>
                                    <td id="direction-show"></td>
                                    <input type="hidden" id="direction-in" value="{{$post->direction}}">
                                </tr>
                                <tr>
                                    <td scope="row">سنة البناء</td>
                                    <th colspan="2">{{$post->construction_year}}</th>
                                </tr>
                                <!-- <tr>
                                    <td scope="row">عدد الحمامات</td>
                                    <th colspan="2">5</th>
                                </tr>
                                <tr>
                                    <th scope="row">عدد الطوابق / الطابق</th>
                                    <td colspan="2">4</td>
                                </tr>  -->
                            </tbody>
                        </table>
                    </div>
                    <div class="row mb-3">
                        <div class="fs-5 fw-bold border-bottom mb-3 py-2">معلومات أخرى:</div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card shadow mb-5" style="max-width: 13rem;">
                                <div class="card-body d-flex flex-row gap-2 bd-gray-100">
                                    <img src="../Images\svg\icon\floor.svg" width="30" alt="icon" />
                                    <div class="vr"></div>&nbsp;
                                    <div>
                                        <span class="text-muted">الطابق</span><br>
                                        <span class="fs-5 fw-bold placeholder">{{$post->floor_number}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card shadow mb-5" style="max-width: 13rem;">
                                <div class="card-body d-flex flex-row gap-2 bd-gray-100">
                                    <img src="../Images\svg\icon\bed.svg" width="30" alt="icon" />
                                    <div class="vr"></div>&nbsp;
                                    <div>
                                        <span class="text-muted">عدد الغرف</span><br>
                                        <span class="fs-5 fw-bold placeholder">{{$post->rooms_num}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card shadow mb-5" style="max-width: 13rem;">
                                <div class="card-body d-flex flex-row gap-2 bd-gray-100">
                                    <img src="../Images\svg\icon\bath.svg" width="30" alt="icon" />
                                    <div class="vr"></div>&nbsp;
                                    <div>
                                        <span class="text-muted">عدد الحمامات</span><br>
                                        <span class="fs-5 fw-bold placeholder">{{$post->bathrooms_num}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($post->description != null)
                    <div class="row mb-3">
                        <div class="fs-5 fw-bold border-bottom mb-3 py-2">تفاصيل أخرى</div>
                        <p class="text-end">{{$post->description}}
                        </p>
                    </div>
                    @endif
                    <div class="fs-5 fw-bold border-bottom mb-3 py-2">الميزات</div>
                    <input type="hidden" id="features-in" value="{{$post->features}}">
                    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-3 " id="features-show">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12">
                <div class="container py-2">
                    <!------------------------------ agent information----------------------->
                    <div class="row mb-3">
                        <div class="fs-5 fw-bold border-bottom mb-3 py-2">التواصل</div>
                        <div class="col-12">
                            <div class="d-flex justify-content-center align-content-center">
                                <div class="agent-info1 p-1" style="width: 100%; border: none; border-radius: 10px; background-color: #f2f1f1; overflow: hidden; position: relative;">
                                    <div class="agent-content align-items-center shadow">
                                        @if($post->user->image_url != null)
                                        <img src="../Images/user/{{$post->user->image_url}}" class="rounded-3 m-2" width="155">
                                        @else
                                        <img src="../Images/svg/icon/circle-user_secondary.svg" class="rounded-3 m-2" width="155">
                                        @endif
                                        <div class="me-3 w-100">
                                            <div class="d-flex flex-column p-3">
                                                <h5 class="align-self-start fw-bold py-2 placeholder">{{$post->user->name}}</h5>
                                                <p class="align-self-start">
                                                    <i class="far fa-envelope fs-5 text-muted" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="البريد الإلكتروني" title="البريد الإلكتروني"></i>
                                                    <span class="fs-6 placeholder">{{$post->user->email}}</span>
                                                </p>
                                                <p class="align-self-start">
                                                    <i class="fas fa-phone fs-5 text-muted " data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="رقم الجوال" title="رقم الجوال"></i>
                                                    <span dir="ltr" class="placeholder">{{$post->user->phone}}</span>
                                                </p>
                                                <a href="/Profile_anotheruser/{{$post->user->id}}"><button class="btn btn-purple bg-purple text-light align-self-start placeholder" aria-hidden="true">عرض المزيد</button></a>
                                            </div>
                                        </div>
                                        <div class="social d-inline-block w-100 p-1 m-0 bg-purple position-absolute start-0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------------end agent information----------------------->
                    @if($post->video_url !=null)
                    <div class="row mb-3">
                        <div class="fs-5 fw-bold border-bottom mb-3 py-2">الفيديو</div>
                        <div class="col-12">
                            <iframe class="border shadow" width="100%" height="500px" src="{{$post->video_url}}"></iframe>
                        </div>
                    </div>
                    @endif
                    <div class="row mb-5">
                        <div class="fs-5 fw-bold border-bottom text-end mb-3 py-2">الموقع</div>
                        <div class="col-12 ">
                            <div id="map" class="w-100 shadow border" style="height:500px;"></div>
                            <input type="hidden" id="latitudeValue" value="{{$post->lat}}" />
                            <input type="hidden" id="longitudeValue" value="{{$post->lng}}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section4 -->
    <section class="mb-5 border-top" style="box-shadow: 0 3px 3px #f2f2f2;">
        <div class="container py-2">
            <div class="row" dir="rtl">
                <div class="col-12">
                    <div class="fs-2 fw-bold mb-3">اقتـراحـات مشـابهـة</div>
                </div>
            </div>
        </div>
    </section>
    <?php $cluster_number=\App\Models\Post::find($post->id)->cluster;
    $sug_posts=\App\Models\Post::where('cluster',$cluster_number)->where('id','!=',$post->id)->where('realestate_status', 1)->get();?>
    <!-- section5: cards -->
    <section class="container mb-5">
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 mt-3" id="content" dir="rtl">
            @foreach($sug_posts as $sug_post)
                @foreach($sug_post->comments as $comment)
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
                $like_color = 'secondary';
                $dislike_color = 'secondary';
                ?>
                @foreach($sug_post->likes as $like)
                <?php
                if ($like->like == 1)
                    $like_count++;
                if ($like->like == 0) {
                    $dislike_count++;
                }
                if (Illuminate\Support\Facades\Auth::check()) {
                    if ($like->like == 1 && $like->user_id == Illuminate\Support\Facades\Auth::user()->id) {
                        $like_color = "purpule";
                    }
                    if ($like->like == 0 && $like->user_id == Illuminate\Support\Facades\Auth::user()->id) {
                        $dislike_color = "purpule";
                    }
                }
                ?>
                @endforeach
                <!-- Modal disLike/Like -->
                <div class="modal fade" id="dis_like-{{$sug_post->id}}" aria-hidden="true" aria-labelledby="dis_like" tabindex="-1" dir="rtl">
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
                                    @if($sug_post->likes_count->count() != 0)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-dark active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane-{{$sug_post->id}}" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><i class="far fa-thumbs-up text-purple fs-4"></i>&nbsp;<span>{{$like_count}}</span>
                                        </button>
                                    </li>
                                    @endif
                                    @if($sug_post->dislikes_count->count() != 0)

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane-{{$sug_post->id}}" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><i class="far fa-thumbs-down text-danger fs-4"></i>&nbsp;<span>{{$dislike_count}}</span>
                                        </button>
                                    </li>
                                    @endif
                                </ul>
                                <div class="tab-content w-50" id="myTabContent">
                                    <!-- Like -->
                                    <div class="tab-pane fade show active" id="home-tab-pane-{{$sug_post->id}}" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                        @foreach($sug_post->likes as $like)
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
                                    @foreach($sug_post->likes as $dislike)
                                    @if($sug_post->dislikes_count->count() == 0)
                                    @elseif($dislike->like == 0)
                                    <div class="tab-pane fade" id="profile-tab-pane-{{$sug_post->id}}" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                        <a href="" class="d-flex flex-row text-decoration-none mt-3">
                                            <img class="rounded-circle align-self-start ms-1" src="..\Images/svg/icon/circle-user_secondary.svg" width="60">
                                            <span class="d-block align-self-center fs-6 text-dark">
                                                {{ $dislike->user->name}}
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
                <div class="offcanvas offcanvas-end w-100 m-0" tabindex="-1" id="comments-{{$sug_post->id}}" aria-labelledby="offcanvasResponsiveLabel" dir="rtl">
                    <div class="offcanvas-header shadow-sm d-flex justify-content-between">
                        <div class="fs-5" data-bs-toggle="modal" data-bs-target="#dis_like-{{$sug_post->id}}" role="button">
                            <i class="far fa-thumbs-up text-purple"></i>&nbsp;<div class="vr"></div>
                            <i class="far fa-thumbs-down text-danger"></i>&nbsp;<span>{{$sug_post->likes->count()}}</span>&nbsp;&nbsp;
                            <i class="fas fa-angle-left text-muted fs-4"></i>
                        </div>
                        <div><button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="offcanvas-body" id="offcanvas-body-{{$sug_post->id}}">
                        <div class="offcanvas-title fw-bold fs-3 text-center" id="offcanvasResponsiveLabel">التعليقات</div>
                        @forelse($sug_post->comments as $comment)
                        <!-- one comment -->
                        <div class="text-decoration-none d-flex flex-row my-4 " id="comment_{{$comment->id}}" href="">
                            <a href="">
                                @if($comment->user->image_url != null)
                                <img class="rounded-circle align-self-start ms-1" src="../Images/user/{{$comment->user->image_url}}" width="60"></a>
                            @else
                            <img class="rounded-circle align-self-start ms-1" src="../Images/svg/icon/circle-user_secondary.svg" width="60"></a>
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
                            <img src="../Images/svg/illustrations/No-data-cuate.svg" width="450px" height="350px">
                            <p class="d-block text-dark fs-5 placeholder">لا يوجد تعليقات</p>
                        </div>
                        @endforelse
                    </div>
                    <form id="MessageForm" name="MessageForm" novalidate="">
                        <div class="modal-footer d-block shadow p-1">
                            <div class="d-flex justify-content-start">
                                <textarea @guest onclick="preventFunction()" @endguest class="form-control" id="text_addComment-{{$sug_post->id}}" name="comment" rows="3" placeholder="اكتب تعليقاً"></textarea>
                                <button class="text-secondary align-self-start border-0" style="background-color: transparent;" id="addComment" type="button" value="{{$sug_post->id}}">
                                    <img src="../Images/svg/icon/send.svg" alt="send" width="35px" style="transform: scaleX(-1);">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- card -->
                <div class="col" id="delete-{{$sug_post->id}}">
                    <div class="card border card_shadow">
                        <div class="card-header d-flex justify-content-between rounded-0 border-0">
                            <a class="text-decoration-none d-flex flex-row" href="/Profile_anotheruser/{{$sug_post->user->id}}">
                                @if($sug_post->user->image_url != null)
                                <img class="rounded-circle ms-2 placeholder" src="../Images/user/{{$sug_post->user->image_url}}" width="50">
                                @else
                                <img class="rounded-circle ms-2 placeholder" src="../Images/svg/icon/circle-user_secondary.svg" width="50">
                                @endif
                                <div class="d-flex flex-column justify-content-start placeholder">
                                    <span class="d-block text-dark">{{$sug_post->user->name}}</span>
                                    <span class="text-black-50">{{$sug_post->created_at->diffForHumans()}}</span>
                                </div>

                            </a>
                            <div class="dropdown">
                                <span data-bs-toggle="dropdown">
                                    <i class="fas fa-ellipsis-v mt-2 p-2 text-purple" style="cursor: pointer;"></i>
                                </span>
                                <ul class="dropdown-menu text-end">
                                    <li>
                                        <a class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#comments-{{$sug_post->id}}" aria-controls="offcanvasResponsive">
                                            <i class="far fa-comments text-muted"></i>&nbsp;تعليق</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="../show_post/{{$sug_post->id}}">
                                            <i class="fa-solid fa-eye text-muted"></i>&nbsp;عرض المنشور</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    @if(Auth::check() && Auth::id() == $sug_post->user_id)
                                    <li>
                                        <a class="dropdown-item" href="/post_update/{{$sug_post->id}}">
                                            <i class="fa-solid fa-file-pen text-muted"></i>&nbsp;تعديل المنشور</a>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item" id="delete_post" value="{{$sug_post->id}}"> <i class="fa-solid fa-trash-can text-muted"></i>&nbsp;حذف المنشور</button>
                                    </li>
                                    @endif
                                    @guest

                                    @endguest
                                    @auth
                                    @if($sug_post->user_id != Auth::user()->id)
                                    @if(auth()->user()->isSaved($sug_post->id))
                                    <li><button type="button" class="dropdown-item" id="removeSavedPost" value="{{$sug_post->id}}"><i class="far fa-save text-muted"></i>&nbsp;إزالة الحفظ </button>
                                    </li>
                                    @else
                                    <li><button type="button" class="dropdown-item" id="addSavedPost" value="{{$sug_post->id}}"><i class="far fa-save text-muted"></i>&nbsp; حفظ </button>
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
                                        <?php $active_image_url = App\Models\Image::where('post_id', '=', $sug_post->id)->first(); ?>
                                        <div class="carousel-item active">
                                            <img class="d-block w-100 h-100" src="..\Images\properties\{{$active_image_url->image_url}}" alt="...">
                                        </div>
                                        @foreach($sug_post->Image as $image)
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
                                        <span class="text-light position-absolute start-50 top-50 align-middle placeholder">{{$sug_post->Image->count()}}</span>
                                    </div>
                                </div>
                                <div class="position-absolute" style="right: 10px; top: 10px; z-index: 9;">
                                    <span class="bg-purple py-1 px-3 fs-5 placeholder">
                                        @switch($sug_post->realestate_department)
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
                                    <li class="float-start px-2 placeholder">{{$sug_post->contract_type}} </li>
                                    <li class="float-start px-2 placeholder"><span>{{$sug_post->realestate_type }}</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex flex-column">
                                <span class="mb-1 align-self-end">
                                    <span href="#" title="أعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="أعجبني">
                                        <button type="button" class=" like p-0 bd-gray-100 border-0 {{ $like_color }}" data-like="{{$like_color}}" data-post_id="{{$sug_post->id}}_l"><i class="far fa-thumbs-up"></i>&nbsp;<span class="like_count">{{$like_count}}</span></button>
                                    </span>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span href="#" title="لم يعجبني" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="لم يعجبني">
                                        <button class=" p-0 border-0 bd-gray-100 dislike {{ $dislike_color}}" data-like="{{$like_color}}" data-post_id="{{$sug_post->id}}_d"><i class="far fa-thumbs-down" onclick="myFunction1(this)"></i>&nbsp;<span class="dislike_count">{{$dislike_count}}</span></button>
                                    </span>
                                    <!-- <button type="button" class="btn like {{ $like_color }}" data-like="{{$like_color}}" data-post_id="{{$sug_post->id}}_l">like<i class="far fa-thumbs-up"></i><span class="like_count">{{$like_count}}</span></button>
                                        <button class="btn icon-link col  mt-2 dislike {{ $dislike_color}}" data-like="{{$like_color}}" data-post_id="{{$sug_post->id}}_d"> dislike<i class="far fa-thumbs-down" onclick="myFunction1(this)"></i><span class="dislike_count">{{$dislike_count}}</span></button> -->
                                </span>
                                <span class="mb-1">
                                    <img src="..\Images\svg\icon\area.svg" width="20" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="المساحة" title="المساحة" alt="icon" />
                                    <span class="placeholder">{{$sug_post->space}}</span>مترمربع
                                </span>
                                @if($sug_post->realestate_department == 1)
                                <span class="mb-1">
                                    <i class="fa-solid fa-money-bill-wave text-muted fs-6" title="السعر" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="السعر"></i>&nbsp;
                                    <span class="placeholder">{{$sug_post->sale_price}} ل.س </span>
                                </span>
                                @elseif($sug_post->realestate_department == 2 )
                                <span class="mb-1">
                                    <i class="fa-solid fa-money-bill-wave text-muted fs-6" title="السعر" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="السعر"></i>&nbsp;
                                    <span class="placeholder"> {{$sug_post->rent_post}} ل.س</span>
                                </span>
                                @elseif($sug_post->realestate_department == 4)
                                <span class="mb-1">
                                    <i class="fa-solid fa-money-bill-wave text-muted fs-6" title="السعر" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="السعر"></i>&nbsp;
                                    <span class="placeholder"> {{$sug_post->mort_post}} ل.س</span>
                                </span>
                                @else
                                @endif

                                <span><i class="fas fa-map-marker-alt text-muted fs-5" title="الموقع" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="الموقع"></i>&nbsp;&nbsp;
                                    <span class="placeholder">{{$sug_post->city}}</span>
                                </span>
                            </div>

                            <hr />
                            <p class="zoom d-flex justify-content-evenly">
                                @if($sug_post->rooms_num!=null)
                                <span>
                                    <img src="../Images\svg\icon\bed.svg" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="عدد الغرف" title="عدد الغرف" alt="icon" />
                                    <span class="placeholder">{{$sug_post->rooms_num}}</span>
                                </span>
                                @endif
                                @if($sug_post->bathrooms_num!=null)
                                <span>
                                    <img src="../Images\svg\icon\bath.svg" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="عدد الحمامات" title="عدد الحمامات" alt="icon" />
                                    <span class="placeholder">{{$sug_post->bathrooms_num}}</span>
                                </span>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </section>

    <script src="../libraries/swiper/swiper-bundle.min.js"></script>

    <script>
        const dropdownElementList = document.querySelectorAll('.dropdown-toggle');
        const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl));
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
    <!-- SWIPER JS GALLERY -->
    <script>
        /*=============== SWIPER JS GALLERY ===============*/
        let swiperCards = new Swiper(".gallery-cards", {
            loop: true,
            loopedSlides: 40,
            cssMode: true,
            effect: 'fade',
        });
        let swiperThumbs = new Swiper(".gallery-thumbs", {
            loop: true,
            loopedSlides: 40,
            slidesPerView: 5,
            centeredSlides: true,
            slideToClickedSlide: true,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        swiperThumbs.controller.control = swiperCards;
        var map;
        var myMarker;
        var latitude = parseFloat(document.getElementById('latitudeValue').value);
        var longitude = parseFloat(document.getElementById('longitudeValue').value);

        function initModal() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 36.20525,
                    lng: 37.15895
                },
                zoom: 15,
                mapTypeControl: false,
                streetViewControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            myMarker = new google.maps.Marker({
                icon: {
                    path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
                    strokeColor: "#FFF",
                    fillColor: "#a501a5",
                    fillOpacity: 0.9,
                    strokeWeight: 0,
                    rotation: 0,
                    scale: 2,
                    anchor: new google.maps.Point(15, 30),
                },
                position: new google.maps.LatLng(36.20525, 37.15895),
                map: map,
            });
            const infoWindow = new google.maps.InfoWindow();
            myMarker.addListener("click", () => {
                infoWindow.close();
                infoWindow.setContent('<div class="text-end" dir="rtl"><img class="shadow-sm rounded-3 mb-2" src="../../Images/properties/' + $('#active_image').val() + '" width="200" alt=""><br><div class="d-flex flex-column fs-6"><div class="fs-6"><i class="fas fa-map-marker-alt text-muted"></i>&nbsp;<span><?php echo $post->city; ?></span></div></div></div>');
                infoWindow.open(myMarker.getMap(), myMarker);
            });
        }
        let placeholders = document.querySelectorAll(".placeholder");
        window.onload = function() {
            // for Maps
            myMarker.setPosition({
                lat: latitude,
                lng: longitude
            });
            map.setCenter({
                lat: latitude,
                lng: longitude
            });
            // direction encoder
            let directions = "";
            // console.log(parseInt(document.getElementById("direction-in").value));
            if ((1 << 0) & parseInt(document.getElementById("direction-in").value)) {
                directions += "شمالي ";
            }
            if ((1 << 1) & parseInt(document.getElementById("direction-in").value)) {
                directions += "شرقي ";
            }
            if ((1 << 2) & parseInt(document.getElementById("direction-in").value)) {
                directions += "جنوبي ";
            }
            if ((1 << 3) & parseInt(document.getElementById("direction-in").value)) {
                directions += "غربي";
            }
            // console.log(directions);
            document.getElementById("direction-show").innerHTML = directions;
            //end direction encoder
            // department encoder
            let departments = "";
            if ((1 << 0) & parseInt(document.getElementById("department-in").value)) {
                departments += "بيع ";
                document.getElementById("PriceSell").classList.remove("d-none");
            }
            if ((1 << 1) & parseInt(document.getElementById("department-in").value)) {
                departments += "آجار ";
                document.getElementById("PriceRent").classList.remove("d-none");
            }
            if ((1 << 2) & parseInt(document.getElementById("department-in").value)) {
                departments += "رهن";
                document.getElementById("PriceMort").classList.remove("d-none");
            }
            // console.log(departments);
            document.getElementById("department-show").textContent = departments;
            //end department encoder
            // direction encoder
            let featuresshow = document.getElementById("features-show");
            let feature = parseInt(document.getElementById("features-in").value);
            // console.log(direction);
            if ((1 << 0) & feature) {
                featuresshow.innerHTML += '<div class="col"><p class="mb-4"><i class="fas fa-check-square text-purple fs-4 ms-2 shadow" style="line-height: 0.7;"></i> Wifi</p></div> ';
            }
            if ((1 << 1) & feature) {
                featuresshow.innerHTML += '<div class="col"><p class="mb-4"><i class="fas fa-check-square text-purple fs-4 ms-2 shadow" style="line-height: 0.7;"></i> تكييف</p></div> ';
            }
            if ((1 << 2) & feature) {
                featuresshow.innerHTML += '<div class="col"><p class="mb-4"><i class="fas fa-check-square text-purple fs-4 ms-2 shadow" style="line-height: 0.7;"></i> حمام سباحة</p></div> ';
            }
            if ((1 << 3) & feature) {
                featuresshow.innerHTML += '<div class="col"><p class="mb-4"><i class="fas fa-check-square text-purple fs-4 ms-2 shadow" style="line-height: 0.7;"></i> الأمن</p></div> ';
            }
            if ((1 << 4) & feature) {
                featuresshow.innerHTML += '<div class="col"><p class="mb-4"><i class="fas fa-check-square text-purple fs-4 ms-2 shadow" style="line-height: 0.7;"></i> الحديقة</p></div> ';
            }
            if ((1 << 5) & feature) {
                featuresshow.innerHTML += '<div class="col"><p class="mb-4"><i class="fas fa-check-square text-purple fs-4 ms-2 shadow" style="line-height: 0.7;"></i> تدفئة مركزية</p></div> ';
            }
            if ((1 << 6) & feature) {
                featuresshow.innerHTML += '<div class="col"><p class="mb-4"><i class="fas fa-check-square text-purple fs-4 ms-2 shadow" style="line-height: 0.7;"></i> الشرفة</p></div> ';
            }
            if ((1 << 7) & feature) {
                featuresshow.innerHTML += '<div class="col"><p class="mb-4"><i class="fas fa-check-square text-purple fs-4 ms-2 shadow" style="line-height: 0.7;"></i> غرفة الغسيل</p></div> ';
            }
            if ((1 << 8) & feature) {
                featuresshow.innerHTML += '<div class="col"><p class="mb-4"><i class="fas fa-check-square text-purple fs-4 ms-2 shadow" style="line-height: 0.7;"></i> موقف سيارات</p></div> ';
            }
            // console.log(feature);
            // document.getElementById("direction-show").innerHTML = feature;
            //end direction encoder
            for (placeholder of placeholders) {
                // console.log("placeholder");
                placeholder.classList.remove("placeholder");
            }
        }


        // <!-- كود الاعجاب وعدم الاعجاب -->

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
                        $('*[data-post_id="' + post_id + '_l"]').removeClass('secondary').addClass('purpule');
                        $('*[data-post_id="' + post_id + '_d"]').removeClass('purpule').addClass('secondary');
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
                        $('*[data-post_id="' + post_id + '_l"]').removeClass('purpule').addClass('secondary');
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
                        $('*[data-post_id="' + post_id + '_d"]').removeClass('secondary').addClass('purpule');
                        $('*[data-post_id="' + post_id + '_l"]').removeClass('purpule').addClass('secondary');
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
                        $('*[data-post_id="' + post_id + '_d"]').removeClass('purpule').addClass('secondary');
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
                            $('#content').append(model);
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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxRuFn9Ny7G-z-EmWCKnXCHK7uyfVvvT0&callback=initModal" async defer></script>

</body>

</html>
@endsection
