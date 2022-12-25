const dropdownElementList = document.querySelectorAll(".dropdown-toggle");
const dropdownList = [...dropdownElementList].map(
    (dropdownToggleEl) => new bootstrap.Dropdown(dropdownToggleEl)
);
const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
);
const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

// Responsive Form

// FIXME:
//let x = parseInt(document.getElementById("Direction-valueF").value);(1<<i)&7;
if (window.screen.width <= 380) {
    document.getElementById("regForm").classList.add("p-1");
}
// console.log(window.screen.width); console.log(window.screen.height);
function ResponsiveForm() {
    // window.screen.width
    if (window.screen.width <= 380) {
        document.getElementById("regForm").classList.remove("p-5");
        document.getElementById("regForm").classList.add("p-1");
    } else {
        document.getElementById("regForm").classList.remove("p-1");
        document.getElementById("regForm").classList.add("p-5");
    }
}
window.onresize = ResponsiveForm;
window.onload = ResponsiveForm;
//Date Error Message
let date = new Date();
//console.log(date.getFullYear() + 1);
$(document).ready(function () {
    $(".btnpopover").popover({
        title: "سنة البناء:",
        content: "يجب أن تكون القيمة بين 1900 و " + date.getFullYear(),
    });
});
//for Popover
var popoverTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="popover"]')
);
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
});

// RE noDetails

let RET_NoDetails = [
    "أرض",
    "أرض مباني سكنية",
    "أرض إدارية",
    "أرض تجارية",
    "أرض صناعية",
    "أرض زراعية",
    "تجاري",
    "مخزن",
    "مستودع",
    "محل",
    "معرض",
    "مطعم",
    "كافيه",
    "مصنع",
    "مدفنة",
    "قبر",
    "عقار آخر",
];
let RET_FloorsHouses = ["مبنى", "عمارة", "برج", "مصنع", "برج إداري"]; //عدد المنازل/عدد الطوابق/عدد الغرف
let RET_Floors = [
    "مول",
    "شاليه",
    "فيلا",
    "توين هاوس",
    "تاون هاوس",
    "فيلا منفصلة",
    "قصر",
    "مستشفى",
]; //عدد الطوابق
function hideRE() {
    if (
        RET_NoDetails.includes(document.getElementById("realEstateType").value)
    ) {
        document.getElementById("inputFloor-s").classList.add("d-none");
        document.getElementById("inputRoomNum").classList.add("d-none");
        document.getElementById("inputBathRoomNum").classList.add("d-none");
        document.getElementById("div-Features").classList.add("d-none");
        document.getElementById("floorIn").value = "noDetails";
        document.getElementById("RoomNumIn").value = "noDetails";
        document.getElementById("BathRoomNumIn").value = "noDetails";
        document.getElementById("Features_value").value = "noDetails";
        return;
    }
    document.getElementById("homeSVG").classList.add("d-none");
    document.getElementById("bathSVG").classList.remove("d-none");
    document.getElementById("inputFloor-s").classList.remove("d-none");
    document.getElementById("inputRoomNum").classList.remove("d-none");
    document.getElementById("inputBathRoomNum").classList.remove("d-none");
    document.getElementById("div-Features").classList.remove("d-none");
    // document.getElementById("floorIn").value = "";
    // document.getElementById("RoomNumIn").value = "";
    // document.getElementById("BathRoomNumIn").value = "";
    // document.getElementById("Features_value").value = "";
    document.getElementById("labelFloor-s").textContent = "الطابق:";
    document.getElementById("labelRoomNum").textContent = "عدد الغرف:";
    document.getElementById("labelBathRoomNum").textContent = "عدد الحمامات:";
    if (document.getElementById("realEstateType").value == "حضانة أطفال") {
        document.getElementById("inputFloor-s").classList.add("d-none");
        document.getElementById("floorIn").value = "0";
        return;
    }
    if (
        RET_FloorsHouses.includes(
            document.getElementById("realEstateType").value
        ) ||
        RET_Floors.includes(document.getElementById("realEstateType").value)
    ) {
        //console.log("noDetails");
        document.getElementById("labelFloor-s").textContent = "عدد الطوابق:";
        if (
            RET_FloorsHouses.includes(
                document.getElementById("realEstateType").value
            )
        ) {
            document.getElementById("labelBathRoomNum").textContent =
                "عدد الشقق:";
            document.getElementById("bathSVG").classList.add("d-none");
            document.getElementById("homeSVG").classList.remove("d-none");
        }
    }
}
document.getElementById("realEstateType").onblur = hideRE();
//Location-->

