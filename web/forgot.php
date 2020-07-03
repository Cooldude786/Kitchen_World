<?php
include('header.php');
?>

<!-- <script src="js/jquery-2.1.4.min.js"></script> -->
<div class="modal-body modal-body-sub_agile col-md-2">
	</div>
 <div class="modal-body modal-body-sub_agile col-md-8">

		<a href="index.php"><button type="button" class="close " style="font-size: 50px;color: #ff5722;
		">&times;</button></a>
		<div class="product-sec1"  style="border-radius: 10px; padding-bottom:40px;">
			<div class="container">
				<div style="padding-left:10%">
				<div class="modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign" style="text-align: left;">forgot Password</h3>

				 
			<div ><i id="data"></i></div>
			<form  methord='post' id="show" onsubmit="return false">

				<div class="styled-input  col-md-4" >
					<input type="Email" placeholder="Email" id='dnumber' name="Email" required="" autocomplete="off"  >
				</div>

			<!-- 	<div id="data"><i >123</i></div> -->
			
			    <div class="styled-input  col-md-12" >
					<input type="submit" value="Send OTP" name="Submitotp"  id='subm' onclick="sendo() " >

				</div>
				<div class="styled-input  col-md-8"style="display: none;" id="sload">
				<img src="images/ajax-loader.gif" style="height: 40px;">
				</div>
				</form>
					<div class="styled-input  col-md-8" id='resen' style="display: none;">
					<input type="submit" value="REsend OTp" name="Submitotp"   onclick="option()" >

				</div>
			<script type="text/javascript">
				function sendo()
				{

					var Email = document.getElementById('dnumber').value;
					var x = document.getElementById('sponse');
					var y = document.getElementById('show');
					var c=document.getElementById('resen');
					var k=document.getElementById('subm');
					var l=document.getElementById('sload');
					console.log(Email);
					var name='email='+Email;
					if(Email=='')
					{
						 
					}
					else{
						$.ajax({
							type:'POST',
							url:'otpsend.php',
							data:name,
							beforeSend:function()
							{ if(l.style.display=="none")
							{ 
								k.style.display="none";
							    l.style.display="block";
							   }
							},
							success:function(response)
							{ l.style.display="none";
							k.style.display="block";
								console.log('res',response);

								if(response==1)
								{
						 			$('#data').html('Hello World');
								}
								else{
									$('#data').html(response);
									if (x.style.display == "none") {
									x.style.display = "block";
							        y.style.display = "none";
							         c.style.display = "block";

						              }

									
								}

							}
						});
						
                        }}
                        function option()
                        {var x = document.getElementById('sponse');
					var y = document.getElementById('show');
					var c=document.getElementById('resen');
					var k=document.getElementById('subm');
                        	if(x.style.display=="block")
                        	{
                        		x.style.display = "none";
							        y.style.display = "block";
							         c.style.display = "none";
							         k.style.display="block";
							         $('#data').html('');
							         $('#mass').html('');
							            document.getElementById("sponse").reset();
                        	} 
                        }
                    </script>
                 

			<div>
				<form method="post" id='sponse' style="display:none;">

					<div class="styled-input  col-md-8">
						<div id='mass'></div>
						<input type="text" placeholder="Enter OTP" name="otp" id='OTPvalue' required="" autocomplete="off" style="width: 40%">
					</div>
					
					<div class="styled-input  col-md-8">
						<input type="password" placeholder="Enter New Password" name="password" id="password" required="" style="width:40%">
					</div>
					<div class="styled-input  col-md-8">
						<input type="password" placeholder="Confirm Password" name="password1" id="password1" required="" style="width: 40%">
					</div>
					<div class="styled-input  col-md-8">

						<input type="submit" value="Sign In" name="Submit" onclick="get()">
					</div>
				</form>
			</div>
				<script type="text/javascript">
					function get()
					{
						var otpname=document.getElementById('OTPvalue').value;
						// var password=document.getElementById('password').value;
						// var password1=document.getElementById('password1').value;
						console.log(otpname);
						var valueo='otp='+otpname;
						$.ajax({
							type:'POST',
							url:'OTP.php',
							data:valueo,
							success:function(response)
							{
								console.log('res',response);
								console.log('res',valueo);
								if(response)
								{
									$('#mass').html(response);
									// $('#reload').load('#reload');
								}


							}

						});

					}
				</script>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

</div>
 
<div class="modal-body modal-body-sub_agile col-md-2">
	</div>

<?php


if(isset($_POST['Submit']))
	{ $otp=$_POST['otp'];
$chkotp=mysqli_query($conn,"SELECT * FROM `OTP` WHERE otp='$otp'");
$mailfetch=mysqli_fetch_assoc($chkotp);
$Email=$mailfetch['email'];
if(mysqli_num_rows($chkotp) >0)
{
		// echo"<i class='fa fa-check'style='font-size:24px;color:green'></i>match";

	$password=$_POST['password'];
	$password1=$_POST['password1'];
	$chk=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `email`='$Email'");
	if(mysqli_num_rows($chk) >0)
	{
		if($password==$password1)
		{
			$aa="UPDATE `userinfo` SET  password='$password' where `email`='$Email'";
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
		echo '<script type="text/javascript">alert("Enter a valide email!!");;window.location=\'index.php\';</script>';
	}
}else
{
	echo '<script type="text/javascript">alert("Eneter a valide otp !!");</script>';
}

}

?>
