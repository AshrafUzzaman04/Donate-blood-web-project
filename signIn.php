<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in | Life Blood</title>
    <link rel="icon" href="./images/health medical center Logo (3).png" />
    <link rel="stylesheet" href="./css/form.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet" />
</head>
<body>
    <div id="particles-js">
        <div class="maivDiv">
            <!-- signin text -->
            <div class="sing_in flex">
                <!-- if you need logo in the sign in page -->
                <img src="./images/health medical center Logo (3).png" alt="" width="40" />
                <h4 class="m-0">সাইন ইন করুন</h4>
            </div>

            <!-- form pannel -->
            <div class="middelDiv">
                <div class="form-border">
                    <input type="text" name="text" placeholder="ইমেইল" />
                </div>
                <div class="form-border">
                    <input type="password" id="password" name="password" placeholder="পাসওয়ার্ড" />
                    <ion-icon name="eye-off-outline" id="show" onclick="toggle()"></ion-icon>
                    <ion-icon name="eye-outline" id="hide" onclick="toggle()">
                    </ion-icon>
                </div>
                <div class="forget">
                    <a href="#">পাসওয়ার্ড </a>
                    <span> ভুলে গেছেন?</span>
                </div>
                <input class="submit" type="submit" name="submit" value="সাইন ইন" />
            </div>

            <!-- form footer -->
            <div class="footer">
                <div class="question_span">
                    <span>একাউন্ট নেই?</span>
                </div>
                <div class="sing_updiv">
                    <a href="signUp.php">রেজিস্ট্রেশন করুন</a>
                </div>
            </div>
        </div>
    </div>

    <!-- particles-js link-->
    <script type="text/javascript" src="./js/app.js"></script>
    <script type="text/javascript" src="./js/particlesjs-config (1).js"></script>
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

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"></script>

    <!-- ionicons js -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- password show and hide js -->
    <script>
    var password = document.getElementById("password");
    var hide = document.getElementById("hide");
    var show = document.getElementById("show");

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
    </script>
</body>
</html>