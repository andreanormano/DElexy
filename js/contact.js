$(document).ready(function() {
  jQuery('.warning').hide();
  jQuery(".buttonSend").click(function() {
		// validate and process form
		// first hide any error messages
	var tab = /\s/;
	
	var name = jQuery("input#name").val();
		if (name == "" || tab.test(name) || name == "Name") {
      jQuery("div#name_error").show();
      jQuery("input#name").focus();
	  return false;
      
    }
	 
	var email = jQuery("input#email").val();
	  if (email == ""  || tab.test(email) || email == "E-mail") {
      jQuery("div#email_error").show();
      jQuery("input#email").focus();
      return false; 	
    }
	
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if(!emailReg.test(email)) {
	jQuery("div#email_error2").show();
    jQuery("input#email").focus();
		return false;
      
	}
	
	var msg = jQuery("textarea#msg").val();
	  if (msg == "" || tab.test(msg) || msg == "Your Question") {
	  jQuery("div#msg_error").show();
	  jQuery("textarea#msg").focus();
	  return false;
    }
		
		var dataString = 'name='+ name + '&email=' + email + '&msg=' + msg;
		//alert (dataString);return false;
		
		
	  jQuery.ajax({
      type: "POST",
      url: "process.php",
      data: dataString,
      success: $(document).ready(function() {
        jQuery('#contactForm').html("<div id='message' style='color:#969696'></div>");
        jQuery('#message').html("<strong>Modulo inviato! </strong>")
        .append("<p>Risponderemo al più presto.</p>") 
        .hide()
        .fadeIn(1500, function() {
          jQuery('#message');
		  
        });
      })
     });
    return false;
	});
});

