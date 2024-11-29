<!DOCTYPE html>
<html>
<?php
  $title='beeline';
  require 'screen/partials/header.php';
 
  $contactSelectQuery = 'select * from contact where status = 1';
  $contactArray = select( $contactSelectQuery );
  foreach ( $contactArray as $contactRecord ) {
    $contact_id   = $contactRecord['contact_id'];}

  
  $socialSelectQuery = 'select * from socialmedia where status = 1';
  $socialArray = select( $socialSelectQuery );
  foreach ( $socialArray as $socialRecord ) {
    $social_id   = $socialRecord['social_id'];}
      
?>
<body>
  <?php
    require 'top_bar.php';
    require 'screen/partials/navbar.php';
    require 'screen/partials/menu.php';
  
  ?>
  
  <main id="main">
    <?php
      require 'about.php';
      require 'service.php';
      require 'contact.php';
      require 'back_to_top.php';
    ?>
 
  </main><!-- End #main -->
<?php
require 'screen/pages/footer.php';
require 'screen/partials/script.php';
?>
</body>

</html>