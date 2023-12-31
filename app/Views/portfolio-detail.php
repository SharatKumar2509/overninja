<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>


<!-- Hero -->
<section class="dark-mode position-relative pt-5" style="background-color: #151922;">

  <!-- Content -->
  <div class="container position-relative zindex-2 pt-5 pb-2 pb-md-0">
    <div class="row justify-content-center pt-3 mt-3">
      <div class="col-md-8 col-sm-10 text-center">
        <h1 class="mb-4">Case Study</h1>
        <p class="fs-lg pb-3 mb-3">Dive into our diverse range of case studies that highlight our expertise and commitment to finding effective strategies. Learn how we turn insights into action.</p>
      </div>
    </div>
  </div>

  <!-- Bottom shape -->
  <div class="d-flex position-absolute top-100 start-0 w-100 overflow-hidden mt-n5" style="color: #151922;">
    <div class="position-relative start-50 translate-middle-x flex-shrink-0 mt-n5 mt-md-n3 mt-lg-n1" style="width: 3788px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="3788" height="144" viewBox="0 0 3788 144"><path fill="currentColor" d="M0,0h3788.7c-525,90.2-1181.7,143.9-1894.3,143.9S525,90.2,0,0z"/></svg>
    </div>
  </div>
</section>


<!-- Page title -->
<section class="container pb-4 mt-5 pt-5 mb-2 mb-lg-3">
  <h1 class="mt-3 mt-md-5 pt-4"><?= $portfolio['client'] ?></h1>
  <p><?= $portfolio['introduction'] ?></p>
</section>


<!-- Hero image (Parallax) -->
<section class="jarallax" data-jarallax data-speed="0.4">
  <div class="jarallax-img" style="background-image: url('/uploads/portfolio/<?= $portfolio['project_image'] ?>');"></div>
  <div class="d-none d-xxl-block" style="height: 800px;"></div>
  <div class="d-none d-lg-block d-xxl-none" style="height: 600px;"></div>
  <div class="d-none d-md-block d-lg-none" style="height: 450px;"></div>
  <div class="d-md-none" style="height: 400px;"></div>
</section>


<!-- About project -->
<section class="container py-5 my-1 my-md-4 my-lg-5">
  <div class="row">
    <div class="col-lg-7 mb-4 mb-lg-0">
      <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
        <h2 class="h1 mb-4">Client Requirement</h2>
        <p class="fs-lg mb-0"><?= $portfolio['requirement'] ?></p>
      </div>
    </div>
    <div class="col-lg-5 col-xl-4 offset-xl-1 border-start-lg">
      <div class="ps-lg-4 ms-lg-3">
        <h3 class="h5 d-flex align-items-center">
          <i class="bx bx-help-circle text-primary fs-4 me-2"></i>
          Challenge
        </h3>
        <p class="pb-4 mb-0 mb-lg-3"><?= $portfolio['challenge'] ?></p>
        <h3 class="h5 d-flex align-items-center">
          <i class="bx bx-bulb text-primary fs-4 me-2"></i>
          Solution
        </h3>
        <p class="mb-0"><?= $portfolio['solution'] ?></p>
      </div>
    </div>
  </div>
</section>


<!-- Image grid (Parallax) -->
<section class="container position-relative pt-1 pt-md-3">
  <h2 class="h1 text-center mb-5">More Screens</h2>
  <div class="row align-items-start">
    <div class="rellax col-lg-5 col-sm-6 mb-4 mb-sm-0" data-rellax-percentage="0.5" data-rellax-speed="-0.5" data-disable-parallax-down="sm">
      <img src="/assets/img/portfolio/single/01.jpg" class="rounded-3" width="526" alt="Image">
    </div>
    <div class="rellax col-lg-7 col-sm-6 d-sm-flex justify-content-end pt-sm-4 pt-lg-5 mt-md-3 mb-4 mb-sm-0" data-rellax-percentage="0.5" data-rellax-speed="-1.25" data-disable-parallax-down="sm">
      <div><img src="/assets/img/portfolio/single/03.jpg" class="rounded-3" width="416" alt="Image"></div>
    </div>
    <div class="rellax col-lg-5 col-sm-6 d-sm-flex justify-content-lg-end pt-sm-5 mt-lg-5 mb-4 mb-sm-0" data-rellax-percentage="0.5" data-rellax-speed="-1.25" data-disable-parallax-down="sm">
      <div><img src="/assets/img/portfolio/single/04.jpg" class="rounded-3" width="416" alt="Image"></div>
    </div>
    <div class="rellax col-lg-7 col-sm-6 d-sm-flex justify-content-center mt-sm-n5 mb-4 mb-sm-0" data-rellax-percentage="0.5" data-rellax-speed="-0.25" data-disable-parallax-down="sm">
      <div><img src="/assets/img/portfolio/single/05.jpg" class="d-block rounded-3 mt-xl-n5" width="526" alt="Image"></div>
    </div>
  </div>
  <div class="row position-sm-absolute top-50 start-0 translate-middle-sm-y w-100 d-flex mt-md-n5">
    <div class="rellax col-lg-5 col-sm-6 offset-sm-3 offset-lg-4 mt-sm-n5" data-rellax-percentage="0.5" data-rellax-speed="1.4" data-disable-parallax-down="sm">
      <img src="/assets/img/portfolio/single/02.jpg" class="d-block rounded-3 mt-xl-n5" width="526" alt="Image">
    </div>
  </div>
