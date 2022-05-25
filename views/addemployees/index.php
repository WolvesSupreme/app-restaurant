<?php
$user                   = $this->d['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/user.css">
    <title>Add Employees</title>
    <style>
        .error {
            color: red;
            font-style: italic;
        }
    </style>
</head>

<body>
    <?php require 'views/navbar.php'; ?>
    <?php $this->showMessages(); ?>
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
                                        <li class="breadcrumb-item active">Add Employees</li>
                                    </ol>
                                </div>
                                <!-- <h4 class="page-title">Add Employees</h4> -->
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                </div>

                <!-- Form row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Registrar Empleado</h4>
                                <p class="text-muted font-13"> </p>

                                <form action="addemployees/newEmployees" id="demo-form" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="dni" class="col-form-label">DNI</label>
                                            <input type="text" class="form-control" id="dni" name="dni" placeholder="Entre DNI">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="departamento" class="col-form-label">Departamento</label>
                                            <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Entre Departamento">
                                            <!-- <select id="departamento" class="form-control">
                                                <option>Choose</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nombre" class="col-form-label">Nombre</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter Nombre">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="provincia" class="col-form-label">Provincia</label>
                                            <input type="text" class="form-control" id="provincia" name="provincia" placeholder="Enter Provincia">
                                            <!-- <select id="provincia" class="form-control">
                                                <option>Choose</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="paterno" class="col-form-label">Ap. Paterno</label>
                                            <input type="text" class="form-control" id="paterno" name="paterno" placeholder="Enter Apellido Paterno">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="distrito" class="col-form-label">Distrito</label>
                                            <input type="text" class="form-control" id="distrito" name="distrito" placeholder="Enter Distrito">
                                            <!-- <select id="distrito" class="form-control">
                                                <option>Choose</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select> -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="materno" class="col-form-label">Ap. Materno</label>
                                            <input type="text" class="form-control" id="materno" name="materno" placeholder="Enter Apellido Materno">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="direccion" class="col-form-label">Direccion</label>
                                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Enter Direccion">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="fecha" class="col-form-label">Fecha Nacimiento</label>
                                            <input class="form-control" id="fecha" type="date" name="fecha">
                                        </div>

                                    </div>

                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>


                                </form>

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="public/js/validator/validatoremployees.js"></script>

    <?php require 'views/sidebarAdmin.php'; ?>


</body>

</html>