<?php 
include_once("./databaseInput.php");


// signup validation

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
    }else{
        $correctPass = $password;
    }


    // confirm password
    if(empty($Cpassword)){
        $errorCpass = "পাসওয়ার্ডটি পূনরায় লিখুন";
    }elseif(!($password === $Cpassword)){
        $errorCpass = "পাসওয়ার্ডটি একই হতে হবে!";
    }else{
        $correctCpass = $Cpassword;
    }



    if(!empty($correctName) && !empty($correctNum) && !empty($correctEmail) && !empty($correctPass) && !empty($correctCpass)){
        $insert_query = "INSERT INTO `sign_up`(`name`, `number`, `email`, `password`) VALUES ('$correctName','$correctNum','$correctEmail','$correctCpass')";
        $insert = $connect->query($insert_query);

    
        if($insert){
            
            // sweet alert status
            $_SESSION['status'] = "রেজিস্ট্রেশন সম্পন্ন হয়েছে!";
            $_SESSION['status_code'] = "success";


            $_SESSION['register'] = ["name"=>$correctName, "number"=>$correctNum, "email"=>$correctEmail, "password" => $correctCpass];

            $name = $number = $email = $password = $Cpassword = null;

        }else{
            // sweet alert status
            $_SESSION['status'] = "দুঃখিত! আপনার রেজিস্ট্রেশনটি সম্পন্ন হয়নি।";
            $_SESSION['status_code'] = "error";
        }

        
    }


}


// signin validation
if(isset($_POST['signIn123'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // email validation
    if(empty($email)){
        $errorEmail = "আপনার ইমেইলটি প্রদান করুন!";
    }else{
        $check_user_query_pass = "SELECT * FROM `sign_up` WHERE `email` = '$email'";
        $check_user = $connect->query($check_user_query_pass);

        if($check_user->num_rows !== 1){
            $errorEmail = "সঠিক ইমেইলটি প্রদান করুন!";
        }else{
            $correctEmail = $email;
        }

    }

    // password validation from database
    if(empty($password)){
        $errorPassword = "পাসওয়ার্ড খালি থাকা যাবে না!";
    }else{
        $check_user_query_email = "SELECT * FROM `sign_up` WHERE `password` = '$password'";
        $check_user = $connect->query($check_user_query_email);

        if($check_user->num_rows !== 1){
            $errorPassword = "পাসওয়ার্ডটি সঠিক নয়!";
        }else{
            $correctPass = $password;
        }
    }


    if(isset($correctEmail) && isset($correctPass)){
        $userInfo = $check_user->fetch_object();
        $name = $userInfo->name;
        $number = $userInfo->number;
        $email = $userInfo->email;
        $role = $userInfo->	role;
        $img = $userInfo->img;

        $_SESSION['register'] = ["name" => $name, "number" => $number, "email"=> $email, "role"=> $role, "img" => $img];
       
        $_SESSION['status'] = "অভিনন্দন! লগইন সম্পন্ন হয়েছে।";
        $_SESSION['status_code'] = "success";

        $email = $password = "";

   
    }
    
}


