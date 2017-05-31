 <?php	
 session_start();
			if(empty($_SESSION['check'])){
				$_SESSION['check']= 0;
			}
$uri = "mongodb://localhost:27017/oo";
$m = new MongoClient($uri);
$db = $m->selectDB("oo");
$coll = $db->course;
	$signup = array("id" => $_GET['id'],
"student_author" => $_SESSION['username'],
"subject" => $_GET['subject'],
	"level" => $_GET['level'],
	"location" => $_GET['location'],
	"rate" => $_GET['rate'],
	"description" => $_GET['description'],
	"status" : "free");
$coll->update(array("id" => $_GET['id']),$signup);
$url = parse_url($_SERVER['HTTP_REFERER']);
$trimmedHeader = $url['path'];
header('Location: course.php');
 ?>