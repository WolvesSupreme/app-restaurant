<?php
$user                   = $this->d['user'];

$connect = mysqli_connect('localhost', 'root', '', 'restaurantapp');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers List</title>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Customers</a></li>
                                        <li class="breadcrumb-item active">Customers List</li>
                                    </ol>
                                </div>
                                <!-- <h4 class="page-title">Customers list</h4> -->
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title">Lista de Empleados</h4>
                                <p class="sub-header">
                                    <!-- Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray. -->
                                </p>

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Id</th>
                                                <th>DNI</th>
                                                <th>Nombre</th>
                                                <th>AP. Paterno</th>
                                                <th>AP. Materno</th>
                                                <th>Departamento</th>
                                                <th>Provincia</th>
                                                <th>Distrito</th>
                                                <th>Direccion</th>
                                                <th>F. Nacimiento</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM employees";
                                            $res = mysqli_query($connect, $sql);

                                            while ($mostrar = mysqli_fetch_array($res)) {
                                            ?>
                                                <tr>
                                                    <th><?php echo $mostrar['id']; ?></th>
                                                    <th><?php echo $mostrar['dni']; ?></th>
                                                    <th><?php echo $mostrar['nombre']; ?></th>
                                                    <th><?php echo $mostrar['paterno']; ?></th>
                                                    <th><?php echo $mostrar['materno']; ?></th>
                                                    <th><?php echo $mostrar['departamento']; ?></th>
                                                    <th><?php echo $mostrar['provincia']; ?></th>
                                                    <th><?php echo $mostrar['distrito']; ?></th>
                                                    <th><?php echo $mostrar['direccion']; ?></th>
                                                    <th><?php echo $mostrar['fecha']; ?></th>
                                                    
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->

                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div><!-- end row -->


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

    <?php require 'views/sidebarAdmin.php'; ?>
</body>

</html>