    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>CONTACT</h2>
          
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?php echo $contactRecord['address']; ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><?php echo $contactRecord['email']; ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <a href="https://wa.me/<?php echo $contactRecord['whatsApp']; ?>" class="whatsapp_float" target="_blank"><i class="bx bxl-whatsapp"></i></a>
              <h3>WhatsApp</h3>
              <p><?php echo $contactRecord['whatsApp']; ?></p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 mb-4 mb-lg-0">
            <iframe class="mb-4 mb-lg-0" src="<?php echo $contactRecord['location']; ?>" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <div class="col-md-9 mb-md-0 mb-5">
              <?php show_msg(); ?>
              <form id="contact-form" action="screen/configuration/contact-us.php" method="post">
                <div class="row">
                  <div class="col-md-12">
                    <label for="name">Name :</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your name.." />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Write your Email here" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
            
                    <label for="message">Message :</label>
                    <textarea class="form-control" id="message" name="message" placeholder="Write something.." rows="8"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->