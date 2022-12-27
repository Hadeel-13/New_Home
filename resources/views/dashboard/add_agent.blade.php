<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Add_Agent</title>
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/colors.css" />
    <link rel="stylesheet" href="../libraries/fontawesome-free-6.1.1-web/css/all.min.css" />
    <!-- International Telephone Input Validation -->
    <link rel="stylesheet" href="libraries/intl-tel-input\build\css\demo.css">
    <link rel="stylesheet" href="libraries/intl-tel-input\examples\css\prism.css">
    <link rel="stylesheet" href="libraries/intl-tel-input\build\css\intlTelInput.min.css">
    <style>
        :root {
            /* *************** Colors *************** */
            --body-color: #fefaff;
            --text-color: #23004d;
            --first-color: #82498c;
            --Second-color: #9c27be;
            --Third-color: #a501a5;
            --fourth-color: #ff97bb;
            --fifth-color: #9d4bff;
            --Background-color: #5c3463;
            --color-light: #a49eac;
            --color-lighten: #f2f2f2;
            /* *************** Font and typography *************** */
            --tiny-font-size: 0.625rem;
            /*-------Transition-------*/
            --tran-02: all 0.2s ease;
            --tran-03: all 0.3s ease;
            --tran-04: all 0.4s ease;
            --tran-05: all 0.5s ease;
        }

        body {
            background-image: url("Images/svg/bg/bgNH.png");
        }

        #regForm {
            min-width: 300px;
            max-width: 800px;
        }

        /**************** button ****************/
        .btn:active {
            transform: scale(0.97);
            --bs-body-font-family: var(--bs-font-sans-serif) !important;
        }

        .btn:disabled {
            cursor: not-allowed;
            background-color: var(--line-border-empty);
        }

        .btn-check:focus+.btn,
        .btn:focus,
        .btn:hover {
            outline: 0;
            color: white;
            box-shadow: 0 0 0 0.25rem #82498c41;
        }

        .btn-2 {
            background-image: linear-gradient(to right, var(--Second-color) 0%, #d541b0ea 51%, var(--Second-color) 100%);
        }

        .btn-cards {
            transition: 0.5s;
            background-size: 200% auto;
            color: var(--color-lighten);
            box-shadow: 0 0 20px #eee;
        }

        .btn-cards:hover {
            background-position: right center;
        }

        .btn-purple:hover {
            background: var(--body-color) !important;
            border: 1px solid var(--Second-color) !important;
            color: var(--Second-color) !important;
        }

        #display_image {
            width: 100px;
            height: 100px;
            background-position: center;
            background-size: cover;
            background-image: url(Images/svg/icon/circle-user_secondary.svg);
        }

        .img-choose {
            width: 160px;
            display: flex;
            justify-content: center;
            transition: 0.5s;
            background-size: 200% auto;
            color: black;
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
        }

        .img-choose:hover {
            cursor: pointer;
            background-position: right center;
            /* change the direction of the change here */
            color: var(--color-lighten);
        }

        .form-control:focus,
        .form-check-input:focus,
        .form-select:focus {
            border-color: var(--Second-color);
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
    </style>
</head>

<body class="bd-gray-100">
    <!-- offcanvas Add employee-->
    <div class="w-100" tabindex="-1" id="addemployee" dir="rtl">
        <div class="fw-bold mt-2 fs-3 text-center">إضافة بيانات الموظف</div>
        <form class="form shadow bg-body rounded p-5 mx-auto mt-5 g-3 needs-validation" novalidate id="regForm" method="post" action="/save_agent" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <div class="row mx-auto rounded-circle" id="display_image"></div>
                <label class="btn bg-purple text-white row img-choose mx-auto my-4 p-1 rounded-pill">اختر صورة
                    شخصية<input type="file" id="image_input" class="form-control" name="employee_img" style="display: none;" accept=".jpg,.png,.jpeg,.gif,.svg"></label>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label class="form-label fw-bold">الاسم:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">F</span>
                            <input type="text" id="firstname" autocomplete="off" onkeypress="return /[ ءأ-ي]/i.test(event.key);" class="form-control rounded-0" id="firstName" name="first_name" min="2" max="30" required>
                        </div>
                        <div class="invalid-feedback" id="feedback-firstname">يجب أن يتألف الاسم من محرفين على الأقل</div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label fw-bold">الكنية:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">L</span>
                            <input type="text" id="lastname" onkeypress="return /[ أ-يء]/i.test(event.key);" class="form-control rounded-0" id="lastName" min="2" name="last_name" max="30" required>
                        </div>
                        <div class="invalid-feedback" id="feedback-lastname">يجب أن تتألف الكنية من محرفين على الأقل</div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label fw-bold">اسم المستخدم:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                            <input type="text" class="form-control rounded-0" id="userName" value="." min="4" max="30" name="user_name" required>
                        </div>
                        <div class="invalid-feedback" id="feedback-username">يجب أن يكون مؤلفاً من أربع محارف على الأقل ولا يبدأ بـ . أو _ أو رقم ولا ينتهي بـ . أو _ </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label fw-bold">البريد الالكتروني:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            <input type="email" id="email" class="form-control rounded-0 @error('email') is-invalid @enderror" min="8" max="30" value="" name="email" value="{{ old('email') }}" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label fw-bold">كلمة المرور :</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" id="password" class="form-control rounded-0 @error('password') is-invalid @enderror" min="8" max="30" name="password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="invalid-feedback" id="feedback-password">يجب أن تتألف كلمة المرور من ثمانية محارف على الأقل</div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label fw-bold">تأكيد كلمة المرور:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" id="confirmpassword" class="form-control rounded-0  @error('password_confirmation') is-invalid @enderror" min="5" max="30" name="password_confirmation" required>
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="invalid-feedback" id="feedback-password2">يجب أن تتألف كلمة المرور من ثمانية محارف على الأقل</div>
                    </div>
                    <div class="invalid-feedback" id="feedback-notsame">يجب أن تكون كلمة المرور متماثلة في الدخلين.</div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label fw-bold">تاريخ الميلاد:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
                            <input type="date" class="form-control rounded-0 text-end" id="birthday" name="birthday" required>
                        </div>
                        <div class="invalid-feedback" id="feedback-birthday">يجب أن يكون تاريخ الميلاد بين 1972 و 2004</div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label fw-bold">الجنس:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i></span>
                            <select class="form-select " name="gender" required>
                                <option selected disabled value="">اختر؟</option>
                                <option value="1">ذكر</option>
                                <option value="0">أنثى</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label class="form-label fw-bold">العنوان:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                            <input type="text" id="address" class="form-control rounded-0" id="" min="5" max="20" onkeypress="return /[أ-ي1-9 ء]/i.test(event.key);" name="address" required>
                        </div>
                        <div class="invalid-feedback" id="feedback-address">يجب أن يتألف العنوان من ثلاثة محارف على الأقل</div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="row">
                            <label for="phone" class="form-label fw-bold">رقم الجوال:</label>
                            <div class="input-group mb-3">
                                <input placeholder="09XXXXXXX" id="phone" name="phone" class="form-control shadow-sm text-end" type="tel" dir="ltr" onkeypress="return(event.charCode>=48 && event.charCode<=57)" required>
                            </div>
                            <div class="row">
                                <div id="valid-msg" class="hide"></div>
                                <!--✓ Valid-->
                                <div id="error-msg" class="text-danger" class="hide"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-column align-items-end">
                <button class="btn btn-2 btn-cards rounded-pill my-3" style="width: 150px;" type="submit">حفظ</button>
            </div>
        </form>
    </div>
    <script src="libraries/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="libraries/intl-tel-input/build/js/intlTelInput.js"></script>
    <script>
        // firstname
        document.getElementById("firstname").onblur = function() {
            if (document.getElementById("firstname").value.length >= 2) {
                document.getElementById("firstname").classList.remove("is-invalid");
                document.getElementById("firstname").classList.add("is-valid");
                document.getElementById("feedback-firstname").style.display = "none";
            } else {
                document.getElementById("firstname").classList.add("is-invalid");
                document.getElementById("feedback-firstname").style.display = "block";
            }
        };
        // lastname
        document.getElementById("lastname").onblur = function() {
            if (document.getElementById("lastname").value.length >= 2) {
                document.getElementById("lastname").classList.remove("is-invalid");
                document.getElementById("lastname").classList.add("is-valid");
                document.getElementById("feedback-lastname").style.display = "none";
            } else {
                document.getElementById("lastname").classList.add("is-invalid");
                document.getElementById("feedback-lastname").style.display = "block";
            }
        };
        // address
        document.getElementById("address").onblur = function() {
            if (document.getElementById("address").value.length >= 3) {
                document.getElementById("address").classList.remove("is-invalid");
                document.getElementById("address").classList.add("is-valid");
                document.getElementById("feedback-address").style.display = "none";
            } else {
                document.getElementById("address").classList.add("is-invalid");
                document.getElementById("feedback-address").style.display = "block";
            }
        };
        // password
        document.getElementById("password").onblur = function() {
            if (document.getElementById("password").value.length >= 8) {
                document.getElementById("password").classList.remove("is-invalid");
                document.getElementById("password").classList.add("is-valid");
                document.getElementById("feedback-password").style.display = "none";
            } else {
                document.getElementById("password").classList.add("is-invalid");
                document.getElementById("feedback-password").style.display = "block";
            }
        };
        // confirmpassword
        document.getElementById("confirmpassword").onblur = function() {
            if (document.getElementById("confirmpassword").value.length >= 8) {
                document.getElementById("confirmpassword").classList.remove("is-invalid");
                document.getElementById("confirmpassword").classList.add("is-valid");
                document.getElementById("feedback-password2").style.display = "none";
            } else {
                document.getElementById("confirmpassword").classList.add("is-invalid");
                document.getElementById("feedback-password2").style.display = "block";
            }
        };
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

        // birthday
        var birthday = document.getElementById("birthday");
        var feedback_birthday = document.getElementById("feedback-birthday");
        console.log(new Date().getFullYear());

        document.getElementById("birthday").onblur = function() {
            var year = new Date(document.getElementById("birthday").value).getFullYear();
            let currentyear = new Date();
            if (year <= currentyear.getFullYear() - 18 && year >= currentyear.getFullYear() - 50) {
                birthday.classList.remove("is-invalid");
                birthday.classList.add("is-valid");
                feedback_birthday.style.display = "none";
            } else {
                birthday.classList.add("is-invalid");
                feedback_birthday.style.display = "block";
            }
        };

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
                    if (document.getElementById("feedback-password").style.display == "block") {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("password").classList.add("is-invalid");
                        return;
                    }
                    if (document.getElementById("feedback-password2").style.display == "block") {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("confirmpassword").classList.add("is-invalid");
                        return;
                    }
                    if (document.getElementById("password").value != document.getElementById("confirmpassword").value) {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("feedback-notsame").style.display = "block";
                        return;
                    }
                    if (document.getElementById("feedback-username").style.display == "block") {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("userName").classList.add("is-invalid");
                        return;
                    }
                    if (document.getElementById("feedback-birthday").style.display == "block") {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("birthday").classList.add("is-invalid");
                        return;
                    }
                    if (document.getElementById("feedback-address").style.display == "block") {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("address").classList.add("is-invalid");
                        return;
                    }
                    if (document.getElementById("feedback-lastname").style.display == "block") {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("lastname").classList.add("is-invalid");
                        return;
                    }
                    if (document.getElementById("feedback-firstname").style.display == "block") {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("firstname").classList.add("is-invalid");
                        return;
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
        const dropdownElementList = document.querySelectorAll('.dropdown-toggle');
        const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl));
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
        //for Popover
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        });
        //search box
        $(document).ready(function() {
            $('#show').load('list.html');
        });
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
        //uploaded_image
        const image_input = document.querySelector("#image_input");
        var uploaded_image;
        image_input.addEventListener('change', function() {
            const reader = new FileReader();
            reader.addEventListener('load', () => {
                uploaded_image = reader.result;
                document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
            });
            reader.readAsDataURL(this.files[0]);
        });
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
        // on keyup / change flag: reset
        input.addEventListener("change", reset);
        input.addEventListener("keyup", reset);
    </script>
</body>

</html>