var List1 = document.getElementById("validationCustom01"); //for city
var List2 = document.getElementById("validationCustom02"); //for town
var List3 = document.getElementById("validationCustom03"); //for region
var List4 = document.getElementById("validationCustom04"); //for side
let RElocation = "";
document.getElementById("validationCustom01").onchange = function () {
    document
        .getElementById("validationCustom01")
        .classList.remove("alert-danger");
    document.getElementById("validationCustom03").classList.add("d-none");
    document.getElementById("validationCustom04").classList.add("d-none");
    while (List2.options.length) {
        List2.remove(0);
    }
    if (List1.options[List1.selectedIndex].value != "") {
        document
            .getElementById("validationCustom02")
            .classList.remove("d-none");
    }
    var sel1 = List1.options[List1.selectedIndex].value;
    console.log(sel1);
    var towns = arr2[sel1];
    if (towns) {
        var i;
        for (i = 0; i < towns.length; i++) {
            var town;
            if (i == 0) {
                town = new Option(towns[i], "");
                town.disabled = true;
                town.selected = true;
            } else {
                town = new Option(towns[i], towns[i]);
            }
            List2.options.add(town);
        }
    }
};
document.getElementById("validationCustom02").onchange = function () {
    document
        .getElementById("validationCustom02")
        .classList.remove("alert-danger");
    document.getElementById("validationCustom04").classList.add("d-none");
    while (List3.options.length) {
        List3.remove(0);
    }
    if (List1.options[List1.selectedIndex].value == "دمشق") {
        RElocation = document.getElementById("validationCustom02").value;
        document.getElementById("validationCustom03").classList.add("d-none");
        document
            .getElementById("validationCustom03")
            .options.add(new Option(" ", " "));
        while (List4.options.length) {
            List4.remove(0);
        }
        document
            .getElementById("validationCustom04")
            .options.add(new Option(" ", " "));
    } else if (List2.options[List2.selectedIndex].value != "") {
        document
            .getElementById("validationCustom03")
            .classList.remove("d-none");
    }
    var sel2 = List2.options[List2.selectedIndex].value;
    var regions = arr3[sel2];
    if (regions) {
        var i;
        for (i = 0; i < regions.length; i++) {
            var region;
            if (i == 0) {
                region = new Option(regions[i], "");
                region.disabled = true;
                region.selected = true;
            } else {
                region = new Option(regions[i], regions[i]);
            }
            List3.options.add(region);
        }
    }
};
document.getElementById("validationCustom03").onchange = function () {
    document
        .getElementById("validationCustom03")
        .classList.remove("alert-danger");
    while (List4.options.length) {
        List4.remove(0);
    }
    if (
        List1.options[List1.selectedIndex].value == "القنيطرة" ||
        List1.options[List1.selectedIndex].value == "طرطوس" ||
        List1.options[List1.selectedIndex].value == "إدلب" ||
        List2.options[List2.selectedIndex].value == "مصياف" ||
        List2.options[List2.selectedIndex].value == "السلمية" ||
        List2.options[List2.selectedIndex].value == "مدينة حلب"
    ) {
        RElocation = document.getElementById("validationCustom03").value;
        document.getElementById("validationCustom04").classList.add("d-none");
        document
            .getElementById("validationCustom04")
            .options.add(new Option(" ", " "));
        //console.log("HI");
    } else if (List3.options[List3.selectedIndex].value != "") {
        document
            .getElementById("validationCustom04")
            .classList.remove("d-none");
    }
    var sel3 = List3.options[List3.selectedIndex].value;
    var sides = arr4[sel3];
    if (sides) {
        var i;
        for (i = 0; i < sides.length; i++) {
            var side;
            if (i == 0) {
                side = new Option(sides[i], "");
                side.disabled = true;
                side.selected = true;
            } else {
                side = new Option(sides[i], sides[i]);
            }
            List4.options.add(side);
        }
    }
};
document.getElementById("validationCustom04").oninput = function () {
    RElocation = document.getElementById("validationCustom04").value;
    document
        .getElementById("validationCustom04")
        .classList.remove("alert-danger");
};

