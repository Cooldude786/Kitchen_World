<?php
 
include("header.php");
?>
<!DOCTYPE html>
<head>
<title>Sub-Category</title>
 
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
                            Sub-Category
                        </header>
						<?php
						if(isset($_GET['s_id']))
						{
						$s_id=$_GET['s_id'];
						}
						else
						{
						$s_id=0;
						}
						$query="Select * from sub_category where s_id=$s_id";
						$result=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($result);

$s_name=$row['s_name'];

						?>
						<?php
						if(isset($_REQUEST['ID1']))
						{
						$s_id=$_REQUEST['ID1'];
						if(!$conn)
						{
						die("connection failed:".mysqli_connect_error());
						}
						$query="Delete from sub_category where s_id=$s_id";
						$result=mysqli_query($conn,$query);
						if($result==1)
						{
						echo'<script type="text/javascript">alert("Record Deleted");window.location=\'sub_category.php\';</script>';
						}
						else{}
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
									echo "<option value='".$row['c_id']."'>".$row['c_name']."</option>";

								}
								?>
							</select>
							</div>
							</div>
						</div>
						<div class="box-body">
							<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">Add Sub-Category : </label>
							<div class="col-sm-4">
							<input type="text" class="form-control" name="s_name" id="inputEmail3" value="<?php echo $s_name;?>" placeholder="Enter Sub-Category Name..."/>
							</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<div class="form-group">
							<label for="inputPassword3" class="col-sm-4 control-label"></label>
							<div class="col-sm-4">
							<input type="submit" name="<?php if(!isset($_GET['s_id'])){echo "Submit";}else{echo "Update";} ?>" value="<?php if(!isset($_GET['s_id'])){echo "Submit";}else{echo "Update";} ?>" class="btn btn-info pull" />
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
								if($_POST['c_name']=="0" || $_POST['c_name']=="" || $_POST['s_name']==""){
									echo '<script type="text/javascript">alert("Please Select Valid Category");window.location=\'sub_category.php\';</script>';
								}else{
										$c_name = $_POST['c_name'];
										$s_name = $_POST['s_name'];
										$sql = "insert into sub_category(c_name, s_name) values ('".$c_name."', '".$s_name."')";
										mysqli_query ($conn,$sql);
										// Close The Connection
										mysqli_close ($conn);
										echo '<script type="text/javascript">alert("Inserted Succesfully");window.location=\'sub_category.php\';</script>';
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
								<th>Category ID</th>
								<th>Sub-Category</th>
								<th>Edit</th>
								<th>Delete</th>
								</tr>
								</thead>
								<?php
								$sql="select * from sub_category";
								$result = mysqli_query($conn,$sql);
								$count=1;
								while($row = mysqli_fetch_array($result))
								{
								$s_id=$row["s_id"];
								$c_name=$row["c_name"];
								$s_name=$row["s_name"];
								?>
								<tbody>
								<tr>
								<td><?php echo $count; ?></td>
								<td><?php echo $c_name ; ?></td>
								<td><?php echo $s_name ; ?></td>
								<td><a class="btn btn-primary" href="sub_category.php?s_id=<?php echo $s_id?>" aria-label="Edit"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
								<td><a class="btn btn-danger" href="sub_category.php?ID1=<?php echo $s_id?>" aria-label="Delete"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a></td>
								</tr>
							<?php $count++; }  ?>
							</tbody>
							</table>
							</div>
							<?php
							if(isset($_POST['Update']))
							{
								if($_POST['c_name']=="0" || $_POST['c_name']=="" || $_POST['s_name']==""){
									echo '<script type="text/javascript">alert("Please Select Valid Category");window.location=\'sub_category.php?c_id='.$c_id.'\';</script>';
								}else{
							$s_id=$_GET['s_id'];
							$c_name = $_POST['c_name'];
							$s_name = $_POST['s_name'];
							//$sql="update history set image='$image',history='$history' where id='$id'";
							echo $sql="update sub_category set c_name='$c_name', s_name='$s_name' where s_id='$s_id'";
							mysqli_query ($conn,$sql);
							mysqli_close ($conn);
							echo '<script type="text/javascript">alert("Updated Succesfully");window.location=\'sub_category.php\';</script>';
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
