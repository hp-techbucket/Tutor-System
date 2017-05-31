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
	"facebook_contact" => "www.facebook.com".$result['name'],
	"education" => "",
	"study_plan" => "",
	"interest" => "",
	"teaching_style" => "",
	"role" => $_GET["role"]);
$coll->insert($signup); 
$url = parse_url($_SERVER['HTTP_REFERER']);
$trimmedHeader = $url['path'];
header('Location:'.$trimmedHeader);
		// echo "My name: ".$result['first_name'];
		// echo "My name: ".$result['gender'];
		// echo "My name: ".$result['last_name'];
		
} else {
	$loginUrl = $helper->getLoginUrl('http://localhost:8080/oo/', $permissions);
	echo '<meta http-equiv="refresh" content="0;URL='. $loginUrl .'" />';
}
?>