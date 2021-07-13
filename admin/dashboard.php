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
                  <h4 class="card-title" id="basic-layout-form">Dashboard</h4>

                </div>
                <div class="card-body" style="padding:10px;">
                  <div class="row" matchheight="card">
                    <div class="col-xl-3 col-lg-6 col-12">

                      <div class="card">
                        <a href="categorylist.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 danger"><?php echo $con->query("select * from category where id != 1")->num_rows; ?></h3>
                                  <span>Total Category</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-list danger font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="subcategorylist.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 danger"><?php echo $con->query("select * from subcategory")->num_rows; ?></h3>
                                  <span>Total Sub Cat.</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-list danger font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="productlist.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 success"><?php echo $con->query("select * from product")->num_rows; ?></h3>
                                  <span>Total Products</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-basket-loaded success font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="couponlist.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 success"><?php echo $con->query("select * from tbl_coupon")->num_rows; ?></h3>
                                  <span>Total Coupons</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="fa fa-gift success font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="offerzonelist.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 success"><?php echo $con->query("select * from product where cid = 1")->num_rows; 
                                                            ?></h3>
                                  <span>Total Offers</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <h1>🎁</h1>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="alist.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 warning"><?php echo $con->query("select * from area_db")->num_rows; ?></h3>
                                  <span>Total Area</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="tlist.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 primary"><?php echo $con->query("select * from timeslot")->num_rows; ?></h3>
                                  <span>Total Timeslots</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-hourglass primary font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="bannerlist.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 primary"><?php echo $con->query("select * from banner")->num_rows; ?></h3>
                                  <span>Total Banner 1</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-screen-desktop primary font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="new_bannerlist.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 primary"><?php echo $con->query("select * from new_banner")->num_rows; ?></h3>
                                  <span>Total Banner 2</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-screen-desktop primary font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="user.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 success"><?php echo $con->query("select * from user")->num_rows; ?></h3>
                                  <span>Total Customers</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-user success font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="order.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 danger">
                                    <?php
                                    $temp = $con->query("select * from orders where status='pending'")->num_rows;
                                    echo $temp;
                                    if ($temp > 0) {
                                    ?>
                                      <script type="text/javascript">
                                        $(document).ready(function() {
                                          toastr.options.timeOut = 0; // 1.5s
                                          toastr.error('You\'ve Pending Orders.');
                                        });
                                      </script>
                                    <?php
                                    }
                                    ?>
                                  </h3>
                                  <span>Pending Orders</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-handbag danger font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="orders.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 primary"><?php echo $con->query("select * from orders where status='completed'")->num_rows; ?></h3>
                                  <span>Completed Orders</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-handbag primary font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="order.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 warning"><?php echo $con->query("select * from orders where status='cancelled'")->num_rows; ?></h3>
                                  <span>Cancelled Orders</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-handbag warning font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">

                      <div class="card">
                        <a href="orderrate.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 danger"><?php echo $con->query("select * from rate_order")->num_rows; ?></h3>
                                  <span>Customer Ratings</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-like danger font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>

                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="feed.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 primary"><?php echo $con->query("select * from feedback")->num_rows; ?></h3>
                                  <span>Total Feedbacks</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="icon-bubbles primary font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <div class="card-content">
                          <div class="px-3 py-3">
                            <div class="media">
                              <div class="media-body text-left">
                                <h3 class="mb-1 success"><?php $sales  = $con->query("select sum(total) as full_total from orders where status='completed'")->fetch_assoc();

                                                          if ($sales['full_total'] == '') {
                                                            echo 0;
                                                          } else {
                                                            echo number_format((float)$sales['full_total'], 2, '.', '');
                                                          } ?></h3>
                                <span>Total Sales</span>
                              </div>
                              <div class="media-right align-self-center">
                                <i class="icon-rocket success font-large-2 float-right"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12">
                      <div class="card">
                        <a href="riderlist.php">
                          <div class="card-content">
                            <div class="px-3 py-3">
                              <div class="media">
                                <div class="media-body text-left">
                                  <h3 class="mb-1 primary"><?php echo $con->query("select * from rider")->num_rows; ?></h3>
                                  <span>Total Deliv. Boy</span>
                                </div>
                                <div class="media-right align-self-center">
                                  <i class="fa fa-motorcycle primary font-large-2 float-right"></i>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                  </div>

                </div>
              </div>

            </div>
          </div>
          <style>
            .col-xl-3.col-lg-6.col-12>.card {
              background: aliceblue;
            }
          </style>
          <?php
          require 'include/js.php';
          ?>
          <!-- Subhankar Pal | @subho57 -->
          <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
          <script>
            window.OneSignal = window.OneSignal || [];
            OneSignal.push(function() {
              OneSignal.init({
                appId: "<?php echo $fset['admin_key']; ?>",
              });
            });
          </script>

</body>

</html>