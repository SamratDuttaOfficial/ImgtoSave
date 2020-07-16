<?php $search=$_POST["search"]; ?>
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
  $query = $conn->query("select * from post_pic where 
    member_id = '$session_id' AND type='listed' AND title LIKE '%$search%'
    OR send_to LIKE '%$uname%' AND type='listed' AND title LIKE '%$search%'
    OR member_id = '$session_id' AND type='listed' AND content LIKE '%$search%'
    OR send_to LIKE '%$uname%' AND type='listed' AND content LIKE '%$search%'
    OR send_to LIKE '%$uname%' AND type='listed' AND poster_username LIKE '%$search%'
    OR send_to LIKE '%$uname%' AND type='listed' AND poster_name LIKE '%$search%'
    order by post_id DESC");
  while($row = $query->fetch()){
  $date_posted = $row['date_posted'];
  $id = $row['post_id'];
  $member_id_post = $row['member_id'];
  ?>
            <div class="col-md-2 col-sm-3 text-center">
             <?php echo "Price: "; ?><br>
             <?php echo $row['price']; ?><?php echo $row['currency']; ?>
            </div>
            <div class="col-md-10 col-sm-9">
              <div class="alert">
              <?php echo $row['title']; ?>
              <div>
				<div class="pull-right">  
                    <form method="get" action="confirm_delete.php">
                      <input type="hidden" name="post_id" value="<?php echo $id; ?>">
                      <button type="submit" name="submit" class="btn btn-danger"><i class="icon-remove"></i> Delete Item </button>
                    </form>
                  </div>  
                  <div class="pull-right">  
                      <form method="get" action="all_comments.php">
                        <input type="hidden" name="post_id" value="<?php echo $id; ?>">
                        <button type="submit" class="btn btn-primary active"> View all </button>
                      </form>
                      </div>
                    </div>  </div>                  
              <div>              
                <div>
                  <h4><span class="label label-info"> <?php echo $date_posted; ?></span></h4></div>
                
              </div>
              


            </div>
  <?php } ?>  

                          <br><br>
                          <div class="col-md-2 col-sm-3 text-center">
             
            </div>
<div class="col-md-10 col-sm-9"><button type="button" class="btn btn-info btn-block">End of results.</button></div>
              
  
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