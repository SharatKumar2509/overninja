<?php
  if(sizeof($latestBlogs)>0) {
?>

<!-- Blogs -->
<div class="bg-secondary pt-5">

  <!-- Blog -->
  <section class="container pb-5 py-lg-5">
    <h2 class="h1 mb-4 pb-3 text-center">Latest From Our Blog</h2>
    <div class="row">
      <div class="col-lg-5 col-12 mb-lg-0 mb-4">

    <?php
      if(sizeof($latestBlogs)>0) {
    ?>

        <!-- Article -->
        <article class="card h-100 border-0 shadow-sm">
          <div class="position-relative">
            <a href="/blog/<?= $latestBlogs[0]['path'] ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
            <img src="/uploads/blogs/<?= $latestBlogs[0]['blog_image'] ?>" class="card-img-top" alt="<?= $latestBlogs[0]['alt_text'] ?>">
          </div>
          <div class="card-body pb-4">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="badge fs-sm text-nav bg-secondary text-decoration-none"><?= $latestBlogs[0]['category'] ?></div>
              <span class="fs-sm text-muted"><?= date("M d, Y", strtotime($latestBlogs[0]['created_on'])); ?></span>
            </div>
            <h3 class="h5 mb-0">
              <a href="/blog/<?= $latestBlogs[0]['path'] ?>"><?= $latestBlogs[0]['title'] ?></a>
            </h3>
          </div>
          <div class="card-footer py-4">
            <div class="d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-between">
              <div class="d-flex align-items-center position-relative me-3">
                <div>
                  <div class="nav-link p-0 fw-bold text-decoration-none stretched-link"><?= $latestBlogs[0]['author'] ?></div>
                </div>
              </div>
              <div class="d-flex align-items-center mt-sm-0 mt-4 text-muted">
                <div class="d-flex align-items-center me-3">
                  <i class="bx bx-like fs-lg me-1"></i>
                  <span class="fs-sm"><?= $latestBlogs[0]['likes'] ?></span>
                </div>
                <div class="d-flex align-items-center me-3">
                  <i class="bx bx-comment fs-lg me-1"></i>
                  <span class="fs-sm"><?= $latestBlogs[0]['comments'] ?></span>
                </div>
              </div>
            </div>
          </div>
        </article>

    <?php
      }
    ?>

      </div>
      <div class="col">

    <?php
      if(sizeof($latestBlogs)>1) {
    ?>

        <!-- Article -->
        <article class="card border-0 shadow-sm overflow-hidden mb-4">
          <div class="row g-0">
            <div class="col-sm-5 position-relative bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url('/uploads/blogs/<?= $latestBlogs[1]['blog_image'] ?>'); min-height: 15rem;">
              <a href="/blog/<?= $latestBlogs[1]['path'] ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
            </div>
            <div class="col-sm-7">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <div class="badge fs-sm text-nav bg-secondary text-decoration-none"><?= $latestBlogs[1]['category'] ?></div>
                  <span class="fs-sm text-muted border-start ps-3 ms-3"><?= date("M d, Y", strtotime($latestBlogs[1]['created_on'])); ?></span>
                </div>
                <h3 class="h5">
                  <a href="/blog/<?= $latestBlogs[1]['path'] ?>"><?= $latestBlogs[1]['title'] ?></a>
                </h3>
                <hr class="my-4">
                <div class="d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-between">
                  <div class="d-flex align-items-center position-relative me-3">
                    <div>
                      <div class="nav-link p-0 fw-bold text-decoration-none stretched-link"><?= $latestBlogs[1]['author'] ?></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mt-sm-0 mt-4 text-muted">
                    <div class="d-flex align-items-center me-3">
                      <i class="bx bx-like fs-lg me-1"></i>
                      <span class="fs-sm"><?= $latestBlogs[1]['likes'] ?></span>
                    </div>
                    <div class="d-flex align-items-center me-3">
                      <i class="bx bx-comment fs-lg me-1"></i>
                      <span class="fs-sm"><?= $latestBlogs[1]['comments'] ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>

    <?php
      }

      if(sizeof($latestBlogs)>2) {
    ?>

        <!-- Article -->
        <article class="card border-0 shadow-sm overflow-hidden">
          <div class="row g-0">
            <div class="col-sm-5 position-relative bg-position-center bg-repeat-0 bg-size-cover" style="background-image: url('/uploads/blogs/<?= $latestBlogs[2]['blog_image'] ?>'); min-height: 15rem;">
              <a href="/blog/<?= $latestBlogs[2]['path'] ?>" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
            </div>
            <div class="col-sm-7">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <div class="badge fs-sm text-nav bg-secondary text-decoration-none"><?= $latestBlogs[2]['category'] ?></div>
                  <span class="fs-sm text-muted border-start ps-3 ms-3"><?= date("M d, Y", strtotime($latestBlogs[2]['created_on'])); ?></span>
                </div>
                <h3 class="h5">
                  <a href="/blog/<?= $latestBlogs[2]['path'] ?>"><?= $latestBlogs[2]['title'] ?></a>
                </h3>
                <hr class="my-4">
                <div class="d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-between">
                  <div class="d-flex align-items-center position-relative me-3">
                    <div>
                      <a href="#" class="nav-link p-0 fw-bold text-decoration-none stretched-link"><?= $latestBlogs[2]['author'] ?></a>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mt-sm-0 mt-4 text-muted">
                    <div class="d-flex align-items-center me-3">
                      <i class="bx bx-like fs-lg me-1"></i>
                      <span class="fs-sm"><?= $latestBlogs[2]['likes'] ?></span>
                    </div>
                    <div class="d-flex align-items-center me-3">
                      <i class="bx bx-comment fs-lg me-1"></i>
                      <span class="fs-sm"><?= $latestBlogs[2]['comments'] ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>

    <?php
      }
    ?>

      </div>
      <div class="col-12 mt-4 pt-lg-4 pt-3 text-center">
        <a href="/blogs" class="btn btn-lg btn-outline-primary w-sm-auto w-100">More blog posts</a>
      </div>
    </div>
  </section>

</div>

<?php
  }
  else {
?>
  <div class="pt-5"></div>
<?php
  }
?>