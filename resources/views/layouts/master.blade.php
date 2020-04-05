<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Christopher Wayo Ayabam Foundation|Home</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico">
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/thumbs.css">
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <!-- Optional theme -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- toastr-->
					<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

					<!-- header toastr link(444) and sweetalert link(445)-->
					    <script src ="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js')}}"></script>




					<!--toastr end -->
          <link rel="stylesheet" href="form.css" >
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/sForm.js"></script>
	<script src="js/jquery.ui.totop.js"></script>
	<script src="js/jquery.equalheights.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.iosslider.min.js"></script>



          <script src="form.js"></script>
	<script>
	$(document).ready(function(){
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>

	</head>
	<body class="page1" id="top" style="background-color:#D7AD73">


<!--==============================header Starts=================================-->

<div style="background-color:#FFFFFF; ">
<header>
			@yield('nav')
		</header>
  </div>
<!--==============================header Ends=================================-->

<!--==============================Main contents starts=================================-->
				<div>
			@yield('page_contents')
			</div>
<!--==============================Main contents ends=================================-->

			<div class="hor"></div>

      <!-- Footer -->
      <footer style="background-color:#FFFFFF;">
              	@yield('footer')
              </footer>
<!--==============================footer=================================-->

		<script src="js/jquery.hoverdir.js"></script>
		<script>
		$(document).ready(function() {
		 $('.iosSlider').iosSlider({
			desktopClickDrag: true,
			snapToChildren: true,
			navSlideSelector: '.sliderContainer .slideSelectors .item',
			onSlideComplete: slideComplete,
			onSliderLoaded: sliderLoaded,
			onSlideChange: slideChange,
			scrollbar: false,
			autoSlide: true,
			autoSlideTimer: 3300,
			infiniteSlider: true
		 });
		});
		function slideChange(args) {
		 $('.sliderContainer .slideSelectors .item').removeClass('selected');
		 $('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
		}
		function slideComplete(args) {
		 if(!args.slideChanged) return false;
		 $(args.sliderObject).find('.text1, .text2').attr('style', '');
		 $(args.currentSlideObject).find('.text1').animate({
			right: '100px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 $(args.currentSlideObject).find('.text2').delay(200).animate({
			right: '70px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		}
		function sliderLoaded(args) {
		 $(args.sliderObject).find('.text1, .text2').attr('style', '');
		 $(args.currentSlideObject).find('.text1').animate({
			right: '100px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 $(args.currentSlideObject).find('.text2').delay(200).animate({
			right: '70px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 slideChange(args);
		}
		$(function() {
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
			});
		</script>





		<!-- sweetalert function -->

<script>
    $(document).on("click", "#delete", function(e){
      e.preventDefault();
      var link =$(this).attr("href");
        swal({
          title:"Are you sure you want to delete?",
          text: "Once Delete, this will be permanently Deleted",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete)=>{
          if (willDelete){
              window.location.href = link;
            }
            else{
              swal("Safe Data!");
            }
          });
        });
</script>



<!-- header toastr function -->
<script>
@if(Session::has('messege'))
var type="{{Session::get('alert-type','info')}}"
switch(type){
case 'info':
toastr.info("{{Session::get('messege')}}");
break;
case 'success':
toastr.success("{{Session::get('messege')}}");
break;
case 'warning':
toastr.warning("{{Session::get('messege')}}");
break;
case 'error':
toastr.error("{{Session::get('messege')}}");
break;
}
@endif
</script>

			</body>
</html>
