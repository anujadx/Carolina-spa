<?php
$title='Products';
  include 'templates/header.php';
  include 'templates/navigation.php';

?>

<div class="container  pt-4">
	<div class="row no-gutters">
		<div class="col-12 hero">
			<img src="img/store.jpg" class="img-fluid ">
			<h2 class="d-none d-md-block text-uppercase text-center">Products</h2>
			
		</div>
	</div>
</div>

<div class="container py-4">
	<div class="row">
		<main class="col-12 main-content  ">
			<h2 class="d-md-none d-block text-uppercase text-center">Products</h2>
			<div id="services" role="tablist" aria-multiselecttable="true">
				<div class="row products mt-4">
					 <?php
            
            try{
              require_once'inc/db.php';

              $sql='SELECT `id`,`name`,`image_thumb`,`short_description`,`price` FROM `products`';
              $result=$db->query($sql);

            }catch(Exception $e){
              $error=$e->getMassege();
            }

            $rows=$result->num_rows;
            if(!$rows){
              echo " No Results Found";
            }else{
              while($Products=$result->fetch_assoc()) { ?>

                 <div class="col-6 col-md-3 mb-4 mb-md-0">
                  <div class="card">
                    <a href="product.php?product=<?php echo $Products['id']; ?>">
                      <img src=img/<?php echo $Products['image_thumb']; ?> class="img-fluid card-img-top">
                      <div class="card-block"
                      <h3 class=" card-title text-uppercase text-uppercase text-center mb-0"><?php echo $Products['name']; ?></h3>
                      <p class=" card-text text-uppercase "><?php echo $Products['short_description']; ?></p>
                      <p class="price text-center mb-0"><?php echo $Products['price']; ?></p>
                      </div>
                    </a>
                  </div><!-- card end-->
                </div><!-- col end-->
                <?php
              }

            }

            
              $db->close();
              ?>
          
				</div>
			</div>
		</main>
	</div>
</div>
				
				
				
	






 <?php
  include 'templates/footer.php';
?>