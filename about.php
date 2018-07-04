<?php
$title='About us';
  include 'templates/header.php';
  include 'templates/navigation.php';

?>

<div class="container  pt-4">
	<div class="row no-gutters">
		<div class="col-12 hero">
			<img src="img/about_us.jpg" class="img-fluid ">
			<h2 class="text-uppercase d-none d-md-block">About us</h2>
			
		</div>
	</div>
</div>

<div class="container py-4">
	<div class="row">
		<div class="col-lg-8 main-content">
			<main>
				<h2 class="d-md-none text-uppercase text-center">About us</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor</p>
				<p> in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor</p>
				<div class="facilities-gallery">
					<h2 class="text-center p-4 text-uppercase"> <span class="text-lowercase">Checkout our</span><br>Facilities</h2	>
					<a href="#" data-target="#image_1" data-toggle="modal">
						<img src="img/gallery_thumb_01.jpg" class="img-fluid img-thumbnail rounded px-2">
					</a>
					<a href="#" data-target="#image_2" data-toggle="modal">
						<img src="img/gallery_thumb_02.jpg" class="img-fluid rounded img-thumbnail px-2">
					</a>
					<a href="#" data-target="#image_3" data-toggle="modal">
						<img src="img/gallery_thumb_03.jpg" class="img-fluid rounded img-thumbnail px-2">
					</a>
				
					<div class="modal fade" id="image_1" tabindex="-1" role="dialog" aria-labelledby="image_1" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="img/gallery_large_01.jpg" class="img-fluid">
								</div><!--modal body-->
							</div><!--modal content-->
						</div><!--modal dialog-->
					</div><!--modal fade-->

					<div class="modal fade" id="image_2" tabindex="-1" role="dialog" aria-labelledby="image_1" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="img/gallery_large_02.jpg" class="img-fluid">
								</div><!--modal body-->
							</div><!--modal content-->
						</div><!--modal dialog-->
					</div><!--modal fade-->

					<div class="modal fade" id="image_3" tabindex="-1" role="dialog" aria-labelledby="image_1" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-body">
									<img src="img/gallery_large_03.jpg" class="img-fluid">
								</div><!--modal body-->
							</div><!--modal content-->
						</div><!--modal dialog-->
					</div><!--modal fade-->
				</div><!--fac gallery-->
			</main>
			
		</div>
			<aside class="col-lg-4">
				<div class="sidebar hours px-3 py-3">
				 <?php
					  include 'templates/business_hours.php';

					?>
				</div>
			</aside>
	</div>
</div>


<?php
  include 'templates/footer.php';
?>