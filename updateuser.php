 <?php	
 session_start();
			if(empty($_SESSION['check'])){
				$_SESSION['check']= 0;
			}
			$uri = "mongodb://localhost:27017/oo";
			$m = new MongoClient($uri);
			$db = $m->selectDB("oo");
			$coll = $db->users;
$newdata = array('$set' => array(
	"firstname" => $_GET['firstname'],
	"lastname" => $_GET['lastname'],
	"email" => $_GET['email'],
	"mobile" => $_GET['mobile'],
	"stdid" => $_GET['stdid'],
	"facebook_contact" => $_GET['facebook_contact'],
	"education" => $_GET['education'],
	"study_plan" => $_GET['study_plan'],
	"interest" => $_GET['interest'],
	"teaching_style" => $_GET['teaching_style']));			
$coll->update(array("username" => $_SESSION['username']), $newdata);

      if (isset ($_FILES['new_image'])){
          $imagename = $_FILES['new_image']['name'];
          $source = $_FILES['new_image']['tmp_name'];
          $target = "temp/".$imagename;

          move_uploaded_file($source, $target);

          $imagepath = $imagename;
          $save = "images/" . $imagepath; //This is the new file you saving

          list($width, $height) = getimagesize($target);

          $modwidth = 500;
          $diff = $width / $modwidth;
          $modheight = $height / $diff;

          $tn = imagecreatetruecolor($modwidth, $modheight) ;
          $image = imagecreatefromjpeg($file) ;
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;

          imagejpeg($tn, $save, 100) ;
          unlink($target); //Delete our uploaded file

        echo "Large image: &lt;img src='images/".$save."'&gt;&lt;br&gt;";
      }
    




$url = parse_url($_SERVER['HTTP_REFERER']);
$trimmedHeader = $url['path'];
//header('Location: about.php');
 ?>