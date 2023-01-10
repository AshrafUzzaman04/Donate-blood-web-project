<!-- when use ajax sweet alert -->

<?php
$connect = mysqli_connect("localhost", "root", "" , "blood_donate");

if(isset($_POST['username'])){

    exit($_POST['username']);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <form method="POST">
            <input type="text" id="text" name="text" placeholder="Name">
            <input type="submit" id="submit" value="Submit">
        </form>
    </section>
    
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<!-- ajax sweet alert -->
<script>
    $(document).ready(function () {
    $('#submit').click(function (e) {
      e.preventDefault();
       $('#submit').val('Loading..'); //loading
        setTimeout(function(){
            $('#submit').val('Submit');
        }, 1000);

var username = $('[name="text"]').val();

$.ajax({ type: "POST", url: "notunFile.php",
 data: {"username":username},
 success: function (data) {
swal({ text: data, icon: "error", button: "Close", });
}
 });
   });
     });
</script>


</body>
</html>