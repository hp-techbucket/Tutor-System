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
					<style style="text/css">
@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);
.button1 {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #000000;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  /*height: 320px;*/
  margin: auto;
  max-width: 1024px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
  border-bottom: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}

</style>
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
				<!--- //End-top-nav---->
				<div class="clear"> </div>
		<!---start-destinatiuons---->
		<div class="destinations">
			<div class="destination-head">
				<div class="wrap">
					<h3>รายชื่อวิชา</h3>
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
				<!----//End-find-place---->
			</div>
			<div class="destination-places">
				<div class="wrap">
					<div class="destination-places-head">
						<h3>ค้นหาวิชาที่ต้องการสอน</h3>
					</div>
<?php 			      
$uri = "mongodb://localhost:27017/oo";
$m = new MongoClient($uri);
$db = $m->selectDB("oo");
$coll = $db->course;
if(!empty(!$_GET)){
$cursor = $coll->find(array('status' => 'free')); ?>
<div class="table-title">
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-center">ผู้ประกาศ</th>
<th class="text-center">ชื่อวิชา</th>
<th class="text-center">ระดับชั้น</th>
<th class="text-center">ที่อยู่</th>
<th class="text-center">ราคา</th>
<th class="text-center">รายละเอียด</th>
</tr>
</thead>

<?php
foreach ($cursor as $doc) {
$rname = array('id'=> $doc['id'],'student_author'=> $doc['student_author'],'subject'=> $doc['subject'],'level' => $doc['level'],'location' => $doc['location'],'description' => $doc['description'],'status' => $doc['status'],'rate' => $doc['rate']); 
?>
<tbody class="table-hover">
<tr>
<td class="text-center"><?php echo $rname['student_author']; ?></td>
<td class="text-center"><?php echo $rname['subject']; ?></td>
<td class="text-center"><?php echo $rname['level']; ?></td>
<td class="text-center"><?php echo $rname['location']; ?></td>
<td class="text-center"><?php echo $rname['rate']; ?> บาท</td>
<td class="text-center"><a href="detail.php?id=<?php echo $rname['id']; ?>" class="button1">รายละเอียด</a></td>

</tr>

</tbody>
<?php }
}else{?>
</table>
  <?php 	
$regex = new MongoRegex('/'.$_GET['course'].'/i');  
$cursor = $coll->find(array( '$or' =>array(array('subject' => $regex),array('location' => $regex),array('level' => $regex),array('rate' => $regex)))); ?>
<div class="table-title">
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-center">ผู้ประกาศ</th>
<th class="text-center">ชื่อวิชา</th>
<th class="text-center">ระดับชั้น</th>
<th class="text-center">ที่อยู่</th>
<th class="text-center">ราคา</th>
<th class="text-center">รายละเอียด</th>
</tr>
</thead>

<?php
foreach ($cursor as $doc) {
$rname = array('id'=> $doc['id'],'student_author'=> $doc['student_author'],'subject'=> $doc['subject'],'level' => $doc['level'],'location' => $doc['location'],'description' => $doc['description'],'status' => $doc['status'],'rate' => $doc['rate']); 
?>
<tbody class="table-hover" id="gg">
<tr id="gg">
<td class="text-center"><?php echo $rname['student_author']; ?></td>
<td class="text-center"><?php echo $rname['subject']; ?></td>
<td class="text-center"><?php echo $rname['level']; ?></td>
<td class="text-center"><?php echo $rname['location']; ?></td>
<td class="text-center"><?php echo $rname['rate']; ?> บาท</td>
<td class="text-center"><a href="detail.php?id=<?php echo $rname['id']; ?>" class="button1">รายละเอียด</a></td>

</tr>

</tbody>
<?php }
}?>
</table>

					

				</div>
			</div>
			<!---start-destinations-pagenation---->
				<div class="destination-pagenate">
					<div class="wrap">
						<ul>
							<li><a class="d-next" href="#" id="load">ดูเพิ่มเติม</a></li>
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
				
				<p class="copy-right">OO Project</a></p>
				
			</div>
		</div>
		<!---//End-subfooter---->
		<!----//End-wrap---->
		<script>
$(function(){
    $("#gg").slice(0, 10).show(); 
    $("#load").click(function(e){ 
        e.preventDefault();
        $("#gg:hidden").slice(0, 10).show(); 
        if($("#gg:hidden").length == 0){
            alert("แสดงจำนวนวิชาทั้งหมดแล้ว"); 
        }
    });
});
		</script>
	</body>
</html>

