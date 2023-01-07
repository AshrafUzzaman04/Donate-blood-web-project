<?php

$connect = mysqli_connect("localhost", "root", "" , "blood_donate");

if(isset($_POST['submit123'])){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Cpassword = $_POST['Cpassword'];


    // name validation
    if(empty($name)){
        $errorName = "আপনার নামটি লিখতে ভুলে গিয়েছেন!";
    }else{
        $correctName = $name;
    }

    // number validaton
    if(empty($number)){
        $errorNum = "আপনার মোবাইল নম্বরটি লিখুন!";
    }elseif(!filter_var($number, FILTER_SANITIZE_NUMBER_INT)){
        $errorNum = "দয়া করে সঠিক নম্বরটি প্রদান করুন";
    }elseif(!preg_match('/^[0-9]{11}+$/', $number)){
        $errorNum = "দয়া করে সঠিক নম্বরটি প্রদান করুন";
    }else{
        $correctNum = $number;
    }

    // email validation 
    if(empty($email)){
        $errorEmail = "আপনার ইমেইল আইডিটি প্রদান করুন!";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorEmail = "অনুগ্রহ করে সঠিক ইমেইলটি প্রদান করুন!";
    }else{
        $select_pre_email_query = "SELECT * FROM `sign_up` WHERE `email` = '$email'";
        $select_pre_email = $connect->query($select_pre_email_query);

        if($select_pre_email->num_rows > 0){
            $errorEmail = "এই ইমেইল দ্বারা পূর্বে রেজিস্ট্রেশন করা হয়েছে!";
        }else{
            $correctEmail = $email;
        }

    }

    // password validation
    if(empty($password)){
        $errorPass = "পাসওয়ার্ড খালি থাকা যাবে না!";
    }elseif(strlen($_POST["password"]) <= '8'){
        $errorPass = "আপনার পাসওয়ার্ডে কমপক্ষে ৮টি অক্ষর থাকতে হবে!";
    }elseif(!preg_match("#[0-9]+#",$password)){
        $errorPass =  "আপনার পাসওয়ার্ডে কমপক্ষে ১টি নম্বর থাকতে হবে!";
    }elseif(!preg_match('@[a-z]@', $password)){
        $errorPass = "আপনার পাসওয়ার্ডে কমপক্ষে ১টি ইংরেজী বর্ণমালা থাকতে হবে!";
    }
    else{
        $correctPass = $password;
    }


    // confirm password
    if(empty($Cpassword)){
        $errorCpass = "পাসওয়ার্ডটি পূনরায় লিখুন";
    }elseif(!($correctPass === $Cpassword)){
        $errorCpass = "পাসওয়ার্ডটি একই হতে হবে!";
    }else{
        $correctCpass = $Cpassword;
    }



    if(!empty($correctName) && !empty($correctNum) && !empty($correctEmail) && !empty($correctCpass)){
        $insert_query = "INSERT INTO `sign_up`(`name`, `number`, `email`, `password`) VALUES ('$correctName','$correctNum','$correctEmail','$correctCpass')";
        $insert = $connect->query($insert_query);

        

        if($insert){
            echo"<script>swal('Good job!', 'You clicked the button!', 'success')
            console.log('swal');
            </script>";

            $name = $number = $email = $password = $Cpassword = null;
        }

        
    }


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>রেজিস্ট্রেশন করুন | রক্ত দান</title>
    <link rel="icon" href="./images/health medical center Logo (3).png" />
    <link rel="stylesheet" href="./css/form.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>
<body>
    <div id="particles-js">
        <div class="maivDiv">
            <!-- signin text -->
            <div class="sign_up">
                <!-- if you need logo in the sign in page -->
                <img src="./images/health medical center Logo (3).png" alt="" width="40" />
                <h4 class="m-0">রেজিস্ট্রেশন করুন</h4>
            </div>

            <!-- form pannel -->
            <form class="middelDiv" method="POST">
                <div class="form-border">
                    <input type="text" name="name" placeholder="নাম" value="<?= $name ?? null ?>" />
                </div>
                <div class="text-center">
                    <span style="font-size: 12px; color:red;"><?= $errorName ?? null ?></span>
                </div>
                <div class="form-border">
                    <input type="number" name="number" placeholder="নম্বর" value="<?= $number ?? null ?>" />
                </div>
                <div class="text-center">
                    <span style="font-size: 12px; color:red;"><?= $errorNum ?? null ?></span>
                </div>
                <div class="form-border">
                    <input type="email" name="email" placeholder="ইমেইল" value="<?= $email ?? null ?>" />
                </div>
                <div class="text-center">
                    <span style="font-size: 12px; color:red;"><?= $errorEmail ?? null ?></span>
                </div>
                <div class="form-border">
                    <input type="password" id="password" name="password" placeholder="পাসওয়ার্ড"
                        value="<?= $password ?? null ?>" />
                    <ion-icon name="eye-off-outline" id="show" onclick="toggle()"></ion-icon>
                    <ion-icon name="eye-outline" id="hide" onclick="toggle()"></ion-icon>
                </div>
                <div class="text-center">
                    <span style="font-size: 12px; color:red;"><?= $errorPass ?? null ?></span>
                </div>
                <div class="form-border">
                    <input type="password" id="Cpassword" name="Cpassword" placeholder="পাসওয়ার্ড নিশ্চিত করুন"
                        value="<?= $Cpassword ?? null ?>" />
                    <ion-icon name="eye-off-outline" id="Cshow" onclick="Ctoggle()"></ion-icon>
                    <ion-icon name="eye-outline" id="Chide" onclick="Ctoggle()"></ion-icon>
                </div>
                <div class="text-center mb-3">
                    <span style="font-size: 12px; color:red;"><?= $errorCpass ?? null ?></span>
                </div>
                <div class="forget" style="font-size: 14px">
                    <span>একাউন্ট আছে? </span>
                    <a href="signIn.php" style="font-weight: 700; margin-right: 10px">
                        সাইন ইন করুন</a>
                </div>
                <input class="submit hellowSub" type="submit" name="submit123" value="রেজিস্ট্রেশন" />
            </form>
        </div>
    </div>

    <!-- particles-js -->
    <script src="./js/app.js"></script>
    <script src="./js/particlesjs-config (1).js"></script>

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

    <!-- ionicons js -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- sweet alert js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- password show and hide js -->
    <script>
    var password = document.getElementById("password");
    var Cpassword = document.getElementById("Cpassword");
    var hide = document.getElementById("hide");
    var Chide = document.getElementById("Chide");
    var show = document.getElementById("show");
    var Cshow = document.getElementById("Cshow");

    function toggle() {
        if (password.type === "password") {
            password.type = "text";
            hide.style.display = "inline-block";
            show.style.display = "none";
        } else {
            password.type = "password";
            hide.style.display = "none";
            show.style.display = "inline-block";
        }
    }

    function Ctoggle() {
        if (Cpassword.type === "password") {
            Cpassword.type = "text";
            Chide.style.display = "inline-block";
            Cshow.style.display = "none";
        } else {
            Cpassword.type = "password";
            Chide.style.display = "none";
            Cshow.style.display = "inline-block";
        }
    }
    </script>
</body>
</html>