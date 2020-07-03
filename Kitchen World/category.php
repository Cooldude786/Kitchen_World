<?php
 
include("header.php");
?>
<!DOCTYPE html>
<head>
<title>Category</title>
 
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
                           Category
                        </header>
						<?php
						if(isset($_GET['c_id']))
						{
						$c_id=$_GET['c_id'];
						}
						else
						{
						$c_id=0;
						}
						$query="Select * from category where c_id='$c_id'";
						$result=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($result);
						?>
						<?php
						if(isset($_REQUEST['ID1']))
						{
						$c_id=$_REQUEST['ID1'];
						if(!$conn)
						{
						die("connection failed:".mysqli_connect_error());
						}
						$query="Delete from category where c_id=$c_id";
						$result=mysqli_query($conn,$query);
						if($result==1)
						{
						echo'<script type="text/javascript">alert("Record Deleted");window.location=\'category.php\';</script>';
						}
						else{}
						}
						?>
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
						<div class="box-body">
							<div class="form-group"><br/>
							<label for="inputEmail3" class="col-sm-4 control-label">Add Category</label>
							<div class="col-sm-4">
							<input type="text" class="form-control" name="c_name" id="inputEmail3" value="<?php echo $row['c_name'];?>" placeholder="Enter Category Name...">
							</div>
							</div>
						</div>
						<!-- /.box-body -->
						<div class="box-footer">
							<div class="form-group">
							<label for="inputPassword3" class="col-sm-4 control-label"></label>
							<div class="col-sm-4">
							<input type="submit" name="<?php if(!isset($_GET['c_id'])){echo "Submit";}else{echo "Update";} ?>" value="<?php if(!isset($_GET['id'])){echo "Submit";}else{echo "Update";} ?>" class="btn btn-info pull" />
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
						if($_POST['c_name']=="0" || $_POST['c_name']==""){
									echo '<script type="text/javascript">alert("Please Enter Category");window.location=\'category.php\';</script>';
								}else{
						$c_name = $_POST['c_name'];
						$sql = "insert into category(c_name) values ('".$c_name."')";
						mysqli_query ($conn,$sql);
						// Close The Connection
						mysqli_close ($conn);
						echo '<script type="text/javascript">alert("Inserted Succesfully");window.location=\'category.php\';</script>';
								}
						unset($_POST);
						}
						?>

						<div class="box-body">
							<div class="box-body table-responsive no-padding">
								<table id="example2" class="table table-bordered table-hover box-body">
								<thead>
								<tr>
								<th>Id</th>
								<th>Category</th>
								<th>Edit</th>
								<th>Delete</th>
								</tr>
								</thead>
								<?php
								$sql="select * from category";
								$result = mysqli_query($conn,$sql);
								while($row = mysqli_fetch_array($result))
								{
								$c_id=$row["c_id"];
								$c_name=$row["c_name"];
								?>
								<tr>
								<td><?php echo $c_id; ?></td>
								<td><?php echo $c_name ; ?></td>
								<td><a class="btn btn-primary" href="category.php?c_id=<?php echo $c_id?>" aria-label="Edit"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
								<td><a class="btn btn-danger" href="category.php?ID1=<?php echo $c_id?>" aria-label="Delete"> <i class="fa fa-trash-o" aria-hidden="true"> </a></td>
								</tr>
							<?php }  ?>
							<tbody>
							</table>
							</div>
							<?php
							if(isset($_POST['Update']))
							{
							$c_id=$_GET['c_id'];
							$c_name = $_POST['c_name'];
							//$sql="update history set image='$image',history='$history' where id='$id'";
							echo $sql="update category set c_name='$c_name' where c_id='$c_id'";
							mysqli_query ($conn,$sql);
							mysqli_close ($conn);
							echo '<script type="text/javascript">alert("Updated Succesfully");window.location=\'category.php\';</script>';
							unset($_POST);
							}
							?>
						</div>
                    </section>
            </div>


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
