<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>category / national - NiceAdmin Bootstrap Template</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="<?php echo base_url('public/admin/assets/img/favicon.png'); ?>" rel="icon">
<link href="<?php echo base_url('public/admin/assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="<?php echo base_url('public/admin/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('public/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('public/admin/assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('public/admin/assets/vendor/quill/quill.snow.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('public/admin/assets/vendor/quill/quill.bubble.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('public/admin/assets/vendor/remixicon/remixicon.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('public/admin/assets/vendor/simple-datatables/style.css'); ?>" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="<?php echo base_url('public/admin/assets/css/style.css'); ?>" rel="stylesheet">

<!-- =======================================================
* Template Name: NiceAdmin - v2.2.2
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<?php echo $this->include('admin\layouts\header'); ?>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php echo $this->include('admin\layouts\sidebar'); ?>
<!-- End Sidebar-->

<main id="main" class="main">

<div class="pagetitle">
    <h1>national</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index">Home</a></li>
        <li class="breadcrumb-item">category</li>
        <li class="breadcrumb-item active">national</li>
    </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
    <div class="col-lg-6">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Default national</h5>

            <!-- Default national -->
            <div class="national" id="nationalExample">
            <div class="national-item">
                <h2 class="national-header" id="headingOne">
                <button class="national-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    national Item #1
                </button>
                </h2>
                <div id="collapseOne" class="national-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#nationalExample">
                <div class="national-body">
                    <strong>This is the first item's national body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.national-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="national-item">
                <h2 class="national-header" id="headingTwo">
                <button class="national-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    national Item #2
                </button>
                </h2>
                <div id="collapseTwo" class="national-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#nationalExample">
                <div class="national-body">
                    <strong>This is the second item's national body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.national-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="national-item">
                <h2 class="national-header" id="headingThree">
                <button class="national-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    national Item #3
                </button>
                </h2>
                <div id="collapseThree" class="national-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#nationalExample">
                <div class="national-body">
                    <strong>This is the third item's national body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.national-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            </div><!-- End Default national Example -->

        </div>
        </div>

    </div>

    <div class="col-lg-6">

        <div class="card">
        <div class="card-body">
            <h5 class="card-title">national without outline borders</h5>

            <!-- national without outline borders -->
            <div class="national national-flush" id="nationalFlushExample">
            <div class="national-item">
                <h2 class="national-header" id="flush-headingOne">
                <button class="national-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    national Item #1
                </button>
                </h2>
                <div id="flush-collapseOne" class="national-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#nationalFlushExample">
                <div class="national-body">Placeholder content for this national, which is intended to demonstrate the <code>.national-flush</code> class. This is the first item's national body.</div>
                </div>
            </div>
            <div class="national-item">
                <h2 class="national-header" id="flush-headingTwo">
                <button class="national-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    national Item #2
                </button>
                </h2>
                <div id="flush-collapseTwo" class="national-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#nationalFlushExample">
                <div class="national-body">Placeholder content for this national, which is intended to demonstrate the <code>.national-flush</code> class. This is the second item's national body. Let's imagine this being filled with some actual content.</div>
                </div>
            </div>
            <div class="national-item">
                <h2 class="national-header" id="flush-headingThree">
                <button class="national-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    national Item #3
                </button>
                </h2>
                <div id="flush-collapseThree" class="national-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#nationalFlushExample">
                <div class="national-body">Placeholder content for this national, which is intended to demonstrate the <code>.national-flush</code> class. This is the third item's national body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                </div>
            </div>
            </div><!-- End national without outline borders -->

        </div>
        </div>

    </div>
    </div>
</section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php echo $this->include('admin\layouts\footer'); ?>
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php('public/admin/assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
<script src="<?php('public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php('public/admin/assets/vendor/chart.js/chart.min.js'); ?>"></script>
<script src="<?php('public/admin/assets/vendor/echarts/echarts.min.js'); ?>"></script>
<script src="<?php('public/admin/assets/vendor/quill/quill.min.js'); ?>"></script>
<script src="<?php('public/admin/assets/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
<script src="<?php('public/admin/assets/vendor/tinymce/tinymce.min.js'); ?>"></script>
<script src="<?php('public/admin/assets/vendor/php-email-form/validate.js'); ?>"></script>

<!-- Template Main JS File -->
<script src="<?php('public/admin/assets/js/main.js'); ?>"></script>

</body>

</html>