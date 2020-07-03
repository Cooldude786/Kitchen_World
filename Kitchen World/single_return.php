<?php
 
include("header.php");
?>


<!DOCTYPE html>
<head>
    <title>Order Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
          Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
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
                                  Return  Order Information
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

                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Order Id</th>

                                                    <th>Product Name</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                   
                                                    <th>Date</th>



                                                </tr>
                                            </thead>
                                            
                                             <tbody>

                                                <?php
                                                if(isset($_GET['order']))
                                                    {  $getorder=$_GET['order'];
                                                        print_r($getorder);
                                                $emp_query = "SELECT * FROM order_detail WHERE order_id='$getorder'";

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
                                                    
                                                    $count = 1;
                                                    while ($row = mysqli_fetch_assoc($employeesRecords)) {
                                                        
                                                        $email = $row['email'];
                                                        $ord_id = $row['order_id'];
                                                $p_id = $row['p_id'];
                                                $qty = $row['qty'];
                                                $price = $row['price'];
                                               
                                                 
                                                  $date = $row['date'];

                                                        echo "<tr>";
                                                        echo "<td>" . $count . "</td>";
                                                        $sql1 = "select * from userinfo where `email`= '" . $email . "' ";
                                                $result1 = mysqli_query($conn, $sql1);

                                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                                    $c_name = $row1["name"];
                                                    ?>

                                                        <td><?php echo $c_name; ?></td>
                                                    <?php } 
                                                         echo "<td>" . $ord_id . "</td>";
                                                         $sql2 = "select * from product where `p_id`= '" . $p_id . "' ";
                                                $result2 = mysqli_query($conn, $sql2);

                                                while ($row1 = mysqli_fetch_assoc($result2)) {
                                                    $p_name = $row1["p_name"];
                                                    
                                                         
                                                       echo "<td>" . $p_name . "</td>";
                                                 } 
                                                       echo "<td>" . $qty . "</td>";
                                                       echo "<td>" . $price . "</td>";
                                                
                                                    echo "<td>" . $date . "</td>";
                                                        echo "</tr>";
                                                        $count++;
                                                    }
                                                } else {
                                                    echo "<tr>";
                                                    echo "<td colspan='7'>No record found.</td>";
                                                    echo "</tr>";
                                                }
                                               } ?>
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
