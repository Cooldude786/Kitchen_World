 <?php
include('header.php');
if($page_owner=='')
{
	echo '<script type="text/javascript">alert("Place Login After view ");window.location=\'index.php\'</script>';
}
?>

<?php

$query="select * from userinfo WHERE  email='$page_owner'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
	$id=$row['id'];
	$name=$row['name'];

	$email=$row['email'];
	$password=$row['password'];
	$mobile=$row['mobile'];
	$address=$row['address'];
}

?>

<div class="modal-body modal-body-sub_agile col-md-7">

	<div class="agileinfo-ads-display col-md-12 container">
		<a href="index.php"><button type="button" class="close " style="font-size: 50px;color: #ff5722;
		">&times;</button></a>
		<div class="product-sec1"  style="border-radius: 10px; padding-bottom:80px;">
			<div class="container ">
				<div class="main-mailposi" style="text-align: left;">
					<span class="" aria-hidden="true"></span>

				</div>

				<div class="modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign" style="text-align: left;">Personal Information</h3>

				</div>
			<form method="post">
				<div class="form-group">
					<label for="email">Name:</label>  <label for="pwd"><a href="#?ids=<?php echo $id;?>" id="show" onclick="if (confirm('Are you really want to Edit !!')){Option()}else{return false;}" >Edit</a> </label>
					<input type="text" readonly class="form-control" id="email" value="<?php echo $name;?>" placeholder="Enter email"  style="width:35%;border-bottom: 1px solid #ff5722;">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" readonly class="form-control" id="email" value="<?php echo $email;?>" placeholder="Enter email"  style="width:35%;border-bottom: 1px solid #ff5722;">
				</div>
				<div class="form-group">
					<label for="email">Mobile:</label>
					<input type="text" readonly class="form-control" id="mobile" value="<?php echo $mobile;?>" placeholder="Enter mobile"  style="width:35%;border-bottom: 1px solid #ff5722;">
				</div>
				<div class="form-group">
					<label for="email">Address:</label>
					<input type="text" readonly class="form-control" id="email" value="<?php echo $address;?>" placeholder="Enter email"  style="width:35%;border-bottom: 1px solid #ff5722;">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>     <label for="pwd"><a href="#?id=<?php echo $id;?>" id="showOption" onclick="if (confirm('Are you really want to change Password !!')){showOption()}else{return false;}">Change</a> </label>
					<input type="password" readonly class="form-control" id="pwd"  value="<?php echo $password?>"placeholder="Enter password" style="width:35%;border-bottom: 1px solid #ff5722;">
				</div>
				<div>

				</div>

			</form>
		</div>
	</div>
</div>
</div>

<script type="text/javascript">
	function Option() {
		var x = document.getElementById('response');
		var y = document.getElementById('show');
		if (x.style.display == "none") {
			x.style.display = "block";
			y.style.display = "none";
		} else {
			x.style.display = "none";
			y.style.display = "block";
		}
	}
</script>

<div class="modal-body modal-body-sub_agile col-md-5" id='response'style="display:none;">

	<div class="agileinfo-ads-display col-md-12 container">
