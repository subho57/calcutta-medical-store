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

                    <section id="dom">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Category List</h4>
                                    </div>
                                    <div class="card-body collapse show">
                                        <div class="card-block card-dashboard">

                                            <table class="table table-striped table-bordered dom-jQuery-events" id="example">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No.</th>
                                                        <th>Category Name</th>
                                                        <th>Category Image</th>
                                                        <th>Total Subcategory</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sel = $con->query("select * from category where id != 1");
                                                    $i = 0;
                                                    while ($row = $sel->fetch_assoc()) {
                                                        $i = $i + 1;
                                                    ?>
                                                        <tr>

                                                            <td><?php echo $i; ?></td>
                                                            <td><?php echo $row['catname']; ?></td>
                                                            <td><img class="media-object round-media" src="<?php echo $row['catimg']; ?>" alt="Generic placeholder image" style="height: 75px;">
                                                            </td>
                                                            <td><?php echo $con->query("select * from subcategory where cat_id=" . $row['id'] . "")->num_rows; ?>
                                                            </td>
                                                            <td>
                                                                <a class="primary" href="category.php?edit=<?php echo $row['id']; ?>" data-original-title="" title="">
                                                                    <i class="ft-edit font-medium-3"></i>
                                                                </a>

                                                                <a class="danger" href="?dele=<?php echo $row['id']; ?>" data-original-title="" title="">
                                                                    <i class="ft-trash font-medium-3"></i>
                                                                </a>

                                                            </td>

                                                        </tr>
                                                    <?php } ?>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php
                    if (isset($_GET['dele'])) {
                        $con->query("delete from category where id=" . $_GET['dele'] . "");
                    ?>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                toastr.options.timeOut = 4500; // 1.5s

                                toastr.error('Category Deleted Successfully.');
                                setTimeout(function() {
                                    window.location.href = "categorylist.php";
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

    <script>
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excelHtml5',
                'csvHtml5'
            ]
        });
    </script>

    <style>
        #example_wrapper {
            overflow: auto;
        }

        td p {
            /* border-bottom: 1px solid #dee2e6;*/
            /* padding: 0% !important; */
            margin: 0px;
            /* font-size:11px;*/
        }

        td.manage_td {
            padding: 0% !important;
        }

        table {
            font-size: 12px;
        }
    </style>

</body>


</html>