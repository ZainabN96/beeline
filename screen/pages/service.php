  <!-- ======= Services Section ======= -->
<?php 
  $serviceQuery = 'SELECT * FROM service WHERE status = 1';

  $serviceArray = select( $serviceQuery ); 
 ?>
<section id="services" class="services">
  <div class="container">

    <div class="section-title">
      <span>Services</span>
      <h2>SERVICES</h2>
      <p>THIS IS WHAT WE CAN DO FOR YOU</p>
    </div>

    <div class="row">
      <?php
          foreach ( $serviceArray as $serviceRecord ) {
            $image_path = 'assets/img/service/' . $serviceRecord['service_image'];
            $service_id   = $serviceRecord['service_id'];
  
      ?>    
      <div class="col-xl-3 col-lg-4 col-md-6"> 
        <?php include('screen/partials/card.php'); ?>
      </div>
     <?php } ?> 
    </div>
  </div>
</section><!-- End Services Section -->