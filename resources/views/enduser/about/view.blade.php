<x-layout>
   <!-- Header Start -->
   <div class="container-fluid bg-breadcrumb py-5">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">About Us</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">About Us</li>
        </ol>    
    </div>
</div>
<!-- Header End -->


<!-- About Start -->
<div class="container-fluid about py-5">
  <div class="container py-5">
      <div class="row g-5 align-items-center">
          <div class="col-lg-5">
              <div class="video">
                  <img src="/assets/img/about-1.jpg" class="img-fluid rounded" alt="">
                  <div class="position-absolute rounded border-5 border-top border-start border-white" style="bottom: 0; right: 0;;">
                      <img src="/assets/img/about-2.jpg" class="img-fluid rounded" alt="">
                  </div>
                  <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                      <span></span>
                  </button>
              </div>
          </div>
          <div class="col-lg-7">
              <p class="fs-4 text-uppercase text-primary">About Us</p>
              <h1 class="display-4 mb-4">Your Best Spa, Beauty & Skin Care Center</h1>
              <p class="mb-4">Ayu, the owner of MelyaDewi Spa, is originally from Bali and has studied traditional skincare and massage techniques as far back as Turkey. Her experience has led to the creation of spa services that combine Balinese tranquility with modern therapeutic touches.                
              </p>
              <div class="row g-4">
                  <div class="col-md-6">
                      <div class="d-flex align-items-center">
                          <i class="fab fa-gitkraken fa-3x text-primary"></i>
                          <div class="ms-4">
                              <h5 class="mb-2">Special Offers – Spa & Beauty Treatments</h5>
                              <p class="mb-0">Enjoy a range of body and facial treatments designed for deep relaxation, healthier skin, and noticeable results.</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="d-flex align-items-center">
                          <i class="fas fa-gift fa-3x text-primary"></i>
                          <div class="ms-4">
                              <h5 class="mb-2">Special Offers</h5>
                              <p class="mb-0">Get monthly promotions for various spa services, from facials, body massages, to couple packages.</p>
                          </div>
                      </div>
                  </div>
              </div>
              <p class="my-4">Now back in Bali with her family, Ayu opened MelyaDewi Spa to share her expertise and provide a warm and personal spa experience,
              </p>
              <p class="mb-4">Self-care is a form of self-appreciation. We're here to help you feel calmer, healthier, and more confident.
              </p>
              <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Explore More</a>
          </div> 
      </div>
  </div>
</div>
<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

</x-layout>