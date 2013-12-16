

<?php require "core.php";?>

<!DOCTYPE html>

<?php session_start(); ?>

<html lang=<?php get_language_entete($langs); ?>>

<head>
	<meta charset="UTF-8">
	<!-- <title> titreExemple </title> -->
	<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" media="all" href="plugins/galleryView/css/jquery.galleryview-3.0-dev.css">
	<link rel="stylesheet" href="plugins/calendar/build/kalendae.css" type="text/css">
	
	
	
	<meta http-equiv="Content-Language" content=<?php get_language_entete($langs);?>>
	
	<style type="text/css" media="screen">
		html { margin-top: 28px !important; }
		* html body { margin-top: 28px !important; }
	</style>
	
	<script src="js/jquery-1.10.2.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.2.min.js"><\/script>')</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/fonctions.js"></script>
	<script src="plugins/galleryView/js/jquery.galleryview-3.0-dev.js"></script>
	<script src="plugins/galleryView/js/jquery.timers-1.2.js"></script>
	<script src="plugins/galleryView/js/jquery.easing.1.3.js"></script>
	<script src="plugins/calendar/build/kalendae.standalone.js" type="text/javascript" charset="utf-8"></script>
	
</head>

<body>


<div id="wrap">
	<div id="header">
	    <div id="headimg">
			<img src="<?php $url_root ?>img/logo.png">
	        <h1><a id="name" href="http://localhost/wordpress/" title="titreExemple" rel="home" style="color: "></a></h1>
	            
	      <div id="langSelector">
		      <ul class="qtrans_language_chooser" id="qtranslateslug-2">
		      	<li class="active">
		      		<a href="<?php clearUrl(_getServerUrl(),"en") ?>"> <img src="img/uk.png"></a>
		      	</li>	
		      	<li>
		      		<a href="<?php clearUrl(_getServerUrl(),"fr")?>"> <img src="img/fr.png"></a>
		      	</li>
		      	<li>
		      		<a href="<?php clearUrl(_getServerUrl(),"pt")?>"> <img src="img/pt.png"></a>
		      	</li>
		      </ul>
	      </div>	   
	    </div>
  </div>
  
<div id="nav">
  <div class="menu">
  	<ul>
  		<li class="<?php getClassMenuHeader("accueil");?>"><a class="father" href="<?php $url_root?>accueil.php" title="Accueil"><?php echo $langs->trans("accueil");?></a></li>
  		<li class="<?php getClassMenuHeader("albufeira");?>"><a class="father" href="<?php $url_root?>albufeira.php">Albufeira</a></li>
  		<li class="<?php getClassMenuHeader("appart");?>"><a class="father" href="<?php $url_root?>appartKaty.php"><?php echo $langs->trans("appartements");?></a>
	  		<ul class="children">
	  			<li class="<?php getClassMenuHeader("Katy");?>"><a href="<?php $url_root?>appartKaty.php"><?php echo $langs->trans("appartKaty");?></a></li>
	  			<li class="<?php getClassMenuHeader("Mel");?>"><a href="<?php $url_root?>appartMel.php"><?php echo $langs->trans("appartMel");?></a></li>
	  			<li class="<?php getClassMenuHeader("Jojo");?>"><a href="<?php $url_root?>appartJojo.php"><?php echo $langs->trans("appartJojo");?></a></li>
	  		</ul>
  		</li>
  		<li class="<?php getClassMenuHeader("modalites");?>"><a class="father" href="<?php $url_root?>modalites.php"><?php echo $langs->trans("modalities");?></a>
  	</ul>
  </div>
</div>
