<?php
	session_start();
	require_once('function.php');
	require_once('adminpanel/controller/indexFormController.php');
	require_once('adminpanel/controller/preInscriptionController.php');
	
		
		$now = date('Y-m-d');
		$next = '2017-01-15';
		
		// test
		$now = new DateTime( $now );
		$now = $now->format('Ymd');
		$next = new DateTime( $next );
		$next = $next->format('Ymd'); 
		
		if( $now >= $next ){
			
	echo'
		<html>
		<head>
		  <!-- Site made with Mobirise Website Builder v4.3.4, https://mobirise.com -->
		  <meta charset="UTF-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <meta name="generator" content="Mobirise v4.3.4, mobirise.com">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="shortcut icon" href="intro_2017/assets/images/logo-twitter-oriontroic-blanc-128x128.png" type="image/x-icon">
		  <meta name="description" content="">
		  <title>Home</title>
		  <link rel="stylesheet" href="intro_2017/assets/web/assets/mobirise-icons/mobirise-icons.css">
		  <link rel="stylesheet" href="intro_2017/assets/tether/tether.min.css">
		  <link rel="stylesheet" href="intro_2017/assets/bootstrap/css/bootstrap.min.css">
		  <link rel="stylesheet" href="intro_2017/assets/bootstrap/css/bootstrap-grid.min.css">
		  <link rel="stylesheet" href="intro_2017/assets/bootstrap/css/bootstrap-reboot.min.css">
		  <link rel="stylesheet" href="intro_2017/assets/socicon/css/styles.css">
		  <link rel="stylesheet" href="intro_2017/assets/dropdown/css/style.css">
		  <link rel="stylesheet" href="intro_2017/assets/theme/css/style.css">
		  <link rel="stylesheet" href="intro_2017/assets/mobirise/css/mbr-additional.css" type="text/css">
		  <link rel="stylesheet" type="text/css" href="adminpanel/view/moderateur/font-awesome/css/font-awesome.min.css">
		  
		  
		  
		</head>
		<body>';
		
		 Index::dispatcher();
		}
		else
		{
			
		header('Location: '.URLSITE.'/compteur.php');
  		exit();		
		
		}
?>


  <script src="intro_2017/assets/web/assets/jquery/jquery.min.js"></script>
  <script src="intro_2017/assets/popper/popper.min.js"></script>
  <script src="intro_2017/assets/tether/tether.min.js"></script>
  <script src="intro_2017/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="intro_2017/assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="intro_2017/assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="intro_2017/assets/jquery-mb-ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="intro_2017/assets/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
  <script src="intro_2017/assets/dropdown/js/script.min.js"></script>
  <script src="intro_2017/assets/theme/js/script.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  
  
</body>
</html>