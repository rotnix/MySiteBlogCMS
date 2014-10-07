<?php require_once("../includes/initialize.php"); ?>
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_input.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_main.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_button_delete.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_button_back.css" />

<?php if (!$session->is_logged_in()) { redirect_to("user_login.php"); } ?>
<?php
if(isset($_POST['submit'])) {	
	$article = new Article();
	
		   	$article->id = trim($_POST['id']);
		    
		    $article->topic = trim($_POST['topic']);
		    $article->text = trim($_POST['text']);
			$article->created = strftime("%Y-%m-%d %H:%M:%S", time());
	
	 if(!empty($article->id) && !empty($article->topic) && !empty($article->text)) {		
	$article->save();	
	$message = "Update was Saved.";	 
	redirect_to("index.php");	
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
  $article = Article::find_by_id($_GET['id']);
?>
 



  <div id="form-div">
  	
<a href="index.php" class="backbutton"><i class="fontawesome-reply"></i> Back</a>
<br />
  	
  	<?php 
  	echo "<div class=\"article-menu-offset\">";
	echo " <div class=\"text-right\"><a href='article_delete.php?id=$article->id'><i class=\"fontawesome-trash\" ></i> Delete</a></div>";
	echo"</div>";
  	?>
  	<h1>Update Form</h1>
    <form class="form" id="form1" action="article_update.php" method="post">
  
  		<p class="name">
        <input name="id" value="<?php echo $article->id; ?>" type="hidden" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
      </p>
      
         
      <p class="email">
        <input name="topic" value="<?php echo $article->topic; ?>" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
      </p>
      
      <p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Comment"><?php echo $article->text; ?></textarea>
      </p>
      
      
      <div class="submit">
        <input type="submit" name="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div> 
      </div>
    </form>
       
    
 
    <br />



  </div><!-- End OF Form-->



 <script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script type="text/JavaScript" src="javascripts/buttondelete.js"></script> 



<?php if(isset($database)) { $database->close_connection(); } ?>