<?php
echo $err;
?>
<form method="post" action="<?php echo site_url().'/uploadc/upload_test' ?>" enctype="multipart/form-data">
	<input type="file" name="image"><br><br>
	<input type="submit" name="submit" value="Submit">
	
</form>