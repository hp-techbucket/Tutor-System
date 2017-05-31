 <?php	
 session_start();
			if(empty($_SESSION['check'])){
				$_SESSION['check']= 0;
			}
$uri = "mongodb://localhost:27017/oo";
$m = new MongoClient($uri);
$db = $m->selectDB("oo");
$coll = $db->course;
$signup = array("id" => (string)rand(),
"student_author" => $_SESSION['username'],
"subject" => $_POST['subject'],
	"level" => $_POST['level'],
	"location" => $_POST['location'],
	"rate" => $_POST['rate'],
	"description" => $_POST['description'],
	"status" => $_POST['status']);
$coll->insert($signup); 
$url = parse_url($_SERVER['HTTP_REFERER']);
$trimmedHeader = $url['path'];
header('Location: course-finish.php');
 ?>