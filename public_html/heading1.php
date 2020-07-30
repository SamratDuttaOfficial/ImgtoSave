    <div class="row">
      <div class="col-md-4">
		    <img class="pp" src="<?php echo $image; ?>" height="140" width="160">
		    <hr>
		    <a class="btn btn-success" href="change_pic.php">Change Profile Picture</a>
			<hr>
			<div class="pull-right"><a href="edit_profile.php" class="btn btn-info"><i class="icon-pencil"></i> Edit</a></div>
			 <h4>Personal Info</h4>       			
			 <?php
        $query = $conn->query("select * from members where member_id like (".$session_id.")");
        while($row = $query->fetch()){        
        echo "<h3><b>".$row["shopname"]."</h3></b>";
        echo $row["firstname"]." ".$row["lastname"]."<br>";
        echo "Gender"." : ".$row["gender"]."<br>";
        echo "Address"." : ".$row["address"]."<br>";
        echo "Email"." : ".$row["email"]."<br>";
        echo "Contact No."." : ".$row["contact_no"]."<br>";
        echo "Mobile No."." : ".$row["mobile"]."<br>";
        }
       ?>
		  </div>
      <div class="col-md-4">
			 <form method="post" action="post.php" enctype="multipart/form-data">
        <textarea id="thin" name="title" maxlength="250" placeholder="Title" required="required"></textarea>
        <br>
				<textarea id="thin" style="margin-top: 10px;" name="content" maxlength="1000" placeholder="Description"></textarea>
				<br>        
        <textarea id="thin" name="send_to" maxlength="250" placeholder="Send a copy To: "></textarea>
        <small style="font-family:courier,'new courier';" class="text-muted">You can send your pic to someone else. Write their usernames separated with commas.</small><br> 
        <small style="font-family:courier,'new courier';" class="text-muted">Caution: Don't use spaces.</small>      
				<input type="file" name="image" required="required" accept=".jpg, .jpeg, .png"/>
        <small style="font-family:courier,'new courier';" class="text-muted">Select JPG, JPEG or PNG file, lesser than 2MB.</small><br>
        <input type="hidden" name="type" value="listed" />
				<button type="submit" name="submit" class="btn btn-success"><i class="icon-share"></i> ADD </button>
			 </form>
       <small style="font-family:courier,'new courier';" class="text-muted">Caution: You can't edit image name and description and send to 's once you post it. By clicking 'Add' you are accepting all the <u><a href="tos.txt">Terms of services</a></u> and <u><a href="privacypolicy.htm"> Privacy policies</a></u> of <nobr>'ImgtoSave'. Only JPG and PNG images get uploaded to our server.</nobr></small><br> 
       <hr style= "color:#000">
       <form method="post" action="view_received.php" enctype="multipart/form-data">       
       <h4><u> YEAR-MONTH-DATE</h4></u>
       <select id="currency"  name="year">
                    <option></option>                    
                    <option>2018</option>
                    <option>2019</option>
        </select>
        <select id="currency"  name="month">
                    <option></option>                    
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
        </select>
        <select id="currency"  name="date">
                    <option></option>                    
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
        </select> 
        <button type="submit" name="submit" class="btn btn-primary active"> Show All </button>     
       </form>
      </div>
      <div class="col-md-4">
<!--notificts-->

      </div>
      <br><br>
    </div>
    <br>
    <div class="container">
		  <div class="row">
          <div class="col-md-12"> 
            <div class="panel">
              <div class="panel-body">
                <!--/stories-->
                <div class="row">    
                  <br>
						      <?php
                    $unmae_with_comma = $uname.",";
	                 $query = $conn->query("select * from post_pic where send_to LIKE '%$unmae_with_comma%' AND type='listed' order by post_id DESC");
	                 while($row = $query->fetch()){
	                 $posted_by = $row['poster_name']." #".$row['poster_username'];
                   $date_posted = $row['date_posted'];
	                 $id = $row['post_id'];
                   $member_id_post = $row['member_id'];
                   $photo = str_replace(" ", '%20', $row['photo']);
	                ?> 
                                  
                  <div class="col-sm-post">
                  <div class="alert-post"><?php echo $row['title']; ?></div>
                  <div class="alert-post-image"><?php echo '<center><img style="max-width:100%;max-height:200px" class="product_image" alt=" Product Image" src='.$photo.'></center>'; ?>
                
                  <div class="overlay">
                  <div class="text"><b>Posted by: <?php echo $posted_by; ?></b><br>Size: <?php echo $row['photo_size']; ?><?php echo " Bytes"; ?></b><br><?php echo $row['content']; ?></div>
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
              </div>
            </div>
          </div>
      </div>
    </div>
