<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <h1 class="mb-2">Edit Blog</h1>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <form action="/admin/blog/edit/<?= $blog['id'] ?>" method="post" class="row" enctype="multipart/form-data">
            <div class="col-12 mb-4">
              <label>Title</label>
              <input type="text" name="title" value="<?= $blog['title'] ?>" class="form-control" required>
            </div>
            <div class="col-lg-6 mb-4">
              <label>Category</label>
              <input type="text" name="category" value="<?= $blog['category'] ?>" class="form-control" required>
            </div>
            <div class="col-lg-6 mb-4">
              <label>Author</label>
              <input type="text" name="author" value="<?= $blog['author'] ?>" class="form-control" required>
            </div>
            <div class="col-12 mb-4">
              <label>Meta Description</label>
              <textarea name="meta_desc" class="form-control" required> value="<?= $blog['meta_desc'] ?>"</textarea>
            </div>
            <div class="col-lg-6 mb-4">
              <label>Blog Image</label>
              <div class="custom-file">
                <input type="file" name="blog_image" class="custom-file-input" id="exampleInputFile" accept=".jpg,.jpeg,.png,.webp,.JPG,.JPEG,.PNG,.WEBP">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <label>Alt Text</label>
              <input type="text" name="alt_text" value="<?= $blog['alt_text'] ?>" class="form-control">
            </div>
            <div class="col-12">
              <label>Blog Content</label>
              <textarea name="content" id="summernote" rows="25"> value="<?= $blog['content'] ?>"</textarea>
              <button type="submit" class="btn btn-primary mt-4">Save Changes</button>
            </div>
          </form>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>

<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote();
    bsCustomFileInput.init();
  })
</script>

<?= $this->endSection(); ?>