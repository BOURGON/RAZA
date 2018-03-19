<?php 
	//require_once('header.php');
  $debeug=1;

$_SESSION['debeug']=$debeug;

	if (!empty ($debeug)){
				if ($debeug==1){
					echo'  <div id="page-wrapper"> <div class="container-fluid">
				   
					<div class="row">
					<div class="col-lg-2"></div>
						<div class="col-lg-10">';
						ini_set('display_errors','on');
						error_reporting(E_ALL);
						echo var_dump($_POST);
						echo var_dump($_GET);
						echo var_dump($_SESSION);
						echo'formation CONTROLLER';
						echo'</div></div>
						
						
						</div></div>';
						}
					}
					
					
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="Compteur/Theme/assets/ico/favicon.png">

    <title> CREPS de DE <b> REIMS </b></title>

    <!-- Bootstrap core CSS -->
    <link href="Compteur/Theme/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Compteur/Theme/assets/css/soon.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    
    <!--<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
-->
  </head>
  <!-- START BODY -->
  <body class="nomobile">

    <!-- START HEADER -->
    <section id="header">
        <div class="container">
            <header>
                <!-- HEADLINE -->
                <h1 data-animated="GoIn"><b>CREPS</b> DE <b> REIMS</b></h1>
            </header>
            <!-- START TIMER -->
            <div id="timer" data-animated="FadeIn">
                <p id="message"></p>
                <div id="days" class="timer_box"></div>
                <div id="hours" class="timer_box"></div>
                <div id="minutes" class="timer_box"></div>
                <div id="seconds" class="timer_box"></div>
            </div>
            <!-- END TIMER -->
            <div class="col-lg-12 col-lg-offset-0 mt centered">
            	<h4><b>Ouverture de la plateforme le 22 janvier</b></h4>
				        
			</div>
            
        </div>
        <!-- LAYER OVER THE SLIDER TO MAKE THE WHITE TEXTE READABLE -->
        <div id="layer"></div>
        <!-- END LAYER -->
        <!-- START SLIDER -->
        <div id="slider" class="rev_slider">
            <ul>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/1.jpg">
                <img src="Compteur/Theme/assets/img/slider/1.jpg">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/2.jpg">
                <img src="Compteur/Theme/assets/img/slider/2.jpg">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/3.jpg">
                <img src="Compteur/Theme/assets/img/slider/3.jpg">
              </li>
              <li data-transition="slideleft" data-slotamount="1" data-thumb="assets/img/slider/4.jpg">
                <img src="Compteur/Theme/assets/img/slider/4.jpg">
              </li>
            </ul>
        </div>
        <!-- END SLIDER -->
    </section>
    <!-- END HEADER -->

    <!-- 
	

   ____ ____  _____ ____  ____     ____  _____    _     ___  ____  ____      _    ___ _   _ _____            ____ _   _  ___  ____ ___ _   _ 
  / ___|  _ \| ____|  _ \/ ___|   |  _ \| ____|  | |   / _ \|  _ \|  _ \    / \  |_ _| \ | | ____|          / ___| | | |/ _ \|  _ \_ _| \ | |
 | |   | |_) |  _| | |_) \___ \   | | | |  _|    | |  | | | | |_) | |_) |  / _ \  | ||  \| |  _|    _____  | |   | |_| | | | | |_) | ||  \| |
 | |___|  _ <| |___|  __/ ___) |  | |_| | |___   | |__| |_| |  _ <|  _ <  / ___ \ | || |\  | |___  |_____| | |___|  _  | |_| |  __/| || |\  |
  \____|_| \_\_____|_|   |____/   |____/|_____|  |_____\___/|_| \_\_| \_\/_/   \_\___|_| \_|_____|          \____|_| |_|\___/|_|  |___|_| \_|
                                                                                                                                             



    -->
    <script src="Compteur/Theme/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="Compteur/Theme/assets/js/modernizr.custom.js"></script>
    <script src="Compteur/Theme/assets/js/bootstrap.min.js"></script>
    <script src="Compteur/Theme/assets/js/soon/plugins.js"></script>
    <script src="Compteur/Theme/assets/js/soon/jquery.themepunch.revolution.min.js"></script>
    <script src="Compteur/Theme/assets/js/soon/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>