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
    <title>Categorias</title>

    <style>
        .error {
            color: red;
            font-style: italic;
        }
    </style>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Stock Control</a></li>
                                        <li class="breadcrumb-item active">Responsive Table</li>
                                    </ol>
                                </div>
                                <!-- <h4 class="page-title">Categories</h4> -->
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <h4 class="header-title">Registrar nueva categoria</h4>
                                <p class="sub-header"></p> <!-- TODO: -->

                                <form action="categories/newCategory" method="POST">
                                    <div class="form-group">
                                        <label for="name">Nombre * :</label>
                                        <input type="text" class="form-control" name="name" id="color" placeholder="Ingrese nombre: Desayuno" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="color">Color * :</label>
                                        <div><input type="color" class="form-control" name="color" autocomplete="off" required></div>
                                    </div>

                                    <div class="form-group mb-0">
                                        <input type="submit" class="btn btn-primary waves-effect waves-light" value="Guardar">
                                    </div>

                                </form>
                            </div> <!-- end card-box-->
                        </div> <!-- end col-->

                        <div class="col-lg-6">
                            <div class="card-box">
                                <h4 class="header-title">Table Categories</h4>
                                <p class="sub-header">
                                    <!-- Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light or dark gray. -->
                                </p>

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Color</th>
                                                <th>Editar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM categories";
                                            $res = mysqli_query($connect, $sql);

                                            while ($mostrar = mysqli_fetch_array($res)) {
                                            ?>
                                            <tr >
                                                <td><?php echo $mostrar['id']; ?></td>
                                                <td><?php echo $mostrar['name']; ?></td>
                                                <td><?php echo $mostrar['color']; ?></td>
                                                <td style= "text-align: center;">
                                                    <span style="cursor: pointer;" class="btn btn-warning btn-xs">
                                                        <span class="fa fa-pencil-square-o"></span>
                                                    </span>
                                                </td>
                                                <td style= "text-align: center;">
                                                    <span style="cursor: pointer;" class="btn btn-danger btn-xs">
                                                        <span class="fa fa-trash"></span>
                                                    </span>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>


                                    </table>


                                </div> <!-- end table-responsive-->

                            </div> <!-- end card-box -->
                        </div> <!-- end col -->
                    </div><!-- end row-->
                    <!-- end row -->


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

    <!-- Table Editable plugin-->
    <script src="assets/libs/jquery-tabledit/jquery.tabledit.min.js"></script>

    <!-- Table editable init-->
    <script src="assets/js/pages/tabledit.init.js"></script>

    <?php require 'views/sidebarAdmin.php'; ?>
</body>

</html>