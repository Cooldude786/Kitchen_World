<?php
include('session.php');
if(isset($_SESSION['email'])){
	$page_owner=$_SESSION['email'];
	// mysqli_query($conn,"UPDATE `visitore` SET  `visitore_store`=`visitore_store`-1");
} else {
	$page_owner='';
	$timepass='0';
	$quee=mysqli_query($conn,"SELECT * FROM visitore");
	while($fetch=mysqli_fetch_assoc($quee))
	{
		$update=$fetch['visitore_store'];
		$timepass =$update+1;
		mysqli_query($conn,"UPDATE `visitore` SET  `visitore_store`='$timepass'");

		$timepass++;}
	}
//print_r($_SESSION);print_r($page_owner);
	?>
	<!DOCTYPE html>
	<html lang="zxx">
	<head>
		<title>Kitchen World</title>
		<!--/tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="kitchen appliyance,kitchen product,house ,elctonics,
		oven,refrigrater, Samsung, LG," />
		<script src="js/jquery-2.1.4.min.js"></script>
		<script>
			addEventListener("load", function () {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<!--//tags -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/font-awesome.css" rel="stylesheet">
		<!--pop-up-box-->
		<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
		<!--//pop-up-box-->
		<!-- price range -->
		<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
		<!-- fonts -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	</head>

<body >
		<!-- top-header -->
<div class="header-bot " >
  <div class="header-bot_inner_wthreeinfo_header_mid" >
         <div class="col-md-4 logo_agile">
	            <img src="images/logo.svg" alt="">
		 </div>
		 <!-- header lists -->
	      <div class="col-md-8 header" >
					
		       <ul>
			       <li>
							<a href="mailto:KitchenWorld@info.in" >
								<span class="fa fa-envelope" aria-hidden="true"></span> kitchenworld@info.in</a>
			       </li>
			       <li>
								<span class="fa fa-phone" aria-hidden="true"></span> 820 008 3178
				   </li>
				   <?php 
				   if($page_owner=='')
				   { ?>
				   <li>
							<a href="#" data-toggle="modal" data-target="#myModal1">
								<span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
				   </li>
				    <li>
								<a href="#" data-toggle="modal" data-target="#myModal2">
									<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
					</li>
					<?php }
					else{ ?>
					   <li class="dropdown ">
						        <?php $usern=mysqli_query($conn,"SELECT * FROM userinfo WHERE email='$page_owner'");
						        	$first=mysqli_fetch_assoc($usern);
							       $binanameka=$first['name'];
							        $mobile=$first['mobile'];
						          ?>

								    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span>Welcome,</span></br>
									<i class="fa fa-user-circle-o" aria-hidden="true" style="font-size:18px; color:#FF5722;"></i>
									<?php echo $binanameka;?><span class="caret"></span>	</a>

							<ul class="dropdown-menu multi-column columns-2">
								<div class="agile_inner_drop_nav_info">
									<div class="col-md-12">
										<SPAN style="padding-bottom:10px;padding:8px; ">My Account</SPAN>
										<div class="multi-column-dropdown" data-dismiss='dropdown'>
											<div class="profile_menu">

												   <a href="profile.php"  >
												 	<span class="fa fa-user" aria-hidden="true" ></span> Profile </a>
											</div>

											<div class="profile_menu" >
														<a href="plorder.php"  >
														<span class="fa fa-shopping-cart" aria-hidden="true"></span> Order </a>
											</div>
											<div class="profile_menu" >
													 <a href="logout.php"  >
													     <span class="fa fa-sign-out" aria-hidden="true"></span>sign out </a>
											</div>
								    	</div>
								    </div>
							    </div>
							</ul>
						</li>

					<?php } ?>
					
				            	<!-- cart details -->
								<div class="top_nav_right">
									<div class="wthreecartaits wthreecartaits2 cart cart box_1">
										<form action="checkout.php" method="post" class="last">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="display" value="1">
											<button class="w3view-cart" type="submit" name="submit" value="">
											<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
											</button>
										</form>
									</div>
								</div>
								<!-- //cart details -->

		       </ul>
		               <!-- //header lists -->
				        <!-- search -->
						<div class="agileits_search">
							<form onsubmit="return false">
								<input name="Search" type="text"  placeholder="How can we help you today?" id='g_search' required="" autocomplete="off" >
								<button type="submit" name="submit" class="btn btn-default" aria-label="Left Align"   id='opens'>
								   <span class="fa fa-search" aria-hidden="true"> </span>
								</button>
							</form>
				         <div id="search_data" ></div>
						 </div>	
			<div class="clearfix" ></div>			 
	     </div>	
	     <div class="clearfix" ></div>
  </div>
</div>		  
<script type="text/javascript">
 $(document).ready(function(){
 $('#g_search').keyup(function(){
	   var k=document.getElementById('search_data');
	   var guru=document.getElementById('g_search').value;
	   console.log(guru);
	   var khoj='khoj_data='+guru;
  		if($('#g_search').val()=='')
  	    	{
				k.style.display="none";
 
		 }else{
					$.ajax({
							type:"post",
							url:"searchProduct.php",
							data:khoj,
							success:function(response)
				    		{    k.style.display="block";
								console.log('res',response);
				    			 $("#search_data").fadeIn();
								$("#search_data").html(response);
	 												
							}
							});
											
				}  
  });
   });
										 						
</script>
<script type="text/javascript">
	var k=document.getElementById('search_data');
	 window.onclick = function() {
      if (k.style.display=="block") {
         k.style.display = "none";
         $("#search_data").fadeOut("");
		$("#search_data").html("");
        }
       }
</script>
	<!-- /top-header -->
<!-- signin Model -->
<!-- Modal1 -->
<div class="modal fade" id="myModal1"   >
	<div class="modal-dialog">		 
	 <!-- Modal content-->
	  <div class="modal-content">
	    <div class="modal-header">
	 	  <button type="button" class="close" data-dismiss="modal">&times;</button>
	   </div>
	   <div class="modal-body modal-body-sub_agile">
        	<div class="main-mailposi">
        		<span class="fa fa-envelope-o" aria-hidden="true"></span>
        	</div>
            <div class="modal_body_left modal_body_left1">
             <h3 class="agileinfo_sign">Sign In </h3>
			    <p>
			    	Sign In now, Let's start your Kitchen World Shopping. Don't have an account?
			    	<a href="#" data-toggle="modal" data-target="#myModal2" data-dismiss="modal">
			    	Sign Up Now</a>
			    </p>
			<form method="post">
				<div class="styled-input agile-styled-input-top">
					<input type="email" placeholder="Email" name="email" required="">
				</div>
				<div class="styled-input agile-styled-input-top">
					<div style=" position: absolute; padding-top: 12px; margin: 0px;left: 90%; ">

                        <i class="fa fa-eye" aria-hidden="true" style="display:none;" onclick="hide()" id="view_b"></i> 
                        <i class="fa fa-eye-slash" aria-hidden="true" style="display: none;" id="p_show" onclick="hide()"></i>

                    </div>
					<input type="password" placeholder="password" name="password" required="" id='show_p'>
				    <input type="submit" value="Sign In" name="signin">
		             <span style="padding-left: 20px;"><p><a href="forgot.php"> Forget Password? </a></p></span>	
				</div>
			</form>   
	         <script type="text/javascript">
			   var sh=document.getElementById('show_p');
			    var hi=document.getElementById('p_show');
	     		  var view=document.getElementById('view_b');
															 
				$(document).ready(function(){
			    $('#show_p').keyup(function(){
				if($('#show_p').val()==''){
						view.style.display="none";
					hi.style.display="none";
				}else{
					view.style.display="block";
					hi.style.display="none";
				}
				
				});
				});
				function hide(){
				if(sh.type=="password")
				{    
				sh.type="text";
				hi.style.display="block";
                view.style.display="none";
				}else{
				sh.type="password"
				hi.style.display="none";
                view.style.display="block";
				}}
			</script>
		<div class="clearfix"></div>
        </div>	

		<div class="clearfix"></div>
        </div>
       </div>	
    </div>	   
</div>
	<?php
   if(isset($_POST['signin'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($password!="" || $email!=""){
   		$chkmail=mysqli_query($conn,"SELECT * FROM `userinfo` WHERE `email`='$email' AND `password`='$password'");
	 		if(mysqli_num_rows($chkmail) > 0){
			echo '<script type="text/javascript">alert("Login Successfully");window.location=\'index.php\'</script>';
			$_SESSION['email']=$email;
     		}							
			else
			{
			echo '<script type="text/javascript">alert("Email Not Registered");window.location=\'index.php\'</script>';
			}
	}
	}?>

<!-- //signin  -->
									<!-- signup  -->
									 
									<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
										<div class="modal-dialog">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>
												<div class="modal-body modal-body-sub_agile">
													<div class="main-mailposi">
														<span class="fa fa-envelope-o" aria-hidden="true"></span>
													</div>
													<div class="modal_body_left modal_body_left1">
														<h3 class="agileinfo_sign">Sign Up</h3>
														<p>
															Come join the Kitchen World Shoppy! Let's set up your Account.
														</p>
														 <form onsubmit="return false;">
															<div class="styled-input">
																<input type="text" placeholder="Name" name="name" id="name" required="">
															</div>
															<div class="styled-input">
																<input type="text" placeholder="Email" name="email" id="email" required="">
															</div>
															<div class="styled-input">
																<input type="text" placeholder="Mobile" name="mobile" id="mobile" required="">
															</div>
															<div class="styled-input">
																<input type="text" placeholder="Address" name="address" id="address" required="">
															</div>
															<div class="styled-input">
																<input type="password" placeholder="Password" name="password" id="password" required="">
															</div>
															<div class="styled-input">
																<input type="password" placeholder="Confirm Password" name="password1" id="password1" required="">
															</div>
															<div id="error_mass"></div>
															<input type="submit" value="signUP" name="signup" onclick="getnew()" id='hid' >
													 
														  <div  id='once' style="display:none;" >
                                                              <img src="images/ajax-loader.gif" style="height: 40px;">
                                                          </div> 
                                                         </form>
														<p>
															<a href="#">By clicking register, I agree to your terms</a>
														</p>
													</div>
												</div>
											</div>
											 
										</div>
									</div>
	<script type="text/javascript">								
		                                function getnew()
										{  var opes=document.getElementById('once');
										var yop=document.getElementById('hid');
                                           var name=document.getElementById('name').value;
                                           var email=document.getElementById('email').value;
                                           var mobiles=document.getElementById('mobile').value;
                                           var addres=document.getElementById('address').value;
                                           var password=document.getElementById('password').value;
                                           var passwords=document.getElementById('password1').value;
                                            // console.log(name +"and"+email+"and"+mobiles+"and"+addres+"and"+password+"and"+passwords);
                                           var sendd='name='+name+'&email='+email+'&mobile='+mobiles+'&address='+addres+'&password='+password+'&password1='+passwords;
                                           if(name==''||email==''||mobiles==''|addres==''||password==''||passwords=='')
                                            	{
                                      		 
                                      	        }
                                      	    else{
                                                 $.ajax({
                                                	type:"post",
                                           	        url:"head.php",
                                           	        data:sendd,
                                           	        beforeSend:function()
                                                  {
                                                     opes.style.display = "block";
                                                     yop.style.display="none";
                                                   },
                                     
                                           	success:function(response)
                                           	{
                                           		  opes.style.display = "none";
                                           	console.log("res",response);
                                           	$('#error_mass').html(response);
                                          	 yop.style.display="block";
                                          	 if(response==5)
                                          	 {
                                          	 	alert("Enter onliy 10 digit mobile no.");
                                          	 }
                                          	 else if(response==4)
                                          	 {alert("Password Does Not Same!!!!");
                                                                              
                                             }
                                             else{
                                                 if(response==2)
                                                   {
                                               	   	alert('enter valid EMAIL');      
                                                   }else{
                                           	             if (response==3)
                                                          {  
                                                          	alert('enter valid mobile no.');
                                                          }else if(response==1){
                                               	           
                                               	           alert('Successfully Registered');
                                           	                window.location='index.php';
                                                          }else{
                                                         	/*alert('Your mobile are already login');*/
                                               	               window.location='index.php';
                                                             }
                                                        }
                                               }
                                           	} 
                                           });
                                       }
										}
									</script>


                                  <div class="ban-top" >
										<div class="container">
											<div class="top_nav_left">
												<nav class="navbar navbar-default">
													<div class="container-fluid">
														<!-- Brand and toggle get grouped for better mobile display -->
														<div class="navbar-header">
															<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
															aria-expanded="false">
															<span class="sr-only">Toggle navigation</span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
															<span class="icon-bar"></span>
														</button>
													</div>
													<!-- Collect the nav links, forms, and other content for toggling -->
													<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
														<ul class="nav navbar-nav menu__list">
															<li class="active">
																<a class="nav-stylehead" href="index.php">Home
																	<span class="sr-only">(current)</span>
																</a>
															</li>
															<li class="">
																<a class="nav-stylehead" href="about.php">About Us</a>
															</li>

													<?php $chkcat=mysqli_query($conn,"SELECT * FROM `category`");
													while ($row=mysqli_fetch_assoc($chkcat)) {?>
														 <li class="dropdown">
															   <a href="index.php" class="dropdown-toggle nav-stylehead" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $row['c_name']; ?>
																	<span class="caret"></span>
																</a>
																<ul class="dropdown-menu multi-column columns-2">
																	<div class="agile_inner_drop_nav_info">
																		<div class="col-sm-4 multi-gd-img">
																			<ul class="multi-column-dropdown">
																				<?php
																				$c_id=$row['c_id'];
																				$chksubcat=mysqli_query($conn,"SELECT * FROM `sub_category` WHERE `c_name`='$c_id'");
																				while ($row=mysqli_fetch_assoc($chksubcat)) {?>
																					<li>
																						<a href="product.php?subid=<?php echo $row['s_id'];?>"><?php echo $row['s_name'];?></a>
																					</li>
																				<?php }?>
																			</ul>
																		</div>
																		<div class="clearfix"></div>
																	</div>
																</ul>
															</li>
														<?php } ?>
														<li class="">
															<a class="nav-stylehead" href="faqs.php">Faqs</a>
														</li>
														<li class="">
															<a class="nav-stylehead" href="contact.php">Contact us</a>
														</li>
													</ul>
												</div>
											</div>
										</nav>
									</div>
								</div>
							</div>			
									 
								
	
							