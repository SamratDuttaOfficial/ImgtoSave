<?php include('header.php');?>    
    <body>
  <?php include('navbar.php'); ?>
      <div id="masthead">  
        <div class="container">
          <?php include('heading.php'); ?>
          <hr>
        </div><!-- /cont -->
        <div class="container">
          <div class="row">
          <div class="col-md-12">
            <div class="top-spacer"> </div>
          </div>
          </div> 
        </div><!-- /cont -->
      </div>
<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
          <!--/stories-->
          <div class="row">    
            <br>
        <?php
        
  $query = $conn->query("select * from post_pic where member_id = '$session_id' AND type='listed' order by post_id DESC limit 50");
  while($row = $query->fetch()){
  $username = $row['poster_username'];
  $poster_name = $row['poster_name'];
  $date_posted = $row['date_posted'];
  $id = $row['post_id'];
  $member_id_post = $row['member_id'];
  $photo = str_replace(" ", '%20', $row['photo']);
  ?>
				<div class="col-sm-post">
             	<div class="alert-post"><?php echo $row['title']; ?></div>
              	<div class="alert-post-image"><?php echo '<center><img style="max-width:100%;max-height:200px" class="product_image" alt=" Product Image" src='.$photo.'></center>'; ?>
                
                <div class="overlay">
    			<div class="text"><b>Size: <?php echo $row['photo_size']; ?><?php echo " Bytes"; ?></b><br><?php echo $row['content']; ?></div>
  				</div>
              	</div>                    


             
             	<div class="alert">
                    <form method="get" action="all_comments.php">
                        <input type="hidden" name="post_id" value="<?php echo $id; ?>">
                        <button type="submit" class="btn btn-primary active"> View all </button>
                    </form>
                    <form method="get" action="confirm_delete.php">
                      <input type="hidden" name="post_id" value="<?php echo $id; ?>">
                      <button type="submit" name="submit" class="btn btn-danger"><i class="icon-remove"></i> Delete </button>
                    </form>
                </div>
           
              	<div>              
                <div>
                  <h4><span class="label label-info"> <?php echo $date_posted; ?></span></h4></div>                
              	</div>  
            	</div>
  <?php } ?>  

                          <br><br>
                          
<div class="col-md-10 col-sm-9"><button type="button" class="btn btn-info btn-block">End of recent Images.</button></div>
              
  
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