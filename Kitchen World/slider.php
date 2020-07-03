 
<?php
include("header.php");
?>


<!DOCTYPE html>
<head>
 
</head>
<body>
 
 
 
 
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        
        <div class="row">
            <div class="col-lg-12">
                     <section class="panel">
                       
 
<div class="row"> 
    <div class="col-lg-12"> 
        <div class="panel panel-default"> 
            <div class="panel-heading"> 
                <h3 class="panel-title"> 
                
                    <i class="fa fa-money fa-fw"></i> Insert Slide
                
                </h3> 
            </div> 
			<?php 
						if(isset($_GET['id']))
						{
						$id=$_GET['id'];
						}
						else
						{
						$id=0;
						}
						$query="Select * from slider where slide_id='$id'";
						$result=mysqli_query($conn,$query);
						$row=mysqli_fetch_array($result);
						$slide_image=$row['slide_image'];
						$slide_name=$row['slide_name'];
						
						?> 
            <div class="panel-body"> 
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"> 
                    <div class="form-group"> 
                    
                        <label for="" class="control-label col-md-3"> 
                            Slide Name 
                        
                        </label> 
                        
                        <div class="col-md-6"> 
                        
                            <input name="slide_name" type="text" class="form-control" value="<?php echo $slide_name;?>">
                        
                        </div> 
                    
                    </div> 
                     
                    
						<div class="form-group">
							<label for="" class="control-label col-md-3"> Add Product Image</label>
							<div class="col-sm-6">
							<input type="file" class="form-control" name="slide_image" id="inputEmail3" value="<?php echo $slide_image;?>" >
							</div>
						</div>
					   <div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label"></label>
							<div class="col-sm-4">
							<img src="upload/<?php echo $slide_image ; ?>" width="100px;" height="100px;"  />
							</div>
						</div>		
						<div class="form-group">
					 
						<div class="box-footer">
							<div class="form-group">
							<label for="inputPassword3" class="col-sm-4 control-label"></label>
                   <div class="col-md-6"> 
                        <!--button-->
                    <input type="submit" name="<?php 
							if(!isset($_GET['id']))
							{
								echo "submit";
							}
							else{
								echo "Update";
								} 
								?>" value="<?php 
								if(!isset($_GET['id'])){
									echo "Submit";}
									else{echo "Update";} ?>" class="btn btn-info pull" />
							<button type="submit"  name="cancel" class="btn btn-info">Cancel</button>
                        
                        </div> 
                    
                    </div> 
                </form> 	
            </div> 
            
        </div> 
    </div> 
</div> 
						 
                        <?php                  
						if(isset($_REQUEST['ID1']))
						{
						$id=$_REQUEST['ID1'];
						if(!$conn)
						{
						die("connection failed:".mysqli_connect_error());
						}
						$query="Delete from slider where slide_id=$id";
						$result=mysqli_query($conn,$query);
						if($result==1)
						{
							
						echo'<script type="text/javascript">alert("Record Deleted");window.location=\'slider.php\';</script>';
						}
						else{}
						}
						?>
						<?php?>

<?php  

    if(isset($_POST['submit'])){
        
        $slide_name = $_POST['slide_name'];
      
        $slide_image = $_FILES['slide_image']['name'];
      
        $view_slides = "select * from slider";
        
        $view_run_slide = mysqli_query($conn,$view_slides);
        
        $count = mysqli_num_rows($view_run_slide);
        
        if($count<4){
			                          if(!$slide_image)
										{
											$file_path='';
											            
                                          echo "<script>alert(' inserte slide')</script>";
										}
										else
										{
										$file_path = 'upload/';
										$file_path = $file_path . basename( $_FILES['slide_image']['name']);    
										if(move_uploaded_file($_FILES['slide_image']['tmp_name'], $file_path)) 
										{
            
          									 $insert_slide = "insert into slider (slide_name,slide_image) values ('".$slide_name."','".$slide_image."')";
											 $result=mysqli_query ($conn,$insert_slide);
											 if($result==1){
																echo '<script type="text/javascript">alert(" Data Inserted Succesfully..!!");window.location=\'slider.php\';</script>';
																}
																else{
															echo '<script type="text/javascript">alert("Data Not  Inserted Succesfully");window.location=\'slider.php\';</script>';
															}
										}
										}
										
										     
        }else{
            
           echo "<script>alert('You have already inserted 4 slides')</script>"; 
            
        }
        
    }

?>

						<div class="box-body">
							<div class="box-body table-responsive no-padding">
								<table class="table table-bordered table-hover box-body">
								<thead>
								<tr>
								<th>ID</th>
								<th>Image_name</th>	
								<th>Image</th>	
								<th>Edit</th>
								<th>Delete</th>
								
								</tr>
								</thead>
								<?php		
								$sql="select * from slider";
								$result = mysqli_query($conn,$sql);					
								while($row = mysqli_fetch_array($result))
								{	
								$id=$row["slide_id"];
								$slide_name=$row["slide_name"];	
								
								$slide_image=$row["slide_image"];					
								?>
								
								<tr>
								<td><?php echo $id; ?></td>
								<td><?php echo $slide_name; ?></td>
								<td ><img src="upload/<?php echo $slide_image; ?>" width="100px;" height="100px;" /></td>
								
								
							<td><a class="btn btn-primary" href="slider.php?id=<?php echo $id?>" aria-label="Edit"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></td>
							<td><a class="btn btn-danger" href="slider.php?ID1=<?php echo $id?>" aria-label="Delete"> <i class="fa fa-trash-o" aria-hidden=	"true"></i> </a></td>
								
								</tr>
							
							<?php }  ?>
							<tbody>
							</table>
							</div>
							</div>
<?php
 if(isset($_POST['Update']))
	{        $id=$_GET['id'];
			$slide_name= $_POST['slide_name'];			
			$slide_image = $_FILES['slide_image']['name'];
		if(!$slide_image)
		{
   		 $slide_image=$slide_image;
		}
		else
		{
		$file_path = 'upload/';
    	$file_path = $file_path . basename( $_FILES['slide_image']['name']);    
    	if(move_uploaded_file($_FILES['slide_image']['tmp_name'], $file_path)) 
		{			
		}
		}

  $sql="UPDATE `slider` SET `slide_name` ='$slide_name',`slide_image` ='$slide_image' WHERE `slide_id` ='$id';";
		
		mysqli_query ($conn,$sql);
	
		mysqli_close ($conn);
								
		echo '<script type="text/javascript">alert("Update  Succesfully..!!");window.location=\'slider.php\';</script>';
unset($_POST);
}
?>
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
 
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
