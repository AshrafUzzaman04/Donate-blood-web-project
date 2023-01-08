<?php 
include_once("./databaseInput.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>রক্ত দান</title>
    <!-- web icon -->
    <link rel="icon" href="./images/health medical center Logo (3).png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <!-- boxicon cdn link -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- swiper js cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- main css link -->
    <link rel="stylesheet" href="./css/index.css" />
</head>

<body>
    <div class="background">
        <!-- header div started here -->
        <header>
            <div class="container">
                <!-- icon image -->
                <div class="icon-img">
                    <a href="./" style="text-decoration: none"><img src="./images/health medical center Logo (3).png"
                            alt="" class="img-fluid" width="44" />
                        <span class="fw-bold" style="
                  font-size: 30px;
                  text-align: center;
                  vertical-align: middle;
                  color: white;
                ">
                            রক্ত দান</span></a>
                </div>

                <div class="manubar">
                    <!-- sign in button -->
                    <div class="signIn-btn">
                        <a href="signIn.php">
                            <ion-icon name="log-in-outline" style="font-size: 24px; font-weight: 800"></ion-icon>

                            সাইন ইন
                        </a>
                    </div>

                    <!-- manubar icon -->
                    <div class="mobile-navbar d-flex justify-content-center align-items-center text-white"
                        data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <ion-icon name="menu-outline" style="font-size: 36px"></ion-icon>
                    </div>

                    <!-- left side scroll manubar -->
                    <div class="side-bar border-0">
                        <div class="offcanvas offcanvas-start border-0" class="offcanvas offcanvas-start" tabindex="-1"
                            id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">
                                <div class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                                    <!-- icon image -->
                                    <div class="icon-img">
                                        <a href="./" style="text-decoration: none"><img
                                                src="./images/health medical center Logo (3).png" alt=""
                                                class="img-fluid" width="44" />
                                            <span class="text-danger fw-bold" style="
                            font-size: 30px;
                            text-align: center;
                            vertical-align: middle;
                          ">
                                                রক্ত দান</span></a>
                                    </div>
                                </div>

                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <!-- profile section -->
                                <div class="profile-section">
                                    <div class="img-div">
                                        <img src="./images/myPic (6).jpeg" alt="" />
                                    </div>
                                    <div class="top-information" style="display: flex; flex-direction: column">
                                        <span>নাম</span>
                                        <span>example@gmail.com</span>
                                    </div>
                                </div>

                                <!-- list slider manu -->
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <ion-icon name="call-outline"></ion-icon>
                                                +৮৮০১৭৪৯৯৩১৮৯১
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <ion-icon name="water-outline" style="color: red"></ion-icon>
                                                রক্তের গ্রুপঃ O(+ve)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <ion-icon name="calendar-number-outline"></ion-icon>
                                                সর্বশেষ রক্ত দানঃ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <ion-icon name="fitness-outline"></ion-icon> মোট রক্ত
                                                দান করেছেনঃ ১বার
                                            </a>
                                        </li>
                                        <li>
                                            <a href="upDonateDate.php">
                                                <ion-icon name="pencil-outline"></ion-icon> রক্তদানের
                                                তারিখ আপডেট করুন
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <ion-icon name="cloud-upload-outline"></ion-icon>
                                                প্রফাইল আপডেট করুন
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <ion-icon name="log-out-outline"></ion-icon> লগ
                                                আউট
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <ion-icon name="share-social-outline"></ion-icon>
                                                শেয়ার করুন
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- hero text container -->
        <div class="container hero-text mt-0 text-center">
            <h1 class="m-0 display-5">রক্তদাতাদের জরুরী প্রয়োজন</h1>
            <p>আপনার রক্তদানের বিনিময়ে বাঁচতে পারে একটি জীবন।</p>
        </div>
        <!-- hero slider -->
        <div class="container slider mx-auto py-2">
            <!-- slider section -->
            <section class="">
                <!-- Slider main container -->
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="./images/slider (1).png" alt="" class="img-fluid" />
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/slider (2).png" alt="" class="img-fluid" />
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/slider (3).png" alt="" class="img-fluid" />
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/slider (4).png" alt="" class="img-fluid" />
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/slider (5).png" alt="" class="img-fluid" />
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/slider (6).png" alt="" class="img-fluid" />
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/slider (7).png" alt="" class="img-fluid" />
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/slider (8).png" alt="" class="img-fluid" />
                        </div>
                        <div class="swiper-slide">
                            <img src="./images/slider (9).png" alt="" class="img-fluid" />
                        </div>
                    </div>
                    <div class="swiper-button-next" style="
                --swiper-theme-color: rgb(255, 255, 255);
                right: 10px;
                left: auto;
                background: #ff00004f;
                border-radius: 50%;
                padding: 25px 25px;
                --swiper-navigation-size: 25px;
                display: flex;
                justify-content: center;
                align-items: center;
                vertical-align: middle;
                top: 45%;
              "></div>
                    <div class="swiper-button-prev" style="
                --swiper-theme-color: rgb(255, 255, 255);
                left: 10px;
                right: auto;
                background: #ff000099;
                border-radius: 50%;
                padding: 25px 25px;
                --swiper-navigation-size: 25px;
                display: flex;
                justify-content: center;
                align-items: center;
                vertical-align: middle;
                top: 45%;
              "></div>
                </div>
            </section>
        </div>

        <!-- statistics -->
        <div class="container container-statistics">
            <section class="statistics">
                <div class="row m-0 p-0 text-center">
                    <div class="col-4">
                        <div class="icon">
                            <i class="bx bxs-edit-alt"></i>
                        </div>
                        <div class="text">
                            <span class="num" data-value="1270">000k+</span>
                            <span>মোট রেজিস্ট্রেশন</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="icon">
                            <i class="bx bxs-donate-blood"></i>
                        </div>
                        <div class="text">
                            <span class="num" data-value="658">000k+</span>
                            <span>রক্ত দিয়েছেন</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="icon">
                            <i class="bx bx-plus-medical"></i>
                        </div>
                        <div class="text">
                            <span class="num" data-value="200">000+</span>
                            <span>রক্ত প্রয়োজন</span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- svg- top -->
    <div class="svg-top" style="z-index: -1">
        <svg viewBox="15 12 1470 48" fill="none" style="color: #aa3333; position: relative; top: 0; display: block"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                fill="currentColor"></path>
        </svg>
    </div>

    <!-- container body section  -->
    <div class="container p-0">
        <!-- features section -->
        <section class="features my-4 my-lg-5">
            <div class="row">
                <div class="col-6 col-md-6 col-lg-4 col-xxl-3">
                    <a href="bloodSearch.php">
                        <div class="icon-features">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <span>জরুরী রক্ত খুজুন</span>
                    </a>
                </div>

                <div class="col-6 col-md-6 col-lg-4 col-xxl-3">
                    <a href="donateBlood.php">
                        <div class="icon-features">
                            <i class="fa-solid fa-droplet"></i>
                        </div>
                        <span>রক্তের জন্য পোস্ট</span>
                    </a>
                </div>
                <div class="col-6 col-md-6 col-lg-4 col-xxl-3">
                    <a href="javascript:void(0)">
                        <div class="icon-features">
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                        <span>রক্তদান বিষয়ে তথ্য</span>
                    </a>
                </div>
                <div class="col-6 col-md-6 col-lg-4 col-xxl-3">
                    <a href="javascript:void(0)">
                        <div class="icon-features">
                            <i class="fa-solid fa-address-book"></i>
                        </div>
                        <span>যোগাযোগ করুন।</span>
                    </a>
                </div>
                <div class="col-6 col-md-6 col-lg-4 col-xxl-3">
                    <a href="post.php">
                        <div class="icon-features">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                        <span>আমাদের কার্যক্রম সমূহ</span>
                    </a>
                </div>
                <div class="col-6 col-md-6 col-lg-4 col-xxl-3">
                    <a href="javascript:void(0)">
                        <div class="icon-features">
                            <i class="fa-solid fa-lightbulb"></i>
                        </div>
                        <span>রক্ত যোগান সম্পর্কে</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Volunteers Needed to Help section -->
        <section class="help my-3 my-lg-5">
            <div class="row m-0 flex-column-reverse text-center text-lg-start flex-lg-row">
                <div class="text col-12 col-lg-6 px-4">
                    <span class="display-5">রক্তদানে সাহায্য করার জন্য স্বেচ্ছাসেবকদের প্রয়োজন</span>
                    <p>
                        স্বেচ্ছাসেবক সুযোগের মধ্যে রয়েছে রক্তদানে সহায়তা করা এবং আপনার
                        সম্প্রদায়কে অত্যন্ত প্রয়োজনীয় পরিষেবা প্রদান করা।
                    </p>
                    <a href="javascript:void(0)">
                        <button class="btn">আরো জানুন</button>
                    </a>
                </div>
                <div class="img col-12 col-lg-6">
                    <img src="./images/VeectezyActivism-WorldBloodDonorDay-Illustrationbv0421_generated-removebg-preview.png"
                        alt="" class="img-fluid" />
                </div>
            </div>
        </section>
    </div>

    <!-- -------------------------------------------------------------------------- -->
    <!------------------------------ footer section ---------------------------------->
    <!-- -------------------------------------------------------------------------- -->
    <footer class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Links start -->
        <section style="background-color: #aa3333">
            <div class="container-lg p-0 text-start mt-5">
                <!-- Grid row start -->
                <div class="d-flex flex-column flex-md-row align-items-start justify-content-md-between">
                    <!-- Grid column 1 started-->
                    <div class="mt-3 mt-md-4 mb-3">
                        <!-- Content -->
                        <a href="./" style="text-decoration: none"><img
                                src="./images/health medical center Logo (3).png" alt="" class="img-fluid" width="44" />
                            <span class="fw-bold"> রক্ত দান</span></a>
                        <p>আমাদের মোবাইল এপ্স ডাউনলোড করুন</p>
                        <!-- mobile app link section -->
                        <div class="mobile-app-link">
                            <a href="javascript:void(0)"><img src="./images/Google_Play-Badge-Logo.wine.png" alt=""
                                    class="img-fluid m-0 p-0" width="100px" /></a>
                            <a href="javascript:void(0)"><img src="./images/App_Store_(iOS)-Badge-Logo.wine.png" alt=""
                                    class="img-fluid m-0 p-0" width="100px" /></a>
                        </div>
                    </div>
                    <!-- Grid column 1 end -->

                    <!-- Grid column 2 started -->
                    <div class="mt-3 mt-md-4 mb-3">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-3">স্যাট নীতি</h6>
                        <p>
                            <a href="#!" class="text-reset">গোপনীয়তা নীতি</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">শর্তাবলী</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">প্রত্যর্পণ নীতি</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">কুকিজ নীতি</a>
                        </p>
                    </div>
                    <!-- Grid column  2 end -->

                    <!-- Grid column 3 started-->
                    <div class="mt-3 mt-md-4 mb-3">
                        <!-- subscribe -->
                        <div class="subscribe">
                            <span class="fw-bold">আমাদের নিউজলেটার সাবস্ক্রাইব করুন</span>
                            <form action="">
                                <input class="email" type="email" placeholder="example@gmail.com" />
                                <input class="submit" type="submit" value="সাবস্ক্রাইব করুন" />
                            </form>
                        </div>
                        <div class="list-item">
                            <ul>
                                <li><a href="javascript:voild(0)">প্রশ্ন উত্তর</a></li>
                                <li><a href="javascript:voild(0)">সম্পর্কিত</a></li>
                                <li><a href="javascript:voild(0)">যোগাযোগ</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Grid column 3 end -->
                </div>
                <!-- grid row end -->
            </div>
        </section>
        <!-- Section: Links end -->

        <!-- Section: logo media -->
        <div class="logo-media" style="background-color: #aa3333e7">
            <section
                class="container-md d-flex justify-content-center vertical-center justify-content-lg-between py-2 px-5 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-flex justify-content-center align-items-center text-white">
                    <span class="vertical-center my-auto py-auto">সামাজিক যোগাযোগ মাধ্যম গুলোতে আমাদের সাথে সংযুক্ত
                        থাকুনঃ</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <!-- Facebook -->
                    <a href="javascript:void(0)" style="text-decoration: none">
                        <i class="fab fa-facebook-f fa-2x" style="color: #3b5998"></i>
                    </a>

                    <!-- Twitter -->
                    <a href="javascript:void(0)" style="text-decoration: none">
                        <i class="fab fa-twitter fa-2x" style="color: #55acee"></i>
                    </a>

                    <!-- Instagram -->
                    <a href="javascript:void(0)" style="text-decoration: none">
                        <i class="fab fa-instagram fa-2x" style="color: #55009b"></i>
                    </a>

                    <!-- Linkedin -->
                    <a href="https://www.linkedin.com/in/ashrafuzzaman04/" style="text-decoration: none"
                        target="_blank">
                        <i class="fab fa-linkedin-in fa-2x" style="color: #0082ca"></i>
                    </a>

                    <!-- Youtube -->
                    <a href="javascript:void(0)" style="text-decoration: none">
                        <i class="fab fa-youtube fa-2x" style="color: #ed302f"></i>
                    </a>

                    <!-- Whatsapp -->
                    <a href="javascript:void(0)" style="text-decoration: none">
                        <i class="fab fa-whatsapp fa-2x" style="color: #25d366"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
        </div>
        <!-- Section: Social media -->

        <!-- Copyright -->
        <div class="text-center px-4 py-2 border-0 fw-semibold"
            style="background-color: white; color: rgb(119, 119, 119)">
            © ২০২৩ কপিরাইটঃ রক্ত দাতা। সমস্ত অধিকার সংরক্ষিত।
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- scroll to top button -->
    <a href="#" title="উপরে যান" class="goToTop"><img
            src="./images/vecteezy_space-rocket-launch-vector-illustration_5835164-removebg-preview (1).png"
            alt="" /></a>

    <!-- boostrap script link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <!-- IONIC.IO installation js link -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- navbar scrolling effect -->
    <script src="js/navBar.js"></script>

    <!-- goto top button js -->
    <script src="js/goToTop.js"></script>

    <!-- statistics count the number js link -->
    <script src="./js/statisticsCount.js"></script>

    <!-- swiper js slider link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>
</body>
</html>