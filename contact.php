<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" />
<link rel="stylesheet" type="text/css" href="css/animate.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/supersized.css"/>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="images/icon.png" />
<title>Delexy - Contact Us</title>
</head>
<body class="padTopLow">
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/mainAnimation.js"></script> 
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/stellar.min.js"></script>
<script>
		$(function(){
			$.stellar({
				horizontalScrolling: false,
				verticalOffset: 40
			});
		});
</script>
<?php include('header.php'); ?>
<div class="bgArtist bgContact"></div>
<div class="container artist">
	<div class="col-md-9 white">
    	<h1>ContactUs</h1>
		<h3>General Enquiry</h3>
    	<p><a href="mailto:info@delexy.it">info@delexy.it</a></p>
        <form action="mailto:info@delexy.it">
   			<label for="fname">First Name</label>
    		<input type="text" id="fname" name="firstname" placeholder="Your name..">

    		<label for="lname">Last Name</label>
    		<input type="text" id="lname" name="lastname" placeholder="Your last name..">

			<label for="lname">Email</label>
    		<input type="text" id="email" name="email" placeholder="Your email address..">
    	
    		<label for="subject">Subject</label>
    		<input type="text" id="subject" name="subject" placeholder="Subject..">

    		<label for="message">Message</label>
    		<textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

    		<input class="button btn btn-primary" type="submit" value="Submit">
  		</form>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.1605354668895!2d12.363234015419534!3d43.08012019731602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132ea12093719eb7%3A0x48e3d70f66889bf1!2sDelexy+Records+Edizioni+Musicali+di+Alessandro+Deledda!5e0!3m2!1sen!2suk!4v1510429122960" width="100%" height="450" frameborder="0" style="border:0;padding:8% 0 4%;" allowfullscreen></iframe>
    </div>
    <div class="col-md-3"></div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
