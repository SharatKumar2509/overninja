<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <h1 class="mb-2">Edit Testimonial</h1>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <form action="/admin/testimonial/edit/<?= $testimonial['id'] ?>" method="post" class="row">
            <div class="col-md-6 col-lg-4 mb-2">
              <label>Fullname</label>
              <input type="text" name="fullname" class="form-control" value="<?= $testimonial['fullname'] ?>" required>
            </div>
            <div class="col-md-6 col-lg-4 mb-2">
              <label>Designation</label>
              <input type="text" name="designation" class="form-control" value="<?= $testimonial['designation'] ?>" required>
            </div>
            <div class="col-lg-4 mb-2">
              <label>Company</label>
              <input type="text" name="company" class="form-control" value="<?= $testimonial['company'] ?>" required>
            </div>
            <div class="col-12">
              <label>Review</label>
              <textarea name="review" rows="5" class="form-control" required><?= $testimonial['review'] ?></textarea>
              <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>

<?= $this->endSection(); ?>