const progress1 = document.getElementById("progress1");
const prev = document.getElementById("prevBtn");
const next = document.getElementById("nextBtn");
const circles = document.querySelectorAll(".circle");
let currentTab = 0; // Current tab is set to be the first tab (0)
let currentActive = 1;
showTab(currentTab); // Display the current tab
function showTab(n) {
    // This function will display the specified tab of the form ...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0 || n == x.length - 1) {
        document.getElementById("prevBtn").classList.add("d-none");
    } else {
        document.getElementById("prevBtn").classList.remove("d-none");
    }
    if (n == x.length - 2) {
        document.getElementById("nextBtn").innerHTML = "تحديث";
    } else if (n == x.length - 1) {
        document.getElementById("nextBtn").innerHTML = "جاري التحديث";
    } else {
        document.getElementById("nextBtn").innerHTML = "التالي";
    }
    // ... and run a function that displays the correct step indicator:
    if (n != x.length - 1) {
        fixStepIndicator(n);
    }
}

function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    console.log(currentActive);
    // Hide the current tab:

    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    console.log(currentTab);
    showTab(currentTab);
    if (currentTab >= x.length - 1) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // if you have reached the end of the form... :
    // if (currentTab >= (x.length - 1)) {//...the form gets submitted:
    // 	document.getElementById("regForm").submit();
    // 	return false;
    // }
    // // Otherwise, display the correct tab:
    // showTab(currentTab);
    if (n == 1) {
        currentActive++;
        if (currentActive > circles.length) {
            currentActive = circles.length;
        }
    }
    if (n == -1) {
        currentActive--;
        if (currentActive < 1) {
            currentActive = 1;
        }
    }
    update();
}

function validateForm() {
    var x,
        y,
        i,
        valid = true;
    if (currentActive == 1) {
        valid = validateCheckDep();
        valid &= changeCenterAndMarker();
        valid &= document.getElementById("error-msg").textContent == "";
    }
    if (currentActive == 2) {
        valid = validateCheckDirection();
        valid &= validateNumber();
    }
    if (currentActive == 3) {
        valid = validateNumberofImages();
        valid &= !document
            .getElementById("youtubeLinkInput")
            .classList.contains("alert-danger");
    }
    if (currentActive == 4) {
        // document.getElementById("prevBtn").classList.add("d-none");
        // Add +963 to first input.
        document.getElementById("phone").value =
            document.querySelector(".iti__selected-dial-code").textContent +
            document.getElementById("phone").value;
        // console.log(document.getElementById("phone").value);
        valid = calculateFeaturesIn();
        valid &= validateLatLng();
    }
    //This function deals with validation of the form fields
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // console.log(y.length)
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " alert-danger";
            // and set the current valid status to false:
            valid = false;
            // console.log(valid);
        }
    }
    console.log(valid);
    var z = x[currentTab].getElementsByTagName("select");
    // A loop that checks every select field in the current tab:
    for (i = 0; i < z.length; i++) {
        // If a field is empty...
        if (z[i].value == "") {
            // add an "invalid" class to the field:
            z[i].className += " alert-danger";
            // and set the current valid status to false:
            valid = false;
        }
    }
    console.log(valid);
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className +=
            " finish";
    }
    return valid; // return the valid status
}

function validateCheckDep() {
    //console.log(document.getElementById("Departement-value").value);
    if (
        !document.getElementById("flexCheckChecked_D1").checked &&
        !document.getElementById("flexCheckChecked_D2").checked &&
        !document.getElementById("flexCheckChecked_D3").checked
    ) {
        document
            .getElementById("invalid-feedback-Departement")
            .classList.remove("d-none");
        document.getElementById("Departement-value").value = "0";
        return false;
    } else {
        document
            .getElementById("invalid-feedback-Departement")
            .classList.add("d-none");
    }
    if (document.getElementById("flexCheckChecked_D1").checked) {
        document.getElementById("PriceSell").classList.remove("d-none");
        // document.getElementById("PriceInSell").value = "";
    } else {
        document.getElementById("PriceSell").classList.add("d-none");
        document.getElementById("PriceInSell").value = "noDetails";
    }
    if (document.getElementById("flexCheckChecked_D2").checked) {
        document.getElementById("PriceRent").classList.remove("d-none");
        // document.getElementById("PriceInRent").value = "";
    } else {
        document.getElementById("PriceRent").classList.add("d-none");
        document.getElementById("PriceInRent").value = "noDetails";
    }
    if (document.getElementById("flexCheckChecked_D3").checked) {
        document.getElementById("PriceMort").classList.remove("d-none");
        // document.getElementById("PriceInMort").value = "";
    } else {
        document.getElementById("PriceMort").classList.add("d-none");
        document.getElementById("PriceInMort").value = "noDetails";
    }
    let Departement_value = 0;
    //Departement_value = Departement_value | parseInt(document.getElementById("flexCheckChecked_D1").value) | parseInt(document.getElementById("flexCheckChecked_D2").value) | parseInt(document.getElementById("flexCheckChecked_D3").value);
    if (document.getElementById("flexCheckChecked_D1").checked) {
        Departement_value += parseInt(
            document.getElementById("flexCheckChecked_D1").value
        );
    }
    if (document.getElementById("flexCheckChecked_D2").checked) {
        Departement_value += parseInt(
            document.getElementById("flexCheckChecked_D2").value
        );
    }
    if (document.getElementById("flexCheckChecked_D3").checked) {
        Departement_value += parseInt(
            document.getElementById("flexCheckChecked_D3").value
        );
    }
    // console.log(Departement_value);
    document.getElementById("Departement-value").value = Departement_value;
    return true;
}

