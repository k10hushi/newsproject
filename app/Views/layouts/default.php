<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ZenBlog Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('public/assets/img/favicon.png'); ?>" rel="icon">
  <link href="<?php echo base_url('public/assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="<?php echo base_url('https://fonts.googleapis.com'); ?>">
  <link rel="preconnect" href="<?php echo base_url('https://fonts.gstatic.com'); ?>" crossorigin>
  <link href="<?php echo base_url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap'); ?>" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('public/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="<?php echo base_url('public/assets/css/variables.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/assets/css/main.css'); ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog - v1.0.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php echo $this->include('layouts\header'); ?>
  <!-- End Header -->
  <?php echo $this->renderSection('content'); ?>
  <!-- ======= Footer ======= -->
  <?php echo $this->include('layouts\footer'); ?>


  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/aos/aos.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('public/assets/js/main.js'); ?>"></script>

</body>

</html>