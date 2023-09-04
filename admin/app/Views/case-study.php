<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-8">
          <h1>Case Study</h1>
        </div>
        <div class="col-4 d-flex justify-content-end">
          <a href="/admin/case-study/add" class="btn btn-primary d-flex align-items-center">
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
          <table id="case-study" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Client</th>
                <th>Service</th>
                <th>Added On</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $i = 1;
                foreach ($projects as $item) {
              ?>
                  <tr>
                    <th><?= $i++ ?></th>
                    <td><?= $item['client'] ?></td>
                    <td><?= $item['service'] ?></td>
                    <td><?= $item['created_on'] ?></td>
                    <td>
                      <a href="/case-study/<?= $item['id'] ?>" target="_blank" class="btn btn-success mr-1">
                        <i class="fas fa-eye-open mr-2"></i>
                        <span>View</span>
                      </a>
                      <a href="/admin/case-study/edit/<?= $item['id'] ?>" class="btn btn-primary mr-1">
                        <i class="fas fa-edit mr-2"></i>
                        <span>Edit</span>
                      </a>
                      <button onclick="deleteProject(<?= $item['id'] ?>)" class="btn btn-danger">
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
    $('#case-study').DataTable({
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

<?= $this->endSection(); ?>