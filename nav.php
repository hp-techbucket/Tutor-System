<?php 
session_start();
require_once __DIR__ . '/Facebook/autoload.php';
$fb = new \Facebook\Facebook([
  'app_id' => '548799701976617',
  'app_secret' => 'cb4a3edf7d2bd5272d766d925271486e',
  'default_graph_version' => 'v2.8',
]);
   $permissions = []; // optional
   $helper = $fb->getRedirectLoginHelper();
   $accessToken = $helper->getAccessToken();
   
if (isset($accessToken)) {
	
 		$url = "https://graph.facebook.com/v2.6/me?fields=id,name,gender,email,picture,first_name,last_name,cover&access_token={$accessToken}";
		$headers = array("Content-type: application/json");
		
			 
		 $ch = curl_init();
		 curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		 curl_setopt($ch, CURLOPT_URL, $url);
	         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);  
		 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
		 curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');  
		 curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');  
		 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
		 curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/20070309 Firefox/2.0.0.3"); 
		 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		   
		 $st=curl_exec($ch); 
		 $result=json_decode($st,TRUE);
if((string)$_GET['role']=="login"){
	header('Location: checklog.php?username='.$result['name'].'&&password='.$result['id'].'');	
}		 
else{
$uri = "mongodb://localhost:27017/oo";
$m = new MongoClient($uri);
$db = $m->selectDB("oo");
$coll = $db->users;	
$signup = array("username" => $result['name'],
    "password" => $result['id'],
	"firstname" => $result['first_name'],
	"lastname" => $result['last_name'],
	"gender" => $result['gender'],
	"email" => $result['email'],
	"mobile" => "",
	"stdid" => "",
	"facebook_contact" => "www.facebook.com/".$result['name'],
	"education" => "",
	"study_plan" => "",
	"interest" => "",
	"teaching_style" => "",
	"role" => $_GET['role']);
$coll->insert($signup); 
$url = parse_url($_SERVER['HTTP_REFERER']);
$trimmedHeader = $url['path'];
header('Location:'.$trimmedHeader);
}
		// echo "My name: ".$result['first_name'];
		 //echo "My name: ".$result['gender'];
		 //echo "My name: ".$result['last_name'];
		
} else {
	$loginUrl1 = $helper->getLoginUrl('index.php?role=student', $permissions);
	$loginUrl2 = $helper->getLoginUrl('index.php?role=tutor', $permissions);
	$loginUrl3 = $helper->getLoginUrl('index.php?role=login', $permissions);
}
?>
<style>
.buttonFB {
    background-color: #3b5998;
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

input[type="text"] {
    background: #FFF;
    padding: 0.7em;
    font-size: 0.875em;
    outline: none;
    border-radius: 0.2em;
    border: none;
	box-shadow: 0 0 3px; margin: 10px
    font-family: 'Open Sans', sans-serif;
    width: 71%;

	}
	input[type="password"] {
    background: #FFF;
    padding: 0.7em;
    font-size: 0.875em;
    outline: none;
    border-radius: 0.2em;
    border: none;
	box-shadow: 0 0 3px; margin: 10px
    font-family: 'Open Sans', sans-serif;
    width: 71%;
}
select {
    background: #FFF;
    padding: 0.7em;
    font-size: 0.875em;
    outline: none;
    border-radius: 0.2em;
    border: none;
	box-shadow: 0 0 3px; margin: 10px
    font-family: 'Open Sans', sans-serif;
    width: 71%;
}
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

gg {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<?php if($_SESSION['check'] == 0){ ?>

			<div class="top-header" id="header">
				<div class="wrap">
				<div class="top-header-left">
					<?php if($_SESSION['check'] == 0){ ?><ul>
						<li><a href="#" id="myLog"><span> </span> เข้าสู่ระบบ</a></li>
						<li><p><span> </span>ยังไม่เป็นสมาชิก ? </p>&nbsp;<a class="reg1" href="#" id="myReg1"> สมัครสมาชิกเป็นติวเตอร์กับเรา</a>|<a class="reg2" href="#" id="myReg2"> สมัครสมาชิกเป็นนักเรียน</a></li>
						<!----<li><p class="contact-info">Call Us Now :815-123-4567</p></li>----->
						<div class="clear"> </div>
					</ul>
					<?php } ?>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
			<?php } ?>
			<!----//End-top-header----->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<!--- start-logo---->
				<div class="logo">
					<a href="index.php"><title="Tutor System" />Tutor System</a>
				</div>
				<!--- //End-logo---->
				<!--- start-top-nav---->
				<div class="top-nav">
						<ul class="flexy-menu thick orange">
							<li><a href="index.php">หน้าหลัก</a></li>
							<!---<li><a href="">Destinations</a>
								<ul>
								<li><a href="destinations.html">Dropdown item</a></li>
								<li><a href="destinations.html">Dropdown item</a></li>
								<li><a href="destinations.html">Dropdown item</a>
									<ul>
										<li><a href="destinations.html">Dropdown item</a></li>
										<li><a href="destinations.html">Dropdown item</a>
											<ul>
												<li><a href="destinations.html">Dropdown item</a></li>
												<li><a href="destinations.html">Dropdown item</a></li>
												<li><a href="destinations.html">Dropdown item</a></li>
												<li><a href="destinations.html">Dropdown item</a></li>
											</ul>
										</li>
										<li><a href="#">Dropdown item</a></li>
										<li><a href="#">Dropdown item</a></li>
									</ul>
								</li>
								<li><a href="#">Dropdown item</a></li>
								<li><a href="#">Dropdown item</a></li>
							</ul>
							</li>---->
							<li><a href="course.php">ค้นหา</a></li>
							<?php if($_SESSION['check'] == 1){ 
							 if($_SESSION['role'] == 'student'){ ?>
							<li><a href="announcement.php">ประกาศ</a></li>
							<?php } ?>
							<li><a href="">ข้อมูลส่วนตัว</a>
								<ul>
								<li><a href="about.php"><?php echo $_SESSION['username'];?></a></li>
								<li><a href="logout.php">ออกจากระบบ</a></li>
							</ul>
							</li>
							<?php } ?>
										</div>
				<!--- //End-top-nav---->
				<div class="clear"> </div>
			</div>
							<div id="Log" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="closeLog">×</span>
      <h2>เข้าสู่ระบบ</h2>
    </div>
    <div class="modal-body">
					<h1></h1><br>
					<a href="<?php echo $loginUrl3; ?>" class="buttonFB" style="text-align:center;">เข้าสู้ระบบผ่าน Facebook</a>
				  <form action="checklog.php" method="post">
					บัญชีผู้ใช้: <input type="text" name="username" placeholder="บัญชีผู้ใช้"><br>
					รหัสผ่าน  : <input type="password" name="password" placeholder="รหัสผ่าน">
					<input type="submit" name="login" class="login loginmodal-submit" value="เข้าสู่ระบบ">
				  </form>
    </div>
  </div>

</div>
<div id="Reg1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="closeReg1">×</span>
      <h2>สมัครเป็นติวเตอร์</h2>
    </div>
    <div class="modal-body">
	<a href="<?php echo $loginUrl2; ?>" class="buttonFB" style="text-align:center;">สมัครผ่านเป็นผู้สอนผ่าน Facebook</a>
				  <form action="checksign.php" method="post">
				  <div>บัญชีผู้ใช้: 
					<input type="text" name="username" placeholder="บัญชีผู้ใช้"><br>
					</div>
					<div>รหัสผ่าน: <input type="password" name="password" placeholder="รหัสผ่าน"><br>
					</div>
					<div>ชื่อจริง: <input type="text" name="firstname" placeholder="ชื่อ"><br>
					</div>
					<div>นามสกุล: <input type="text" name="lastname" placeholder="นามสกุล"><br>
					</div>
					<div>เพศ: 
					<input type="radio" name="gender" value="ชาย"> ชาย <input type="radio" name="gender" value="หญิง"> หญิง<br>
					</div>
					<div>อีเมลล์: <input type="text" name="email" placeholder="อีเมลล์"><br>
					</div>
					<div>เบอร์โทรศัพท์มือถือ: <input type="text" name="mobile" placeholder="เบอรืโทรศัพท์มือถือ"><br>
					</div>
					<div>บัญชีไลน์: <input type="text" name="line_ID" placeholder="บัญชีไลน์"><br>
					</div>
					<div>บัญชีเฟสบุ๊ค: <input type="text" name="facebook_contact" placeholder="บัญชีเฟสบุ๊ค"><br>
					</div>
					<div>ขอบเขตวิชาที่สนใจ: <input type="text" name="interest" placeholder="ขอบเขตวิชาที่สนใจ"><br>
					</div>
					<div>การศึกษา: <input type="text" name="education" placeholder="การศึกษา"><br>
					</div>
					<div>แนวการสอน: <input type="text" name="teaching_style" placeholder="แนวการสอน"><br>
					</div>
					<input type="hidden" name="role" value="tutor">
					<input type="submit" name="signup" class="login loginmodal-submit" value="สมัครสมาชิก">
				  </form>
    </div>
  </div>


</div>

<div id="Reg2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="closeReg2">×</span>
      <h2>สมัครเป็นนักเรียน</h2>
    </div>
    <div class="modal-body">
	
					<a href="<?php echo $loginUrl1; ?>" class="buttonFB" style="text-align:center;">สมัครผ่านเป็นนักเรียนผ่าน Facebook</a>
				  <form action="checksign.php" method="post">
				  <div>บัญชีผู้ใช้: 
					<input type="text" name="username" placeholder="บัญชีผู้ใช้"><br>
					</div>
					<div>รหัสผ่าน: <input type="password" name="password" placeholder="รหัสผ่าน"><br>
					</div>
					<div>ชื่อจริง: <input type="text" name="firstname" placeholder="ชื่อ"><br>
					</div>
					<div>นามสกุล: <input type="text" name="lastname" placeholder="นามสกุล"><br>
					</div>
					<div>เพศ: 
					<input type="radio" name="gender" value="ชาย"> ชาย <input type="radio" name="gender" value="หญิง"> หญิง<br>
					</div>
					<div>อีเมลล์: <input type="text" name="email" placeholder="อีเมลล์"><br>
					</div>
					<div>เบอร์โทรศัพท์มือถือ: <input type="text" name="mobile" placeholder="เบอรืโทรศัพท์มือถือ"><br>
					</div>
					<div>บัญชีไลน์: <input type="text" name="line_ID" placeholder="บัญชีไลน์"><br>
					</div>
					<div>บัญชีเฟสบุ๊ค: <input type="text" name="facebook_contact" placeholder="บัญชีเฟสบุ๊ค"><br>
					</div>
									<div class="form-group">
  <label for="study_plan">แผนการเรียน:</label>
  <select class="form-control" id="study_plan" name="study_plan">
      <option value="" disabled selected>เลือกแผนการเรียน</option>
      <option value="โรงเรียนรัฐบาล">โรงเรียนรัฐบาล</option>
      <option value="โรงเรียนอินเตอร์">โรงเรียนอินเตอร์</option>
    </select>
</div>
					<input type="hidden" name="role" value="student">
					<input type="submit" name="signup" class="login loginmodal-submit" value="Signup">
				  </form>
    </div>
  </div>


</div>
		<script>
// Get the modal
var modal1 = document.getElementById('Log');
var modal2 = document.getElementById('Reg1');
var modal3 = document.getElementById('Reg2');
// Get the button that opens the modal
var btn1 = document.getElementById("myLog");
var btn2 = document.getElementById("myReg1");
var btn3 = document.getElementById("myReg2");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("closeLog")[0];
var span2 = document.getElementsByClassName("closeReg1")[0];
var span3 = document.getElementsByClassName("closeReg2")[0];

// When the user clicks the button, open the modal
btn1.onclick = function() {
    modal1.style.display = "block";
}
btn2.onclick = function() {
    modal2.style.display = "block";
}
btn3.onclick = function() {
    modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
	
}
span2.onclick = function() {
   modal2.style.display = "none";
}
span3.onclick = function() {
   modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
	 if (event.target == modal2) {
        modal2.style.display = "none";
    }
		 if (event.target == modal3) {
        modal3.style.display = "none";
    }
}
</script>	