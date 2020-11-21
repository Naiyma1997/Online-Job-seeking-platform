<?php
	session_start();
	$name = "";
	$err_name = "";
	$user_name = "";
	$err_user_name = "";
	$password = "";
	$err_password = "";
	$confirm_password = "";
	$err_confirm_password = "";
	$email = "";
	$err_email = "";
	$phone_no = "";
	$err_phone = "";
	$gender ="";
	$err_gender ="";
	$division1="";
	$err_division1="";
	$year1="";
	$err_year1="";
	$mon ="";
	$err_mon="";
	$day="";
	$err_day="";




	$error = false;
	if(isset($_POST["register"]))
	{
		// name validation
		if(empty($_POST["name"]))
		{
			$err_name = "*required name";  $error = false;
		}
		else{ $name = htmlspecialchars($_POST["name"]);}
		
		// username validation
		if(empty($_POST["userName"]))
		{
			$err_user_name = "*required user name";  $error = false;
		}
		else if(strlen($_POST["userName"]) < 6)
		{
			$err_user_name = "*at least 6 char required";  $error = false;
		}
		else if(strpos($_POST["userName"]," "))
		{
			$err_user_name = "*no space is allowed";   $error = false;
		}
		else{ $user_name = htmlspecialchars($_POST["userName"]);}
		
		// password validation
		
		if(!empty($_POST["password"]))
		{
			if(strlen($_POST["password"]) >= 8)
			{
				if(!(strtolower($_POST["password"]) == $_POST["password"]) && (!(strtoupper($_POST["password"]) == $_POST["password"])))
				{
					$hasNumber = false;
					$num_arr = array("0","1","2","3","4","5","6","7","8","9");
					$pass =htmlspecialchars($_POST["password"]);
					for($i = 0; $i < strlen($pass); $i++)
					{
						for($j = 0; $j <10; $j++)
						{
							if($pass[$i]== $num_arr[$j])
							{
								//echo "yo<br>";
								$hasNumber = true;
								break;
							}
						}
					}
					if($hasNumber == true)
					{					
							$password = htmlspecialchars($_POST["password"]);
					}
					else{$err_password = "*atleast one digit is required";  $error = false;}
				}
				else{$err_password = "*upper and lower case character required"; $error = false;}
			}
			else{$err_password = "*minimum password length is 8";  $error = false;}
		}
		else{$err_password = "*password required";  $error = false;}

		if($_POST["password"] != htmlspecialchars($_POST["confirmPassword"]))
		{
			$err_confirm_password = "*password not matched";  $error = false;
		}
		
		// email validation
		
		if(empty($_POST["email"]))
		{
			$err_email = "*required email"; $error = false;
		}
		else if(strpos($_POST["email"],"@"))
		{
			$flag = false;
			$pos = strpos($_POST["email"],"@");
			$str = $_POST["email"];
			for($i = $pos; $i < strlen($str); $i++)
			{
				
				if($str[$i] == "."){$flag = true;break;}
			}
			if($flag == true){$email = htmlspecialchars($_POST["email"]);}
			else{$err_email = "*invalid email pattern"; $error = false;}
		}
		
		
		// phone validate
		
		if(empty($_POST["phone"]))
		{
			$err_phone = "*required number"; $error = false;
		}
		else if(!is_numeric($_POST["phone"]))
		{
			$err_phone = "*required numeric charecter"; $error = false;
		}
		else{ $phone_no = htmlspecialchars($_POST["phone"]);}
		
		// address validate
		
		if(isset($_POST['division1'])){
			if($_POST['division1'] != "") {
				$division1 = $_POST['division1'];
				//echo $sub1;
			  } 
			}
			else {			
				$err_division1= "*Select City"; $error = true;
			  }
		
		
		// gender validate
		
		if(isset($_POST["gender"]))
		{
			$gender = $_POST["gender"];
		}
		else{$err_gender = "*gender required"; $error = false;}
		
		//year1 validate
		if(isset($_POST['year1'])){
			if($_POST['year1'] != "") {
				$year1 = $_POST['year1'];
				//echo $year;
		  	} 
		}
		else {			
			$err_year1 = "*Year required"; $error = true;
		  }
		 
		//month validate
		if(isset($_POST['month'])){
			if($_POST['month'] != "") {
				$mon = $_POST['month'];
				//echo $year;
		  	} 
		}
		else {			
			$err_mon = "*Month required"; $error = true;
		  }  
		  //Day validate
		if(isset($_POST['day'])){
			if($_POST['day'] != "") {
				$day = $_POST['day'];
				//echo $year;
		  	} 
		}
		else {			
			$err_day = "*Day required"; $error = true;
		  }  


		if(!$error){
			$users = simplexml_load_file("seekerreg.xml");
            $user = $users->addChild("user");
			$user->addChild("name",$name);
			$user->addChild("user_name",$user_name);
            $user->addChild("password",$password);
			$user->addChild("gender",$gender);
			$user->addChild("day",$day);
			$user->addChild("mon",$mon);
			$user->addChild("year1",$year1);
			$user->addChild("email",$email);
			$user->addChild("phone",$phone_no);
			$user->addChild("phone",$phone_no);
			$user->addChild("division1",$division1);
			
		
    
           
            $xml = new DOMDocument("1.0");
            $xml->preserveWhiteSpace=false;
            $xml->formatOutput= true;
            $xml->loadXML($users->asXML());
           
           
            $file = fopen("seekerreg.xml","w");
            fwrite($file,$xml->saveXML());
           // echo "<h1>Register successfully</h1>";
		header("location:signup.php");
		}
		else{
			//echo "Error";
		}

	}

	
?>	