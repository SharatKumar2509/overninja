<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <h1 class="mb-2">Statistics</h1>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-4">
          <div class="card mt-md-5">
            <form action="/admin/statistics/edit" method="post" class="card-body">
          <?php
            if(session('failed')!="") {
          ?>
              <div class="alert alert-danger">
                <?= session('failed') ?>
              </div>
          <?php
            }
            else if(session('success')!="") {
          ?>
              <div class="alert alert-success">
                <?= session('success') ?>
              </div>
          <?php
            }
          ?>
              <div class="mb-3">
                <label>Projects Completed</label>
                <input type="number" name="completed" value="<?= $stats['completed'] ?>" min="0" class="form-control" required>
              </div>
              <div class="mb-3">
                <label>Projects Running</label>
                <input type="number" name="running" value="<?= $stats['running'] ?>" min="0" class="form-control" required>
              </div>
              <div class="mb-4">
                <label>Happy Clients</label>
                <input type="number" name="clients" value="<?= $stats['clients'] ?>" min="0" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Save Changes</button>
            </form>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>

<?= $this->endSection(); ?>