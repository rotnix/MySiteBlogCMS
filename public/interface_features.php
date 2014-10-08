	 <!--Button Features Includes -->
   		<link rel="stylesheet" type="text/css" href="stylesheets/style_interfaces_features.css" />
     	<link rel="stylesheet" type="text/css" href="stylesheets/style_button_jump_top.css" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style_button_twitter.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/style_button_calendar.css" />
        <link rel="stylesheet" type="text/css" href="stylesheets/style_button_map.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/style_buttton_chat.css" />
	
	
		<link rel="stylesheet" type="text/css" href="stylesheets/style_searchfield.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/style_map.css" />
		<link rel="stylesheet" type="text/css" href="stylesheets/style_calendar.css" />

	<!--Feauters -->
	<div id="features">
		
		<!--@todo #make jump links# JumpTop Button -->
		<div class="button-jumpTop">
			<a href="#" class="cd-top"></a>
		</div><!--EndOf JumpTop Button -->
		
		<!--@todo #translete text function# Translate Text Button -->
		<div class="button-login">
			
			<?php 
			
			if (!$session->is_logged_in()) {
			echo "User: ";
			echo "<a href=\"user_login.php\" target=\"_blank\">[Login]</a>";
			}
				
			if ($session->is_logged_in()) {
			echo "User: ";	
			$user = User::find_by_id($_SESSION["user_id"]);
			echo $user->username." ";
			
			
			echo "<a href=\"user_logout.php\" target=\"_blank\">[Logout]</a>";
			}
			
			?>
		</div><!--EndOf Translate Text Box -->
		
		<div class="buttons">
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
		</div>
		
	</div> <!--EndOf Feauters -->