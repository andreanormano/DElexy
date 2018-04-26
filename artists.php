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
<title>Delexy - Artists</title>
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
<div class="container white artist">
	<div class="col-md-12"><h1>.Artists</h1></div>
    <div class="row no-gutter">
    	<div class="col-md-4 animated fadeInUp"><a href="artist/colombo.php"><img src="images/colombo.png" width="100%"/><div class="artist-name">Colombo</div></a></div>
    	<div class="col-md-4 animated fadeInUp"><a href="artist/frank-master.php"><img src="images/artist-frank.jpg" width="100%"/><div class="artist-name">Frank Master</div></a></div>
        <div class="col-md-4 animated fadeInUp"><a href="artist/hysterism.php"><img src="images/artist-hysterism.jpg" width="100%"/><div class="artist-name">Hysterism</div></a></div>
    </div>
    <div class="row no-gutter" style="padding-top:28px;">
        <div class="col-md-4 animated fadeInUp"><a href="artist/mad-man-factory.php"><img src="images/artist-mmf.jpg" width="100%"/><div class="artist-name">Mad Man Factory</div></a></div>
        <div class="col-md-4 animated fadeInUp"><a href="artist/malcolm-joseph.php"><img src="images/artist-malcolm.jpg" width="100%"/><div class="artist-name">Malcolm Joseph</div></a></div>
        <div class="col-md-4 animated fadeInUp"><a href="artist/miss-autumn-leaves.php"><img src="images/Miss-Autumn-Leaves.jpg" width="100%"/><div class="artist-name">Miss Autumn Leaves</div></a></div>
    	
    </div>
    <div class="row no-gutter" style="padding-top:28px;">
       <div class="col-md-4 animated fadeInUp"><a href="artist/nick-van-gelder.php"><img src="images/nick-van-gelder.jpg" width="100%"/><div class="artist-name">Nick Van Gelder</div></a></div>
        <div class="col-md-4 animated fadeInUp"><a href="artist/viktor-martini.php"><img src="images/artist-viktor.jpg" width="100%"/><div class="artist-name">Viktor Martini</div></a></div>
        <div class="col-md-4 animated fadeInUp"><a href="artist/zambot.php"><img src="images/artist-zambot.jpg" width="100%"/><div class="artist-name">Zambot</div></a></div>
    	<div class="col-md-4 animated fadeInUp"></div>
    </div>
     <div class="row no-gutter" style="padding-top:28px;">
        <div class="col-md-4 animated fadeInUp"></div>
    	<div class="col-md-4 animated fadeInUp"></div>
    	<div class="col-md-4 animated fadeInUp"></div>
    </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
