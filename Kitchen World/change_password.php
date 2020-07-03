<?php
include("header.php");
 
?>
<!DOCTYPE html>
<head>
<title>Contact</title>
 
<script src="js/jquery2.0.3.min.js"></script>
<script type="text/javascript"></script>
<script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
<script>
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>


</head>

<body>
<section id="container">
<!--header start-->
 
<!--header end-->
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
							Change Password
                        </header>

<section class="content">
<div class="row">
  <!-- left column -->
  <!--/.col (left) -->
  <!-- right column -->
  <div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
      
      <!-- /.box-header -->
      <!-- form start -->
	   
      <form class="form-horizontal" name="chngpwd" onsubmit="return valid();" method="post" >
        <div class="box-body">
		  
		 
		  
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Old Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" name="opwd" id="opwd"  placeholder="Enter Old Password...">
            </div>
          </div>
		  <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">New Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" name="npwd"  id="npwd"  placeholder="Enter Category Name...">
            </div>
          </div>
		  <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">Re-Type Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" name="cpwd"  id="cpwd"  placeholder="Enter Category Name...">
            </div>
          </div>
		  
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label"></label>
            <div class="col-sm-4">
              <input type="submit" name="Submit" value="update" class="btn btn-info pull" />
              <!-- <button type="submit" class="btn btn-info" name="update">Update</button>-->
            
			
            </div>
          </div>
        </div>
        <!-- /.box-footer -->
      </form>
     <?php


if(isset($_POST['Submit']))
{
	$bb="SELECT password FROM  admin where password='".$_POST['opwd']."' && email='".$_SESSION['admin_login']."'";
	$sql=mysqli_query($conn,$bb);
	$num=mysqli_fetch_array($sql);
	if($num>0)
	{
		$aa="update admin set password='".$_POST['npwd']."' where email='".$_SESSION['admin_login']."'";
 		$con=mysqli_query($conn, $aa);
		
		echo '<script type="text/javascript">alert("Password Changed Successfully !!");window.location=\'change_password.php\';</script>';
 
	}
	else
	{
	echo '<script type="text/javascript">alert("Old Password not match !!");window.location=\'change_password.php\';</script>';
	 
	}
}
?>
    </section>

		 
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
 
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
