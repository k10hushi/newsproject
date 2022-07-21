<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
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

><!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php echo $this->include('admin\layouts\sidebar'); ?>

<!-- End Sidebar-->

<main id="main" class="main">
<div class="col-12 grid-margin stretch-card">

        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic form elements</h4>
            <p class="card-description">
            Basic form elements
            </p>
            <?php if(isset ($validation)) { echo $validation->listErrors();} ?>
            <form class="forms-sample" action="forms" method="post" enctype="multipart/form-data">


            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" name="name" class="form-control"placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <!--<div class="form-group">
                <label for="exampleInputPassword4">Password</label>
                <input type="password" class="form-control"placeholder="Password">
            </div>-->
            <div class="form-group">
                <label for="examplePostTitle1">posttitle</label>
                <input type="text" name="posttitle"class="form-control"placeholder="Posttile">
                </div>
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="file" class="file-upload-default">
                <div class="input-group col-xs-12">
                <input type="text" name="file" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                    <button class="file-upload-browse btn btn-primary" type="submit">Upload</button>
                </span>
                </div> 
            </div>
            <div class="form-group">
                <label for="exampleInputCity1">City</label>
                <input type="text" name="city" class="form-control"placeholder="Location">
            </div>

           
           <!-- <div class="form-group">
                <label for="exampleContent1">Content</label>
                <textarea class="form-control"  name="Content" srows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
            </form>
        </div>
        </div>-->
        <div class="form-group">
                <label for="exampleTextarea1">Textarea</label>
                <textarea class="form-control"  name="Textarea"rows="4"></textarea>
            </div>
           <!-- <div class="form-group">
                <label for="exampleInputCategory">category</label>
                <input type="text" name="category" class="form-control"placeholder="category">
            </div>-->
 <div class="form-group">
                <label for="exampleInputCategory">category</label>
                <input type="text" name="category" class="form-control"placeholder="category">
                
    
            </div>
            

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
            </form>
        </div>
        </div>
    </div>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php echo $this->include('admin\layouts\footer'); ?>

<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url('public/admin/assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
<script src="<?php echo base_url('public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('public/admin/assets/vendor/chart.js/chart.min.js'); ?>"></script>
<script src="<?php echo base_url('public/admin/assets/vendor/echarts/echarts.min.js'); ?>"></script>
<script src="<?php echo base_url('public/admin/assets/vendor/quill/quill.min.js'); ?>"></script>
<script src="<?php echo base_url('public/admin/assets/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
<script src="<?php echo base_url('public/admin/assets/vendor/tinymce/tinymce.min.js'); ?>"></script>
<script src="<?php echo base_url('public/admin/assets/vendor/php-email-form/validate.js'); ?>"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url('public/admin/assets/js/main.js'); ?>"></script>


</body>

</html>