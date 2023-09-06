<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>


<!-- Hero -->
<section class="dark-mode position-relative pt-5" style="background-color: #151922;">

  <!-- Content -->
  <div class="container position-relative zindex-2 pt-5 pb-2 pb-md-0">
    <div class="row justify-content-center pt-3 mt-3">
      <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 text-center">
        <h1 class="mb-4">Blogs</h1>
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


<!-- Page content -->
<section class="container mt-5 mb-lg-5 pt-3 pt-md-5 pb-5">

  <!-- Page title + Layout switcher + Search form -->
  <div class="row align-items-end gy-3 mt-4 mt-md-5 mb-4 pb-lg-3 pb-1">
    <div class="col-lg-5 col-md-4">
      <h1 class="mb-2 mb-md-0">Blog List</h1>
    </div>
    <div class="col-lg-7 col-md-8">
      <div class="row gy-2">
        <div class="col-lg-5 col-sm-6">
          <div class="d-flex align-items-center">
            <!-- <select class="form-select">
              <option>All categories</option>
              <option value="processes-and-tools">Processes &amp; Tools</option>
              <option value="startups">Startups</option>
              <option value="digital">Digital</option>
              <option value="strategy">Strategy</option>
              <option value="business">Business</option>
            </select> -->
          </div>
        </div>
        <div class="col-lg-7 col-sm-6">
          <form action="/blogs/1" method="get" class="input-group">
            <input type="text" name="search" value="<?= $search ?>" class="form-control pe-5 rounded" placeholder="Search the blog...">
            <i class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php
  if(sizeof($blogs) > 0) {
?>

  <!-- Blog grid -->
  <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-md-4 gy-2">

<?php
    foreach ($blogs as $blog) {
?>

    <!-- Item -->
    <div class="col pb-3">
      <article class="card border-0 shadow-sm h-100">
        <div class="position-relative">
          <a href="/blog/<?= $blog['path'] ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
          <img src="/uploads/blogs/<?= $blog['blog_image'] ?>" class="card-img-top" alt="Image">
        </div>
        <div class="card-body pb-4">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="badge fs-sm text-nav bg-secondary text-decoration-none"><?= $blog['category'] ?></div>
            <span class="fs-sm text-muted"><?= date("M d, Y", strtotime($blog['created_on'])); ?></span>
          </div>
          <h3 class="h5 mb-0">
            <a href="/blog/<?= $blog['path'] ?>"><?= $blog['title'] ?></a>
          </h3>
        </div>
        <div class="card-footer py-4">
          <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center fw-bold text-dark text-decoration-none me-3">
              <?= $blog['author'] ?>
            </div>
            <div class="d-flex align-items-center text-muted">
              <div class="d-flex align-items-center me-3">
                <i class="bx bx-like fs-lg me-1"></i>
                <span class="fs-sm"><?= $blog['likes'] ?></span>
              </div>
              <div class="d-flex align-items-center me-3">
                <i class="bx bx-comment fs-lg me-1"></i>
                <span class="fs-sm"><?= $blog['comments'] ?></span>
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

  <!-- Pagination -->
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center pt-lg-3 pt-1">
      <li class="page-item">
        <a href="<?= ($currentPage > $pageStart) ? '/blogs/'.($currentPage-1) : '#' ?>" class="page-link">
          <i class="bx bx-chevron-left mx-n1"></i>
        </a>
      </li>
      
      <li class="page-item disabled d-sm-none">
        <span class="page-link text-body"><?= $currentPage." / ".$pageEnd ?></span>
      </li>

<?php
  foreach ($pages as $item) {
    if($item==$currentPage) {
?>
      <li class="page-item active d-none d-sm-block" aria-current="page">
        <span class="page-link">
          <?= $item ?>
          <span class="visually-hidden">(current)</span>
        </span>
      </li>
<?php
    }
    else {
?>
      <li class="page-item d-none d-sm-block">
        <a href="/blogs/<?= $item ?>" class="page-link"><?= $item ?></a>
      </li>
<?php
    }
  }
?>

      <li class="page-item">
        <a href="<?= ($currentPage < $pageEnd) ? '/blogs/'.($currentPage+1) : '#' ?>" class="page-link">
          <i class="bx bx-chevron-right mx-n1"></i>
        </a>
      </li>
    </ul>
  </nav>

<?php
  }
  else {
?>

  <div class="row mt-4 mb-4 mt-md-5">
    <div class="col-md-10 col-xl-8 offset-md-1 offset-xl-2">
      <div class="alert alert-info fw-bold text-center mt-md-5">No blogs found. Please come back after some time.</div>
    </div>
  </div>

<?php
  }
?>

</section>


<!-- Subscription CTA -->
<section class="py-5 bg-secondary">
  <div class="container py-md-3 py-lg-5">
    <div class="row justify-content-center pt-2">
      <div class="col-xl-8 col-lg-9 col-md-11">
        <h2 class="h1 d-md-inline-block position-relative mb-md-5 mb-sm-4 text-sm-start text-center">
          Don't Want to Miss Anything?

          <!-- Arrow shape -->
          <svg class="d-md-block d-none position-absolute top-0 ms-4 ps-1" style="left: 100%;" xmlns="http://www.w3.org/2000/svg" width="65" height="68" fill="#6366f1"><path d="M53.9527 51.0012c8.396-10.5668 2.0302-26.0134-11.7481-26.7511-.6899-.0646-1.4612.0015-2.1258.0431.1243 9.0462-4.1714 18.8896-11.5618 21.3814-6.6695 2.2133-10.3337-4.2224-7.5813-9.676 3.2966-6.4755 9.103-11.8504 16.1678-13.8189-.5654-5.6953-3.3436-10.7672-9.485-12.48517C17.2678 6.8204 6.49364 16.3681 4.98841 26.127c-.09276 1.0297-1.68569.9497-1.59293-.0801C3.98732 12.9139 19.7395 2.55212 31.9628 8.5787c4.7253 2.3813 7.2649 7.3963 7.9368 13.067 7.4237-.9311 14.5154 3.3683 18.3422 9.5422 4.3988 7.1623 2.3584 15.1401-2.6322 21.1108-.7826.9653-2.3331-.3572-1.6569-1.2975zM26.7754 32.1845c-1.9411 2.2411-4.076 5.0872-4.3542 8.1764-.3036 2.9829 3.7601 3.0525 5.4905 2.7645 2.1568-.3863 3.7221-2.3164 4.8863-4.0419 2.6228-3.6308 4.3657-9.0752 4.4844-14.2563-4.0808 1.279-7.6514 4.2327-10.507 7.3573zm24.6311 25.592c-.7061-2.9738-1.2243-6.1031-1.1591-9.143.0423-1.242 1.767-1.0805 1.8313.1372.1284 2.435.815 4.8532 1.4764 7.1651l4.1619-1.4098c1.0153-.4586 2.4373-1.5714 3.6544-1.1804.6087.1954.7347.7264.6475 1.3068-.2302 1.3976-2.4683 1.9147-3.5901 2.398-1.8429.7619-3.6293 1.2865-5.5477 1.7298-.6391.1476-1.3233-.3665-1.4746-1.0037z"/></svg>
        </h2>

        <!-- Title + checkboxes -->
        <div class="row gy-4 align-items-center mb-lg-5 mb-4 pb-3">
          <div class="col-12">
            <h3 class="h5 mb-0 text-sm-start text-center">Sign up for Newsletters</h3>
          </div>
          <!-- <div class="col-md-9">
            <div class="row row-cols-sm-2 row-cols-1 gy-2">
              <div class="col">
                <div class="form-check mb-0">
                  <input type="checkbox" id="s-daily-newsletter" class="form-check-input" checked>
                  <label for="s-daily-newsletter" class="form-check-label">Daily Newsletter</label>
                </div>
              </div>
              <div class="col">
                <div class="form-check mb-0">
                  <input type="checkbox" id="s-advertising-updates" class="form-check-input">
                  <label for="s-advertising-updates" class="form-check-label">Advertising Updates</label>
                </div>
              </div>
            </div>
          </div> -->
        </div>

        <!-- Email field -->
        <form onsubmit="subscribe2()" id="subscr2-form" class="d-flex flex-sm-row flex-column mb-3">
          <div class="input-group me-sm-3 mb-sm-0 mb-3">
            <i class="bx bx-envelope position-absolute start-0 top-50 translate-middle-y ms-3 zindex-5 fs-5 text-muted"></i>
            <input type="email" id="subscr2-email" class="form-control form-control-lg rounded-3 ps-5" placeholder="Your email" required>
          </div>
          <button type="submit" class="btn btn-lg btn-primary" id="btn-subscr2">
            <span>Subscribe</span>
            <div id="subscr2-process" class="spinner-border spinner-border-sm text-light ms-3 d-none" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
            <i id="subscr2-success" class="fas fa-circle-check ms-3 d-none"></i>
          </button>
        </form>
        <div class="form-text fs-sm text-sm-start text-center">
          * Yes, I agree to the <a href="/terms-and-conditions">terms</a> and <a href="/privacy-policy">privacy policy</a>.
        </div>
      </div>
    </div>
  </div>
</section>


<?php include('includes/connect.php'); ?>


<script type="text/javascript">
  function subscribe2() {
    event.preventDefault();
    $('#btn-subscr2').prop('disabled', true);
    $('#subscr2-process').removeClass('d-none');
    $.post("/subscribe",
      {
        "email": $('#subscr2-email').val()
      },
      function(data, status){
        $('#subscr2-form')[0].reset();
        $('#btn-subscr2').prop('disabled', false);
        $('#subscr2-process').addClass('d-none');
        $('#subscr2-success').removeClass('d-none');
        setTimeout(() => {
          $('#subscr2-success').addClass('d-none');
        }, 3000);
      }
    );
  }
</script>


<?= $this->endSection(); ?>