<?php
			session_start();
			if(empty($_SESSION['check'])){
				$_SESSION['check']= 0;
			}?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8"/>
		<title>Tutor System | Home </title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/modal.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="js/jquery.min.js"></script>
		<!---script---->
		<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" />
		<script src="js/jquery.bxslider.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.bxslider').bxSlider({
						 auto: true,
 						 autoControls: true,
						 minSlides: 4,
						 maxSlides: 4,
						 slideWidth:450,
						 slideMargin: 10
					});
				});
			</script>
		<!---//script---->
		<!---smoth-scrlling---->
			<script type="text/javascript">
				$(document).ready(function(){
									$('a[href^="#"]').on('click',function (e) {
									    e.preventDefault();
									    var target = this.hash,
									    $target = $(target);
									    $('html, body').stop().animate({
									        'scrollTop': $target.offset().top
									    }, 1000, 'swing', function () {
									        window.location.hash = target;
									    });
									});
								});
				</script>
		<!---//smoth-scrlling---->
		<!----start-top-nav-script---->
		<script type="text/javascript" src="js/flexy-menu.js"></script>
		<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
		<!----//End-top-nav-script---->
		<!---webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---webfonts---->
		<!--start slider -->
	    <link rel="stylesheet" href="css/fwslider.css" media="all">
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/fwslider.js"></script>
		<!--end slider -->
		<!---calender-style---->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<!---//calender-style---->
	</head>
	<body>
			<?php   include('nav.php') ?>
						<script src="js/modernizr.custom.js"></script>
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
		<!----start-images-slider---->
		<div class="images-slider">
			<!-- start slider -->
		    <div id="fwslider">
		        <div class="slider_container">
		            <div class="slide"> 
		                <!-- Slide image -->
		                    <img src="images/slider-bg.jpg" alt=""/>
		                <!-- /Slide image -->
		                <!-- Texts container -->
		                <div class="slide_content">
		                    <div class="slide_content_wrap">
		                        <!-- Text title -->
		                        <h4 class="title">Tutor System</h4>
		                        <!-- /Text title -->
		                        <!-- Text description -->
		                        <p class="description">FIND YOUR TUTORS !</p>
		                        <!-- /Text description -->
		                       <!-- <div class="slide-btns description">
		                        	<ul>
		                        		<li><a class="mapbtn" href="#">Show on the map </a></li>
		                        		<li><a class="minfo" href="#">More info </a></li>
		                        		<div class="clear"> </div>
		                        	</ul>
		                        </div>-->
		                    </div>
		                </div>
		                 <!-- /Texts container -->
		            </div>
		            <!-- /Duplicate to create more slides -->
		            <!--/slide -->
		        </div>

		    </div>
		    <!--/slider -->
		</div>
		<!----start-find-place---->
				<div class="find-place dfind-place">
					<div class="wrap">
						<div class="p-h">
							<span>ค้นหาวิชาที่ต้องการสอน</span>
							<label></label>
						</div>
						<!---strat-date-piker---->
						  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
						  <script>
						  $(function() {
						    $( "#datepicker" ).datepicker();
						  });
						  </script>
						<!---/End-date-piker---->
						<div class="p-ww">
							<form method="GET" action="course.php">
								<span> วิชาเรียน</span>
								<input class="dest" name="course" type="text" value="">
								<input type="submit" value="ค้นหา" />
							</form>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
		<div class="holiday-types">
				<div class="wrap">
					<div class="holiday-type-head">
						<h3>หมวดหมู่วิชา</h3>
						<span>เลือกสอนในวิชาที่ท่านต้องการ !</span>
					</div>
					<div class="holiday-type-grids">
						<div class="holiday-type-grid" onclick="location.href='course.php?course=คณิต';">
							<span class="icon1"> </span>
							<a href="course.php?course=คณิต">คณิตศาสตร์</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='course.php?course=ไทย';">
							<span class="icon2"> </span>
							<a href="course.php?course=ไทย">ภาษาไทย</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='course.php?course=สังคม';">
							<span class="icon3"> </span>
							<a href="course.php?course=สังคม">สังคมวิทยา</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='course.php?course=วิท';">
							<span class="icon4"> </span>
							<a href="course.php?course=วิท">วิทยาศาสตร์</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='course.php?course=อังกฤษ';">
							<span class="icon5"> </span>
							<a href="course.php?course=อังกฤษ">ภาษาอังกฤษ</a>
						</div>
						<div class="holiday-type-grid" onclick="location.href='course.php?course=ความถนัดทั่วไป';">
							<span class="icon6"> </span>
							<a href="course.php?course=ความถนัดทั่วไป">ความถนัดทั่วไป</a>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				</div>

		<!----//End-clients---->
		<!----start-footer---->
		<div class="footer">
			<div class="wrap">
			<div class="footer-grids">

				<div class="footer-grid address">
					<h3 >OO Project</h3>

				</div>
				<div class="clear"> </div>
			</div>
			</div>
		</div>
	

<!-- The Modal -->



		<!---//End-subfooter---->
		<!----//End-wrap---->
	</body>
</html>

