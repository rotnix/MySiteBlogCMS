<?php require_once("../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("user_login.php"); } ?>

<link rel="stylesheet" type="text/css" href="stylesheets/style_main.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_table.css" />

<link rel="stylesheet" type="text/css" href="stylesheets/style_button_back.css" />


<?php
  // Find all the photos
  $photos = Photograph::find_all();
?>

<div class="form-div">
	
<a href="index.php" class="backbutton"><i class="fontawesome-reply"></i> Back</a>
<a href="test_photo.php" class="buttonrighttop"><i class="fontawesome-picture"></i> Gallery</a>


<h1 class="text-center">Photographs</h1>

<?php echo output_message($message); ?>
<table>
  <tr>
    <th>Image</th>
    <th>Filename</th>
    <th>Caption</th>
    <th>Size</th>
    <th>Type</th>
	<th>Comments</th>
	<th>Edit</th>
	<th>Delete</th>
  </tr>
<?php foreach($photos as $photo): ?>
  <tr>
    <td>
    	<a href="photo_edit.php?id=<?php echo $photo->id; ?>">
    		<img src="<?php echo $photo->image_path(); ?>" width="100" />
    	</a>
    </td>
    <td><?php echo $photo->filename; ?></td>
    <td><?php echo $photo->caption; ?></td>
    <td><?php echo $photo->size_as_text(); ?></td>
    <td><?php echo $photo->type; ?></td>
		<td class="text-center">
			<a class="icon " href="photo_comments.php?id=<?php echo $photo->id; ?>">
				<?php echo count($photo->comments()); ?>
			</a>
		</td>
		<td class="text-center"><a href="photo_edit.php?id=<?php echo $photo->id; ?>"><i class="fontawesome-edit icon" ></i></a></td>
		<td class="text-center"><a href="photo_delete_photo.php?id=<?php echo $photo->id; ?>"><i class="fontawesome-remove icon" ></i></a></td>
		
  </tr>
<?php endforeach; ?>
</table>

<br />

<div class="text-center">
	<?php include('photo_upload.php') ?>	
</div>
</div>

