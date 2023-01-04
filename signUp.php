<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>রেজিস্ট্রেশন করুন | রক্ত দান</title>
    <link rel="icon" href="./images/health medical center Logo (3).png" />
    <link rel="stylesheet" href="./css/form.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />

    <!-- fontawesome cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
  </head>
  <body>
    <div id="particles-js">
      <div class="maivDiv">
        <!-- signin text -->
        <div class="sign_up">
          <!-- if you need logo in the sign in page -->
          <img
            src="./images/health medical center Logo (3).png"
            alt=""
            width="40"
          />
          <h4 class="m-0">রেজিস্ট্রেশন করুন</h4>
        </div>

        <!-- form pannel -->
        <div class="middelDiv">
          <div class="form-border">
            <input type="text" name="text" placeholder="নাম" />
          </div>
          <div class="form-border">
            <input type="number" name="number" placeholder="নম্বর" />
          </div>
          <div class="form-border">
            <input type="email" name="email" placeholder="ইমেইল" />
          </div>
          <div class="form-border">
            <input
              type="password"
              id="password"
              name="password"
              placeholder="পাসওয়ার্ড"
            />
            <ion-icon
              name="eye-off-outline"
              id="show"
              onclick="toggle()"
            ></ion-icon>
            <ion-icon
              name="eye-outline"
              id="hide"
              onclick="toggle()"
            ></ion-icon>
          </div>
          <div class="form-border">
            <input
              type="password"
              id="Cpassword"
              name="Cpassword"
              placeholder="পাসওয়ার্ড নিশ্চিত করুন"
            />
            <ion-icon
              name="eye-off-outline"
              id="Cshow"
              onclick="Ctoggle()"
            ></ion-icon>
            <ion-icon
              name="eye-outline"
              id="Chide"
              onclick="Ctoggle()"
            ></ion-icon>
          </div>
          <div class="forget" style="font-size: 14px">
            <span>একাউন্ট আছে? </span>
            <a
              href="./signIn.html"
              style="font-weight: 700; margin-right: 10px"
            >
              সাইন ইন করুন</a
            >
          </div>
          <input
            class="submit hellowSub"
            type="submit"
            name="submit"
            value="রেজিস্ট্রেশন"
          />
        </div>
      </div>
    </div>

    <!-- particles-js -->
    <script src="./js/app.js"></script>
    <script src="./js/particlesjs-config (1).js"></script>

    <!-- boostrap script link -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
      integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
      crossorigin="anonymous"
    ></script>

    <!-- ionicons js -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

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
