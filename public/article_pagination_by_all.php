<?php 

// Lists Articles By All
 
 	// 1. the current page number ($current_page)
	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

	// 2. records per page ($per_page)
	$per_page = 4;

	// 3. total record count ($total_count)
	$total_count = Article::count_all();
	
	//creates pagination object  
	$pagination = new Pagination($page, $per_page, $total_count);
	$paginationoffset = $pagination->offset();
	
	//returns object with paginated articles filterd by all
	$article = Article::find_all_pagination($per_page, $paginationoffset) ;
?>

<?php //--------------ARTICLE DISPLAY---------------------
//$article = Article::find_all();

	foreach($article as $article):
		echo "<hr class=\"style1\">";
		
		//List Categories by Article
		$category = Category::find_category_on_article($article->id);		
		foreach($category as $category):

		//Category links of the Article	
		echo"<div id=\"category\"><section class=\"color-1\">
  				<nav class=\"cl-effect-1\" id=\"cl-effect-1\">
    				<a href=\"article_pagination_by_category.php?category=$category->category_id\"># ".$category->category."</a> ";  
    		if ($session->is_logged_in()) {	echo"<a  class=\"category-remove\" href=\"category_categorylist_delete.php?id=$category->category_id\"><div class=\"vertical-center\"> <i class=\"fontawesome-remove\" ></i></div></a>"; }   				    
		echo"	</nav>
			</div>";
				
		endforeach;	 // ENDOF List Categories by Article
		
		//Menu to add and eddit all categorys
		echo "<div class=\"article-menu-offset\">";
		if ($session->is_logged_in()) {echo "<div class=\"text-right\"><a class=\"text-right\" href='category_list_articlecategory_manage.php?id=$article->id'> <i class=\"fontawesome-edit\" ></i> Category Edit</a></div>";}
		echo"</div>";
		
		//Category List Dropdown
		//and Add Category Button
		if ($session->is_logged_in()) {
		include('interface_category_categorylist_1.php');
		}
		
		//Separator if logged in
		if ($session->is_logged_in()) { echo"<hr class=\"style2\">"; };
		
		//Menu for the Article
		echo "<div class=\"article-menu-offset\">";
		if ($session->is_logged_in()) { echo " <div class=\"text-right\"><a href='article_delete.php?id=$article->id'><i class=\"fontawesome-trash\" ></i> Delete</a></div>";} 
		if ($session->is_logged_in()) {echo "<div class=\"text-right\"><a class=\"text-right\" href='article_update.php?id=$article->id'> <i class=\"fontawesome-edit\" ></i> Edit</a></div>";}
		echo"</div>";
		
		//Headline
		//Topic WordWrap
		 $topic = $article->topic;
		 $newtext = wordwrap($topic, 4, "\n", 1);
		 echo "<a href=\"article_solo.php?$article->id\"><h1>".strip_tags($newtext)."</h1></a>";
		
		//Text
		echo strip_tags($article->text);
		echo "<br>";
		echo "<h2>".datetime_to_text($article->created)."</h2>";
	  	
		
	endforeach;
?>

<?php include('interface_article_pagination_2.php') ?>


<?php
	//Article Form Post
    if ($session->is_logged_in()) {include('interface_article_form_post.php');}
?>  

