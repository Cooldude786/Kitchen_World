<?php
include('header.php');

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
					<label for="email">Name:</label>  <label for="pwd"><a href="#?ids=<?php echo $id;?>" onclick="Option()" id="show">Edit</a> </label>
					<input type="text" class="form-control" id="email" value="<?php echo $name;?>" placeholder="Enter email"  style="width:35%;border-bottom: 1px solid #ff5722;">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" class="form-control" id="email" value="<?php echo $email;?>" placeholder="Enter email"  style="width:35%;border-bottom: 1px solid #ff5722;">
				</div>
				<div class="form-group">
					<label for="email">Address:</label>
					<input type="text" class="form-control" id="email" value="<?php echo $address;?>" placeholder="Enter email"  style="width:35%;border-bottom: 1px solid #ff5722;">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>     <label for="pwd"><a href="#?id=<?php echo $id;?>" id="showOption" onclick="showOption(alert('Email Not Valid !!'))">Chang</a> </label>
					<input type="password" class="form-control" id="pwd"  value="<?php echo $password?>"placeholder="Enter password" style="width:35%;border-bottom: 1px solid #ff5722;">
				</div>
				<div>
					<button type="submit" class="btn btn-default" style="border-color: #1accfd;">Done</button>
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
<a href="oder1.php"><button type="button" class="close " style="font-size: 50px;color: #ff5722;
	">&times;</button></a>
		<div class="product-sec1"  style="border-radius: 10px; padding-bottom:80px;">
			<div class="container ">
				<div class="main-mailposi" style="text-align: left;">
					<span class="" aria-hidden="true"></span>
				</div>

				<form method="post">
						<div class="form-group">
							<label for="email">Name:</label>
							<input type="text" class="form-control" id="name" name='name'  placeholder="Enter email"  style="width:35%;">
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<input type="Email" class="form-control" id="email" name='email'   placeholder="Enter Email"  style="width:35%;">
						</div>
						<div class="form-group">
							<label for="email">Address:</label>
							<input type="text" class="form-control" id="address" name='address'   placeholder="address"  style="width:35%;">
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
	     	$address=$_POST['address'];
	     	if($chkmail=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `email`='$email'"))
			{

				if(mysqli_num_rows($chkmail) > 0)
					{  
						$aa="UPDATE `userinfo` SET `name`='$name',`email`='$email',`address`='$address' WHERE email='$email'";
						$con=mysqli_query($conn, $aa);

						echo '<script type="text/javascript">alert(" Changed Successfully !!");window.location=\'oder1.php\';</script>';
					}
					else
					{
						echo '<script type="text/javascript">alert(" Email Not Valid !!");window.location=\'oder1.php\';</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("  Email not found !!");window.location=\'oder1.php\';</script>';
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
		<a href="oder1.php"><button type="button" class="close " style="font-size: 50px;color: #ff5722;
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
								<input type="password" class="form-control" id="oldpassword" name='oldpassword'   placeholder="password"  style="width:35%;">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="password" name='password'   placeholder="password"  style="width:35%;">
							</div>
							<div class="form-group">

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

						echo '<script type="text/javascript">alert("Password Changed Successfully !!");window.location=\'oder1.php\';</script>';
					}
					else
					{
						echo '<script type="text/javascript">alert(" Password not match !!");window.location=\'oder1.php\';</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert(" Old Password not match !!");window.location=\'oder1.php\';</script>';
				}


			}
			else
			{
				echo '<script type="text/javascript">alert("Email Not Valid !!");window.location=\'oder1.php\';</script>';
			}
		} else
			{
				echo '<script type="text/javascript">alert(" Want to change !!");window.location=\'oder1.php\';</script>';
			}
	}


	?>

