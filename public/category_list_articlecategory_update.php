<?php require_once("../includes/initialize.php"); ?>
<link rel="stylesheet" type="text/css" href="stylesheets/style_main.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_input.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_button_delete.css" />

<?php if (!$session->is_logged_in()) { redirect_to("user_login.php"); } ?>
<?php
if(isset($_POST['id'])) {	
			$category = new Category();
			$category->id = $_POST['id'];
		   	$category->category = $_POST['category'];
		    
	
			
	 if(!empty($category->id) && !empty($category->category)) {
	

	$category->save();	
	$message = "Update was Saved.";	 
	redirect_to("category_list_articlecategory_manage.php");	
	 }else{
		    $message = "There was an error that prevented the comment from being saved.";
			redirect_to("category_list_articlecategory_manage.php");	
	 }
}else{
	//redirect_to("index.php");	
}
?>


<?php
	// must have an ID
  if(empty($_GET['id'])) {
  	$session->message("No comment ID was provided.");
    //redirect_to('index.php');
  }else{
//finds article by id to populate form
 $category = Category::find_category_by_id($_GET['id']);
  }
?>
 



<div id="form-div">
  	

  	<h1>Update Category Form</h1>
  	
    <form class="form" id="form1" action="category_list_articlecategory_update.php" method="post">
    	
    <p class="name">
        <input name="id" value="<?php echo $category->id; ?>" type="hidden" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>	
  
  		<p class="name">
        <input name="category" value="<?php echo $category->category; ?>" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Category" id="name" />
      </p>
      
        
      <div class="submit">
        <input type="submit" name="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div> 
      </div>
    </form>

</div>


<script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script type="text/JavaScript" src="javascripts/buttondelete.js"></script> 



<?php if(isset($database)) { $database->close_connection(); } ?>