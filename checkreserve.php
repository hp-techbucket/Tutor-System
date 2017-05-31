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
			
			$uri = "mongodb://localhost:27017/oo";
			$m = new MongoClient($uri);
			$db = $m->selectDB("oo");
			$coll = $db->reserve;
$signup = array("id" => $_GET["id"],
"reserver" => $_SESSION['username'],
"student_author" =>$_GET["username"] );
$coll->insert($signup); 

$coll4 = $db->history;
$data4 = array("time" => $date,
"username" => $_SESSION['username'],
"log" => 'คุณได้ทำการจองวิชารหัส '.$_GET["id"].' ');
$coll4->insert($data4); 

$url = parse_url($_SERVER['HTTP_REFERER']);
$trimmedHeader = $url['path'];
header('Location: reserve.php');
 ?>