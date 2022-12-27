<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/colors.css" />
    <link rel="stylesheet" href="../libraries/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../libraries/fontawesome-free-6.1.1-web/css/all.min.css" />
    <title>New Home | Sign in</title>
    <style>
        .container1 {
            /* position: relative; */
            /* width: 100%; */
            /* background-color: #fff; */
            min-height: 100vh;
            /* overflow: hidden; */
        }

        .forms-container {
            /* position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0; */
        }

        .signin-signup {
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            left: 75%;
            width: 50%;
            transition: 1s 0.7s ease-in-out;
            display: grid;
            grid-template-columns: 1fr;
            z-index: 5;
        }

        form {
            /* display: flex; */
            /* align-items: center; */
            /* justify-content: center; */
            /* flex-direction: column; */
            padding: 0rem 5rem;
            transition: all 0.2s 0.7s;
            /* overflow: hidden; */
            grid-column: 1 / 2;
            grid-row: 1 / 2;
        }

        form.sign-up-form {
            opacity: 0;
            z-index: 1;
        }

        form.sign-in-form {
            z-index: 2;
        }

        /* .title {
    font-size: 2.2rem;
    color: #444;
    margin-bottom: 10px;
} */

        .input-field {
            max-width: 380px;
            height: 55px;
            display: grid;
            grid-template-columns: 15% 85%;
            background-color: #f0f0f0;
            /* width: 100%; */
            /* margin: 10px 0; */
            /* border-radius: 55px; */
            /* padding: 0 0.4rem; */
            /* position: relative; */
        }

        .input-field i {
            /* text-align: center; */
            line-height: 55px;
            color: #acacac;
            transition: 0.5s;
            /* font-size: 1.1rem; */
        }

        .input-field input {
            background: none;
            outline: none;
            /* border: none; */
            line-height: 1;
            /* font-weight: 600; */
            /* font-size: 1.1rem; */
            /* color: #333; */
        }

        .input-field input::placeholder {
            color: #aaa;
            font-weight: 500;
        }

        .social-text {
            padding: 0.7rem 0;
            font-size: 1rem;
        }

        .social-media {
            /* display: flex;
    justify-content: center; */
        }

        .social-icon {
            height: 46px;
            width: 46px;
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
            /* margin: 0 0.45rem; */
            color: #333;
            /* border-radius: 50%; */
            border: 1px solid #333;
            /* text-decoration: none; */
            /* font-size: 1.1rem; */
            transition: 0.3s;
        }

        .social-icon:hover {
            color: #9c27be;
            border-color: #9c27be;
        }

        .btn {
            /* width: 150px; */
            /* background-color: #9c27be; */
            /* border: none; */
            /* border-radius: 49px; */
            /* color: #fff; */
            /* margin: 10px 0; */
            /* font-weight: 600; */
            outline: none;
            height: 49px;
            cursor: pointer;
            transition: 0.5s;
            text-transform: uppercase;
        }

        /* .btn:hover {
    background-color: #9c27be;
} */
        .panels-container {
            /* position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    display: grid; */
            grid-template-columns: repeat(2, 1fr);
        }

        .container1:before {
            content: "";
            position: absolute;
            height: 2000px;
            width: 2000px;
            top: -10%;
            right: 48%;
            transform: translateY(-50%);
            background-image: linear-gradient(-45deg, #9c27be 0%, #9604fe 100%);
            transition: 1.8s ease-in-out;
            border-radius: 50%;
            z-index: 6;
        }

        .image {
            transition: transform 1.1s ease-in-out;
            transition-delay: 0.4s;
        }

        .panel {
            /* display: flex; */
            /* flex-direction: column; */
            align-items: flex-end;
            justify-content: space-around;
            /* text-align: center; */
            z-index: 6;
        }

        .left-panel {
            pointer-events: all;
            padding: 3rem 17% 2rem 12%;
        }

        .right-panel {
            pointer-events: none;
            padding: 3rem 12% 2rem 17%;
        }

        .panel .content {
            transition: transform 0.9s ease-in-out;
            transition-delay: 0.6s;
        }

        .right-panel .image,
        .right-panel .content {
            transform: translateX(800px);
        }

        /* ANIMATION */

        .container1.sign-up-mode:before {
            transform: translate(100%, -50%);
            right: 52%;
        }

        .container1.sign-up-mode .left-panel .image,
        .container1.sign-up-mode .left-panel .content {
            transform: translateX(-800px);
        }

        .container1.sign-up-mode .signin-signup {
            left: 25%;
        }

        .container1.sign-up-mode form.sign-up-form {
            opacity: 1;
            z-index: 2;
        }

        .container1.sign-up-mode form.sign-in-form {
            opacity: 0;
            z-index: 1;
        }

        .container1.sign-up-mode .right-panel .image,
        .container1.sign-up-mode .right-panel .content {
            transform: translateX(0%);
        }

        .container1.sign-up-mode .left-panel {
            pointer-events: none;
        }

        .container1.sign-up-mode .right-panel {
            pointer-events: all;
        }

        @media (max-width: 870px) {
            .container1 {
                min-height: 800px;
                height: 100vh;
            }

            .signin-signup {
                width: 100%;
                top: 95%;
                transform: translate(-50%, -100%);
                transition: 1s 0.8s ease-in-out;
            }

            .signin-signup,
            .container1.sign-up-mode .signin-signup {
                left: 50%;
            }

            .panels-container {
                grid-template-columns: 1fr;
                grid-template-rows: 1fr 2fr 1fr;
            }

            .panel {
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
                padding: 2.5rem 8%;
                grid-column: 1 / 2;
            }

            .right-panel {
                grid-row: 3 / 4;
            }

            .left-panel {
                grid-row: 1 / 2;
            }

            .image {
                width: 200px;
                transition: transform 0.9s ease-in-out;
                transition-delay: 0.6s;
            }

            .panel .content {
                padding-right: 15%;
                transition: transform 0.9s ease-in-out;
                transition-delay: 0.8s;
            }

            .panel h3 {
                font-size: 1.2rem;
            }

            .panel p {
                font-size: 0.7rem;
                padding: 0.5rem 0;
            }

            .container1:before {
                width: 1500px;
                height: 1500px;
                transform: translateX(-50%);
                left: 30%;
                bottom: 68%;
                right: initial;
                top: initial;
                transition: 2s ease-in-out;
            }

            .container1.sign-up-mode:before {
                transform: translate(-50%, 100%);
                bottom: 32%;
                right: initial;
            }

            .container1.sign-up-mode .left-panel .image,
            .container1.sign-up-mode .left-panel .content {
                transform: translateY(-300px);
            }

            .container1.sign-up-mode .right-panel .image,
            .container1.sign-up-mode .right-panel .content {
                transform: translateY(0px);
            }

            .right-panel .image,
            .right-panel .content {
                transform: translateY(300px);
            }

            .container1.sign-up-mode .signin-signup {
                top: 5%;
                transform: translate(-50%, 0);
            }
        }

        @media (max-width: 570px) {
            form {
                padding: 0 1.5rem;
            }

            .image {
                display: none;
            }

            .panel .content {
                padding: 0.5rem 1rem;
            }

            .container1 {
                padding: 1.5rem;
            }

            .container1:before {
                bottom: 72%;
                left: 50%;
            }

            .container1.sign-up-mode:before {
                bottom: 28%;
                left: 50%;
            }
        }

        .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-left: 0%;
            border-top-left-radius: .25rem;
            border-bottom-left-radius: .25rem;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
        .input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu) {
            margin-left: -1px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            border-top-right-radius: .25rem;
            border-bottom-right-radius: .25rem;
        }
    </style>
