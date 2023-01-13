<?php
include_once("./databaseInput.php");
include_once("./code.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>রক্ত দান । প্রফাইল আপডেট</title>
    <link rel="icon" href="./images/health medical center Logo (3).png" />
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />


    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />

    <!-- manual css -->
    <link rel="stylesheet" href="./css/profileUpdate.css">
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
            <a class="back-to-page" style="cursor: pointer;" onclick="history.go(-1)">
                <i class="fa-solid fa-circle-arrow-left"></i>
                <span>পূর্বের পেইজে ফিরুন</span>
            </a>
        </div>
    </header>


    <!-- body container -->
    <div class="container body-container">
        <form action="">
            <div class="picture">
                <div class="hi">
                    <img src="./images/blank_men.png" alt="" />
                    <label for="pp" title="ইমেইজ আপলোড করুন।">
                        <box-icon name='image-add'></box-icon>
                    </label>
                    <input type="file" id="pp" hidden>
                </div>
            </div>

            <section class="p-3 p-lg-4">
                <!-- Name input -->
                <div class="form-outline mb-3">
                    <input type="text" id="name" class="form-control"
                        value="<?= $_SESSION['register']['name'] ?? null ?>" />
                    <label class="form-label" for="name">নাম</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-3">
                    <input type="email" id="Email" class="form-control"
                        value="<?= $_SESSION['register']['email'] ?? null ?>" />
                    <label class="form-label" for="Email">ইমেইল</label>
                </div>

                <!-- numbers input -->
                <div class="form-outline mb-3">
                    <input type="number" id="number" class="form-control"
                        value="<?= $_SESSION['register']['number'] ?? null ?>" />
                    <label class="form-label" for="number">মোবাইল নম্বর</label>
                </div>

                <!-- numbers input -->
                <div class="form-outline mb-3">
                    <input type="date" id="number" class="form-control" />
                    <label class="form-label" for="number">জন্ম তারিখ</label>
                </div>

                <!-- numbers  -->
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>লিঙ্গ/সেক্স</option>
                    <option value="male">পুরুষ</option>
                    <option value="female">মহিলা</option>
                    <option value="others">অন্যান্য</option>
                </select>

                <!-- bloodgroup -->
                <!-- রক্তের গ্রুপ -->
                <select class="form-select mb-3" aria-label="Default select example">
                    <option selected>রক্তের গ্রুপ</option>
                    <option value="1">A+</option>
                    <option value="2">A-</option>
                    <option value="3">B+</option>
                    <option value="3">B-</option>
                    <option value="3">O+</option>
                    <option value="3">O-</option>
                    <option value="3">AB+</option>
                    <option value="3">AB-</option>
                </select>

                <!-- How many times have you donated blood input -->
                <div class="form-outline mb-3">
                    <input type="text" id="hmtdb" class="form-control" />
                    <label class="form-label" for="hmtdb">কতবার রক্তদান করেছেন?</label>
                </div>

                <!-- last time you donated blood input -->
                <div class="form-outline mb-3">
                    <input type="date" id="bDDate" class="form-control" />
                    <label class="form-label" for="bDDate">সর্বশেষ কত তারিখে রক্ত দান করেছেন?</label>
                </div>

                <!-- village input -->
                <div class="form-outline mb-3">
                    <input type="text" id="village" class="form-control" />
                    <label class="form-label" for="village">গ্রাম/এলাকা</label>
                </div>

                <!-- Submit button -->
                <div class="mx-4 mx-lg-5">
                    <input type="submit" class="btn btn-success btn-block mx-auto" value="আপডেট">
                </div>
            </section>

        </form>



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

    <!-- box icons -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
</body>
</html>