 <?php include('header.php'); ?>
	 
	<div class="page-head_agile_info_w3l">

	</div>
	 
	<section class="terms-of-use">
		 
		<div class="terms">
			<div class="container">
 
				<h3 class="tittle-w3l">Privacy Policy
					<span class="heading-style">
						<i></i>
						<i></i>
						<i></i>
					</span>
				</h3>
	            <?php 
				
				  $query=mysqli_query($conn,"SELECT * FROM `privacy`");
				  while($row=mysqli_fetch_assoc($query))
				  {
					 echo $row['detail'];
				  }?>

				 
	
				<h6>What Information Can I Access?</h6>
				<p> Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
					Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
				<p> Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The
					generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

				<h6> Advertisements on Grocery Shoppy</h6>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
					by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
					of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
					generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the
					Internet.
				</p>

				<h6>Your Consent</h6>
				<ol start="1">
					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution
						of letters, as opposed Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
					<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
						eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
						voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</li>
					<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution
						of letters, as opposed Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
				</ol>
				<h6>Policy updates</h6>
				<p> you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on
					the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It
					uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures</p>
			</div>
		</div>
		<!-- /terms -->
	</section>
	<!-- //Terms of use-section -->
	<!-- footer -->
	 <?php include('footer.php');?>

</body>

</html>
