<?php
			session_start();
			if(empty($_SESSION['check'])){
				$_SESSION['check']= 0;
			}?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8"/>
		<title>Tutor System | announcement</title>
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
		<!---start-Criuses---->
		<div class="criuses">
			<div class="criuses-head">
				<div class="wrap">
					<h3>ประการ</h3>
				</div>
				<!---End-destinatiuons---->
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
			</div>
				<!----//End-find-place---->
				<!---start-criuse-grids----->
				<div class="criuse-main">
					<div class="wrap">
						
	<form action="checkcourse.php" method="post">
				  <div>วิชา<br>
					<input type="text" name="subject" placeholder="วิชา"><br>
					</div>
					<div>ระดับชั้น<br><input type="text" name="level" placeholder="ระดับชั้น"><br>
					</div>
					<div>ที่อยู่<br><input type="text" name="location" placeholder="ที่อยู่"><br>
					</div>
					<div>ราคา<br> <input type="text" name="rate" placeholder="ราคา"><br>
					</div>
					<div>คำอธิบาย<br><input type="text" name="description" placeholder="คำอธิบาย"><br>
					</div>
					<input type="hidden" name="status" value="free">
					<input type="submit" name="signup" class="login loginmodal-submit" value="ประกาศ">
				  </form>

					</div>
				</div>
				<!---//End-criuse-grids----->
			</div>
		</div>
		<!---start-Criuses---->
		<!----//End-footer---->
		<!---start-subfooter---->
				<div class="subfooter">
			<div class="wrap">
				
				<p class="copy-right">OO Project</a></p>
				
			</div>
		</div>
		<!---//End-subfooter---->
		<!----//End-wrap---->
	</body>
</html>

