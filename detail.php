<?php
			session_start();
			if(empty($_SESSION['check'])){
				$_SESSION['check']= 0;
			}?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Tutor System | รายละเอียด</title>
		<meta charset="utf-8"/>
		<style>
		#outer {
  width: 100%;
  text-align: center;
}</style>
		<link href="css/modal.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
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
					<style style="text/css">
@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

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
  width: 600px;
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

.button2 {
    background-color: #ff0066;
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
body{
  font:10pt Verdana;
  background: #EAEAEA;
  color: #777;
}

.wrapper{
  width:900px;
  margin: 50px auto;
}

.folderTab h3{
  color:#fff;text-shadow:1px 1px 3px rgba(0,0,0,0.5);font:13pt Arial;font-weight:700;line-height:2em;letter-spacing:1.5px;text-align:left;margin:0;padding:3px 0 3px 20px;float:left
}

.folderTab{background:#4B7895;text-shadow:1px 1px 2px rgba(0,0,0,0.8);text-align:center;color:#fff;border-top-left-radius:4px;border-top-right-radius:4px;border:1px solid #4B7895;overflow:hidden}

.borderBox{border:1px solid #B6B6AB;border-top:none;border-bottom-left-radius:4px;border-bottom-right-radius:4px;background:#fff;overflow:hidden;margin:0;padding:10px}

.leftbar {
float: left;
width: 220px;
margin-right: 10px;
}

.folderTab.sub {
background: #5196A3;
border: 1px solid #5196A3;
}

.folderTab.sub h3 {
text-align: center;
float: none;
padding: 3px;
}

.options{
list-style-type: none;
margin: 0 0 10px 0;
padding: 0;
}

.options li{
 margin: 0;
 padding: 0 0 5px 5px; 
}

a{
  color: #22697F;
  text-decoration: none
}

a:hover{
  text-decoration:underline
}

.separator{
  border-bottom:1px solid #EAEAEA;
  margin: 5px 0 10px 0;
}

.tabler table{
  margin: 0px 0 10px 0 ;
}

.tabler{
  margin: 0 0 20px 0;
}

.tabler h3{
  font: 12pt Arial;
  font-weight:700;
  border-bottom: 1px solid #EAEAEA;
  color: #22697F;
  margin: 0 0 5px 0;
  padding: 5px;
}

.tabler td{
  padding: 3px 20px 3px 3px;
}

.tabler table > tbody > tr > td:first-child{font-weight:bold}

.specs{
  list-style-type: none;
  margin: 0;
  padding: 0 0 0 10px;
}

.specs li{
  padding: 0 0 5px 0;
}

.grayLG{background:linear-gradient(to bottom,#f7f8fa,#e7e9ec);background:-webkit-linear-gradient(to bottom,#f7f8fa,#e7e9ec);background:-moz-linear-gradient(to bottom,#f7f8fa,#e7e9ec);background:-o-linear-gradient(to bottom,#f7f8fa,#e7e9ec)}

a.submit, a.edit{color:#555;text-decoration:none;font-style:normal;padding:5px;border:1px solid #B6B6AB;border-radius:3px;margin:0 0 0 5px}
a.submit:hover, a.edit:hover{background:#f7f8fa}

a.edit{padding-left:10px;padding-right:10px}

.fright{
  float: right;
}

.fleft{
  float: left;
}
</style>
	</head>
	<body>
		<!----start-wrap---->
			<!----start-top-header----->
			<?php   include('nav.php');
			$uri = "mongodb://localhost:27017/oo";
			$m = new MongoClient($uri);
			$db = $m->selectDB("oo");
			$coll = $db->course;
			?>
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
		<!---start-Blog---->
		<div class="blog">
			<div class="destination-head">
				<div class="wrap">
					<h3>รายละเอียด</h3>
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
						<?php 
$cursor = $coll->find(array('id' => $_GET["id"]));
foreach ($cursor as $doc) {
$rname = array('id'=> $doc['id'],'student_author'=> $doc['student_author'],'subject'=> $doc['subject'],'level' => $doc['level'],'location' => $doc['location'],'description' => $doc['description'],'status' => $doc['status'],'rate' => $doc['rate']) ;
?>
			<div class="wrapper">
  <div class="folderTab">
    <h3>ข้อมูลรายวิชา</h3>
  </div>
  <div class="borderBox">
    <div class="tabler">
      <?php if($rname['student_author']==$_SESSION['username']){ ?><a href="detaill.php?id=<?php echo $rname['id']; ?>" class="edit grayLG fright">แก้ไข</a><?php } ?>
    <table>
      <tbody>

      <tr>
        <td>
         รหัสวิชา
        </td>
        <td>
        <?php echo $rname['id']; ?>
        </td>
      </tr>
	      <tr>
        <td>
        ผู้ประกาศ
        </td>
        <td>
         <?php echo $rname['student_author']; ?>
        </td>
      </tr>
	      <tr>
        <td>
    ที่อยู่
        </td>
        <td>
          <?php echo $rname['subject']; ?>
        </td>
      </tr>
	      <tr>
        <td>
      ระดับชั้น
        </td>
        <td>
          <?php echo $rname['level']; ?>
        </td>
      </tr>
	      <tr>
        <td>
     ที่อยู่
        </td>
        <td>
          <?php echo $rname['location']; ?>
        </td>
      </tr>
	      <tr>
        <td>
       ราคา
        </td>
        <td>
        <?php echo $rname['rate']; ?>  บาท
        </td>
      </tr>
	  	      <tr>
        <td>
รายละเอียด
        </td>
        <td>
           <?php echo $rname['description']; ?>
        </td>
      </tr>
	  <?php if($_SESSION["check"]==1 and $_SESSION["role"]=="tutor"){?>
	  	  	      <tr>

        <td>
<a href="checkreserve.php?id=<?php echo $rname['id']; ?>&&username=<?php echo $rname['student_author']; ?>" class="button1">จองเลย</a>
        </td>
      </tr>
	 
	  <?php }}?>
      </tbody>
    </table>
    </div> 
  </div>
</div>
<div class="wrapper">
  <div class="folderTab">
    <h3>ข้อมูลเรียน</h3>
  </div>
  <div class="borderBox">
    <div class="tabler">
    <table>
      <tbody>
	  	  			<?php 
$collusers = $db->users;
$cursor1 = $collusers->find(array('username' => $rname['student_author']));
foreach ($cursor1 as $doc) {
$users = array('firstname'=> $doc['firstname'],'lastname'=> $doc['lastname'],'gender'=> $doc['gender'],'email'=> $doc['email'],'mobile'=> $doc['mobile'],'stdid'=> $doc['stdid'],'facebook_contact'=> $doc['facebook_contact'],'study_plan'=> $doc['study_plan']) ;
?>
          <tr>
        <td>
         ชื่อ
        </td>
        <td>
          <?php echo $users['firstname'].' '.$users['lastname']; ?>
        </td>
      </tr>
      <tr>
        <td>
        เพศ
        </td>
        <td>
          <?php echo $users['gender']; ?>
        </td>
      </tr>
      <tr>
        <td>
         อีเมลล์
        </td>
        <td>
         <?php echo $users['email']; ?>
        </td>
      </tr>
	      <tr>
        <td>
        เบอร์โทรศัพท์มือถือ
        </td>
        <td>
          <?php echo $users['mobile']; ?>
        </td>
      </tr>
	      <tr>
        <td>
    บัญชีไลน์
        </td>
        <td>
          <?php echo $users['stdid']; ?>
        </td>
      </tr>
	      <tr>
        <td>
      บัญชีเฟสบุ๊ค
        </td>
        <td>
           <?php echo $users['facebook_contact']; ?>
        </td>
      </tr>
	  	      <tr>
        <td>
แผนการเรียน
        </td>
        <td>
           <?php echo $users['study_plan']; ?>
        </td>
      </tr>
	  	  			<?php 
}
?>
      </tbody>
    </table>
    </div> 
  </div>
</div>	
<br>
<br>
<br>

				</div>
			</div>
		</div>
		<div class="subfooter">
			<div class="wrap">

				<p class="copy-right">OO Project</a></p>
			</div>
		</div>
		<!---//End-subfooter---->
		<!----//End-wrap---->
	</body>
</html>

