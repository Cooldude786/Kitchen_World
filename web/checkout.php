
<script src="js/jquery-2.1.4.min.js"></script>
<?php include('header.php'); 
if($page_owner=='')
{
  echo "<a href='#'data-toggle='modal' data-target='#myModal1'>";
}?>
<!-- banner-2 -->
<div class="page-head_agile_info_w3l">
</div>
<!-- //banner-2 -->
<!-- checkout page -->
<div class="privacy">
    <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Checkout
            <span class="heading-style">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </h3>
        <!-- //tittle heading -->
        <div class="checkout-right">
            <div id="resDiv1">
                <?php
                $checkCart = mysqli_query($conn, "SELECT * FROM checkout WHERE email='$page_owner'");
                $numrows = mysqli_num_rows($checkCart);
                //document.write($numrows);die();
                ?>
                <h4>Your shopping cart contains:
                    <span><?php echo $numrows; ?> Products</span>
                </h4>
            </div>
            <div class="table-responsive" id="resDiv">
                <table class="timetable_sub">
                    <thead>
                        <tr>
                            <th>SR No.</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php
                        $count = 1;
                        $total = 0;
                        while ($getCart = mysqli_fetch_assoc($checkCart))
							{
                            $p_id = $getCart['p_id'];
                            $qty = $getCart['quantity'];
                            $chkProduct = mysqli_query($conn, "SELECT * FROM product where p_id='$p_id'");
                            $getProduct = mysqli_fetch_assoc($chkProduct);
                            $price = $getCart['price'];
                            $chkID = $getCart['chk_id'];

                            $pimage = $getProduct['image'];
                            $pname = $getProduct['p_name'];
                            $outof=$getProduct['P_stocks'];
                            ?>
                            <tr class="rem1">
                                <td class="invert"><?php echo $count; ?></td>
                                <td class="invert-image">
                                    <a href="single.php?p_id=<?php echo $p_id; ?>">
                                        <img src="../Kitchen World/upload/<?php echo $pimage; ?>" alt=" " style="height:100px;width:100px" class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus" onClick="addtocart('<?php echo $getProduct['offer_price']; ?>', '<?php echo $chkID; ?>', '<?php echo $price; ?>', '<?php echo $qty; ?>', '<?php echo $outof;?>','minus');">&nbsp;</div>
                                            <div class="entry value">
                                                <span><?php echo $qty; ?></span>
                                            </div>
                                            <div class="entry value-plus active" style="display:<?php if ($outof==0) {
                                                echo "none";
                                            }?>" onClick="addtocart('<?php echo $getProduct['offer_price']; ?>', '<?php echo $chkID; ?>', '<?php echo $price; ?>', '<?php echo $qty; ?>','<?php echo $outof;?>' ,'plus');">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert"><?php echo $pname; ?></td>
                                <td class="invert" >₹<?php echo $price; ?></td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close1" onClick="addtocart('<?php echo $getProduct['offer_price']; ?>', '<?php echo $chkID; ?>', '<?php echo $price; ?>', '<?php echo $qty; ?>','<?php echo $outof;?>' ,'remove');"> </div>
                                    </div>
                                </td>
                            </tr>

                            <?php
                            $total += $getCart['price'];
                            $count++;
                            }


                      if(mysqli_num_rows($checkCart) > 0 )
                                  {?>

                              <tr> <td colspan=6 class="invert" style="text-align: right;">
                                <h4 style="margin-top:15px;padding-bottom: 0px; padding-top:0px; ">Total= <?php  echo $total;?> </h4></td>
                              <?php }
                              else{ if(!$page_owner=='')
                                {?>
                                       <td colspan="6" class="" style="border:none; text-align:center;" >
                                    <div class="quantity">
                                        <div class="quantity-select">
                                   <a href="index.php"> <div class="entry value-plus active" style="border: 1px solid #ff5722;border-radius:10px; margin-top:40px;"></div></a></div>
                                       <h4>Add Cart</h4></div></td>
                              <?php } }?>
                        </tbody>
                    </table>
                    <script type="text/javascript">
                        function addtocart(poldprice, chkID, price, qty, outof,incdec) {
                            //typeof(+price)+=typeof(+price);
                            //$(" #"+chkID).html("₹"+price);
                            console.log(chkID + "and" + price + "and" + qty+"and"+outof);
                            var param = 'c_id=' + chkID + "&offer_price=" + price + "&qty=" + qty + "&reqID=1" + "&poldprice=" + poldprice + "&outof="+outof+"&incdec=" + incdec;
                            if (chkID == "") {
                            } else {
                                $.ajax({
                                    type: 'post',
                                    url: 'addtocart.php',
                                    data: param,
                                    success: function (response) {
                                        console.log("Res:", response);
                                        console.log("Res:", param);
                                        //$(" #"+chkID).html(response);
                                        $(' #resDiv').load(' #resDiv');
                                        $(' #resDiv1').load(' #resDiv1');
                                        //window.location='checkout.php';
                                    }
                                });
                            }
                        }
                    </script>
                </table>
            </div>
        </div>
        <?php 
        if($page_owner=='')
            { ?>
                <div style="padding-left: 45%;padding-top: 50px;"><a href="#" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">
                <button class="submit check_out" name="order" >LOG IN</button></a>
            </div>
        <?php
        }
        else{?>
        <div class="checkout-left">
            <div class="address_form_agile">
                <h4>Add a new Details</h4>
                <div class="creditly-card-form agileinfo_form">
                    <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                        <div class="information-wrapper" >
                            <div class="first-row"  id="idontknow">
                                <select class="option-w3ls" id="delivery_add">
                                    <option value="0">Select Address</option>
                                    <?php
                                    $chkAddress = mysqli_query($conn, "SELECT * FROM address WHERE email='$page_owner'");
                                    if (mysqli_num_rows($chkAddress)) {
                                        while ($getAddress = mysqli_fetch_assoc($chkAddress)) {
                                            $add_id = $getAddress['id'];
                                            $address = $getAddress['address'];
                                            echo '<option value="' . $add_id . '">' . $address . '</option>';
                                        }
                                    } else {
                                        echo '<option>No Address Found</option>';
                                    }
                                    ?>
                                </select>
                                <button class="submit check_out" id="showOption" onclick="showOption()">Or Add New Address</button>
                                <div id="addressresponse" style="display:none">
                                    <div class="controls">
                                        <input class="billing-address-name" type="text" id="uname" placeholder="Full Name" required="">
                                    </div>
                                    <div class="w3_agileits_card_number_grids">
                                        <div class="w3_agileits_card_number_grid_left">
                                            <div class="controls">
                                                <input type="text" placeholder="Mobile Number" id="dnumber" required="">
                                            </div>
                                        </div>
                                        <div class="w3_agileits_card_number_grid_right">
                                            <div class="controls">
                                                <input type="text" placeholder="Address" id="daddress" required="">
                                            </div>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="controls">
                                        <input type="text" placeholder="City" id="dcity" required="">
                                    </div>
                                    <div class="controls">
                                        <select class="option-w3ls" id="daddresstype">
                                            <option value="0">Select Address type</option>
                                            <option value="Office">Office</option>
                                            <option value="Home">Home</option>
                                            <option value="Commercial">Commercial</option>
                                        </select>
                                    </div>
                                    <button class="submit check_out" onclick="submitAddress('<?php echo $page_owner; ?>')">Add  Address</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    function showOption() {
                        var x = document.getElementById('addressresponse');
                        var y = document.getElementById('showOption');
                        if (x.style.display == "none") {
                            x.style.display = "block";
                            y.style.display = "none";
                        } else {
                            x.style.display = "none";
                            y.style.display = "block";
                        }
                    }
                </script>
                <script type="text/javascript">
                    function submitAddress(userid) {
                        var name = document.getElementById('uname').value;
                        var mobile = document.getElementById('dnumber').value;
                        var address = document.getElementById('daddress').value;
                        var city = document.getElementById('dcity').value;
                        var addresstype = document.getElementById('daddresstype').value;
                        var param = "name=" + name + "&mobile=" + mobile + "&address=" + address + "&addresstype=" + addresstype + "&city=" + city + "&userid=" + userid;
                        if (name == "" || mobile == "" || address == "" || city == "" || addresstype == "0") {
                            alert("All Filed Requried");
                        } else {
                            $.ajax({
                                type: 'post',
                                url: 'addAddress.php',
                                data: param,
                                success: function (response) {
                                    console.log("Res:", response);
                                    console.log("Res:", param);
                                    $(' #idontknow').load(' #idontknow');
                                }
                            });
                        }
                    }
                </script>
                <?php
                if (isset($_POST['check_out'])) {
                    $name = $_POST['name'];
                    $mobile = $_POST['mobile'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $city = $_POST['city'];
                    $address_type = $_POST['address_type'];
                    if ($query = mysqli_query($conn, "INSERT INTO `address`(`name`,`mobile`,`email`,`city`,`address`,`address_type`) VALUES('$name','$mobile','$email','$city','$address','$address_type')")) {
                        echo '<script type="text/javascript">alert("Successfully Registered");window.location=\'checkout.php\'</script>';
                    } else {
                        echo "Failed";
                    }
                }
                ?>


            </div>


            <br><br>
            <!-- //tittle heading -->

            <!--Horizontal Tab-->
             
            <div id="parentHorizontalTab">
                <ul class="resp-tabs-list hor_1">
                    <li>Cash on delivery (COD)</li>
                    <li>Credit/Debit</li>
                </ul>
                <div class="resp-tabs-container hor_1">

                    <div>
                        <div class="vertical_post check_box_agile">
                            <h5>COD</h5>
                            <div class="checkbox">
                                <div class="check_box_one cashon_delivery">
                                    <label class="anim">
                                        <span> We also accept Credit/Debit card on delivery. Please Check with the agent.</span>
                                    </label>
                                </div>
                            </div>
                            <br>
                        </div>


                            
                            <button class="submit check_out" name="order" onClick="placeOrder('delivery_add','<?php echo $page_owner;?>')" id='button'>Place Order</button>
                            <div  id='showloader' style="display:none;" >
                                <img src="images/ajax-loader.gif" style="height: 40px;">
                            </div>

                    </div>
           <!--    <script>
             $(document).ready(function () {
  $("#button").click(function(){
    $("#div1").Toggle();
              </script> -->
                    <script type="text/javascript">
                       function placeOrder(del_add,email) {
                           var sh=document.getElementById('showloader');
                            var address = document.getElementById('delivery_add').value;
                            var param = "del_add=" + address +"&email=" + email;
                            if (address == "0") {
                                alert("All Filed Requried");
                            } else {
                                 
                                $.ajax({
                                    type: 'post',
                                    url: 'placeOrder.php',
                                    data: param,
                                     beforeSend:function()
                                     {
                                      sh.style.display = "block";
                                     },
                                     completeSend:function()
                                     {
                                      sh.style.display = "none";
                                     },
                                     success: function (response) {
                                        console.log("Res:",response);
                                        alert("Thank You For Shopping With Us!")
                                        window.location='index.php';
                                    }
                                });
                            }
                        }

                    </script>


                    <div>
                        <!--<form action="#" method="post" class="creditly-card-form agileinfo_form"> -->
                            <div class="creditly-wrapper wthree, w3_agileits_wrapper">
                                <div class="credit-card-wrapper">
                                    <div class="first-row form-group">
                                        <div class="controls">
                                            <label class="control-label">Name on Card</label>
                                            <input class="billing-address-name form-control" type="text" name="name" placeholder="John Smith">
                                        </div>
                                        <div class="w3_agileits_card_number_grids">
                                            <div class="w3_agileits_card_number_grid_left">
                                                <div class="controls">
                                                    <label class="control-label">Card Number</label>
                                                    <input class="number credit-card-number form-control" type="text" name="number" inputmode="numeric" autocomplete="cc-number"
                                                    autocompletetype="cc-number" x-autocompletetype="cc-number" placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                </div>
                                            </div>
                                            <div class="w3_agileits_card_number_grid_right">
                                                <div class="controls">
                                                    <label class="control-label">CVV</label>
                                                    <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                </div>
                                            </div>
                                            <div class="clear"> </div>
                                        </div>
                                        <div class="controls">
                                            <label class="control-label">Expiration Date</label>
                                            <input class="expiration-month-and-year form-control" type="text" name="expiration-month-and-year" placeholder="MM / YY">
                                        </div>
                                    </div>
                                    <button class="submit">
                                        <span>Make a payment </span>
                                    </button>
                                </div>
                            </div>
                            <!-- </form> -->

                        </div>



                    </div>
                </div>
                <!--Plug-in Initialisation-->
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- //checkout page -->


    <?php
    include("footer.php");
    ?>
