<?php require_once("../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("user_login.php"); } ?>
<?php
	// must have an ID
  if(empty($_GET['id'])) {
  	$session->message("No comment ID was provided.");
    redirect_to('index.php');
  }

  $user = User::find_by_id($_GET['id']);
  if($user && $user->delete()) {
    $session->message("The comment was deleted.");
    redirect_to('user_register.php');
  } else {
    $session->message("The comment could not be deleted.");
    redirect_to('user_register.php');
  }
  
?>
<?php if(isset($database)) { $database->close_connection(); } ?>
