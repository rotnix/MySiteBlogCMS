<link rel="stylesheet" type="text/css" href="stylesheets/style_main.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_input.css" />


<link rel="stylesheet" type="text/css" href="stylesheets/style_button_back.css" />

<?php
require_once("../includes/initialize.php");

if($session->is_logged_in()) {
  redirect_to("index.php");
}

// Remember to give your form's submit tag a name="submit" attribute!
if (isset($_POST['submit'])) { // Form has been submitted.

  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
  
  // Check database to see if username/password exist.
	$found_user = User::authenticate($username, $password);
	
  if ($found_user) {
    $session->login($found_user);
		log_action('Login', "{$found_user->username} logged in.");
    redirect_to("index.php");
  } else {
    // username/password combo was not found in the database
    $message = "Username/password combination incorrect.";
  }
  
} else { // Form has not been submitted.
  $username = "";
  $password = "";
}

?>

	<div id="form-div">
		<a href="index.php" class="backbutton"><i class="fontawesome-reply"></i> Back</a>
			<br />
		
		  <h1>Login</h1>
			<?php echo output_message($message); ?>
    		<form class="form" id="form1" action="user_login.php" method="post">
  
  	  
		      <p class="name">
		        <input name="username" value="<?php echo htmlentities($username); ?>" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Username" id="name" />
		      </p>
		      
		      <p class="email">
		        <input name="password" value="<?php echo htmlentities($password); ?>" type="password" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input"  placeholder="Password" id="name"/>
		      </p>
		      
		   
		      
		      <div class="submit">
		        <input type="submit" name="submit" value="SEND" id="button-blue"/>
		        <div class="ease"></div> 
		      </div>
		    </form>
		    
		   

	</div>
		
		

