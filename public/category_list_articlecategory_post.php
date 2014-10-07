<?php require_once("../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("user_login.php"); } ?>

<?php
	
	if(isset($_POST['submit'])) {
		
	  $category_post = trim($_POST['category']);
	  


	
	  $new_category = Category::make_category($category_post);
	  print_r($new_category);
	  if($new_category && $new_category->save()) {
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
		//safe_redirect_to("index.php");
		
		}
	} else {
		//redirect_to("index.php");
	}
	
	
	
	
	echo "<form class=\"form\" id=\"form1\" action=\"category_list_articlecategory_post.php\" method=\"post\">
  
	<p class=\"name\">
		<input name=\"id\" value=\"\" type=\"hidden\" class=\"validate[required,custom[onlyLetter],length[0,100]] feedback-input\" placeholder=\"ID\" id=\"name\" />
	</p>
  	
  	<p class=\"name\">
		<input name=\"category\" value=\"\" type=\"text\" class=\"validate[required,custom[onlyLetter],length[0,100]] feedback-input\" placeholder=\"Category\" id=\"name\" />
	</p>

      
    <div class=\"submit\">
		<input type=\"submit\" name=\"submit\" value=\"SEND\" id=\"button-blue\"/>
        <div class=\"ease\"></div> 
    </div>

</form>";
	
	
	
	?>