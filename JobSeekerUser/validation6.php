<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError=false;
	$incorrect = false ;
	if(isset($_POST["register"])){
		$incorrect = true;
		session_start();
		if(empty($_POST["email"])){
			$err_uname="Email Required";
			$hasError =true;	
		}
		else{
			$uname = htmlspecialchars($_POST["email"]);
			
		}
		if(empty ($_POST["pass"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$pass=htmlspecialchars($_POST["pass"]);
		}
		
		if(!$hasError){
			$users = simplexml_load_file("postjobreg.xml");
			
			$data = $users->user;
			$i=0;
			for( ;$i<1000;$i++)
			{
				
				if($data[$i]->email == $uname && $data[$i]->password == $pass)
				{
					$_SESSION['username'] = $uname;
					setcookie('userName',$uname,time()+60*60*7);
					header("Location: form4.php"); $incorrect = false;
				}
					
			}
			
		}
	}
	
?>