</section>


<!-- Page title + Services grid -->
<section class="bg-secondary mt-5 pt-5">

<?php

if(strlen($features)>0) {

?>

  <div class="container pb-2 pb-md-4 pb-lg-5 mb-3">
    <h1>Features</h1>
    <div class="row row-cols-1 row-cols-md-2">

<?php
  $features = explode("####", $portfolio['features']);
  $features = array_filter($features);

  foreach ($features as $feature) {
    $feature = explode("###", $feature);
?>

      <!-- Item -->
      <div class="col py-4 my-2 my-sm-3">
        <a href="services-single-v1.html" class="card card-hover h-100 border-0 shadow-sm text-decoration-none pt-3 px-sm-3 px-md-0 px-lg-3 pb-sm-3 pb-md-0 pb-lg-3 ms-xl-2">
          <div class="card-body">
            <h2 class="h4 d-inline-flex align-items-center">
              <?= $feature[0] ?>
            </h2>
            <p class="fs-sm text-body mb-0"><?= $feature[1] ?></p>
          </div>
        </a>
      </div>

<?php
  }
?>

    </div>
  </div>

<?php

}

?>

<!-- Results -->
<!-- <section class="container py-5 my-2 my-md-4 my-lg-5">
  <div class="row py-md-3">
    <div class="col-md-3 offset-lg-1">
      <h2>Results</h2>
    </div>
    <div class="col-lg-7 col-md-9">
      <p class="fs-lg pb-4 mb-2 mb-lg-3">Vitae eget in vulputate quam. Turpis habitasse egestas vitae, sed tortor, nunc. Enim, magna duis lectus mauris magna orci, nunc. Tincidunt ultrices mauris, sed quisque. Vulputate volutpat egestas facilisi morbi proin sagittis. Ipsum eleifend commodo eu, at et adipiscing. Viverra turpis sem in tincidunt viverra aliquet eleifend. Adipiscing elit, donec volutpat ante aliquet imperdiet quis hendrerit.</p>
      <div class="row row-cols-1 row-cols-sm-3 g-4">
        <div class="col">
          <h3 class="h1 mb-2">+1,200</h3>
          <p class="mb-0"><span class="fw-semibold">Requests</span> per Week</p>
        </div>
        <div class="col">
          <h3 class="h1 mb-2">+760</h3>
          <p class="mb-0"><span class="fw-semibold">New Clients</span> per Month</p>
        </div>
        <div class="col">
          <h3 class="h1 mb-2">+480</h3>
          <p class="mb-0"><span class="fw-semibold">Remote</span> Sales Experts</p>
        </div>
      </div>
    </div>
  </div>
</section> -->


  <div class="container py-2 py-md-4 py-lg-5">
    <div class="row pb-5">
      <div class="col-md-8 offset-md-2">
        <figure class="card position-relative border-0 shadow-sm py-3 p-0 p-lg-4 mt-4 mb-0 ms-xl-5">
          <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4 ms-lg-5">
            <i class="bx bxs-quote-left"></i>
          </span>
          <blockquote class="card-body mt-2 mb-0">
            <p class="fs-lg"><?= $portfolio['review'] ?></p>
          </blockquote>
          <figcaption class="card-footer border-0 d-sm-flex pt-0 mt-n3 mt-lg-0">
            <div class="d-flex align-items-center">
              <div class="ps-3 ps-md-0">
                <h5 class="fw-semibold lh-base mb-0"><?= $portfolio['reviewer'] ?></h5>
                <span class="fs-sm text-muted"><?= $portfolio['designation'] ?></span>
              </div>
            </div>
          </figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>

<?php

if(sizeof($portfolios)>0) {

?>

<!-- Related projects (Carousel on narrow screens) -->
<section class="container py-5 mb-xl-2">
  <h2 class="h1 text-center pt-2 pt-md-3 pb-4 mb-2 mb-lg-3">Explore More Projects</h2>
  <div class="swiper" data-swiper-options='{
    "slidesPerView": 1,
    "spaceBetween": 24,
    "pagination": {
      "el": ".swiper-pagination",
      "clickable": true
    },
    "breakpoints": {
      "560": {
        "slidesPerView": 2
      },
      "1000": {
        "slidesPerView": 3
      }
    }
  }'>
    <div class="swiper-wrapper">

<?php
  foreach ($portfolios as $val) {
?>

      <!-- Item -->
      <div class="swiper-slide h-auto">
        <div class="card card-portfolio">
          <div class="card-img">
            <img src="/uploads/portfolio/<?= $val['project_image'] ?>" alt="Image">
          </div>
          <div class="card-body">
            <h3 class="h4 mb-2">
              <a href="/case-study/<?= $val['id'] ?>" class="stretched-link"><?= $val['client'] ?></a>
            </h3>
            <div class="card-portfolio-meta">
              <span class="text-muted"><?= $val['service'] ?></span>
            </div>
          </div>
        </div>
      </div>

<?php
  }
?>

    </div>

    <!-- Pagination (bullets) -->
    <div class="swiper-pagination position-relative pt-sm-2 mt-4"></div>
  </div>
</section>

<?php

}

?>


<?php include('includes/connect.php'); ?>


<?= $this->endSection(); ?>