function changeCenterAndMarker() {
    if (
        RElocation != "" &&
        Boolean(latLng[RElocation]) &&
        Boolean(latLng[RElocation])
    ) {
        document
            .getElementById("invalid-feedback-Internet")
            .classList.add("d-none");
        marker.setPosition({
            lat: latLng[RElocation][0],
            lng: latLng[RElocation][1],
        });
        map.setCenter({
            lat: latLng[RElocation][0],
            lng: latLng[RElocation][1],
        });
        return true;
    }
    document
        .getElementById("invalid-feedback-Internet")
        .classList.remove("d-none");
    return false;
}

function validateCheckDirection() {
    //console.log(document.getElementById("Departement-value").value);
    if (
        !document.getElementById("North_Direction").checked &&
        !document.getElementById("East_Direction").checked &&
        !document.getElementById("South_Direction").checked &&
        !document.getElementById("West_Direction").checked &&
        document.getElementById("floorIn").value >= 0
    ) {
        document
            .getElementById("invalid-feedback-Direction")
            .classList.remove("d-none");
        document.getElementById("Direction-value").value = "0";
        return false;
    } else {
        document
            .getElementById("invalid-feedback-Direction")
            .classList.add("d-none");
    }
    let Direction_value = 0;
    if (document.getElementById("North_Direction").checked) {
        Direction_value += parseInt(
            document.getElementById("North_Direction").value
        );
    }
    if (document.getElementById("East_Direction").checked) {
        Direction_value += parseInt(
            document.getElementById("East_Direction").value
        );
    }
    if (document.getElementById("South_Direction").checked) {
        Direction_value += parseInt(
            document.getElementById("South_Direction").value
        );
    }
    if (document.getElementById("West_Direction").checked) {
        Direction_value += parseInt(
            document.getElementById("West_Direction").value
        );
    }
    //console.log(Direction_value);
    document.getElementById("Direction-value").value = Direction_value;
    return true;
}

function validateNumber() {
    if (
        (document.getElementById("AreaIn").value < 1 ||
            document.getElementById("AreaIn").value > 185180) &&
        document.getElementById("AreaIn").value != ""
    ) {
        return false;
    }
    if (
        document.getElementById("PriceInSell").value < 1 &&
        document.getElementById("PriceInSell").value != ""
    ) {
        return false;
    }
    if (
        document.getElementById("PriceInRent").value < 1 &&
        document.getElementById("PriceInRent").value != ""
    ) {
        return false;
    }
    if (
        document.getElementById("PriceInMort").value < 1 &&
        document.getElementById("PriceInMort").value != ""
    ) {
        return false;
    }
    if (
        (document.getElementById("builtYearIn").value < 1900 ||
            document.getElementById("builtYearIn").value > 2023) &&
        document.getElementById("builtYearIn").value != ""
    ) {
        return false;
    }
    if (
        document.getElementById("floorIn").value < -2 ||
        document.getElementById("floorIn").value > 30
    ) {
        return false;
    }
    if (
        (document.getElementById("RoomNumIn").value < 1 ||
            document.getElementById("RoomNumIn").value > 100) &&
        document.getElementById("RoomNumIn").value != ""
    ) {
        return false;
    }
    if (
        (document.getElementById("BathRoomNumIn").value < 1 ||
            document.getElementById("BathRoomNumIn").value > 50) &&
        document.getElementById("BathRoomNumIn").value != ""
    ) {
        return false;
    }
    return true;
}

