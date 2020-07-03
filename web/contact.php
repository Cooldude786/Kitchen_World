 <?php include('header.php'); ?>

 	<div class="contact-w3l">
		<div class="container">

			<h3 class="tittle-w3l">Contact Us
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>

			<!-- contact -->
			<div class="contact agileits">
				<div class="contact-agileinfo">
					<div class="contact-form wthree">
						<form action="#" method="post">
							<div class="">
								<input type="text" name="name"  placeholder="name" required="">
							</div>
							<div class="">
								<input class="text" type="text" name="sub" placeholder="Subject" required="">
							</div>
							<div class="">
								<input class="email" type="email" name="email" placeholder="Email" required="">
							</div>
							<div class="">
								<textarea placeholder="Message" name="msg" required=""></textarea>
							</div>
							<input type="submit" value="Submit" name="submits">
						</form>
						<?php
						if(isset($_POST['submits']))
						{    $name=$_POST['name'];
					          $subject=$_POST['sub'];
							  $email=$_POST['email'];
							  $message=$_POST['msg'];

						 date_default_timezone_set('Asia/Kolkata');
							if(mysqli_query($conn,"INSERT INTO `contact`(`name`, `email`, `sub`, `msg`,`timestamp`) VALUES ('$name','$email','$subject','$message','".date('Y-m-d')."')"))
							    {
										echo '<script type="text/javascript">alert("Your Query is Successfully Sent.");window.location=\'contact.php\'</script>';
								  }
					    }
					    ?>
				</div>
				<br>
			</br>
			<h3 class="agileinfo_sign">Feed Back </h3>
				 <div class="table-responsive" >
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th style="background: #1accfd;">SR No.</th>
                            <th style="background: #1accfd;">Name</th>
                            <th style="background: #1accfd;">Email</th>
                            <th style="background: #1accfd;">Subject</th>
                            <th style="background: #1accfd;">Massage</th>
                            <th style="background: #1accfd;">Date</th>
                        </tr>
                    </thead>
                    <tbody >
                    <?php
                      $feed=mysqli_query($conn,"SELECT * FROM `contact`WHERE email='$page_owner'");
                      while ($feeduser = mysqli_fetch_assoc($feed))
							         {
                        $user_id = $feeduser['id'];
                        $user_name=$feeduser['name'];
                        $user_email=$feeduser['email'];
                        $user_sub=$feeduser['sub'];
                        $user_msg=$feeduser['msg'];
                        $Lastdate=$feeduser['timestamp'];
                    ?>
                      <tr class="rem1">
                        <td class="invert"><?php echo $user_id;?></td>
                          <td class="invert">
                           <?php echo $user_name; ?>
                            </td>
                              <td class="invert"><?php echo $user_email; ?></td>
                              <td class="invert" ><?php echo $user_sub; ?></td>
                              <td class="invert">
                              <?php echo $user_msg; ?>
                              </td>
                              <td class="invert">
                              <?php echo $Lastdate; ?>
                              </td>
                            </tr>
                          <?php } ?>
                  </tbody>
              </table>
          </div>
					<div class="contact-right wthree">
						<div class="col-xs-7 contact-text w3-agileits">
							<h4>GET IN TOUCH :</h4>
							<p>
								<i class="fa fa-map-marker"></i> 3 Garden Villa, Ahmedabad, India.</p>
							<p>
								<i class="fa fa-phone"></i> Telephone : 820 008 3178</p>
							<p>
								<i class="fa fa-fax"></i> FAX : +91 888 888 4444</p>
							<p>
								<i class="fa fa-envelope-o"></i> Email :
								<a href="mailto:example@mail.com"> kitchenworld@info.in</a>
							</p>
						</div>
						<div class="col-xs-5 contact-agile">
							<img src="images/contact2.jpg" alt="">
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- //contact -->
		</div>
	</div>
	<!-- map -->
	<div class="map w3layouts">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.2047245008484!2d72.56363751492047!3d23.089600384919155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e830a3bd999b5%3A0x6ebb50195154bb9e!2sSv%20Square!5e0!3m2!1sen!2sin!4v1575563531329!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;"
allowfullscreen=""></iframe>
	</div>
	<!-- //map -->
<?php include('footer.php');?>
</body>
</html>
