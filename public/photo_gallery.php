<?php require_once("../includes/initialize.php"); ?>
<!--
<!doctype html>
<html>-->
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>Sortable Photo Gallery</title>


<link rel="stylesheet" type="text/css" href="stylesheets/style_main.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_button_back.css" />

<meta id="viewport" name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, inital-scale=1.0" />
<link rel="stylesheet" type="text/css" href="../includes/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/sortable_gallery.css" />
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>

<script type="text/javascript" src="../includes/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.js"></script>
<script type="text/javascript" src="javascripts/sortable_gallery.js"></script>


</head>

<body>


<div class="gallery">
	
	 
<div class="text-center" >
	<div ><a class="buttonrighttop" href="photo_list.php" ><i class="fontawesome-picture"></i> Manage Photos</a></div>
</div>

	
	
 <div class="sorting">
  <div>
   <span>Filter photos by</span>
   <a class="sortLink selected" data-keyword = "all" href="#">All categories</a>
   <!--<a class="sortLink" data-keyword = "plants" href="#">Plants</a>
   <a class="sortLink" data-keyword = "sculpture" href="#">Sculpture</a>
   <a class="sortLink" data-keyword = "architecture" href="#">Architecture</a>
   <a class="sortLink" data-keyword = "winter" href="#">Winter</a>
   <div class="clear_both"></div> -->
  </div>
 </div>
 <div class="photos"><br />
 <?php
  // Find all the photos
  $photos = Photograph::find_all();
?>


  <div class="thumbnail_container">
 <!--
   <a class="thumbnail" title="This is a caption for a berrytree_fullsize.jpg" href="./photos/berrytree_fullsize.jpg"      data-keywords="plants"><img src="./photos/berrytree_thumbnail.jpg"/></a>
   <a class="thumbnail" title="This is a caption for a sculpture_fullsize.jpg" href="./photos/sculpture_fullsize.jpg"      data-keywords="sculpture winter"><img src="./photos/sculpture_thumbnail.jpg"/></a>
   <a class="thumbnail" title="This is a caption for carousel_fullsize." href="./photos/carousel_fullsize.jpg" data-keywords="sculpture"><img src="./photos/carousel_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for redplant_fullsize." href="./photos/redplant_fullsize.jpg" data-keywords="plants"><img src="./photos/redplant_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for eighteighteight_fullsize." href="./photos/eighteighteight_fullsize.jpg" data-keywords="sculpture"><img src="./photos/eighteighteight_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for evergreens_fullsize." href="./photos/evergreens_fullsize.jpg" data-keywords="plants winter"><img src="./photos/evergreens_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for fish_fullsize." href="./photos/fish_fullsize.jpg" data-keywords="sculpure"><img src="./photos/fish_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for lantern_fullsize." href="./photos/lantern_fullsize.jpg" data-keywords="architecture"><img src="./photos/lantern_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for pinwheel_fullsize." href="./photos/pinwheel_fullsize.jpg" data-keywords="sculpture"><img src="./photos/pinwheel_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for breckenridge_fullsize." href="./photos/breckenridge_fullsize.jpg" data-keywords="winter plants"><img src="./photos/breckenridge_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for neptune_fullsize." href="./photos/neptune_fullsize.jpg" data-keywords="sculpture"><img src="./photos/neptune_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for pumpkins_fullsize." href="./photos/pumpkins_fullsize.jpg" data-keywords="plants"><img src="./photos/pumpkins_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for snowbranch_fullsize." href="./photos/snowbranch_fullsize.jpg" data-keywords="winter"><img src="./photos/snowbranch_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for refraction_fullsize." href="./photos/refraction_fullsize.jpg" data-keywords="sculpture"><img src="./photos/refraction_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for rose_fullsize." href="./photos/rose_fullsize.jpg" data-keywords="plants"><img src="./photos/rose_thumbnail.jpg"/></a>
    <a class="thumbnail" title="This is a caption for sculpture_fullsize." href="./photos/sculpture_fullsize.jpg" data-keywords="scuplture winter"><img src="./photos/sculpture_thumbnail.jpg"/></a>
    -->
     <?php foreach($photos as $photo): ?>
    <a class="thumbnail" title="This is a caption for <?php echo $photo->filename; ?>." href="<?php echo $photo->image_path(); ?>" data-keywords="scuplture winter"><img src="<?php echo $photo->image_path(); ?>"/></a>
<?php endforeach; ?>
  </div>
  

 
 </div>

</div>



<!--
<div class="debug-size" style="position:absolute; bottom:0px; left:5px;">debug size</div>
<div class="debug-remainder" style="position:absolute; bottom:25px; left:5px;">debug remainder</div>
-->

</body>
<!--</html>-->