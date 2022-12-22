<?php
  include('header.php');
?>
<!-- Foundation Hero -->
<section id="foundation-hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-12">
        <p class="description">Organizations</p>
        <h1 class="title">Togather, We can Accelerate a <span>Net zero world.</span></h1>
      </div>
    </div>
  </div>
  <div class="backdrop" style="background: url(/assets/images/foundation-hero-bg.jpg) rgba(255, 255, 255, 0.2);"></div>
</section>
<!-- End of Foundation Hero -->

<!-- Clients -->
<section class="splide" id="clients" aria-labelledby="clients-slider">
  <div class="text-center">
    <h2 class="title" id="clients-slider">Powering climate programs for</h2>
    
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <div class="client"></div>
        </li>
        <li class="splide__slide">
          <div class="client"></div>
        </li>
        <li class="splide__slide">
          <div class="client"></div>
        </li>
        <li class="splide__slide">
          <div class="client"></div>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- End of Clients -->

<!-- Foundation Approach -->
<section id="foundation-approach">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center mb-4">
        <h1 class="title">Our Approach</h1>
        <p class="description">Ofsetting your carbon foorprint is a way to take control of your emissions, and commit to living sustainably.</p>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="approach">
          <div class="approach-image"></div>
          <h5 class="approach-title">Evaluating criteria</h5>
          <div class="approach-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio ipsum saepe, magni quas eius.</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="approach">
          <div class="approach-image"></div>
          <h5 class="approach-title">Protfolio approach</h5>
          <div class="approach-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio ipsum saepe, magni quas eius.</div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="approach">
          <div class="approach-image"></div>
          <h5 class="approach-title">Evaluating database</h5>
          <div class="approach-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio ipsum saepe, magni quas eius.</div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Foundation Approach -->


<!-- Organizations -->
<section class="splide" id="foundation-organizations" aria-labelledby="organizations">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-sm-12">
        <h1 class="title" id="organizations">Organizations</h1>
      </div>
      <div class="col-lg-3 col-sm-12">
        <div class="splide__arrows">
          <button class="btn btn-circle btn-white mr-3 splide-btn splide__arrow splide__arrow--prev">
              <ion-icon name="arrow-back-outline"></ion-icon>
          </button>
          <button class="btn btn-circle btn-white splide-btn splide__arrow splide__arrow--next">
              <ion-icon name="arrow-forward-outline"></ion-icon>
          </button>
        </div>
      </div>
    </div>
    
    <div class="splide__track">
      <ul class="splide__list">
        <!-- Organization -->
        <li class="splide__slide">
          <div class="organization">
            <div class="organization-header">
              <div class="organization-icon"></div>
              <h3 class="organization-title">Ocean Conservancy</h3>
            </div>
            <div class="organization-type-container">
              <span class="organization-type">CLIMATE CHANGE</span>
            </div>
            <p class="organization-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio inventore eius obcaecati.</p>
          </div>
          <div class="organization">
            <div class="organization-header">
              <div class="organization-icon"></div>
              <h3 class="organization-title">Ocean Conservancy</h3>
            </div>
            <div class="organization-type-container">
              <span class="organization-type">CLIMATE CHANGE</span>
            </div>
            <p class="organization-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio inventore eius obcaecati.</p>
          </div>
        </li>
        <!-- End Organization -->
      </ul>
    </div>
  </div>
</section>
<!-- End of Organizations -->

<?php
  include('footer.php');
?>