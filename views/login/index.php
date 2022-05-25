<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/login.css"> -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?php echo constant('URL'); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo constant('URL'); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo constant('URL'); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <title>Xeria - Admin Dashboard Template</title>
</head>

<body class="authentication-bg authentication-bg-pattern">
    <p><?php $this->showMessages(); ?></p>
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <a href="<?php echo constant('URL'); ?>">
                                    <span><img src="<?php echo constant('URL'); ?>assets/images/logo-dark.png" alt="" height="18"></span>
                                </a>
                                <p class="text-muted mb-4 mt-3">Enter your username and password to access admin panel.</p>
                            </div>

                            <h5 class="auth-title">Sign In</h5>

                            <form action="<?php echo constant('URL'); ?>login/authenticate" method="POST">
                                <div><?php (isset($this->errorMessage)) ?  $this->errorMessage : '' ?></div>
                                <div class="form-group mb-3">
                                    <label for="username">username </label>
                                    <input class="form-control" type="text" id="username" name="username" required="" placeholder="Enter your username">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required="" id="password" name="password" placeholder="Enter your password">
                                </div>


                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-danger btn-block" type="submit"> Log In </button>
                                </div>

                            </form>

                            <div class="text-center">
                                <h5 class="mt-3 text-muted">Sign in with</h5>
                                <ul class="social-list list-inline mt-3 mb-0">
                                    <li class="list-inline-item">
                                        <a href="#" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github-circle"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p> <a href="<?php echo constant('URL'); ?>recoverpass" class="text-muted ml-1">Forgot your password?</a></p>
                            <p class="text-muted">Don't have an account? <a href="<?php echo constant('URL'); ?>signup" class="text-muted ml-1"><b class="font-weight-semibold">Sign Up</b></a></p>
                        </div> <!-- end col -->
                    </div>

                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <footer class="footer footer-alt">
        2022 &copy; StuwarGG theme by <a href="" class="text-muted">Grupo VI</a>
    </footer>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
</body>

</html>