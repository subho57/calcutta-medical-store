<?php
require 'include/header.php';
?>

<body data-col="2-columns" class=" 2-columns ">
<div class="layer"></div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="wrapper">


    <!-- main menu-->
    <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
    <?php include('main.php'); ?>
    <!-- Navbar (Header) Ends-->

    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">
                <!--Statistics cards Starts-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header" align="center">
                                <h4 class="card-title" id="basic-layout-form"> 🔑 APP IDs and Rest API KEYS 🔑 </h4>
                                <br>
                                <p> ⚠️ Changing these values may break the
                                    App Notification / Email System Completely ⚠️ <br> ⚠️ Change these values only
                                    when you know what you're doing ⚠️ </p>
                            </div>
                            <div class="card-body">
                                <div class="px-3">
                                    <form class="form" method="post" enctype="multipart/form-data">
                                        <div class="form-body row">
                                            <?php
                                            
                                            ?>
                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="cname">User Onesignal App Id</label>
                                                    <input type="text" id="cname" class="form-control" name="oid"
                                                           value="<?php echo $fset['one_key']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="cname">User Onesignal Rest API KEY</label>
                                                    <input type="text" id="cname" class="form-control" name="ohash"
                                                           value="<?php echo $fset['one_hash']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="cname">Rider Onesignal App Id</label>
                                                    <input type="text" id="cname" class="form-control" name="rid"
                                                           value="<?php echo $fset['r_key']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="cname">Rider Onesignal Rest API KEY</label>
                                                    <input type="text" id="cname" class="form-control" name="rhash"
                                                           value="<?php echo $fset['r_hash']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="cname">Admin Panel OneSignal App Id</label>
                                                    <input type="text" id="cname" class="form-control" name="aid"
                                                           value="<?php echo $fset['admin_key']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="cname">Admin Panel OneSignal Rest API KEY</label>
                                                    <input type="text" id="cname" class="form-control" name="ahash"
                                                           value="<?php echo $fset['admin_hash']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="cname">Shops Panel OneSignal App Id</label>
                                                    <input type="text" id="cname" class="form-control" name="sid"
                                                           value="<?php echo $fset['shops_key']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="cname">Shops Panel OneSignal Rest API KEY</label>
                                                    <input type="text" id="cname" class="form-control" name="shash"
                                                           value="<?php echo $fset['shops_hash']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="cname">Sendgrid Rest API KEY</label>
                                                    <input type="text" id="cname" class="form-control" name="skey"
                                                           value="<?php echo $fset['sendgrid_key']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                                <div class="form-group">
                                                    <label for="cname">Sendgrid API Linked Email 📧</label>
                                                    <input type="text" id="cname" class="form-control" name="smail"
                                                           value="<?php echo $fset['sendgrid_email']; ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-actions">

                                            <button type="submit" name="sub_cat"
                                                    class="btn btn-raised btn-raised btn-primary">
                                                <i class="fa fa-check-square-o"></i> Update API Keys
                                            </button>
                                        </div>
                                        <?php
                                        if (isset($_POST['sub_cat'])) {
                                            $oid = $_POST['oid'];
                                            $ohash = $_POST['ohash'];
                                            $rid = $_POST['rid'];
                                            $rhash = $_POST['rhash'];
                                            $skey = $_POST['skey'];
                                            $smail = $_POST['smail'];
                                            $aid = $_POST['aid'];
                                            $ahash = $_POST['ahash'];
                                            $sid = $_POST['sid'];
                                            $shash = $_POST['shash'];
                                            $con->query("update setting set one_key='" . $oid . "',one_hash='" . $ohash . "',sendgrid_key='" . $skey . "',sendgrid_email='" . $smail . "',r_key='" . $rid . "',r_hash='" . $rhash . "',admin_key='" . $aid . "',admin_hash='" . $ahash . "',shops_key='" . $sid . "',shops_hash='" . $shash . "' where id=1");
                                            ?>

                                            <script type="text/javascript">
                                                $(document).ready(function () {
                                                    toastr.options.timeOut = 4500; // 1.5s
                                                    toastr.success('API Keys Updated Successfully!!');
                                                    setTimeout(function () {
                                                        window.location.href = "keys.php";
                                                    }, 1500);
                                                });
                                            </script>
                                            <?php
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require 'include/js.php';
?>
</body>

</html>