<a href="profile.php"><button type="button" class="close " style="font-size: 50px;color: #ff5722;
	">&times;</button></a>
		<div class="product-sec1"  style="border-radius: 10px; padding-bottom:80px;">
			<div class="container ">
				<div class="main-mailposi" style="text-align: left;">

					<span class="" aria-hidden="true"></span>
				</div>
        <h3 class="agileinfo_sign" style="text-align: left;">Enter New Information</h3>

				<form method="post">
						<div class="form-group">
							<label for="name">Name:</label>
							<input type="text" class="form-control" id="name" name='name'  placeholder="Enter email"  style="width:35%;" required="">
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="Email" class="form-control" id="email" name='email'   placeholder="Enter Email"  style="width:35%;" required="">
						</div>
						<div class="form-group">
							<label for="">Mobile:</label>
							<input type="text" class="form-control" id="mobile" name='mobile'   placeholder="Enter Mobile no."  style="width:35%;" required="">
						</div>
						<div class="form-group">
							<label for="address">Address:</label>
							<input type="text" class="form-control" id="address" name='address'   placeholder="Enter Address"  style="width:35%;" required="">
						</div>


						<button type="submit" class="btn btn-default" name='submits' style="border-color:#ff5722;">Submit</button>
					</form>

				</div>

			</div>
		</div>
	</div>
	<?php
	     if(isset($_POST['submits']))
	     {
	     	$name=$_POST['name'];
	     	$email=$_POST['email'];
	     	$mobile=$_POST['mobile'];
	     	$address=$_POST['address'];
	     	if($chkmail=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `email`='$page_owner'"))
			{

						$aa="UPDATE `userinfo` SET `name`='$name',`email`='$email',`mobile`='$mobile',`address`='$address' WHERE email='$page_owner'";
						$con=mysqli_query($conn, $aa);
						 $chk=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `email`='$page_owner'");
				if(mysqli_num_rows($chk) > 0)
					{
						echo '<script type="text/javascript">alert("Successfully !!");window.location=\'profile.php\';</script>';
					}
					else
					{
						echo '<script type="text/javascript">alert("You Changed Email So Place Login Agine ");window.location=\'index.php\';</script>';
						 unset($_SESSION['email']);
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("  Email not found !!");window.location=\'profile.php\';</script>';
				}


			}

	?>

	<script type="text/javascript">
		function showOption() {
			var x = document.getElementById('addressresponse');
			var y = document.getElementById('showOption');
			if (x.style.display == "none") {
				x.style.display = "block";
				y.style.display = "none";
			} else {
				x.style.display = "none";
				y.style.display = "block";

			}
		}
	</script>

	<div class="modal-body modal-body-sub_agile col-md-5" id="addressresponse" style="display:none">
		<a href="profile.php"><button type="button" class="close " style="font-size: 50px;color: #ff5722;
		">&times;</button></a>
		<div class="agileinfo-ads-display col-md-12 container">

			<div class="product-sec1"  style="border-radius: 10px; padding-bottom:80px;">
				<div class="container ">
					<div class="main-mailposi" style="text-align: left;">
						<span class="" aria-hidden="true"></span>
					</div>

					<form method="post">

							<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" name='email' value=" " placeholder="Enter email"  style="width:35%;">
							</div>
							<div class="form-group">
								<label for="email">Old password:</label>
								<input type="password" class="form-control" id="password" name='oldpassword'   placeholder="password"  style="width:35%;">
							</div>
							<div class="form-group">
								<label for="email">New password:</label>
								<input type="password" class="form-control" id="password" name='password'   placeholder="password"  style="width:35%;">
							</div>
							<div class="form-group">
								<label for="email">confirm Password:</label>
								<input type="password" class="form-control" id="password" name='confirm' placeholder="Confirm Password"  style="width:35%;">
							</div>

							<button type="submit" class="btn btn-default" name='submit' style="border-color:#ff5722;">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>


		<?php
		if(isset($_POST['submit']))
		{
			$email=$_POST['email'];
			$oldpassword=$_POST['oldpassword'];
			$password=$_POST['password'];
			$confirmp=$_POST['confirm'];
			if($chkmail=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `email`='$email'"))
			{

				if(mysqli_num_rows($chkmail) > 0)
					{  $chkpass=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `password`='$oldpassword'");
				if(mysqli_num_rows($chkpass) > 0)
				{
					if($password==$confirmp)
					{
						$aa="UPDATE `userinfo` SET `email`='$email',`password`='$password' WHERE email='$email'";
						$con=mysqli_query($conn, $aa);

						echo '<script type="text/javascript">alert("Password Changed Successfully !!");window.location=\'profile.php\';</script>';
					}
					else
					{
						echo '<script type="text/javascript">alert(" Password not match !!");window.location=\'profile.php\';</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert(" Old Password not match !!");window.location=\'profile.php\';</script>';
				}


			}
			else
			{
				echo '<script type="text/javascript">alert("Email Not Valid !!");window.location=\'profile.php\';</script>';
			}
		} else
			{
				echo '<script type="text/javascript">alert(" email to found !!");window.location=\'oder1.php\';</script>';
			}
	}
?>
<div class="col-md-12">

<?php
include("footer.php");
	?>
</div>