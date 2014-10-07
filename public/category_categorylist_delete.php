<?php require_once("../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("user_login.php"); } ?>
<?php
	// must have an ID
  if(empty($_GET['id'])) {
  	$session->message("No comment ID was provided.");
    redirect_to('index.php');
  }

  $category = Category::find_category_by_id($_GET['id']);
  if($category && $category-> delete_list_ariclecategory()) {
    $session->message("The comment was deleted.");
    redirect_to('index.php');
  } else {
    $session->message("The comment could not be deleted.");
    redirect_to('index.php');
  }
  
?>
<?php if(isset($database)) { $database->close_connection(); } ?>
