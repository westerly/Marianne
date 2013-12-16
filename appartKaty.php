<?php 
	include "header.php";
?>

<h1 class="titleMenu"> <p> <?php echo $langs->trans("appartKaty"); ?> </p></h1>


	<div id="boxRound" class="sizeBoxKaty">
	
		<div class="mySpan8 ml20">
			<p class="icons">
				<span class="person">2</span>
				<span class="bath">1</span>
				<span class="bed">1</span>
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
				<li><img src="img/3381.png" alt="Effet du soleil" title="Effet du soleil" /></li> 
				<li><img src="img/3382.jpg" alt="Eden" title="Eden" /></li> 
				<li><img src="img/3384.jpg" alt="Snail on the Corn" title="Snail on the Corn" /></li>
				<li><img src="img/3386.jpg" alt="Snail on the Corn" title="Snail on the Corn" /></li>
				<li><img src="img/3387.jpg" alt="Snail on the Corn" title="Snail on the Corn" /></li>
				<li><img src="img/3408.jpg" alt="Snail on the Corn" title="Snail on the Corn" /></li> 
				</ul> 
			</div> 
			
			<div class='mySpan8 ml20 left txt'>
				<p class="alinea"><?php echo $langs->trans("descAppartKatyP1"); ?> </p>
				<p class="alinea"><?php echo $langs->trans("descAppartKatyP2"); ?> </p>
				<p class="alinea"><?php echo $langs->trans("descAppartKatyP3"); ?> </p>
			</div>
			
		</div>

	
		<div class="mySpan10 ml20 left">
			<div id="details" class="mySpan10 left">
				<div class="details">
					<?php echo $langs->trans("detailsRoomKaty"); ?>
				</div>
				<div class="details sizeRoom">
					<?php echo $langs->trans("detailsBathroomKaty"); ?>
				</div>
				<div class="details sizeRoom">
					<?php echo $langs->trans("detailsLivingRoomKaty"); ?>
				</div>
			</div>
			<div class="mySpan10 left">
				<div class="details sizeKitchen">
					<?php echo $langs->trans("detailsKitchenKaty"); ?>
				</div>
				<div class="details sizeKitchen">
					<?php echo $langs->trans("detailsExtrasKaty"); ?>
				</div>
				<div class="details sizeKitchen">
					<?php echo $langs->trans("detailsMiscellaneousKaty"); ?>
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
					<td>300</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("february")?></td>
					<td>300</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("march")?></td>
					<td>300</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("april")?></td>
					<td>350</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("may")?></td>
					<td>400</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("june")?></td>
					<td>500</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("july")?></td>
					<td>550</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("august")?></td>
					<td>550</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("september")?></td>
					<td>500</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("october")?></td>
					<td>300</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("november")?></td>
					<td>300</td>
				</tr>
				<tr>
					<td><?php echo $langs->trans("december")?></td>
					<td>300</td>
				</tr>
			</table>
		</div>
<?php
 	
	include "connect.php";
	if(!$error){
			
		$query = "SELECT * FROM reservations WHERE owner='katy';" or die("Error in the consult.." . mysqli_error($con));
		//execute the query.
		$result = mysqli_query($con, $query);
		
		$paramDate = ",";
		while($row = mysqli_fetch_row($result)){
			$paramDate .= $row[1].',';
		}	
	}
?>
	<div id="calendarKaty" class="calendar left divDispo">
	
	<h1>Disponibilités</h1>

	<script type="text/javascript" charset="utf-8">

		calendarkaty = new Kalendae({
			attachTo:document.getElementById("calendarKaty"),
			months:5,
			mode:'multiple',
			blackout: function (date) {
				return true;
			}
		});

		<?php if(isset($paramDate)){?>
					
			datestoselect = <?php echo "'.$paramDate.'"?>;
			datesarray = datestoselect.split(",");
			
			Array.prototype.unset = function(val){
				var index = this.indexOf(val);
				if(index > -1){
					this.splice(index,1);
				}
			}
			datesarray.unset(".");
			datesarray.unset(".");
			for(i=0;i<datesarray.length;i++){
				span = getElementsByAttribute('data-date',datesarray[i]);
				for(j=0;j<span.length;j++){
					span[j].className = " day-selected";
				}
				//getElementsByAttribute('data-date',datesarray[i])[0].className += " day-selected";
			}
			//calendarkaty.setSelected(datestoselect);
		<?php }?>

	</script>
	
	</div>	
		
	</div>
	
	
	<script type="text/javascript">
		$('#photos').galleryView({
			panel_width: 600,
			panel_height: 450,
		    frame_width: 150,
		    frame_height: 70,
		    show_captions: true,
		    show_filmstrip_nav: true
		});
	</script>


<?php 
	include "footer.php";
?>