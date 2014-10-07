

<?php require_once("../includes/initialize.php"); ?>
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_input.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_main.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_button_delete.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_form_table.css" />
<link rel="stylesheet" type="text/css" href="stylesheets/style_button_back.css" />



<div id="form-div">
<a href="index.php" class="backbutton"><i class="fontawesome-reply"></i> Back</a>
<br />

<table>
		<h1>Category List</h1>   
		<thead>
			<tr>
			    <th class="text-left">Category</th>			   
			    <th class="text-left"><i class="fontawesome-edit" ></i></th>
			    <th class="text-left"><i class="fontawesome-remove" ></i></th>
			</tr>
	 	</thead>
	 	<tbody>

	<?php   
	 
	    $category = Category::find_all();
		foreach($category as $category):
		
			echo"
			
				<tr>
				    <td>$category->category</td>
				    
				    <td><a href=\"category_list_articlecategory_update.php?id=$category->id\"><i class=\"fontawesome-edit \" ></i></a></td>
				    <td><a href=\"category_list_articlecategory_delete.php?id=$category->id\"><i class=\"fontawesome-remove \" ></i></a></td>
				</tr>";
			
		endforeach;
	?>
		</tbody>
</table>
<?php 
if ($session->is_logged_in()) {
		include('category_list_articlecategory_post.php');
		}
?>


</div>