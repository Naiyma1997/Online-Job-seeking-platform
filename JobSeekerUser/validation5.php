<?php
	session_start();
	$name = "";
	$err_name = "";
	$password = "";
	$err_password = "";
	$confirm_password = "";
	$err_confirm_password = "";
	$email = "";
	$err_email = "";
	$phone_no = "";
	$err_phone = "";
    $address_city = "";
    $err_address = "";
	$gender ="";
	$err_gender ="";
	$address_street = "";
	$address_city = "";
	$address_state ="";
	$address_zip ="";
    $err_address ="";
    $web = "";
	$err_web = "";
	$error = true;
	if(isset($_POST["register"]))
	{
		// name validation
		if(empty($_POST["name"]))
		{
			$err_name = "*required name"; echo "1n"; $error = false;
		}
        else{ $name = htmlspecialchars($_POST["name"]);}
        


        // address validate
		
		if(empty($_POST["street"]))
		{
			$err_address = "*required street, city state and zip code";
		}
		else{ $address_street = htmlspecialchars($_POST["street"]);}
		
		if(empty($_POST["city"]))
		{
			$err_address = "*required street, city state and zip code";
		}
		else{ $address_city = htmlspecialchars($_POST["city"]);}
		
		if(empty($_POST["state"]))
		{
			$err_address = "*required street, city state and zip code";
		}
		else{ $address_state = htmlspecialchars($_POST["state"]);}
		
		if(empty($_POST["zip"]))
		{
			$err_address = "*required street, city state and zip code";
		}
		else{ $address_zip = htmlspecialchars($_POST["zip"]);}
		
	
		
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
					else{$err_password = "*atleast one digit is required"; echo "1"; $error = false;}
				}
				else{$err_password = "*upper and lower case character required"; echo "12"; $error = false;}
			}
			else{$err_password = "*minimum password length is 8"; echo "13"; $error = false;}
		}
		else{$err_password = "*password required"; echo "14"; $error = false;}

		if($_POST["password"] != htmlspecialchars($_POST["confirmPassword"]))
		{
			$err_confirm_password = "*password not matched"; echo "not match"; $error = false;
		}
		
		// email validation
		
		if(empty($_POST["email"]))
		{
			$err_email = "*required email";echo "no email"; $error = false;
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
			else{$err_email = "*invalid email pattern"; echo "email"; $error = false;}
		}
		
		
		// phone validate
		
		if(empty($_POST["phone"]))
		{
			$err_phone = "*required number"; echo "no number"; $error = false;
		}
		else if(!is_numeric($_POST["phone"]))
		{
			$err_phone = "*required numeric charecter"; echo "number"; $error = false;
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
		
		
		// Job category validate
		
		if(isset($_POST["gender"]))
		{
			$gender = $_POST["gender"];
		}
        else{$err_gender = "*Job category required"; echo "gender"; $error = false;}

        // Web validation
		if(empty($_POST["web"]))
		{
			$err_web = "*link required"; echo "1n"; $error = false;
		}
        else{ $name = htmlspecialchars($_POST["web"]);}
        
        	if($error){
            $users = simplexml_load_file("postjobreg.xml");       
            $user = $users->addChild("user");
            $user->addChild("name",$name);
            $user->addChild("email",$email);
            $user->addChild("street",$address_street);
            $user->addChild("city",$address_city);
            $user->addChild("state",$address_state);
            $user->addChild("zip",$address_zip);
            $user->addChild("password",$password);
            $user->addChild("gender",$gender);
            $user->addChild("phone",$phone_no);
            $user->addChild("web",$web);



            $xml = new DOMDocument("1.0");
            $xml->preserveWhiteSpace=false;
            $xml->formatOutput= true;
            $xml->loadXML($users->asXML());
           
           
            $file = fopen("postjobreg.xml","w");
            fwrite($file,$xml->saveXML());
		header("location:psign.php");
		}
		else{
			echo "Error";
		}

    }
    













    //if($error==true)
       // {
           
            //echo "<h1>Register successfully</h1>";
        //}
        //else{
			//echo "<h1>Registation not successful</h1>";}

	

	
?>	