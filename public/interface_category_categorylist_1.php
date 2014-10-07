<?php if (!$session->is_logged_in()) { safe_redirect("index.php"); } ?>
		
<link rel="stylesheet" type="text/css" href="stylesheets/style_interface_category_categorylist_1.css" />

<form id="categorylist" action="category_categorylist_post.php" method="post" >

<div class="category_container">
  <div class="dropdown dropdown-dark">
    <select name="category_id" class="dropdown-select">
      <option value="">Add Category…</option>";
           

<?php        
	   $category = Category::find_all();		
		foreach($category as $category):
			echo "<option name=\"{$category->id}\" data-count=\"$category->id\" value=\"{$category->id}\">".$category->category."</option>";	
		endforeach;	 // ENDOF list categories on article
		
		//sends hidden post article_id		
		echo "<input type=\"hidden\" value=\"{$article->id}\" name=\"article_id\" />";
		echo "<input type=\"hidden\" value=\"{$page}\" name=\"page\" />";
		
	?>	
		

    </select>
   </div>  
      <input type="submit" value="+" />
</div>
</form>
 
