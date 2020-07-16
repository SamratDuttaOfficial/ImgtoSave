<?php ob_start(); ?>
<?php
include('dbcon.php');
$member_id = $_POST['member_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$email = $_POST['email'];
$contact_no = $_POST['contact_no'];

 

$conn->query("update members set firstname = '$firstname',lastname='$lastname',gender='$gender',address='$address',email='$email',contact_no='$contact_no' where member_id = '$member_id'
");


?>
<script>
	window.location = 'edit_profile.php<?php echo '?id='.$member_id; ?>';
</script>