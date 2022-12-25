@extends('dashboard.home')
@section('content')
<html>

<head>
    <meta charset="UTF-8" />
    <title>Messages</title>
    <link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
    <link href="bootstrap-5.1.3\dist\css\bootstrap.min.css" rel="stylesheet" />
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
            /*-------Colors----------*/
            --Background-color: #5c3463;
            --primary-color: #82498c;
            --text-color: #707070;
            --text-color2: #8c8c8c;
        }

        body {
            background-color: #e9e9e9;
            font-family: 'Calibri', sans-serif !important;
        }

        .card {
            border-radius: 50px;
            box-shadow: 0px 5px 20px rgba(255, 146, 222, 0.7);
            padding: 10px;
        }

        h5 {
            color: #82498c;
        }

        .date {
            color: #616161;
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem
        }

        .comment-widgets .comment-row:hover {
            background: rgba(133, 75, 123, 0.15);
            transform: skewX(-10deg);
        }

        .comment-widgets .comment-row {
            padding: 15px;
            border: 1px solid rgba(255, 146, 222, 0.5);
            border-radius: 50px;
            box-shadow: 0px 5px 20px rgba(87, 87, 87, 0.5)
        }

        .comment-text:hover {
            visibility: hidden;
        }

        .comment-text:hover {
            visibility: visible;
        }

        .round img {
            border-radius: 100%;
            width: 100px;
        }

        .action-icons a {
            padding-left: 7px;
            vertical-align: middle;
            color: #99abb4;
        }

        .mt-100 {
            margin-top: 100px
        }

        .mb-100 {
            margin-bottom: 100px
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center mt-100 mb-100">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">أحدث الرسائل</h4>
                        <h6 class="card-subtitle"></h6>
                    </div>

                    <div class="comment-widgets m-b-20" style="direction: rtl;">
                        @foreach($messages as $message)
                        <div class="d-flex flex-row comment-row m-2">
                            <div class="p-2"><span class="round">@if($message->user->image_url!=null)<img src="images/{{$message->user->image_url}}" alt="user" width="50">@else<img src="images/user.jpg" alt="user" width="50">@endif</span></div>
                            <div class="comment-text w-100">
                                <h5>{{$message->user->name}}</h5>
                                <div class="comment-footer">
                                    <span class="date mb-1">{{$message->created_at}}</span>
                                </div>
                                <p class="m-b-5 m-t-10">{{$message->content}}Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
                                    College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{ $messages->links("pagination::bootstrap-4") }}
    
</body>

</html>
@endsection