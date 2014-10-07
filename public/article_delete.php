<?php require_once("../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("user_login.php"); } ?>
<?php
	// must have an ID
  if(empty($_GET['id'])) {
  	$session->message("No comment ID was provided.");
    redirect_to('index.php');
  }

  $article = Article::find_by_id($_GET['id']);
  if($article && $article->delete()) {
    $session->message("The comment was deleted.");
    redirect_to('index.php');
  } else {
    $session->message("The comment could not be deleted.");
    redirect_to('index.php');
  }
  
?>
<?php if(isset($database)) { $database->close_connection(); } ?>
