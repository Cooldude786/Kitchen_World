<?php
include('conn.php');

?>
 
        <link rel="stylesheet" href="css/bootstrap.min.css" >          
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->		

			<div class="">
			<div class="log-w3">
      <div class="w3layouts-main">
               	<h2> <a href="index.php	" data-toggle="modal">
								Forgot Password?</a></h2>
		     <form   method="post">
		           	<input type="email" class="ggg" name="email" id='mobail' placeholder="Email" required="">
					     <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
		         	     <input type="password" class="ggg" name="password1" placeholder="Confoirm PASSWORD" required="">
						 <span></span>
			      
				  <input type="submit" value="Sign In" name="Submit" >
		   </form>
						 
						<?php
							if(isset($_POST['Submit']))
							{  
								$email=$_POST['email'];
								//$mobail=$_POST['mobail'];
								$password=$_POST['password'];
								$password1=$_POST['password1'];
							 
											$chkmail=mysqli_query($conn,"SELECT * FROM `admin` WHERE `email`='$email'");
                                             //$chkmobile=mysqli_query($conn,"SELECT * FROM `admin` WHERE `contact='$mobail'");
										if(mysqli_num_rows($chkmail) > 0 )
											{
													  if($password==$password1)
	                                                    {
	                                                      $aa="update `admin` set password='$password' where email='$email'";
 		                                                   $con=mysqli_query($conn, $aa);
		
		                                                  echo '<script type="text/javascript">alert("Password Changed Successfully  !!");window.location=\'index.php\';</script>';
                                                     	}
	                                                 else
	                                                    {
	                                                         echo '<script type="text/javascript">alert(" Password not match !!");window.location=\'index.php\';</script>';
                                                      	}
											
											}
									    else
	                                       {
	                                           echo '<script type="text/javascript">alert(" Email not register !!");window.location=\'forgot.php\';</script>';
											}
							}				

						?>
					 
				</div>
			</div>	 
		</div>