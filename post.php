<?php 
include_once("./databaseInput.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>রক্ত দান। রক্তের জন্য পোস্ট</title>
    <!-- web icon -->
    <link rel="icon" href="./images/health medical center Logo (3).png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- boxicon cdn link -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />

    <!-- main css link -->
    <link rel="stylesheet" href="./css/post.css" />
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
                                        <a href="profileUpdate.php">
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
                    <a href="bloodSearch.php" title="রক্ত খুজুন"><i class="fa-solid fa-magnifying-glass"
                            style="color: #6fb554"></i></a>
                    <a href="post.php" title="পোস্ট করুন" class="active"><i class="fa-solid fa-earth-americas"
                            style="color: #6fb554"></i></a>
                </div>
            </div>
        </section>
    </header>

    <!-- body container -->
    <div class="container body-container" id="body-container">
        <!-- post section -->
        <div class="post-section pointer-event" title="ক্লিক করুন" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">
            <span>আপনার কার্যক্রম সমূহ পোস্ট করুন</span>
        </div>

        <!-- post show in newsfeed -->
        <div class="newsfeed">
            <div class="card">
                <div class="card-header bg-white border-0">
                    <div class="img">
                        <img src="./images/myPic (6).jpeg" alt="" class="img-fluid" />
                    </div>
                    <div class="name">
                        <span>Ashraf Uzzaman</span>
                        <span>21h</span>
                    </div>
                </div>
                <div class="card-body p-0">
                    <p style="padding: 0px 14px">
                        আমার এক দূরসম্পর্কের আত্নীয় খুব অসুস্থ দ্রুত রক্তের প্রয়োজন প্লিজ
                        কেউ দ্রুত আমার সাথে যোগাযোগ করুন।
                    </p>
                    <div class="img" style="background-color: rgb(228 228 228 / 44%)">
                        <img src="./images/myPic (6).jpeg" class="img-fluid" alt=""
                            style="object-fit: contain; min-width: 100%; max-height: 500px" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- post button -->
    <div class="post-icon">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"
            title="পোস্ট করুন">
            <i class="fa-solid fa-image"></i>
        </button>

        <!-- our Activities post  -->
        <div class="modal fade" id="exampleModal" style="z-index: 100000" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title fs-6" id="exampleModalLabel"
                            style="color: rgb(88, 88, 88); font-weight: 500">
                            আপনার কার্যক্রম সবার মাঝে শেয়ার করুন
                        </h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <!-- image section -->
                            <div class="mb-4">
                                <img src="./images/blank_photo.png" width="100" height="100"
                                    style="object-fit: cover; border-radius: 10%" alt="" />
                                <label for="photo" style="cursor: pointer" title="ক্লিক করুন"><i
                                        class="fa-solid fa-camera"></i></label>
                                <input type="file" id="photo" class="hidden" hidden />
                                <h5 class="text-success my-3">
                                    <i class="fa-regular fa-hand-point-up text-dark"></i> ছবি
                                    আপলোড করুন।
                                </h5>
                            </div>
                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="message" rows="4" style="display: block"></textarea>
                                <label class="form-label" for="message">কার্যক্রম সম্পর্কে লিখুন</label>
                            </div>
                            <div class="modal-footer" style="border: none">
                                <input type="reset" class="btn btn-secondary" value="পুনরায় লিখুন" />
                                <input type="submit" class="btn btn-success" value="শেয়ার করুন" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

    <!-- navabar onscroll js -->
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