<?php

include("header.php");
?>


<!DOCTYPE html>
<head>
    <title>Customer Information</title>

    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="ckeditor_4.6.1_full\ckeditor\ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

   <script src="js/jquery-3.3.1.js"></script>
    <!-- CSS -->
    <link href='css/jquery-ui.css' rel='stylesheet' type='text/css'>


    <!-- Script -->

    <script src='js/jquery-ui.min.js' type='text/javascript'></script>
    <script type='text/javascript'>
         $(document).ready(function () {
             $('.dateFilter').datepicker({
                 dateFormat: "yy-mm-dd"
             });
         });
    </script>
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
                                    User Report
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
                             <form method="post" action="pdf.php">
                                                <?php
                                                $emp_query = "SELECT * FROM userinfo WHERE 1 ";

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
                                                $empl  = mysqli_query($conn, $emp_query);


                                                if (mysqli_num_rows($empl ) > 0) {
                                                    $count = 1;
                                                    while($row=mysqli_fetch_assoc($empl))
                                                     {
                                                        $name = $row['name'];
                                                        $email = $row['email'];
                                                        $address = $row['address'];
                                                        $mobile = $row['mobile'];

                                                        $time = $row['date'];

                                                        echo "<tr>";
                                                        echo "<td>" . $count . "</td>";
                                                        echo "<td>" . $name . "</td>";
                                                        echo "<td>" . $email . "</td>";
                                                        echo "<td>" . $address . "</td>";
                                                        echo "<td>" . $mobile . "</td>";

                                                        echo "<td>" . $time . "</td>";
                                                        echo "</tr>";
                                                        $count++;
                                                    }
                                                } else {
                                                    echo "<tr>";
                                                    echo "<td colspan='6'>No record found.</td>";


                                                        echo "</tr>";
                                                }
                                                ?>
                                                  <div><a href="pdf.php"><input type="submit" name="download" value="Download Pdf" class="btn btn-info pull"></a></div>

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
