<?php
  $title='Home';
    include 'templates/header.php';
    include 'templates/navigation.php';

?>
 

    <!-- Add Your HTML here -->
   
    
      
      <div class="container">
        <div id="main-slider" class="carousel slide  mt-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
            
          </ol><!--indicators-->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="img/slide_01.jpg" class="d-block img-fluid" alt="car1">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-uppercase">Brand new Facilities</h3>
                
              </div>
            </div><!--carousel item-->
            <div class="carousel-item ">
              <img src="img/slide_02.jpg" class="d-block img-fluid" alt="car1">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-uppercase">Learn about more our Facilities</h3>
                
              </div>
            </div><!--carousel item-->
            <div class="carousel-item ">
              <img src="img/slide_03.jpg" class="d-block img-fluid" alt="car1">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-uppercase">New website 2 for 1 in all services</h3>
                
              </div>
            </div><!--carousel item-->
            

            
          </div><!--carousel inner-->
          <a href="#main-slider" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
          <a href="#main-slider" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>

        </div>

      </div><!--End of container -->

      <section>
        <div class="new-website py-5">
          <h2 class=" text-center text-uppercase"><span class="text-lowercase">Welcome to our New</span><br> Website</h2> 
          <p class=" text-center mt-4">Feel like new with our massages and professional <br>Therapists</p>
        </div>
      </section>

      <div class="container pb-5"><!--start of image cards -->
        <div class="row">
          <div class="col-md-4 text-center mb-md-0 mb-4">
            <div class="image-links ">
              <img src="img/service_01.jpg" class="img-fluid">
              <div class="row no-gutters">
                <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-2 ">
                  <h2 class=" text-center text-uppercase"><span class="text-lowercase py-0">Learn more</span><br>About us</h2>
                  <a href="#" class="btn btn-success btn-block text-uppercase py-3">Read More</a>
              </div>
            </div>
          </div>
        </div>
          <div class="col-md-4 text-center mb-md-0 mb-4">
            <div class="image-links">
              <img src="img/service_02.jpg" class="img-fluid">
              <div class="row ">
                <div class="col-8 offset-2 col-md-10 offset-md-1  image-info pt-2 ">
                  <h2 class=" text-center text-uppercase"><span class="text-lowercase">About Our</span><br>Services</h2>
                  <a href="#" class="btn btn-success btn-block text-uppercase py-3">Read More</a>
              </div>
            </div>
          </div>
        </div>
          <div class="col-md-4 text-center mb-md-0 mb-4">
            <div class="image-links">
              <img src="img/service_03.jpg" class="img-fluid">
              <div class="row ">
                <div class="col-8 offset-2 col-md-10 offset-md-1  image-info pt-2 ">
                  <h2 class=" text-center text-uppercase"><span class="text-lowercase">Visit Our</span><br> Store</h2>
                  <a href="#" class="btn btn-success btn-block  text-uppercase py-3">Read More</a>
              </div>
            </div>
          </div>
  
        </div> 
      </div><!--End of image cards -->

      <div class="business-hours">
        <div class="container">
          <div class="row mt-4">
            <div class="col-md-6">
              <?php 
                include 'templates/business_hours.php';
              ?>
            </div>     
             <div class="col-md-6 bg-hours">
             
             </div>  
          </div>
        </div>
      </div><!--End of business hours section -->
      
      <div class="container products py-2">
        <h2 class="text-center text-uppercase"><span class="text-lowercase">Checkout our</span><br> Products</h2>
       
        <div class="row py-2">

          <?php
            
            try{
              require_once'inc/db.php';

              $sql='SELECT `id`,`name`,`image_thumb`,`short_description`,`price` FROM `products` LIMIT 4';
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
                      <img src="img/<?php echo $Products['image_thumb']; ?>"class="img-fluid card-img-top">
                      <div class="card-block">
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
          
        
         
        </div><!-- row end-->
      </div><!--End of prod cate  -->

      
<?php
  include 'templates/appointment.php';
?>

     
 <?php
  include 'templates/footer.php';
?>

     
    

   