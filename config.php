<?php 
$debeug=0;
	$monUrl ='http://' . $_SERVER['SERVER_NAME'];
	$monUrl = filter_var($monUrl, FILTER_VALIDATE_URL);
	if ($monUrl!='http://localhost')
	{
	  $init=1;
	}else{
	 $init=0;
	}
if ($init>0){
$PARAM_hote        = 'localhost'; 
//$PARAM_nom_bd      = 'creps54_inscription_montpelier'; 

$PARAM_nom_bd      = 'crepsreims'; 
$PARAM_utilisateur = 'crepsreims';
$PARAM_mot_passe   = '7pmhgDdl3ttYbLbh'; 
$PARAM_nom_site    = 'Base des formations'; 
$PARAM_mail_site   = 'jlouis.bourgon@oriontronic.com';
$PARAM_url_site    = 'http://www.crepsreimsformation.fr'; 
$PARAM_nom_bd2		 = 'crepsreims';	


} else {

$PARAM_hote        = 'localhost'; 
$PARAM_nom_bd      = 'inscription';
//$PARAM_nom_bd      = 'prodoc_acces'; 
$PARAM_utilisateur = 'root'; 
$PARAM_mot_passe   = ''; 
$PARAM_nom_site    = 'formation'; 
$PARAM_mail_site   = 'jlouis.bourgon@oriontronic.com';
$PARAM_url_site    = 'http://localhost/PGF';
//$PARAM_url_site    = 'http://localhost/formation_rogue_oneVraza/';
//$PARAM_url_site    = 'http://192.168.50.242/formation_rogue_one/';
// 2e base : formation
$PARAM_nom_bd2 = 'formation_dijon';
}



?>
