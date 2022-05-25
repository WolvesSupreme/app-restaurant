<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/signup.css"> -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo constant('URL'); ?>assets/images/favicon.ico">

    <!-- App css -->
    <link href="<?php echo constant('URL'); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo constant('URL'); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo constant('URL'); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <title>Sign Up</title>
    <style>
        .error {
            color: red;
            font-style: italic;
        }
    </style>
</head>

<body>
    <?php $this->showMessages(); ?>

    <!-- <section id="signup">
        <div class="caja signup-row">
            <article class="signup-left-col">
                <h2 class='signup-title'>Sign Up to join our community</h2>

                <form action="<?php echo constant('URL'); ?>signup/newUser" class='signup-form' id="registration" method="POST">
                    <div><?php (isset($this->errorMessage)) ?  $this->errorMessage : '' ?></div>
                    <label for="username">
                        <h5 className="contact-text">Username</h5>
                    </label>
                    <input type="text" class='form-control' name="username" placeholder="Ingrese username" id="username">

                    <label for="password">
                        <h5 className="contact-text">Password</h5>
                    </label>
                    <input type="password" class='form-control' name="password" placeholder='Ingrese password' id="password">

                    <p>
                        ¿Tienes una cuenta? <a href="<?php echo constant('URL'); ?>">Iniciar sesion</a>
                    </p>

                    <button> Sign In</button>

                </form>

            </article>

            <article class="signup-right-col">
                <img src="<?php echo constant('URL'); ?>public/img/registred.svg" alt="">
            </article>

        </div>
    </section> -->

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <a href="index.html">
                                    <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                                </a>
                                <p class="text-muted mb-4 mt-3">Don't have an account? Create your free account now.</p>
                            </div>

                            <h5 class="auth-title">Create Account</h5>

                            <form action="<?php echo constant('URL'); ?>signup/newUser" id="registration" method="POST">
                                <div><?php (isset($this->errorMessage)) ?  $this->errorMessage : '' ?></div>
                                <div class="form-group">
                                    <label for="username">username</label>
                                    <input class="form-control" type="text" id="username" name="username" placeholder="Enter your username" required>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required id="password" name="password" placeholder="Enter your password">
                                </div>
                                <!-- <div class="form-group">
                                    <div class="custom-control custom-checkbox checkbox-info">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                        <label class="custom-control-label" for="checkbox-signup">I accept <a href="#" class="text-dark">Terms and Conditions</a></label>
                                    </div>
                                </div> -->
                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-danger btn-block" type="submit"> Sign Up </button>
                                </div>

                            </form>

                            <div class="text-center">
                                <h5 class="mt-3 text-muted">Sign up using</h5>
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
                            <p class="text-muted">Already have account? <a href="<?php echo constant('URL'); ?>" class="text-muted ml-1"><b class="font-weight-semibold">Sign In</b></a></p>
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

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="public/js/validator.js"></script>
</body>

</html>