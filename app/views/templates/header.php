<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title><?php echo $data['title']; ?></title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url; ?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url; ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url; ?>/assets/css/argon.css?v=1.1.0" type="text/css">
    <link rel="stylesheet" href="<?= base_url; ?>/assets/css/custom.css" type="text/css">
</head>

<body>
    <?php include('sidebar.php');?>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <?php include('navbar.php');?>
        
        <!-- Header -->
        <div class="header pt-6 pb-6">
            <div class="container-fluid">
                <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                    <h6 class="h2 d-inline-block mb-0">Olshop.io</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Alternative</li> -->
                        </ol>
                    </nav>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">