<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/jquery-2.1.4.min.js"></script>
  </head>
  <body>
    <!-- special offers -->
    <div class="featured-section" id="projects">
      <div class="container">
        <!-- tittle heading -->
        <h3 class="tittle-w3l">Special Offers
          <span class="heading-style">
            <i></i>
            <i></i>
            <i></i>
          </span>
        </h3>
        <!-- //tittle heading -->
        <div class="content-bottom-in">
          <ul id="flexiselDemo1" style="list-style: none;">
            <?php
                $chkoffer=mysqli_query($conn,"SELECT * FROM `offer_product`");
                $numrows=mysqli_num_rows($chkoffer);
                while ($row=mysqli_fetch_assoc($chkoffer))
                {
                    $o_id=$row['o_id'];
                    $p_id=$row['p_id'];
                    $o_price=$row['o_price'];
                    $chkproduct=mysqli_query($conn,"SELECT * FROM `product` WHERE `p_id`='$p_id'");
                    $rows=mysqli_fetch_assoc($chkproduct);
            ?>
            <li>
              <div class="w3l-specilamk">
                <div class="speioffer-agile">
            <a href="single.php?pid=<?php echo $row['p_id'];?>">
                    <img src="../Kitchen World/upload/<?php echo $rows['image'];?>" alt="" style="height:200px;width:200px;" >
                  </a>
                </div>
                <div class="product-name-w3l">
                  <h4>
                    <a href="single.php?pid=<?php echo $row['p_id'];?>"><?php echo $rows['p_name'];?></a>
                  </h4>
                  <div class="w3l-pricehkj">
                    <h6><del>₹<?php echo $rows['price'];?></del></h6>
                    <p>offer price ₹<?php echo $rows['offer_price'];?></p>
                  </div>
                  <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                    <fieldset id="resdiv<?php echo $rows['p_id']; ?>">
                        <?php
                        $pid=$rows['p_id'];
                        $chk=mysqli_query($conn,"SELECT * FROM checkout WHERE p_id='$pid' AND email='$page_owner'");
                        $chkstock=mysqli_query($conn,"SELECT * FROM product WHERE p_id='$pid'");
                        $getstock=mysqli_fetch_assoc($chkstock);
                        $stock=$getstock['P_stocks'];
                        if($stock > 0){
                          if(mysqli_num_rows($chk) > 0){ ?>
                            <input type="submit" OnClick="" value="Added to cart" class="button" disabled />
                          <?php } else {?>
                            <input type="submit" <?php if($page_owner==''){?> OnClick=" " value='Add to cart' class='button' data-toggle='modal' data-target='#myModal1'>
                          <?php }else{?>onclick="addtocart('resdiv<?php echo $rows['p_id']; ?>','<?php echo $rows['p_id'];?>','<?php echo $rows['offer_price']; ?>','1','<?php echo $page_owner ?>')" value="Add to cart" class="button" /> 
                        <?php } } } else { ?>
                              <input type="submit" OnClick="" value="Out Of Stock" class="button" disabled /><?php }?>
                            </fieldset>
                  </div>
                </div>
              </div>
            </li>
          <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- //special offers -->
    <!-- Ajax Add-to-cart -->
    <script type="text/javascript">
               function addtocart(resdiv,p_id,price,qty,email){
                   console.log(p_id+"and"+price+"and"+qty+"and"+email);
                   var param='p_id='+p_id+"&price="+price+"&qty="+qty+"&email="+email+"&reqID=2";
                   if(email==""){

                      } else {
                   $.ajax({
                       type:'post',
                       url:'addtocart.php',
                       data:param,
                       success:function (response){
                           console.log("Res:",response);
                           console.log("Res:",param);
              $(' #'+resdiv).html(response);
                           //window.location='checkout.php';
                       }
                   });
                   }
               }
               </script>
    <!-- //Ajax Add-to-cart -->
  </body>
</html>