</head>


<body>
    <div class="container1 position-relative w-100 bg-white overflow-hidden">
        <div class="position-absolute w-100 h-100 top-0 start-0">
            <div class="signin-signup">
                <form action="login" method="POST" dir="rtl" class="sign-in-form needs-validation overflow-hidden" novalidate>
                    @csrf
                    <legend class="mb-4 mt-2 p-1 fs-1 fw-bold text-center">تسجيل الدخول</legend>
                    <label for="exampleFormControlInput1" class="form-label fs-5">البريد الإلكتروني:</label>
                    <div class="input-group mb-5">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-solid fa-envelope"></i></span>
                        <input type="email" value="{{ old('email') }}" class="form-control fs-5 @error('email') is-invalid @enderror" aria-label="Username" aria-describedby="basic-addon1" name="email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="invalid-feedback">الرجاء إدخال بريدك الإلكتروني</div>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label fs-5">كلمة المرور:</label>
                    <div class="input-group mb-5">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock-keyhole"></i></span>
                        <input type="password" id="password" class="form-control fs-5 @error('password') is-invalid @enderror" aria-label="password" aria-describedby="basic-addon1" name="password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="invalid-feedback" id="feedback-password">يجب أن تتألف كلمة المرور من ثمانية محارف على الأقل</div>
                    </div>
                    <!-- <div class="form-check my-3">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="margin-left: 0; float: none;" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="flexCheckChecked">تذكرني</label>
                    </div> -->
                    <div class="">
                        <button class="btn btn-gradient text-white float-start" type="submit"><span>تسجيل الدخول</span></button>
                    </div>
                    <!-- @if (Route::has('password.request'))
                    <div><a href="{{ route('password.request') }}" class="row my-4 mx-2 link-secondary">هل نسيت كلمة المرور؟</a></div>
                    @endif -->
                </form>
                <form method="POST" action="{{ route('register') }}" dir="rtl" class="sign-up-form needs-validation overflow-hidden" id="Register_Form" novalidate>
                    @csrf
                    <legend class="mb-4 mt-2 p-1 fs-1 fw-bold text-center">إنشاء حساب جديد</legend>
                    <label for="exampleFormControlInput1" class="form-label fs-5">اسم المستخدم:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        <input type="text" id="userName" value="{{ old('name') }}" class="form-control fs-6 @error('name') is-invalid @enderror" aria-label="Username" aria-describedby="basic-addon1" id="user_name" name="name" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="invalid-feedback" id="feedback-username">يجب أن يكون مؤلفاً من أربع محارف على الأقل ولا يبدأ بـ . أو _ أو رقم ولا ينتهي بـ . أو _ </div>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label fs-5">البريد الإلكتروني:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" value="{{ old('email') }}" class="form-control fs-6 @error('email') is-invalid @enderror" id="email" aria-label="Username" aria-describedby="basic-addon1" name="email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="invalid-feedback">الرجاء إدخال بريدك الإلكتروني</div>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label fs-5">كلمة السر:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock-keyhole"></i></span>
                        <input type="password" id="password" class="form-control fs-6 @error('password') is-invalid @enderror" aria-label="Username" aria-describedby="basic-addon1" name="password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="invalid-feedback" id="feedback-password">يجب أن تتألف كلمة المرور من ثمانية محارف على الأقل</div>
                    </div>
                    <label for="exampleFormControlInput1" class="form-label fs-5">تأكيد كلمة السر:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock-keyhole"></i></span>
                        <input type="password" id="confirmpassword" class="form-control fs-5 @error('password_confirmation') is-invalid @enderror" aria-label="Username" aria-describedby="basic-addon1" name="password_confirmation" required>
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="invalid-feedback" id="feedback-password2">يجب أن تتألف كلمة المرور من ثمانية محارف على الأقل</div>
                    </div>
                    <div class="invalid-feedback" id="feedback-notsame">يجب أن تكون كلمة المرور متماثلة في الدخلين.</div>
                    <button class="btn btn-gradient text-white float-start mb-5" type="submit" value="add"><span>إنشاء حساب جديد</span></button>
                </form>
            </div>
        </div>
        <div class="panels-container position-absolute h-100 w-100 top-0 start-0 d-grid">
            <div class="panel d-flex flex-column align-items-center text-center left-panel">
                <div class="content text-white">
                    <h3>أليس لديك حساب؟</h3>
                    <p></p>
                    <a href="{{ route('register') }}" class="btn text-white px-3 border border-light" style="min-width: max-content;" id="sign-up-btn">إنشاء حساب جديد</a>
                </div>
                <img src="Images\svg\illustrations\Sign_in.svg" class="image w-100 d-none d-lg-block" width="150" height="350" alt="" />
            </div>
            <div class="panel d-flex flex-column align-items-center text-center right-panel">
                <div class="content text-white">
                    <h3>هل لديك حساب مسبقا؟</h3>
                    <p></p>
                    <a href="{{ route('login') }}" class="btn text-white px-3 border border-light" style="min-width: max-content;" id="sign-in-btn">تسجيل الدخول</a>
                </div>
                <img src="Images\svg\illustrations\Sign-UP.svg" class="image w-100 d-none d-lg-block" width="150" height="350" alt="" />
            </div>
        </div>
    </div>
    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container1");

        sign_up_btn.addEventListener("click", () => {
            container.classList.add("sign-up-mode");
            setTimeout(function(){
                console.log(",,");
            }, 1800000000000);
        });

        sign_in_btn.addEventListener("click", () => {
            container.classList.remove("sign-up-mode");
        });
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
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    if (document.getElementById("feedback-password").style.display == "block") {
                        event.preventDefault()
                        event.stopPropagation()
                        document.getElementById("password").classList.add("is-invalid");
                        return;
                    }
                    form.classList.add('was-validated')
                }, false)
            });
    </script>
    <script src="app.js"></script>
</body>

</html>
