<?php
	session_start();

	//include("session.php");

	include("conn.php");// Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit']))
	{
		if (empty($_POST['email']) || empty($_POST['password']))
			{
				$error = "Email or Password is invalid";
			}
			else
			{
				// Define $email and $password
				$email=$_POST['email'];
				$password=$_POST['password'];
				// Establishing Connection with Server by passing server_name, user_id and password as a parameter
				//$connection = mysql_connect("localhost", "root", "");
				// To protect MySQL injection for Security purpose
				//$Email = stripslashes($Email);
				//$Password = stripslashes($Password);
				//$Email = mysqli_real_escape_string($conn,$Email);
				//$Password = mysqli_real_escape_string($conn,$Password);
				// Selecting Database
			//	$db = mysql_select_db("construction", $connection);
				// SQL query to fetch information of registerd 	users and finds user match.
				$query="select * from admin where password='$password' AND email='$email'";
				$result = mysqli_query($conn,$query);
				$rows = mysqli_num_rows($result);
				if ($rows == 1)
				{

					$_SESSION['admin_login']=$email; // Initializing Session
					//header("location:index1.php");
					if(isset($_POST['Rememberme']))
					{ setcookie('emailcookie',$email);
				      setcookie('passwordcookie',$password);
						echo '<script type="text/javascript">window.location=\'index1.php\'</script>';// Redirecting To Other Page
					}
					else
					{
					echo '<script type="text/javascript">window.location=\'index1.php\'</script>';	
					}
				}
				else 
					{
			             echo '<script type="text/javascript">alert(" Email and password incorrect !!");window.location=\'index.php\';</script>';	
					}
					mysqli_close($conn); // Closing Connection
			
			}
	}
?>
