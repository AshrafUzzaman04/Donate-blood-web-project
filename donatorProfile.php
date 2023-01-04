<?php
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>রক্তদাতা । দাতার প্রফাইল</title>

    <link rel="icon" href="./images/health medical center Logo (3).png" />
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <!-- manual css link -->
    <link rel="stylesheet" href="./css/donatorProfile.css" />
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
            <!-- back to page -->
            <a class="back-to-page" href="<?= $previous ?>">
                <i class="fa-solid fa-circle-arrow-left"></i>
                <span>পূর্বের পেইজে ফিরুন</span>
            </a>
        </div>
    </header>

    <!-- body container -->
    <div class="container body-container">
        <div class="picture">
            <img src="./images/blank_men.png" alt="" />
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <span>নামঃ </span>
                    <span> আশরাফ উজ্জামান</span>
                </div>
                <div>
                    <span>ইমেইলঃ </span>
                    <span> ashraf.uzzaman04082004@gmail.com</span>
                </div>
                <div>
                    <span>রক্তের গ্রুপঃ </span>
                    <span> O+</span>
                </div>
                <div>
                    <span>সর্বশেষ দানের তারিখঃ </span>
                    <span> 12-jan-2021</span>
                </div>
                <div>
                    <span>মোট রক্তদানঃ </span>
                    <span> ২ বার</span>
                </div>
                <div>
                    <span>বর্তমান ঠিকানাঃ </span>

                    <span> ১৭৩৬-জনতাবাগ, রায়েরবাগ,যাত্রাবাড়ি, দনিয়া-ঢাকা।</span>
                </div>
                <div>
                    <span>স্থায়ী ঠিকানাঃ </span>

                    <span> ১৭৩৬-জনতাবাগ, রায়েরবাগ,যাত্রাবাড়ি, দনিয়া-ঢাকা।</span>
                </div>
            </div>
            <div class="footer">
                <div class="phone">
                    <a href="tel:+8801749931891p"><i class="fa-solid fa-phone-volume"
                            style="transform: rotate(350deg)"></i><span>ফোন</span></a>
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
    <!-- boostrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>
</html>