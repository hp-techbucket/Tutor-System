 <?php	
 session_start();
			if(empty($_SESSION['check'])){
				$_SESSION['check']= 0;
			}
 $_month_name = array("01"=>"มกราคม",  "02"=>"กุมภาพันธ์",  "03"=>"มีนาคม",    
    "04"=>"เมษายน",  "05"=>"พฤษภาคม",  "06"=>"มิถุนายน",    
    "07"=>"กรกฎาคม",  "08"=>"สิงหาคม",  "09"=>"กันยายน",    
    "10"=>"ตุลาคม", "11"=>"พฤศจิกายน",  "12"=>"ธันวาคม"); 
 
 $vardate=date('Y-m-d');
 $yy=date('Y');
 $mm =date('m');$dd=date('d'); 
if ($dd<10){
    $dd=substr($dd,1,2);
}
  $date=$dd ." ".$_month_name[$mm]."  ".$yy+= 543;
 echo $date;			
			
			
			$uri = "mongodb://localhost:27017/oo";
			$m = new MongoClient($uri);
			$db = $m->selectDB("oo");
			$coll1= $db->course;
			$coll2 = $db->done;
			$coll3 = $db->reserve;
if($_GET['check']=='accept'){
$data = array("id" => $_GET["id"]);
$coll1->remove($data);
$data = array("id" => $_GET["id"]);
$coll3->remove($data);
$data1 = array("id" => (string)$_GET["id"],
"username" => $_GET["username"],
"status" => 'accept');
$coll2->insert($data1); 
$coll4 = $db->history;
$data4 = array("time" => $date,
"username" => $_GET["username"],
"log" => 'คุณได้รับการสอนในวิชารหัส '.$_GET["id"].' ');
$coll4->insert($data4);
}
else{
$data = array("id" => $_GET["id"]);
$coll1->remove($data);
$data = array("id" => $_GET["id"]);
$coll3->remove($data);
$data1 = array("id" => (string)$_GET["id"],
"username" => $_GET["username"],
"status" => 'reject');
$coll2->insert($data1); 
$coll4 = $db->history;
$data4 = array("time" => $date,
"username" => $_GET["username"],
"log" => 'วิชารหัส  '.$_GET["id"].' ได้รับการสอนจากผู้สอนท่านอื่นแล้ว');
$coll4->insert($data4);	
	
} 
$url = parse_url($_SERVER['HTTP_REFERER']);
$trimmedHeader = $url['path'];
header('Location: about.php');
 ?>