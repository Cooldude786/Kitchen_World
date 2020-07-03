<?php
include("conn.php");
include("loginone.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>ADMIN</title>
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
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>
		<form action="loginone.php" method="post">
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="" value="<?php if(isset($_COOKIE['emailcookie'])){echo $_COOKIE['emailcookie'];}?>">
			<div class='eye'> 
				<i class="fa fa-eye"aria-hidden="true" style=" " onclick="views()" id="p_hide"></i> 
				 <i class="fa fa-eye-slash" aria-hidden="true" style="display: none;" id="show"onclick="views()"></i> 
				</div>
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="" value="<?php if(isset($_COOKIE['passwordcookie'])){echo $_COOKIE['passwordcookie'];}?>" id='showpass'>
				
			<span><input type="checkbox" name='Rememberme'/>Remember Me</span>
			<h6><a href="forgotA.php">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="submit" >
		</form>
		
	<!--	<p>Don't Have an Account ?<a href="registration.php">Create an account</a></p> -->
</div>
</div>
<script type="text/javascript">
			function views(){
			var showp=document.getElementById('showpass');
            var show_pass=document.getElementById('show');
            var pass_hide=document.getElementById('p_hide');
            if(showp.type=="password"){
            	showp.type='text';
            show_pass.style.display='block';
            pass_hide.style.display='none';
            }else{
            	showp.type='password';
            	show_pass.style.display='none';
            pass_hide.style.display='block';
            }
          }
  	   </script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
