    $(document).ready(function(){
    	
        var Icon = $('.twitter-icon');
        var Box = $('.twitterbutton');
        var Overlay= $('.twitter-overlay');        
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
    			Box.removeClass('twitterbutton');
        		Box.addClass('twitterbutton-hide');
        		/*displays calendar*/
        		$("#twitter").show();
        		
        		Icon.addClass('twitter-overlay');
        		Box.addClass('twitter-open');
                isOpen = true;
            
            } else {
            	Box.addClass('twitterbutton');
        		Box.removeClass('twitterbutton-hide');
            	
            	$("#twitter").hide();
            	Icon.removeClass('twitter-overlay');
                Box.removeClass('twitter-open');
                isOpen = false;
            }
    });

});