

jQuery(document).ready(function($){
	var button_delete = $('.btn--fn');
	var group_delete = $('.btn-group');
	var cancle_delete = $('.btn--cancle');
	
	cancle_delete.on('click', function(event){
		group_delete.hide();
		button_delete.show();
		
	});
	
	
	button_delete.on('click', function(event){
		group_delete.show();
		button_delete.hide();
	});		
});
