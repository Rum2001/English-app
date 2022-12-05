<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>English</title>

        <!-- CSS bootstrap -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />

        <!-- Icon -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        />

        <!-- CSS styles -->
        <style>
            /* Common */

.un-ul {
  list-style-type: none;
  padding: 0;
}

.logo-name-header {
  font-weight: bold;
}

.logo-name {
  font-weight: 500;
}

.y-color {
  color: var(--bs-yellow);
}

.g-color {
  color: var(--bs-gray);
}

.z-index {
  z-index: -1;
}

.pb-50 {
  padding-bottom: 50px !important;
}

.mb-50 {
  margin-bottom: 50px !important;
}

a {
  text-decoration: none;
}

.logo-name {
  font-size: 1.25rem;
}

/* Navbar */

header .navbar img {
  margin-left: -12px;
}

header .navbar .logo {
  width: 30%;
}

header .navbar .menu-icon {
  font-size: 40px;
  font-weight: bold;
}

header .navbar .explore:hover,
header .navbar .nav-brand-sm:hover {
  cursor: pointer;
  color: var(--bs-pink);
}

.navbar .nav-brand-sm {
  display: none !important;
}

.navbar .explore i {
  font-weight: 900;
}

.navbar .nav-list {
  width: 70%;
}

.nav-list .nav-ul {
  opacity: 1;
  pointer-events: auto;
  transition: all 0.3s linear;
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

.nav-list .search-box,
.nav-list .search-box input,
.nav-list .search-icon-input {
  display: none;
}

.nav-list .search-box {
  height: 45px;
  border-radius: 8px;
  background-color: #fff;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s linear;
}

.navbar .search-box input {
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  border-radius: 8px;
  background-color: #fff;
}

.navbar .search-icon,
.navbar .search-icon-input {
  font-size: 24px;
}

.openSearch {
  display: block !important;
}

.nav.openSearch .search-box,
.nav.openSearch .search-box input,
.nav.openSearch .search-icon-input {
  display: block;
}

.nav.openSearch .nav-ul {
  opacity: 0;
  pointer-events: none;
}

.nav.openSearch .search-box {
  opacity: 1;
  pointer-events: auto;
  width: 400px;
}

.nav.openSearch .nav-ul a {
  display: none;
  opacity: 0;
  pointer-events: none;
}

.nav.openSearch .nav-ul a {
  transition: all 0.2s linear;
}

.nav.openSearch .inline {
  height: 0;
}

.navbar .search-icon-input {
  padding: 0 15px 0 17px;
}

.nav-list .cart-icon {
  font-size: 24px;
}

.search-icon,
.close-icon,
.cart-icon:hover {
  cursor: pointer;
}

.navbar .search-tablet {
  display: none !important;
}

.navbar .search-sm {
  display: none !important;
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

.navbar .search-tablet {
  height: 45px;
  border-radius: 8px;
  background-color: #fff;
  width: 100%;
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

.nav__input:checked ~ .nav__overlay {
  display: block;
}

.nav__input:checked ~ .nav__mobile {
  transform: translateX(0);
  opacity: 1;
}

.nav__mobile-close:checked ~ .nav__mobile {
  transform: translateX(-100%);
}

header .overlay {
  z-index: 2;
  width: 100%;
  height: 100vh;
  background-color: #fff;
  position: absolute;
  display: none;
}

header .overlay .search {
  margin: auto;
  max-width: 540px;
}

header .overlay input {
  width: 100%;

  outline: none;
  border: none;
  font-size: 28px;
  border-bottom: 1px solid #999;
}

/* Main */

.main .bc-height {
  padding: 20px 0;
}

.main #content .option-btn {
  width: 112px;
  padding: 12px 0;
  border-radius: 10px;
}

.main #content .arrow-icon {
  font-size: 12px;
  color: grey;
}

.main #content .filter-icon {
  font-size: 18px;
}

/* Course detail */
.course-left .course-category-item {
  padding: 10px 16px 8px;
  line-height: 1;
  font-size: 11px;
  font-weight: 500;
  border-radius: 30px;
  display: inline-block;
  text-transform: uppercase;
  color: #fff;
  background-color: #0d6efd;
}

