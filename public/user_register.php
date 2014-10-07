<?php require_once("../includes/initialize.php"); ?>
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_input.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_main.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_button_delete.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_table.css" />

<link rel="stylesheet" type="text/css" href="stylesheets/style_button_back.css" />

<?php if (!$session->is_logged_in()) { redirect_to("user_login.php"); } ?>
<?php
	
	if(isset($_POST['submit'])) {
		
	  $username = trim($_POST['username']);
	  $password = trim($_POST['password']);
	  $first_name = trim($_POST['first_name']);
	  $last_name = trim($_POST['last_name']);

	
	  $new_user = User::make($username, $password, $first_name, $last_name);
	  if($new_user && $new_user->save()) {
			// comment saved
			// No message needed; seeing the comment is proof enough.
			
			// Send email
		//	$new_comment->try_to_send_notification();
			
	    // Important!  You could just let the page render from here. 
	    // But then if the page is reloaded, the form will try 
			// to resubmit the comment. So redirect instead:
	    redirect_to("user_register.php");
	
		} else {
			// Failed
	    $message = "There was an error that prevented the comment from being saved.";
		redirect_to("index.php");
		
		}
	} else {
	//	redirect_to("index.php");
	}
	
	?>

<div id="form-div">
  	
<a href="index.php" class="backbutton"><i class="fontawesome-reply"></i> Back</a>
<br />
  	<h1>Register New User Form</h1>
  	
    <form class="form" id="form1" action="user_register.php" method="post">
  
  		<p class="name">
        <input name="username" value="" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Username" id="name" />
      </p>
      
      <p class="name">
        <input name="password" value="" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Password" id="name" />
      </p>
      
      <p class="name">
        <input name="first_name" value="" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="First Name" id="name" />
      </p>
      
      <p class="name">
        <input name="last_name" value="" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Last Name" id="name" />
      </p>
      
      
      <div class="submit">
        <input type="submit" name="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div> 
      </div>
    </form>
    <br />
 
<!-----------------ALL-USER LIST -------------------------------->   
	<table>
		<h1>User List</h1>   
		<thead>
			<tr>
			    <th class="text-left">Username</th>
			    <th class="text-left">Password</th>
			    <th	class="text-left">First Name</th>
			    <th class="text-left">Last Name</th>
			    <th class="text-left"><i class="fontawesome-edit" ></i></th>
			    <th class="text-left"><i class="fontawesome-remove" ></i></th>
			</tr>
	 	</thead>
	 	<tbody>
	<?php   
	 
	    $user = User::find_all();
		foreach($user as $user):
		
			echo"
			
				<tr>
				    <td>$user->username</td>
				    <td>$user->password</td>
				    <td>$user->first_name</td>
				    <td>$user->last_name</td>
				    <td><a href=\"user_update.php?id=$user->id\"><i class=\"fontawesome-edit \" ></i></a></td>
				    <td><a href=\"user_delete.php?id=$user->id\"><i class=\"fontawesome-remove \" ></i></a></td>
				</tr>";
			
		endforeach;
	?>
		</tbody>
	</table>
<!-----------ENDOF-----ALL-USER LIST -------------------------------->   


</div>    


       