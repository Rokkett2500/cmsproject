<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $configt['0']['website_title']  ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('assets/woody/') ?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/woody/') ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/woody/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/woody/') ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/woody/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/woody/') ?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->

    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!-- DELETED -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><?= $configt['0']['website_title']  ?></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="<?= base_url() ?>" class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kategori</a>
                        <div class="dropdown-menu fade-up m-0">
                            <?php foreach ($userb as $st) : ?>
                                <a href="<?= site_url('category/' . $st->category_id); ?>" class="dropdown-item"><?= $st->category; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <a href="<?= base_url('gallery') ?>" class="nav-item nav-link">Gallery</a>
                    <a href="<?= base_url('feedback') ?>" class="nav-item nav-link">Saran</a>
                    <a href="<?= base_url('admin') ?>" class="nav-item nav-link">Log In</a>
                </div>

            </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div id="menghilang">
    <?= $this->session->flashdata('alert', true); ?>
    </div>
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Saran</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <p class="text-white">Bantu buat website ini jadi lebih baik!</p>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Header End -->


    <!-- Feature Start -->
    <!-- DELETED -->
    <!-- Feature End -->



    <!-- About Start -->
    <!-- DELETED -->
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">

                <div class="col quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="section-title text-start">
                            <h2 class="display-5 mb-4">Saran</h2>
                        </div>
                        <p class="mb-4 pb-2">Tuliskan saran yang anda miliki untuk website ini disini. Saran anda akan sangat membantu kami dalam membuat website ini menjadi lebih baik!</p>
                        <form action="<?= base_url('feedbackact') ?>" method="post">
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control border-0" placeholder="Nama Anda" style="height: 55px;" name="name">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Saran Anda" name="feedback"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <!-- DELETED -->
    <!-- Feature End -->


    <!-- Projects Start -->
    <!-- DELETED   -->
    <!-- Projects End -->


    <!-- Quote Start -->
    <!-- DELETED -->
    <!-- Quote End -->


    <!-- Team Start -->
    <!-- DELETED -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- DELETED -->
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light"><?= $configt['0']['website_title']  ?></h4>
                    <p class="mb-4"><?= $configt['0']['website_profile']  ?></p>
                    <p class="mb-2">Alamat : <?= $configt['0']['address']  ?></p>
                    <p class="mb-2">E-mail : <?= $configt['0']['email']  ?></p>
                    <p class="mb-2">Instagram : <?= $configt['0']['instagram']  ?></p>
                    <p class="mb-2">Facebook : <?= $configt['0']['facebook']  ?></p>
                    <p class="mb-2">TikTok : <?= $configt['0']['tiktok']  ?></p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Artikel Terbaru</h4>
                    <?php foreach ($recent as $st) : ?>
                        <a class="btn btn-link" href="<?= site_url('contents/' . $st->content_id); ?>"><?= $st->title; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/woody/') ?>lib/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/woody/') ?>lib/easing/easing.min.js"></script>
    <script src="<?= base_url('assets/woody/') ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url('assets/woody/') ?>lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url('assets/woody/') ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/woody/') ?>lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/woody/') ?>lib/lightbox/js/lightbox.min.js"></script>
    <script>
        $('#menghilang').delay('slow').slideDown('slow').delay(300).slideUp(600);
    </script>

    <!-- Template Javascript -->
    <script src="<?= base_url('assets/woody/') ?>js/main.js"></script>
</body>

</html>