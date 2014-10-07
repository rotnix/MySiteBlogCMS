<?php require_once("../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("user_login.php"); } ?>

<?php
	
	if(isset($_POST['category_id']) && isset($_POST['article_id'])) {
		
	  $category_id = trim($_POST['category_id']);
	  $article_id = trim($_POST['article_id']);
	  $page = trim($_POST['page']);
	  
		
	//$category->createarticle($article_id,$category_id);
	
	 $new_category = Category::make_category();
	  if($new_category && $new_category->createarticle($article_id, $category_id)) {
	  	safe_redirect("index.php?page={$page}");
		
	  }else{
	  	echo "ERROR: coudnt save list IDs";
		
	  }
	
	}else{
		echo "ERROR: no IDs where posted";
}
	?>
	
