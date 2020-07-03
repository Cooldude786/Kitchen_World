 <?php include('header.php'); ?>
 
 
	<div class="faqs-w3l">
		<div class="container">
			<!--  heading -->
			<h3 class="tittle-w3l">Faqs
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- // heading -->
			<h3 class="w3-head">Top 10 Frequently asked questions</h3>
			<div class="faq-w3agile">
				<ul class="faq">
				<?php 
                  $sql=mysqli_query($conn,"SELECT * FROM `freq`");
                  while($row=mysqli_fetch_assoc($sql))
				  {	  
				  ?>
					<li class="item1">
						<a href="#" title="click here"><?php echo $row['detail']?> </a>
						<ul>
							<li class="subitem1">
								<p><?php echo $row['detail2']?></p>
							</li>
						</ul>
					</li>
				  <?php } ?>
					 
				</ul>
			</div>
		</div>
	</div>
	<!-- //FAQ-help-page -->
	<!-- footer -->
	 
			 
			 <?php include('footer.php');?>
			 <!-- script for tabs -->
	<script>
		$(function () {

			var menu_ul = $('.faq > li > ul'),
				menu_a = $('.faq > li > a');

			menu_ul.hide();

			menu_a.click(function (e) {
				e.preventDefault();
				if (!$(this).hasClass('active')) {
					menu_a.removeClass('active');
					menu_ul.filter(':visible').slideUp('normal');
					$(this).addClass('active').next().stop(true, true).slideDown('normal');
				} else {
					$(this).removeClass('active');
					$(this).next().stop(true, true).slideUp('normal');
				}
			});

		});
	</script>
	<!-- script for tabs -->


</body>

</html>
