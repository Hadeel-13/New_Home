<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detail_Post</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Amiri&family=Tajawal:wght@300&display=swap");

        * {
            font-family: "Amiri", serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 20px;
        }

        :root {

            --primary-color: #6f0183;
            --primary-color-rgb: rgba(123, 44, 191, 0.8);
            --primary-color-hover: #6f0183;
            --primary-font: "Amiri", serif;
            --primary-font: #e7e6eb;
        }


        .dir {
            direction: rtl;
        }

        .fl {
            float: right;
        }

        .container-fluid2 {
            background-color: #eee;
        }

        /* المنشورات المميزة */

        .p-card {
            border: 1px solid #6f0183;

            border-radius: 6px;
            box-shadow: 0 0 20px 0 rgba(62, 28, 131, .1);
        }

        .p-details {
            padding: 10px;
            border-radius: 0px;
            background: #f2f2f2;
            color: #6f0183;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px
        }

        body {
            background: #eee
        }

        .spec span {
            font-size: 13px
        }

        .spec h6 {
            font-size: 16px;
            font-weight: 500
        }

        .carousel-indicators li {
            box-sizing: content-box;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            width: 12px;
            height: 12px;
            margin-right: 3px;
            margin-left: 3px;
            text-indent: -999px;
            cursor: pointer;
            background-color: #fff;
            background-clip: padding-box;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            opacity: .5;
            transition: opacity .6s ease
        }

        .line {
            background-color: #6f0183;
            margin-top: 4px;
            margin-bottom: 4px;
            height: 0.2px
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            padding-top: 200%;
        }

        /* ----------button-featured-post----------- */


        .div1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #6f0183;
            font-family: 'Raleway', sans-serif;
            font-weight: bold;
        }

        .a1 {
            position: relative;
            display: inline-block;
            padding: 25px 30px;
            margin: 40px 0;
            color: #6f0183;
            text-decoration: none;
            text-transform: uppercase;
            transition: 0.5s;
            overflow: hidden;
            margin-left: 50px;

        }

        .a1:hover {
            background: #6f0183;
            color: #fff;
            box-shadow: 0 0 5px #6f0183,
                0 0 25px #6f0183,
                0 0 50px #6f0183,
                0 0 200px #6f0183;
            -webkit-box-reflect: below 1px #6f0183;
        }

        .a1:nth-child(1) {
            filter: hue-rotate(0deg);
        }

        .a1:nth-child(2) {
            filter: hue-rotate(0deg);
        }

        .a1 span {
            position: absolute;
            display: block;
        }

        .a1 span:nth-child(1) {
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: #6f0183;
            animation: animate1 1s linear infinite;
        }

        @keyframes animate1 {
            0% {
                left: -100%;
            }

            50%,
            100% {
                left: 100%;
            }
        }

        .a1 span:nth-child(2) {
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: #6f0183;
            animation: animate2 1s linear infinite;
            animation-delay: 0.25s;
        }

        @keyframes animate2 {
            0% {
                top: -100%;
            }

            50%,
            100% {
                top: 100%;
            }
        }

        .a1 span:nth-child(3) {
            bottom: 0;
            right: 0;
            width: 100%;
            height: 2px;
            background: #6f0183;
            animation: animate3 1s linear infinite;
            animation-delay: 0.50s;
        }

        @keyframes animate3 {
            0% {
                right: -100%;
            }

            50%,
            100% {
                right: 100%;
            }
        }


        .a1 span:nth-child(4) {
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: #6f0183;
            animation: animate4 1s linear infinite;
            animation-delay: 0.75s;
        }

        @keyframes animate4 {
            0% {
                bottom: -100%;
            }

            50%,
            100% {
                bottom: 100%;
            }
        }

        /*/////////////////*/

        .visuallyhidden {
            position: absolute;
            z-index: -1;
            right: 0;
            opacity: 0;

        }

        h1 {
            color: white;
            text-align: center;
            margin-top: 1em;
        }

        .container1 {
            overflow: hidden;
            padding: 20px;
            margin-top: 2em;
            background: rgb(248 247 250)
        }

        .card-carousel {
            --card-width: 80%;
            --card-max-width: 280px;
            --card-height: 350px;
            --carousel-min-width: 600px;
            z-index: 1;
            position: relative;
            margin: 0 auto;
            width: 100%;
            height: var(--card-height);
            min-width: var(--carousel-min-width);
            transition: filter .3s ease;
        }

        @media screen and (max-width: 640px) {
            .card-carousel {
                margin-left: calc((100vw - var(--carousel-min-width) - 40px) / 2)
            }
        }

        .card-carousel.smooth-return {
            transition: all .2s ease;
        }

        .card-carousel .card {
            background: whitesmoke;
            width: var(--card-width);
            max-width: var(--card-max-width);
            text-align: center;
            padding: 1em;
            min-width: 250px;
            height: var(--card-height);
            position: absolute;
            margin: 0 auto;
            color: rgba(0, 0, 0, .5);
            transition: inherit;
            -webkit-box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 5px 5px 0px rgba(0, 0, 0, 0.3);
            border-radius: 1em;
            filter: brightness(.9);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .card.highlight {
            filter: brightness(1)
        }

        .image-container img {
            width: 10em;
            height: 10em;
            position: relative;
            background-size: cover;
            margin-bottom: 1em;
            margin-top: 1em;
            border-radius: 100%;
            padding: 1em;
            -webkit-box-shadow: inset 0px 0px 17px 0px rgba(0, 0, 0, 0.3);
            -moz-box-shadow: inset 0px 0px 17px 0px rgba(0, 0, 0, 0.3);
            box-shadow: inset 0px 0px 17px 0px rgba(0, 0, 0, 0.3);

        }

        .image-container img::after {
            content: "";
            display: block;
            width: 120%;
            height: 120%;
            border: solid 3px rgba(0, 0, 0, .1);
            border-radius: 100%;
            position: absolute;
            top: calc(-10% - 3px);
            left: calc(-10% - 3px);
        }

        .h22 {
            padding: 1em;
            margin-top: 1em;
            background: rgba(0, 0, 0, .3);
            text-align: center;
            color: white;
            border-radius: .2em;
            display: inline-block;
            transform: translateX(calc((100vw - 100%) / 2))
        }

        .h22 a {
            color: #f5b916
        }

        /***************** */


        body {
            font-size: 14px;
            font-weight: 400;
            background: #eff6fa;
            color: #000000
        }

        div {
            display: block;
            position: relative;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        ul {
            list-style: none;
            margin-bottom: 0px
        }

        p {
            font-family: 'Rubik', sans-serif;
            font-size: 14px;
            line-height: 1.7;
            font-weight: 400;
            color: #828282;
            -webkit-font-smoothing: antialiased;
            -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
            text-shadow: rgba(0, 0, 0, .01) 0 0 1px
        }

        p a {
            display: inline;
            position: relative;
            color: inherit;
            border-bottom: solid 1px #ffa07f;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease
        }

        a,

        a:visited,
        a:active,
        a:link {
            text-decoration: none;
            -webkit-font-smoothing: antialiased;
            -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
            text-shadow: rgba(0, 0, 0, .01) 0 0 1px
        }

        p a:hover::after {
            opacity: 0.2
        }



        h1 {
            font-size: 48px
        }

        h2 {
            font-size: 36px
        }

        h3 {
            font-size: 24px
        }

        h4 {
            font-size: 18px
        }

        h5 {
            font-size: 14px
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Rubik', sans-serif;
            font-weight: 500;
            -webkit-font-smoothing: antialiased;
            -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
            text-shadow: rgba(0, 0, 0, .01) 0 0 1px
        }


        section {
            display: block;
            position: relative;
            box-sizing: border-box
        }

        .clear {
            clear: both
        }

        .clearfix::before,
        .clearfix::after {
            content: "";
            display: table
        }

        .clearfix::after {
            clear: both
        }

        .clearfix {
            zoom: 1
        }

        .float_left {
            float: left
        }

        .float_right {
            float: right
        }

        .trans_200 {
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease
        }

        .trans_300 {
            -webkit-transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            -ms-transition: all 300ms ease;
            -o-transition: all 300ms ease;
            transition: all 300ms ease
        }

        .trans_400 {
            -webkit-transition: all 400ms ease;
            -moz-transition: all 400ms ease;
            -ms-transition: all 400ms ease;
            -o-transition: all 400ms ease;
            transition: all 400ms ease
        }

        .trans_500 {
            -webkit-transition: all 500ms ease;
            -moz-transition: all 500ms ease;
            -ms-transition: all 500ms ease;
            -o-transition: all 500ms ease;
            transition: all 500ms ease
        }

        .fill_height {
            height: 100%
        }

        .super_container {
            width: 100%;
            overflow: hidden
        }

        .prlx_parent {
            overflow: hidden
        }

        .prlx {
            height: 130% !important
        }

        .nopadding {
            padding: 0px !important
        }

        .button {
            display: inline-block;
            background: #0e8ce4;
            border-radius: 5px;
            height: 48px;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease
        }

        .button a {
            display: block;
            font-size: 18px;
            font-weight: 400;
            line-height: 48px;
            color: #FFFFFF;
            padding-left: 35px;
            padding-right: 35px
        }

        .button:hover {
            opacity: 0.8
        }

        .viewed {
            padding-top: 51px;
            padding-bottom: 60px;
            background: #f8f7fa
        }

        .bbb_viewed_title_container {
            border-bottom: solid 1px #dadada
        }

        .bbb_viewed_title {
            margin-bottom: 14px
        }

        .bbb_viewed_nav_container {
            position: absolute;
            float: left;
            bottom: 14px
        }

        .bbb_viewed_nav {
            display: inline-block;
            cursor: pointer
        }

        .bbb_viewed_nav i {
            color: #dadada;
            font-size: 18px;
            padding: 5px;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease
        }

        .bbb_viewed_nav:hover i {
            color: #606264
        }

        .bbb_viewed_prev {
            margin-right: 15px
        }

        .bbb_viewed_slider_container {
            padding-top: 50px
        }

        .bbb_viewed_item {
            width: 100%;
            background: #FFFFFF;
            border-radius: 2px;
            padding-top: 25px;
            padding-bottom: 25px;
            padding-left: 30px;
            padding-right: 30px
        }

        .bbb_viewed_image {
            width: 115px;
            height: 115px
        }

        .bbb_viewed_image img {
            display: block;
            max-width: 100%
        }

        .bbb_viewed_content {
            width: 100%;
            margin-top: 25px
        }

        .bbb_viewed_price {
            font-size: 16px;
            color: #000000;
            font-weight: 500
        }

        .bbb_viewed_item.discount .bbb_viewed_price {
            color: #df3b3b
        }

        .bbb_viewed_price span {
            position: relative;
            font-size: 12px;
            font-weight: 400;
            color: rgba(0, 0, 0, 0.6);
            margin-left: 8px
        }

        .bbb_viewed_price span::after {
            display: block;
            position: absolute;
            top: 6px;
            left: -2px;
            width: calc(100% + 4px);
            height: 1px;
            background: #8d8d8d;
            content: ''
        }

        .bbb_viewed_name {
            margin-top: 3px
        }

        .bbb_viewed_name a {
            font-size: 14px;
            color: #000000;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease
        }

        .bbb_viewed_name a:hover {
            color: #0e8ce4
        }

        .item_marks {
            position: absolute;
            top: 18px;
            left: 18px
        }

        .item_mark {
            display: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            color: #FFFFFF;
            font-size: 10px;
            font-weight: 500;
            line-height: 36px;
            text-align: center
        }

        .item_discount {
            background: #df3b3b;
            margin-right: 5px
        }

        .item_new {
            background: #0e8ce4
        }

        .bbb_viewed_item.discount .item_discount {
            display: inline-block
        }

        .bbb_viewed_item.is_new .item_new {
            display: inline-block
        }

        /*****footer****** */
        body {
            margin-top: 20px;
        }

        .deneb_footer .widget_wrapper {
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 200px;
            padding-bottom: 70px;
            background-color: #fff;
        }

        @media (max-width: 767px) {
            .deneb_footer .widget_wrapper .widget {
                margin-bottom: 40px;
            }
        }

        .deneb_footer .widget_wrapper .widget .widget_title {
            margin-bottom: 30px;
        }

        .deneb_footer .widget_wrapper .widget .widget_title h4 {
            font-weight: bold;
        }

        .deneb_footer .widget_wrapper .widget .widget_title h4:after {
            content: "";
            display: block;
            background: url(../images/shape/line.png) no-repeat;
            max-width: 38px;
            height: 2px;
            margin-top: 5px;
        }

        .deneb_cta .cta_wrapper {
            padding: 45px 50px 42px;
            max-width: 970px;
            border-radius: 15px;
            margin: auto;
            margin-bottom: -135px;
            position: relative;
            background: linear-gradient(115deg, #6f0183, #82498C, #c45db8);
            background-image: -moz-linear-gradient(0deg, #6f0183 0%, #6f0183 100%);
            background-image: -webkit-linear-gradient(0deg, #6f0183 0%, #6f0183 100%);
            background-image: -ms-linear-gradient(0deg, #6f0183 0%, #6f0183 100%);
            box-shadow: 2.5px 4.33px 15px 0px rgba(254, 0, 224, 0.4);
            z-index: 1;
        }

        .deneb_cta .cta_wrapper:after {
            content: "";
            background: url(../images/shape/cta_shape.png) no-repeat;
            background-position: bottom;
            width: 100%;
            height: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        .deneb_cta .cta_wrapper .cta_content h3 {
            color: #fff;
            font-weight: bold;
        }

        @media (max-width: 767px) {
            .deneb_cta .cta_wrapper .cta_content h3 {
                font-size: 24px;
            }
        }

        .deneb_cta .cta_wrapper .cta_content h3:after {
            content: "";
            display: block;
            background: url(../images/shape/line_2.png) no-repeat;
            max-width: 110px;
            height: 2px;
            margin-top: 13px;
            margin-bottom: 24px;
        }

        .deneb_cta .cta_wrapper .cta_content p {
            color: #fff;
        }

        .deneb_cta .cta_wrapper .button_box {
            float: right;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .deneb_cta .cta_wrapper .button_box {
                float: none;
                text-align: left;
                margin-top: 30px;
            }
        }

        @media (max-width: 767px) {
            .deneb_cta .cta_wrapper .button_box {
                float: none;
                text-align: center;
                margin-top: 30px;
            }
        }

        .deneb_cta .cta_wrapper .button_box .deneb_btn {
            background: #fff;
            color: #011a3e;
        }

        .deneb_cta .cta_wrapper .button_box .deneb_btn:hover,
        .deneb_cta .cta_wrapper .button_box .deneb_btn:focus {
            box-shadow: 2.5px 4.33px 15px 0px rgba(0, 0, 0, 0.15);
        }

        .copyright_area {
            text-align: center;
            margin-top: 10px;
            background-color: #ffff;
        }

        /*///////////////socail_icons////////////////*/


        *:focus,
        *:active {
            outline: none !important;
            -webkit-tap-highlight-color: transparent;
        }

        .wrapper {
            display: inline-flex;
            list-style: none;
            justify-content: center;
            padding-top: 4%;
        }

        .wrapper .icon {
            position: relative;
            background: #ffffff;
            border-radius: 50%;
            padding: 15px;
            margin: 10px;
            width: 50px;
            height: 50px;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .tooltip {
            position: absolute;
            top: 0;
            font-size: 14px;
            background: #ffffff;
            color: #ffffff;
            padding: 5px 8px;
            border-radius: 5px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .tooltip::before {
            position: absolute;
            content: "";
            height: 8px;
            width: 8px;
            background: #ffffff;
            bottom: -3px;
            left: 50%;
            transform: translate(-50%) rotate(45deg);
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .wrapper .icon:hover .tooltip {
            top: -45px;
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .wrapper .icon:hover span,
        .wrapper .icon:hover .tooltip {
            text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
        }

        .wrapper .facebook:hover,
        .wrapper .facebook:hover .tooltip,
        .wrapper .facebook:hover .tooltip::before {
            background: #1877F2;
            color: #ffffff;
        }

        .wrapper .twitter:hover,
        .wrapper .twitter:hover .tooltip,
        .wrapper .twitter:hover .tooltip::before {
            background: #1DA1F2;
            color: #ffffff;
        }

        .wrapper .instagram:hover,
        .wrapper .instagram:hover .tooltip,
        .wrapper .instagram:hover .tooltip::before {
            background: #E4405F;
            color: #ffffff;
        }

        .wrapper .github:hover,
        .wrapper .github:hover .tooltip,
        .wrapper .github:hover .tooltip::before {
            background: #333333;
            color: #ffffff;
        }

        .wrapper .youtube:hover,
        .wrapper .youtube:hover .tooltip,
        .wrapper .youtube:hover .tooltip::before {
            background: #CD201F;
            color: #ffffff;
        }

        /******************************views*********/
        ul {
            list-style-type: none;
        }

        a,
        a:hover {
            text-decoration: none;
        }

        body {
            font-family: "Montserrat", sans-serif;
        }

        body .testimonial {
            padding: 100px 0;
        }

        body .testimonial .row .tabs {
            all: unset;
            margin-right: 50px;
            display: flex;
            flex-direction: column;
        }

        body .testimonial .row .tabs li {
            all: unset;
            display: block;
            position: relative;
        }

        body .testimonial .row .tabs li.active::before {
            position: absolute;
            content: "";
            width: 50px;
            height: 50px;
            background-color: #6f0183;
            border-radius: 50%;
        }

        body .testimonial .row .tabs li.active::after {
            position: absolute;
            content: "";
            width: 30px;
            height: 30px;
            background-color: #6f0183;
            border-radius: 50%;
        }

        body .testimonial .row .tabs li:nth-child(1) {
            align-self: flex-end;
        }

        body .testimonial .row .tabs li:nth-child(1)::before {
            left: 64%;
            bottom: -50px;
        }

        body .testimonial .row .tabs li:nth-child(1)::after {
            left: 97%;
            bottom: -81px;
        }

        body .testimonial .row .tabs li:nth-child(1) figure img {
            margin-left: auto;
        }

        body .testimonial .row .tabs li:nth-child(2) {
            align-self: flex-start;
        }

        body .testimonial .row .tabs li:nth-child(2)::before {
            right: -65px;
            top: 50%;
        }

        body .testimonial .row .tabs li:nth-child(2)::after {
            bottom: 101px;
            border-radius: 50%;
            right: -120px;
        }

        body .testimonial .row .tabs li:nth-child(2) figure img {
            margin-right: auto;
            max-width: 300px;
            width: 100%;
            margin-top: -50px;
        }

        body .testimonial .row .tabs li:nth-child(3) {
            align-self: flex-end;
        }

        body .testimonial .row .tabs li:nth-child(3)::before {
            right: -10px;
            top: -66%;
        }

        body .testimonial .row .tabs li:nth-child(3)::after {
            top: -130px;
            border-radius: 50%;
            right: -46px;
        }

        body .testimonial .row .tabs li:nth-child(3) figure img {
            margin-left: auto;
            margin-top: -50px;
        }

        body .testimonial .row .tabs li:nth-child(3):focus {
            border: 10px solid red;
        }

        body .testimonial .row .tabs li figure {
            position: relative;
        }

        body .testimonial .row .tabs li figure img {
            display: block;
        }

        body .testimonial .row .tabs li figure::after {
            content: "";
            position: absolute;
            top: 0;
            z-index: -1;
            width: 100%;
            height: 100%;
            border: 4px solid #6f0183;
            border-radius: 50%;
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            -webkit-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
        }

        body .testimonial .row .tabs li figure:hover::after {
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);

        }

        body .testimonial .row .tabs.carousel-indicators li.active figure::after {
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
        }

        body .testimonial .row .carousel>h3 {
            font-size: 20px;
            line-height: 1.45;
            color: rgba(0, 0, 0, 0.5);
            font-weight: 600;
            margin-bottom: 0;
        }

        body .testimonial .row .carousel h1 {
            font-size: 40px;
            line-height: 1.225;
            margin-top: 23px;
            font-weight: 700;
            margin-bottom: 0;
        }

        body .testimonial .row .carousel .carousel-indicators {
            all: unset;
            padding-top: 43px;
            display: flex;
            list-style: none;
        }

        body .testimonial .row .carousel .carousel-indicators li {
            background: #000;
            background-clip: padding-box;
            height: 2px;
        }

        body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper {
            margin-top: 42px;
        }

        body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper p {
            font-size: 25px;
            line-height: 1.72222;
            font-weight: 500;
            color: rgba(0, 0, 0, 0.7);
        }

        body .testimonial .row .carousel .carousel-inner .carousel-item .quote-wrapper h3 {
            color: #000;
            font-weight: 700;
            margin-top: 37px;
            font-size: 20px;
            line-height: 1.45;
            text-transform: uppercase;
        }

        @media only screen and (max-width: 1200px) {
            body .testimonial .row .tabs {
                margin-right: 25px;
            }
        }

        /*///////////////////////////////////*/
        .owl-item h4 {
            text-align: right;
            color: #82498C;
        }
    </style>
    <link rel="shortcut icon" href="storage/logo/favicon.png">
    <title>New Home</title>
    <link rel="shortcut icon" href="../storage/logo/favicon.png">
    <link media="all" type="text/css" rel="stylesheet" href="../vendor/core/plugins/cookie-consent/css/cookie-consente209.css?v=1.0.0">
    <link media="all" type="text/css" rel="stylesheet" href="../vendor/core/plugins/language/css/language-publice209.css?v=1.0.0">
    <link media="all" type="text/css" rel="stylesheet" href="../libraries/jquery-validation/validationEngine.jquery.css">
    <link media="all" type="text/css" rel="stylesheet" href="../libraries/bootstrap/bootstrap.min.v4.css">
    <link media="all" type="text/css" rel="stylesheet" href="../libraries/fontawesome/css/fontawesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="../libraries/owl-carousel/owl.carousel.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="../libraries/owl-carousel/owl.theme.default.css">
    <link media="all" type="text/css" rel="stylesheet" href="../css/style26f8.css?v=2.32.4">
    <link media="all" type="text/css" rel="stylesheet" href="../libraries/leaflet.css">
    <link media="all" type="text/css" rel="stylesheet" href="../libraries/magnific/magnific-popup.css">
    <link type="application/atom+xml" rel="alternate" title="Properties feed" href="../feed/properties">
    <link type="application/atom+xml" rel="alternate" title="Properties feed" href="../vi/feed/properties">
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="../feed/posts">
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="../vi/feed/posts">

    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-42586526-15" type="09d0203a6033273902f5f8f6-text/javascript"></script> -->
    <script src="../js/jquery.min.js" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../libraries/bootstrap/popper.min.js" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../libraries/owl-carousel/owl.carousel.min.js" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../libraries/jquery.matchHeight-min.js" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../libraries/jquery-validation/jquery.validationEngine-vi.js" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../libraries/jquery-validation/jquery.validationEngine.js" type="09d0203a6033273902f5f8f6-text/javascript"></script>

</head>
<body>
    <div id="alert-container"></div>
    <div class="bravo_topbar d-none d-sm-block dir">
        <div class="container-fluid w90">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <div class="topbar-left">
                            <div class="top-socials">
                                <a href="https://www.facebook.com/" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="https://youtube.com/" title="Youtube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>

                        </div>
                        <div class="topbar-right">
                            <ul class="topbar-items">
                                <li class="login-item">
                                    <a href="login"><i class="fas fa-sign-in-alt"></i>تسجيل الدخول</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="topmenu bg-light dir">
        <div id="header-waypoint" class="main-header">
            <div class="container-fluid2 w90">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.html">
                                <img src="images/logo.png" class="logo" height="40" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" id="header-waypoint" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fas fa-bars"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end animation" id="navbarSupportedContent">
                                <div class="main-menu-darken"></div>
                                <div class="main-menu-content">
                                    <div class="d-lg-none bg-primary p-2">
                                        <span class="text-white">Menu</span>
                                        <span class="float-right toggle-main-menu-offcanvas text-white">
                                            <i class="far fa-times-circle"></i>
                                        </span>
                                    </div>
                                    <div class="main-menu-nav d-lg-flex">
                                        <ul class="navbar-nav justify-content-end menu menu--mobile">
                                            <li class="menu-item   ">
                                                <a href="projects.html" target="_self">
                                                    المنشورات
                                                </a>
                                            </li>
                                            <li class="menu-item   ">
                                                <a href="{{route('agents.show')}}" target="_self">
                                                    الوكلاء
                                                </a>
                                            </li>

                                            <li class="menu-item   ">
                                                <a href="contact.html" target="_self">
                                                    تواصل
                                                </a>
                                            </li>
                                        </ul>
                                        <a class="btn btn-primary add-property" href="login.html">
                                            <i class="fas fa-plus-circle"></i> إضافة إعلان
                                        </a>
                                        <div class="d-sm-none">
                                            <div>
                                                <ul class="topbar-items d-block">
                                                    <li class="login-item">
                                                        <a href="wishlist.html"><i class="fas fa-heart"></i> Wishlist(<span class="wishlist-count">0</span>)</a>
                                                    </li>
                                                </ul>

                                                <div class="header-deliver">/</div>

                                                <ul class="topbar-items d-block">
                                                    <li class="login-item">
                                                        <a href="login.html"><i class="fas fa-sign-in-alt"></i> تسجيل الدخول</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="app">
        <main class="detailproject bg-white">
            <div data-property-id="16"></div>
            <div class="boxsliderdetail">
                <div class="slidetop">
                    <div class="owl-carousel" id="listcarousel">
                        <div class="item">
                            <img src="../images/b4-1.jpg" class="showfullimg" rel="0" alt="Apartment Muiderstraatweg in Diemen" title="Apartment Muiderstraatweg in Diemen" data-mfp-src="https://flex-home.botble.com/images/b4-1.jpg">
                        </div>
                        <div class="item">
                            <img src="../images/b3.jpg" class="showfullimg" rel="1" alt="Apartment Muiderstraatweg in Diemen" title="Apartment Muiderstraatweg in Diemen" data-mfp-src="https://flex-home.botble.com/images/b3.jpg">
                        </div>
                        <div class="item">
                            <img src="../images/b5-1.jpg" class="showfullimg" rel="2" alt="Apartment Muiderstraatweg in Diemen" title="Apartment Muiderstraatweg in Diemen" data-mfp-src="https://flex-home.botble.com/images/properties/b5-1.jpg">
                        </div>
                    </div>
                </div>
                <div class="slidebot">
                    <div class="row">
                        <div class="col-6 col-md-7 col-sm-6">
                            <div>
                                <div class="owl-carousel" id="listcarouselthumb">
                                    <div class="item cthumb" rel="0">
                                        <img src="../images/b4-1.jpg" class="showfullimg" rel="0" alt="Apartment Muiderstraatweg in Diemen" data-mfp-src="https://flex-home.botble.com/storage/properties/b4-1.jpg" title="Apartment Muiderstraatweg in Diemen">
                                    </div>
                                    <div class="item cthumb" rel="1">
                                        <img src="../images/b3.jpg" class="showfullimg" rel="1" alt="Apartment Muiderstraatweg in Diemen" data-mfp-src="https://flex-home.botble.com/images/properties/b3.jpg" title="Apartment Muiderstraatweg in Diemen">
                                    </div>
                                    <div class="item cthumb" rel="2">
                                        <img src="../images/b5-1.jpg" class="showfullimg" rel="2" alt="Apartment Muiderstraatweg in Diemen" data-mfp-src="https://flex-home.botble.com/images/properties/b5-1.jpg" title="Apartment Muiderstraatweg in Diemen">
                                    </div>
                                </div>
                                <i class="fas fa-chevron-right ar-next"></i>
                                <i class="fas fa-chevron-left ar-prev"></i>
                            </div>
                        </div>
                        <div class="col-6 col-md-5 col-sm-6" style="align-self: center">
                            <div class="row control justify-content-sm-end justify-content-center">
                                <div class="col-6 col-sm-4 col-md-4 col-lg-2 itemct px-1 popup-youtube" href="https://www.youtube.com/watch?v=UfEiKK-iX70">
                                    <div class="icon">
                                        <i class="fab fa-youtube"></i>
                                        <p>Youtube</p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4 col-lg-2 itemct d-none d-sm-block px-1 show-gallery-image">
                                    <div class="icon">
                                        <i class="fas fa-th"></i>
                                        <p>Gallery</p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-4 col-md-4 col-lg-2 itemct px-1" data-magnific-popup="#trafficMap" data-map-id="trafficMap" data-popup-id="#traffic-popup-map-template" data-map-icon="Rent: 49.26million ₫" data-center="[&quot;43.997636&quot;,&quot;-76.056676&quot;]">
                                    <div class="icon">
                                        <i class="far fa-map"></i>
                                        <p>Map</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid w90 padtop20">
                <h1 class="titlehouse">Apartment Muiderstraatweg in Diemen</h1>
                <p class="addresshouse">
                    <span class="d-inline-block">1 views<i class="fa fa-eye m-2"></i> </span>
                    <span class="d-inline-block">Nov 18, 2019<i class="fa fa-calendar-alt m-2"></i> </span> Bakersfield, California<i class="fas fa-map-marker-alt m-2"></i>
                </p>
                <div class="row" style="direction: rtl;">
                    <div class="col-md-8">
                        <div class="row pt-3">
                            <div class="col-sm-12">
                                <h5 class="headifhouse">التفاصيل</h5>
                                <div class="row py-2">
                                    <div class="col-sm-12">
                                        <table class="table table-striped table-bordered" style="text-align: right;">
                                            <tr>
                                                <td>نوع الملكية</td>
                                                <td><strong>شقة</strong></td>
                                            </tr>
                                            <tr>
                                                <td>المساحة</td>
                                                <td><strong>90 m²</strong></td>
                                            </tr>
                                            <tr>
                                                <td>عدد الغرف</td>
                                                <td><strong>3</strong></td>
                                            </tr>
                                            <tr>
                                                <td>عدد الحمامات</td>
                                                <td><strong>1</strong></td>
                                            </tr>
                                            <tr>
                                                <td>عدد الطوابق</td>
                                                <td><strong>2</strong></td>
                                            </tr>
                                            <tr>
                                                <td>السعر</td>
                                                <td><strong>49.26million ₫ / month</strong></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="headifhouse">الوصف</h5>
                                <p style="text-align: right;">For rent fully furnished 3 bedroom apartment in Diemen.<br> Very suitable for a couple or maximum 2 working sharers, garantors are not accepted.<br><br> Lovely modern and very well maintained apartment in Diemen.<br> The
                                    property is located on the first floor where you will find the living room and the kitchen with all modern conveniences.<br> On the second floor 2 bedrooms and a nice bathroom with a seperate shower and bathtub.<br> On this floor you have access to the small roof terrace.<br> Last but not least there is a spacious attic room on the third floor.<br> The tram stops in front of the door and within 20 minutes you are in the heart of
                                    Amsterdam.
                                    <br> Pets are not allowed.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="headifhouse">الميزات</h5>
                                <div class="row" style="text-align: right;">
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-check  text-orange text0i"></i> WiFi</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-check  text-orange text0i"></i> Parking</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-check  text-orange text0i"></i> Swimming pool</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-check  text-orange text0i"></i> Balcony</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-check  text-orange text0i"></i> Garden</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-check  text-orange text0i"></i> Security</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-check  text-orange text0i"></i> Fitness center</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-check  text-orange text0i"></i> Air Conditioning</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-check  text-orange text0i"></i> Central Heating </p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-check  text-orange text0i"></i> Laundry Room</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-check  text-orange text0i"></i> Pets Allow</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-check  text-orange text0i"></i> Spa &amp; Massage</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="headifhouse">البعد عن المرافق العامة والخدمات</h5>
                                <div class="row" style="text-align: right;">
                                    <div class="col-sm-4">
                                        <p><i class=" far fa-hospital  text-orange text0i"></i> Hospital - 16km km</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-cart-plus  text-orange text0i"></i> Super Market - 19km km</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-school  text-orange text0i"></i> School - 19km km</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-hotel  text-orange text0i"></i> Entertainment - 2km km</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-prescription-bottle-alt  text-orange text0i"></i> Pharmacy - 2km km</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-plane-departure  text-orange text0i"></i> Airport - 11km km</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-subway  text-orange text0i"></i> Railways - 10km km</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-bus  text-orange text0i"></i> Bus Stop - 7km km</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-umbrella-beach  text-orange text0i"></i> Beach - 7km km</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-cart-plus  text-orange text0i"></i> Mall - 2km km</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p><i class=" fas fa-university  text-orange text0i"></i> Bank - 8km km</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row pb-3">
                            <div class="col-sm-12">
                                <h5 class="headifhouse">Project&#039;s information</h5>
                            </div>
                            <div class="col-sm-12">
                                <div class="row item">
                                    <div class="col-md-4 col-sm-5 pr-sm-0">
                                        <div class="img h-100 bg-light">
                                            <a href="../projects/aydos-forest-apartment.html">
                                                <img class="thumb lazy" data-src="https://flex-home.botble.com/images/properties/q1.jpg" src="../images/properties/q1.jpg" alt="Aydos Forest Apartments">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-7 pt-2 pr-sm-0 bg-light">
                                        <h5><a href="../projects/aydos-forest-apartment.html" class="font-weight-bold text-dark">Aydos Forest Apartments</a></h5>
                                        <div>You will have a live site life with 90% occupancy; The clean air of Aydos Forest, the most important social facility of...</div>
                                        <p><a href="../projects/aydos-forest-apartment.html">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <br>
                        <div id="zxcvbnm">
                            <h5 class="headifhouse">الموقع</h5>
                            <p style="text-align:right;">Diemen, Netherlands, Bakersfield, California</p>
                            <div class="traffic-map-container">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div id="trafficMap" class="w-100 h-100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h5 class="headifhouse">فيديو للملكية</h5>
                            <div class="row justify-content-center">
                                <div class="px-3 position-relative overlay-icon w-100">
                                    <iframe width="870" height="500" src="https://www.youtube.com/embed/WT-W27kxDXQ" title="Properties Vidio" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <!-- <a href="https://www.youtube.com/watch?v=WT-W27kxDXQ" class="popup-youtube">
                                        <img src="../images/properties/property-video-thumb.jpg" alt="Apartment Muiderstraatweg in Diemen" class="img-fluid rounded w-100">
                                        <div class="video-popup-btn">
                                            <div class="video-popup-icon">
                                                <i class="fal fa-play-circle fa-2x"></i>
                                            </div>
                                        </div>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="socials mb-3 pb-2 border-bottom w-100" style="text-align: right;">
                            <span>شارك هذه الملكية:</span>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fflex-home.botble.com%2Fproperties%2Fapartment-muiderstraatweg-in-diemen&amp;title=Lovely%20modern%20and%20very%20well%20maintained%20apartment%20in%20Diemen.The%20property%20is%20located%20on%20the%20first%20floor%20where%20you%20will%20find%20the%20living%20room%20and%20the%20kitchen%20with%20all%20modern%20conveniences.On%20the%20second%20floor%202%20bedrooms%20and%20a%20nice%20bathroom%20with%20a%20seperate%20shower%20and%20bathtub.On%20this%20floor%20you%20have%20access%20to%20the%20small%20roof%20terrace." target="_blank" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fflex-home.botble.com%2Fproperties%2Fapartment-muiderstraatweg-in-diemen&amp;summary=Lovely%20modern%20and%20very%20well%20maintained%20apartment%20in%20Diemen.The%20property%20is%20located%20on%20the%20first%20floor%20where%20you%20will%20find%20the%20living%20room%20and%20the%20kitchen%20with%20all%20modern%20conveniences.On%20the%20second%20floor%202%20bedrooms%20and%20a%20nice%20bathroom%20with%20a%20seperate%20shower%20and%20bathtub.On%20this%20floor%20you%20have%20access%20to%20the%20small%20roof%20terrace.&amp;source=Linkedin" title="Share on Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fflex-home.botble.com%2Fproperties%2Fapartment-muiderstraatweg-in-diemen&amp;text=Lovely%20modern%20and%20very%20well%20maintained%20apartment%20in%20Diemen.The%20property%20is%20located%20on%20the%20first%20floor%20where%20you%20will%20find%20the%20living%20room%20and%20the%20kitchen%20with%20all%20modern%20conveniences.On%20the%20second%20floor%202%20bedrooms%20and%20a%20nice%20bathroom%20with%20a%20seperate%20shower%20and%20bathtub.On%20this%20floor%20you%20have%20access%20to%20the%20small%20roof%20terrace." target="_blank" title="Share n Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="boxright p-3">
                            <div class="head text-center">
                                التواصل مع الوكيل
                            </div>
                            <div class="row rowm10 itemagent">
                                <div class="col-lg-8 colm10 text-right">
                                    <div class="info">
                                        <p>
                                            <strong>
                                                <a href="../agents/mclaughlinpete.html">خالد جبقجي</a>
                                            </strong>
                                        </p>
                                        <p class="mobile">+17168945565</p>
                                        <p><a href="../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="e5809380898c8b80d6d5a58288848c89cb868a88">[email&#160;protected]</a></p>
                                        <p><span class="fas fa-arrow-circle-left"></span> <a href="../agents/mclaughlinpete.html">قراءة المزيد</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-4 colm10">
                                    <a href="../agents/mclaughlinpete.html">
                                        <img src="../images/10-150x150.jpg" alt="Adriana Pollich" class="img-thumbnail">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="boxright p-3">
                            <form action="" method="post" id="contact-form" class="generic-form">
                                <input type="hidden" name="_token" value="QqBtN5CqMjZ9uSdOlPXb3jGAmME1XZ1UnMVYI6TH"> <input type="hidden" value="property" name="type">
                                <input type="hidden" value="16" name="data_id">
                                <div class="head text-center">التواصل</div>
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="الاسم *" data-validation-engine="validate[required]" data-errormessage-value-missing="Please enter name!">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="الرقم *" data-validation-engine="validate[required]" data-errormessage-value-missing="Please enter phone number!">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control " placeholder="البريد الالكتروني">
                                </div>
                                <!-- <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject *" value="Apartment Muiderstraatweg in Diemen" readonly>
                                </div> -->
                                <div class="form-group">
                                    <textarea name="content" class="form-control" rows="5" placeholder="الرسالة"></textarea>
                                </div>
                                <!-- <div class="form-group">
                                    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                    <script src="../../www.google.com/recaptcha/apifef7.js?hl=en" async defer type="09d0203a6033273902f5f8f6-text/javascript"></script>
                                    <script type="09d0203a6033273902f5f8f6-text/javascript">
                                        "use strict";
                                        var refreshRecaptcha = function() {
                                            grecaptcha.reset();
                                        };
                                    </script>
                                    <div class="g-recaptcha" theme="light" id="buzzNoCaptchaId_35fd999190fde3020495775d87f40181" data-sitekey="6LcjXnAUAAAAABn6hzo7WpoEKkg_we777yg-mK4-"></div>
                                </div> -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-orange btn-block">إرسال</button>
                                </div>
                                <!-- <div class="clearfix"></div>
                                <br>
                                <div class="alert alert-success text-success text-left" style="display: none;">
                                    <span></span>
                                </div>
                                <div class="alert alert-danger text-danger text-left" style="display: none;">
                                    <span></span>
                                </div> -->
                            </form>
                        </div>
                        <div class="boxright p-3">
                            <img src="../images/undraw_buy_house_re_8xq7.svg" width="100%" height="500px">
                        </div>
                    </div>
                </div>
                <br>
                <!-- <h5 class="headifhouse">Related properties</h5>
                <div class="projecthome mb-3">
                    <property-component type="related" url="../ajax/properties.html" :property_id="16"></property-component>
                </div> -->
            </div>
        </main>
        <script id="traffic-popup-map-template" type="text/x-custom-template">
            <div>
                <table width="100%">
                    <tr>
                        <td width="100">
                            <div class="blii"><img src="https://flex-home.botble.com/storage/properties/b4-1-150x150.jpg" width="80" alt="Apartment Muiderstraatweg in Diemen">
                                <div class="status"><span class="label-success status-label">Renting</span></div>
                            </div>
                        </td>
                        <td>
                            <div class="infomarker">
                                <h5><a href="https://flex-home.botble.com/properties/apartment-muiderstraatweg-in-diemen" target="_blank">Apartment</a></h5>
                                <div class="text-info"><strong>49.26million</strong></div>
                                <div>Bakersfield, California</div>
                                <div>
                                    <span>90 m²</span> &nbsp; &nbsp;
                                    <span>
                            <i><img src="https://flex-home.botble.com/themes/flex-home/images/bed.svg" alt="icon"></i>
                            <i class="vti">3</i></span> &nbsp; &nbsp; <span>
                            <i><img src="https://flex-home.botble.com/themes/flex-home/images/bath.svg" alt="icon"></i>
                            <i class="vti">1</i>
                                    </span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

        </script>
    </div>

    <div class="action_footer">
        <a href="#" class="cd-top"><i class="fas fa-arrow-up"></i></a>
        <a href="tel:18006268" class="cd-phone"><i class="fas fa-phone"></i> <span> &nbsp;18006268</span></a>
    </div>
    <script src="../libraries/jquery.waypoints.min.js" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../js/app26f8.js?v=2.32.4" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../js/components26f8.js?v=2.32.4" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../js/wishlist26f8.js?v=2.32.4" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../libraries/leaflet.js" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../libraries/magnific/jquery.magnific-popup.min.js" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../js/property.js" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../vendor/core/plugins/cookie-consent/js/cookie-consente209.js?v=1.0.0" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <script src="../vendor/core/plugins/language/js/language-publice209.js?v=1.0.0" type="09d0203a6033273902f5f8f6-text/javascript"></script>
    <!-- تضمين من أجل الصور في أول الصفحة -->
    <!----------------------------------footer --------------------------------->
    <section class="deneb_cta">
        <div class="container">
            <div class="cta_wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="button_box" style="float:left">
                            <a href="#" class="btn" style="background-color:#fff;">تواصل معنا</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cta_content dir">
                            <h3>إن كنت تملك ملاحظات عن الموقع فلا تتردد في مراسلتنا:)</h3>
                            <p>خدمات نيو هووم تساعدك على بيع وشراء العقارات بسهولة بالإضافة إلى تزويدك بمعلومات أساسية لإتخاذ واحد من أهم القرارات المالية في حياتك.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------------footer_con------------------------------->
    <footer class="deneb_footer dir">
        <div class="widget_wrapper" style="background-image: url(../images/footer_bg.png);">
            <div class="container">
                <div class="row">

                    <div class="row">
                        <div class="col-sm-3">
                            <p>
                                <a href="index.html">
                                    <img src="storage/logo/logo.png" style="max-height: 38px" alt="">
                                </a>
                            </p>
                            <p><i class="fas fa-map-marker-alt"></i> &nbsp;حلب الشهباء مقابل مكتبة الشهباء</p>
                            <p><i class="fas fa-phone-square"></i> Hotline: &nbsp;<a href="tel:18006268">18006268</a></p>
                            <p><i class="fas fa-envelope"></i> Email: &nbsp;<a href="cdn-cgi/l/email-protection.html#89eae6e7fde8eafdc9efe5ecf1a4e1e6e4eca7eae6e4"><span class="__cf_email__" data-cfemail="c7a4a8a9b3a6a4b387a1aba2bfeaafa8aaa2e9a4a8aa">[email&#160;protected]</span></a>
                            </p>
                        </div>
                        <div class="col-sm-9 padtop10">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="menufooter">
                                        <h4>ماذا عنا؟</h4>
                                        <ul>
                                            <li>
                                                <a href="about-us.html">
                                                    <span>عن الموقع</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact.html">
                                                    <span>تواصل معنا</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="careers.html">
                                                    <span>الوظائف</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="terms-conditions.html">
                                                    <span>مصطلحات &amp; شروط</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="menufooter">
                                        <h4>وصول سريع</h4>
                                        <ul>
                                            <li>
                                                <a href="projects.html">
                                                    <span>كل المنشورات</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="properties.html">
                                                    <span>منشورات البيع</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="properties1e1d.html?type=sale">
                                                    <span>منشورات الآجار</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="properties530f.html?type=rent">
                                                    <span>منشورات الرهن</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="menufooter">
                                        <h4>الاحدث</h4>
                                        <ul>
                                            <li>
                                                <a href="news.html">
                                                    <span>أحدث المنشورات </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="news/house-architecture.html">
                                                    <span> أحدث منشورات البيع</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="news/house-design.html">
                                                    <span>أحدث منشورات الآجار</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row widegt_about">
                    <ul class="wrapper">
                        <li class="icon facebook">
                            <span class="tooltip">Facebook</span>
                            <span><i class="fab fa-facebook-f"></i></span>
                        </li>
                        <li class="icon twitter">
                            <span class="tooltip">Twitter</span>
                            <span><i class="fab fa-twitter"></i></span>
                        </li>
                        <li class="icon instagram">
                            <span class="tooltip">Instagram</span>
                            <span><i class="fab fa-instagram"></i></span>
                        </li>
                        <li class="icon github">
                            <span class="tooltip">Github</span>
                            <span><i class="fab fa-github"></i></span>
                        </li>
                        <li class="icon youtube">
                            <span class="tooltip">Youtube</span>
                            <span><i class="fab fa-youtube"></i></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <p>Copyright &copy; 2022 All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="libraries/bootstrap/bootstrap.min.js" type="db4c9c39dcd52cec68b0a314-text/javascript"></script>
<script src="../js/rocket-loader.min.js" data-cf-settings="6a75f88af5f1baf1dda1b386-|49" defer=""></script>
<script src="../rocket-loader.min.js" data-cf-settings="6a75f88af5f1baf1dda1b386-|49" defer=""></script>

</html>