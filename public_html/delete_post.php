<?php ob_start(); ?>
<?php
include('dbcon.php');
$post_id = $_GET['post_id'];
$query = $conn->query("select * from post_pic where post_id = '$post_id'");
	                 while($row = $query->fetch()){
	                 $photo = $row['photo'];
unlink($photo);
}
$conn->query("delete from post_pic where post_id='$post_id'");
header('location:home.php');
?>