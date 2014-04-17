<?php 
	include "header.php";
?>

<!--  Carousel - consult the Twitter Bootstrap docs at
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
      
<h1 class="titleMenu"> <?php echo $langs->trans("accueil"); ?></h1>


	<div id="boxRound">
		<div class="mySpan7 left">
			<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
			  <div class="carousel-inner">
			    <div class="item active">
			      <img src="img/3402.jpg" alt="" />  
			    </div>
			    <div class="item">
			      <img src="img/3386.jpg" alt="" />
			    </div>
			    <div class="item">
			      <img src="img/3384.jpg" alt="" />
			    </div>
				<div class="item">
			      <img src="img/3392.jpg" alt="" />
			    </div>
				<div class="item">
			      <img src="img/3406.jpg" alt="" />
			    </div>
			  </div><!-- /.carousel-inner -->
			  <!--  Next and Previous controls below
			        href values must reference the id for this carousel -->
			<!--     <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a> -->
			<!--     <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a> -->
			</div><!-- /.carousel -->
		</div>
	
	
		<div class='mySpan78 txtAccueilNextToPhotos txt'>
		<?php 
			echo $langs->trans("accueilTxtPart1");
		?>
		</div>
		<div class='mySpan12 ml20 txt left'>
		<?php 
			echo $langs->trans("accueilTxtPart2");
		?>
		</div>
		
		<!--<iframe class="map" width="80%" height="50%" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Rua+Padre+Semedo+de+Azevedo,n%C2%B034+8200-167+Albufeira++Portugal&amp;aq=&amp;sll=43.601659,1.448884&amp;sspn=0.018398,0.039825&amp;ie=UTF8&amp;hq=&amp;hnear=Rua+Padre+Semedo+de+Azevedo,+Portugal&amp;ll=37.088351,-8.254444&amp;spn=0.005067,0.009956&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
		-->
		
		<iframe
		  width="70%"
		  height="200px"
		  frameborder="0" style="border:0;display:block;margin:0 auto"
		  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAX31LZS0JgrcK2X-hSu4pUSx71rTTuYBk
			&q=34+Rua+Padre+Semedo+de+Azevedo,Albufeira+Portugal">
		</iframe>
		<br />	
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