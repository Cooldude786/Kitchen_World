<?php
include("header.php");
?>


<!DOCTYPE html>
<head>
<title>Product Information</title>

<script src="js/jquery2.0.3.min.js"></script>

</head>
<body>
<section id="container">
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Product Report
                        </header>
                        
                        <div class="box-body" >
							<div class="box-body table-responsive no-padding">
								<table class="table table-bordered table-hover box-body" id="myTable">
								<thead>
								<tr>

								<th>Product ID</th>
								<th>Category</th>
								<th>Sub-Category</th>

								<th>Product Name</th>
								<th>Product Price</th>
								<th>Offer Price</th>


								<th>Image</th>


								</tr>
								</thead>
								<?php
								$sql="select * from product";
								$result = mysqli_query($conn,$sql);
								while($row = mysqli_fetch_array($result))
								{

                                                                    $p_id=$row["p_id"];
								$c_name=$row["c_name"];
								$s_name=$row["s_name"];


								$p_name=$row["p_name"];
								$price=$row["price"];
								$offer_price=$row["offer_price"];


								$image=$row["image"];

								?>

								<tr>


								<td><?php echo $p_id ; ?></td>
                                                                <?php
								$sql1="select * from category where `c_id` = ".$c_name." ";
								$result1 = mysqli_query($conn,$sql1);
								while($row1 = mysqli_fetch_array($result1))
								{
                                                                    $c_name1 =$row1["c_name"];


                                                                    ?>

								<td><?php echo $c_name1 ; ?></td>
                                                                <?php }
								$sql1="select * from sub_category where `s_id`= ".$s_name." ";
								$result1 = mysqli_query($conn,$sql1);
								while($row1 = mysqli_fetch_array($result1))
								{
                                                                    $s_name1 =$row1["s_name"];


                                                                    ?>
								<td><?php echo $s_name1 ; ?></td>

                                                                <?php } ?>

								<td><?php echo $p_name ; ?></td>
								<td><?php echo $price ; ?></td>
								<td><?php echo $offer_price; ?></td>


								<td ><img src="upload/<?php echo $image; ?>" width="100px;" height="100px;" /></td>



								</tr>

							<?php }  ?>
							<tbody>
							</table>
							</div>
							</div>

				  		</div>
            </section>
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
