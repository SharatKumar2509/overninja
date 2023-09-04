<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>


<!-- Hero -->
<section class="dark-mode position-relative pt-5" style="background-color: #151922;">

  <!-- Content -->
  <div class="container position-relative zindex-2 pt-5 pb-2 pb-md-0">
    <div class="row justify-content-center pt-3 mt-3">
      <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 text-center">
        <h1 class="mb-4">Our Services</h1>
        <p class="fs-lg pb-3 mb-3">Have a project in mind? To request a quote contact us directly or fill out the form and let us know how we can help.</p>
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


<!-- Post title + Meta  -->
<section class="container mt-5 pt-1 pt-md-5 pt-lg-2 pb-3">
  <h1 class="mt-5 pt-5 pb-3" style="max-width: 970px;"><?= $blog['title'] ?></h1>
  <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between mb-3">
    <div class="d-flex align-items-center flex-wrap text-muted mb-md-0 mb-4">
      <div class="fs-xs border-end pe-3 me-3 mb-2">
        <span class="badge bg-faded-primary text-primary fs-base"><?= $blog['category'] ?></span>
      </div>
      <div class="fs-sm border-end pe-3 me-3 mb-2"><?= date("M d, Y", strtotime($blog['created_on'])); ?></div>
      <div class="d-flex mb-2">
        <div class="d-flex align-items-center me-3">
          <i class="bx bx-like fs-base me-1"></i>
          <span class="fs-sm"><?= $blog['likes'] ?></span>
        </div>
        <div class="d-flex align-items-center me-3">
          <i class="bx bx-comment fs-base me-1"></i>
          <span class="fs-sm"><?= $blog['comments'] ?></span>
        </div>
      </div>
    </div>
    <div class="d-flex align-items-center position-relative ps-md-3 pe-lg-5 mb-2">
      <div class="ps-3">
        <h6 class="mb-1">Author</h6>
        <div class="fw-semibold text-primary stretched-link"><?= $blog['author'] ?></div>
      </div>
    </div>
  </div>
</section>


<!-- Post image (parallax) -->
<div class="jarallax mb-lg-5 mb-4" data-jarallax data-speed="0.35" style="height: 36.45vw; min-height: 300px;">
  <div class="jarallax-img" style="background-image: url('/uploads/<?= $blog['blog_image'] ?>');"></div>
</div>


<!-- Post content + Sharing -->
<section class="container mb-5 pt-4 pb-2 py-mg-4">
  <div class="row gy-4">

    <!-- Content -->
    <div class="col-lg-9">
      <?= $blog['content'] ?>
    </div>

    <!-- Sharing -->
    <div class="col-lg-3 position-relative">
      <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 105px !important;">
        <h6>Share this post:</h6>
        <div class="mb-4 pb-lg-3">
          <a href="#" class="btn btn-icon btn-secondary btn-linkedin me-2 mb-2">
            <i class="bx bxl-linkedin"></i>
          </a>
          <a href="#" class="btn btn-icon btn-secondary btn-facebook me-2 mb-2">
            <i class="bx bxl-facebook"></i>
          </a>
          <a href="#" class="btn btn-icon btn-secondary btn-twitter me-2 mb-2">
            <i class="bx bxl-twitter"></i>
          </a>
          <a href="#" class="btn btn-icon btn-secondary btn-instagram me-2 mb-2">
            <i class="bx bxl-instagram"></i>
          </a>
        </div>
        <button class="btn btn-lg btn-outline-secondary">
          <i class="bx bx-like me-2 lead"></i>
          Like it
          <span class="badge bg-primary shadow-primary mt-n1 ms-3"><?= $blog['likes'] ?></span>
        </button>
      </div>
    </div>
  </div>
</section>


<!-- Post comments -->
<section class="container mb-4 pt-lg-4 pb-lg-3">
  <h2 class="h1 text-center text-sm-start"><?= $blog['comments'] ?> comments</h2>
  <div class="row">

    <!-- Comments -->
    <div class="col-lg-9">

      <!-- Comment -->
      <div class="py-4">
        <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
          <div class="me-3">
            <h6 class="fw-semibold mb-0">Cameron Williamson</h6>
            <span class="fs-sm text-muted">March 24 at 8:20
            <!-- date("M d, Y", strtotime("2023-09-25 12:00:00")) . " at " . date("h:i a", strtotime("2023-09-25 00:00:00")); -->
          </span>
          </div>
        </div>
        <p class="mb-0">Mattis id ut sed arcu metus elit faucibus condimentum aliquam. Nam adipiscing diam et suspendisse. Sagittis massa maecenas laoreet nulla amet nunc sagittis, pulvinar neque. Duis imperdiet ipsum suspendisse massa lectus habitasse. Id ante volutpat hendrerit augue parturient eget. Ac vitae posuere leo morbi vitae at hac lectus. Nibh neque quam quis amet mattis sit. Faucibus risus at sit tempus ut.</p>
      </div>

    </div>
  </div>
</section>


