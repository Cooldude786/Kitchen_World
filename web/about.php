 <?php include('header.php'); ?>
 
	<div class="page-head_agile_info_w3l">

	</div>
	 
	<div class="welcome">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Welcome to Kitchen World
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="w3l-welcome-info">
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/about.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/about2.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3l-welcome-text">
				 <?php 
				         $sql=mysqli_query($conn,"SELECT * FROM `about`");
						 $row=mysqli_fetch_array($sql)
						 
						 ?>
						 
                		<p><?php echo $row['detail']?></p>
						 
				 
						 </div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- video -->
	<div class="about">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Our Video
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="about-tp">
				<div class="col-md-8 about-agileits-w3layouts-left">
				 <?php 
				 if($page_owner=='')
				 {?>
							    
								<span class="fa fa-unlock-alt" aria-hidden="true"></span><button data-toggle="modal" data-target="#myModal1"> Sign In</button> </a>
						<video width='500px',height="500px" controls>
						 
                             <source src=".mp4" type="video/mp4"></video> 
                        
					 
				  <?php }
				 else{?>
					
					<iframe src="https://player.vimeo.com/vide"></iframe>
				 <?php }?>
				</div>
				<div class="col-md-4 about-agileits-w3layouts-right">
					<div class="img-video-about">
						<img src="images/videoimg2.png" alt="">
					</div>
					<h4>Kitchen World</h4>
					<p>No.1 Leading E-commerce marketplace </p>
				</div>
				<div class="clearfix"></div>
				 <?php 
				         $sql=mysqli_query($conn,"SELECT * FROM `about`");
						 $row=mysqli_fetch_array($sql)
						 
						 ?>
						 
                		<!-- <p><?php echo $row['detail']?></p> -->
			</div>
		</div>
	</div>
	<!-- //video-->
	<!-- //about page -->
 <?php include('footer.php');?>

</body>

</html>
