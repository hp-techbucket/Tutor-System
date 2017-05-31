 <?php	
$uri = "mongodb://localhost:27017/oo";
$m = new MongoClient($uri);
$db = $m->selectDB("oo");
$coll = $db->users;	
$signup = array("username" => $_POST['username'],
    "password" => $_POST['password'],
	"firstname" => $_POST['firstname'],
	"lastname" => $_POST['lastname'],
	"gender" => $_POST['gender'],
	"email" => $_POST['email'],
	"mobile" => $_POST['mobile'],
	"stdid" => $_POST['line_ID'],
	"facebook_contact" => $_POST['facebook_contact'],
	"education" => $_POST['education'],
	"study_plan" => $_POST['study_plan'],
	"interest" => $_POST['interest'],
	"teaching_style" => $_POST['teaching_style'],
	"role" => $_POST['role']);
$coll->insert($signup); 
$url = parse_url($_SERVER['HTTP_REFERER']);
$trimmedHeader = $url['path'];
header('Location:'.$trimmedHeader);
 ?>