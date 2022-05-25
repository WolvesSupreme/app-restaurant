<?php
$user                   = $this->d['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant List</title>
</head>

<body>
    <?php require 'views/navbar.php';?>
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
                                        <li class="breadcrumb-item active">Restaurant List</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Restaurant List</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


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