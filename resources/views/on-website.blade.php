<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="libraries/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="libraries/bootstrap-5.1.3-dist/css/colors.css" />
    <script src="libraries/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <title>On_Website</title>
</head>
<style>
    body {
        background-image: url("Images/svg/bg/bgNH.png");
        direction: rtl;
    }
    
    .accordion-button:not(.collapsed)::after {
        background-image: url("Images\svg\icon\download.svg");
    }
    
    .accordion-button:not(.collapsed) {
        color: rgb(0, 0, 0);
        background-color: rgb(255, 255, 255);
        font-weight: bold;
    }
    
    .accordion-button::after {
        margin-right: auto;
        margin-left: 0;
    }
    
    .accordion-button:focus {
        border-color: #9c27be;
        box-shadow: 0 0 0 0.25rem rgba(189, 1, 206, 0.1);
    }
</style>

<body class="bd-gray-100">
    <div class="container mt-5">
        <h4 class="mb-3 text-center">مصطلحات</h4>
        <div class="accordion shadow bg-white" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            البنتهاوس (Penthouse)
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body m-3" style="background-color: rgb(253, 235, 249);">

                        هى الشقة التى تكون فى الدور الأخير من المبنى، تمتاز بأنها ذات مساحة كبيرة و يجب أن تكون الشقة للداخل وبالتالي ستكون هناك مساحة خارج الشقة تستطيع الأسرة إستخدامها كتراس او لعمل حمام هذة الشقق تمتاز بأنها منعزلة عن السكان وعن الجيران لأنها فى مستوى مرتفع
                        لأنها فى أعلى العمارة، وبالتالى تتميز بالخصوصية التى يتمناها الجميع..
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            تاون هاوس (Townhouse)
                        </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body m-3" style="background-color: rgb(239, 225, 248);">
                        هو صف من المنازل المتماثلة فى التصميم التي تشترك في جدران جانبية (لها جدار مشترك واحد فقط مع كل جار) وتمتاز بأن لها حديقة صغيرة امامها.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            توين هاوس (Twin-home)
                        </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body m-3" style="background-color: rgb(253, 235, 249);">

                        ويعرف أيضاً بالمنزل المزدوج و هو في الأساس منزلان يتشاركان في جدار مشترك واحد فقط، ولكل منزل مالك منفصل بمدخل منفصل بحديقة منفصلة.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            الفيلا
                        </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body m-3" style="background-color: rgb(239, 225, 248);">
                        هى بيت مستقل بحديقة مستقلة لها جدار يحيط بها بمدخل مستقل، وفى الغالب تكون الفيلا من طابقين او ثلاث طوابق.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            دوبلكس
                        </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body m-3" style="background-color: rgb(253, 235, 249);">
                        دوبلكس أو بيت مزدوج وهو بناء يتكون من وجود مكانين للمعيشة مع مداخل منفصلة عن بعض. يُمكن للدُبلكس أو السكن المزدوج أن يكون بيت من طابقين أو بيت من طابق واحد مفصول بجدار مشترك.
                        </strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            برج
                        </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body m-3" style="background-color: rgb(239, 225, 248);">

                        منشأة قوية ومرتفعة بذاتها ومتميزة في موقعها،يزيد ارتفاعها على امتدادها الأفقي بوضوح.ويُعرَّف البرج هندسياً على أنه: «منشأة مبنية طولها يزيد على عرضها يمكن الصعود إليها؛ ولكنها غير مصمَّمة للعيش أو العمل فيها، وهي إنشائياً مستقلة وحاملة لذاتها».
                        </strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            قصر
                        </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body m-3" style="background-color: rgb(253, 235, 249);">

                        هو مقر إقامة كبير، وخاصة ما يتعلق بالمقرات الملكية والرئاسية،كما يطلق قصر على المباني الفخمة والمزخرفة.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            شاليه
                        </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body m-3" style="background-color: rgb(239, 225, 248)">

                        كوخ أو منزل مخصص للاستجمام في شهور الدفئ.
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>