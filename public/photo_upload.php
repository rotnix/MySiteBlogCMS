<!--
<link rel="stylesheet" type="text/css" href="stylesheets/style_main.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_button_back.css" />
-->

<link rel="stylesheet" type="text/css" href="stylesheets/style_photo_upload.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_input.css" />


<?php
require_once('../includes/initialize.php');
if (!$session->is_logged_in()) { redirect_to("user_login.php"); }
?>
<?php
	$max_file_size = 1048576;   // expressed in bytes
	                            //     10240 =  10 KB
	                            //    102400 = 100 KB
	                            //   1048576 =   1 MB
	                            //  10485760 =  10 MB

	if(isset($_POST['submit'])) {
		$photo = new Photograph();
		$photo->caption = $_POST['caption'];
		$photo->attach_file($_FILES['file_upload']);
		if($photo->save()) {
			// Success
      $session->message("Photograph uploaded successfully.");
			redirect_to('photo_list.php');
		} else {
			// Failure
      $message = join("<br />", $photo->errors);
		}
	}
	
?>
<!--
<div class="form-div text-center">
	
<a href="index.php" class="backbutton"><i class="fontawesome-reply"></i> Back</a>
-->	
 <div id="uploadform" >
	<h1>Photo Upload</h1>

	<?php echo output_message($message); ?>
  <form action="photo_upload.php" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>" />
    <!--<p><input type="file" name="file_upload" /></p>-->
    
    <div class="middle-text">
  <span id="filename">Select your file...</span>
    <label for="file-upload">Browse<input name="file_upload" type="file" id="file-upload"></label>

    </div>
    
    <p>
    <!--	Caption: <input type="text" name="caption" value="" /> -->
    <input type="text" holder=" Caption: "  name="caption" value="" />
    </p>
   <!-- <input type="submit" name="submit" value="Upload" />-->
    
      <div class="submit">
		        <input type="submit" name="submit" value="Upload" id="button-blue"/>
		        <div class="ease"></div> 
	</div>
    
  </form>
</div>  
<!--  
</div>
-->
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script type="text/JavaScript" src="javascripts/photoupload.js"></script>
