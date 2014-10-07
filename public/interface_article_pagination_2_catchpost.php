<?php
//Chatch Pagination Post
if(isset($_POST['current_page'])) {
    $current_page = $_POST['current_page']    ;
	
	if(isset($current_page)){
		safe_redirect("index.php?page={$current_page}");		
	};
	
};
?>