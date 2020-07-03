 <?php
 
include("header.php");
?>
 
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Terms & Condition
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
						$query="Select * from terms where id='$id'";
						$result=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($result);
						$detail=$row['detail'];
						$ans=$row['detail2'];
						
						
						?> 
						<?php
						if(isset($_REQUEST['ID1']))
						{
						$id=$_REQUEST['ID1'];
						if(!$conn)
						{
						die("connection failed:".mysqli_connect_error());
						}
						$query="Delete from terms where id=$id";
						$result=mysqli_query($conn,$query);
						if($result==1)
						{
							
						echo'<script type="text/javascript">alert("Record Deleted");window.location=\'terms.php\';</script>';
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
						
		<tr >
         		<td colspan="4"><label class="file" >Add Detail :</label></td>
		</tr>
		      <tr>
					<td colspan="4"><textarea name="detail" class="ckeditor" <?php echo $detail;?> ></textarea></td>	 
	     	</tr>
							
				<tr>
					<td colspan="4"><label class="file" >Add Detail_2 :</label></td>
				</tr>
				 <tr>
					<td colspan="4"><textarea name="detail2" class="ckeditor" <?php echo $ans ;?> ></textarea></td>
				</tr>
					
						<div class="form-group">
            	
   
    
	
						<!-- /.box-body -->
						<div class="box-footer">
							<div class="form-group">
							<label for="inputPassword3" class="col-sm-4 control-label"></label>
							<div class="col-sm-4">
							<input type="submit" name="<?php if(!isset($_GET['id'])){echo "Submit";}else{echo "Update";} ?>" value="<?php if(!isset($_GET['id'])){echo "Submit";}else{echo "Update";} ?>" class="btn btn-info pull" />
							<!-- <button type="submit" class="btn btn-info" name="update">Update</button>-->
							<button type="submit"  name="cancel" class="btn btn-info">Cancel</button>
							</div>
							</div>
						</div>
						</br>
					
					
          </div>
					
						<!-- /.box-footer -->
						</form>
						<?php
						if(isset($_POST['Submit']))
						{
						extract($_POST);
					
										
										
										$detail= $_POST['detail'];
										$ans= $_POST['detail2'];
										
										
											
										$sql = "insert into terms(detail,detail2) values ('".$detail."','".$ans."')";
										$result=mysqli_query ($conn,$sql);
															// Close The Connection
															if($result==1){
																echo '<script type="text/javascript">alert(" Data Inserted Succesfully..!!");window.location=\'terms.php\';</script>';
																}
																else{
															echo '<script type="text/javascript">alert("Data Not  Inserted Succesfully");window.location=\'terms.php\';</script>';
															}
								
						unset($_POST);
						}
						?>
					

						<div class="box-body">
							<div class="box-body table-responsive no-padding">
								<table class="table table-bordered table-hover box-body">
								<thead>
								<tr>
								<th>ID</th>
								
								<th>Detail</th>
								<th>Detail2</th>
								<th>Edit</th>
								<th>Delete</th>
								
								</tr>
								</thead>
								<?php		
								$sql="select * from terms";
								$result = mysqli_query($conn,$sql);					
								while($row = mysqli_fetch_array($result))
								{	
								$id=$row["id"];
								$detail=$row["detail"];
								$ans=$row["detail2"];
								
								?>
								
								<tr>
								<td><?php echo $id; ?></td>
								
								<td ><?php echo $detail ; ?> </td>
								<td ><?php echo $ans; ?> </td>
									
								<td><a class="btn btn-primary" href="terms.php?id=<?php echo $id?>" aria-label="Edit"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
								<td><a class="btn btn-danger" href="terms.php?ID1=<?php echo $id?>" aria-label="Delete"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a></td>
								
								</tr>
							
							<?php }  ?>
							
							</table>
							</div>
							</div>
							  <?php
	if(isset($_POST['Update']))
	{
			$id=$_GET["id"];
			$detail= $_POST['detail'];
			$ans= $_POST['detail2'];
  $sql="UPDATE `terms` SET `detail` ='$detail' ,`detail2`='$ans' WHERE `id` ='$id';";
		
		mysqli_query ($conn,$sql);
	
		mysqli_close ($conn);
								
		echo '<script type="text/javascript">alert("Update  Succesfully..!!");window.location=\'terms.php\';</script>';
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
