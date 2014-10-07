    $(document).ready(function(){
    	
        var Icon = $('.calendar-icon');
        var Box = $('.calendarbutton');
        var Overlay= $('.calendar-overlay');
     

        
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
    			Box.removeClass('calendarbutton');
        		Box.addClass('calenderbutton-hide');
        		/*displays calendar*/
        		$("#calendar").show();
        		
        		Icon.addClass('calendar-overlay');
        		Box.addClass('calendar-open');
                isOpen = true;
            
            } else {
            	Box.addClass('calendarbutton');
        		Box.removeClass('calenderbutton-hide');
            	
            	$("#calendar").hide();
            	Icon.removeClass('calendar-overlay');
                Box.removeClass('calendar-open');
                isOpen = false;
            }
    });

});