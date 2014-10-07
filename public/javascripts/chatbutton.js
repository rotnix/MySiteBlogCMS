    $(document).ready(function(){

  
   
   
//opens chat in new window    	
		function openWin() {
		myWindow = window.open("http://localhost:3000/", "myWindow", "width=400, height=500");    // Opens a new window
		};

		function closeWin()
		{
		myWindow.close();                                                  // Closes the new window
		};
		
//start of button click function
        var Icon = $('.chat-icon');
        var Box = $('.chatbutton');
        var Overlay= $('.chat-overlay');
                
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

				openWin();

        		/*hides default button*/
    			Box.removeClass('chatbutton');
        		Box.addClass('chatbutton-hide');
        		
        		
        		Icon.addClass('chat-overlay');
        		//Box.addClass('chat-open');
        		
        		
                isOpen = true;
            
            } else {
				closeWin();

            	Box.addClass('chatbutton');
        		Box.removeClass('chatbutton-hide');
            
            	Icon.removeClass('chat-overlay');
                //Box.removeClass('chat-open');
                
              
                isOpen = false;
            }
    });

});