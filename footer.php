
<div id="footer">

<?php 
if(!isset($_SESSION["userco"])){
?>
<a href="./admin.php">Connexion administrateur</a>
<?php 
}else{
?>
<a href="./admindeco.php">Se déconnecter</a>
<?php 
}
?>

</div>


<div class="cb"></div>
</div>


</body>

<?php
