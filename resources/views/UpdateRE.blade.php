@extends('header&&footer')
@section('content')
<!DOCTYPE html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <title>New Home | Add RE</title>
    <!-- International Telephone Input Validation -->
    <link rel="stylesheet" href="libraries/intl-tel-input\build\css\demo.css">
    <link rel="stylesheet" href="libraries/intl-tel-input\examples\css\prism.css">
    <link rel="stylesheet" href="libraries/intl-tel-input\build\css\intlTelInput.min.css">
    <script src="libraries/JS/DataSet.js"></script>
    <style>
    :root {
        --line-border-fill: #9c27be;
        --line-border-empty: #bdbdbd;
        /*#be27aa#9c27be*/
    }

    body {
        background-color: var(--color-lighten);
        background-image: url("Images/svg/bg/bgNH.png");
        background-repeat: repeat-y;
    }

    .bd-callout_w75 {
        width: 75%;
    }

    .progress_container {
        width: 70%;
        margin: auto;
        position: relative;
        display: flex;
        justify-content: space-between;
    }

    .progress_container::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        height: 7px;
        width: 100%;
        z-index: -1;
        transition: .5s ease;
        transform: translateY(-50%);
        background-color: var(--line-border-fill);
    }

    .progress1 {
        position: absolute;
        top: 50%;
        left: 0;
        height: 7px;
        width: 100%;
        z-index: -1;
        transition: 0.4s ease;
        transition: width .6s ease;
        transform: translateY(-50%);
        background-color: var(--line-border-empty);
    }

    .circle {
        height: 50px;
        width: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        font-size: 1.5rem;
        transition: .4s ease;
        justify-content: center;
        background-color: #fff;
        border: 3.5px solid #b2bec3;
    }

    .circle.activeBar {
        border-color: var(--Second-color);
    }

    /* Style the form */

    #regForm {
        min-width: 300px;
        max-width: 800px;
    }

    @media (max-width:360px) {
        #regForm {
            padding-left: 0 !important;
            padding-right: 0 !important;
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

    input,
    .popover-header,
    .popover-body {
        text-align: right;
    }

    .image_container {
        height: 120px;
        width: 200px;
        border-radius: 6px;
    }

    .image_container img {
        opacity: 0.9;
        height: 120px;
        width: 175px;
    }

    .image_container img:hover {
        opacity: 1;
        transition: 0.3s;
        box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.5);
    }

    .image_container span {
        top: -5px;
        right: 25px;
        color: rgb(227, 0, 0);
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
    }

    #map_canvas {
        height: 450px;
        width: 100%;
        border: 1px solid var(--Second-color);
        box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.264);
    }

    /* Hide all steps by default: */

    .tab {
        display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        border: none;
        opacity: 0.5;
        display: inline-block;
        border-radius: 50%;
        background-color: #bbbbbb;
    }

    /* Mark the active step: */

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */

    .step.finish {
        background-color: #04AA6D;
    }

    @media (max-width:765px) {
        .progress_container {
            width: 100%;
            font-family: inherit;
        }

        .bd-callout_w75 {
            width: 100%;
        }
    }
    </style>
</head>

