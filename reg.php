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
echo "<script language="javascript">";
echo "alert(message successfully sent)";  
echo "</script>";
exit;
?>

</body>
</html>