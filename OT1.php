<?php 
	include "header.php";
?>

<h1 class="titleMenu"> <p> <?php echo $langs->trans("appartOT1"); ?> </p></h1>


	<div id="boxRound" class="sizeBoxOT1">
	
		<div class="mySpan8 ml20">
			<p class="icons">
				<span class="person">4</span>
				<span class="bath">1</span>
				<span class="bed">3</span>
			</p>
			
			<p class="small_icons">
				<img alt="" src="img/nosmoking.png">
				<img alt="" src="img/nopet.png">
				<img alt="" src="img/beach.png">
			</p>
		</div>
			
		<div class="mySpan12 ml20 left">
		
			<div id="photos" class="galleryview"> 
				<ul> 
				<li><img src="img/3400.jpg" /></li> 
				<li><img src="img/3401.jpg" /></li> 
				<li><img src="img/3402.jpg" /></li>
				<li><img src="img/3403.jpg" /></li>
				<li><img src="img/3406.jpg" /></li>
				<li><img src="img/3408.jpg" /></li> 
				</ul>  
			</div> 
			
			<div class='mySpan6 ml20 left txt'>
				<p class="alinea"><?php echo $langs->trans("descAppartOT1P1"); ?> </p>
				<p class="alinea"><?php echo $langs->trans("descAppartOT1P2"); ?> </p>
				<p class="alinea"><?php echo $langs->trans("descAppartOT1P3"); ?> </p>
			</div>
			
		</div>

	
		<div class="mySpan9 ml20 left">
			<div id="details" class="mySpan10 left">
				<div class="details sizeRoomOT2OT1">
					<?php echo $langs->trans("detailsRoomOT1"); ?>
				</div>
				<div class="details sizeRoomOT2OT1">
					<?php echo $langs->trans("detailsBathroomOT1"); ?>
				</div>
				<div class="details sizeRoomOT2OT1">
					<?php echo $langs->trans("detailsLivingRoomOT1"); ?>
				</div>
			</div>
			<div class="mySpan10 left">
				<div class="details sizeKitchenOT1">
					<?php echo $langs->trans("detailsKitchenOT1"); ?>
				</div>
				<div class="details sizeKitchenOT1">
					<?php echo $langs->trans("detailsExtrasOT1"); ?>
				</div>
				<div class="details sizeKitchenOT1">
					<?php echo $langs->trans("detailsMiscellaneousOT1"); ?>
				</div>
			</div>
		</div>
		
		<div id="tarif">
			<table>
				<tr> 
					<th><?php echo $langs->trans("month")?></th>
					<th><?php echo $langs->trans("weeklyPrices")?></th>
				<tr>
					<td><?php echo $langs->trans("january")?></td>
					<td>500</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("february")?></td>
					<td>500</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("march")?></td>
					<td>500</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("april")?></td>
					<td>550</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("may")?></td>
					<td>600</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("june")?></td>
					<td>700</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("july")?></td>
					<td>750</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("august")?></td>
					<td>750</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("september")?></td>
					<td>700</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("october")?></td>
					<td>500</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("november")?></td>
					<td>500</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("december")?></td>
					<td>500</td>
				</tr>
			</table>
		</div>
<?php
 	
	include "connect.php";
	if(!$error){
			
		$query = "SELECT * FROM reservations WHERE owner='jojo';" or die("Error in the consult.." . mysqli_error($con));
		//execute the query.
		$result = mysqli_query($con, $query);
		
		$paramDate = ",";
		while($row = mysqli_fetch_row($result)){
			$paramDate .= $row[1].',';
		}	
	}
?>
	<div id="datePick" class="calendar left divDispo">
	
	<h1>Disponibilités</h1>
	
	<?php include "calendarFront.php"; ?>
	
	
	</div>	
		
	</div>
	
	
	<script type="text/javascript">
		$('#photos').galleryView({
			panel_width: 450,
			panel_height: 300,
		    frame_width: 80,
		    frame_height: 60,
		    show_captions: true,
		    show_filmstrip_nav: true
		});
	</script>


<?php 
	include "footer.php";
?>