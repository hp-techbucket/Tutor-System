			<?php
			session_start();
			$_SESSION["backurl"]=$_SERVER['HTTP_REFERER'] ;
$uri = "mongodb://localhost:27017/oo";
$m = new MongoClient($uri);
$db = $m->selectDB("oo");
$coll = $db->users;
$cursor = $coll->find(array('username' => $_POST['username'],'password'=> $_POST['password']));
			if(!$_GET){
			if(isset($_POST['username']) and isset($_POST['password'])){
					foreach($cursor as $object){
						if(count($cursor)==1){
							$_SESSION['check'] = 1;			
							$_SESSION['username'] = $_POST['username'];
							$_SESSION['password'] = $_POST['password'];
							
							
							header('Location: www.google.com');
						}
						else{
							$_SESSION['check'] = 0;
							header('Location: index.php');
						}
					
					}
			}
			}
			else{
				if(isset($_GET['username']) and isset($_GET['password'])){
					foreach($cursor as $object){
						if(count($cursor)==1){
							$_SESSION['check'] = 1;			
							$_SESSION['username'] = $_POST['username'];
							$_SESSION['password'] = $_POST['password'];
							
							
							header('Location: www.google.com');
						}
						else{
							$_SESSION['check'] = 0;
							header('Location: index.php');
						}
					
					}
			}

			}			
			
					
foreach ($cursor as $doc) {
$users = array('firstname'=> $doc['firstname'],'lastname'=> $doc['lastname'],'role'=> $doc['role']) ;
$_SESSION['firstname']=$users['firstname'];
$_SESSION['lastname']=$users['lastname'];
$_SESSION['role']=$users['role'];
				}
				
$url = parse_url($_SERVER['HTTP_REFERER']);
$trimmedHeader = $url['path'];
header('Location:'.$trimmedHeader);
				?>