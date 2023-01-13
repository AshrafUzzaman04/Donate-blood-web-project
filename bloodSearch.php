<?php 
include_once("./databaseInput.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>রক্তদান । রক্ত খুজুন</title>
    <!-- web icon -->
    <link rel="icon" href="./images/health medical center Logo (3).png" />

    <!-- boostrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- boxicon cdn link -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <!-- main css link -->
    <link rel="stylesheet" href="./css/bloodSearch.css" />
</head>
<body>
    <!-- header div started here -->
    <header>
        <div class="container">
            <!-- icon image -->
            <div class="icon-img">
                <a href="./" style="text-decoration: none"><img src="./images/health medical center Logo (3).png" alt=""
                        class="img-fluid" width="44" />
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
                <?php if(!isset($_SESSION['register'])){ ?>
                <div class="signIn-btn">
                    <a href="signIn.php">
                        <ion-icon name="log-in-outline" style="font-size: 24px; font-weight: 800"></ion-icon>

                        সাইন ইন
                    </a>
                </div>
                <?php
                     } else{
                    ?>

                <div id="pp-img" style="padding: 4px 10px !important;">
                    <a href="profileUpdate.php">
                        <img src="./images/blank_men.png" alt="" width="36px" height="36px" style="border-radius: 50%;">
                    </a>

                </div>
                <?php }
                    ?>

                <!-- manubar icon -->
                <div class="mobile-navbar d-flex justify-content-center align-items-center text-white" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
                    aria-controls="offcanvasWithBothOptions">
                    <ion-icon name="menu-outline" style="font-size: 36px"></ion-icon>
                </div>

                <!-- left side scroll manubar -->
                <div class="side-bar border-0">
                    <div class="offcanvas offcanvas-start border-0" data-bs-scroll="true" tabindex="-1"
                        id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <div class="offcanvas-header">
                            <div class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
                                <!-- icon image -->
                                <div class="icon-img">
                                    <a href="./" style="text-decoration: none"><img
                                            src="./images/health medical center Logo (3).png" alt="" class="img-fluid"
                                            width="44" />
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

                                <?php if(!isset($_SESSION['register'])){ ?>
                                <div class="img-div">
                                    <img src="./images/blank_men.png" alt="" />
                                </div>

                                <?php
                                    }else{
                                ?>
                                <div class="img-div">
                                    <img src="./images/blank_men.png" alt="" />
                                </div>

                                <?php
                                    }
                                ?>

                                <div class="top-information" style="display: flex; flex-direction: column">
                                    <span><?= $_SESSION['register']['name'] ?? "Name" ?></span>
                                    <span><?= $_SESSION['register']['email'] ?? "example@gmail.com" ?></span>
                                </div>
                            </div>

                            <!-- list slider manu -->
                            <nav>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <ion-icon name="call-outline"></ion-icon>
                                            +880<?= $_SESSION['register']['number'] ?? "................." ?>
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
                                        <a href="./profileUpdate.php">
                                            <ion-icon name="cloud-upload-outline"></ion-icon>
                                            প্রফাইল আপডেট করুন
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <ion-icon name="log-out-outline"></ion-icon> লগ আউট
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <ion-icon name="share-social-outline"></ion-icon> শেয়ার
                                            করুন
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- second manubar -->
        <section id="navbar">
            <div class="container">
                <div class="manubar" id="fixedNav" class="">
                    <a href="./" title="হোমে ফিরুন"><i class="fa-solid fa-house" style="color: #6fb554"></i></a>
                    <a href="donateBlood.php" title="রক্তের জন্য পোস্ট সমূহ"><i class="fa-solid fa-hand-holding-droplet"
                            style="color: #6fb554"></i></a>
                    <a href="bloodSearch.php" title="রক্ত খুজুন" class="active"><i class="fa-solid fa-magnifying-glass"
                            style="color: #6fb554"></i></a>
                    <a href="post.php" title="পোস্ট করুন"><i class="fa-solid fa-earth-americas"
                            style="color: #6fb554"></i></a>
                </div>
            </div>
        </section>
    </header>

    <!-- body container -->
    <div class="container container-body" id="body-container">
        <h3 class="fw-bold text-center py-2">
            আপনার প্রয়োজনীয় রক্তের সন্ধান করুন।
        </h3>
        <!-- search for blood -->
        <div class="search">
            <a href="bloodGroup.php"><i class="fa-solid fa-droplet"></i>A+</a>
            <a href="bloodGroup.php"><i class="fa-solid fa-droplet"></i>A-</a>
            <a href="bloodGroup.php"><i class="fa-solid fa-droplet"></i>B+</a>
            <a href="bloodGroup.php"><i class="fa-solid fa-droplet"></i>B-</a>
            <a href="bloodGroup.php"><i class="fa-solid fa-droplet"></i>O+</a>
            <a href="bloodGroup.php"><i class="fa-solid fa-droplet"></i>O-</a>
            <a href="bloodGroup.php"><i class="fa-solid fa-droplet"></i>AB+</a>
            <a href="bloodGroup.php"><i class="fa-solid fa-droplet"></i>AB-</a>
        </div>
    </div>
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
    <script>
    window.onscroll = function() {
        myFunction();
    };

    var navbar = document.getElementById("navbar");
    var bodyContainer = document.getElementById("body-container");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
            bodyContainer.classList.add("body-containersticky");
        } else {
            navbar.classList.remove("sticky");
            bodyContainer.classList.remove("body-containersticky");
        }
    }
    </script>
</body>
</html>