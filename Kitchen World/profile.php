 <?php
include("header.php");
?>
 
<section id="container">

   
  <section id="main-content">
  <section class="wrapper">
  <div class="form-w3layouts">
      
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
              Upload Profile
                        </header>

 
    <section class="content">
      <div class="row">
       
        <div class="col-md-">
          
          <div class="box box-primary">
            <div class="box-header with-border">
            
            </div>
            <?php
    
         $query="select * from admin where email='$loginsession'";
        $result=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($result))
        {   
        $username=$row['username'];
        
        $email=$row['email'];
        $password=$row['password'];
        $mobile=$row['contact'];
  
        }
      ?>
       
            <!-- form start -->
            <form class="form-horizontal" enctype="multipart/form-data" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Name</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputEmail3" name="username" value="<?php echo $username; ?>" placeholder="Enter Name">
                  </div>
                </div>
        
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Phone No</label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="inputPassword3" name="mobile" value="<?php echo $mobile; ?>" placeholder="Enter Contact No ">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Email</label>

                  <div class="col-sm-4">
                    <input type="email" class="form-control" id="inputPassword3" name="email" value="<?php echo $email; ?>">
        
                  </div>
                </div>
                 
               
                
           
              </div>
 
              <div class="box-footer ">
              <center>
                <!--<button type="submit" class="btn btn-default">Cancel</button>-->
                <button type="submit" name="submit" class="btn btn-info pull-">Update</button>
              </center>
              </div>
              <!-- /.box-footer -->
            </form>
            <?php
      
        if(isset($_POST['submit']))
        {
          //$id=$_POST['id'];
          $username=$_POST['username'];
          $mobile=$_POST['mobile'];
          $email=$_POST['email'];
          
          

            $query="UPDATE `admin` SET `username`='$username',`mobile`='$mobile',`email`='$email'";
          $result=mysqli_query($conn,$query);
          if($result==1)
          {
             
            echo '<script type="text/javascript">alert("Profile Update successfully..!!");window.location=\'profile.php\';</script>';
          }
          else
          {
         
            echo '<script type="text/javascript">alert("Please Try Again..!! ");window.location=\'profile.php\';</script>';
          }
        }
      ?>
       

                 
     </div>
 

        </div>
        
      </div>

    </section>
 
  </div>
  
  

 
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
 
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>