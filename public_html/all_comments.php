<?php $post_id=$_GET["post_id"]; ?>
<?php include('header.php'); ?>    
<?php include('session.php'); ?> 
    <body>
  <?php include('navbar.php'); ?>


        <div class="container">
          <div class="row">


          </div><hr><br>


<div class="container">
  <div class="row">
    <div class="col-md-12"> 
      <div class="panel">
        <div class="panel-body">
            <button onclick="goBack()" type="button" class="btn btn-primary active"> Go Back </button> 
            <script>
            function goBack() {
            window.history.back();
            }
            </script>
          <!--/stories-->
          <div class="row">    
            <br>
        <?php
        
  $query = $conn->query("select * from post_pic where post_id='$post_id' AND send_to LIKE '%$uname%' OR post_id='$post_id' AND member_id='$session_id' order by post_id DESC limit 50");
  while($row = $query->fetch()){
  $post_posted_by = $row['poster_name'];
  $poster_username = $row['poster_username'];
  $date_posted = $row['date_posted'];
  $id = $row['post_id'];
  $member_id_post = $row['member_id'];
  $photo = $row['photo'];
  ?>
            <div class="col-md-2 col-sm-3 text-center">
             <?php echo "Size: "; ?><br>
             <?php echo $row['photo_size']; ?><?php echo " Bytes"; ?>
            </div>
            <div class="col-md-10 col-sm-9">
              <div class="alert"><?php echo $row['title']; ?></div>
              <div class="alert"><?php echo $row['content']; ?></div>
              <div class="alert">
              <form method="post" action="viewimage.php">
            <input type="hidden" name="posted_image" value="<?php echo $photo; ?>"><br>            
            <input type="image" style="max-width:200px;max-height:200px" alt="Product Image" src="<?php echo $photo ?>" /> 
            </form>            
            <small style="font-family:courier,'new courier';" class="text-muted">
            <button onclick="myFunctionCopy()" class="btn btn-link">Copy Image Location</button>
            Just share the link to share the image.
            <input type="text" value="http://imgtosave.epizy.com/<?php echo $photo; ?>" id="myInput">
            </small>
            </div>      
              <div class="alert"><?php
              $query2 = $conn->query("select * from comments where post_id=$id order by post_id DESC");
  while($row2 = $query2->fetch()){
    $id = $row2['post_id'];
    $date_posted = $row2['posted_at'];
    $member_id = $row2['member_id'];

$query3 = $conn->query("select * from members where member_id = $member_id");
  while($row3 = $query3->fetch()){
  $comment_posted_by = $row3['firstname']." ".$row3['lastname'];
  $posted_image = $row3['image'];
  $photo = $row3['image'];
  $member_id = $row3['member_id'];

                            
                 echo "<div>"."<img style='width:50px;height:50px' class='img-circle' src=$photo>".
                  "<h4>".$row2['comment']."</div>"."<h4><span class='label label-info'>".$date_posted."</span></h4>".
                  "<form method='get' action='viewprofile.php'>
            <input type='hidden' name='member_id' value='".$member_id."'>
            <small style='font-family:courier,'new courier';' class='text-muted'>Posted By: ".$comment_posted_by."  #".$row3['username']."</small>
      </form>";
                   }} ?>
                     
                   
                   </div>
              
              
              <form method="post" action="postcomment.php">
            <input type="hidden" name="post_id" value="<?php echo $id; ?>">
            <textarea id= "styled" maxlength="1000" name="comment" placeholder="Write a Comment."></textarea>
            <br>
            <button type="submit" name="submit" class="btn btn-success"><i class="icon-share"></i> Comment </button>
             <small style="font-family:courier,'new courier';" class="text-muted">Caution: You can't delete your comment.</small>
      </form>

              <div>
                <div>
                  <h4><span class="label label-info"> <?php echo $date_posted; ?></span></h4><h4>
                  <form method="get" action="viewprofile.php">
            <input type="hidden" name="member_id" value="<?php echo $member_id_post; ?>">
            <small style="font-family:courier,'new courier';" class="text-muted">Posted By: <?php echo $post_posted_by; ?>  #<?php echo $poster_username; ?></small>
      </form>

                  
                  </h4></div>
                
              </div>
              


            </div>
  <?php } ?>  

                          <br><br>
                          <div class="col-md-2 col-sm-3 text-center">
             
            </div>

              
  
          </div>
          <hr>
        </div>
      </div>
       <script type="text/javascript">
         function myFunctionCopy() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();

  /* Copy the text inside the text field */
  document.execCommand("Copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
       </script>                                                                               
                                                  
                                                      
    </div><!--/col-12-->
  </div>
</div>
                                                
                                                                                
<?php include('footer.php'); ?>
        
    </body>
</html>