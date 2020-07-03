<?php
session_start();
$conn=mysqli_connect("localhost","root","","kitchen");
	if(!$conn)
	{
		die("could not connect server... and Database!!");
	} else{
	    
	    if($user_check=$_SESSION['admin_login'])
          {
            // SQL Query To Fetch Complete Information Of User
            $query12=mysqli_query($conn,"select * from admin where email='$user_check'");
            $row12 = mysqli_fetch_assoc($query12);
            $loginsession=$row12['email'];
            $login_session =$row12['email'];
            if(!isset($login_session))
            	{
            		mysqli_close($conn); // Closing Connection
            	//	header('Location:index.php'); // Redirecting To Home Page
            		echo '<script type="text/javascript">alert("Error");window.location=\'index.php\'</script>';
            	}
            }
            else
            {
                  echo '<script type="text/javascript">alert("Login first");window.location=\'index.php\'</script>';
            }
	}
?>