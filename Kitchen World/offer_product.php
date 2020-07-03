<?php
include("conn.php");
include("header.php");
?>
<!DOCTYPE html>
<head>
<title>Sub-Category</title>
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
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          Offer Product
                        </header>
						<?php
						if(isset($_GET['o_id']))
						{
						$o_id=$_GET['o_id'];
						}
						else
						{
						$o_id=0;
						}
						$query="SELECT * FROM `offer_product` WHERE `o_id`='$o_id'";
						$result=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($result);
						$o_price=$row['o_price'];
						?>
						<?php
						if(isset($_REQUEST['ID1']))
						{
						$offer_product=$_REQUEST['ID1'];
						if(!$conn)
						{
						die("connection failed:".mysqli_connect_error());
						}
						$query="DELETE FROM `offer_product` WHERE `o_id`='$o_id'";
						$result=mysqli_query($conn,$query);
						if($result==1)
						{
						echo'<script type="text/javascript">alert("Record Deleted");window.location=\'offer_product.php\';</script>';
						}
						else{}
						}
						?>
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
						<div class="box-body">
							<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">Add Product</label>
							<div class="col-sm-4">
							<select type="text" class="form-control" name="p_id" id="inputEmail3" value="<?php echo $row['p_id'];?>" placeholder="Select Product Name...">
							<option value="0">Select Product</option>
								<?php
								require_once('conn.php');
								$query=mysqli_query($conn,"SELECT * FROM `product`");
								while($row = mysqli_fetch_assoc($query))
								{
									echo "<option value='".$row['p_id']."'>".$row['p_name']."</option>";

								}
								?>
							</select>
							</div>
							</div>
						</div>
						<div class="box-body">
							<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">Add Offer Price : </label>
							<div class="col-sm-4">
							<input type="text" class="form-control" name="o_price" id="inputEmail3" value="<?php echo $o_price;?>" placeholder="Enter Offer Price..."/>
							</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<div class="form-group">
							<label for="inputPassword3" class="col-sm-4 control-label"></label>
							<div class="col-sm-4">
							<input type="submit" name="<?php if(!isset($_GET['o_id'])){echo "Submit";}else{echo "Update";} ?>" value="<?php if(!isset($_GET['o_id'])){echo "Submit";}else{echo "Update";} ?>" class="btn btn-info pull" />
							<!-- <button type="submit" class="btn btn-info" name="update">Update</button>-->
							<button type="submit"  name="cancel" class="btn btn-info">Cancel</button>
							</div>
							</div>
						</div>
						<!-- /.box-footer -->
						</form>
						<?php
						if(isset($_POST['Submit']))
						{
						extract($_POST);
								if($_POST['p_id']=="0" || $_POST['p_id']=="" || $_POST['o_price']==""){
									echo '<script type="text/javascript">alert("Please FillUp Detail");window.location=\'offer_product.php\';</script>';
								}else{
										$p_id = $_POST['p_id'];
										$o_price = $_POST['o_price'];
										$sql = "INSERT INTO offer_product(p_id, o_price) values ('".$p_id."', '".$o_price."')";
										$result=mysqli_query ($conn,$sql);
										if($result==1)
										{
											echo '<script type="text/javascript">alert("Data Inserted Succesfully..!!");window.location=\'offer_product.php\';</script>';
										}
										else {
											echo '<script type="text/javascript">alert("Data Not  Inserted Succesfully");window.location=\'offer_product.php\';</script>';
										}
								}
						unset($_POST);
						}
						?>

						<div class="box-body">
							<div class="box-body table-responsive no-padding">
								<table id="example2" class="table table-bordered table-hover box-body">
								<thead>
								<tr>
								<th>ID</th>
								<th>Product ID</th>
								<th>Product Name</th>
								<th>Product Price</th>
								<th>Offer Price</th>
								<th>Edit</th>
								<th>Delete</th>
								</tr>
								</thead>
								<tbody>
								<?php
								$result = mysqli_query($conn,"SELECT * FROM `offer_product`");
								$numrows=mysqli_num_rows($result);
								$count=1;
								while($row = mysqli_fetch_array($result))
								{
								$o_id=$row["o_id"];
								$p_id=$row["p_id"];
								$o_price=$row["o_price"];
								$chkproduct=mysqli_query($conn,"SELECT * FROM `product` WHERE `p_id`='$p_id'");
								$rows=mysqli_fetch_array($chkproduct);
								?>
								<tr>
								<td><?php echo $count; ?></td>
								<td><?php echo $p_id; ?></td>
								<td><?php echo $rows['p_name']; ?></td>
								<td><?php echo $rows['price']; ?></td>
								<td><?php echo $o_price ; ?></td>
								<td><a class="btn btn-primary" href="offer_product.php?o_id=<?php echo $o_id?>" aria-label="Edit"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
								<td><a class="btn btn-danger" href="offer_product.php?ID1=<?php echo $o_id?>" aria-label="Delete"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a></td>
								</tr>
							<?php $count++; }  ?>
							</tbody>
							</table>
							</div>

							<?php
						if(isset($_POST['Update']))
							{
								if($_POST['p_id']=="0" || $_POST['p_id']=="" || $_POST['o_price']==""){
									echo '<script type="text/javascript">alert("Please Select Valid Category");window.location=\'offer_product.php?p_id='.$p_id.'\';</script>';
								}else{
							$o_id=$_GET['o_id'];
							$p_id = $_POST['p_id'];
							$o_price = $_POST['o_price'];
							//$sql="update history set image='$image',history='$history' where id='$id'";
							echo $sql="update offer_product set p_id='$p_id', o_price='$o_price' where o_id='$o_id'";
							mysqli_query ($conn,$sql);
							mysqli_close ($conn);
							echo '<script type="text/javascript">alert("Updated Succesfully");window.location=\'offer_product.php\';</script>';
								}
							unset($_POST);
							}
							?>
						</div>
          </section>
       	 </div>
        </div>
        <!-- page end-->
        </div>
</section>
 
</section>

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
