$('#file-upload').change(function() {
    var filepath = this.value;
    var m = filepath.match(/([^\/\\]+)$/);
    var filename = m[1];
    $('#filename').html(filename);

});

// Text Input
$(function(){
  var inputs = $('input[type=text], input[type=password]');
  inputs.each(function(){
    if($(this).val() === ''){
      $(this).val($(this).attr('holder'));  
    }
  });
  
  inputs.focus(function(){
    if($(this).val() === $(this).attr('holder')){
      $(this).val('');
    }
  });
  
  inputs.blur(function(){
    if($(this).val() === ''){
       $(this).val($(this).attr('holder'));
    }
  });    
})