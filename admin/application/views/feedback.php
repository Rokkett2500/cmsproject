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
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('content') ?>">
              <span class="icon-bg"><i class="mdi mdi-book-open-variant"></i></span>
              <span class="menu-title">Content</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('category') ?>">
              <span class="icon-bg"><i class="mdi mdi-book-multiple"></i></span>
              <span class="menu-title">Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('carousel') ?>">
              <span class="icon-bg"><i class="mdi mdi-arrange-send-backward"></i></span>
              <span class="menu-title">Carousel</span>
            </a>
          </li>
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
          <div id="menghilang">
            <?= $this->session->flashdata('alert', true); ?>
          </div>
          <div class="row">
            <div class="col grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Users</h4>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Feedback</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($user as $st) :

                      ?>
                        <tr>
                          <td><?= $st->name ?></td>
                          <td><?= $st->feedback ?></td>
                          <td>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal<?= $st->id ?>">
                              Delete
                            </button>
                            <div class="modal fade" id="exampleModal<?= $st->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>This will delete the data.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                    <form action="<?= site_url('defcon/deletefeedbackact'); ?>" method="post">
                                      <input type="hidden" value="<?= $st->id ?>" name="sid">
                                      <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      <?php
                      endforeach;
                      ?>
                    </tbody>
                  </table>
                </div>
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
  <script>
    $('#menghilang').delay('slow').slideDown('slow').delay(300).slideUp(600);
  </script>
  <!-- End custom js for this page -->
</body>

</html>