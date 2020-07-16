<?php
include('dbcon.php');
include('session.php');
include('header.php');

		$post_id = $_GET['post_id'];

?>
<div class="col-md-10 col-sm-9">
<div><form method="GET" action="delete_post.php">
            <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
            Do you really want to delete this image? Deleting an image cannot be undone.           
            <button type="submit" name="submit" class="btn btn-danger"><i class="icon-remove"></i> Delete Image </button>
      </form></div>
</div>      

