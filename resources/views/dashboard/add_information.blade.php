@extends('dashboard.sidenavbar')
@section('content')
<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no" />
    <title>New Home | Add EMPLOYEE</title>
    <!-- International Telephone Input Validation -->
    <link rel="stylesheet" href="libraries/intl-tel-input\build\css\demo.css">
    <link rel="stylesheet" href="libraries/intl-tel-input\examples\css\prism.css">
    <link rel="stylesheet" href="libraries/intl-tel-input\build\css\intlTelInput.min.css">
    <style>
        body {
            background-color: var(--color-lighten);
            background-image: url("Images/svg/bg/bgNH.png");
            background-repeat: repeat-y;
        }

        #regForm {
            /* min-width: 200px; */
            max-width: 800px;
        }

        @media (max-width:500px) {
            #regForm {
                padding-left: 1% !important;
                padding-right: 5% !important;
            }
        }

        .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-left: -1 !important;
            border-top-left-radius: 0rem !important;
            border-bottom-left-radius: 0rem !important;
            border-top-right-radius: 0 !important;
            border-bottom-right-radius: 0 !important;
        }

        .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
        .input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu) {
            margin-left: -1px !important;
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
            border-top-right-radius: .25rem !important;
            border-bottom-right-radius: .25rem !important;
        }
    </style>
</head>

