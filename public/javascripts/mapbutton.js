    $(document).ready(function(){
    	
        var Icon = $('.location-icon');
        var Box = $('.locationbutton');
        var Overlay= $('.location-overlay');
                
        var isOpen = false;
        
        $(document).mouseup(function(){
        	
            if(isOpen == true){
            Input.val('');
          	Icon.click();
            }
      });
      
        /* Resets when Maus clickes on Page */
        Icon.mouseup(function(){
            return false;
        });
        
        Box.mouseup(function(){
            return false;
        });
        
        /* Triggers Class ADD on Icon */        
        Icon.click(function(){
        	
        	if(isOpen == false){
        		
        		/*hides default button*/
    			Box.removeClass('locationbutton');
        		Box.addClass('locationbutton-hide');
        		
        		
        		Icon.addClass('location-overlay');
        		Box.addClass('location-open');
        		
        		$(".map").css("visibility", "visible");
                isOpen = true;
            
            } else {
            	
            	Box.addClass('locationbutton');
        		Box.removeClass('locationbutton-hide');
            
            	Icon.removeClass('location-overlay');
                Box.removeClass('location-open');
                
                $(".map").css("visibility", "hidden");
                isOpen = false;
            }
    });

});