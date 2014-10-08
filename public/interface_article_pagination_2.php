<!--TODO category Get check-in function-->
<link rel="stylesheet" type="text/css" href="stylesheets/style_interface_article_pagination_2.css" />

<!--------------PAGINATION DISPLAY---------------------->
<div id="pagination" class="text-center">
	
<?php
//Gets last URI path without requests
$url = $_SERVER['REQUEST_URI'];
$token = explode('/', $url);
$token_clean = $token[sizeof($token)-1];
$urltoken = substr(  $token_clean, 0, strrpos(  $token_clean, "?"));

?>


<?php if($pagination->total_pages() > 1) {
	
	//Pagination Previous Button
	if($pagination->has_previous_page()) {
	  //first button		
	  echo "<a class='prev disabled' href=\"{$urltoken}?page=";
      echo "1";
	  	if($category_id){echo "&category=".$category_id;}
      echo "\"> <i id=\"pg-pre\" class=\"fontawesome-double-angle-left\"></i> </a> "; 
		
      //prev button	 
      echo "<a class='prev disabled' href=\"{$urltoken}?page=";
      echo $pagination->previous_page();
     	if($category_id){echo "&category=".$category_id;}
	  echo "\"> <i id=\"pg-pre\" class=\"fontawesome-angle-left\"></i> </a> "; 
    }else{
    	
		//first button disabled
		echo " <span class='prev disabled'><i id=\"pg-pre\" class=\"fontawesome-double-angle-left\"></i></span>";
		
    	//prev button disabled
    	echo " <span class='prev disabled'><i id=\"pg-pre\" class=\"fontawesome-angle-left\"></i></span>";
	
    };
	
	//Pagination Current Page 
	echo" <div id=\"pg\">
		<form  action=\"{$urltoken}\" method=\"post\" style=\" display:inline-block\">
			<input class=\"pg-total\" name=\"current_page\" type=\"text\" id=\"pg-num-input\" value=\"{$page}\" autocomplete=\"off\">
			<span class=\"pg-total\" >of</span> <span class=\"pg-total\">";
				echo $pagination->total_pages();
	echo"	</span>
		</form>
			</div>";
       
    //Pagination Next Button   
	if($pagination->has_next_page()) {
		
		 	//next button
			echo " <a class='next disabled' href=\"{$urltoken}?page=";
			echo $pagination->next_page();
				if($category_id){echo "&category=".$category_id;}
			echo "\"> <i id=\"pg-next\" class=\"fontawesome-angle-right\"></i></a> "; 
    		
			//last button
			echo " <a class='next disabled' href=\"{$urltoken}?page=";
			echo $pagination->total_pages();
				if($category_id){echo "&category=".$category_id;}
			echo "\"> <i id=\"pg-next\" class=\"fontawesome-double-angle-right\"></i></a> "; 
    		
	}else{
		//next button disabled
    	echo " <span class='next disabled'><i id=\"pg-next\" class=\"disabled fontawesome-angle-right\"></i></span>";
		
		//last button disabled
		echo " <span class='next disabled'><i id=\"pg-next\" class=\"disabled fontawesome-double-angle-right\"></i></span>";
		
    };
	   
	//Check if page is valid
	if(($page <= $pagination->total_pages())){
		//do nothing
	}else{
	safe_redirect($urltoken);
	output_message('Not a vallid page');
	};	

};
?>

</div>	
<!--------------PAGINATION DISPLAY---------------------->