function calculateFeaturesIn() {
    let Features_value = 0;
    if (document.getElementById("wifi").checked) {
        Features_value += parseInt(document.getElementById("wifi").value);
    }
    if (document.getElementById("parking").checked) {
        Features_value += parseInt(document.getElementById("parking").value);
    }
    if (document.getElementById("bool").checked) {
        Features_value += parseInt(document.getElementById("bool").value);
    }
    if (document.getElementById("balcony").checked) {
        Features_value += parseInt(document.getElementById("balcony").value);
    }
    if (document.getElementById("garden").checked) {
        Features_value += parseInt(document.getElementById("garden").value);
    }
    if (document.getElementById("security").checked) {
        Features_value += parseInt(document.getElementById("security").value);
    }
    if (document.getElementById("room").checked) {
        Features_value += parseInt(document.getElementById("room").value);
    }
    if (document.getElementById("air").checked) {
        Features_value += parseInt(document.getElementById("air").value);
    }
    if (document.getElementById("heating").checked) {
        Features_value += parseInt(document.getElementById("heating").value);
    }
    // console.log(Features_value);
    document.getElementById("Features_value").value = Features_value;
    return true;
}

function validateLatLng() {
    if (
        (document.getElementById("latitudeValue").value == "") |
        (document.getElementById("longitudeValue").value == "")
    ) {
        document
            .getElementById("invalid-feedback-LatLng")
            .classList.remove("d-none");
        return false;
    } else {
        document
            .getElementById("invalid-feedback-LatLng")
            .classList.add("d-none");
        return true;
    }
}
/*Validate Numbers*/
document.getElementById("AreaIn").onblur = function () {
    if (
        (document.getElementById("AreaIn").value < 1 ||
            document.getElementById("AreaIn").value > 92590) &&
        document.getElementById("AreaIn").value != ""
    ) {
        document
            .getElementById("invalid-feedback-Area")
            .classList.remove("d-none");
        document.getElementById("AreaIn").classList.add("alert-danger");
    } else {
        document
            .getElementById("invalid-feedback-Area")
            .classList.add("d-none");
        document.getElementById("AreaIn").classList.remove("alert-danger");
    }
};
document.getElementById("PriceInSell").onblur = function () {
    if (
        document.getElementById("PriceInSell").value < 1 &&
        document.getElementById("PriceInSell").value != ""
    ) {
        document
            .getElementById("invalid-feedback-PriceSell")
            .classList.remove("d-none");
        document.getElementById("PriceInSell").classList.add("alert-danger");
    } else {
        document
            .getElementById("invalid-feedback-PriceSell")
            .classList.add("d-none");
        document.getElementById("PriceInSell").classList.remove("alert-danger");
    }
};
document.getElementById("PriceInRent").onblur = function () {
    if (
        document.getElementById("PriceInRent").value < 1 &&
        document.getElementById("PriceInRent").value != ""
    ) {
        document
            .getElementById("invalid-feedback-PriceRent")
            .classList.remove("d-none");
        document.getElementById("PriceInRent").classList.add("alert-danger");
    } else {
        document
            .getElementById("invalid-feedback-PriceRent")
            .classList.add("d-none");
        document.getElementById("PriceInRent").classList.remove("alert-danger");
    }
};
document.getElementById("PriceInMort").onblur = function () {
    if (
        document.getElementById("PriceInMort").value < 1 &&
        document.getElementById("PriceInMort").value != ""
    ) {
        document
            .getElementById("invalid-feedback-PriceMort")
            .classList.remove("d-none");
        document.getElementById("PriceInMort").classList.add("alert-danger");
    } else {
        document
            .getElementById("invalid-feedback-PriceMort")
            .classList.add("d-none");
        document.getElementById("PriceInMort").classList.remove("alert-danger");
    }
};
document.getElementById("builtYearIn").onblur = function () {
    if (
        (document.getElementById("builtYearIn").value < 1900 ||
            document.getElementById("builtYearIn").value >
                date.getFullYear() + 1) &&
        document.getElementById("builtYearIn").value != ""
    ) {
        document
            .getElementById("invalid-feedback-builtYear")
            .classList.remove("d-none");
        document.getElementById("builtYearIn").classList.add("alert-danger");
    } else {
        document
            .getElementById("invalid-feedback-builtYear")
            .classList.add("d-none");
        document.getElementById("builtYearIn").classList.remove("alert-danger");
    }
};
document.getElementById("floorIn").onblur = function () {
    if (
        document.getElementById("floorIn").value < -2 ||
        document.getElementById("floorIn").value > 30
    ) {
        document.getElementById("floorIn").classList.add("alert-danger");
        document
            .getElementById("invalid-feedback-floor/s")
            .classList.remove("d-none");
    } else {
        document.getElementById("floorIn").classList.remove("alert-danger");
        document
            .getElementById("invalid-feedback-floor/s")
            .classList.add("d-none");
    }
};
document.getElementById("RoomNumIn").onblur = function () {
    if (
        (document.getElementById("RoomNumIn").value < 1 ||
            document.getElementById("RoomNumIn").value > 100) &&
        document.getElementById("RoomNumIn").value != ""
    ) {
        document.getElementById("RoomNumIn").classList.add("alert-danger");
        document
            .getElementById("invalid-feedback-RoomNum")
            .classList.remove("d-none");
    } else {
        document.getElementById("RoomNumIn").classList.remove("alert-danger");
        document
            .getElementById("invalid-feedback-RoomNum")
            .classList.add("d-none");
    }
};
document.getElementById("BathRoomNumIn").onblur = function () {
    if (
        (document.getElementById("BathRoomNumIn").value < 1 ||
            document.getElementById("BathRoomNumIn").value > 50) &&
        document.getElementById("BathRoomNumIn").value != ""
    ) {
        document.getElementById("BathRoomNumIn").classList.add("alert-danger");
        document
            .getElementById("invalid-feedback-BathRoomNum")
            .classList.remove("d-none");
    } else {
        document
            .getElementById("BathRoomNumIn")
            .classList.remove("alert-danger");
        document
            .getElementById("invalid-feedback-BathRoomNum")
            .classList.add("d-none");
    }
};
/*Validate Youtube URL*/
document.getElementById("youtubeLinkInput").onchange = function () {
    document.getElementById("placeholder_YTVideo").classList.remove("d-none");
    document.getElementById("YTVideo").classList.add("d-none");
};
document.getElementById("youtubeLinkInput").onblur = function () {
    document
        .getElementById("youtubeLinkInput")
        .classList.remove("alert-danger");
    document
        .getElementById("invalid-feedback-youtubeLink")
        .classList.add("d-none");
    if (
        /^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube(-nocookie)?\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/gi.test(
            document.getElementById("youtubeLinkInput").value
        )
    ) {
        // var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/i;
        var match = document
            .getElementById("youtubeLinkInput")
            .value.match(
                /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/
            );
        var match_flag = false;
        console.log(match && match[7].length == 11 ? match[7] : false);
        if (match && match[7].length == 11 ? match[7] : false) {
            match_flag = true;
        } else {
            match = document
                .getElementById("youtubeLinkInput")
                .value.match(
                    /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(shorts\/)|(watch\?))\??v?=?([^#&?]*).*/
                );
            console.log(match && match[7].length == 11 ? match[7] : false);
            if (match && match[7].length == 11 ? match[7] : false) {
                match_flag = true;
            }
        }
        if (match_flag) {
            document
                .getElementById("placeholder_YTVideo")
                .classList.add("d-none");
            document.getElementById("YTVideo").classList.remove("d-none");
            document.getElementById("YTVideo").src =
                "https://www.youtube.com/embed/" + match[7];
            // console.log("Iamhere");
            return;
        }
    }
    document.getElementById("placeholder_YTVideo").classList.remove("d-none");
    document.getElementById("YTVideo").classList.add("d-none");
    document
        .getElementById("invalid-feedback-youtubeLink")
        .classList.remove("d-none");
    document.getElementById("youtubeLinkInput").classList.add("alert-danger");
};

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i,
        x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[n].className += " active";
}

