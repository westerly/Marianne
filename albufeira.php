<?php 
	include "header.php";
?>

<!--  Carousel - consult the Twitter Bootstrap docs at
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
      
<h1 class="titleMenu"> <?php echo $langs->trans("Albufeira"); ?></h1>


	<div id="boxRound">
		<div class="mySpan8 left">
			<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="img/carouselAccueilPics1.jpg" alt="" />
			      <div class="carousel-caption">
			        <p>Caption text here</p>
			      </div>
			    </div>
			    <div class="item">
			      <img src="img/carouselAccueilPics2.jpg" alt="" />
			      <div class="carousel-caption">
			        <p>Caption text here</p>
			      </div>
			    </div>
			    <div class="item">
			      <img src="img/carouselAccueilPics3.jpg" alt="" />
			      <div class="carousel-caption">
			        <p>Caption text here</p>
			      </div>
			    </div>
			  </div><!-- /.carousel-inner -->
			  <!--  Next and Previous controls below
			        href values must reference the id for this carousel -->
			<!--     <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a> -->
			<!--     <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a> -->
			</div><!-- /.carousel -->
		</div>
	
	
		<div class='mySpan7 ml20 left txt mBottom20'>
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
  $(document).ready(function(){
	  $('.carousel').carousel({
	      interval: 3000 // Permet de parmaétrer l'intervalle de défilement des photos du carousel
	    });
  });
 </script>




<?php 
	
	include "footer.php";
?>