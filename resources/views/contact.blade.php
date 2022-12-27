@extends('header&&footer')
@section('content')
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8">
    <title>ِAbout</title>
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="libraries/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="libraries/bootstrap-5.1.3-dist/css/colors.css" />
    <link rel="stylesheet" href="libraries/fontawesome-free-6.1.1-web/css/all.min.css" />
    <style></style>
</head>
<body>
<section class="border-top" style="box-shadow: 0 3px 3px #f2f2f2;">
        <div class="container py-3">
            <div class="row">
                <div class="col-12">
                    <div class="fs-2 fw-bold mb-2 text-center">معلومات التواصل</div>
                </div>
            </div>
        </div>
    </section>
    <div class="zigzag"></div>
    <section class="bd-gray-100">
        <div class="container">
            <br>
            <div class="row">
                <div class="text-end" dir="rtl">
                    <p>{{$about[0]->about}}</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-6 col-md-12 d-flex flex-column align-items-center justify-content-center ">
                    <img class="d-none d-lg-block d-xl-block" src="Images\svg\illustrations\Mention-amico.svg" width="450" alt="img\">
                </div>
                <div class="col-lg-6 col-md-12 my-auto mx-auto">
                    <form class="form rounded">
                        <div class="row">
                            <div class="col-12 text-end mb-2">
                                <label class="form-label fw-bold">اكتب رسالة</label>
                                <textarea type="text" class="form-control shadow-sm" @guest onclick="preventFunction()" @endguest id="content" dir="rtl" rows="5" min="1" max="100" required></textarea>
                            </div>
                            <div class="alert alert-success alert-block" style="display: none;">
                                <button type="button" class="close dir" data-dismiss="alert">×</button>
                                <strong class="success-msg text-center"></strong>
                            </div>
                        </div>
                        <div class="row flex-column align-items-start">
                            <button type="submit" class="btn btn-gradient text-white rounded-pill px-5 mt-3" id="btn" style="max-width: max-content;">إرسال</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
<script>
    // كود إضافة رسالة
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '#btn', function() {

            var content = $('#content').val();

            $.ajax({
                type: "post",
                url: "/save_message",
                data: {
                    'content': content,
                },
                success: function(res) {
                    if (res.status == 200) {
                        alert(res.message);
                        document.getElementById('content').value = "";
                    } else {
                        alert(res.status);

                    }
                }
            });
        });
    });
    function preventFunction(x) {
        alert("عليك تسجيل الدخول أولا");
    }
</script>

</html>
@endsection