function update() {
    circles.forEach((circle, idx) => {
        if (idx < currentActive) {
            circle.classList.add("activeBar");
        } else {
            circle.classList.remove("activeBar");
        }
    });
    const actives = document.querySelectorAll(".activeBar");
    //console.log(((actives.length - 1) / (circles.length - 1)) * 100);
    //console.log(actives.length);
    //progress1.style.width = (((actives.length - 1) / (circles.length - 1)) * 100) + "%";
    if (actives.length == 1) {
        progress1.style.width = 100 + "%";
    }
    if (actives.length == 2) {
        progress1.style.width = 65 + "%";
    }
    if (actives.length == 3) {
        progress1.style.width = 35 + "%";
    }
    if (actives.length == 4) {
        progress1.style.width = 0 + "%";
    }
    if (currentActive == 1) {
        prev.disabled = true;
    } else {
        prev.disabled = false;
        next.disabled = false;
    }
}

//Script Images

let images = [
    {
        name: "N",
        url: "Images/properties/1-1.jpg",
        file: "image[i]",
    },
];

function image_select() {
    let alert_content = "";
    var image = document.getElementById("image").files;
    for (i = 0; i < image.length; i++) {
        if (images.length <= 40) {
            if (checkDuplicate(image[i].name)) {
                images.push({
                    name: image[i].name,
                    url: URL.createObjectURL(image[i]),
                    file: image[i],
                });
            } else {
                alert_content += image[i].name + "، ";
            }
        } else {
            alert_content = "العدد الأعظمي للصور هو 40";
        }
    }
    if (alert_content != "") {
        if (images.length > 40) {
            document.getElementById("alert_content").textContent =
                alert_content;
        } else {
            document.getElementById("alert_content").textContent =
                alert_content + " تمت إضافتها مسبقاً.";
        }
        document.getElementById("alertImage").classList.remove("d-none");
    }
    document.getElementById("image_container").innerHTML = image_show();
    //document.getElementById('form').reset();
}

