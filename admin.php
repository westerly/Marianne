<?php 
	include "header.php";
?>

<?php 
	
$error = false;
if(isset($_POST["login"])){
	if(!isset($_POST["passwd"])){
		$errorMsg = "Veuillez saisir votre mot de passe.";
	}else{
		include "connect.php";	
		if(!$error){
			// check connexion datas
			$query = "SELECT * FROM user WHERE login='".mysql_real_escape_string($_POST["login"])."' AND passwd='"
					.mysql_real_escape_string($_POST["passwd"])."';" or die("Error in the consult.." . mysqli_error($con));
			//execute the query.
			$result = mysqli_query($con, $query);			
			if($result->num_rows != 1){
				$error=true;
				$errorMsg = "Le login ou le mot de passe est incorrect.";
			}else{
				$_SESSION["userco"] = true;
			}
		}
	}
}


?>

<?php 

if(isset($_SESSION["userco"])){
	// Handle calendar
	
	include "connect.php";
	if(!$error){
			
		$query = "SELECT * FROM reservations WHERE owner='katy';" or die("Error in the consult.." . mysqli_error($con));
		//execute the query.
		$result = mysqli_query($con, $query);
		
		$paramDate = "";
		while($row = mysqli_fetch_row($result)){
			$paramDate .= $row[1].', ';
		}		
	}
		

?>
	<div id="calendarKaty" class="calendar">
	
	<h1>Appartement Katy</h1>

	<script type="text/javascript" charset="utf-8">

		calendarkaty = new Kalendae({
			attachTo:document.getElementById("calendarKaty"),
			months:3,
			mode:'multiple'
		});

		<?php if(isset($paramDate)){?>
			calendarkaty.setSelected("<?php echo $paramDate?>");
		<?php }?>

			calendarkaty.subscribe('change', function (date, action) {
			console.log(date);
			// Traitement Ajax

			annee = date._i.substr(0,4);
			mois =  date._i.substr(5,2);
			jour = date._i.substr(8,2);

			//alert(new Date(annee,mois,jour).toDateString());
			
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlhttp.onreadystatechange = function()
			{
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			  {
				  //alert(xmlhttp.responseText);
			  }
		    }

			xmlhttp.open("POST","ajaxcalendar.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("key=protect&owner=katy&date="+annee+"-"+mois+"-"+jour);
				
		});

	</script>
	
	</div>
	
	<?php 
		include "connect.php";
		if(!$error){
				
			$query = "SELECT * FROM reservations WHERE owner='mel';" or die("Error in the consult.." . mysqli_error($con));
			//execute the query.
			$result = mysqli_query($con, $query);
		
			$paramDate = "";
			while($row = mysqli_fetch_row($result)){
				$paramDate .= $row[1].', ';
			}
		}
	?>
	
	<div id="calendarMel" class="calendar">
	
	<h1>Appartement Mel</h1>

	<script type="text/javascript" charset="utf-8">

		calendarmel = new Kalendae({
			attachTo:document.getElementById("calendarMel"),
			months:3,
			mode:'multiple'
		});

		<?php if(isset($paramDate)){?>
			calendarmel.setSelected("<?php echo $paramDate?>");
		<?php }?>

			calendarmel.subscribe('change', function (date, action) {
			console.log(date);
			// Traitement Ajax

			annee = date._i.substr(0,4);
			mois =  date._i.substr(5,2);
			jour = date._i.substr(8,2);
			
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlhttp.onreadystatechange = function()
			{
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			  {
				  //alert(xmlhttp.responseText);
			  }
		    }

			xmlhttp.open("POST","ajaxcalendar.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("key=protect&owner=mel&date="+annee+"-"+mois+"-"+jour);
				
		});

	</script>
	
	</div>	

	<?php 
		include "connect.php";
		if(!$error){
				
			$query = "SELECT * FROM reservations WHERE owner='jojo';" or die("Error in the consult.." . mysqli_error($con));
			//execute the query.
			$result = mysqli_query($con, $query);
		
			$paramDate = "";
			while($row = mysqli_fetch_row($result)){
				$paramDate .= $row[1].', ';
			}
		}
	?>
	
	<div id="calendarJojo" class="calendar">
	
	<h1>Appartement Jojo</h1>

	<script type="text/javascript" charset="utf-8">

		calendarjojo = new Kalendae({
			attachTo:document.getElementById("calendarJojo"),
			months:3,
			mode:'multiple'
		});

		<?php if(isset($paramDate)){?>
			calendarjojo.setSelected("<?php echo $paramDate?>");
		<?php }?>

			calendarjojo.subscribe('change', function (date, action) {
			console.log(date);
			// Traitement Ajax

			annee = date._i.substr(0,4);
			mois =  date._i.substr(5,2);
			jour = date._i.substr(8,2);
			
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}

			xmlhttp.onreadystatechange = function()
			{
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			  {
				  //alert(xmlhttp.responseText);
			  }
		    }

			xmlhttp.open("POST","ajaxcalendar.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("key=protect&owner=jojo&date="+annee+"-"+mois+"-"+jour);
				
		});

	</script>
	
	</div>
	
	

	
<?php 
}else{

?>
<div class="connexionBox">
	<div id="connexion">
		<form method="post" action="">
			<div class="login-div">
				<label for="login">
					<strong>Login</strong>
				</label>
				<input type="text" name="login" id="login"/>
			</div>
			<div class="passwd-div">
				<label for="passwd">
					<strong>Mot de passe</strong>
				</label>
				<input type="password" name="passwd" id="passwd"/>
			</div>
			<div class="connexion-div">
				<input type="submit" class="connectButton" value="Connexion"/>
			</div>
		</form>
		<div id="errorMsg">
			<?php if($error){echo $errorMsg;}?>
		</div>
	</div>
</div>
<?php 
}
?>
	

<?php 
	include "footer.php";
?>