.course-left .title {
  text-transform: capitalize;
  font-weight: 700;
}

.course-preview {
  width: 100%;
  scroll-margin: 30px;
}

.course-preview .course-sumary {
  position: relative;
  border-top: 0;
}

.course-preview .course-video {
  border-radius: 12px;
  position: relative;
  overflow: hidden;
}

.course-video::before {
  padding-top: 56.25%;
  content: "";
  display: block;
}

.course-preview .course-video p {
  margin-bottom: 20px;
  line-height: 1.8;
}

.course-preview .course-video iframe {
  max-width: 100%;
  position: absolute;
  top: 0;
  right: 0;

  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.sidebar {
  position: sticky;
  margin-top: -230px;
  top: 0;
}

.sidebar-course .course-info-widget {
  border: 1px solid #ededed;
  border-radius: 8px;
  background: #fff;
  box-shadow: 0 20px 30px 0 rgb(25 25 46 / 4%);
  padding: 10px;
}

.sidebar-course .course-info-widget .course-inner {
  padding: 10px;
}

.sidebar-course .course-info-widget .course-price {
  font-size: 24px;
  font-weight: 500;
}
.sidebar-course .course-info-fields li {
  border-bottom: 1px solid #ededed;
}

.sidebar-course .social-share {
  font-size: 24px;
}

/* Footer */
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

        </style>

        <!-- JavaScript Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"
        ></script>

        <!-- JS main -->
        <script src="/english-app/resources/js/main.js" defer></script>
    </head>
    <body>
        <header class="bg-light">
            <nav class="navbar" style="z-index: 2">
                <div class="container justify-content-between">
                    <div class="d-flex align-items-center logo brand">
                        <a
                            class="navbar-brand d-flex align-items-center me-2 nav-brand"
                            href="#"
                        >
                            <img
                                src="/english-app/public/asset/logo/logo.png"
                                alt="Logo"
                                width="60"
                                height="60"
                                class="d-inline-block"
                            />
                            <span class="logo-name-header"
                                >English Courses</span
                            >
                        </a>

                        <label
                            for="nav-mobile-input"
                            class="d-none align-items-center explore nav__bars-btn toggleClose"
                        >
                            <i class="bi bi-list menu-icon"></i>
                        </label>

                        <input
                            type="checkbox"
                            name=""
                            class="nav__input"
                            id="nav-mobile-input"
                        />

                        <label
                            for="nav-mobile-input"
                            class="nav__overlay"
                        ></label>

                        <nav class="nav__mobile">
                            <label
                                for="nav-mobile-input"
                                class="nav__mobile-close"
                            >
                                <i class="bi bi-x"></i>
                            </label>
                            <ul class="nav__mobile__list">
                                <li>
                                    <a href="#" class="nav__mobile__link"
                                        >Home</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="nav__mobile__link"
                                        >Courses</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="nav__mobile__link"
                                        >Blog</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="nav__mobile__link"
                                        >Contact</a
                                    >
                                </li>
                                <li>
                                    <a href="#" class="nav__mobile__link"
                                        >Cart</a
                                    >
                                </li>
                            </ul>
                        </nav>

                        <div
                            class="d-flex align-items-center ms-4 search-box search-tablet"
                        >
                            <i class="bi bi-search search-icon-input"></i>
                            <input
                                type="text"
                                name=""
                                id=""
                                placeholder="Seacrch here..."
                                class=""
                            />
                        </div>
                    </div>

                    <div class="d-flex justify-content-end nav-list nav">
                        <div class="d-flex align-items-center inline">
                            <ul
                                class="navbar-nav mb-2 mb-lg-0 d-inline-block me-4 nav-ul"
                            >
                                <li class="nav-item">
                                    <a
                                        class="nav-link z-index"
                                        aria-current="page"
                                        href="#"
                                        >Home</a
                                    >
                                </li>

                                <li class="nav-item dropdown drop">
                                    <a class="nav-link" href="#"
                                        >Courses
                                        <i class="bi bi-caret-down-fill"></i
                                    ></a>
                                    <ul
                                        class="dropdown-menu"
                                        aria-labelledby="navbarDropdown"
                                    >
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Action</a
                                            >
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Another action</a
                                            >
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#"
                                                >Something else here</a
                                            >
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
                        </div>

                        <div class="d-flex nav-icon justify-content-end gap-3">
                            <div
                                class="d-flex align-items-center me-3 search-box"
                            >
                                <i class="bi bi-search search-icon-input"></i>
                                <input
                                    type="text"
                                    name=""
                                    id=""
                                    placeholder="Seacrch here..."
                                    class=""
                                />
                            </div>
                            <div
                                class="d-flex align-items-center me-5 search-pc"
                            >
                                <i
                                    class="bi bi-search search-icon"
                                    id="seachIcon"
                                ></i>
                            </div>

                            <div
                                class="d-flex align-items-center search-sm closeIcon"
                                id="closeIcon"
                            >
                                <i
                                    class="bi bi-search search-icon closeIcon"
                                    id=""
                                ></i>
                            </div>

                            <div
                                class="d-flex align-items-center me-xl-5 me-lg-4 me-3 cart"
                            >
                                <i class="bi bi-bag cart-icon"></i>
                            </div>

                            <div class="d-flex">
                                <button
                                    type="button"
                                    class="btn btn-outline-dark login-btn btns"
                                >
                                    Login
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="overlay">
                <div class="d-block px-4 search">
                    <input type="text" class="py-5" placeholder="Search..." />
                </div>
            </div>
        </header>

        <main class="main">
            <div class="container">
                <section id="breadcrumb" class="container-fluid">
                    <nav
                        style="--bs-breadcrumb-divider: '>'"
                        aria-label="breadcrumb"
                    >
                        <ol class="breadcrumb align-items-center bc-height">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item" href="#">
                                <a href="#">Course</a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                Course detail
                            </li>
                        </ol>
                    </nav>
                </section>

                <section id="overal" class="container pt-5">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="course-left pb-50">
                                <div class="course-category mb-4">
                                    <a class="course-category-item" href="#"
                                        >skills and tips</a
                                    >
                                    <a
                                        class="course-category-item ms-2"
                                        href="#"
                                        >Communication skills</a
                                    >
                                </div>
                                <h2 class="title mb-4">
                                    Accelerated course to get 6.5 ielts in 6
                                    months
                                </h2>
                                <div class="g-color">
                                    Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium doloremque
                                    laudantium.
                                </div>
                                <div
                                    class="d-flex align-content-center mt-3 g-color course-meta"
                                >
                                    <div class="course-student-number">
                                        <i class="bi bi-person-video"></i>
                                        4 <span>Enrolled</span>
                                    </div>

                                    <div class="course-time ms-4">
                                        <i class="bi bi-clock"></i>
                                        6 <span>months</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="main">
                    <div class="container pb-5">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="course-preview">
                                    <div class="course-sumary">
                                        <div class="course-video">
                                            <p>
                                                <iframe
                                                    width="560"
                                                    height="315"
                                                    src="https://www.youtube.com/embed/7cmvABXyUC0"
                                                    title="YouTube video player"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen
                                                ></iframe>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12 sidebar-course">
                                <aside class="sidebar">
                                    <div class="course-widget">
                                        <div class="course-info-widget">
                                            <div class="course-inner">
                                                <div
                                                    class="course-price d-flex align-items-center mb-4"
                                                >
                                                    <div class="sale-price">
                                                        <span class="price"
                                                            >$50</span
                                                        >
                                                    </div>
                                                </div>
                                                <div class="inner">
                                                    <ul
                                                        class="course-info-fields my-3 un-ul"
                                                    >
                                                        <li
                                                            class="d-flex justify-content-between py-3 course-info"
                                                        >
                                                            <label for="">
                                                                <i
                                                                    class="bi bi-clock me-2"
                                                                ></i>
                                                                Duration
                                                            </label>
                                                            <span
                                                                class="ms-auto d-inline-block"
                                                                >3 months</span
                                                            >
                                                        </li>
                                                        <li
                                                            class="d-flex justify-content-between py-3 course-info"
                                                        >
                                                            <label for="">
                                                                <i
                                                                    class="bi bi-file-earmark-play"
                                                                ></i>
                                                                Lessons
                                                            </label>
                                                            <span
                                                                class="ms-auto d-inline-block"
                                                                >12</span
                                                            >
                                                        </li>
                                                        <li
                                                            class="d-flex justify-content-between py-3 course-info"
                                                        >
                                                            <label for="">
                                                                <i
                                                                    class="bi bi-clipboard2-check"
                                                                ></i>
                                                                Quizzes
                                                            </label>
                                                            <span
                                                                class="ms-auto d-inline-block"
                                                                >3</span
                                                            >
                                                        </li>
                                                        <li
                                                            class="d-flex justify-content-between py-3 course-info"
                                                        >
                                                            <label for="">
                                                                <i
                                                                    class="bi bi-person-plus"
                                                                ></i>
                                                                Maximum Students
                                                            </label>
                                                            <span
                                                                class="ms-auto d-inline-block"
                                                                >20</span
                                                            >
                                                        </li>
                                                        <li
                                                            class="d-flex justify-content-between py-3 course-info"
                                                        >
                                                            <label for="">
                                                                <i
                                                                    class="bi bi-translate"
                                                                ></i>
                                                                Language
                                                            </label>
                                                            <span
                                                                class="ms-auto d-inline-block"
                                                                >English,
                                                                Vietnam</span
                                                            >
                                                        </li>
                                                    </ul>

                                                    <div
                                                        class="social-share text-center mt-5 mb-4"
                                                    >
                                                        <a href=""
                                                            ><i
                                                                class="bi bi-facebook icon-footer px-3"
                                                            ></i
                                                        ></a>
                                                        <a href=""
                                                            ><i
                                                                class="bi bi-instagram icon-footer px-3"
                                                            ></i
                                                        ></a>
                                                        <a href=""
                                                            ><i
                                                                class="bi bi-twitter icon-footer px-3"
                                                            ></i
                                                        ></a>
                                                        <a href=""
                                                            ><i
                                                                class="bi bi-whatsapp icon-footer px-3"
                                                            ></i
                                                        ></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <footer class="bg-light">
            <div class="container footer">
                <div class="row pt-5 pb-4 justify-content-between px-3">
                    <div class="col-lg-3 col-md-6 col-sm-8 col-12">
                        <div class="single-footer">
                            <div class="foot logo mb-2">
                                <a class="d-flex align-items-center" href="">
                                    <img
                                        src="/english-app/public/asset/logo/logo.png"
                                        alt="Logo"
                                        width="60"
                                        height="60"
                                        class="d-inline-block"
                                    />
                                    <span class="logo-name"
                                        >English Courses</span
                                    >
                                </a>
                            </div>
                            <p class="follow mb-3 pe-sm-5">
                                Follow us on all platforms for more courses
                                updates
                            </p>

                            <div class="d-flex social-foot">
                                <a href=""
                                    ><i class="bi bi-facebook icon-footer"></i
                                ></a>
                                <a href=""
                                    ><i class="bi bi-instagram icon-footer"></i
                                ></a>
                                <a href=""
                                    ><i class="bi bi-twitter icon-footer"></i
                                ></a>
                                <a href=""
                                    ><i class="bi bi-whatsapp icon-footer"></i
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-4 col-12">
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

                    <div class="col-lg-2 col-md-6 col-sm-4 col-12">
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

                    <div class="col-lg-2 col-md-3 col-sm-4 col-12">
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
                            <div class="col-xl-12">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        Copyright &copy;
                                        <script>
                                            document.write(
                                                new Date().getFullYear()
                                            );
                                        </script>
                                        All rights reserved | This template is
                                        made with
                                        <i
                                            class="fa fa-heart"
                                            aria-hidden="true"
                                        ></i>
                                        by
                                        <a
                                            href="https://www.facebook.com/itvlu"
                                            target="_blank"
                                            >IT-VLU</a
                                        >
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
