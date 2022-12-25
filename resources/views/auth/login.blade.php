<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.1.3\dist\css\bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome-free-6.1.1-web\css\all.min.css" rel="stylesheet" />
    <title>SignIn/SignUp</title>
    <style>
        /* CSS Variables */
        :root {
            --first-color: #82498C;
            --Second-color: #9d4bff;
            --Background-color: #5C3463;
            --color-dark: #23004d;
            --color-light: #a49eac;
            --color-lighten: #f2f2f2;

            /* Typography */
            --body-font: 'dubai';
            --h1-font-size: 1.5rem;
            --normal-font-size: 1rem;
            --small-font-size: .900rem;
        }

        @media screen and (max-width:700px) {
            :root {
                --normal-font-size: 0.9rem;
                --small-font-size: .800rem;
            }
        }

        /* CSS Reset */

        *,
        ::before,
        ::after {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            transition: 1s;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 600;
            color: var(--color-dark);
            background: var(--Background-color);
            font-size: var(--normal-font-size);
        }

        .col-12 {
            box-shadow: 0 8px 20px #0e0020;
            background: linear-gradient(115deg, #d7bebe, #82498C, #ff97bd);
        }

        .login__container {
            position: relative;
            width: 800px;
            height: 550px;
            margin: 30px;
        }

        .Purple {
            position: absolute;
            top: 40px;
            width: 100%;
            height: 475px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.311);
            box-shadow: 0 5px 45px rgba(0, 0, 0, 0.15);
        }

        .box {
            position: relative;
            width: 50%;
            height: 100%;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .Purple .box h2 {
            color: white;
            font-size: var(--normal-font-size);
        }

        /*** Form ***/
        .formBx {
            position: absolute;
            top: 0;
            left: 0;
            width: 50%;
            height: 100%;
            background: white;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 5px 45px rgba(0, 0, 0, 0.25);
            transition: 1s ease-in-out;
            overflow: hidden;
        }

        .formBx.active {
            left: 50%;
        }

        .formBx .form {
            position: absolute;
            left: 0;
            width: 100%;
            transition: 0.5s;
        }

        .form.active {
            height: 750px;

        }

        .formBx .signinForm {
            transition-delay: 0.25s;
        }

        .formBx.active>.signinForm {
            left: -100%;
            transition-delay: 0s;
        }

        .formBx .signupForm {
            left: 100%;
            transition-delay: 0s;
        }

        .formBx.active>.signupForm {
            left: 0;
            transition-delay: 0s;
        }

        /***** Form content *****/
        legend {
            text-align: center;
            border-bottom: 1px solid var(--first-color);
        }

        .form-control:focus,
        .form-check-input:focus {

            border-color: var(--Second-color);
            box-shadow: 0 0 0 0.25rem #82498c41;
        }

        .form-check-input:checked {
            background-color: var(--Background-color);
            border-color: var(--first-color);
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

        /*** Button ***/
        .btn__container {
            display: flex;
            justify-content: center;
        }

        .btn__container a,
        .btn__container button {
            position: relative;
            cursor: pointer;
            width: 220px;
            height: 50px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(115deg, #ff97bd, #82498C, #cbb1b1);
        }

        .btn__container a span,
        .btn__container button span {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 96%;
            background: var(--color-lighten);
            border-radius: 6px;
            line-height: 45px;
            color: var(--color-dark);
            font-weight: 600;
            font-size: var(--normal-font-size);
            transform: translate(-50%, -50%);
        }

        .btn__container button span {
            background: var(--first-color);
            color: var(--color-lighten);
        }

        .login__forgot {
            font-size: var(--small-font-size);
            color: var(--color-light);
        }

        .login__forgot:focus {
            color: var(--color-dark);
        }

        @media (max-width:900px) {
            .img {
                display: none;
            }

            .h {
                height: 750px;
            }

            .login__container {
                max-width: 400px;
                height: 650px;
                display: flex;
            }

            .login__container .Purple {
                top: 0;
                height: 100%;
            }

            .formBx {
                width: 100%;
                height: 530px;
                top: 0;
                box-shadow: none;
            }

            .formBx.active {
                top: 150px;
                height: 550px;
                left: 0;
            }

            .Purple .box {
                position: absolute;
                width: 100%;
                height: 150px;
                bottom: 0;
            }

            .box.signin {
                top: 0;
            }
        }

        @media (max-width:500px) {
            .login__container {
                justify-self: center;
                max-width: 350px;
                height: 650px;
                margin: auto;
            }

            .col-12 {
                padding: 0%;
                box-shadow: none;
            }

            body>.row {
                margin: 0%;
            }
        }

        @media (max-width:350px) {
            .form {
                padding-right: 0.3rem !important;
            }
        }
    </style>
</head>

<body>
    <div class="row m-2 h">
        <div class="col-12">
            <div class="login__container">
                <div class="Purple">
                    <div class="box signin">
                        <div class="row img m-0">
                            <img class="width:50%; height:50%;" src="Images\Sign-UP.svg" alt="">
                        </div>
                        <div class="row border-top pt-2 m-0">
                            <h2 class="mb-3">هل لديك حساب مسبقا؟</h2>
                            <div class="btn__container">
                                <a class="signinBtn"><span>تسجيل الدخول</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="box signup">
                        <div class="row img m-0">
                            <img class="width:50%; height:50%;" src="Images\login-animate.svg" alt="">
                        </div>
                        <div class="row border-top pt-2 m-0">
                            <h2>أليس لديك حساب؟</h2>
                            <div class="btn__container">
                                <a class="signupBtn"><span>إنشاء حساب جديد</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="formBx">
                    <div class="form p-5 signinForm">
                        <form action="login" method="POST" style="direction: rtl;" class="needs-validation" novalidate>
                            @csrf
                            <legend class="mb-4 mt-2 p-1">تسجيل الدخول</legend>
                            <label for="exampleFormControlInput1" class="form-label">البريد الإلكتروني:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="fa-solid fa-envelope"></i></span>
                                <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror"  aria-label="Username" aria-describedby="basic-addon1" name="email" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <!-- <div class="invalid-feedback"> إدالرجاءخال بريدك الإلكتروني</div> -->
                            </div>
                            <label for="exampleFormControlInput1" class="form-label">كلمة السر:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock-keyhole"></i></span>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"  aria-label="password" aria-describedby="basic-addon1" name="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-check my-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" style="margin-left: 0; float: none;" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckChecked">تذكرني</label>
                            </div>
                            <div class="btn__container">
                                <button type="submit"><span>تسجيل الدخول</span></button>
                            </div>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="row my-4 mx-2 login__forgot">هل نسيت كلمة السر؟</a>
                            @endif
                        </form>
                    </div>
                    <div class="form p-5 signupForm">
                        <form method="POST" action="{{ route('register') }}" style="direction: rtl;" class="needs-validation" id="Register_Form" novalidate>
                            @csrf
                            <legend class="mb-4 mt-2 p-1">إنشاء حساب جديد</legend>
                            <label for="exampleFormControlInput1" class="form-label">اسم المستخدم:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"  aria-label="Username" aria-describedby="basic-addon1" id="user_name" name="name" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="exampleFormControlInput1" class="form-label">البريد الإلكتروني:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                                <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email"  aria-label="Username" aria-describedby="basic-addon1" name="email" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="invalid-feedback"></div>

                            </div>
                            <label for="exampleFormControlInput1" class="form-label">كلمة السر:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock-keyhole"></i></span>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"  aria-label="Username" aria-describedby="basic-addon1" name="password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <label for="exampleFormControlInput1" class="form-label">تأكيد كلمة السر:</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock-keyhole"></i></span>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"  aria-label="Username" aria-describedby="basic-addon1" name="password_confirmation" required>
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="btn__container">
                                <button type="submit" value="add"><span>إنشاء حساب جديد</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const signinBtn = document.querySelector('.signinBtn');
        const signupBtn = document.querySelector('.signupBtn');
        const formBx = document.querySelector('.formBx');
        const body = document.querySelector('login');
        signupBtn.onclick = function() {
            formBx.classList.add('active')
            body.classList.add('active')
        }
        signinBtn.onclick = function() {
            formBx.classList.remove('active')
            body.classList.remove('active')
        }
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
                    form.classList.add('was-validated')
                }, false)
            });
    </script>

    <script src="js/jquery-3.6.0.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/app26f8.js?v=2.32.4" type="559488745ffc121fc50d3536-text/javascript"></script>
    <script src="libraries/jquery.waypoints.min.js" type="559488745ffc121fc50d3536-text/javascript"></script>
    <script src="libraries/bootstrap/popper.min.js" type="db4c9c39dcd52cec68b0a314-text/javascript"></script>
    <script src="libraries/bootstrap/bootstrap.min.js" type="db4c9c39dcd52cec68b0a314-text/javascript"></script>
    <script src="js/jquery.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper 
    <script src="bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>-->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>