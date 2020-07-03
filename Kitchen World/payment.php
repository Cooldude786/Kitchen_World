<?php

include("header.php");
?>


<!DOCTYPE html>
<head>
    <title>Payment Information</title>


</head>
<body>
    <section id="container">
        <section id="main-content">
            <section class="wrapper">
                <div class="form-w3layouts">
                    <!-- page start-->
                    <!-- page start-->
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                   Payment Information
                                </header>



                                <div class="box-body" id='reload'>
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered table-hover box-body" id="myTable" >
                                            <thead>
                                                <tr>

                                                    <th>ID</th>
                                                    <th>Order Id</th>


                                                    <th>Quantity</th>
                                                    <th>Amount</th>

                                                    <th>Order Status</th>

                                                    <th>Date</th>



                                                </tr>
                                            </thead>

                                            <tbody >

                                                <?php
                                                $emp_query = "SELECT * FROM Payment WHERE 1 ";

                                                // Date filter
                                                if (isset($_POST['but_search'])) {
                                                    $fromDate = $_POST['fromDate'];
                                                    $endDate = $_POST['endDate'];

                                                    if (!empty($fromDate) && !empty($endDate)) {
                                                        $emp_query .= " and date
                                                        between '" . $fromDate . "' and '" . $endDate . "' ";
                                                    }
                                                }

                                                // Sort
                                                $emp_query .= " ORDER BY date DESC";
                                                $employeesRecords = mysqli_query($conn, $emp_query);

                                                // Check records found or not
                                                if (mysqli_num_rows($employeesRecords) > 0) {

                                                    while ($row = mysqli_fetch_assoc($employeesRecords)) {
                                                          $id=$row['id'];
                                                        $ord_id = $row['order_id'];

                                                        $amount = $row['amount'];
                                                        $qty=$row['qty'];

                                                        $order_status = $row['payment status'];

                                                        $date = $row['date'];
                                                        ?>

                                                        <tr>
                                                          <td><?php echo $id ;?></td>
                                                          <td><a href="order_info.php?ids=<?php echo$ord_id;?>"><?php echo $ord_id ;?></a></td>

                                                        <td><?php echo $qty;?></td>
                                                        <td><?php echo $amount;?></td>




                                                              <td><h4  style="color:#3c763d;" ><i class="fa fa-check-circle-o" aria-hidden="true"><?php echo  $order_status ?></i></h4></td>


                                                            <script type="text/javascript">
                                                                function success(orderid,Status)
                                                                { console.log(orderid);
                                                                    var sure='orderid='+orderid+'&Status='+Status;

                                                                    $.ajax({
                                                                        type:'post',
                                                                        url:'success.php',
                                                                        data:sure,
                                                                        success:function(response)
                                                                        {
                                                                            console.log("res",response);
                                                                            console.log("res",sure);
                                                                            $(' #reload').load(' #reload');

                                                                        }
                                                                    });
                                                                }

                                                            </script>
                                                           <?php
                                                            echo "<td>" . $date . "</td>";
                                                            echo "</tr>";
                                                        }
                                                    } else {
                                                        echo "<tr>";
                                                        echo "<td colspan='8'>No record found.</td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </section>
                        </div>
                    </div>

                </div>
            </section>

            <!-- / footer -->
        </section>

        <!--main content end-->
    </section>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="js/jquery.scrollTo.js"></script>
</body>
</html>
