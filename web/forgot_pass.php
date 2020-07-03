			
	<?php
	if(isset($_POST['email']))
	{ 
		$email=$_POST['email'];
		$password=$_POST['password'];
		$password1=$_POST['password1'];

		$chkmail=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `email`='$email'");

		if(mysqli_num_rows($chkmail) > 0)
		{  if($password==$password1)
			{
				$aa="update `userinfo` set password='$password' where email='$email'";
				$con=mysqli_query($conn, $aa);

				echo '<script type="text/javascript">alert("Password Changed Successfully !!");window.location=\'index.php\';</script>';
			}
			else
			{
				echo '<script type="text/javascript">alert(" Password not match !!");</script>';
			}
		}
		else
		{
			echo '<script type="text/javascript">alert(" Email not register !!");window.location=\'forgot.php\';</script>';
		} }?>