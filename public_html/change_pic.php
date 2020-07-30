<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>
			<hr>
      <center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
     <hr>
        
<div class="col-md-5">
      <?php
  $query = $conn->query("select * from members where member_id = '$session_id'");
  $row = $query->fetch();
  $id = $row['member_id'];
  ?>
  <br><small style="font-family:courier,'new courier';" class="text-muted">Select JPG, JPEG or PNG file, lesser than 2MB.</small><br>
  <hr>
<form method="post" action="save_dp.php" enctype="multipart/form-data">
  <input type="hidden" name="member_id" value="<?php echo $id; ?>">
  <input type="file" name="image" required="required" accept=".jpg, .jpeg, .png"/>  
            <button type="submit" name="submit" class="btn btn-success">Change Profile Picture </button>
      </form>
      </div>
	
          </div>
          <hr>
        </div>
      </div>                                     
                                                      
   	</div><!--/col-12-->
  </div>
</div>
                                                
                                                                                
<?php include('footer.php'); ?>
        
    </body>
</html>