function image_show() {
    var image = "";
    images.forEach((i) => {
        image +=
            `<div class="mx-auto my-5 col-sm-2 image_container justify-content-center position-relative">
            <img class="mb-2 border border-1 rounded p-2 hover-shadow" src="` +
            i.url +
            `" alt="Image">
            <span class="position-absolute" onclick="delete_image(` +
            images.indexOf(i) +
            `)">&times;</span>
        </div>`;
    });
    return image;
}

function delete_image(e) {
    images.splice(e, 1);
    document.getElementById("image_container").innerHTML = image_show();
}

function checkDuplicate(name) {
    var image = true;
    if (images.length > 0) {
        for (e = 0; e < images.length; e++) {
            if (images[e].name == name) {
                image = false;
                break;
            }
        }
    }
    return image;
}

function validateNumberofImages() {
    if (images.length == 0) {
        document.getElementById("alert_content").textContent =
            "الرجاء إضافة صورة واحدة على الأقل";
        document.getElementById("alertImage").classList.remove("d-none");
        return false;
    }
    document.getElementById("alertImage").classList.add("d-none");
    return true;
}

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
    // allowDropdown: false,
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
var reset = function () {
    input.classList.remove("error");
    errorMsg.innerHTML = "";
    errorMsg.classList.add("hide");
    validMsg.classList.add("hide");
};
// on blur: validate
input.addEventListener("blur", function () {
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

//Script Google Maps

// 	new google.maps.event.addListener(map, 'click', function (event) {
// 		latitude = event.latLng.lat();
// 		longitude = event.latLng.lng();
// 		//marker = new google.maps.Marker({ position: { lat: latitude, lng: longitude }, map: map });
// 		marker = Marker({ position: { lat: latitude, lng: longitude }, map: map })
// 		// new google.maps.Marker({ position: { lat: event.latLng.lat, lng: event.latLng.lng }, map: map });
// 		// placeMarker(event.latLng);
// 	});
// }
let map, infoWindow, marker;

function initMap() {
    map = new google.maps.Map(document.getElementById("map_canvas"), {
        scaleControl: true,
        center: {
            lat: 35.08317095349495,
            lng: 38.34076870804504,
        },
        zoom: 15,
        // disableDefaultUI: true,
        zoomControl: true,
        mapTypeControl: false,
        scaleControl: true,
        streetViewControl: false,
        rotateControl: true,
        fullscreenControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    });
    marker = new google.maps.Marker({
        icon: {
            path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
            strokeColor: "#FFF",
            fillColor: "#a501a5",
            fillOpacity: 0.9,
            strokeWeight: 0,
            rotation: 0,
            scale: 2,
            anchor: new google.maps.Point(15, 30),
            label: {
                text: "Label text",
                fontFamily: "system-ui,-apple-system",
            },
        },
        title: "موقع عقارك",
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(35.08317095349495, 38.34076870804504),
    });
    marker.addListener("click", toggleBounce);
    google.maps.event.addListener(marker, "dragend", function (evt) {
        map.setCenter(marker.getPosition());
        // document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';
        document.getElementById("latitudeValue").value = evt.latLng.lat();
        // console.log(document.getElementById('latitudeValue').value);
        document.getElementById("longitudeValue").value = evt.latLng.lng();
        // console.log(document.getElementById('longitudeValue').value);
    });
    // google.maps.event.addListener(marker, 'dragstart', function (evt) {
    // 	map.setCenter(marker.getPosition());
    // 	document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>';
    // });btn btn-purple mb-2 py-2 px-4
    infoWindow = new google.maps.InfoWindow();
    const locationButton = document.createElement("button");
    locationButton.textContent = "الانتقال إلى موقعك الحالي";
    locationButton.style.fontFamily = "system-ui,-apple-system";
    locationButton.classList.add(
        "btn",
        "bg-purple",
        "text-white",
        "btn-purple",
        "py-2",
        "px-3",
        "mt-2",
        "ms-2"
    );
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
    locationButton.addEventListener("click", () => {
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                    };
                    infoWindow.setPosition(pos);
                    infoWindow.setContent("Location found.");
                    infoWindow.open(map);
                    map.setCenter(pos);
                },
                () => {
                    handleLocationError(true, infoWindow, map.getCenter());
                }
            );
        } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
        }
    });
}

