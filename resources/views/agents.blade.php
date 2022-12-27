@extends('header&&footer')
@section('content')
<!DOCTYPE html>
<html lang="ar">

<head>
    <link rel="stylesheet" href="libraries/swiper/swiper-bundle.min.css">
    <style>
        /**************** section3: Employees ****************/
        .card-img {
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid var(--Second-color);
        }
        .card:hover {
            top: -2px;
        }
    </style>
</head>

<body>
    <!--section3: Employees-->
    <section class="bd-gray-100  py-5">
        <div dir="rtl" class="container d-flex flex-column justify-content-center">
            <h2 class="title_section text-center pb-5"><strong class="position-relative ">الموظفين</strong></h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 mt-3 border-4">
                @foreach($agents as $agent)
                <div class="col">
                    <div class="card bg-body shadow mb-5" style="border-radius: 25px;">
                        <div class="d-flex flex-column align-items-center position-relative py-4">
                            <span class=" position-absolute start-0 top-0 h-100 w-100 bg-purple" style="border-radius: 25px 25px 0 25px;"></span>
                            <div class="position-relative bg-body p-1" style="height: 150px; width: 150px; border-radius: 50%;">
                               <a href="/Profile_anotheruser/{{$agent->user_id}}"><img class="card-img h-100 w-100 placeholder" src="Images/user/{{$agent->user->image_url}}" alt="img"></a>
                            </div>
                        </div>
                        <div class="card-content d-flex flex-column p-3 text-start">
                            <h5 class="align-self-center fw-bold py-2 placeholder">{{$agent->first_name}} {{$agent->last_name}}</h5>
                            <p class="align-self-start">
                                <i class="far fa-envelope fs-5 text-muted placeholder" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="البريد الإلكتروني" title="البريد الإلكتروني"></i>
                                <span class="fs-6 placeholder">{{$agent->user->email}}</span>
                            </p>
                            <p class="align-self-start">
                                <i class="fas fa-phone fs-5 text-muted placeholder" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="رقم الجوال" title="رقم الجوال"></i>
                                <span class="placeholder">{{$agent->user->phone}}</span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <script src="libraries/swiper/swiper-bundle.min.js"></script>
    <script>
        let placeholders = document.querySelectorAll(".placeholder");
        window.onload = function() {
            for (placeholder of placeholders) {
                // console.log("placeholder");
                placeholder.classList.remove("placeholder");
                placeholder.classList.remove("disabled");
            }
        };
    </script>
</body>

</html>



@endsection
