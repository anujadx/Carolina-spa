<?php
$title='Contact';
  include 'templates/header.php';
  include 'templates/navigation.php';

?>

<div class="container  pt-4">
	<div class="row no-gutters">
		<div class="col-12 hero">
			<img src="img/contact_us.jpg" class="img-fluid ">
			<h2 class="d-none d-md-block text-uppercase text-center">Contact Us</h2>
			
		</div>
	</div>
</div>

<div class="container py-4">
	<div class="row">
		<main class=" col-lg-10 offset-lg-1 main-content  ">
			<h2 class="d-md-none d-block text-uppercase text-center">Contact Us</h2>
			<form id="contact_form" action="send.php" method="post" class="p-5 mt-4 contact-form">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
					<small class="form-text text-muted"></small>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" id="email" placeholder="Your Email" >
				</div>
				<div class="form-group">
					<label for="massege">Message</label>
					<textarea class="form-control" name="message" id="message" rows="6"></textarea>
				</div>
				<input type="submit" id="submit" class="btn btn-primary" name="submit" value="Submit">
				
			</form>
			
				
		</main>
	</div>
</div>





 <?php
  include 'templates/footer.php';
?>