<?php require_once("../includes/initialize.php"); ?>
<link rel="stylesheet" type="text/css" href="stylesheets/style_main.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_input.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_button_delete.css" />

<?php if (!$session->is_logged_in()) { redirect_to("user_login.php"); } ?>
<?php
if(isset($_POST['submit'])) {	
	$user = new User();
			$user->id = trim($_POST['id']);
		   	$user->username = trim($_POST['username']);
		    $user->password = trim($_POST['password']);
		    $user->first_name = trim($_POST['first_name']);
		    $user->last_name = trim($_POST['last_name']);
			
	
	 if(!empty($user->id) && !empty($user->username) && !empty($user->password) && !empty($user->first_name) && !empty($user->last_name)) {		
	$user->save();	
	$message = "Update was Saved.";	 
	redirect_to("user_register.php");	
	 }else{
		    $message = "There was an error that prevented the comment from being saved.";
			redirect_to("index.php");	
	 }
}else{
	//redirect_to("index.php");	
}
?>


<?php
	// must have an ID
  if(empty($_GET['id'])) {
  	$session->message("No comment ID was provided.");
    redirect_to('index.php');
  }
//finds article by id to populate form
  $user = User::find_by_id($_GET['id']);
?>
 



<div id="form-div">
  	

  	<h1>Update User Form</h1>
  	
    <form class="form" id="form1" action="user_update.php" method="post">
    	
    <p class="name">
        <input name="id" value="<?php echo $user->id; ?>" type="hidden" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>	
  
  		<p class="name">
        <input name="username" value="<?php echo $user->username; ?>" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Username" id="name" />
      </p>
      
      <p class="name">
        <input name="password" value="<?php echo $user->password; ?>" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Password" id="name" />
      </p>
      
      <p class="name">
        <input name="first_name" value="<?php echo $user->first_name; ?>" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="First Name" id="name" />
      </p>
      
      <p class="name">
        <input name="last_name" value="<?php echo $user->last_name; ?>" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Last Name" id="name" />
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