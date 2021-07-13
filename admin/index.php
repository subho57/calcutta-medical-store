<?php
require 'include/dbconfig.php';

if (!empty($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
} else {
?>
    <!DOCTYPE html>
    <html lang="en" class="loading">
    <head>
        <!-- Subhankar Pal | @subho57 -->
        <meta name="description" content="<?php echo $fset['title']; ?>">
        <meta name="keywords" content="<?php echo $fset['title']; ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Login Page - <?php echo $fset['title']; ?></title>
        <link rel="shortcut icon" href="<?php echo $fset['favicon']; ?>">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">

        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="assets/css/util.css">
        <link rel="stylesheet" type="text/css" href="assets/css/main.css">
        <!--===============================================================================================-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
        <!-- Subhankar Pal | @subho57 -->
        <!-- PWA Migration -->
        <link rel="manifest" href="manifest.webmanifest" />
        <!-- <script>
        // load service worker
        "serviceWorker" in navigator && window.addEventListener("load", () => {
            navigator.serviceWorker.register("serviceWorker.js").then(e => console.log("Success: ", e.scope)).catch(e => console.log("Failure: ", e))
        });
        </script> -->
        <script type="module" src="https://cdn.jsdelivr.net/npm/@pwabuilder/pwainstall"></script>
        <script type="module">
            // This is the service worker with the Advanced caching
            /*
            This code uses the pwa-update web component https://github.com/pwa-builder/pwa-update to register your service worker,
            tell the user when there is an update available and let the user know when your PWA is ready to use offline.
            */

            import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

            const el = document.createElement('pwa-update');
            document.body.appendChild(el);
        </script>
        <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    </head>

    <body>

        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">

                    <form class="login100-form validate-form" method="post">
                        <span class="login100-form-title">
                            <img src="<?php echo $fset['logo']; ?>" alt="IMG" width="200px">
                            <br />
                            <br />
                            Admin Panel
                        </span>

                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" id="email" autocapitalize="none" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="pass" id="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit" name="sub_log">
                                Login
                            </button>
                        </div>

                        <div class="text-center p-t-13">
                            <a class="txt2" href="tel:<?php echo $con->query("SELECT callsupport FROM setting")->fetch_assoc()['callsupport']; ?>">
                                <i class="fa fa-phone m-l-5" aria-hidden="true"></i>
                                Call Helpline
                                @ <?php echo $fset['callsupport']; ?>
                            </a>
                        </div>
                    </form>
                    <?php
                    if (isset($_POST['sub_log'])) {

                        $email = $_POST['email'];
                        $pass = $_POST['pass'];

                        $name = $con->query("select * from admin where username='" . $email . "' and password='" . $pass . "'");
                        $user = $name->fetch_assoc();

                        if ($name->num_rows != 0) {
                            $_SESSION['username'] = $email;
                            ?>
                            <script>
                                window.location.href = "dashboard.php";
                            </script>
                            <?php
                        } else {
                    ?>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    toastr.options.timeOut = 4500; // 1.5s
                                    toastr.error('Invalid Email or Password!');
                                });
                            </script>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!--===============================================================================================-->
        <script src="assets/vendor/bootstrap/js/popper.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="assets/vendor/select2/select2.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
    </html>

<?php
}
