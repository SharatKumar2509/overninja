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


<!-- Page title + filters -->
<section class="container d-sm-flex align-items-center justify-content-between pt-5 pb-4 pb-md-5 mt-5 mb-2 mb-lg-3">
  <h1 class="pt-2 mt-0 mt-md-5 mb-sm-0 me-sm-3">Portfolio List</h1>
  <select class="form-select mt-0 mt-md-5" style="width: 240px;">
    <option>All categories</option>
    <option>Web Development</option>
    <option>Mobile App Development</option>
    <option>Ecommerce Development</option>
    <option>Digital Marketing</option>
    <option>Game Development</option>
  </select>
</section>


<!-- Portfolio list -->
<section class="container pb-2 pb-lg-3">

<?php
  foreach ($portfolios as $portfolio) {
?>

  <!-- Item -->
  <div class="row pb-5 mb-md-4 mb-lg-5">
    <div class="col-md-6 pb-1 mb-3 pb-md-0 mb-md-0">
      <a href="/case-study/<?= $portfolio['id'] ?>">
        <img src="/uploads/portfolio/<?= $portfolio['project_image'] ?>" class="rounded-3" width="600" alt="Image">
      </a>
    </div>
    <div class="col-md-6">
      <div class="ps-md-4 ms-md-2">
        <h2 class="h3"><?= $portfolio['client'] ?></h2>
        <div class="d-table badge bg-faded-primary text-primary fs-sm mb-3"><?= $portfolio['service'] ?></div>
        <p class="d-md-none d-lg-block pb-3 mb-2 mb-md-3"><?= $portfolio['introduction'] ?></p>
        <a href="/case-study/<?= $portfolio['id'] ?>" class="btn btn-outline-primary">Know more</a>
      </div>
    </div>
  </div>

<?php
  }
?>

</section>


<?php include('includes/blogs.php'); ?>


<?php include('includes/connect.php'); ?>



<?= $this->endSection(); ?>