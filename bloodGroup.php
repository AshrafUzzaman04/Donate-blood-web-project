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
    <title>রক্তদান । রক্ত খুজুন</title>
    <link rel="icon" href="./images/health medical center Logo (3).png" />
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <!-- manual own css link -->
    <link rel="stylesheet" href="./css/bloodGroup.css" />
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

        <section class="form" style="background-color: #f7f7f7; padding-bottom: 10px; border: 0">
            <div class="container body-container mx-auto text-center">
                <!-- fixed section -->
                <div class="title">
                    <i class="fa-solid fa-droplet"></i>
                    <h1>A+ রক্তদাতা</h1>
                </div>
                <div class="text">
                    <span>যেই স্থানের রক্তদাতা প্রয়োজন, সেই স্থান নির্বাচন করুন।</span>
                </div>
                <div class="form-part">
                    <form action="">
                        <div>
                            <!-- বিভাগ -->
                            <select class="form-select form-select-sm col-4" aria-label=".form-select-sm example">
                                <option selected>বিভাগ</option>
                                <option value="1">ময়মনসিংহ</option>
                                <option value="2">রংপুর</option>
                                <option value="3">সিলেট</option>
                                <option value="3">ঢাকা</option>
                                <option value="3">বরিশাল</option>
                                <option value="3">খুলনা</option>
                                <option value="3">রাজশাহী</option>
                                <option value="3">চট্টগ্রাম</option>
                            </select>
                            <!-- জেলা -->
                            <select class="form-select form-select-sm col-4" aria-label=".form-select-sm example">
                                <option selected>জেলা</option>
                                <option value="1">ময়মনসিংহ</option>
                                <option value="2">রংপুর</option>
                                <option value="3">সিলেট</option>
                                <option value="3">বরিশাল</option>
                                <option value="3">খুলনা</option>
                                <option value="3">রাজশাহী</option>
                                <option value="3">চট্টগ্রাম</option>
                            </select>
                            <!-- উপজেলা -->
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected>উপজেলা</option>
                                <option value="1">ময়মনসিংহ</option>
                                <option value="2">রংপুর</option>
                                <option value="3">সিলেট</option>
                                <option value="3">বরিশাল</option>
                                <option value="3">খুলনা</option>
                                <option value="3">রাজশাহী</option>
                                <option value="3">চট্টগ্রাম</option>
                            </select>
                        </div>
                    </form>
                </div>
                <!-- <div></div> -->
            </div>
        </section>
    </header>

    <!-- post showing -->
    <div class="container profile-section mx-auto">
        <!-- every ones profile -->
        <div class="card profile mx-auto">
            <a class="img" href="donatorProfile.php">
                <img src="./images/blank_men.png" alt="" title="প্রফাইল দেখুন" />
            </a>
            <div class="text">
                <a href="donatorProfile.php" title="প্রফাইল দেখুন">আশরাফ উজ্জামান</a>
                <span>সর্বশেষ ২৬/০৩/২০২১ তারিখ রক্তদান করেছেন। ৫২৯ দিন পূর্বে করদান করার
                    সময় হয়েছে।</span>
            </div>
        </div>

        <!-- When there is no blood donor at this location -->
        <!-- <div class="empty">
        <span>রক্তদাতা নেই।</span>
      </div> -->
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