<?php
include('header.php');
?>

<!-- Contact -->
<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 info-container">
        <h1 class="title">Contact Us</h1>
        <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad molestias, minima, veniam mollitia adipisci quis ipsum possimus minus aperiam dolor dicta quibusdam exercitationem! Sit exercitationem error numquam consectetur deserunt quasi!</p>

        <div class="contact-info-container">
          <div class="info">
            <div class="info-icon">
              <ion-icon name="mail-outline"></ion-icon>
            </div>
            <div class="info-content">
              <h4 class="info-content-title">Email</h4>
              <p class="info-content-description">info@mymatur.com</p>
            </div>
          </div>
          <div class="info">
            <div class="info-icon">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>
            <div class="info-content">
              <h4 class="info-content-title">Phone</h4>
              <p class="info-content-description">+62 1404 5123 12312</p>
            </div>
          </div>
          <div class="info">
            <div class="info-icon">
              <ion-icon name="location-outline"></ion-icon>
            </div>
            <div class="info-content">
              <h4 class="info-content-title">Address</h4>
              <p class="info-content-description">32 - 44 upper Rupert Street, W12 8DY Kensington, United States</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <form class="contact-form">
          <div class="form-group">
            <input type="text" class="form-control" id="contactName" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="contactEmail" placeholder="Email Address">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" id="contactPhone" placeholder="Phone Number">
          </div>
          <div class="form-group">
            <textarea class="form-control" id="contactMessage" placeholder="Message"></textarea>
          </div>
          <div class="d-flex justify-content-end mt-4">
            <button class="btn btn-primary submit-button">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End of Contact -->

<?php 
include('footer.php');
?>