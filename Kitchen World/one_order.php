 <?php

include("header.php");
?>


<!DOCTYPE html>
<head>
    <title>Order Information</title>

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
                                  Order Report
                                </header>

                                <br>
                                <div class="box-body">

                                    <form method='post' action="">
                                        Start Date <input type='date' class='dateFilter' name='fromDate' value='<?php if (isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>'>

                                        End Date <input type='date' class='dateFilter' name='endDate' value='<?php if (isset($_POST['endDate'])) echo $_POST['endDate']; ?>'>

                                        <input type='submit' name='but_search' value='Search'>
                                    </form>
                                </div>
                                <br><br>


                                <div class="box-body" id='reload'>
                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered table-hover box-body" id="myTable" >
                                            <thead>
                                                <tr>

                                                    <th>ID</th>
                                                    <th>Order Id</th>

                                                    <th>Address</th>
                                                    <th>Quantity</th>
                                                    <th>Amount</th>
                                                    <th>Payment Type</th>
                                                    <th>Order Status</th>
                                                    <th>Name</th>
                                                    <th>Date</th>



                                                </tr>
                                            </thead>

                                            <tbody >
                                             <form method="post" action="orderReport_pdf.php">
                                                <?php
                                                $emp_query = "SELECT * FROM order_re WHERE 1 ";

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
                                                $emp_query .= " ORDER BY date DESC ";
                                                $employeesRecords = mysqli_query($conn, $emp_query);

                                                // Check records found or not
                                                if (mysqli_num_rows($employeesRecords) > 0) {

                                                    while ($row = mysqli_fetch_assoc($employeesRecords)) {
                                                       $id=$row['id'];
                                                        $ord_id = $row['order_id'];
                                                        $address_id = $row['address_id'];
                                                        $amount = $row['amount'];
                                                        $qty=$row['quantity'];
                                                        $payment_type = $row['payment_type'];
                                                        $order_status = $row['order_status'];
                                                        $email = $row['email'];
                                                        $date = $row['date'];
                                                        ?>

                                                        <tr>
                                                          <td><?php echo $id ;?></td>
                                                          <td><a href="order_info.php?ids=<?php echo$ord_id;?>"><?php echo $ord_id ;?></a></td>
                                                          <?php
                                                          $sql1 = "select * from address where `id`= '" . $address_id . "' ";
                                                          $result1 = mysqli_query($conn, $sql1);
                                                          while ($row1 = mysqli_fetch_array($result1)) {
                                                            $c_address = $row1["address"];
                                                            ?>

                                                            <td ><?php echo $c_address; ?></td>

                                                        <?php }?>
                                                        <td><?php echo $qty;?></td>
                                                        <td><?php echo $amount;?></td>
                                                        <td ><?php echo $payment_type;?></td>

                                                    <?php

                                                        if($order_status=='Success')
                                                        {?>

                                                            <td><h4  style="color:#3c763d;" ><i class="fa fa-check-circle-o" aria-hidden="true"><?php echo  $order_status ?></i></h4></td>

                                                        <?php }
                                                         elseif($order_status=='Return')
                                                        {?>

                                                            <td><h4  style="color:#3c763d;" ><i class="fa fa-check-circle-o" aria-hidden="true"><?php echo  $order_status ?></i></h4></td>

                                                        <?php }
                                                        else
                                                        {
                                                            ?>
                                                            <td ><h4 style="color: #ff5722;"><?php echo  $order_status ?></h4>
                                                            </br>
                                                            <input type="submit" name="succeed" onClick="success('<?php echo $ord_id;?>','confome')"class="btn btn-info pull">
                                                            <input type="submit" name="cancel" onClick="success('<?php echo $ord_id;?>','return')"value="cancel" class="btn btn-danger">
                                                            <br> </td><?php } ?>
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
                                                            $sql1 = "select * from userinfo where `email`= '" . $email . "' ";
                                                            $result1 = mysqli_query($conn, $sql1);

                                                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                                                $c_name = $row1["name"];
                                                                ?>

                                                                <td><?php echo $c_name; ?></td>
                                                            <?php }
                                                            echo "<td>" . $date . "</td>";
                                                            echo "</tr>";

                                                        }
                                                    } else {
                                                        echo "<tr>";
                                                        echo "<td colspan='8'>No record found.</td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                      <div><a href="orderReport_pdf.php"><input type="submit" name="download" value="Download Pdf" class="btn btn-info pull"></a></div>

                                                   </form>
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
