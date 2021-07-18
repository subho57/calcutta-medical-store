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
                <div class="card-header">
                  <h4 class="card-title" id="basic-layout-form">Upload Products from CSV</h4>

                </div>
                <div class="card-body">
                  <div class="px-3">
                    <form class="form" method="post" enctype="multipart/form-data">
                      <div class="form-body">

                        <div class="form-group">
                          <label>Select A CSV</label>
                          <input type="file" name="csv" class="form-control-file" id="projectinput8">
                        </div>

                      </div>

                      <div class="form-actions">

                        <button type="submit" name="sub_cat" class="btn btn-raised btn-raised btn-primary">
                          <i class="fa fa-check-square-o"></i> Upload CSV
                        </button>

                        <a href="import.csv" target="_blank" class="btn btn-raised btn-raised btn-info" id="download">Demo CSV</a>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            <?php
            if (isset($_POST['sub_cat'])) {
              $csv = array();

              // check there are no errors
              if ($_FILES['csv']['error'] == 0) {
                $name = $_FILES['csv']['name'];
                $ext = strtolower(end(explode('.', $_FILES['csv']['name'])));
                $type = $_FILES['csv']['type'];
                $tmpName = $_FILES['csv']['tmp_name'];

                // check the file is a csv
                if ($ext === 'csv') {
                  if (($handle = fopen($tmpName, 'r')) !== FALSE) {
                    // necessary if a large csv file
                    set_time_limit(0);

                    $row = 0;
                    fgets($handle);
                    while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                      // number of fields in the csv
                      $col_count = count($data);

                      date_default_timezone_set('Asia/Kolkata');
                      $timestamp = date("Y-m-d");
                      // get the values from the csv
                      $counts = $con->query("select * from product where pname='" . ucwords(strip_tags(mysqli_real_escape_string($con, $data[0]))) . "'")->num_rows;

                      if ($counts == 0) {
                        $cname = ucwords(strip_tags(mysqli_real_escape_string($con, $data[4])));
                        $con->query("INSERT INTO `category` SELECT NULL, '$cname', '' FROM DUAL WHERE NOT EXISTS (SELECT `id` from `category` where `catname`='$cname')");
                        $cid = $con->query("select id from category where `catname`='$cname'")->fetch_assoc()['id'];

                        $sname = ucwords(strip_tags(mysqli_real_escape_string($con, $data[5])));
                        $con->query("INSERT INTO `subcategory` SELECT NULL, $cid, '$sname', '" . $data[1] . "' FROM DUAL WHERE NOT EXISTS (SELECT `id` from `subcategory` where `name`='$sname')");
                        $sid = $con->query("select id from subcategory where `name`='$sname'")->fetch_assoc()['id'];
                        
                        $con->query("insert into product(`pname`,`pimg`,`prel`,`sname`,`cid`,`sid`,`psdesc`,`pgms`,`pprice`,`date`,`status`,`stock`,`discount`,`popular`)values('" . ucwords(strip_tags(mysqli_real_escape_string($con, $data[0]))) . "','" . $data[1] . "','" . $data[2] . "','" . $data[3] . "'," . $cid . "," . $sid . ",'" . strip_tags(mysqli_real_escape_string($con, $data[6])) . "','" . $data[7] . "','" . $data[8] . "','" . $timestamp . "'," . $data[10] . "," . $data[9] . "," . $data[11] . "," . $data[12] . ")");
                      }
                      // inc the row
                      $row++;
                    }

                    fclose($handle);
                  }
            ?>
                  <script type="text/javascript">
                    $(document).ready(function() {
                      toastr.options.timeOut = 4500; // 1.5s
                      toastr.info('Products Imported Successfully!!');
                      setTimeout(function() {
                        window.location.href = "productlist.php";
                      }, 1500);
                    });
                  </script>
            <?php
                }
              }
            }
            ?>
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