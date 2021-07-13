<?php
require 'include/header.php';
$getkey = $con->query("select * from setting")->fetch_assoc();
define('ONE_KEY', $getkey['one_key']);
define('ONE_HASH', $getkey['one_hash']);
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

                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <?php
                                if (isset($_GET['a_bal'])) {
                                    ?>
                                    <div class="card-header">
                                        <h4 class="card-title">Add Wallet Balance To Selected User</h4>
                                    </div>
                                    <div class="card-body collapse show">
                                        <div class="card-block card-dashboard">
                                            <form class="form" method="post" enctype="multipart/form-data">
                                                <div class="form-body">


                                                    <div class="form-group">
                                                        <label for="cname">Wallet Amount</label>
                                                        <input type="number" step="any" name="wal_bal"
                                                               onkeypress="return isNumberKey(event)"
                                                               class="form-control" required/>
                                                    </div>

                                                    <div class="form-actions">

                                                        <button type="submit" name="add_balance"
                                                                class="btn btn-raised btn-raised btn-primary">
                                                            <i class="fa fa-check-square-o"></i> Add Balance
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <?php
                                if (isset($_POST['add_balance'])) {


                                $id = $_GET['a_bal'];

                                $wallet = $_POST['wal_bal'];

                                $con->query("update user set wallet=wallet + " . $wallet . " where id=" . $id . "");
                                $new_bal = $con->query("select * from user where id = " . $id . "")->fetch_assoc();
                                $heading = array(
                                    "en" => '💵 ₹ ' . $wallet . ' has been added to your Grocery Wallet 💵'
                                );
                                $content = array(
                                    "en" => 'New Wallet balance is ₹ ' . $new_bal['wallet']
                                );
                                $fields = array(
                                    'app_id' => ONE_KEY,
                                    'included_segments' => array("Subscribed Users"),
                                    'filters' => array(array('field' => 'tag', 'key' => 'userId', 'relation' => '=', 'value' => $id)),
                                    'headings' => $heading,
                                    'contents' => $content
                                );
                                $fields = json_encode($fields);


                                $ch = curl_init();
                                curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                                curl_setopt(
                                    $ch,
                                    CURLOPT_HTTPHEADER,
                                    array(
                                        'Content-Type: application/json; charset=utf-8',
                                        'Authorization: Basic ' . ONE_HASH
                                    )
                                );
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                                curl_setopt($ch, CURLOPT_POST, TRUE);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                                $response = curl_exec($ch);
                                curl_close($ch);

                                ?>
                                    <script type="text/javascript">
                                        $(document).ready(function () {
                                            toastr.options.timeOut = 4500; // 1.5s
                                            toastr.info('Balance Added Successfully!!!');
                                            window.location.href = "user.php";
                                        });
                                    </script>
                                <?php
                                }
                                } else {
                                ?>

                                    <div class="card-header">
                                        <h4 class="card-title">User List</h4>
                                    </div>
                                    <div class="card-body collapse show">
                                        <div class="card-block card-dashboard">

                                            <table class="table table-striped table-bordered dom-jQuery-events">
                                                <thead>
                                                <tr>
                                                    <th>Sr No.</th>
                                                    <th>Customer Name</th>
                                                    <th>Customer Email</th>
                                                    <th>Customer Mobile</th>
                                                    <th>Password</th>
                                                    <th>Total Orders Received</th>
                                                    <th>Total Purchase Amount (in ₹)</th>
                                                    <th>Current_Status</th>
                                                    <th>Wallet Balance</th>
                                                    <th>Status</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $sel = $con->query("select * from user");
                                                $i = 0;
                                                while ($row = $sel->fetch_assoc()) {
                                                    $i = $i + 1;
                                                    ?>
                                                    <tr>

                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td>
                                                            <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                                                        </td>
                                                        <td>
                                                            <a href="tel:<?php echo $row['ccode'] . $row['mobile']; ?>"><?php echo $row['ccode'] . $row['mobile']; ?></a>
                                                        </td>
                                                        <td><?php echo $row['password']; ?></td>
                                                        <td>
                                                            <?php
                                                            $qry = $con->query("SELECT COUNT(id) as total FROM orders where uid=" . $row['id'])->fetch_assoc();
                                                            echo $qry['total'];
                                                            ?>
                                                        </td>
                                                        <td style="min-width:100px;">
                                                            <?php
                                                            $qry = $con->query("SELECT SUM(total) as total FROM orders where uid=" . $row['id'] . " and status = 'completed'")->fetch_assoc();
                                                            if ($qry['total'] != null)
                                                                echo number_format($qry['total'], 2, '.', '');
                                                            else
                                                                echo "0";
                                                            ?>
                                                        </td>
                                                        <td><?php if ($row['status'] == 1) {
                                                                echo 'Active';
                                                            } else {
                                                                echo 'Deactive';
                                                            } ?></td>
                                                        <td><?php echo $row['wallet']; ?></td>
                                                        <td><?php if ($row['status'] == 1) { ?>
                                                                <a href="?status=0&sid=<?php echo $row['id']; ?>">
                                                                    <button class="btn btn-danger"> Make Deactive
                                                                    </button>
                                                                </a>
                                                            <?php } else { ?>
                                                                <a href="?status=1&sid=<?php echo $row['id']; ?>">
                                                                    <button class="btn btn-success"> Make Active
                                                                    </button>
                                                                </a>
                                                            <?php } ?>
                                                        </td>

                                                        <td>
                                                            <a class="danger" href="?dele=<?php echo $row['id']; ?>"
                                                               data-original-title="" title="">
                                                                <i class="ft-trash font-medium-3"></i>
                                                            </a>
                                                            &nbsp;&nbsp;
                                                            <a class="info"
                                                               href="address.php?uid=<?php echo $row['id']; ?>"
                                                               data-original-title="" title="">
                                                                <i class="fa fa-map-marker font-medium-3"></i>
                                                            </a>

                                                            <a class="btn btn-success"
                                                               href="?a_bal=<?php echo $row['id']; ?>"
                                                               data-original-title="" title="">
                                                                Add Balance
                                                            </a>
                                                        </td>

                                                    </tr>
                                                <?php } ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
                if (isset($_GET['status'])) {
                    $status = $_GET['status'];
                    $id = $_GET['sid'];

                    $con->query("update user set status=" . $status . " where id=" . $id . "");
                    ?>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            toastr.options.timeOut = 4500; // 1.5s

                            toastr.info('User Status Update Successfully!!');
                            setTimeout(function () {
                                window.location.href = "user.php";
                            }, 1500);

                        });
                    </script>
                    <?php
                }
                if (isset($_GET['dele'])) {
                    $con->query("delete from user where id=" . $_GET['dele'] . "");
                    ?>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            toastr.options.timeOut = 4500; // 1.5s

                            toastr.error('selected user deleted successfully.');
                            setTimeout(function () {
                                window.location.href = "user.php";
                            }, 1500);
                        });
                    </script>
                    <?php
                }
                ?>


            </div>
        </div>


    </div>
</div>

<?php
require 'include/js.php';
?>
<SCRIPT>
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
</SCRIPT>
<style>
    table {
        font-size: 13px;
    }
</style>
<!-- END PAGE LEVEL JS-->
</body>


</html>