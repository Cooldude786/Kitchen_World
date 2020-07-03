<!-- footer -->

<footer>
    <div class="container">

      <div class="w3l-grids-footer">
        <div class="col-xs-4 offer-footer">
          <div class="col-xs-4 icon-fot">
            <span class="fa fa-truck" aria-hidden="true"></span>
          </div>
          <div class="col-xs-8 text-form-footer">
            <h3>Hassle Free Delivery</h3>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="col-xs-4 offer-footer">
          <div class="col-xs-4 icon-fot">
            <span class="fa fa-refresh" aria-hidden="true"></span>
          </div>
          <div class="col-xs-8 text-form-footer">
            <h3>Free & Easy Returns</h3>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="col-xs-4 offer-footer">
          <div class="col-xs-4 icon-fot">
            <span class="fa fa-times" aria-hidden="true"></span>
          </div>
          <div class="col-xs-8 text-form-footer">
            <h3>Online cancellation </h3>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </div>
      <!-- //footer second section -->
      <!-- footer third section -->
      <div class="footer-info w3-agileits-info">
        <!-- footer categories -->
        <div class="col-sm-5 address-right">
          <div class="col-xs-6 footer-grids">
              <h3>Categories</h3>
                <ul>
                    <li>
                      <a href="product.php?subid=1">Cooktops</a>
                    </li>
                    <li>
                      <a href="product.php?subid=2">Ovens</a>
                    </li>
                    <li>
                      <a href="product.php?subid=3">Toasters</a>
                    </li>
                    <li>
                      <a href="product.php?subid=4">Chimney</a>
                    </li>
                    <li>
                      <a href="product.php?subid=6">Plates</a>
                    </li>
                    <li>
                      <a href="product.php?subid=7">Bowls</a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-6 footer-grids agile-secomk">
              <ul>
                <li>
                  <a href="product.php?subid=8">Spoons</a>
                </li>
                <li>
                  <a href="product.php?subid=9">Forks</a>
                </li>
                <li>
                  <a href="product.php?subid=10">Tawa</a>
                </li>
                <li>
                  <a href="product.php?subid=11">Pans</a>
                </li>
                <li>
                  <a href="product.php?subid=12">Kadhai</a>
                </li>
                <li>
                  <a href="product.php?subid=13">Refrigerator</a>
                </li>
              </ul>
            </div>
          <div class="clearfix"></div>
        </div>
        <!-- //footer categories -->
        <!-- quick links -->
        <div class="col-sm-5 address-right">
          <div class="col-xs-6 footer-grids">
            <h3>Quick Links</h3>
            <ul>
              <li>
                <a href="about.php">About Us</a>
              </li>
              <li>
                <a href="contact.php">Contact Us</a>
              </li>
              <li>
                <a href="faqs.php">Faqs</a>
              </li>
              <li>
                <a href="terms.php">Terms of use</a>
              </li>
              <li>
                <a href="privacy.php">Privacy Policy</a>
              </li>
              <li>
                <a href="return.php">Refund & Return Policy</a>
              </li>
            </ul>
          </div>
          <div class="col-xs-6 footer-grids">
            <h3>Get in Touch</h3>
            <ul>
              <li>
                <i class="fa fa-map-marker"></i> 3 Garden Villa, India.</li>
              <li>
                <i class="fa fa-mobile"></i> 820 008 3178  </li>
              <li>
                <i class="fa fa-phone"></i> +71 642 62464 </li>
              <li>
                <i class="fa fa-envelope-o"></i>
                <a href="mailto:example@mail.com"> kitchenworld@info.in</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- //quick links -->
        <!-- social icons -->
        <div class="col-sm-2 footer-grids  w3l-socialmk">
          <h3>Follow Us on</h3>
          <div class="social">
            <ul>
              <li>
                <a class="icon fb" href="https://www.facebook.com/KitchenWorld-102766457980300/?modal=admin_todo_tour&ref=admin_to_do_step_controller">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li>
                <a class="icon tw" href="https://twitter.com/kitchenWorld11">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li>
                <a class="icon gp" href="#">
                  <i class="fa fa-google-plus"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- //social icons -->
        <div class="clearfix"></div>
      </div>
      <!-- //footer third section -->
      <!-- footer fourth section (text) -->
      <div class="agile-sometext">
        <!-- payment -->
        <div class="sub-some child-momu">
          <h5>Payment Method</h5>
          <ul>
           
            <li>
              <img src="images/pay8.png" alt="">
            </li>
          </ul>
        </div>
        <!-- //payment -->
      </div>
      <!-- //footer fourth section (text) -->
    </div>
  </footer>
  <div class="copy-right">

  </div>

<script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/imagezoom.js"></script>
<!-- popup modal (for signin & signup)-->
<script src="js/jquery.magnific-popup.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });
  });
</script>

<!-- price range (top products) -->
<script src="js/jquery-ui.js"></script>
<script>
  //<![CDATA[
  $(window).load(function () {
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 9000,
      values: [50, 6000],
      slide: function (event, ui) {
        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
      }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

  }); //]]>
</script>
<!-- //price range (top products) -->
<!-- flexisel (for special offers) -->
<script src="js/jquery.flexisel.js"></script>
<script>
  $(window).load(function () {
    $("#flexiselDemo1").flexisel({
      visibleItems: 3,
      animationSpeed: 1000,
      autoPlay: true,
      autoPlaySpeed: 3000,
      pauseOnHover: true,
      enableResponsiveBreakpoints: true,
      responsiveBreakpoints: {
        portrait: {
          changePoint: 480,
          visibleItems: 1
        },
        landscape: {
          changePoint: 640,
          visibleItems: 2
        },
        tablet: {
          changePoint: 768,
          visibleItems: 2
        }
      }
    });

  });
</script>
<!-- //flexisel (for special offers) -->
<!-- password-script -->
<script>
   
  function validatePassword() {
    var pass2 = document.getElementById("password2").value;
    var pass1 = document.getElementById("password1").value;
    if (pass1 != pass2)
      document.getElementById("password2").setCustomValidity("Passwords Don't Match");
    else
      document.getElementById("password2").setCustomValidity('');
    //empty string means no validation error
  }
</script>
<!-- //password-script -->
<!-- smoothscroll -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->
<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
  jQuery(document).ready(function ($) {
    $(".scroll").click(function (event) {
      event.preventDefault();

      $('html,body').animate({
        scrollTop: $(this.hash).offset().top
      }, 1000);
    });
  });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
  $(document).ready(function () {
    /*
    var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear'
    };
    */
    $().UItoTop({
      easingType: 'easeOutQuart'
    });
  });
</script>

<!-- easy-responsive-tabs -->
	<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
	<script src="js/easyResponsiveTabs.js"></script>

	<script>
		$(document).ready(function () {
			//Horizontal Tab
			$('#parentHorizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				tabidentify: 'hor_1', // The tab groups identifier
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#nested-tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
		});
	</script>
	<!-- //easy-responsive-tabs -->


<!-- //smooth-scrolling-of-move-up -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->

<!-- js-files -->





</body>
</html>
