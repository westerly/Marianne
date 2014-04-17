<?php 
	include "header.php";
?>

<!--  Carousel - consult the Twitter Bootstrap docs at
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
      
<h1 class="titleMenu"> <?php echo $langs->trans("Albufeira"); ?></h1>


	<div id="boxRound" class="sizeAlbufeira">
		<div class="mySpan85 left">
			<div id="photos" class="galleryview"> 
				<ul> 
				<li><img src="img/Albufeira/3425.jpg" /></li> 
				<li><img src="img/Albufeira/3434.jpg" /></li> 
				<li><img src="img/Albufeira/3435.jpg" /></li>
				<li><img src="img/Albufeira/3436.jpg" /></li>
				<li><img src="img/Albufeira/3437.jpg" /></li>
				</ul>  
			</div> 
		</div>
	
	
		<div class='mySpan72 textAlbufeira txt'>
		<?php 
			echo $langs->trans("albufeiraTxtPart1");
		?>
		</div>
		<div class='mySpan12 ml20 txt'>
		<?php 
			echo $langs->trans("albufeiraTxtPart2");
		?>
		</div>
		
	</div>



<script>

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