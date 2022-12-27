@extends('header&&footer')
@section('content')
<!DOCTYPE html>
<html lang="ar">

<head>
    <title>New Home | posts</title>
    <style>
        .nav-link,
        .nav-link:hover {
            color: var(--Second-color);
        }

        /**************** section2: Cards ****************/
        .card:hover {
            top: -2px;
        }

        ul {
            list-style: none;
        }

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
    </style>
</head>

<body class="m-0 placeholder-glow" style="overflow-x: hidden;">
    <!--  -->
    <section class="border-top" style="box-shadow: 0 3px 3px #f2f2f2;">
        <div class="container py-3">
            <div class="row" dir="rtl">
                <div class="col-12">
                    <div class="fs-2 fw-bold mb-2 text-center">المنشورات </div>
                </div>
            </div>
        </div>
    </section>
    <div class="zigzag"></div>
    <section class="bd-gray-100 py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4 mt-3" id="content" dir="rtl">
                @foreach($posts as $post)
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
                        $like_color = "purpule";
                    }
                    if ($like->like == 0 && $like->user_id == Illuminate\Support\Facades\Auth::user()->id) {
                        $dislike_color = "purpule";
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
                                    @if($post->dislikes_count->count() != 0)
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane-{{$post->id}}" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false"><i class="far fa-thumbs-down text-danger fs-4"></i>&nbsp;<span>{{$dislike_count}}</span>
                                        </button>
                                    </li>
                                    @endif
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
                            <a class="text-decoration-none d-flex flex-row" href="/Profile_anotheruser/{{$post->user->id}}">
                                @if($post->user->image_url != null)
                                <img class="rounded-circle ms-2 placeholder" src="..\Images/user/{{$post->user->image_url}}" width="50">
                                @else
                                <img class="rounded-circle ms-2 placeholder" src="..\Images/svg/icon/circle-user_secondary.svg" width="50">
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
                                    @if(auth()->user()->isSaved($post->id))
                                    <li><button type="button" class="dropdown-item" id="removeSavedPost" value="{{$post->id}}"><i class="far fa-save text-muted"></i>&nbsp;إزالة الحفظ </button>
                                    </li>
                                    @else
                                    <li><button type="button" class="dropdown-item" id="addSavedPost" value="{{$post->id}}"><i class="far fa-save text-muted"></i>&nbsp; حفظ </button>
                                    </li>
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
                                        <button class=" p-0 border-0 bd-gray-100 dislike {{ $dislike_color}}" data-like="{{$like_color}}" data-post_id="{{$post->id}}_d"><i class="far fa-thumbs-down"  @guest onclick="preventFunction(this)" @endguest></i>&nbsp;<span class="dislike_count">{{$dislike_count}}</span></button>
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
                @endforeach
            </div>
            <!-- <a href="{{route('index_featured_posts.show')}}"> <button type="button" class="btn btn-gradient p-2 text-white mt-5 rounded-3">عرض المزيد</button></a> -->
        </div>
        <!--section2: Pagination-->
        <nav class="d-flex justify-content-center pt-5" aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item " aria-disabled="true" aria-label="&laquo; Previous">
                    {{ $posts->links("pagination::bootstrap-4") }}
                </li>

            </ul>
        </nav>
        </div>
    </section>
    <script src="libraries\JS\post_activity.js"></script>
    <script>
        const dropdownElementList = document.querySelectorAll('.dropdown-toggle');
        const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl));
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
        let placeholders = document.querySelectorAll(".placeholder");
        window.onload = function() {
            for (placeholder of placeholders) {
                // console.log("placeholder");
                placeholder.classList.remove("placeholder");
            }
        }
    </script>
    <script>
         function preventFunction(x) {
            alert("عليك تسجيل الدخول أولا");
        }
        // <!-- كود الاعجاب وعدم الاعجاب -->
        let placeholders = document.querySelectorAll(".placeholder");
        window.onload = function() {
            for (placeholder of placeholders) {
                // console.log("placeholder");
                placeholder.classList.remove("placeholder");
                placeholder.classList.remove("disabled");
            }
        };
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
</body>

</html>
@endsection
