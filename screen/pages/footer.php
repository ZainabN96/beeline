  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>BEELINE</h3>
              <p>
                <?php echo $contactRecord['address']; ?><br>
                United Arab Emirates<br><br>
                <strong>Phone: </strong> <?php echo $contactRecord['whatsApp'] ; ?><br>
                <strong>Email: </strong> <?php echo $contactRecord['email'] ; ?><br>
              </p>
              <div class="social-links mt-3">
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
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Picking & Packing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Delivery Return</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Cash On Delivery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dropship</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inventory Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">International</a></li>
               <li><i class="bx bx-chevron-right"></i> <a href="#">Last Mile Delivery</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <p>BEELINE BE Quick-Courier Service</p>
        &copy; Copyright <strong><span>2021</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->