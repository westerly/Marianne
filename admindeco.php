<?php 
	header('Refresh: 5; url=accueil.php');
	include "header.php";
	session_destroy();
?>

<div class="infotxt">
	Vous avez été déconnecté, vous serez ridirigé vers la page d'accueil dans 5 secondes...
</div>

<?php 
	include "footer.php";
?>