<body>
    <!--https://youtu.be/y9j-BL5ocW8  https://youtu.be/qr6j3EUf514-->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <section class="mb-5">
        <div class="container">
            <div class="bd-callout bd-callout_w75 mx-auto my-4 p-3 rounded text-end" dir="rtl">
                <img src="Images\svg\icon\list.svg" width="50px" alt="list">

                <span class="fw-bold fs-1">تعـديـل بيـانـات عـقــارك</span>
            </div>
            <div class="progress_container mb-4 progress-bar-striped progress-bar-animated" dir="rtl">
                <div class="progress1 progress-bar-striped progress-bar-animated" id="progress1"></div>
                <div class="circle activeBar">1</div>
                <div class="circle ">2</div>
                <div class="circle ">3</div>
                <div class="circle ">4</div>
            </div>
        </div>
        <!------ Include the above in your HEAD tag --------->
        <form class="row shadow bg-body rounded m-auto p-5" id="regForm" dir="rtl">
            <!-- One "tab" for each step in the form: -->

            <div class="tab col-12 placeholder-glow">
                <div class="row  mb-2">
                    <div class="col-12">
                        <div class="alert alert-danger alert-dismissible fade show d-none"
                            id="invalid-feedback-Internet" role="alert">
                            <div><svg class="flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>&nbsp;يرجى التحقق من اتصالك بالإنترنت!
                            </div>
                            <button type="button" class="btn-close"
                                onclick="document.getElementById('invalid-feedback-Internet').classList.add('d-none')">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <label class="form-label fw-bold placeholder">نوع العقار:</label>
                        <select class="form-select mb-4 bd-gray-100 shadow-sm placeholder"
                            aria-label="Default select example" class="form-select" id="realEstateType"
                            oninput=" this.className = 'form-select mb-4' " required>
                            <!-- <option selected disabled value="">اختر نوع العقار؟</option> -->
                            <optgroup label="شقق">
                                <option value="شقة">شقة</option>
                                <!--جزء من سطح مبنى-->
                                <option value="روف">روف</option>
                                <option value="ستوديو">ستوديو</option>
                                <option value="دوبلكس">دوبلكس</option>
                                <option value="بنتهاوس">بنتهاوس</option>
                                <option value="دور كامل">دور كامل</option>
                                <option value="شقة بحديقة">شقة بحديقة</option>
                                <option value="شقة مفروشة">شقة مفروشة</option>
                            </optgroup>
                            <optgroup label="مباني">
                                <option value="برج">برج</option>
                                <option value="مبنى">مبنى</option>
                                <option value="عمارة">عمارة</option>
                                <option value="مصنع">مصنع</option>
                                <option value="منزل/بيت عربي">منزل/بيت عربي</option>
                            </optgroup>
                            <optgroup label="فلل">
                                <option value="قصر">قصر</option>
                                <option value="فيلا">فيلا</option>
                                <option value="شاليه">شاليه</option>
                                <option value="توين هاوس">توين هاوس</option>
                                <option value="تاون هاوس">تاون هاوس</option>
                                <option value="فيلا منفصلة">فيلا منفصلة</option>
                            </optgroup>
                            <optgroup label="إداري">
                                <option value="إداري">إداري</option>
                                <option value="مكتب">مكتب</option>
                                <option value="برج إداري">برج إداري</option>
                                <option value="مقر إداري">مقر إداري</option>
                                <option value="مبنى إداري">مبنى إداري</option>
                                <option value="دور كامل إداري">دور كامل إداري</option>
                                <option value="مساحة مكتبية">مساحة مكتبية</option>
                                <option value="غرفة في مكتب">غرفة في مكتب</option>
                            </optgroup>
                            <optgroup label="تجاري">
                                <option value="محل">محل</option>
                                <option value="مول">مول</option>
                                <option value="مخزن">مخزن</option>
                                <option value="فندق">فندق</option>
                                <option value="كافيه">كافيه</option>
                                <option value="تجاري">تجاري</option>
                                <option value="مصنع">مصنع</option>
                                <option value="معرض">معرض</option>
                                <option value="مطعم">مطعم</option>
                                <option value="مستودع">مستودع</option>
                                <option value="مدرسة">مدرسة</option>
                                <option value="حضانة أطفال">حضانة أطفال</option>
                            </optgroup>
                            <optgroup label="طبي">
                                <option value="طبي">طبي</option>
                                <option value="عيادة">عيادة</option>
                                <option value="صيدلية">صيدلية</option>
                                <option value="مستشفى">مستشفى</option>
                                <option value="مركز طبي">مركز طبي</option>
                                <option value="معمل طبي">معمل طبي</option>
                                <option value="غرفة في عيادة">غرفة في عيادة</option>
                            </optgroup>
                            <optgroup label="أراضي">
                                <option value="أرض">أرض</option>
                                <option value="أرض إدارية">أرض إدارية</option>
                                <option value="أرض تجارية">أرض تجارية</option>
                                <option value="أرض زراعية">أرض زراعية</option>
                                <option value="أرض صناعية">أرض صناعية</option>
                                <option value="أرض مباني سكنية">أرض مباني سكنية</option>
                            </optgroup>
                            <optgroup label="أخرى">
                                <option value="قبر">قبر</option>
                                <option value="مدفنة">مدفنة</option>
                                <option value="غرف مشاركة">غرف مشاركة</option>
                                <option value="عقار آخر">عقار آخر</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold placeholder">حالة العقار:</label>
                        <select class="form-select mb-4 bd-gray-100 shadow-sm placeholder"
                            aria-label="Default select example" class="form-select" id="realEstateType"
                            oninput=" this.className = 'form-select mb-4' ">
                            <option value="1">نشط</option>
                            <option value="0">غير نشط</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="phone" class="form-label fw-bold placeholder">رقم الجوال:</label>
                            <div class="input-group mb-3 placeholder">
                                <input id="phone" name="phone" class="form-control placeholder" type="tel" dir="ltr"
                                    onkeypress="return(event.charCode>=48 && event.charCode<=57)" value="934528484"
                                    required>
                            </div>
                            <div class="row">
                                <div id="valid-msg" class="hide"></div>
                                <!--✓ Valid-->
                                <div id="error-msg" class="hide"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="height: 2px; color: #9c27be; border: 0; opacity: .50;">
                <div class="row  mb-2">
                    <label for="exampleFormControlInput1" class="form-label fw-bold placeholder">وضع العقار في أقسام:
                    </label>
                    <div class="form-check mb-2 col-sm-4">
                        <input class="form-check-input shadow-sm placeholder" type="checkbox" value="1"
                            id="flexCheckChecked_D1" style="margin-left: 0; float: none;" required>
                        <label class="form-check-label placeholder" for="flexCheckChecked_D1">بيع </label>
                    </div>
                    <div class="form-check mb-2 col-sm-4">
                        <input class="form-check-input shadow-sm placeholder" type="checkbox" value="2"
                            id="flexCheckChecked_D2" style="margin-left: 0; float: none;">
                        <label class="form-check-label placeholder" for="flexCheckChecked_D2"> آجار</label>
                    </div>
                    <div class="form-check mb-2 col-sm-4">
                        <input class="form-check-input shadow-sm placeholder" type="checkbox" value="4"
                            id="flexCheckChecked_D3" style="margin-left: 0; float: none;">
                        <label class="form-check-label placeholder" for="flexCheckChecked_D3">رهن</label>
                    </div>
                    <input type="hidden" id="Departement-value" value="7" />
                </div>
                <div class="row  mb-2">
                    <div class="col-12">
                        <div class="shadow-sm alert alert-danger alert-dismissible fade show d-none"
                            id="invalid-feedback-Departement" role="alert">
                            <div><svg class="flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>&nbsp;الرجاء إدخال الأقسام المناسبة لك
                            </div>
                            <button type="button" class="btn-close"
                                onclick="document.getElementById('invalid-feedback-Departement').classList.add('d-none')">
                            </button>
                        </div>
                    </div>
                </div>
                <hr style="height: 2px; color: #9c27be; border: 0; opacity: .50;">
                <div class="row">
                    <label for="validationCustom01" for="" class="form-label fw-bold placeholder">المكان:</label>
                    <div class="col-md-6">
                        <select class="form-select mb-4 placeholder" id="validationCustom01"
                            aria-label="Default select example" oninput=" this.className = 'form-select mb-4' "
                            required>
                            <option selected disabled value="">اختر المحافظة؟</option>
                            <option value="حلب">حلب</option>
                            <option value="دمشق">دمشق</option>
                            <option value="درعا">درعا</option>
                            <option value="اللاذقية">اللاذقية</option>
                            <option value="القنيطرة">القنيطرة</option>
                            <option value="السويداء">السويداء</option>
                            <option value="ريف دمشق">ريف دمشق</option>
                            <option value="حمص">حمص</option>
                            <option value="حماه">حماه</option>
                            <option value="طرطوس">طرطوس</option>
                            <option value="ديرالزور">ديرالزور</option>
                            <option value="الرقة">الرقة</option>
                            <option value="إدلب">إدلب</option>
                            <option value="الحسكة">الحسكة</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select mb-4 d-none" id="validationCustom02"
                            aria-label="Default select example" required></select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select mb-4 d-none" id="validationCustom03"
                            aria-label="Default select example" required></select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select mb-4 d-none" id="validationCustom04"
                            aria-label="Default select example" required></select>
                    </div>
                </div>
            </div>
            <div class="tab col-12">
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="AreaIn" class="form-label fw-bold">المساحة:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <img src="Images\svg\icon\area.svg" width="20px" alt="area">
                            </span>
                            <input type="text" class="form-control rounded-0" id="AreaIn" min="1" max="92590"
                                maxlength="5" onkeypress="return(event.charCode>=48 && event.charCode<=57)" value="100"
                                required>
                            <button type="button" id="invalid-feedback-Area"
                                class="px-2 alert-danger rounded-0 border-0 border-bottom border-top d-none"
                                data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom"
                                title="المساحة" data-bs-content="يجب أن تكون القيمة بين 1 و 92590"
                                style="border-color: #f5c2c7 !important;">
                                <svg class=" bi flex-shrink-0" width="24" height="24" role="img" aria-label="Info:">
                                    <use xlink:href="#info-fill" />
                                </svg>
                            </button>
                            <span class="input-group-text" style="background-color: #f9f8f8; margin-right: -1px;">
                                مترمربع
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2 d-none" id="PriceSell">
                        <label for="PriceIn" class="form-label fw-bold">سعر البيع:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-money-bill-wave text-muted"></i>
                            </span>
                            <input type="text" class="form-control rounded-0" id="PriceInSell" min="0"
                                onkeypress="return(event.charCode>=48 && event.charCode<=57)" value="100" required>
                            <button type="button" id="invalid-feedback-PriceSell"
                                class="px-2 alert-danger rounded-0 border-0 border-bottom border-top d-none"
                                data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom"
                                title="السعر" data-bs-content="يجب أن تكون القيمة أكبر من الصفر"
                                style="border-color: #f5c2c7 !important;">
                                <svg class=" bi flex-shrink-0" width="24" height="24" role="img" aria-label="Info:">
                                    <use xlink:href="#info-fill" />
                                </svg>
                            </button>
                            <span class="input-group-text"
                                style="margin-right: -1px; background-color: #f9f8f8;">ل.س</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2" id="PriceRent">
                        <label for="PriceIn" class="form-label fw-bold">سعر الآجار:&nbsp;
                            <span class="text-muted fw-normal">(بالشهر)</span>
                        </label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-money-bill-wave text-muted"></i>
                            </span>
                            <input type="text" class="form-control rounded-0" id="PriceInRent" min="0"
                                onkeypress="return(event.charCode>=48 && event.charCode<=57)" value="100" required>
                            <button type="button" id="invalid-feedback-PriceRent"
                                class="px-2 alert-danger rounded-0 border-0 border-bottom border-top d-none"
                                data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom"
                                title="السعر" data-bs-content="يجب أن تكون القيمة أكبر من الصفر"
                                style="border-color: #f5c2c7 !important;">
                                <svg class=" bi flex-shrink-0" width="24" height="24" role="img" aria-label="Info:">
                                    <use xlink:href="#info-fill" />
                                </svg>
                            </button>
                            <span class="input-group-text"
                                style="margin-right: -1px; background-color: #f9f8f8;">ل.س</span>
                        </div>
                    </div>
                    <!-- Mortgage Home -->
                    <div class="col-md-6 mb-2" id="PriceMort">
                        <label for="PriceIn" class="form-label fw-bold">سعر الرهن:&nbsp;
                            <span class="text-muted fw-normal">(بالسنة)</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <i class="fa-solid fa-money-bill-wave text-muted"></i>
                            </span>
                            <input type="text" class="form-control rounded-0" id="PriceInMort" min="0"
                                onkeypress="return(event.charCode>=48 && event.charCode<=57)" value="100" required>
                            <button type="button" id="invalid-feedback-PriceMort"
                                class="px-2 alert-danger rounded-0 border-0 border-bottom border-top d-none"
                                data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom"
                                title="السعر" data-bs-content="يجب أن تكون القيمة أكبر من الصفر"
                                style="border-color: #f5c2c7 !important;">
                                <svg class=" bi flex-shrink-0" width="24" height="24" role="img" aria-label="Info:">
                                    <use xlink:href="#info-fill" />
                                </svg>
                            </button>
                            <span class="input-group-text"
                                style="margin-right: -1px; background-color: #f9f8f8;">ل.س</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="builtYearIn" class="form-label fw-bold">سنة البناء:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">
                                <img src="Images\svg\icon\construction.svg" width="20px" alt="list">
                            </span>
                            <input type="text" class="form-control rounded-0" placeholder="YYYY" min="1900" max="2023"
                                maxlength="4" id="builtYearIn"
                                onkeypress="return(event.charCode>=48 && event.charCode<=57)" value="1900" required>
                            <!-- 57=9, 56=8, 55=7, 54=6, 53=5, 52=4, 51=3, 50=2, 49=1, 48=0, 45=-, 43=+, 96->105 numpad, 65->90 letters-->
                            <button type="button" id="invalid-feedback-builtYear"
                                class="btnpopover px-2 alert-danger rounded-0 rounded-start border-0 border-bottom border-top d-none"
                                data-bs-trigger="focus" data-bs-placement="bottom"
                                style="border-color: #f5c2c7 !important;">
                                <svg class=" bi flex-shrink-0" width="24" height="24" role="img" aria-label="Info:">
                                    <use xlink:href="#info-fill" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2" id="inputFloor-s">
                        <label for="floorIn" id="labelFloor-s" class="form-label fw-bold">الطابق:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <img src="Images\svg\icon\floor.svg" width="20px" alt="floor">
                            </span>
                            <input type="text" dir="ltr" class="form-control rounded-0" min="-2" max="30" maxlength="2"
                                id="floorIn" onkeypress="if(this.value==''&& event.charCode==45){return event.charCode==45}
							return(event.charCode>=48 && event.charCode<=57)" value="8" required>
                            <button type="button" id="invalid-feedback-floor/s"
                                class="px-2 alert-danger rounded-0 rounded-start border-0 border-bottom border-top d-none"
                                data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom"
                                title="الطابق" style="border-color: #f5c2c7 !important;"
                                data-bs-content="يجب أن تكون القيمة بين -2 و 30">
                                <svg class=" bi flex-shrink-0" width="24" height="24" role="img" aria-label="Info:">
                                    <use xlink:href="#info-fill" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2" id="inputRoomNum">
                        <label for="RoomNumIn" id="labelRoomNum" class="form-label fw-bold">عدد الغرف:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">
                                <img src="Images\svg\icon\bed.svg" width="20px" alt="icon" />
                            </span>
                            <input type="text" class="form-control rounded-0" placeholder="---" min="1" max="100"
                                maxlength="3" id="RoomNumIn"
                                onkeypress="return(event.charCode>=48 && event.charCode<=57)" value="5" required>
                            <button type="button" id="invalid-feedback-RoomNum"
                                class="px-2 alert-danger rounded-0 rounded-start border-0 border-bottom border-top d-none"
                                data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom"
                                title="عدد الغرف" style="border-color: #f5c2c7 !important;"
                                data-bs-content="يجب أن تكون القيمة بين 1 و 100">
                                <svg class=" bi flex-shrink-0" width="24" height="24" role="img" aria-label="Info:">
                                    <use xlink:href="#info-fill" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2" id="inputBathRoomNum">
                        <label for="BathRoomNumIn" id="labelBathRoomNum" class="form-label fw-bold">عددالحمامات:</label>
                        <div class="input-group mb-3">
                            <span id="bathSVG" class="input-group-text">
                                <img src="Images\svg\icon\bath.svg" width="20" alt="icon" />
                            </span>
                            <span id="homeSVG" class="input-group-text">
                                <img src="Images\svg\icon\home_building_estate_house.svg" width="20" alt="icon" />
                            </span>
                            <input type="text" class="form-control rounded-0" placeholder="" min="1" max="50"
                                maxlength="2" id="BathRoomNumIn"
                                onkeypress="return(event.charCode>=48 && event.charCode<=57)" value="2" required>
                            <button type="button" id="invalid-feedback-BathRoomNum"
                                class="px-2 alert-danger rounded-0 rounded-start border-0 border-bottom border-top d-none"
                                data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom"
                                title="عددالحمامات" style="border-color: #f5c2c7 !important;"
                                data-bs-content="يجب أن تكون القيمة بين 0 و 50">
                                <svg class=" bi flex-shrink-0" width="24" height="24" role="img" aria-label="Info:">
                                    <use xlink:href="#info-fill" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <hr style="height: 2px; color: #9c27be; border: 0; opacity: .50;">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="validationCustom04" class="form-label fw-bold">الاطلالة:</label>
                        <select class="form-select mb-4" oninput=" this.className = 'form-select mb-4' " required>
                            <option value="شارع رئيسي">شارع رئيسي</option>
                            <option value="شارع فرعي">شارع فرعي</option>
                            <option value="ساحة مغلقة">ساحة مغلقة</option>
                            <option value="خلفي">خلفي</option>
                            <option value="حديقة">حديقة</option>
                            <option value="مدفنة">مدفنة</option>
                            <option value="مدرسة">مدرسة</option>
                            <option value="بحر">بحر</option>
                            <option value="مول">مول</option>
                            <option value="أخرى">أخرى</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="validationCustom04" class="form-label fw-bold">نوع الإكساء:</label>
                        <select class="form-select mb-4" oninput=" this.className = 'form-select mb-4' " required>
                            <option value="سوبر لوكس">سوبر لوكس</option>
                            <option value="اكستر سوبر لوكس">اكستر سوبر لوكس</option>
                            <option value="لوكس">لوكس</option>
                            <option value="نصف إكساء">نصف إكساء</option>
                            <option value="بدون إكساء">بدون إكساء</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="validationCustom04" class="form-label fw-bold fs-6">نوع العقد:</label>
                        <select class="form-select mb-4" oninput=" this.className = 'form-select mb-4' " required>
                            <option value="طابو أخضر">طابو أخضر</option>
                            <option value="حكم محكمة">حكم محكمة</option>
                            <option value="أسهم">أسهم</option>
                            <option value="شيوع">شيوع</option>
                            <option value="أوقاف">أوقاف</option>
                            <option value="أملاك دولة">أملاك دولة</option>
                            <option value="عقد الاستثمار">عقد الاستثمار</option>
                            <option value="حق الاستثمار/فروغ">حق الاستثمار/فروغ</option>
                            <!--لا رهن لا أجار-->
                        </select>
                        <div class=" invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                </div>
                <hr style="height: 2px; color: #9c27be; border: 0; opacity: .50;">
                <div class="row  mb-2">
                    <label for="" class="form-label fw-bold">اتجاهات العقار:</label>
                    <div class="form-check mb-2 col-sm-3">
                        <input class="form-check-input me-2" type="checkbox" value="1" id="North_Direction"
                            style="margin-left: 0; float: none;" required>
                        <label class="form-check-label" for="North_Direction">شمالي</label>
                    </div>
                    <div class="form-check mb-2 col-sm-3">
                        <input class="form-check-input me-2" type="checkbox" value="2" id="East_Direction"
                            style="margin-left: 0; float: none;">
                        <label class="form-check-label" for="East_Direction">شرقي</label>
                    </div>
                    <div class="form-check mb-2 col-sm-3">
                        <input class="form-check-input me-2" type="checkbox" value="4" id="South_Direction"
                            style="margin-left: 0; float: none;">
                        <label class="form-check-label" for="South_Direction">جنوبي</label>
                    </div>
                    <div class="form-check mb-2 col-sm-3">
                        <input class="form-check-input me-2" type="checkbox" value="8" id="West_Direction"
                            style="margin-left: 0; float: none;">
                        <label class="form-check-label" for="West_Direction">غربي</label>
                    </div>
                    <input type="hidden" id="Direction-value" value="15" />
                </div>
                <div class="row  mb-2">
                    <div class="col-12">
                        <div class="alert alert-danger alert-dismissible fade show d-none"
                            id="invalid-feedback-Direction" role="alert">
                            <div><svg class="flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                                    <use xlink:href="#exclamation-triangle-fill" />
                                </svg>&nbsp;الرجاء إدخال اتجاهات عقارك
                            </div>
                            <button type="button" class="btn-close"
                                onclick="document.getElementById('invalid-feedback-Direction').classList.add('d-none')">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow-sm w-100">
                            <div class="card-header d-flex justify-content-between">
                                <h5>صور العقار:</h5>
                                <input type="file" name="Image" id="image" class="d-none" multiple=""
                                    accept=".jpg,.png,.jpeg,.gif,.svg" onchange="image_select()"
                                    value="C://fakepath\\A5.jpg">
                                <button class="btn btn-md bg-purple text-light" type="button"
                                    onclick="document.getElementById('image').click()">اختر صور</button>
                            </div>
                            <div class="alert alert-danger alert-dismissible fade show d-none" id="alertImage"
                                role="alert">
                                <div class="d-flex align-items-center" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                        aria-label="Danger:">
                                        <use xlink:href="#exclamation-triangle-fill" />
                                    </svg>&nbsp;
                                    <div class="alert-heading fw-bold">تنبيه!</div>
                                </div>
                                <hr>
                                <div id="alert_content"></div>
                                <button type="button" class="btn-close"
                                    onclick="document.getElementById('alertImage').classList.add('d-none')"></button>
                            </div>
                            <div class="row card-body d-flex flex-warp justify-content-start" id="image_container">
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="height: 2px; color: #9c27be; border: 0; opacity: .50;">
                <!--https://youtu.be/y9j-BL5ocW8  https://youtu.be/qr6j3EUf514-->
                <div class="row">
                    <div class="col-12">
                        <label for="" class="form-label fw-bold">رابط فيديو اليوتيوب:</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded-start">
                                <img src="Images\svg\icon\video.svg" width="25px" alt="video">
                            </span>
                            <input type="text" class="form-control rounded-0" id="youtubeLinkInput"
                                value="https://www.youtube.com/embed/y9j-BL5ocW8" required>
                            <button type="button" id="invalid-feedback-youtubeLink"
                                class="px-2 alert-danger rounded-0 border-0 border-bottom border-top d-none"
                                data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="bottom"
                                title="رابط الفيديو خاطئ" data-bs-content="يرجى إضافة الرابط من موقع يوتيوب"
                                style="border-color: #f5c2c7 !important;">
                                <svg class="bi flex-shrink-0" width="24" height="24" role="img" aria-label="Info:">
                                    <use xlink:href="#info-fill" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-3 mx-auto">
                        <iframe id="YTVideo" class="" width="100%" height="250px"
                            src="https://www.youtube.com/embed/y9j-BL5ocW8" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="d-none col-12" id="placeholder_YTVideo">
                    <div class="col-12 mb-3 mx-auto">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="250px"
                            xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#23004d"></rect>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="tab col-12">
                <!-- Map -->
                <div class="row  mb-2">
                    <div class="col-12">
                        <label for="" class="form-label fw-bold">تحديد موقع عقارك على الخريطة:</label>
                        <p class=" text-muted">يرجى سحب العلامة إلى موقع عقارك.</p>
                        <div class="row  mb-2">
                            <div class="col-12">
                                <div class="alert alert-danger alert-dismissible fade show d-none"
                                    id="invalid-feedback-LatLng" role="alert">
                                    <div><svg class="flex-shrink-0 me-2" width="24" height="24" role="img"
                                            aria-label="Danger:">
                                            <use xlink:href="#exclamation-triangle-fill" />
                                        </svg>&nbsp;الرجاء تحديد موقع عقارك!
                                    </div>
                                    <button type="button" class="btn-close"
                                        onclick="document.getElementById('invalid-feedback-LatLng').classList.add('d-none')">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id='map_canvas'></div>
                        <!-- <div id="current">Nothing yet...</div> -->
                        <input type="hidden" id="latitudeValue" value="36.19935190634902" />
                        <input type="hidden" id="longitudeValue" value="37.096878518176545" />
                    </div>
                </div>
                <div id="div-Features">
                    <hr style="height: 2px; color: #9c27be; border: 0; opacity: .50;">
                    <div class="row  mb-2">
                        <label for="" class="form-label fw-bold">ميزات أخرى:</label>
                        <div class="form-check mb-2 col-sm-4">
                            <input class="form-check-input me-2" type="checkbox" value="1" id="wifi"
                                style="margin-left: 0; float: none;">
                            <label class="form-check-label" for="wifi">Wi-Fi</label>
                        </div>
                        <div class="form-check mb-2 col-sm-4">
                            <input class="form-check-input me-2" type="checkbox" value="2" id="air"
                                style="margin-left: 0; float: none;">
                            <label class="form-check-label" for="air">تكييف</label>
                        </div>
                        <div class="form-check mb-2 col-sm-4">
                            <input class="form-check-input me-2" type="checkbox" value="4" id="bool"
                                style="margin-left: 0; float: none;">
                            <label class="form-check-label" for="bool">حمام سباحة</label>
                        </div>
                        <div class="form-check mb-2 col-sm-4">
                            <input class="form-check-input me-2" type="checkbox" value="8" id="security"
                                style="margin-left: 0; float: none;">
                            <label class="form-check-label" for="security">الأمن</label>
                        </div>
                        <div class="form-check mb-2 col-sm-4">
                            <input class="form-check-input me-2" type="checkbox" value="16" id="garden"
                                style="margin-left: 0; float: none;">
                            <label class="form-check-label" for="garden">الحديقة</label>
                        </div>
                        <div class="form-check mb-2 col-sm-4">
                            <input class="form-check-input me-2" type="checkbox" value="32" id="heating"
                                style="margin-left: 0; float: none;">
                            <label class="form-check-label" for="heating">تدفئة مركزية</label>
                        </div>
                        <div class="form-check mb-2 col-sm-4">
                            <input class="form-check-input me-2" type="checkbox" value="64" id="balcony"
                                style="margin-left: 0; float: none;">
                            <label class="form-check-label" for="balcony">الشرفة</label>
                        </div>
                        <div class="form-check mb-2 col-sm-4">
                            <input class="form-check-input me-2" type="checkbox" value="128" id="room"
                                style="margin-left: 0; float: none;">
                            <label class="form-check-label" for="room">غرفة الغسيل</label>
                        </div>
                        <div class="form-check mb-2 col-md-4">
                            <input class="form-check-input me-2" type="checkbox" value="256" id="parking"
                                style="margin-left: 0; float: none;">
                            <label class="form-check-label" for="parking">موقف سيارات</label>
                        </div>
                        <input type="hidden" id="Features_value" value="511" />

                        <!-- <input type="hidden" value="5" id="" /> -->
                    </div>
                </div>
                <hr style="height: 2px; color: #9c27be; border: 0; opacity: .50;">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="" class="form-label fw-bold">مواصفات أخرى:</label>
                        <textarea class="form-control" id="" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="tab col-12">
                <div class="d-flex justify-content-center">
                    <div class="spinner-border" role="status"><span class="visually-hidden">Loading...</span></div>
                </div>
            </div>
            <div style="overflow:auto;">
                <hr style="height: 2px; color: #9c27be; border: 0; opacity: .50;">
                <p class="text-muted alert alert-secondary">
                    يُفضل التأكد من المعلومات المدخلة لكي يظهر عقارك في نتائج البحث بشكل أفضل
                </p>
                <div style="float:left;">
                    <a href="#"><button type="button" class="btn bg-purple text-light mb-2 py-2 px-4 me-2" id="prevBtn"
                            onclick="nextPrev(-1)">السابق</button></a>
                    <a href="#"><button type="button"
                            class="btn bg-purple text-light mb-2 py-2 px-4 me-2 disabled placeholder" id="nextBtn"
                            onclick="nextPrev(1)"> التالي</button></a>
                </div>
            </div>
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center; margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>
        </form>
    </section>
    <!--First BootStrap Second poppercode-->
    <script src="libraries/intl-tel-input/build/js/intlTelInput.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxRuFn9Ny7G-z-EmWCKnXCHK7uyfVvvT0&region=EG&language=ar&callback=initMap"
        async defer>
    </script>
    <script src="libraries\JS\UpdateRE.js"></script>
    <script>

    </script>
</body>


</html>




@endsection
