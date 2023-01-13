<?php 
include_once("./databaseInput.php");
!isset($_GET['val']) && header("location: ./");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OTP Verification Form</title>
    <link rel="stylesheet" href="css/OTP.css"/>
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      <header>
        <i class="bx bxs-check-shield"></i>
      </header>
      <h4 style="font-weight: 600;">ইমেইলে পাঠানো ৬ ডিজিটের নম্বরটি লিখুন</h4>
      <form action="#">
        <div class="input-field">
          <input type="number" name="otpNum" id="OTP" />
          <input type="number" name="otpNum" id="OTP" disabled />
          <input type="number" name="otpNum" id="OTP" disabled />
          <input type="number" name="otpNum" id="OTP"disabled />
        </div>
        <button id="submitOTP">Verify OTP</button>
      </form>
    </div>

    <!-- otp -->
    <script src="./js/OTP.js" defer></script>
  </body>
</html>
