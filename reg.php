<!DOCTYPE html>
<html>
<body>

<?php
$FName = $_POST["first_name"];
$LName = $_POST["last_name"];
$Email = $_POST["email"];
$Gender = $_POST["gender"];
$DOB = $_POST["date_of_birth"];
$userName = $_POST["username"];
$pw = $_POST["pass1"];
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
  
phpAlert("Please gimme some shit!");
?>

</body>
</html>