<!-- Comment form + Subscription -->
<section class="container mb-4 pb-2 mb-md-5 pb-lg-5">
  <div class="row gy-5">

    <!-- Comment form -->
    <div class="col-lg-9">
      <div class="card p-md-5 p-4 border-0 bg-secondary">
        <div class="card-body w-100 mx-auto px-0" style="max-width: 746px;">
          <h2 class="mb-4 pb-3">Leave a Comment</h2>
          <form class="row gy-4 needs-validation" novalidate>
            <div class="col-sm-6 col-12">
              <label for="c-name" class="form-label fs-base">Name</label>
              <input id="c-name" type="text" class="form-control form-control-lg" required>
              <span class="invalid-tooltip">Please, enter your name.</span>
            </div>
            <div class="col-sm-6 col-12">
              <label for="c-email" class="form-label fs-base">Email</label>
              <input id="c-email" type="email" class="form-control form-control-lg" required>
              <span class="invalid-tooltip">Please, provide a valid email address.</span>
            </div>
            <div class="col-12">
              <label for="c-comment" class="form-label fs-base">Comment</label>
              <textarea id="c-comment" class="form-control form-control-lg" rows="3" placeholder="Type your comment here..." required></textarea>
              <span class="invalid-tooltip">Please, enter your comment.</span>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-lg btn-primary w-sm-auto w-100 mt-2">Post comment</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Subscription form + Sharing -->
    <div class="col-lg-3 position-relative">
      <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 70px !important;">
        <div class="row gy-lg-5 gy-4 justify-content-center text-lg-start text-center">

          <!-- Subscription form -->
          <div class="col-lg-12 col-sm-7 col-11">
            <h6 class="fs-lg">Enjoy this post? Join our newsletter</h6>
            <form class="needs-validation" novalidate>
              <div class="input-group mb-3">
                <i class="bx bx-envelope position-absolute start-0 top-50 translate-middle-y zindex-5 ms-3 text-muted d-lg-inline-block d-none"></i>
                <input type="email" placeholder="Your Email" class="form-control ps-lg-5 rounded text-lg-start text-center" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Subscribe</button>
            </form>
          </div>

          <!-- Sharing -->
          <div class="col-lg-12 col-sm-7 col-11">
            <h6 class="fs-lg">Don’t forget to share it</h6>
            <div class="mb-4 pb-lg-3">
              <a href="#" class="btn btn-icon btn-secondary btn-linkedin me-2 mb-2">
                <i class="bx bxl-linkedin"></i>
              </a>
              <a href="#" class="btn btn-icon btn-secondary btn-facebook me-2 mb-2">
                <i class="bx bxl-facebook"></i>
              </a>
              <a href="#" class="btn btn-icon btn-secondary btn-twitter me-2 mb-2">
                <i class="bx bxl-twitter"></i>
              </a>
              <a href="#" class="btn btn-icon btn-secondary btn-instagram me-2 mb-2">
                <i class="bx bxl-instagram"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

if(sizeof($moreBlogs)>0) {

?>

<!-- Related articles (Slider below lg breakpoint) -->
<section class="container mb-5 pt-md-4">
  <div class="d-flex flex-sm-row flex-column align-items-center justify-content-between mb-4 pb-1 pb-md-3">
    <h2 class="h1 mb-sm-0">More Blogs</h2>
    <a href="/blogs" class="btn btn-lg btn-outline-primary ms-4">
      View All
      <i class="bx bx-right-arrow-alt ms-1 me-n1 lh-1 lead"></i>
    </a>
  </div>

  <div class="swiper mx-n2" data-swiper-options='{
    "slidesPerView": 1,
    "spaceBetween": 8,
    "pagination": {
      "el": ".swiper-pagination",
      "clickable": true
    },
    "breakpoints": {
      "500": {
        "slidesPerView": 2
      },
      "1000": {
        "slidesPerView": 3
      }
    }
  }'>
    <div class="swiper-wrapper">

<?php
  foreach ($moreBlogs as $item) {
?>
      <!-- Item -->
      <div class="swiper-slide h-auto pb-3">
        <article class="card border-0 shadow-sm h-100 mx-2">
          <div class="position-relative">
            <a href="/blog/<?= $item['path'] ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
            <img src="/uploads/blogs/<?= $item['blog_image'] ?>" class="card-img-top" alt="<?= $item['alt_text'] ?>">
          </div>
          <div class="card-body pb-4">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="badge fs-sm text-nav bg-secondary text-decoration-none"><?= $item['category'] ?></div>
              <span class="fs-sm text-muted"><?= date("M d, Y", strtotime($item['created_on'])); ?></span>
            </div>
            <h3 class="h5 mb-0">
              <a href="/blog/<?= $item['path'] ?>"><?= $item['title'] ?></a>
            </h3>
          </div>
          <div class="card-footer py-4">
            <div class="d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-between">
              <div class="d-flex align-items-center position-relative me-3">
                <div>
                  <div class="nav-link p-0 fw-bold text-decoration-none stretched-link"><?= $item['author'] ?></div>
                </div>
              </div>
              <div class="d-flex align-items-center mt-sm-0 mt-4 text-muted">
                <div class="d-flex align-items-center me-3">
                  <i class="bx bx-like fs-lg me-1"></i>
                  <span class="fs-sm"><?= $item['likes'] ?></span>
                </div>
                <div class="d-flex align-items-center me-3">
                  <i class="bx bx-comment fs-lg me-1"></i>
                  <span class="fs-sm"><?= $item['comments'] ?></span>
                </div>
              </div>
            </div>
          </div>
        </article>
      </div>

<?php
  }
?>

    </div>

    <!-- Pagination (bullets) -->
    <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
  </div>
</section>


<?php include('includes/connect.php'); ?>


<?= $this->endSection(); ?>