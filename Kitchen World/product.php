<?php
 
include("header.php");
?>
<!DOCTYPE html>
<head>
	<title>Product</title>
	 
	<script src="js/jquery2.0.3.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script type="text/javascript" src="ckeditor_4.6.1_full\ckeditor\ckeditor.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
									Product
								</header>
								<?php
								if(isset($_GET['id']))
								{
									$id=$_GET['id'];

								}
								else
								{

									$id=0;
								}
								$query="Select * from product where p_id='$id'";
								$result=mysqli_query($conn,$query);
								$row=mysqli_fetch_array($result);
								$p_id=$row['p_id'];
								$c_name=$row['c_name'];
								$s_name=$row['s_name'];
								$p_name=$row['p_name'];
								$price=$row['price'];
								$offer_price=$row['offer_price'];
								$qty=$row['P_stocks'];
								$detail=$row['detail'];
								$image=$row['image'];
								$sub_imag=$row['sub_image'];
								?>
								<?php
								if(isset($_REQUEST['ID1']))
								{
									$id=$_REQUEST['ID1'];
									if(!$conn)
									{
										die("connection failed:".mysqli_connect_error());
									}
									$query="Delete from product where p_id=$id";
									$result=mysqli_query($conn,$query);
									if($result==1)
									{

										echo'<script type="text/javascript">alert("Record Deleted");window.location=\'product.php\';</script>';
									}
									else{}
								}
							?>
							<?php
							if(isset($_GET['op']))
							{
								if($_GET['op']=='true')
								{
									echo "Operation Performed Successfully";
								}
								else
								{
									echo "Operation Not Performed Successfully";

								}
							}
							?>
							<form class="form-horizontal" method="post" enctype="multipart/form-data">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-4 control-label">Add Category</label>
										<div class="col-sm-4">
											<select type="text" class="form-control" name="c_name" id="inputEmail3" value="<?php echo $row['c_id'];?>" placeholder="Select Category Name...">
												<option value="0">Select Category</option>
												<?php
												require_once('conn.php');
												$query=mysqli_query($conn,"SELECT * FROM category");
												while($row = mysqli_fetch_assoc($query))
												{
													if($row['c_id'] == $c_name){
														echo "<option value='".$row['c_id']."' selected>".$row['c_name']."</option>";
													} else {
														echo "<option value='".$row['c_id']."'>".$row['c_name']."</option>";
													}

												}
												?>
											</select>
										</div>
									</div>
								</div>
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-4 control-label">Add Sub-Category</label>
										<div class="col-sm-4">
											<select type="text" class="form-control" name="s_name" id="inputEmail3" value="<?php echo $row['s_id'];?>" placeholder="Enter Sub-Category Name...">
												<option value="0">Select Sub-Category</option>
												<?php
												require_once('conn.php');
												$query=mysqli_query($conn,"SELECT * FROM sub_category");
												while($row = mysqli_fetch_assoc($query))
												{
													if($row['s_id'] == $s_name){
														echo "<option value='".$row['s_id']."'selected>".$row['s_name']."</option>";
													}else {
														echo "<option value='".$row['s_id']."'>".$row['s_name']."</option>";
													}


												}
												?>
											</select>
										</div>
									</div>
								</div>


								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-4 control-label">Add Product Name</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="p_name" id="inputEmail3" value="<?php echo $p_name;?>" placeholder="Enter Product Name...">
										</div>
									</div>
								</div>
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-4 control-label">Add Product Price</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="price" id="inputEmail3" value="<?php echo $price;?>" placeholder="Enter Product Price...">
										</div>
									</div>
								</div>



								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-4 control-label">Add Offer Price</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="offer_price" id="inputEmail3" value="<?php echo $offer_price;?>" placeholder="Enter offer Price...">
										</div>
									</div>
								</div>

								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-4 control-label">Add Product Quantity</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="qty" id="inputEmail3" value="<?php echo $qty;?>" placeholder="Enter offer Price...">
										</div>
									</div>
								</div>


								<tr >
									<td colspan="4"><label class="file" >Product Detail :</label></td>
								</tr>
								<tr >
									<td colspan="4"><textarea name="detail" class="ckeditor"> <?php echo $detail;?></textarea></td>
								</tr>


								<div class="form-group">
									<label for="inputEmail3" class="col-sm-4 control-label">Add Product Image</label>
									<div class="col-sm-4">
										<input type="file" class="form-control" name="image" id="inputEmail3" multiple>
									</div>
								</div>

								<div class="form-group">




									<!-- /.box-body -->
									<div class="box-footer">
										<div class="form-group">
											<label for="inputPassword3" class="col-sm-4 control-label"></label>
											<div class="col-sm-4">
												<input type="submit" name="<?php if(!isset($_GET['id'])){echo "Submit";}else{echo "Update";} ?>" value="<?php if(!isset($_GET['id'])){echo "Submit";}else{echo "Update";} ?>" class="btn btn-info pull" />
												<!-- <button type="submit" class="btn btn-info" name="update">Update</button>-->
												<input type="submit"  name="cancel" class="btn btn-info" value="Cancel" />
											</div>
										</div>
									</div>
								</br>


							</div>

							<!-- /.box-footer -->
						</form>
						<?php
						if(isset($_POST['cancel'])){
							echo '<script type="text/javascript">window.location=\'product.php\';</script>';
						}
						if(isset($_POST['Submit']))
						{
							extract($_POST);
							if($_POST['c_name']=="0" || $_POST['c_name']=="" || $_POST['s_name']=="" || $_POST['p_name']=="" || $_POST['price']=="" || $_POST['offer_price']=="" ||$_POST['qty']==""|| $_POST['detail']=="" ){
								echo '<script type="text/javascript">alert("Please FillUp Detail");window.location=\'product.php\';</script>';
							}else{
								$c_name = $_POST['c_name'];
								$s_name = $_POST['s_name'];
								$p_name = $_POST['p_name'];
								$price= $_POST['price'];
								$offer_price= $_POST['offer_price'];
								$qty=$_POST['qty'];
								$detail= $_POST['detail'];
								$image = $_FILES['image']['name'];
								if(!$image)
								{
									$file_path='';
								}
								else
								{
									$file_path = 'upload/';
									$file_path = $file_path . basename( $_FILES['image']['name']);
									if(move_uploaded_file($_FILES['image']['tmp_name'], $file_path))
									{
									}
								}
								$sql = "insert into product(c_name, s_name, p_name, price,offer_price,P_stocks,detail,image) values ('".$c_name."', '".$s_name."', '".$p_name."', '".$price."','".$offer_price."','".$qty."' ,'".$detail."', '".$image."')";
								$result=mysqli_query ($conn,$sql);
															// Close The Connection
								if($result==1){
									echo '<script type="text/javascript">alert(" Data Inserted Succesfully..!!");window.location=\'product.php\';</script>';
								}
								else{
									echo '<script type="text/javascript">alert("Data Not  Inserted Succesfully");window.location=\'product.php\';</script>';
								}
							}
							unset($_POST);
						}
						?>
						<div class="box-body">
							<div class="box-body table-responsive no-padding">
								<table class="table table-bordered table-hover box-body">
									<thead>
										<tr>
											<th>Category</th>
											<th>Sub-Category</th>
											<th>Product Name</th>
											<th>Product Price</th>
											<th>Offer Price</th>
											<th> Product Stocks</th>
											<th>Description</th>
											<th>Image</th>
											<th>Edit</th>
											<th>Delete</th>
										</tr>
									</thead>
									<?php
									$sql="select * from product order by p_id desc";
									$result = mysqli_query($conn,$sql);
									while($row = mysqli_fetch_array($result))
									{
										$c_name=$row["c_name"];
										$s_name=$row["s_name"];
										$p_id=$row["p_id"];
										$p_name=$row["p_name"];
										$price=$row["price"];
										$offer_price=$row["offer_price"];
										$qty=$row['P_stocks'];
										$detail=$row["detail"];
										$image=$row["image"];
										?>
										<tr>
											<td><?php echo $c_name ; ?></td>
											<td><?php echo $s_name ; ?></td>
											<td><?php echo $p_name ; ?></td>
											<td><?php echo $price ; ?></td>
											<td><?php echo $offer_price; ?></td>
											<td><?php echo $qty; ?></td>

											<td ><textarea><?php echo $detail ; ?></textarea> </td>
											<td ><img src="upload/<?php echo $image; ?>" width="100px;" height="100px;" /></td>
											<td><a class="btn btn-primary" href="product.php?id=<?php echo $p_id?>" aria-label="Edit"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
											<td><a class="btn btn-danger" href="product.php?ID1=<?php echo $p_id?>" aria-label="Delete"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a></td>
										</tr>
									<?php }  ?>
									<tbody>
									</table>
								</div>
							</div>
							<?php
							if(isset($_POST['Update']))
							{
								$id=$_GET["id"];
								$c_name = $_POST['c_name'];
								$s_name = $_POST['s_name'];
								$p_name = $_POST['p_name'];
								$price= $_POST['price'];
								$offer_price= $_POST['offer_price'];
								$qty=$_POST['qty'];
								$detail= $_POST['detail'];
								$sql="";
								
								$image = $_FILES['image']['name'];
								if(!$image)
								{
									$sql="UPDATE `product` SET `c_name` = '$c_name',`s_name` ='$s_name',`p_name` ='$p_name',`price` ='$price',`offer_price` ='$offer_price',`P_stocks`='$qty',`detail` ='$detail' WHERE `p_id` ='$id'";
								}
								else
								{
									$file_path = 'upload/';
									$file_path = $file_path . basename( $_FILES['image']['name']);
									if(move_uploaded_file($_FILES['image']['tmp_name'], $file_path))
									{
										$sql="UPDATE `product` SET `c_name` = '$c_name',`s_name` ='$s_name',`p_name` ='$p_name',`price` ='$price',`offer_price` ='$offer_price',`P_stocks`='$qty',`detail` ='$detail',`image` ='$image' WHERE `p_id` ='$id'";
									}
								}


								
								mysqli_query ($conn,$sql);
								mysqli_close ($conn);
								echo '<script type="text/javascript">alert("Update  Succesfully..!!");window.location=\'product.php\';</script>';
								unset($_POST);
							}
							?>
						</div>
					</section>
				</div>
			</div>
 
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
