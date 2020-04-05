
<!DOCTYPE html>
<html>
<head>
<title>Christopher Ayobami - Family Foundation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Popular Pricing Table template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Buy Now Web Templates, Flat Web Templates, Login Buy Now Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dorsa" rel="stylesheet">
<!-- //web font -->
</head>
<body >
@include('header')
	<!--main-->
  <div class="page1" id="top" style="background-color:#D7AD73">
	<div class="main">
		<h1></h1>
		<div class="pricing-agileinfo">
			<div class="pricing-grid grid-one">
				<div class="w3ls-top">
					<h3>Basic</h3>
					<h4><span class="sup"> &#8358;2,500</span>  </h4>
				</div>
				<div class="w3ls-bottom">
					<ul class="count">

						<li>Monthly for 12 months</li>
					</ul>
					<div class="more">
						<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Donate Now</a>
					</div>
				</div>
			</div>
			<div class="pricing-grid grid-two">
				<div class="w3ls-top">
					<h3>Standard</h3>
					<h4><span class="sup">&#8358;10,000</span></h4>
				</div>
				<div class="w3ls-bottom">
					<ul class="count">

						<li>three Months interval</li>
					</ul>
					<div class="more">
						<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Donate Now</a>
					</div>
				</div>
			</div>
			<div class="pricing-grid grid-three">
				<div class="w3ls-top">
					<h3>Super</h3>
					<h4><span class="sup">&#8358;35,000</span> </h4>
				</div>
				<div class="w3ls-bottom">
					<ul class="count">
						<li>6 Months interval </li>
					</ul>
					<div class="more">
						<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Donate Now</a>					</div>
				</div>
			</div>
			<div class="zb pricing-grid grid-four">
				<div class="w3ls-top">
					<h3>Ultimate</h3>
					<h4><span class="sup">&#8358;100,000</span> </h4>
				</div>
				<div class="w3ls-bottom">
					<ul class="count">
												<li>Annually</li>
					</ul>
					<div class="more">
						<a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog">Donate Now</a>					</div>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
		<!-- pop-up-grid -->
		 <div id="small-dialog" class="mfp-hide">
			<div class="pop_up">
				<div class="payment-online-form-left">
					<form action="#" method="post">
						<h4>Account Info</h4>
						<ul>
							<li><input class="text-box-dark" placeholder="First Name" type="text" required></li>
							<li><input class="text-box-dark" placeholder="Last Name" type="text" required></li>
						</ul>
						<ul>
							<li><input class="text-box-dark" placeholder="Email" type="text" required></li>
							<li><input class="text-box-dark" placeholder="Company Name" type="text" required></li>
						</ul>
						<ul>
							<li><input class="text-box-dark" placeholder="Phone Number" type="text" pattern = "[0-9]{11}" title ="number is less than 11 digits or invalid character(s)" required></li>
							<li><input class="text-box-dark" placeholder="Address" type="text" required></li>
						</ul>
						<div class="clear"> </div>
						<div class="payment-type">
							<h4>Payment Method</h4>
							<li><span class="col_checkbox">
									<input type="radio" id="f-option" name="selector">
									<label for="f-option"><div class="visa"> </div></label>
									<div class="check"></div>
								</span>
							</li>
							<li>
								<span class="col_checkbox">
									<input type="radio" id="t-option" name="selector">
									 <label for="t-option"><div class="paypal"> </div></label>
									<div class="check"><div class="inside"></div></div>
								</span>
							</li>
						</div>
						<div class="clear"> </div>
						<ul>
							<li><input class="text-box-dark" Number" type="text" pattern = "[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}" title ="number must not be less than 16 digits e.g XXXX-XXXX-XXXX-XXXX" placeholder ="XXXX-XXXX-XXXX-XXXX" maxlength="19" required></li>
							<li><input class="text-box-dark" placeholder="Name on card" type="text" required></li>
						</ul>
						<ul>
							<li><input class="text-box-light hasDatepicker" placeholder="Expiration Date" type="text" required></li>
							<li><input  class="text-box-dark" placeholder="Security Code" type="text" required></li>
						</ul>
						<ul class="payment-sendbtns">
							<li><input type="reset" value="Reset"></li>
							<li><input type="submit" value="Process order"></li>
						</ul>
						<div class="clear"> </div>
					</form>
				</div>
			</div>
		</div>
		<!-- //pop-up-grid -->
	</div>
	<!-- //main -->
	<!--copyright-->

</div>

	@include('layouts.footer')


	<!-- popup.js -->
	<script src="web/js/jquery.min.js"></script>
	<script src="web/js/jquery.magnific-popup.js" type="text/javascript"></script>
	 <script>
		$(document).ready(function() {
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
	<!-- //popup.js -->
</body>
</html>
