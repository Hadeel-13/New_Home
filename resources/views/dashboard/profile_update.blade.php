<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Home | Edit Profile</title>
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/libraries/bootstrap-5.1.3-dist/css/colors.css" />
    <link rel="stylesheet" href="../libraries/fontawesome-free-6.1.1-web/css/all.min.css" />
    <!-- International Telephone Input Validation -->
    <link rel="stylesheet" href="libraries/intl-tel-input\build\css\demo.css">
    <link rel="stylesheet" href="libraries/intl-tel-input\examples\css\prism.css">
    <link rel="stylesheet" href="libraries/intl-tel-input\build\css\intlTelInput.min.css">
    <style>
        .btn-gradient {
            transition: 0.5s;
            background-size: 200% auto;
            box-shadow: 0 0 20px #eee;
            background-image: linear-gradient(to right, var(--Second-color) 0%, #d541b0ea 51%, var(--Second-color) 100%);

        }

        .btn-gradient:hover {
            background-position: right center;
        }
        .btn-check:focus+.btn,
        .btn:focus,
        .btn:hover {
            outline: 0;
            /* color: white; */
            box-shadow: 0 0 0 0.25rem #82498c41;
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

        .btn:active {
            transform: scale(0.97);
            --bs-body-font-family: var(--bs-font-sans-serif) !important;
        }

        .btn-gradient {
            transition: 0.5s;
            background-size: 200% auto;
            box-shadow: 0 0 20px #eee;
            background-image: linear-gradient(to right,
                    var(--Second-color) 0%, #d541b0ea 51%, var(--Second-color) 100%);
        }

        .btn-gradient:hover {
            background-position: right center;
        }

        h1 {
            text-align: center;
            padding: 0;
            margin: 0 0 20px 0;
            position: relative;
            /* color: var(--text-color2); */
        }

        /* ===[ Here comes to good stuff : content styling ]=== */
        #content {
            max-width: 500px;
            min-height: 200px;
            position: relative;
            margin: 25px auto;
            z-index: 100;
            padding: 30px;
            border: 1px solid #a49eac;
            /* My stipped background */
            background: var(--primary-color-light);
            /* FF3.6+ */
            background: repeating-linear-gradient(-45deg, #a49eac, #a49eac 30px, #fff 30px, #fff 40px, #9c27be 40px, #9c27be 70px, #fff 70px, #fff 80px);
            /*border-radius*/
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
            /*box-shadow*/
            -webkit-box-shadow: 0px 1px 6px #3f3f3f;
            -moz-box-shadow: 0px 1px 6px #3f3f3f;
            box-shadow: 0px 1px 6px #3f3f3f;
        }

        /* my "fake" background that will hover the stripes */
        #content form {
            z-index: 101;
        }

        #content:after {
            background: #fff;
            margin: 10px;
            position: absolute;
            content: " ";
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            z-index: -1;
            border: 1px #e5e5e5 solid;
            /*border-radius*/
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
        }

        #display_image {
            width: 100px;
            height: 100px;
            background-size: cover;
            background-position: center;
            background-image: url(Images/svg/icon/circle-user_secondary.svg);
        }

        .img-choose {
            transition: 0.5s;
            max-width: max-content;
            background-size: 200% auto;
        }

        /* * Styling the send button *
   ================================================== */
        #postcard {
            z-index: 102;
            margin: 50px auto;
            position: absolute;
            transform: scale(1.2) rotate(30deg);
            left: 650px;
            width: 530px;
            height: 600px;
        }

        .move {
            animation-duration: 4s;
            animation-timing-function: ease-in-out;
            animation-delay: 1s;
            animation-direction: alternate;
            animation-fill-mode: forwards;
            animation-iteration-count: 1;
            animation-play-state: running;
            animation-name: anim;
        }

        @keyframes anim {
            from {
                left: 650px;
                transform: scale(1.2) rotate(30deg);
                z-index: 102;
            }

            50% {
                left: 1150px;
                top: -200px;
                transform: scale(0.8) rotate(45deg);
                z-index: 102;
            }

            75% {
                left: 1000px;
                top: -200px;
                transform: scale(0.8) rotate(45deg);
                z-index: 1;
            }

            to {
                left: 650px;
                transform: scale(1) rotate(20deg);
                z-index: 1;
            }
        }

        @keyframes animTabletHor {
            from {
                left: 450px;
                transform: scale(1.2) rotate(30deg);
                z-index: 102;
            }

            50% {
                left: 950px;
                top: -200px;
                transform: scale(0.8) rotate(45deg);
                z-index: 102;
            }

            75% {
                left: 700px;
                top: -200px;
                transform: scale(0.8) rotate(45deg);
                z-index: 1;
            }

            to {
                left: 450px;
                transform: scale(1) rotate(20deg);
                z-index: 1;
            }
        }

        @keyframes animTablet {
            from {
                left: 250px;
                transform: scale(1.2) rotate(28deg);
                z-index: 102;
            }

            50% {
                left: 800px;
                top: -200px;
                transform: scale(0.8) rotate(45deg);
                z-index: 102;
            }

            75% {
                left: 600px;
                top: -200px;
                transform: scale(0.8) rotate(45deg);
                z-index: 1;
            }

            to {
                left: 300px;
                transform: scale(1) rotate(20deg);
                z-index: 1;
            }
        }

        @keyframes animPhone {
            from {
                transform: scale(1.2) rotate(360deg);
            }

            25% {
                transform: scale(1) rotate(0deg);
            }

            50% {
                transform: scale(0.8) rotate(0deg);
                top: -550px;
                z-index: 102;
            }

            75% {
                transform: scale(0.9) rotate(0deg);
                top: -200px;
                z-index: 1;
            }

            to {
                transform: scale(0.8) rotate(0deg);
                top: -100px;
                z-index: 1;
            }
        }

        @media (min-width: 981px) and (max-width: 1280px) {
            #postcard {
                left: 450px;
            }

            .move {
                animation-name: animTabletHor;
            }
        }

        @media (min-width: 768px) and (max-width: 980px) {
            #postcard {
                transform: scale(1.1) rotate(0deg);
                left: 250px;
            }

            .move {
                animation-name: animTablet;
            }
        }

        @media (max-width: 767px) {
            #postcard {
                left: auto;
                top: 0px;
            }

            .move {
                animation-name: animPhone;
            }
        }
    </style>
