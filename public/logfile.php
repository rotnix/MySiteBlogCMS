<link rel="stylesheet" type="text/css" href="stylesheets/style_main.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_input.css" />

<link rel="stylesheet" type="text/css" href="stylesheets/style_button_back.css" />

<?php require_once("../includes/initialize.php"); ?>
<?php if (!$session->is_logged_in()) { redirect_to("user_login.php"); } ?>

<div id="form-div">
	
<?php


  $logfile = SITE_ROOT.DS.'logs'.DS.'log.txt';
  
  if($_GET['clear'] == 'true') {
		file_put_contents($logfile, '');
	  // Add the first log entry
	  log_action('Logs Cleared', "by User ID {$session->user_id}");
    // redirect to this same page so that the URL won't 
    // have "clear=true" anymore
    redirect_to('logfile.php');
  }
?>



<a href="index.php" class="backbutton"><i class="fontawesome-reply"></i> Back</a>

<br />

<h1>Log File</h1>

<p><a href="logfile.php?clear=true">Clear log file</a><p>

<?php

  if( file_exists($logfile) && is_readable($logfile) && 
			$handle = fopen($logfile, 'r')) {  // read
    echo "<ul class=\"log-entries\">";
		while(!feof($handle)) {
			$entry = fgets($handle);
			if(trim($entry) != "") {
				echo "<li>{$entry}</li>";
			}
		}
		echo "</ul>";
    fclose($handle);
  } else {
    echo "Could not read from {$logfile}.";
  }

?>

</div>
