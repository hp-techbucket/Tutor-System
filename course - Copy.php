<?php
			session_start();
			if(empty($_SESSION['check'])){
				$_SESSION['check']= 0;
			}?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8"/>
		<title>Tutor System | Course</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
				<link href="css/modal.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="js/jquery.min.js"></script>
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
		<!---calender-style---->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<!---//calender-style---->
		<!---images-hover-effects--->
		<link rel="stylesheet" href="css/zalki_hover_img.css" type="text/css" media="screen">
		<script src="js/jquery.zalki_hover_img.min-0.2.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(window).load(function(){
				$('.main_box').ZalkiHoverImg(
				);
				});
		</script>

		<!---//images-hover-effects--->
	</head>
	<body>
		<!----start-wrap---->
			<!----start-top-header----->
<?php   include('nav.php') ?>
							<!---<li><a href="destinations.html">Holidays</a></li>
							<li><a href="blog.html">Blog</a></li>
						</ul>
						<div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>---->
						<!----search-scripts---->
						<script src="js/modernizr.custom.js"></script>
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				</div>
				<!--- //End-top-nav---->
				<div class="clear"> </div>
			</div>
			<!---//End-header---->
		</div>
		<!---start-destinatiuons---->
		<div class="destinations">
			<div class="destination-head">
				<div class="wrap">
					<h3>Course</h3>
				</div>
				<!---End-destinatiuons---->
				<div class="find-place dfind-place">
					<div class="wrap">
						<div class="p-h">
							<span>FIND YOUR</span>
							<label>TUTORS</label>
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
							<form>
								<span> Course</span>
								<input class="dest" type="text" value="Course" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Distination';}">
								<span> When</span>
								<input class="date" id="datepicker" type="text" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
								<input type="submit" value="Search" />
							</form>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----//End-find-place---->
			</div>
			<div class="destination-places">
				<div class="wrap">
					<div class="destination-places-head">
						<h3>FIND YOUR COURSE</h3>
					</div>
					<div class="destination-places-grids">
						<div class="destination-places-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d7.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="destination-places-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d6.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="destination-places-grid last-d-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d2.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="destination-places-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d3.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="destination-places-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d1.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="destination-places-grid last-d-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d5.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="destination-places-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d6.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="destination-places-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d5.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="destination-places-grid last-d-grid" onclick="location.href='#';">
							<div class="dest-place-pic main_box user_style4" data-hipop="two-horizontal">
								<img src="images/d1.jpg" title="place-name" />
								<a href="#" class="popup"> </a>
								<a href="#" class="popup2"> </a>
							</div>
							<div class="dest-place-opt">
								<ul class="dest-place-opt-fea">
									<li><a class="hot" href="#"><span> </span> Hotel</a></li>
									<li><a class="plain" href="#"><span> </span> Air ticket</a></li>
									<li><a class="Breakfast" href="#"><span> </span> Break Fast</a></li>
									<div class="clear"> </div>
								</ul>
								<ul class="dest-place-opt-cast">
									<li><a class="d-place" href="#">Venice</a></li>
									<li><a class="d-price" href="#">Starting Form 250$</a></li>
									<div class="clear"> </div>
								</ul>
							</div>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
			</div>
			<!---start-destinations-pagenation---->
				<div class="destination-pagenate">
					<div class="wrap">
						<ul>
							<li><a class="d-next" href="#">LOAding More</a></li>
							<div class="clear"> </div>
						</ul>
					</div>
				</div>
			<!---//End-destinations-pagenation---->
			<!---loading-more-script--->
			<!---//loading-more-script--->
		</div>
		<!----//End-offers---->
		<!----//End-images-slider---->
		<!----//End-footer---->
		<!---start-subfooter---->
		<div class="subfooter">
			<div class="wrap">
				<ul>
					<li><a href="index.html">Home</a><span>::</span></li>
					<li><a href="destinations.html">Destinations</a><span>::</span></li>
					<li><a href="criuses.html">Criuses</a><span>::</span></li>
					<li><a href="destinations.html">Specils</a><span>::</span></li>
					<li><a href="destinations.html">Holidays</a><span>::</span></li>
					<li><a href="blog.html">Blog</a><span>::</span></li>
					<li><a href="contact.html">Contact Us</a></li>
					<div class="clear"> </div>
				</ul>
				<p class="copy-right">Template by <a href="http://w3layouts.com/">W3layouts</a></p>
				<a class="to-top" href="#header"><span> </span> </a>
			</div>
		</div>
		<!---//End-subfooter---->
		<!----//End-wrap---->
	</body>
</html>

