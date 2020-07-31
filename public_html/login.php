<?php ob_start(); ?>
<?php
include('dbcon.php');
$username = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['password']);
$password = hash('sha256', $pass);
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
