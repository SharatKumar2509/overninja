<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <h1 class="mb-2">Change Password</h1>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-lg-4 offset-md-3 offset-lg-4">
          <div class="card mt-md-5">
            <form action="/admin/change-password" method="post" class="card-body">
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
                <label>Old Password</label>
                <input type="password" name="old_password" class="form-control" required autofocus>
              </div>
              <div class="mb-3">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" required>
              </div>
              <div class="mb-4">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary w-100">Change Password</button>
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