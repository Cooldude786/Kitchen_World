<?php
include("conn.php");
include("session.php");
?>

<!DOCTYPE html>
<head>
    <title>Service</title>
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
    <script src="js/jquery2.0.3.min.js"></script>
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
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">

                <a href="index.php" class="logo">
                    ADMIN
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->

            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->

                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">

                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="images/index.jpg">
                            <span class="username"><?php echo $loginsession; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="profile.php"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="change_password.php"><i class="fa fa-key"></i>Change Password</a></li>
                            <li><a href="signout.php"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="index1.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a>
                                <i class="fa fa-tasks"></i>
                                <span>Homepage</span>
                            </a>
                            <ul class="sub">

                              <li><a href="about.php">About us</a></li>
                          </ul>
                          <ul class="sub">

                              <li><a href="contact.php">Contact us</a></li>
                          </ul>
                          <ul class="sub">

                            <li><a href="faqs.php">Faqs</a></li>
                        </ul>
                        <ul class="sub">

                          <li><a href="terms.php">Terms & Condition</a></li>
                      </ul>
                      <ul class="sub">

                          <li><a href="privacy.php">Privacy Policy</a></li>
                      </ul>
                      <ul class="sub">

                          <li><a href="return&refund.php">Refund & Return Policy</a></li>
                      </ul>
                      <ul class="sub">

                          <li><a href="#">Social Media</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                    <a>
                        <i class="fa fa-tasks"></i>
                        <span>Category</span>
                    </a>
                    <ul class="sub">

                      <li><a href="category.php">Main Category</a></li>
                  </ul>
                  <ul class="sub">

                      <li><a href="sub_category.php">Sub Category</a></li>
                  </ul>
                  <ul class="sub">

                      <li><a href="product.php">Product</a></li>
                  </ul>
                  <ul class="sub">
                   <li><a href="offer_product.php">Offer_Product</a></li>
               </ul>
           </li>

           <li>
            <a href="slider.php">
                <i class="fa fa-tasks"></i>
                <span>Slider</span>
            </a>
        </li>


        <li class="sub-menu">
            <a>
                <i class="fa fa-tasks"></i>
                <span>Manage Reports</span>
            </a>
            <ul class="sub">

                <li><a href="customer_report.php">View User Info Report</a></li>
            </ul>
            <ul class="sub">

              <li><a href="feedback_report.php">View Feedback Report</a></li>
          </ul>
          <ul class="sub">

            <li><a href="one_order.php">View Order Report</a></li>
        </ul>
        <ul class="sub">

            <li><a href="payment_info.php">View Payment Report</a></li>
        </ul>
        <ul class="sub">

          <li><a href="return_order.php">View Return Product Report</a></li>
      </ul>
      <ul class="sub">

          <li><a href="product_info.php">View Product Report</a></li>
      </ul>

  </li>
</ul>
</div>
<!-- sidebar menu end-->
</div>
</aside>
<!--sidebar end-->
</body>
</html>
