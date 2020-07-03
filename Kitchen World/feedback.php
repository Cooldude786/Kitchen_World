<?php include('header.php');?>
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
                                    Customer Information
                                </header>
                                <br>
                                <div class="box-body">

                                    <form method='post' action="">
                                        Start Date <input type='date' class='dateFilter' name='fromDate' value="<?php if (isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>">

                                        End Date <input type='date' class='dateFilter' name='endDate' value='<?php if (isset($_POST['endDate'])) echo $_POST['endDate']; ?>'>

                                        <input type='submit' name='but_search' value='Search'>
                                    </form>
                                </div>
                                <br><br>
                                <div class="box-body">

                                    <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered table-hover box-body" id="myTable">
                                            <thead>
                                                <tr>

                                                    <th>Customer ID</th>
                                                    <th>Customer Name</th>

                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Mobile No</th>


                                                    <th>Date</th>


                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php
                                                $emp_query = "SELECT * FROM `contact`";

                                                // // Date filter
                                                // if (isset($_POST['but_search'])) {
                                                //     $fromDate = $_POST['fromDate'];
                                                //     $endDate = $_POST['endDate'];
                                                //     print_r( $fromDate); print_r( $endDate);
                                                //     if (!empty($fromDate) && !empty($endDate)) {
                                                //         $emp_query .= " and date 
                                                //         between '" . $fromDate . "' and '" . $endDate . "' ";
                                                //     }
                                                }

                                                // Sort
                                                // $emp_query .= " ORDER BY date DESC";
                                                if( $employeesRecords = mysqli_query($conn, $emp_query))
                                                {
                                                   
                                                // Check records found or not
                                                    // if (mysqli_num_rows($employeesRecords) > 0) {

                                                        while ($row = mysqli_fetch_assoc($employeesRecords)) {
                                                            $id=$row['id'];
                                                            $name = $row['name'];
                                                            $email = $row['email'];
                                                            $sub = $row['sub'];
                                                            $msg = $row['msg'];
                                                            $time = $row['timestamp'];

                                                            echo "<tr>";
                                                            echo "<td>" . $id . "</td>";
                                                            echo "<td>" . $name . "</td>";
                                                            echo "<td>" . $email . "</td>";
                                                            echo "<td>" . $sub . "</td>";
                                                            echo "<td>" . $msg . "</td>";

                                                            echo "<td>" . $time . "</td>";
                                                            echo "</tr>";

                                                        }
                                                    // } else {

                                                    //     echo "<tr>";
                                                    //     echo "<td colspan='6'>No record found.</td>";
                                                    //     echo "</tr>";
                                                    // }
                                                }
                                                else {
                                                        echo "<tr>";
                                                        echo "<td colspan='6'>connection failled.</td>";
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
