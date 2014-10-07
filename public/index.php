<?php require_once("../includes/initialize.php"); ?><link rel="stylesheet" type="text/css" href="stylesheets/style_form_input.css" />

<!-- Gets Pagination 2 Post -->
<?php include('interface_article_pagination_2_catchpost.php') ?>	

<!DOCTYPE HTML>
<html>

    <head>
    	<!--<link rel="icon" type="image/png" href="http://example.com/myicon.png">-->
    	
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="stylesheets/style_main.css" />
              
   		<!--Button Features Includes -->
   		<link rel="stylesheet" type="text/css" href="stylesheets/style_features.css" />
     	<link rel="stylesheet" type="text/css" href="stylesheets/style_button_jump_top.css" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style_button_twitter.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/style_button_calendar.css" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style_button_map.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/style_buttton_chat.css" />
		
		<!--Form Includes -->
		<link rel="stylesheet" type="text/css" href="stylesheets/style_form_button_delete.css" />
       	<link rel="stylesheet" type="text/css" href="stylesheets/style_form_input.css" />
		
        <link rel="stylesheet" type="text/css" href="stylesheets/style_picture_round.css" />
        
		<link rel="stylesheet" type="text/css" href="stylesheets/style_searchfield.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/style_map.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/style_calendar.css" />


		<link rel="stylesheet" type="text/css" href="stylesheets/style_category_link.css" />



   </head>
<body>
		
	<div id="blurbackground-menu">
	</div>
	<div id="safenodeOverlay-menu">
	</div>

<div id="main-container">
	
	<!-- Menu Include -->
	<?php include('interface_menu_left_1.php') ?>			


<!-- Warps Site conntend &resets position  -->
<div id="content-wrapper"> 
	
	<!--Feauters -->
	<div id="features">
		
		<!--@todo #make jump links# JumpTop Button -->
		<div class="button-jumpTop">
			<a href="#" class="cd-top"></a>
		</div><!--EndOf JumpTop Button -->
		
		<!--@todo #translete text function# Translate Text Button -->
		<div class="button-translateText">
			<a href="#">EN</a> | 
			<a href="#">CZ</a> 
		</div><!--EndOf Translate Text Box -->
		
		<!--SearchBox -->
		<div class="button-searchfield">
			<div id="sb-search" class="sb-search " >
			    <form>
			        <input class="sb-search-input " onkeyup="buttonUp();" placeholder="Search" onblur="monkey();" type="search" value="" name="search" id="search">
			        <input class="sb-search-submit" type="submit"  value="">
			        <span class="sb-icon-search"><i class="fontawesome-search"></i></span>
			    </form>
			</div>
		</div><!--EndOf SearchBox -->
		
		<!--Callender Button-->
		<div class="button-calendar">
			<div id="calendarbutton" class="calendarbutton" >
				<div id="calendar" style="display:none"></div>
			    <form>
				    <span class="calendar-icon"><i class="fontawesome-calendar"></i></span>					
				</form>
			</div>
		</div><!--EndO Calendar Button -->
		
		
			<!--Twitter Button-->
		<div class="button-twitter">
			<div class="twitterbutton" >
				<div id="twitter" style="display:none">
					<div style="background-color:rgba(0, 0, 0, 0.3); padding:0 4px;">
					<a class="twitter-timeline" style="margin-top:10px"  href="https://twitter.com/David_Krejcir" width="250px" height='450px' data-chrome="noborders transparent noscrollbar"  data-widget-id="489552620235673600">Tweets by @David_Krejcir</a>
					    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
					</div>
			    <form>
				    <span class="twitter-icon"><i class="fontawesome-twitter"></i></span>					
				</form>
			</div>
		</div><!--EndO Twitter Button -->
		
		<!--Location Button-->
		<div class="button-location">
			<div id="locationbutton" class="locationbutton" >
				<div class="map">
					<div id="cd-google-map" >
						<div id="google-container"></div>
						<div id="cd-zoom-in"></div>
						<div id="cd-zoom-out"></div>
						<address>Potoční 153, 788 13 Vikýřovice</address> 
					</div>
				</div>
			    <form>
				    <span class="location-icon"><i class="fontawesome-map-marker" ></i></span>					
				</form>
			</div>
		</div><!--EndO Location Button -->
		
		<!--Chat Button-->
		<div class="button-chat">
			<div id="chatbutton" class="chatbutton" >
				<div class="chat">
					<!--TODO <iframe src="http://192.168.1.148:3000/"></iframe> Chat-->
				</div>
			    <form>
				    <span class="chat-icon"><i class="fontawesome-comments-alt" ></i></span>					
				</form>
			</div>
		</div><!--EndO Location Button -->
		
		
	</div> <!--EndOf Feauters -->
	
	<!--ContentColum  &offsets layout by width off nav-->
	<div id="content-container">
		<!----------------Main-Article-Container------------------>
		<article>
			<div class="picture" ><img class="round-pic" src="images/me.jpg" /></div>
		
			<h1>How To Make The Big Dream Your Plan A</h1>
			  <h2>by Laurie Luh at medium.com • 2 minute read</h2>
			<p>Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque lacus quam, egestas ac tincidunt a, lacinia vel velit. Aenean facilisis nulla vitae urna tincidunt congue sed ut dui. Morbi malesuada nulla nec purus convallis consequat. Vivamus id mollis quam.</p> 
			 	
		