<body>
    <section dir="rtl">
        <div class="container">
            <div class="row shadow my-4 py-4">
                <div class="col-sm-6">
                    <div class="d-none d-sm-block fs-4 fw-bold text-end">حول الموقع</div>
                </div>
                <div class="col-sm-6" dir="ltr">
                    <div class="d-flex justify-content-start align-items-center">
                        <div class="dropdown me-4">
                            <span class="dropdown-toggle ms-1 rounded-circle" data-bs-toggle="dropdown">
                                @if( Auth::user()->image_url != null)
                                <img src="../Images/user/{{ Auth::user()->image_url }}" alt="img" class="rounded-circle" width="30px" style="object-fit:cover;" />
                                @else
                                <img src="../Images/svg/icon/circle-user.svg" alt="img" class="rounded-circle" width="30px" style="object-fit:cover;" />
                                @endif
                            </span>
                            <ul class="dropdown-menu mt-4 text-end">
                                </li>
                                <li><a class="dropdown-item">المفضلة&nbsp;<i class="fas fa-heart text-muted"></i></a>
                                <li><a class="dropdown-item" href="{{route('admin.profile')}}">الملف الشخصي&nbsp;<i class="fas fa-user-cog text-muted"></i></a>
                                </li>
                                </li>
                                <li><a class="dropdown-item" href="AddRE">إنشاء منشور&nbsp;
                                        <i class="fa-solid fa-circle-plus text-muted"></i></a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">تسجيل
                                        الخروج&nbsp;
                                        <i class="fas fa-sign-out-alt text-muted"></i></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <a data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="ابحث" title="ابحث" href="search">
                            <i class="fas fa-search fs-5 me-3 link-dark"></i></a>
                        <!-- <span class="px-2 position-relative ms-2" data-bs-toggle="modal" data-bs-target="#notification"><i class="fas fa-bell fs-5"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger placeholder">
                                9
                            </span>
                        </span> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <form class="form shadow bg-body rounded p-5 mx-auto mt-5 g-3 needs-validation" novalidate id="regForm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label fw-bold">البريد الالكتروني:</label>
                    <div class="input-group shadow-sm mb-3">
                        <span class="input-group-text"><i class="far fa-envelope fs-5"></i></span>
                        <input type="email" class="form-control rounded-0" id="email" min="1" max="50" value="{{$about->email}}" required>
                    </div>
                    <div class="valid-feedback"></div>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">العنوان:</label>
                    <div class="input-group shadow-sm mb-3">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt fs-5"></i></span>
                        <input type="text" onkeypress="return /[أ-ي1-9 ]/i.test(event.key);" class="form-control rounded-0" id="address" min="5" max="50" value="{{$about->address}}" required>
                    </div>
                    <div class="valid-feedback"></div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="row">
                        <label for="phone" class="form-label fw-bold">رقم الجوال:</label>
                        <div class="input-group mb-3">
                            <input id="phone" name="phone" class="form-control shadow-sm text-end" type="tel" dir="ltr" onkeypress="return(event.charCode>=48 && event.charCode<=57)" value="{{$about->phone}}" required>
                        </div>
                        <div class="row">
                            <div id="valid-msg" class="hide"></div>
                            <!--✓ Valid-->
                            <div id="error-msg" class="hide"></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 mb-2">
                    <label class="form-label fw-bold">حول:</label>
                    <textarea type="text" class="form-control shadow-sm" id="about" rows="3" min="1" max="100" required>{{$about->about}}</textarea>
                </div>
            </div>
            <div class="row flex-column align-items-end">
                <button class="btn btn-gradient text-white rounded-pill my-3" style="max-width: max-content;" id="addabout" type="submit">تحديث</button>
            </div>
        </div>
    </form>
    <script src="libraries/intl-tel-input/build/js/intlTelInput.js"></script>
    <script src="libraries/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
    <script>
        document.querySelectorAll(".nav_link")[6].classList.add("myactive");
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        (() => {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    if (document.getElementById("error-msg").textContent != "") {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("phone").classList.add("is-invalid");
                        return;
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
        //Script International Telephone Input Validation
        var input = document.querySelector("#phone"),
            errorMsg = document.querySelector("#error-msg"),
            validMsg = document.querySelector("#valid-msg");
        // here, the index maps to the error code returned from getValidationError - see readme
        var errorMap = [
            "الرقم خاطئ",
            "رمز البلد خاطئ",
            "عدد الأرقام غير مكتمل",
            "عدد الأرقام أكثر من المطلوب",
            "الرقم خاطئ",
        ];
        // initialise plugin
        var iti = window.intlTelInput(input, {
            allowDropdown: false,
            autoHideDialCode: false,
            // autoPlaceholder: "off",
            dropdownContainer: document.body,
            excludeCountries: ["us"],
            formatOnDisplay: false,
            // geoIpLookup: function (callback) {
            // 	$.get("http://ipinfo.io", function () { }, "jsonp").always(function (resp) {
            // 		var countryCode = (resp && resp.country) ? resp.country : "";
            // 		callback(countryCode);
            // 	});
            // },
            // hiddenInput: "full_number",
            localizedCountries: {
                de: "Deutschland",
            },
            nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            placeholderNumberType: "MOBILE",
            separateDialCode: true,
            utilsScript: "libraries/intl-tel-input/build/js/utils.js",
            initialCountry: "sy",
            preferredCountries: ["sy", ""],
        });
        var reset = function() {
            input.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
            validMsg.classList.add("hide");
        };
        // on blur: validate
        input.addEventListener("blur", function() {
            reset();
            if (input.value.trim()) {
                if (iti.isValidNumber()) {
                    validMsg.classList.remove("hide");
                    document.querySelector("#phone").classList.remove("alert-danger");
                } else {
                    input.classList.add("error");
                    var errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                }
            }
        });
        // كود إضافة معلومات
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '#addabout', function() {

                var email = $('#email').val();
                var phone = $('#phone').val();
                var address = $('#address').val();
                var about = $('#about').val();

                $.ajax({
                    type: "post",
                    url: "/save_information",
                    data: {
                        'email': email,
                        'phone': phone,
                        'address': address,
                        'about': about,
                    },
                    success: function(res) {
                        if (res.status == 200) {
                            alert(res.message);
                        } else {
                            alert(res.status);

                        }
                    }
                });
            });
        });
    </script>
</body>

</html>

@endsection
