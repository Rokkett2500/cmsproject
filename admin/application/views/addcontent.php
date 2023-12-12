<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('assets/cplus') ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/cplus') ?>/assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/cplus') ?>/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('assets/cplus') ?>/assets/vendors/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?= base_url('assets/cplus') ?>/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?= base_url('assets/cplus') ?>/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?= base_url('assets/cplus') ?>/assets/images/favicon.png" />
  <script src="<?= base_url('assets/ayalumi') ?>/tinymce.min.js" referrerpolicy="origin"></script>
</head>

<body>
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="<?= base_url('assets/cplus') ?>/assets/images/mklogo.png" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets/cplus') ?>/assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>

<ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="<?= base_url('assets/cplus') ?>/assets/images/faces/face28.png" alt="image">
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black"><?= $this->session->userdata('nama') ?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
              <div class="p-3 text-center bg-primary">
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="<?= base_url('assets/cplus') ?>/assets/images/faces/face28.png" alt="">
              </div>
              <div class="p-2">
                <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2"><?= $this->session->userdata('level') ?></h5>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="<?= base_url('logout') ?>">
                  <span>Log Out</span>
                  <i class="mdi mdi-logout ml-1"></i>
                </a>
              </div>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('content') ?>">
              <span class="icon-bg"><i class="mdi mdi-book-open-variant"></i></span>
              <span class="menu-title">Content</span>
            </a>
          </li>
          <?php if ($this->session->userdata('level') != 'Contributor') {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('category') ?>">
              <span class="icon-bg"><i class="mdi mdi-book-multiple"></i></span>
              <span class="menu-title">Category</span>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('carousel') ?>">
              <span class="icon-bg"><i class="mdi mdi-arrange-send-backward"></i></span>
              <span class="menu-title">Carousel</span>
            </a>
          </li>
          <?php if ($this->session->userdata('level') != 'Contributor') {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('configt') ?>">
              <span class="icon-bg"><i class="mdi mdi-settings"></i></span>
              <span class="menu-title">Config</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('user') ?>">
              <span class="icon-bg"><i class="mdi mdi-human-male "></i></span>
              <span class="menu-title">User</span>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= site_url('feedback') ?>">
              <span class="icon-bg"><i class="mdi mdi-account-edit"></i></span>
              <span class="menu-title">Feedback</span>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('gallery') ?>">
              <span class="icon-bg"><i class="mdi mdi-image"></i></span>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Add Content</h4>
                <form class="forms-sample" method="post" action="<?= site_url('addcontentact') ?>" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="title">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Category</label>
                    <div class="col-sm-9">
                    <select class="form-select" name="category_id">
                    <option selected>Select category</option>
                    <?php foreach ($user as $st) :?>
                        <option value="<?= $st->category_id ?>"><?= $st->category ?></option>
                        <?php
                      endforeach;
                      ?>
                      </select></div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Content Details</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="content_details"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Image</label>
                    <div class="col-sm-9">
                      <input type="file" class="form-control" placeholder="Category name" name="photo" accept="image/jpeg, image/png">
                    </div>
                  </div>
                  <input type="submit" class="btn btn-primary mr-2" value="Add">
                  </form>
                  <a href="<?= site_url('content') ?>">
                  <button class="btn btn-light">Cancel</button>
                  </a>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url('assets/cplus') ?>/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?= base_url('assets/cplus') ?>/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="<?= base_url('assets/cplus') ?>/assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url('assets/cplus') ?>/assets/js/off-canvas.js"></script>
  <script src="<?= base_url('assets/cplus') ?>/assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url('assets/cplus') ?>/assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="<?= base_url('assets/cplus') ?>/assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
</body>

</html>