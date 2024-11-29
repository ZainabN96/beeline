<!-- ======= Top Bar ======= -->

  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com"><?php echo $contactRecord['email']; ?></a>
        <i class="bi bi-phone-fill phone-icon"></i> <?php echo $contactRecord['whatsApp']; ?>
      </div>
      <div class="social-links d-none d-md-block">
        <?php  if($socialRecord['facebook'] != '') {?>
          <a href="<?php echo $socialRecord['facebook'];?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <?php }?>
        <?php  if($socialRecord['instagram'] != '') {?>
          <a href="<?php echo $socialRecord['instagram'];?>" class="instagram"><i class="bx bxl-instagram"></i></a>
        <?php }?>
        <?php  if($socialRecord['skype'] != '') {?>
          <a href="<?php echo $socialRecord['skype'];?>" class="skype"><i class="bx bxl-skype"></i></a>
        <?php  }?>
        <?php  if($socialRecord['twitter'] != '') {?>
          <a href="<?php echo $socialRecord['twitter'];?>" class="twitter"><i class="bx bxl-twitter"></i></a>
        <?php }?>
        <?php  if($socialRecord['linkedIn'] != '') {?>
          <a href="<?php echo $socialRecord['linkedIn'];?>" class="linkedIn"><i class="bx bxl-linkedin"></i></a>
        <?php }?>
        <?php  if($socialRecord['youtube'] != '') {?>
          <a href="<?php echo $socialRecord['youtube'];?>" class="youtube"><i class="bx bxl-youtube"></i></a>
        <?php }?>
      </div>
    </div>
  </section>
