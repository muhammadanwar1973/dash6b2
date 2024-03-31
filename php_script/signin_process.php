<?php
require_once "config/db_con.php";
?>
<?php
if(ISSET($_POST['submit'])){
    $cnic = $_POST['cnic'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `ifmp_signup` WHERE `cnic`= ? AND `password`= ? ;";
    $query = $con->prepare($sql);
    $query->execute(array($cnic,$password));
    $row = $query->rowCount();
    $fetch = $query->fetch();
    if($row > 0) {
        echo"Login successfully";
    } else{
        echo"Invalid username or password";
    }
}
?>
