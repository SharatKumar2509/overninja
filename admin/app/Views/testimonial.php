<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-8">
          <h1>Testimonial</h1>
        </div>
        <div class="col-4 d-flex justify-content-end">
          <a href="/admin/testimonial/add" class="btn btn-primary d-flex align-items-center">
            <i class="fas fa-plus"></i>
            <span class="d-none d-md-inline ml-2">Add New</span>
          </a>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <table id="testimonials" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Company</th>
                <th>Added On</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $i = 1;
                foreach ($testimonials as $item) {
              ?>
                  <tr>
                    <th><?= $i++ ?></th>
                    <td><?= $item['fullname'] ?></td>
                    <td><?= $item['designation'] ?></td>
                    <td><?= $item['company'] ?></td>
                    <td><?= $item['created_on'] ?></td>
                    <td>
                      <a href="/admin/testimonial/edit/<?= $item['id'] ?>" class="btn btn-primary mr-1">
                        <i class="fas fa-edit mr-2"></i>
                        <span>Edit</span>
                      </a>
                      <button onclick="deleteTestimonial(<?= $item['id'] ?>)" class="btn btn-danger">
                        <i class="fas fa-trash mr-2"></i>
                        <span>Delete</span>
                      </button>
                    </td>
                  </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>

<?php
  if(session('success')!="") {
?>
<script type="text/javascript">
  toastr.success("<?= session('success') ?>");
</script>
<?php
  }
?>

<?php
  if(session('failed')!="") {
?>
<script type="text/javascript">
  toastr.error("<?= session('failed') ?>");
</script>
<?php
  }
?>

<!-- Page specific script -->
<script>
  $(function () {
    $('#testimonials').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": false,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

<script type="text/javascript">
  function deleteTestimonial(id) {
    if(confirm('Do you really want to delete this testimonial?')) {
      window.location = "<?= base_url()."testimonial/delete/" ?>" + id;
    }
  }
</script>

<?= $this->endSection(); ?>