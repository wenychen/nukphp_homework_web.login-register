<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="NUKIM_php_homework">
    <meta name="author" content="weny">
    <link rel="icon" href="/php_homework/web.login&register/images/login.png" type="image/x-icon"/>

    <title>會員登入</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
        <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <h3 class="widget-title">登入會員</h3>
                    <div class="contact-form">
                        <form name="contactform" id="contactform" action="#" method="post">
                            <p>
                                <input type="email" class="form-control form-control-user"
                                id="account" name="account"  onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" pattern="[a-zA-Z0-9]" placeholder="請輸入您的帳號">
                            </p>
                            <p>
                                <input type="password" class="form-control form-control-user" id="psd" name="psd" placeholder="請輸入您的密碼">
                            </p>
                        </form>
                    </div> <!-- /.contact-form -->
                </div>
                <div class="col-md-7 col-sm-6 map-wrapper">
                    <h3 class="widget-title">Our Location</h3>
                    <div class="map-holder" style="height: 360px"></div>
                </div>
            </div>
        </div>
    </div> <!-- /.content-section -->

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">會員登入</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="account" name="account"  onkeyup="value=value.replace(/[^\w\.\/]/ig,'')" pattern="[a-zA-Z0-9]" placeholder="請輸入您的帳號">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="psd" name="psd" placeholder="請輸入您的密碼">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">記住帳號與密碼</label>
                                            </div>
                                        </div>
                                        <a href="" class="btn btn-primary btn-user btn-block">
                                            登入
                                        </a>
                                        <!-- <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                   <!--  <hr> -->
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">忘記密碼?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">註冊去！</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>