</head>

<body class="bd-gray-100">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 d-flex flex-column align-items-center justify-content-center bg-white">
            <img class="d-none d-lg-block d-xl-block" src="Images\svg\illustrations\editProfile.gif" width="450" alt="img">
            </div>
            <div class="col-lg-6 col-md-12 d-flex flex-column align-items-center">
            <!-- <img id="postcard" src="" alt="postcard" class="img-responsive move" /> -->
            <div id="content">
                <h1>المعلومات الشخصية</h1>
                <form id="MessageForm" name="MessageForm" dir="rtl" class="form row m-auto needs-validation" method="post" action="/profile_update_save"  enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="col-12">
                        <div class="row mx-auto rounded-circle" id="display_image"></div>
                        <label class="btn d-flex justify-content-center img-choose bg-purple text-white mx-auto my-4 px-2 rounded-pill">
                            اختر
                            صورة
                            شخصية<input type="file" id="image_input" class="form-control" name="user_img" style="display: none;" accept=".jpg,.png,.jpeg,.gif,.svg"></label>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <label class="form-label fw-bold">اسم المستخدم:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="far fa-user"></i></span>
                                    <input type="text" name="user_name" value="{{Auth::user()->name}}" id="userName"  class="form-control rounded-0" min="1" max="50" required>
                                </div>
                                <div class="invalid-feedback" id="feedback-username">يجب أن يكون مؤلفاً من خمسة محارف على الأقل ولا يبدأ بـ . أو _ أو رقم ولا ينتهي بـ . أو _ </div>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="form-label fw-bold">البريد الالكتروني:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                    <input type="text" class="form-control rounded-0" name="email" value="{{Auth::user()->email}}" id="email" min="1" max="50" value="" required>
                                </div>
                                <div class="valid-feedback"></div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="row">
                                    <label for="phone" class="form-label fw-bold">رقم الجوال:</label>
                                    <div class="input-group mb-3">
                                        <input id="phone" placeholder="09XXXXXXX" name="phone" value="{{Auth::user()->phone}}" class="form-control shadow-sm text-end w-auto" type="tel" dir="ltr" onkeypress="return(event.charCode>=48 && event.charCode<=57)" required>
                                    </div>
                                    <div class="row">
                                        <div id="valid-msg" class="hide"></div>
                                        <!--✓ Valid-->
                                        <div id="error-msg" class="hide"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row flex-column align-items-end">
                                <button type="submit" class="btn bg-purple text-white rounded-pill px-3" style="max-width: max-content;">تحديث</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="libraries/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="libraries/intl-tel-input/build/js/intlTelInput.js"></script>
    <script>
         // username
         var userName = document.getElementById("userName");
        var feedbackusername = document.getElementById("feedback-username");
        document.getElementById("userName").onblur = function() {
            if (/^(?=.{5,20}$)(?![_.0-9])(?!.*[_.]{2})[a-zA-Z0-9أ-ي._]+(?<![_.])$/i.test(userName.value)) {
                userName.classList.remove("is-invalid");
                userName.classList.add("is-valid");
                feedbackusername.style.display = "none";
            } else {
                userName.classList.add("is-invalid");
                feedbackusername.style.display = "block";
            }
        };

        //uploaded_image
        const image_input = document.querySelector("#image_input");
        var uploaded_image;
        image_input.addEventListener('change', function() {
            const reader = new FileReader();
            reader.addEventListener('load', () => {
                uploaded_image = reader.result;
                document.querySelector("#display_image").style.backgroundImage =
                    `url(${uploaded_image})`;
            });
            reader.readAsDataURL(this.files[0]);
        });
        const dropdownElementList = document.querySelectorAll('.dropdown-toggle');
        const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(
            dropdownToggleEl));
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
            tooltipTriggerEl));
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
                    if (document.getElementById("feedback-username").style.display == "block") {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("userName").classList.add("is-invalid");
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
        }; // on blur: validate
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
    </script>
</body>

</html>
