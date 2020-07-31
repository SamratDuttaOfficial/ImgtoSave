<?php ob_start(); ?>
<?php include('index_header.php'); ?>
<body>
<?php
include('dbcon.php');
$username = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$pass = htmlspecialchars($_POST['password']);
$firstname = htmlspecialchars($_POST['firstname']);
$lastname = htmlspecialchars($_POST['lastname']);
$gender = htmlspecialchars($_POST['gender']);
$member_category = htmlspecialchars($_POST['member_category']);
$password = hash('sha256', $pass);

if(!empty($_POST["name"])) {
  $result = $conn->query("SELECT count(*) FROM members WHERE username='" . $_POST["name"] . "'");
  $row = $result->fetch();
  $user_count = $row[0];
  if($user_count>0) {
      echo "Username Not Available. <button onclick='goBack()'' type='button' class='btn btn-primary active'> Go Back </button> 
            <script>
            function goBack() {
            window.history.back();
            }
            </script>";
  }else{

$conn->query("insert into members (username,password,firstname,lastname,gender,image,email) values ('$username','$password','$firstname','$lastname','$gender','images/No_Photo_Available.jpg','$email')");	


?>
<script>
	alert('Sign UP Success Please Login Your Account');
	window.location = 'index.php';
</script>
<?php }
}?>
</body>
</html>
