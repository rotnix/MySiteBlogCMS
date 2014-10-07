<?php if (!$session->is_logged_in()) { safe_redirect("index.php"); } ?>
	
	
<form class="form" id="form1" action="article_post.php" method="post">
  
	<p class="name">
		<input name="id" value="" type="hidden" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="ID" id="name" />
	</p>
  

	<p class="email">
        <input name="topic" value="" type="text" class="validate[required,custom[email]] feedback-input" id="Email" placeholder="Topic" />
	</p>
      
	<p class="text">
        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Text"></textarea>
    </p>
      
      
    <div class="submit">
		<input type="submit" name="submit" value="SEND" id="button-blue"/>
        <div class="ease"></div> 
    </div>

</form>


