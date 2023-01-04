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
    <link rel="stylesheet" href="./css/donateBlood.css" />
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
                <div class="signIn-btn">
                    <a href="signIn.php">
                        <ion-icon name="log-in-outline" style="font-size: 24px; font-weight: 800"></ion-icon>

                        সাইন ইন
                    </a>
                </div>

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
                                <div class="img-div">
                                    <img src="./images/myPic (6).jpeg" alt="" />
                                </div>
                                <div class="top-information">
                                    <span>আশরাফ উজ্জামান</span>
                                    <span>ashraf.uzzaman04082004@gmail.com</span>
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
                    <a href="donateBlood.php" title="রক্তের জন্য পোস্ট সমূহ" class="active"><i
                            class="fa-solid fa-hand-holding-droplet" style="color: #6fb554"></i></a>
                    <a href="bloodSearch.php" title="রক্ত খুজুন"><i class="fa-solid fa-magnifying-glass"
                            style="color: #6fb554"></i></a>
                    <a href="post.php" title="পোস্ট করুন"><i class="fa-solid fa-earth-americas"
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
            <span>রক্তের জন্য পোস্ট করুন।</span>
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
                <div class="card-body">
                    <p>
                        আমার এক দূরসম্পর্কের আত্নীয় খুব অসুস্থ দ্রুত রক্তের প্রয়োজন প্লিজ
                        কেউ দ্রুত আমার সাথে যোগাযোগ করুন।
                    </p>
                    <table>
                        <tbody>
                            <tr>
                                <th><span>রক্তের গ্রুপঃ </span></th>
                                <td><span> O+</span></td>
                            </tr>
                            <tr>
                                <th><span>রোগীর সমস্যাঃ </span></th>
                                <td><span> রক্ত সল্পতা</span></td>
                            </tr>
                            <tr>
                                <th><span>রক্তের পরিমানঃ </span></th>
                                <td><span> ২ ব্যাগ</span></td>
                            </tr>
                            <tr>
                                <th><span>রক্তদানের সময়ঃ </span></th>
                                <td><span> ১২ ঘটিকা</span></td>
                            </tr>
                            <tr>
                                <th><span>রক্তদানের তারিখঃ </span></th>
                                <td><span> ১৫/০১/২৩</span></td>
                            </tr>
                            <tr>
                                <th><span>রক্তদানের স্থানঃ </span></th>
                                <td><span> ঢাকা মেডিকেল হাসপাতাল, ঢাকা।</span></td>
                            </tr>
                            <tr>
                                <th><span>রোগীর লোকের নম্বরঃ </span></th>
                                <td><span> ০১৭৪৯৯৩১৮৯১</span></td>
                            </tr>
                            <tr>
                                <th><span>হিমোগ্লোবিনের পরিমানঃ </span></th>
                                <td><span> ০.৭৫%(খুব কম)</span></td>
                            </tr>
                            <tr>
                                <th><span>রেফারেন্সঃ </span></th>
                                <td><span> আমি নিজেই</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="footer">
                    <div class="phone">
                        <a href="tel:+8801749931891p"><i class="fa-solid fa-phone-volume"
                                style="transform: rotate(310deg)"></i><span>ফোন</span></a>
                    </div>
                    <div class="sms">
                        <a href="sms:+8801749931891?&body=আসসালামুআলাইকুম,..."><i
                                class="fa-solid fa-comment-dots"></i><span>এস.এম.এস</span></a>
                    </div>
                    <div class="email">
                        <a href="mailto:ashraf.uzzaman04082004@gmail.com"><i
                                class="fa-solid fa-envelope-open-text"></i><span>ইমেইল</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- post button -->
    <div class="post-icon">
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
            <ion-icon name="pencil-outline"></ion-icon>
        </button>

        <div class="modal fade" id="exampleModal" style="z-index: 100000" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: crimson">
                            <i class="fa-solid fa-droplet me-2"></i>রক্তের জন্য অনুরোধ পাঠান
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <!-- Message input -->
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="message" rows="4"
                                    style="resize: none; display: block"></textarea>
                                <label class="form-label" for="message">ক্যাপশন</label>
                            </div>
                            <!-- রক্তের গ্রুপ -->
                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>রক্তের গ্রুপ নির্বাচন করুন</option>
                                <option value="1">A+</option>
                                <option value="2">A-</option>
                                <option value="3">B+</option>
                                <option value="3">B-</option>
                                <option value="3">O+</option>
                                <option value="3">O-</option>
                                <option value="3">AB+</option>
                                <option value="3">AB-</option>
                            </select>
                            <!-- রোগীর সমস্যা -->
                            <div class="form-outline mb-3">
                                <input type="text" id="problem" class="form-control" />
                                <label class="form-label" for="problem">রোগীর সমস্যা</label>
                            </div>
                            <!-- রক্তের পরিমান -->
                            <div class="form-outline mb-3">
                                <input type="text" id="quantity" class="form-control" />
                                <label class="form-label" for="quantity">রক্তের পরিমান</label>
                            </div>
                            <!-- রক্তদানের সময় -->
                            <div class="form-outline my-3">
                                <input type="date" id="date" class="form-control" value="date" />
                                <label class="form-label" for="date">রক্তদানের সময়</label>
                            </div>
                            <!-- রক্তদানের স্থান -->
                            <div class="form-outline mb-3">
                                <input type="text" id="address" class="form-control" />
                                <label class="form-label" for="address">রক্তদানের স্থান</label>
                            </div>
                            <!-- রোগীর লোকের নম্বর -->
                            <div class="form-outline mb-3">
                                <input type="number" id="number" class="form-control" />
                                <label class="form-label" for="number">রোগীর লোকের নম্বর</label>
                            </div>
                            <!-- হিমোগ্লোবিনের পরিমান -->
                            <div class="form-outline mb-3">
                                <input type="text" id="hemoglobin" class="form-control" />
                                <label class="form-label" for="hemoglobin">হিমোগ্লোবিনের পরিমান</label>
                            </div>
                            <!-- রেফারেন্স -->
                            <div class="form-outline mb-3">
                                <input type="text" id="reference" class="form-control" />
                                <label class="form-label" for="reference">রেফারেন্স</label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" />
                                <label class="form-check-label" for="form4Example4">
                                    আপনার তথ্য সম্পূর্ণ সত্য, এবং আপনি আমাদের শর্তাবলী সমূহ
                                    পড়েছেন।
                                </label>
                            </div>
                            <div class="modal-footer">
                                <input type="reset" class="btn btn-secondary" name="" id="" value="পুনোরায় লিখুন" />
                                <input type="submit" class="btn btn-success" value="পোস্ট করুন" />
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

    <!-- navbar -->
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