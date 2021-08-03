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
                                        <h4 class="card-title">Feedback List</h4>
                                    </div>

                                    <div class="card-body collapse show">
                                        <div class="card-block card-dashboard">


                                            <table class="table table-striped table-bordered dom-jQuery-events" id="example">
                                                <thead>
                                                    <tr>
                                                        <th>Sr No.</th>

                                                        <th>Name</th>
                                                        <th>Mobile</th>
                                                        <th>Rate Star</th>
                                                        <th>Message</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $sel = $con->query("select * from feedback");
                                                    $i = 0;
                                                    while ($row = $sel->fetch_assoc()) {
                                                        $i = $i + 1;
                                                    ?>
                                                        <tr>

                                                            <td><?php echo $i; ?></td>
                                                            <?php
                                                            $fetchs = $con->query("select * from user where id='" . $row['uid'] . "'")->fetch_assoc();
                                                            ?>

                                                            <td><?php echo $fetchs['name']; ?></td>
                                                            <td><?php echo $fetchs['mobile']; ?></td>
                                                            <td><?php echo $row['rate']; ?></td>
                                                            <td><?php echo $row['msg']; ?></td>


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