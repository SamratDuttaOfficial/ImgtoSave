<?php ob_start(); ?>
<?php
include('dbcon.php');
$username = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['password']);
$pass1 = hash('sha384', $pass);
$pass2 = hash('sha256', $pass1);
$pass3 = hash('md5', $pass2);
$pass4 = hash('snefru', $pass3);
$pass5 = hash('crc32', $pass4);
$password = hash('sha512', $pass5);
$query = $conn->query("select * from members where username = '$username' and password = '$password'");
$count = $query->rowcount();
$row = $query->fetch();
if ($count > 0){
session_start();
$_SESSION['id'] = $row['member_id'];
 header('location:home.php'); 
}else{
 header('location:index.php'); 
}
?>