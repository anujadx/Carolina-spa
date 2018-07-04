<?php

$id=$_GET ['product'];
if(filter_var($id,FILTER_VALIDATE_INT) === false){
	die("NO Valid ID");
}
	 try{
              require_once'inc/db.php';

              $sql='SELECT `id`,`name`,`image_thumb`,`short_description`,`price` FROM `products` WHERE id = '.$id.' LIMIT 1';
              $result=$db->query($sql);

            }catch(Exception $e){
              $error=$e->getMassege();
            }

            $rows=$result->num_rows;
            if(!$rows){
              echo " No Results Found";
            }else{
              while($Product=$result->fetch_assoc()) { 


 


$title=$Product['name'];
  include 'templates/header.php';
  include 'templates/navigation.php';

?>

<div class="container  pt-4">
	<div class="row no-gutters">
		<div class="col-12 hero">
			<img src="img/<?php echo $Product['image_full']; ?>" class="img-fluid ">
			<h2 class="d-none d-md-block text-uppercase text-center"><?php echo $Product['name']; ?></h2>
		</div>	
	</div>
</div>
<div class="container py-3">
	<div class="row">
		<div class="col-lg-8 main-content">
			<main class="col-12 main-content">
				<h2 class="d-md-none text-uppercase text-center"><?php echo $Product['name']; ?></h2>
				<p><?php echo $Product['description']; ?></p>
			</main>
		</div>
			<aside class="col-lg-4 pt-2 pt-lg-0 prod_discription">
				<h3 class="text-center text-uppercase mt-3"><?php echo $Product['short_description']; ?></h3>
				<p class="text-center p-3 lead"><?php echo $Product['short_description']; ?></p>

				<h3 class="text-center text-uppercase mt-2">price</h3>
				<p class="text-center p-1 lead price display-4">$<?php echo $Product['price']; ?></p>
				
				
			</aside>
	</div>
</div>






 <?php
		}//if
	}//while

	$db->close();
  	include 'templates/footer.php';
?>