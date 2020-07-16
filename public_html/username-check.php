<?php
  
  $host="localhost";
  $user="epiz_22426402";
  $pass="KKqmvzL4BDXOc4";
  $dbname="epiz_22426402_database";
  
  $dbcon = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
  
  if($_POST) 
  {
      $name     = strip_tags($_POST['name']);
      
	  $stmt=$dbcon->prepare("SELECT username FROM members WHERE username=:name");
	  $stmt->execute(array(':name'=>$name));
	  $count=$stmt->rowCount();
	  	  
	  if($count>0)
	  {
		  echo "<span style='color:brown;'>Sorry username already taken !!! Try a different Username to SignUp</span>";
	  }
	  else
	  {
		  echo "<span style='color:green;'>available</span>";
	  }
  }
?>