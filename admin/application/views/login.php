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
</head>

<body>
  <div class="row d-flex">
    <div class="col d-flex justify-content-center align-items-center">
      <!-- Register -->
      <div class="card" style="width: 30rem; margin-top:10%;">
        <div class="card-body">
          <h4 class="mb-2 text-dark">CMS</h4>
          <p class="mb-4 text-dark">Please sign-in to your account</p>
          <div id="menghilang">
            <?= $this->session->flashdata('alert', true); ?>
          </div>
          <form id="formAuthentication" class="mb-3" action="<?= site_url('auth_login') ?>" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label text-dark">Username</label>
              <input type="text" class="form-control" id="email" name="username" placeholder="Enter your username" autofocus />
            </div>
            <div class="mb-3 form-password-toggle">
              <div class="d-flex justify-content-between">
                <label class="form-label text-dark" for="password">Password</label>
              </div>
              <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
              </div>
            </div>
            <div class="mb-3">
              <input class="btn btn-primary d-grid w-100" type="submit" value='Sign In'>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Register -->
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
  <script>
    $('#menghilang').delay('slow').slideDown('slow').delay(300).slideUp(600);
  </script>
  <!-- End custom js for this page -->
</body>

</html>