<?php
require_once "config/db_con.php";
?>

<?php
if(isset($_POST['submit']))
  $cnic = $_POST['cnic'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $retype_pass = $_POST ['retype_pass'];
$sql = "INSERT INTO `ifmp_signup`(`cnic`, `mobile`, `email`, `password`, `retype_pass`) VALUES ('$cnic','$mobile','$email','$password','$retype_pass')";
if (mysqli_query($con, $sql)) {
  echo "<script>alert('Registration Successfully plz Login');document.location='http://localhost/dash6b/signin.php'</script>";
 } else {
  echo "Error: " . $sql . "
" . mysqli_error($con);
 }
 mysqli_close($con);
?>
