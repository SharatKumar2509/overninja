<!-- Testimonials slider -->
<section class="bg-secondary py-4">
  <div class="container py-2 py-md-4 py-lg-5">
    <h2 class="h1 text-center pb-3 pb-lg-0 mb-4 mb-lg-5">What Our Attendees Say</h2>
    <div class="position-relative px-sm-5 mx-auto" style="max-width: 976px;">

      <!-- Prev button -->
      <button type="button" id="prev" class="btn btn-prev btn-icon btn-sm position-absolute top-50 translate-middle-y start-0 d-none d-sm-inline-flex mt-n4">
        <i class="bx bx-chevron-left"></i>
      </button>

      <!-- Next button -->
      <button type="button" id="next" class="btn btn-next btn-icon btn-sm position-absolute top-50 translate-middle-y end-0 d-none d-sm-inline-flex mt-n4">
        <i class="bx bx-chevron-right"></i>
      </button>

      <!-- Slider -->
      <div class="swiper swiper-nav-onhover pt-1 mx-md-2" data-swiper-options='{
        "spaceBetween": 12,
        "loop": true,
        "pagination": {
          "el": ".swiper-pagination",
          "clickable": true
        },
        "navigation": {
          "prevEl": "#prev",
          "nextEl": "#next"
        }
      }'>
        <div class="swiper-wrapper pt-4 pb-3">

    <?php
      foreach ($testimonials as $item) {
    ?>

          <!-- Item -->
          <div class="swiper-slide h-auto px-2">
            <figure class="card h-100 position-relative border-0 shadow-sm py-3 p-0 p-xxl-4 my-0">
              <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4 ms-xxl-5">
                <i class="bx bxs-quote-left"></i>
              </span>
              <blockquote class="card-body mt-2 mb-2">
                <p class="fs-lg mb-0"><?= $item['review'] ?></p>
              </blockquote>
              <figcaption class="card-footer d-flex align-items-center border-0 pt-0 mt-n2 mt-lg-0">
                <div>
                  <h6 class="fw-semibold lh-base mb-0"><?= $item['fullname'] ?></h6>
                  <span class="fs-sm text-muted"><?= $item['designation'].", ".$item['company'] ?></span>
                </div>
              </figcaption>
            </figure>
          </div>

      <?php
        }
      ?>

        <!-- Pagination -->
        <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
      </div>
    </div>
  </div>
</section>