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

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="table-responsive pt-3">
                    <table class="table table-bordered table-striped project-orders-table">
                    <thead>
                    <tr>
                        <th class="ml-5">ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>POSTTITLE</th>
                        <th>FILE</th>
                        <th>CITY</th>
                        <th>TEXTAREA</th>
                        <th>CATEGORY</th>
            
                    </tr>
                    <?php 

                        $db = \Config\Database::connect();
                        $query = $db->query('SELECT * FROM Forms');
                        $results = $query->getResult();
                        foreach ($results as $row) 
                        {
                            echo '<tr>
                            <td>'.$row->id.'</td>
                                <td>'.$row->name.'</td>
                                <td>'.$row->email.'</td>
                                <td>'.$row->posttitle.'</td>
                                <td>'.$row->file.'</td>
                                <td>'.$row->city.'</td>
                                <td>'.$row->Textarea.'</td>
                                <td>'.$row->category.'</td>
                                <td>
                                <div class="d-flex align-items-center">
                                    <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                                    <a class= "btn btn-success btn-sm btn-icon-text mr-3" href="edititems">Edit</a>                      
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
                                    <a class= "btn btn-danger btn-sm " href="deleteitems">Delete</a>                          
                                    </button>
                                </div>
                                </td>
                                </tr>';
                        }
                    ?>
                    </thead>
                </div>   
            </div>
        </div>
    </div>
</div>    
<!-- container-scroller -->
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