<?php //----------------PAGINATION ---------------------

	// 1. the current page number ($current_page)
	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

	// 2. records per page ($per_page)
	$per_page = 4;

	// 3. total record count ($total_count)
	$total_count = Article::count_all();
	
	// use pagination  
	$pagination = new Pagination($page, $per_page, $total_count);
	
	// Instead of finding all records, just find the records 
	// for this page
	
	$sql = "SELECT * FROM article ";
	$sql .= "LIMIT {$per_page} ";
	$sql .= "OFFSET {$pagination->offset()}";
	$article = Article::find_by_sql($sql);
	
	
	// Need to add ?page=$page to all links we want to 
	// maintain the current page (or store $page in $session)

//------------ENDOF----PAGINATION ---------------------		
?> 
		
<?php //--------------ARTICLE DISPLAY---------------------
//$article = Article::find_all();

	foreach($article as $article):
		echo "<hr class=\"style1\">";
		
		//List Categories by Article
		$category = Category::find_category_on_article($article->id);		
		foreach($category as $category):
			//echo "<div id=\"category\"><a href='category.php?category=$category->id'>#".$category->category." </a></div>";	
			
		//Category links of the Article	
		echo"<div id=\"category\"><section class=\"color-1\">
  				<nav class=\"cl-effect-1\" id=\"cl-effect-1\">
    				<a href=\"category.php?category=$category->category_id\"># ".$category->category."</a> ";  
    		if ($session->is_logged_in()) {	echo"<a  class=\"category-remove\" href=\"category_categorylist_delete.php?id=$category->category_id\"><div class=\"vertical-center\"> <i class=\"fontawesome-remove\" ></i></div></a>"; }   				    
		echo"	</nav>
			</div>";
				
		endforeach;	 // ENDOF List Categories by Article
		
		//Menu to add and eddit all categorys
		echo "<div class=\"article-menu-offset\">";
		if ($session->is_logged_in()) {echo "<div class=\"text-right\"><a class=\"text-right\" href='category_list_articlecategory_manage.php?id=$article->id'> <i class=\"fontawesome-edit\" ></i> Category Edit</a></div>";}
		echo"</div>";
		
		//Category list and Add category if logedin
		if ($session->is_logged_in()) {
		include('interface_category_categorylist_1.php');
		}
		
		
		//Separator if logged in
		if ($session->is_logged_in()) { echo"<hr class=\"style2\">"; };
		
		//Menu for the Article
		echo "<div class=\"article-menu-offset\">";
		if ($session->is_logged_in()) { echo " <div class=\"text-right\"><a href='article_delete.php?id=$article->id'><i class=\"fontawesome-trash\" ></i> Delete</a></div>";} 
		if ($session->is_logged_in()) {echo "<div class=\"text-right\"><a class=\"text-right\" href='article_update.php?id=$article->id'> <i class=\"fontawesome-edit\" ></i> Edit</a></div>";}
		echo"</div>";
		
		//Topic WordWrap
		 $topic = $article->topic;
		 $newtext = wordwrap($topic, 4, "\n", 1);
		 echo "<h1>".strip_tags($newtext)."</h1>";
		
		
		echo strip_tags($article->text);
		echo "<br>";
		echo "<h2>".datetime_to_text($article->created)."</h2>";
	  	
		
	endforeach;
?>
  
<?php
		//Article Form Post
    	if ($session->is_logged_in()) {
		include('interface_article_form_post.php');
		}
?>    
<!-------------ENDOF-----ARTICLE DISPLAY----------------> 
 
 
<!----------------Pagination Display------------------>
<br \>

<div class="text-center">
	<!-- Pagination Interface Include-->
  <?php include('interface_article_pagination_2.php') ?>
</div>
<!-----------ENDOF-----Pagination------------------>

	
<!--------------Test-Area------------------>	



	

<!-----------ENDOF-----Test-Area------------------>
	   
</article> <!-----------ENDOF-----Main-Article-Container------------------>


 <br>
    

</div> <!--EndOf Content Colum -->

<div id="footer" >
	
	
	<?php if (!$session->is_logged_in()) {
	echo "<a href=\"user_login.php\" target=\"_blank\">Login | </a>";
	}
	?>
	
	<?php if ($session->is_logged_in()) {
	echo "<a href=\"user_logout.php\" target=\"_blank\">Logout | </a>";
	}
	?>
	
	<a href="logfile.php" target="_blank">Logfile | </a>
	<a href="user_register.php" target="_blank">Register | </a>
	
	<a href="photo_list.php" target="_blank">Photo List | </a>
	<a href="photo_gallery.php" target="_blank">Photo Gallery | </a>

	<!--
<article>
     <ul class="reset">
	
	<li class="copyright"> By 
	<a href="#" target="_blank">DotWebDesign</a>
	</li>
	<li class="copyright" >Location: <span class="city-region"></span> IP: <span class="ip"></span></li>
	<li class="copyright" >
	-->
	
	
<!--
	</li>
     </ul>
</article>	 
-->

</div> <!--EndOf Footer -->

</div> <!--EndOf Content Warper -->

</div> <!--EndOF Main Container -->

<!--Searchbox and jQuerry Includes-->
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>

<!--Callendar Includes-->
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
<script type="text/JavaScript" src="javascripts/calendar.js"></script>
<script type="text/JavaScript" src="javascripts/calendarbutton.js"></script> 

<!--Google Maps Includes -->
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false'></script>
<script type="text/JavaScript" src="javascripts/map.js"></script>

<!--IpInfo Includes -->
<script type="text/JavaScript" src="javascripts/ipinfo.js"></script> 

<!--Button Features Includes -->

<script type="text/JavaScript" src="javascripts/searchbox.js"></script>
<script type="text/JavaScript" src="javascripts/buttonjumptop.js"></script> 
<script type="text/JavaScript" src="javascripts/twitterbutton.js"></script> 
<script type="text/JavaScript" src="javascripts/mapbutton.js"></script>
<script type="text/JavaScript" src="javascripts/chatbutton.js"></script>




</body>
</html>