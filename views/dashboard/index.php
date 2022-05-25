<?php
$user                   = $this->d['user'];
$stats = $this->d['stats'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xeria - Responsive Admin Dashboard Template</title>

</head>

<body>
    <?php require 'views/navbar.php'; ?>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Xeria</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Contenido principal</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">
                                <h4 class="header-title mt-0 mb-2">USUARIOS</h4>

                                <div class="mt-1">
                                    <div class="float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="64" data-height="64" data-fgColor="#f05050 " data-bgColor="#F9B9B9" value="58" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15" />
                                    </div>
                                    <div class="text-right">
                                        <h2 class="mt-3 pt-1 mb-1"> <?php echo $stats['count-users']; ?> </h2>
                                        <p class="text-muted mb-0">Usuarios registrados</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div><!-- end col -->

                    </div>
                    <!-- End row -->


                    <!-- end Row -->


                    <!-- end Row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php require 'views/footer.php'; ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->
    <?php require 'views/sidebar.php'; ?>


</body>

</html>