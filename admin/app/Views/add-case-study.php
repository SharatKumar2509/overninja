<?= $this->extend('layout.php'); ?>

<?= $this->section('content'); ?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <h1 class="mb-2">Add Case Study</h1>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <form action="/admin/case-study/add" method="post" class="row" enctype="multipart/form-data">
            <div class="col-lg-6 mb-4">
              <label>Client</label>
              <input type="text" name="client" class="form-control" required>
            </div>
            <div class="col-lg-6 mb-4">
              <label>Service</label>
              <select name="service" class="form-control" required>
                <option>Web Development</option>
                <option>Mobile App Development</option>
                <option>Ecommerce Development</option>
                <option>Digital Marketing</option>
                <option>Game Development</option>
              </select>
            </div>
            <div class="col-lg-6 mb-4">
              <label>Introduction</label>
              <textarea name="introduction" class="form-control" required></textarea>
            </div>
            <div class="col-lg-6 mb-4">
              <label>Client Requirement</label>
              <textarea name="requirement" class="form-control" required></textarea>
            </div>
            <div class="col-lg-6 mb-4">
              <label>Challenge</label>
              <textarea name="challenge" class="form-control" required></textarea>
            </div>
            <div class="col-lg-6 mb-4">
              <label>Solution</label>
              <textarea name="solution" class="form-control" required></textarea>
            </div>
            <div class="col-12 mb-4">
              <label>Features</label>
              <input type="hidden" name="features" id="features">
              <table class="table table-bordered table-responsive-md">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Feature Title</th>
                    <th scope="col">Feature Content</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="feature-table">
                  <tr>
                    <td><input type="text" id="ftitle" class="form-control"></td>
                    <td><input type="text" id="fcontent" class="form-control"></td>
                    <td><button type="button" class="btn btn-primary" onclick="addFeature()"><i class="fas fa-plus mr-2"></i>Add</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-lg-6 mb-4">
              <label>Project Cover Image</label>
              <div class="custom-file">
                <input type="file" name="project_image" class="custom-file-input" accept=".jpg,.jpeg,.png,.webp,.JPG,.JPEG,.PNG,.WEBP" required>
                <label class="custom-file-label">Choose file</label>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <label>More Screen 1</label>
              <div class="custom-file">
                <input type="file" name="screen1" class="custom-file-input" accept=".jpg,.jpeg,.png,.webp,.JPG,.JPEG,.PNG,.WEBP" required>
                <label class="custom-file-label">Choose file</label>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <label>More Screen 2</label>
              <div class="custom-file">
                <input type="file" name="screen2" class="custom-file-input" accept=".jpg,.jpeg,.png,.webp,.JPG,.JPEG,.PNG,.WEBP" required>
                <label class="custom-file-label">Choose file</label>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <label>More Screen 3</label>
              <div class="custom-file">
                <input type="file" name="screen3" class="custom-file-input" accept=".jpg,.jpeg,.png,.webp,.JPG,.JPEG,.PNG,.WEBP" required>
                <label class="custom-file-label">Choose file</label>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <label>More Screen 4</label>
              <div class="custom-file">
                <input type="file" name="screen4" class="custom-file-input" accept=".jpg,.jpeg,.png,.webp,.JPG,.JPEG,.PNG,.WEBP" required>
                <label class="custom-file-label">Choose file</label>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <label>More Screen 5</label>
              <div class="custom-file">
                <input type="file" name="screen5" class="custom-file-input" accept=".jpg,.jpeg,.png,.webp,.JPG,.JPEG,.PNG,.WEBP" required>
                <label class="custom-file-label">Choose file</label>
              </div>
            </div>
            <div class="col-lg-6 mb-4">
              <label>Reviewer Name</label>
              <input type="text" name="reviewer" class="form-control" required>
            </div>
            <div class="col-lg-6 mb-4">
              <label>Reviewer Designation</label>
              <input type="text" name="designation" class="form-control" required>
            </div>
            <div class="col-12 mb-4">
              <label>Review</label>
              <textarea name="review" class="form-control" required></textarea>
            </div>
            <div class="col-12 pt-3">
              <button type="submit" class="btn btn-primary">Add New Blog</button>
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
    bsCustomFileInput.init();
  })
</script>

<script type="text/javascript">
  var f = 0;
  function addFeature() {
    var firstrow = "<tr><td><input type=\"text\" id=\"ftitle\" class=\"form-control\"></td><td><input type=\"text\" id=\"fcontent\" class=\"form-control\"></td><td><button type=\"button\" class=\"btn btn-primary\" onclick=\"addFeature()\"><i class=\"fas fa-plus mr-2\"></i>Add</button></td></tr>";

    var title = document.getElementById('ftitle').value;
    var content = document.getElementById('fcontent').value;

    if(title!="" && content!="") {

      var val = document.getElementById('features').value;
      val = val + title + "###" + content + "####";
      document.getElementById('features').value = val;

      var newrow = "<tr><td>" + title + "</td><td>" + content + "</td><td><a href=\"javascript:void(0)\" class=\"text-danger\" onclick=\"delFeature(" + f + ")\"><i class=\"fas fa-times mr-2\"></i> Remove</a></td></tr>";

      document.getElementById('feature-table').innerHTML += newrow;

      f = f+1;
    }
  }

  function delFeature(id) {
    var val = document.getElementById('features').value;

    val = val.split("####");
    val = val.filter(e => e);

    delete val[id];
    f = f-1;

    val = val.filter(e => e);

    var firstrow = "<tr><td><input type=\"text\" id=\"ftitle\" class=\"form-control\"></td><td><input type=\"text\" id=\"fcontent\" class=\"form-control\"></td><td><button type=\"button\" class=\"btn btn-primary\" onclick=\"addFeature()\"><i class=\"fas fa-plus mr-2\"></i>Add</button></td></tr>";

    document.getElementById('feature-table').innerHTML = firstrow;

    for (var i = 0; i < val.length; i++) {
      var feature = val[i].split("###");

      var newrow = "<tr><td>" + feature[0] + "</td><td>" + feature[1] + "</td><td><a href=\"javascript:void(0)\" class=\"text-danger\" onclick=\"delFeature(" + i + ")\"><i class=\"fas fa-times mr-2\"></i> Remove</a></td></tr>";

      document.getElementById('feature-table').innerHTML += newrow;
    }

    if(val.length>0) {
      document.getElementById('features').value = val.join('####') + "####";
    }
    else {
      document.getElementById('features').value = "";
    }
  }
</script>

<?= $this->endSection(); ?>