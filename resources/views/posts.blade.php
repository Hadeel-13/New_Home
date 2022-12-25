
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Created_Post</title>
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
            --first-color: #822492;
            --Background-color: #5c3463;
            --body-color: #f2f2f2;
            --primary-color: #82498c;
            --primary-color-light: #e7e6eb;
            --text-color: #707070;
            --text-color2: #8c8c8c;
        }
        
        body {
            background: var(--body-color);
        }
        
        .date__box {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: var(--text-color2);
            border: 4px solid;
            font-weight: bold;
            padding: 5px 10px;
        }
        
        .date__day {
            font-size: 30px;
        }
        
        .blog-card {
            margin-right: auto;
            margin-left: auto;
            padding: 25px;
            position: relative;
            height: 350px;
            margin-bottom: 15%;
        }
        
        .date__box {
            transform: scale(0.9);
            transition: 200ms ease-in-out;
        }
        
        .blog-card__background,
        .card__background--layer {
            z-index: -1;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .blog-card__background {
            padding: 15px;
            background: var(--text-color2);
        }
        
        .card__background--wrapper {
            height: 100%;
            clip-path: polygon(0 0, 100% 0, 100% 55%, 0 80%);
            position: relative;
            overflow: hidden;
        }
        
        .card__background--main {
            height: 100%;
            position: relative;
            transition: 500ms ease-in-out;
            background-repeat: no-repeat;
            background-size: cover;
        }
        /* .card__background--layer {
            z-index: 0;
            opacity: 0;
            background: rgba(0, 0, 0, 0.2);
            transition: 300ms ease-in-out;
        } */
        
        .blog-card__head {
            height: 190px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .blog-card__info {
            z-index: 100;
            background: white;
            padding: 20px 15px;
            width: 100%;
        }
        
        .dir {
            direction: rtl;
        }
        
        .date__box:hover {
            transform: scale(1);
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .blog-card__info h4 {
            color: var(--primary-color);
            font-weight: 600;
        }
        
        a.icon-link {
            color: var(--text-color);
            text-decoration: none;
            font-size: 18px;
        }
        
        a.icon-link i {
            color: var(--text-color);
            font-size: 18px;
        }
        
        a.icon-link :hover {
            color: var(--Background-color);
            font-size: 23px;
        }
        
        p a:hover {
            color: var(--Background-color);
            font-size: 23px;
        }
        
        .btn-post {
            background: white;
            box-shadow: 1px 1px 3px 0 rgba(0, 0, 0, 0.5);
            border-radius: 0;
            height: 50px;
            line-height: 50px;
            padding: 0;
            border: none;
            font-size: 18px;
            direction: ltr;
        }
        
        .btn-post:hover {
            background: var(--first-color);
            color: #fff;
            transition: 500ms ease-in-out;
            margin-right: 5px;
        }
        
        .btn--with-icon {
            padding-left: 20px;
        }
        
        .btn--with-icon i {
            padding: 0px 20px 0px 20px;
            height: 50px;
            line-height: 50px;
            vertical-align: bottom;
            color: white;
            background: var(--first-color);
            clip-path: polygon(30% 0, 100% 0, 100% 100%, 0% 100%);
        }
        
        .btn--only-icon {
            width: 50px;
        }
        
        .detail {
            font-size: 18px;
            font-style: italic;
            font-weight: 600;
        }
        
        .icon {
            font-size: 20px;
            cursor: pointer;
        }
        
        .icon1 {
            font-size: 23px;
            cursor: pointer;
        }
        
        .action {
            border-top: 2px solid rgb(253, 216, 253);
        }
        /*-------------------------------popup css---------------------------------*/
        
        .address-cv {
            text-align: center;
            color: var(--first-color);
        }
        
        body {
            background: #eee
        }
        
        .date {
            font-size: 11px
        }
        
        .comment-text {
            font-size: 12px
        }
        
        .fs-12 {
            font-size: 12px
        }
        
        .shadow-none {
            box-shadow: none
        }
        
        .name {
            color: var(--first-color);
        }
        
        .cursor:hover {
            color: var(--first-color);
        }
        
        .cursor {
            cursor: pointer
        }
        
        .textarea {
            resize: none
        }
        
        .btn-1::before {
            position: absolute;
            content: "";
            width: calc(100% + 10px);
            height: calc(100% + 10px);
            left: -2px;
            top: -2px;
            background: linear-gradient( 124deg, #82498c, #82498c, #dbbe5d, #dbbe5d, #7293cf, #7293cf, #dd00f3, #dd00f3, #e2a865, #e2a865, #ff97bd, #ff97bd);
            background-size: 400%;
            z-index: -1;
            filter: blur(2px);
            animation: move 20s linear infinite;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }
        
        .btn-1:hover::before {
            opacity: 1;
        }
        
        @keyframes move {
            0% {
                background-position: 0 0;
            }
            50% {
                background-position: 400% 0;
            }
            100% {
                background-position: 900% 0;
            }
        }
        
        @media (max-width: 1600px) {
            .re {
                margin-bottom: 4%;
            }
        }
        
        @media (max-width: 1200px) {
            .re {
                margin-bottom: 7%;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row dir">
            @if($posts->count()>0)
            @foreach($posts as $post)
            
            <div class="col-lg-4 col-md-6 col-sm-12 re">
                <article class="blog-card">
                    <div class="blog-card__background">
                        <div class="card__background--wrapper">
                            <div class="card__background--main" style="background-image: url('images/1.jpg');">
                                <div class="card__background--layer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card__head">
                        <span class="date__box">
                        <span class="date__day">{{$post->created_at}}</span>
                        <span class="date__month">JAN</span>
                        </span>
                    </div>
                    <div class="blog-card__info">
                        <h4 class="dir">القسم:{{$post->realestate_type }}<span style="float: left; margin-left:10px">السعر:{{$post->price}}</span></h4>

                        <div class="row">
                            <div class="col-5 detail">
                                <svg fill="none" height="20" viewBox="0 0 17 15" width="20" xmlns="http://www.w3.org/2000/svg"><g stroke="#828282"><path d="m8 6.6h.6v-.6-5.4h7.8v13.8h-15.8v-7.8z" stroke-width="1.2"/><g fill="#4f4f4f"><path d="m8.3 11.3h.6v2.4h-.6z" stroke-width=".6"/><path d="m13.25 6.75h.5v3.5h-.5z" stroke-width=".5" transform="matrix(0 -1 1 0 6.5 20)"/></g></g></svg>                            {{$post->space}}
                                <br>
                                @if($post->bathrooms_number!=null)
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                    <path d="M0 9.68197C0 9.33805 0.278801 9.05925 0.622719 9.05925H21.2347V6.51091H19.2776V7.67361C19.2776 8.01753 18.9988 8.29633 18.6549 8.29633C18.3109 8.29633 18.0321 8.01753 18.0321 7.67361V5.88819C18.0321 5.54427 18.3109 5.26547 18.6549 5.26547H21.8574C22.2013 5.26547 22.4801 5.54427 22.4801 5.88819V9.05925H24.3773C24.7212 9.05925 25 9.33805 25 9.68197C25 13.5916 22.6501 16.9622 19.2889 18.457L19.4806 18.5371C19.7979 18.6698 19.9476 19.0345 19.815 19.3518C19.7151 19.5907 19.4838 19.7345 19.2402 19.7345C19.1601 19.7345 19.0788 19.7189 19.0003 19.6862L17.4835 19.0521C16.8129 19.201 16.1165 19.2802 15.4017 19.2802H9.59822C8.75133 19.2802 7.92996 19.1694 7.1472 18.9625L5.41614 19.6862C5.33767 19.719 5.25628 19.7345 5.17621 19.7345C4.93264 19.7345 4.70126 19.5906 4.60144 19.3518C4.46881 19.0345 4.61852 18.6698 4.93584 18.5371L5.43393 18.3289C2.22124 16.7754 0 13.4832 0 9.68197ZM9.59822 18.0348H15.4017C19.798 18.0348 23.412 14.6207 23.7315 10.3046H1.2683C1.58793 14.6208 5.20192 18.0348 9.59822 18.0348Z" fill="#828282"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0">
                                    <rect width="25" height="25" fill="white" transform="matrix(-1 0 0 1 25 0)"/>
                                    </clipPath>
                                    </defs>
                                    </svg>عدد الحمامات:{{$post->bathrooms_number}}
                                    @endif
                                <br>
                            </div>
                            <div class="col-7 detail">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 32 32" fill="gray"><g transform="translate(441.385 -955.454)"><path fill-rule="evenodd" d="m -184.77767,845.73998 -12,12 24,0 z m 7,4 0,1.6875 2,1.9707 0,-3.6582 z m -16.99956,11.02223 0,15.55556 8,0 0,-8.9797 4,0 0,8.9797 8,0 0,-15.55556 z" transform="translate(-365.607 690.689) scale(.32143)"/><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal" d="m -425,-62.496094 c 5.18959,0 9.38477,4.186728 9.38477,9.361328 0,1.21014 -0.58616,3.060792 -1.5,5.082032 -0.91385,2.02125 -2.14182,4.229784 -3.3711,6.271484 -2.25544,3.74603 -4.15607,6.373307 -4.51367,6.873047 -0.3576,-0.49974 -2.25823,-3.127017 -4.51367,-6.873047 -1.22928,-2.0417 -2.45725,-4.250234 -3.3711,-6.271484 -0.91384,-2.02124 -1.5,-3.871892 -1.5,-5.082032 0,-5.1746 4.19518,-9.361328 9.38477,-9.361328 z m 0,2 c -4.13621,0 -7.5,3.36379 -7.5,7.5 0,4.13622 3.36379,7.5 7.5,7.5 4.13621,0 7.5,-3.36378 7.5,-7.5 0,-4.13621 -3.36379,-7.5 -7.5,-7.5 z" color="#000" font-family="sans-serif" font-weight="400" overflow="visible" transform="translate(0 1020.362)"/></g></svg>
                                 {{$post->city}},{{$post->town}}
                                <br>
                                @if($post->rooms_number!=null)
                                <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.545457 -2.62268e-08C0.846704 -1.17422e-08 1.09091 0.268629 1.09091 0.6L1.09091 14.4C1.09091 14.7314 0.846703 15 0.545457 15C0.24421 15 2.1846e-06 14.7314 2.19777e-06 14.4L2.74615e-06 0.6C2.75932e-06 0.268629 0.244211 -4.07115e-08 0.545457 -2.62268e-08Z" fill="#828282"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4545 7C19.7558 7 20 7.26863 20 7.6L20 14.4C20 14.7314 19.7558 15 19.4545 15C19.1533 15 18.9091 14.7314 18.9091 14.4L18.9091 7.6C18.9091 7.26863 19.1533 7 19.4545 7Z" fill="#828282"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20 7.59995C20 7.93132 19.7558 8.19995 19.4545 8.19995L0.545454 8.19995C0.244208 8.19995 -5.96046e-07 7.93132 -5.96046e-07 7.59995C-5.96046e-07 7.26858 0.244208 6.99995 0.545454 6.99995L19.4545 6.99995C19.7558 6.99995 20 7.26858 20 7.59995Z" fill="#828282"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20 10.6C20 10.9313 19.7558 11.2 19.4545 11.2L0.545454 11.2C0.244208 11.2 -5.96046e-07 10.9313 -5.96046e-07 10.6C-5.96046e-07 10.2686 0.244208 9.99995 0.545454 9.99995L19.4545 9.99995C19.7558 9.99995 20 10.2686 20 10.6Z" fill="#828282"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.89999 4.2H16.9C17.3418 4.2 17.7 4.55817 17.7 5V7H18.9V5C18.9 3.89543 18.0046 3 16.9 3H6.89999C5.79542 3 4.89999 3.89543 4.89999 5V7H6.09999V5C6.09999 4.55817 6.45817 4.2 6.89999 4.2Z" fill="#828282"/>
                                    <circle cx="3" cy="5" r="1.5" fill="#828282"/>
                                     </svg>عدد غرف النوم:
                                    {{$post->rooms_number}}غرفة
                                    @endif
                            </div>
                        </div>
                        <p class="row dir mt-4 action">
                            <a href="#" class="icon-link col mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal{{$post->id}}" data-bs-whatever="@mdo"><i class="far fa-comments"></i> 150 </a>

                            <a href="#" class="icon-link col  mt-2"><i class="far fa-heart" onclick="myFunction(this)"></i> 503</a>

                            <a href="#" class="icon-link col  mt-2"><i class="far fa-thumbs-up" onclick="myFunction1(this)"  ></i> 503</a>
                        </p>
                        <a href="#" class="btn btn-post btn--with-icon">عرض المنشور<i class=" fas fa-arrow-left"></i></a>
                        <br>
                        <div class="mt-2 text-center" style="float: left;width: 100px; height: 30px; background-color: #fff8fc; ">
                            <i class="far fa-edit icon1 m-1" style="color: rgb(153, 118, 148);"></i>
                            <i class="far fa-trash-alt icon1 m-1" style="color: rgb(211, 102, 102);"></i>

                        </div>
                    </div>
                </article>
            </div>
          
        </div>
    </div>
    </div>
    <!---------------------------------------popup comment------------------------------------>
    <div class="modal fade" id="exampleModal{{$post->id}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <h2 class="address-cv mt-3">التعليقات</h2>
                <div class="modal-body dir">
                   @foreach($post->Comment as $c)
                    <div class="d-flex justify-content-center row">
                        <div class="col-md-12">
                            <div class="d-flex flex-column comment-section">
                                <div class="bg-white p-2">
                                    <div class="d-flex flex-row user-info">
                                        <a href="#" class="del" data-tip="delete" style="color: var(--text-color2);"><i class="fa fa-times m-1"></i></a>
                                        <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                                        <div class="d-flex flex-column justify-content-start m-2">
                                            <span class="d-block font-weight-bold name">Marry Andrews</span>
                                            <span class="date text-black-50">Shared publicly - Jan 2020</span>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <p class="comment-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="action dir p-4">
                    <div>
                        <div class="d-flex flex-row align-items-start">
                            <img class="rounded-circle" src="https://i.imgur.com/RpzrMR2.jpg" width="40">
                            <textarea class="form-control shadow-none textarea" placeholder="اكتب تعليقاً"></textarea>
                            <a href="" style="font-size: 30px;color: #822492;"><i class="fas fa-chevron-circle-left"></i></a>

                        </div>
                    </div>
                    <button class="btn btn-1 mt-4" style="border:2px solid #822492; float: left;" data-bs-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
            @else
            <label>No posts</label>
    @endif
    {{ $posts->links("pagination::bootstrap-4") }}


    <script>
        function myFunction(x) {
            x.classList.toggle("fa-thumbs-up");
        }

        function myFunction1(y) {
            y.classList.toggle("fa-heart");
        }
    </script>
    <script src="bootstrap-5.1.3\dist\js\bootstrap.min.js"></script>
</body>

</html>
