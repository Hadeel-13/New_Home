<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <title>Created_Post</title>
    <link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
    <link href="bootstrap-5.1.0-dist/css/bootstrap.min.css" rel="stylesheet" />
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
            padding: 30px;
            position: relative;
            height: 500px;
            margin-bottom: 23%;
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
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .blog-card__info {
            z-index: 10;
            background: white;
            padding: 20px 15px;
        }
        
        .dir {
            direction: rtl;
        }
        
        .date__box:hover {
            transform: scale(1);
            margin-bottom: 40px;
            color: var(--primary-color);
        }
        
        .blog-card__info h5 {
            color: var(--primary-color);
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
        
        .btn {
            background: white;
            box-shadow: 1px 1px 3px 0 rgba(0, 0, 0, 0.5);
            border-radius: 0;
            height: 50px;
            line-height: 50px;
            padding: 0;
            border: none;
            direction: ltr;
            font-size: 18px;
            /* float: left; */
        }
        
        .btn:hover {
            background: #5c3463;
            color: #fff;
            transition: 500ms ease-in-out;
            margin-right: 20px;
        }
        
        .btn--with-icon {
            padding-left: 20px;
        }
        
        .btn--with-icon i {
            padding: 0px 30px 0px 15px;
            height: 50px;
            line-height: 50px;
            vertical-align: bottom;
            color: white;
            background: #5c3463;
            clip-path: polygon(30% 0, 100% 0, 100% 100%, 0% 100%);
        }
        
        .btn--only-icon {
            width: 50px;
        }
        
        @media (max-width: 560px) {
            .re {
                margin-bottom: 20%;
            }
        }
        
        @media (max-width: 410px) {
            .re {
                margin-bottom: 40%;
            }
        }
        
        @media (max-width: 367px) {
            .re {
                margin-bottom: 80%;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row dir">
            <div class="col-lg-6 col-md-12 col-sm-12 re">
                <article class="blog-card">
                    <div class="blog-card__background">
                        <div class="card__background--wrapper">
                            <div class="card__background--main" style="background-image: url('image/undraw_Social_sharing_re_pvmr.png');">
                                <div class="card__background--layer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card__head">
                        <span class="date__box">
              <span class="date__day">11</span>
                        <span class="date__month">JAN</span>
                        </span>
                    </div>
                    <div class="blog-card__info">
                        <h5 class="dir">HARVICK GETS WHAT HE NEEDS, JOHNSON AMONG THOSE</h5>
                        <p class="dir">
                            <a href="#" class="icon-link"><i class="far fa-comments"></i></a>
                            <a href="#" class="icon-link">150 </a>
                            <a href="#" class="icon-link"><i class="far fa-heart"></i></a>
                            <a href="#" class="icon-link"> 503</a>
                            <a href="#" class="icon-link"><i class="far fa-thumbs-up"></i> </a>
                            <a href="#" class="icon-link">503</a>
                        </p>
                        <p class="dir">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque vero libero voluptatibus earum? Alias dignissimos quo cum, nulla esse facere atque, blanditiis doloribus at sunt quas, repellendus vel? Et, hic!</p>
                        <a href="#" class="btn btn--with-icon">قراءة المزيد<i class=" fas fa-arrow-left"></i></a>
                    </div>
                </article>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 re">
                <article class="blog-card">
                    <div class="blog-card__background">
                        <div class="card__background--wrapper">
                            <div class="card__background--main" style="background-image: url('image/undraw_Social_sharing_re_pvmr.png');">
                                <div class="card__background--layer"></div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card__head">
                        <span class="date__box">
              <span class="date__day">11</span>
                        <span class="date__month">JAN</span>
                        </span>
                    </div>
                    <div class="blog-card__info">
                        <h5 class="dir">HARVICK GETS WHAT HE NEEDS, JOHNSON AMONG THOSE</h5>
                        <p class="dir">
                            <a href="#" class="icon-link"><i class="far fa-comments"></i></a>
                            <a href="#" class="icon-link">150 </a>
                            <a href="#" class="icon-link"><i class="far fa-heart"></i></a>
                            <a href="#" class="icon-link"> 503</a>
                            <a href="#" class="icon-link"><i class="far fa-thumbs-up"></i> </a>
                            <a href="#" class="icon-link">503</a>
                        </p>
                        <p class="dir">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque vero libero voluptatibus earum? Alias dignissimos quo cum, nulla esse facere atque, blanditiis doloribus at sunt quas, repellendus vel? Et, hic!</p>
                        <a href="#" class="btn btn--with-icon">قراءة المزيد<i class=" fas fa-arrow-left"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <section class="detail-page">
        <div class="container mt-5">

        </div>
    </section>
    <script src="bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>
    <script src="public/jquery.min.js"></script>
</body>

</html>