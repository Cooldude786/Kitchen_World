<?php
 
include("header.php");
?>
<!--sidebar start-->

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                     Contact Details
                        </header>
					   <?php
 if(isset($_REQUEST['id1']))
{
  $id=$_REQUEST['id1'];

 
	if(!$conn)
	{
		die("connection failed:".mysqli_connect_error());
	}
 
  $query="Delete from contact where id=$id";
  $result=mysqli_query($conn,$query);
	if($result==1)
	{
		echo'<script type="text/javascript">
		alert("Record  Deleted");
		
		</script>';
	}
	else
	{
		
	}
}

?>
    <section class="content">
      <div class="row">
        <!-- left column -->
        
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Id</th>
                  <th>Name</th>
                 
                  <th>Email</th>
                  <th>Subject</th>
				  
				   <th>Message	</th>
                 
                    <th>Delete</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php
					
							
							$sql="select * from contact";
							$result = mysqli_query($conn,$sql);
						
							while($row = mysqli_fetch_array($result))
							{	
							$id=$row["id"];
							$name=$row["name"];
							$email=$row["email"];
							$sub=$row["sub"];
							$msg=$row["msg"];
							
							
							?>
              <tr>
               <td><?php echo $id; ?></td>
                <td><?php echo $name ; ?></td>
				  <td><?php echo $email ; ?></td>
				   <td><?php echo $sub ; ?></td>
				   <td><?php echo $msg ; ?></td>
					
				
				    
				
               
              
                <td><a class="btn btn-danger" href="contact.php?id1=<?php echo $id?>" aria-label="Delete"> <i class="fa fa-trash-o" aria-hidden="true"></i> </a></td>
               
              </tr>
              <?php }  ?>
               
                 </tbody>
              </table>
            </div>
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
