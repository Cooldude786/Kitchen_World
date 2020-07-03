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
                            Add About
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
						$query="Select * from `return&refund` where id='$id'";
						$result=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($result);
						$detail=$row['detail'];		
						?> 
						<?php
						if(isset($_REQUEST['ID1']))
						{
						$id=$_REQUEST['ID1'];
						if(!$conn)
						{
						die("connection failed:".mysqli_connect_error());
						}
						$query="Delete from `return&refund` where id=$id";
						$result=mysqli_query($conn,$query);
						if($result==1)
						{
							
						echo'<script type="text/javascript">alert("Record Deleted");window.location=\'return&refund.php\';</script>';
						}
						else{}
						}
						?>
		 
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
						
						<tr >
					       <td colspan="4"><label class="file" >Add Detail :</label></td>
				       </tr>
				      <tr >
				         	<td colspan="4"><textarea name="detail" class="ckeditor" <?php echo $detail;?> ></textarea></td>
				     </tr>
					   
				
						<div class="form-group">
						<!-- /.box-body -->
						<div class="box-footer">
							<div class="form-group">
							<label for="inputPassword3" class="col-sm-4 control-label"></label>
							<div class="col-sm-4">
							<input type="submit" name="<?php if(!isset($_GET['id'])){echo "Submit";}else{echo "Update";} ?>" value="<?php if(!isset($_GET['id'])){echo "Submit";}else{echo "Update";} ?>" class="btn btn-info pull" />
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
										$sql = "insert into `return&refund`(detail) values ('".$detail."')";
										$result=mysqli_query ($conn,$sql);
															// Close The Connection
															if($result==1){
																echo '<script type="text/javascript">alert(" Data Inserted Succesfully..!!");window.location=\'return&refund.php\';</script>';
																}
																else{
															echo '<script type="text/javascript">alert("Data Not  Inserted");window.location=\'return&refund.php\';</script>';
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
								
								<th>Description</th>
								<th>Edit</th>
								<th>Delete</th>
								
								</tr>
								</thead>
								<?php		
								$sql="select * from `return&refund`";
								$result = mysqli_query($conn,$sql);					
								while($row = mysqli_fetch_array($result))
								{	
								$id=$row["id"];
								$detail=$row["detail"];
								
								?>
								
								<tr>
								<td><?php echo $id; ?></td>
								<td ><?php echo $detail ; ?> </td>
							<td><a class="btn btn-primary" href="return&refund.php?id=<?php echo $id?>" aria-label="Edit"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
								<td><a class="btn btn-danger" href="return&refund.php?ID1=<?php echo $id?>" aria-label="Delete"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a></td>
								
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
			$detail= $_POST['detail'];
  $sql="UPDATE  `return&refund` SET `detail` ='$detail' WHERE `id` ='$id';";
		mysqli_query ($conn,$sql);	
	
		mysqli_close ($conn);
								
		echo '<script type="text/javascript">alert("Update  Succesfully..!!");window.location=\'return&refund.php\';</script>';
unset($_POST);
}
?>
						</div>
                    </section>
            </div>
        
        </div>
 
		   
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
	śś