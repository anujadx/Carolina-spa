<?php
$title='Services';
  include 'templates/header.php';
  include 'templates/navigation.php';

?>

<div class="container  pt-4">
	<div class="row no-gutters">
		<div class="col-12 hero">
			<img src="img/services.jpg" class="img-fluid ">
			<h2 class="d-none d-md-block text-uppercase text-center">Services</h2>
			
		</div>
	</div>
</div>

<div class="container py-4">
	<div class="row">
		<main class="col-lg-8 main-content  ">
			<h2 class="d-md-none d-block text-uppercase text-center">Services</h2>
			<div id="services" role="tablist" aria-multiselecttable="true">
				<div class="card">
					<div class="card-header" role="tab" id="service_1" >
						<h3>
							<a  data-toggle="collapse" data-parent="#services" href="#services_1desc">service 1</a>
						</h3>
						
					</div>
					<div id="services_1desc" class="collapse-show" role="tab-panel" aria-labledby="service_1">
						<div class="card-block">
							<p class="px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						</div> <!-- card block -->
					</div><!-- services_1desc -->
				</div><!-- card -->

				<div class="card">
					<div class="card-header" role="tab" id="service_2">
						<h3>
							<a class="collapsed" data-toggle="collapse" data-parent="#services" aria-expanded="false" href="#services_2desc">service 2</a>
						</h3>
						
					</div>
					<div id="services_2desc" class="collapse" role="tab-panel" aria-labledby="service_2">
						<div class="card-block">
							<p class="px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. </p>

						</div> <!-- card block -->
					</div><!-- services_1desc -->
				</div><!-- card -->

				<div class="card">
					<div class="card-header" role="tab" id="service_3">
						<h3>
							<a class="collapsed" data-toggle="collapse" data-parent="#services"aria-expanded="false" href="#services_3desc">service 3</a>
						</h3>
						
					</div>
					<div id="services_3desc" class="collapse" role="tab-panel" aria-labledby="service_3">
						<div class="card-block">
							<p class="px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. </p>

						</div> <!-- card block -->
					</div><!-- services_1desc -->
				</div><!-- card -->
				
			</div><!--services--->
		</main>
		<aside class="col-lg-4 pt-2 pt-lg-0 discount">
			<div class="p-4  ">
				 <h3 class="text-uppercase text-center  mt-4">First Time Customers</h3>
				 <p class="lead mt-4 d-block text-center ">Get 20% off in any service With this coupon</p>
				 <div class="mt-2">
					<p class="text-uppercase text-center py-3 coupon "><span class="display-4">20% OFF<br></span>in any service.</p>
				</div>
			</div>
			
		</aside>
	</div>
</div>

 <?php
  include 'templates/appointment.php';
?>





 <?php
  include 'templates/footer.php';
?>