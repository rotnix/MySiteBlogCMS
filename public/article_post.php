<?php require_once("../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("user_login.php"); } ?>

<?php
	
	if(isset($_POST['submit'])) {
		
	  
	  $topic = trim($_POST['topic']);
	  $text = trim($_POST['text']);
	  

	
	  $new_article = Article::make($topic, $text);
	  if($new_article && $new_article->save()) {
			// comment saved
			// No message needed; seeing the comment is proof enough.
			
			// Send email
		//	$new_comment->try_to_send_notification();
			
	    // Important!  You could just let the page render from here. 
	    // But then if the page is reloaded, the form will try 
			// to resubmit the comment. So redirect instead:
	    redirect_to("index.php");
	
		} else {
			// Failed
	    $message = "There was an error that prevented the comment from being saved.";
		safe_redirect_to("index.php");
		
		}
	} else {
		redirect_to("index.php");
	}
	
	?>