<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/9ce611c48b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Blog</title>
    <style>
        /* Common */
        .y-color {
            color: var(--bs-yellow);
        }

        .z-index {
            z-index: -1;
        }

        /* Navbar */
        header {
            min-height: 90px;
            width: 100%;
            overflow: hidden;
            background-color: #fff;
        }

        .body {
            overflow: hidden;
        }

        .wrapper {
            width: 100%;
            max-width: 1536px;
            margin: 0 auto;
        }

        @media (max-width: 1200px) {
            .wrapper {
                width: 100%;
                max-width: 1000px;
                margin: 0 auto;
            }
        }

        @media (max-width: 990px) {
            .wrapper {
                width: 100%;
                max-width: 800px;
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .wrapper {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
            }
        }

        header .navbar img {
            margin-left: -12px;
        }

        header .navbar .logo {
            width: 30%;
        }

        header .navbar .menu-icon {
            font-size: 32px;
            padding: 0 8px;
        }

        header .navbar .explore:hover {
            cursor: pointer;
            color: var(--bs-pink);
        }

        .navbar .explore i {
            font-weight: 900;
        }

        .navbar .nav-list {
            width: 70%;
        }

        .nav-list .nav-item {
            display: inline-block;
            padding: 0 20px;
        }

        .nav-list .drop::before {
            content: "";
            display: block;
            position: absolute;
            width: 100%;
            height: 30px;
            top: 100%;
            left: 0;
        }

        .nav-list .drop .dropdown-menu {
            position: absolute;
            min-width: 100%;
            top: 66px;
        }

        .nav-list .drop:hover .dropdown-menu {
            display: block;
        }

        .nav-list .drop i {
            font-size: 10px;
        }

        .nav-list .search-icon {
            font-size: 20px;
        }

        .nav-list .cart-icon {
            font-size: 24px;
        }

        .search-icon,
        .cart-icon:hover {
            cursor: pointer;
        }

        .btns {
            padding: 9px 40px 9px 40px;
        }

        .nav-list .login-btn {
            border: 1px solid #270a76;
        }

        .nav-list .login-btn:hover {
            background-color: #270a76;
        }

        .navbar .nav__input {
            display: none;
        }

        .navbar .nav__overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.3);
            display: none;
            animation: fadeIn linear 0.3s;
        }

        .navbar .nav__mobile {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            width: 320px;
            background-color: #fff;
            max-width: 100%;
            height: 100vh;
            transform: translateX(-100%);
            opacity: 0;
            transition: transform linear 0.2s, opacity linear 0.2s;
        }

        .navbar .nav__mobile__list {
            margin-top: 24px;
            list-style-type: none;
        }

        .navbar .nav__mobile__link {
            text-decoration: none;
            display: block;
            color: #000;
            padding: 8px 0;
            font-size: 1.4rem;
            display: inline-block;
        }

        .navbar .nav__mobile-close {
            font-size: 1.4rem;
            position: absolute;
            top: 0.5rem;
            right: 1rem;
            cursor: pointer;
        }

        .nav__input:checked~.nav__overlay {
            display: block;
        }

        .nav__input:checked~.nav__mobile {
            transform: translateX(0);
            opacity: 1;
        }

        .nav__mobile-close:checked~.nav__mobile {
            transform: translateX(-100%);
        }

        .search-box {
            display: none;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.6);
        }

        .show {
            display: block;
            overflow: hidden;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2;
        }

        .input {
            height: 25%;
            width: 100%;
            background-color: #fff;
            align-items: center;
            justify-content: center;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out
        }

        .input .find-aria {
            border: none;
            height: 3rem;
            width: 80%;
            border-bottom: 2px solid #EDEDED;
            align-items: center;
            justify-content: center;

        }

        input {
            border: none;
            height: 100%;
            width: 100%;
            writing-mode: horizontal-tb;
        }

        .flex {
            display: flex;
        }

        .remove-button {
            display: inline-block;
            line-height: 40px;
            text-align: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 12px;
            color: #6440FB;
            background: rgba(98, 64, 251, 0.07);
            -webkit-transition: all 0.2s ease-in-out 0s;
            -o-transition: all 0.2s ease-in-out 0s;
            transition: all 0.2s ease-in-out 0s;
            cursor: pointer;

        }

        .remove-button:hover {
            color: #EDEDED;
            background-color: #6440FB;
        }

        .find-icon:hover {
            color: #6440FB;
        }

        .background {
            background-image: url('/english-app/public/asset/image/home-main.png');
            width: 100%;
            height: 750px;
            border-radius: 20px;
            background-position: center;
        }

        .scroll {
            position: sticky;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .home-main .position-relative {
            z-index: 0;

        }

        .content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .content .login-btn {
            border: none;
            background-color: #fff;
            border-radius: 10px;


        }

        .login-btn a {
            text-decoration: none;
            color: #140342;
            fill: #140342;
        }

        .content h4 {
            color: #00FF84;
        }

        .content h1 {
            color: white;
        }

        .content .row {
            padding-left: 2rem;
            padding-right: 2rem;
            width: 100%;
            height: 100%;
        }

        .content .col-md-6 {
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .special img {
            width: 100%;
            height: 100%;
            overflow: hidden;
            object-fit: cover;
        }

        .heading-box-items h2 {
            color: #140342;
        }

        .button-box-items {
            border: none;
            border-radius: 10px;
            height: 3rem;
        }

        .top-categories a {
            text-decoration: none;
            color: #6440FB;
        }

        .button-box-items {
            background-color: #6440FB17;
            width: 10rem;
        }

        .button-box-items:hover {
            background-color: #6440FB;
        }

        .button-box-items:hover a {
            color: #fff;
        }

        .heading-box-items p {
            opacity: 0.7;
        }

        .top-courses .container {
            background-color: #6440FB17;
            border-radius: 20px;
        }

        a {
            text-decoration: none;
        }

        .button-box-items a {
            color: #6440FB;
        }

        .rates i {
            color: #ff9800;
        }

        .rates p {
            color: #ff9800;
            margin-bottom: 0;
        }

        .rates {
            align-items: center;
        }

        .change-color {
            color: #140342;
        }

        .icon-user img {
            object-fit: cover;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        @media screen {}

        @media(max-width:1280px) {}

        @media (max-width: 992px) {
            .navbar .explore {
                display: flex !important;
            }

            .navbar .nav-list {
                display: none !important;
            }
        }

        @media (max-width: 768px) {
            .main #content .filter {
                justify-content: flex-start !important;
            }

            html {
                font-size: 12px;
            }
        }

        @media (max-width: 576px) {
            .home-main .items {
                display: none;
            }


        }

        .top-course .next {
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            border: 2px solid black;
            background-color: #fff;
            position: absolute;
            right: 2%;
            top: 50%;
        }

        .top-course .prev {
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            border: 2px solid black;
            background-color: #fff;
            position: absolute;
            left: 2%;
            top: 50%;
        }

        .slider-box {
            overflow: hidden;
        }

        .top-course {
            position: relative;
        }

        @keyframes FadeIn {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .slider-box-items {
            animation: FadeIn 1s linear forwards;
        }

        footer a {
            height: 40px;
        }

        footer .link,
        footer a i {
            line-height: 40px;
        }

        footer a i {
            padding: 0 12px;
            font-size: 20px;
        }

        footer .follow {
            margin-left: 10px;
            font-size: 18px;
        }

        footer .follow,
        footer h5 {
            color: #0d6efd;
        }

        footer h5 {
            line-height: 40px;
        }

        footer .single-footer {
            margin-bottom: 50px;
        }

        footer ul {
            list-style-type: none;
            padding: 0;
        }

        /* Responsive */

        @media (max-width: 1200px) {

            .navbar .brand,
            .nav-list {
                flex: 2;
            }

            .navbar .explore {
                display: flex !important;
            }

            .navbar .nav-ul {
                display: none !important;
            }

            .navbar .nav-brand {
                display: none !important;
            }

            .navbar .nav-brand-sm {
                display: flex !important;
            }

            .navbar .nav-brand-sm img {
                margin-left: 0;
            }

            .navbar .search-tablet {
                display: flex !important;
            }

            .nav-list .search-pc {
                display: none !important;
            }

            .cart {
                display: none !important;
            }
        }

        @media (max-width: 992px) {
            .ter {
                flex-flow: column;
            }

            footer .logo {
                margin-bottom: 1rem;
            }

            .sidebar {
                margin-top: 16px;
            }
        }

        @media (max-width: 768px) {
            .navbar .search-sm {
                display: flex !important;
            }

            .navbar .search-tablet {
                display: none !important;
            }

            .course-found {
                margin-bottom: 16px !important;
            }

            .btns {
                padding: 9px 20px;
            }

            .cart-icon {
                display: none !important;
            }
        }

        @media (max-width: 576px) {
            .main #content .filter {
                justify-content: flex-start !important;
            }

            .btns {
                padding: 9px 16px;
            }

            footer .link {
                font-size: 16px;
                font-weight: 400;
            }

            .foot {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .foot .logo-name {
                font-size: 32px;
            }

            .single-footer p {
                text-align: center !important;
            }

            .social-foot {
                justify-content: center;
            }

            .footer-tittle {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .footer-tittle h5 {
                font-size: 24px;
            }

            .footer-tittle ul {
                display: contents;
            }
        }

        ol {
            list-style: none;
        }

        /*blog*/
        .categories-name {
            font-size: 0.875rem;
            font-weight: 500;
            color: #6440fb;
            text-transform: uppercase;
        }
        .image-blog img{
            border-radius: 20px;
            object-fit: cover;
        }
        .more{
            width: 8rem;
            height: 3rem;
            border: none;
            background-color: #6440FB17;
            border-radius: 10px;
        }
        .more:hover{
            background-color: #6440FB;
        }
        .more a{
            color: #6440FB;
        }
        .more:hover a{
            color: white;
        }
    </style>
</head>

<body>
    <header class="">
        <nav class="navbar wrapper">
            <div class="container justify-content-between">
                <div class="d-flex logo">
                    <a class="navbar-brand d-flex align-items-center me-2" href="#">
                        <img src="/english-app/public/asset/logo/logo.png" alt="Logo" width="60" height="60"
                            class="d-inline-block align-text-top" />
                        <span class="logo-name">English Courses</span>
                    </a>
                </div>

                <div class="d-flex justify-content-end nav-list">
                    <div class="d-flex align-items-center">
                        <ul class="navbar-nav mb-2 mb-lg-0 d-inline-block me-4">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Courses<i class="bi bi-caret-down-fill"></i></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Blog</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex align-items-center me-5 icon-search">
                        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                    </div>

                    <div class="d-flex align-items-center me-5">
                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                    </div>

                    <div class="d-flex">
                        <button type="button" class="btn btn-outline-dark login-btn btns">
                            Login
                        </button>
                    </div>
                </div>

                <label for="nav-mobile-input" class="d-none align-items-center ms-4 explore nav__bars-btn">
                    <i class="bi bi-list menu-icon"></i>
                </label>

                <input type="checkbox" name="" class="nav__input" id="nav-mobile-input" />

                <label for="nav-mobile-input" class="nav__overlay"></label>

                <nav class="nav__mobile">
                    <label for="nav-mobile-input" class="nav__mobile-close">
                        <i class="bi bi-x"></i>
                    </label>
                    <ul class="nav__mobile__list">
                        <li>
                            <a href="#" class="nav__mobile__link">Home</a>
                        </li>
                        <li>
                            <a href="#" class="nav__mobile__link">Courses</a>
                        </li>
                        <li>
                            <a href="#" class="nav__mobile__link">Blog</a>
                        </li>
                        <li>
                            <a href="#" class="nav__mobile__link">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </header>
    <div class="search-box">
        <form action="" class="input flex">
            <div class="find-aria flex">
                <div class="find-icon mx-2">
                    <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                </div>
                <input type="text" placeholder="What do you learn today?">
                <div class="remove-button mx-2">
                    <i class="fa-sharp fa-solid fa-xmark"></i>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(".icon-search").on('click', function () {
            $('.search-box').addClass('show');
            $('.input').addClass('animate__animated animate__fadeInDown animate__bounce animate__faster');
        });
        $('.remove-button').on('click', function () {
            $('.search-box').removeClass('show');
            $('.input').removeClass('animate__animated animate__fadeInDown animate__bounce animate__faster');

        });
        $(document).ready(function () {
            $(window).scroll(function () {
                var scroll = getCurrentScroll();
                if (scroll >= 0) {
                    $('header').addClass('scroll');
                    $('header').fadeIn();
                }
                else {
                    $('header').removeClass('scroll');
                }
            });
            function getCurrentScroll() {
                return window.pageYOffset || document.documentElement.scrollTop;
            }
        })
    </script>
    <div class="">
        <div class="container">
            <div>
                Home > Blog
            </div>
        </div>
    </div>
    <div class="blog mt-5 mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 col-lg-6 image-blog p-4">
                    <img class="img-fluid" src="/english-app/public/asset/image/blog-1.jpeg" alt="">
                </div>
                <div class="col-12 col-lg-6 p-lg-5">
                    <div class="flex mb-4">
                        <div class="list-categories mx-2">
                            <a class="categories-name" href="">Gym</a>
                        </div>
                        <div class="date">July 28, 2022</div>
                    </div>
                    <h4 class="entry-title mb-2">10 marketing trends that you should be prepared for in 2022</h4>
                    <div class="description mb-4">What makes a good brand book? Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum ...</div>
                    <button class="more">
                        <a href="">Read More</a>
                    </button>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6 image-blog p-4">
                    <img class="img-fluid" src="/english-app/public/asset/image/blog-1.jpeg" alt="">
                </div>
                <div class="col-12 col-lg-6 p-lg-5">
                    <div class="flex mb-4">
                        <div class="list-categories mx-2">
                            <a class="categories-name" href="">Gym</a>
                        </div>
                        <div class="date">July 28, 2022</div>
                    </div>
                    <h4 class="entry-title mb-2">10 marketing trends that you should be prepared for in 2022</h4>
                    <div class="description mb-4">What makes a good brand book? Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum ...</div>
                    <button class="more">
                        <a href="">Read More</a>
                    </button>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6 image-blog p-4">
                    <img class="img-fluid" src="/english-app/public/asset/image/blog-1.jpeg" alt="">
                </div>
                <div class="col-12 col-lg-6 p-lg-5">
                    <div class="flex mb-4">
                        <div class="list-categories mx-2">
                            <a class="categories-name" href="">Gym</a>
                        </div>
                        <div class="date">July 28, 2022</div>
                    </div>
                    <h4 class="entry-title mb-2">10 marketing trends that you should be prepared for in 2022</h4>
                    <div class="description mb-4">What makes a good brand book? Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum ...</div>
                    <button class="more">
                        <a href="">Read More</a>
                    </button>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6 image-blog p-4">
                    <img class="img-fluid" src="/english-app/public/asset/image/blog-1.jpeg" alt="">
                </div>
                <div class="col-12 col-lg-6 p-lg-5">
                    <div class="flex mb-4">
                        <div class="list-categories mx-2">
                            <a class="categories-name" href="">Gym</a>
                        </div>
                        <div class="date">July 28, 2022</div>
                    </div>
                    <h4 class="entry-title mb-2">10 marketing trends that you should be prepared for in 2022</h4>
                    <div class="description mb-4">What makes a good brand book? Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum ...</div>
                    <button class="more">
                        <a href="">Read More</a>
                    </button>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12 col-lg-6 image-blog p-4">
                    <img class="img-fluid" src="/english-app/public/asset/image/blog-1.jpeg" alt="">
                </div>
                <div class="col-12 col-lg-6 p-lg-5">
                    <div class="flex mb-4">
                        <div class="list-categories mx-2">
                            <a class="categories-name" href="">Gym</a>
                        </div>
                        <div class="date">July 28, 2022</div>
                    </div>
                    <h4 class="entry-title mb-2">10 marketing trends that you should be prepared for in 2022</h4>
                    <div class="description mb-4">What makes a good brand book? Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum ...</div>
                    <button class="more">
                        <a href="">Read More</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-light mt-5">
        <div class="container footer">
            <div class="row pt-5 pb-4 justify-content-between px-3">
                <div class="col-lg-3 col-md-6 col-sm-8 col-12 ">
                    <div class="single-footer">
                        <div class="d-flex foot logo mb-2">
                            <a class="d-flex align-items-center" href="">
                                <img src="/english-app/public/asset/logo/logo.png" alt="Logo" width="60" height="60"
                                    class="d-inline-block" />
                                <span class="logo-name">English Courses</span>
                            </a>
                        </div>
                        <p class=" me-lg-3 follow mb-3">
                            Follow us on all platforms for more
                            courses updates
                        </p>

                        <div class="d-flex social-foot">
                            <a href=""><i class="bi bi-facebook icon-footer"></i></a>
                            <a href=""><i class="bi bi-instagram icon-footer"></i></a>
                            <a href=""><i class="bi bi-twitter icon-footer"></i></a>
                            <a href=""><i class="bi bi-whatsapp icon-footer"></i></a>
                        </div>
                    </div>
                </div>



                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                    <div class="single-footer">
                        <div class="single-footer">
                            <div class="footer-tittle">
                                <h5 class="mb-2">Our solutions</h5>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-8 col-12">
                    <div class="single-footer">
                        <div class="single-footer">
                            <div class="footer-tittle">
                                <h5 class="mb-2">Support</h5>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                    <div class="single-footer">
                        <div class="single-footer">
                            <div class="footer-tittle">
                                <h5 class="mb-2">Company</h5>
                                <ul>
                                    <li><a href="#">Design & creatives</a></li>
                                    <li><a href="#">Telecommunication</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Programing</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        Copyright &copy;
                                        <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                        This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://www.facebook.com/itvlu" target="_blank">IT-VLU</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
</body>

</html>