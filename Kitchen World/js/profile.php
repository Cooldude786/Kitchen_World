<?php
include("conn.php");
include("session.php");
include("header.php");
?>
<!DOCTYPE html>
<head>
<title>Contact</title>
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
</head>
<body>
<section id="container">

  <!-- Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
							Upload Profile
                        </header>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">

            </div>
            <?php

				 $query="select * from admin ";
				$result=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($result))
				{
				$username=$row['username'];

				$email=$row['email'];
				$password=$row['password'];
				$contact=$row['contact'];

				}
			?>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" enctype="multipart/form-data" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Name</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputEmail3" name="username" value="<?php echo $username; ?>" placeholder="Enter Name">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Phone No</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputPassword3" name="contact" value="<?php echo $contact; ?>" placeholder="Enter Contact No ">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Email</label>

                  <div class="col-sm-4">
                    <input type="email" class="form-control" id="inputPassword3" name="email" value="<?php echo $email; ?>">

                  </div>
                </div>






              <!--  <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>-->
              </div>
              <!-- /.box-body -->
              <div class="box-footer ">
              <center>
                <!--<button type="submit" class="btn btn-default">Cancel</button>-->
                <button type="submit" name="submit" class="btn btn-info pull-">Update</button>
              </center>
              </div>
              <!-- /.box-footer -->
            </form>
            <?php

				if(isset($_POST['submit']))
				{
					//$id=$_POST['id'];
					$username=$_POST['username'];
					$contact=$_POST['contact'];
					$email=$_POST['email'];



						$query="UPDATE `admin` SET `username`='$username',`contact`='$contact',`email`='$email'";
					$result=mysqli_query($conn,$query);
					if($result==1)
					{
						//echo"Profile Update successfully..!!";
						echo '<script type="text/javascript">alert("Profile Update successfully..!!");window.location=\'profile.php\';</script>';
					}
					else
					{
						//echo"Profile Not Update..!!";
						echo '<script type="text/javascript">alert("Please Try Again..!! ");window.location=\'profile.php\';</script>';
					}
				}
			?>
          </div>
          <!-- /.box -->



        </div>
        <!--/.col (left) -->
        <!-- right column -->

        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2020 All rights reserved | Design by Qubeta technolab</p>
			</div>
		  </div>



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