function toggleBounce() {
    if (marker.getAnimation() !== null) {
        marker.setAnimation(null);
    } else {
        marker.setAnimation(google.maps.Animation.BOUNCE);
    }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(
        browserHasGeolocation
            ? "خطأ: فشلت خدمة تحديد الموقع الجغرافي"
            : "خطأ: متصفحك لا يدعم تحديد الموقع الجغرافي"
    );
    infoWindow.open(map);
}
window.initMap = initMap;
// placeholder Script
let placeholders = document.querySelectorAll(".placeholder");
window.onload = function () {
    for (placeholder of placeholders) {
        console.log("placeholder");
        placeholder.classList.remove("placeholder");
    }
    document.getElementById("nextBtn").classList.remove("disabled");
    document.getElementById("placeholder_YTVideo").classList.add("placeholder");

    // Depatement value
    if (
        (1 << 0) &
        parseInt(document.getElementById("Departement-value").value)
    ) {
        document.getElementById("flexCheckChecked_D1").checked = true;
    }
    if (
        (1 << 1) &
        parseInt(document.getElementById("Departement-value").value)
    ) {
        document.getElementById("flexCheckChecked_D2").checked = true;
    }
    if (
        (1 << 2) &
        parseInt(document.getElementById("Departement-value").value)
    ) {
        document.getElementById("flexCheckChecked_D3").checked = true;
    }
    // Direction value
    if ((1 << 0) & parseInt(document.getElementById("Direction-value").value)) {
        document.getElementById("North_Direction").checked = true;
    }
    if ((1 << 1) & parseInt(document.getElementById("Direction-value").value)) {
        document.getElementById("East_Direction").checked = true;
    }
    if ((1 << 2) & parseInt(document.getElementById("Direction-value").value)) {
        document.getElementById("South_Direction").checked = true;
    }
    if ((1 << 3) & parseInt(document.getElementById("Direction-value").value)) {
        document.getElementById("West_Direction").checked = true;
    }
    // Features value
    console.log(document.getElementById("Features_value").value);

    if ((1 << 0) & parseInt(document.getElementById("Features_value").value)) {
        document.getElementById("wifi").checked = true;
    }
    if ((1 << 1) & parseInt(document.getElementById("Features_value").value)) {
        document.getElementById("air").checked = true;
    }
    if ((1 << 2) & parseInt(document.getElementById("Features_value").value)) {
        document.getElementById("bool").checked = true;
    }
    if ((1 << 3) & parseInt(document.getElementById("Features_value").value)) {
        document.getElementById("security").checked = true;
    }
    if ((1 << 4) & parseInt(document.getElementById("Features_value").value)) {
        document.getElementById("garden").checked = true;
    }
    if ((1 << 5) & parseInt(document.getElementById("Features_value").value)) {
        document.getElementById("heating").checked = true;
    }
    if ((1 << 6) & parseInt(document.getElementById("Features_value").value)) {
        document.getElementById("balcony").checked = true;
    }
    if ((1 << 7) & parseInt(document.getElementById("Features_value").value)) {
        document.getElementById("room").checked = true;
    }
    if ((1 << 8) & parseInt(document.getElementById("Features_value").value)) {
        document.getElementById("parking").checked = true;
    }
    // initial
    hideRE();
    document.getElementById("image_container").innerHTML = image_show();
};
