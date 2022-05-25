<?php
$user = $this->d['user'];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense App - Dashboard</title>
</head>

<body>

    <?php require 'views/navbar.php'; ?>

    <!-- Begin page -->
    <div id="wrapper">
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                        <li class="breadcrumb-item active">Settings</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Settings</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <div class="card-box text-center">
                                    <div id="user-info-container">
                                        <div id="user-photo">
                                            <?php if ($user->getPhoto() != '') { ?>
                                                <img class="rounded-circle img-thumbnail" src="public/img/photos/<?php echo $user->getPhoto(); ?>" width="200" height="200" />
                                            <?php }
                                            ?>
                                        </div>
                                        <div id="user-info">
                                            <h2 class="mb-0" ><?php echo ($user->getName() != '') ? $user->getName() : $user->getUsername();  ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <form action=<?php echo constant('URL') . 'user/updateName' ?> method="POST">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="name" class="form-control" id="name" autocomplete="off" required value="<?php echo $user->getName() ?>">
                                        <div><input type="submit" class="btn btn-primary waves-effect waves-light" value="Cambiar nombre" /></div>
                                    </div>
                                </form>

                                <form action="<?php echo constant('URL') . 'user/updatePhoto' ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="photo">Foto de perfil</label>

                                        <?php
                                        if (!empty($user->getPhoto())) {
                                        ?>
                                            <img src="<?php echo constant('URL') ?>public/img/photos/<?php echo $user->getPhoto() ?>" width="50" height="50" />
                                        <?php
                                        }
                                        ?>

                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="photo" id="photo" autocomplete="off" required>
                                                <label class="custom-file-label" for="inputGroupFile04"><?php echo $user->getPhoto() ?></label>
                                            </div>
                                        </div>
                                        <div><input type="submit" class="btn btn-primary waves-effect waves-light" value="Cambiar foto de perfil" /></div>
                                    </div>
                                </form>
                            </div> <!-- end card-box-->
                        </div> <!-- end col-->
                    </div>
                </div>
            </div>
        </div>
    </div>

   
    <?php require 'views/sidebar.php'; ?>
</body>

</html>