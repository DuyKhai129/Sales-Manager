
	<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php
				$getLastestDell = $product->getLastestDell();
				if($getLastestDell){
					while($resultdell = $getLastestDell->fetch_assoc()){
				 ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $result['productId'] ?>"> <img src="admin/uploads/<?php echo $resultdell['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>DELL</h2>
						<p><?php echo $resultdell['productName'] ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $resultdell['productId']  ?>">Chi tiết</a></span></div>
				   </div>
			   </div>	
			   	 <?php
			}}
			    ?>	
			    <?php
				$getLastestapple = $product->getLastestApple();
				if($getLastestapple){
					while($resultapple = $getLastestapple->fetch_assoc()){
				 ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php?proid=<?php echo $result['productId'] ?>"><img src="admin/uploads/<?php echo $resultapple['image'] ?>" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Apple</h2>
						  <p><?php echo $resultapple['productName'] ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $resultapple['productId']  ?>">Chi tiết</a></span></div>
					</div>
				</div>
						   <?php
			}}
			    ?>
			</div>
			<div class="section group">
				<?php
				$getLastestklipsch = $product->getLastestKlipsch();
				if($getLastestklipsch){
					while($resultsn = $getLastestklipsch->fetch_assoc()){
				 ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proid=<?php echo $result['productId'] ?>"> <img src="admin/uploads/<?php echo $resultsn['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Klipsch</h2>
						 <p><?php echo $resultsn['productName'] ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $resultsn['productId']  ?>">Chi tiết</a></span></div>
				   </div>
			   </div>
			    <?php
			}}
			    ?>			
			    <?php
				$getLastestsamsung = $product->getLastestSamsung();
				if($getLastestsamsung){
					while($resultss = $getLastestsamsung->fetch_assoc()){
				 ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php?proid=<?php echo $result['productId'] ?>"><img src="admin/uploads/<?php echo $resultss['image'] ?>" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Samsung</h2>
						  <p><?php echo $resultss['productName'] ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $resultss['productId']  ?>">Chi tiết</a></span></div>
					</div>
				</div>
				 <?php
			}}
			    ?>	
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<?php
						$get_slider = $product->show_slider();
						if($get_slider){
							while($result_slider = $get_slider->fetch_assoc()){

						 ?>
						<li><img src="admin/uploads/<?php echo $result_slider['slider_image'] ?>" alt="<?php echo $result_slider['sliderName'] ?>"/></li>
						<?php
							}
						}

						 ?>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>	