<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Update_Agent</title>
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/colors.css" />
    <link rel="stylesheet" href="../libraries/fontawesome-free-6.1.1-web/css/all.min.css" />
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

        .zigzag::after {
            content: "";
            position: absolute;
            right: 0;
            width: 100%;
            height: 30px;
            z-index: 1;
            background-image: linear-gradient(135deg, white 25%, transparent 25%), linear-gradient(225deg, white 25%, transparent 25%);
            background-size: 30px 30px;
        }
    </style>
</head>

<body class="">
    <!-- offcanvas Add employee-->
    <section class="row col-12">
        <div class="fw-bold mt-2 fs-3 text-center">تعديل بيانات الموظف</div>
    </section>
    <section class="bd-gray-100">
        <div class="zigzag"></div>
        <div class="w-100" tabindex="-1" id="addemployee" dir="rtl">
            <form class="form shadow bg-body rounded p-5 mx-auto mt-5 g-3 needs-validation" novalidate id="regForm" method="post" action="/agent_update_save">
                @csrf
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-bold">الاسم:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">F</span>
                                <input type="text" id="firstname" autocomplete="off" onkeypress="return /[ أ-ي]/i.test(event.key);" class="form-control rounded-0" id="firstName" min="2" max="30" value="{{$agent->first_name}}" name="first_name" required>
                            </div>
                            <div class="invalid-feedback" id="feedback-firstname">يجب أن يتألف الاسم من محرفين على الأقل</div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-bold">الكنية:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">L</span>
                                <input  name='id' value="{{$agent->id}}" type="hidden">
                                <input type="text" id="lastname" onkeypress="return /[ أ-ي]/i.test(event.key);" class="form-control rounded-0" id="lastName" min="2" max="30" value="{{$agent->last_name}}" name="last_name" required>
                            </div>
                            <div class="invalid-feedback" id="feedback-lastname">يجب أن تتألف الكنية من محرفين على الأقل</div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-bold">تاريخ الميلاد:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-calendar-day"></i></span>
                                <input type="date" class="form-control rounded-0 text-end" id="birthday" value="{{$agent->birthday}}" name="birthday" required>
                            </div>
                            <div class="invalid-feedback" id="feedback-birthday">يجب أن يكون تاريخ الميلاد بين 1972 و 2004</div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-bold">الجنس:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-venus-mars"></i></span>
                                <select class="form-select " name="gender" required>
                                    <option selected disabled value="">اختر؟</option>
                                    <option value='1' {{($agent->gender ==1)?'selected':null}}>ذكر</option>
                                    <option value='0' {{($agent->gender ==0)?'selected':null}}>أنثى</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label fw-bold">العنوان:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                <input type="text" id="address" class="form-control rounded-0" id="" min="5" max="20" onkeypress="return /[أ-ي1-9 ]/i.test(event.key);" value="{{$agent->address}}" name="address" required>
                            </div>
                            <div class="invalid-feedback" id="feedback-address">يجب أن يتألف العنوان من ثلاثة محارف على الأقل</div>
                        </div>
                    </div>
                </div>
                <div class="row flex-column align-items-end">
                    <button class="btn btn-2 btn-cards rounded-pill my-3" style="width: 150px;" type="submit">حفظ</button>
                </div>
            </form>
        </div>
    </section>
    <script src="libraries/bootstrap-5.1.3-dist/js/jquery-3.6.0.min.js"></script>
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
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

        document.querySelectorAll(".nav_link")[4].classList.add("active");
        const dropdownElementList = document.querySelectorAll('.dropdown-toggle');
        const dropdownList = [...dropdownElementList].map(dropdownToggleEl => new bootstrap.Dropdown(dropdownToggleEl));
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

        //for Popover
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        });
    </script>
</body>

</html>