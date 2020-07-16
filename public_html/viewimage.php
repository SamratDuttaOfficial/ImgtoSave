<?php include('header.php');?>
<?php $posted_image=$_POST["posted_image"]; 
?>
    <body>
        <br>
		<div class="container">
  			<div class="row">
    			<div class="col-md-12"> 
      				<div class="panel">
        				<div class="panel-body">
            				<button onclick="goBack()" type="button" class="btn btn-primary active"> Go Back </button><br>
            				<script>
            					function goBack() {
            					window.history.back();
           	 					}
            				</script>
               				<div class="alert">
              					<?php echo '<img style="width:100%;height:100%" alt="Product Image" src='.$posted_image.' />'; ?>
                          		<br>
                          		<br>
                          	</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                                                               
		<?php include('footer.php'); ?>
        
    </body>
</html>