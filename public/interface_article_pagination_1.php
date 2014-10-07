<link rel="stylesheet" type="text/css" href="stylesheets/style_interface_article_pagination_1.css" />

<!--------------PAGINATION DISPLAY---------------------->

<?php
echo "<div class='pagination'>";

	if($pagination->total_pages() > 1) {
		
		if($pagination->has_previous_page()) { 
      echo "<a class='prev disabled' href=\"index.php?page=";
      echo $pagination->previous_page();
      echo "\">← </a> "; 
    }else{
    	echo " <span class='prev disabled'>← </span>";
		
    };

		for($i=1; $i <= $pagination->total_pages(); $i++) {
				
			if ($i > 5){
					echo  "<span class='gap'>…</span>";
					$i = $pagination->total_pages();
					}else{
				
			if($i == $page) {
				echo " <span class=\"selected\">{$i}</span> ";
			} else {
				
				echo " <a href=\"index.php?page={$i}\">{$i}</a> "; 
			}
					};
		}

		if($pagination->has_next_page()) { 
			echo " <a class='next disabled' href=\"index.php?page=";
			echo $pagination->next_page();
			echo "\"> →</a> "; 
    }else{
    	echo " <span class='next disabled'> →</span>";
		
    };
		
	}

echo "</div>";
?>
  
<!-----------ENDOF---PAGINATION DISPLAY---------------------->