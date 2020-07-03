<?php include('header.php'); ?>
	 
	<div class="page-head_agile_info_w3l">

	</div>
	 
	<section class="terms-of-use">
		 
		<div class="terms">
			<div class="container">
 
				<h3 class="tittle-w3l">Return Policy
					<span class="heading-style">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</h3>
	            <?php 
				
				  $query=mysqli_query($conn,"SELECT * FROM `return&refund`");
				  while($row=mysqli_fetch_assoc($query))
				  {
					 echo $row['detail'];
				  }?>				 
			</div>
		</div>
 
	</section>
	 <?php 
	 include('footer.php');?>
	 
</body>

</html>
