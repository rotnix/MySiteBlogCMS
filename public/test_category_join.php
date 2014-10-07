<?php require_once("../includes/initialize.php"); ?>





<?php   
/*echo "<h2>List all</h2>";
	   $category = Category::find_all();		
	   //print_r($category);
		foreach($category as $category):
			//print_r($category);
			
			echo "<a href='category.php?category=$category->id'>#".$category->category." </a>";	
			echo "<br>";
		endforeach;	 // ENDOF list categories on article
		
		//$category->createcategory(1);
		//$category->createarticle(15,3);
		//echo createcategory(1);			
		*/	?>
	<?php   
echo "<h2>List all</h2>";
	 $category = Category::find_category_on_article($article_id=1);	
	 
	  
	print_r($category);	
	echo "<br>";
		foreach($category as $category):
			//echo "<div id=\"category\"><a href='category.php?category=$category->id'>#".$category->category." </a></div>";	
			echo "string:".$category->id." ";
			echo "category: ".$category->category;
		
				
		endforeach;	 // ENDOF List Categories by Article
				
			?>



