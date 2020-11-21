<?php
	session_start();
	$Fname = "";
	$err_Fname = "";
	$L_name = "";
    $err_L_name = "";
    $school = "";
    $err_school = "";
    $college ="";
    $err_college="";
    $uni = "";
    $err_uni ="";
	$email = "";
	$err_email = "";
	$phone_no = "";
	$err_phone = "";
    $address_city = "";
    $err_address = "";
    $project = "";
    $err_project="";
	$gender ="";
	$err_gender ="";
	$des="";
	$skill="";
	$err_year="";
	$year="";
	$year1="";
	$err_year1="";
	$year2="";
	$err_year2="";
	$year3="";
	$err_year3="";
	$year4="";
	$err_year4="";
	$year5="";
	$err_year5="";
	$year6="";
    $err_year6="";
    $sub1="";
	$err_sub1="";
	$sub2="";
	$err_sub2="";
	$dept1="";
	$err_dept1="";
	$exp1="";
	$err_exp1="";
	$city1="";
	$err_city1="";
	$mon="";
	$err_mon="";
	$day="";
	$err_day="";
	$error= false;


	if(isset($_POST["register"]))
	{
		// name validation
		if(empty($_POST["Fname"]))
		{
			$err_Fname = "*required first name"; $error = true;
		}
		else{ $Fname = htmlspecialchars($_POST["Fname"]); $_SESSION['firstName'] = $Fname; }
		
		// lastname validation
		if(empty($_POST["LName"]))
		{
			$err_L_name = "*required last name"; $error = true;
		}
		else if(strlen($_POST["LName"]) < 6)
		{
			$err_L_name = "*at least 6 char required";$error = true;
		}
		else if(strpos($_POST["LName"]," "))
		{
			$err_L_name = "*no space is allowed";$error = true;
		}
        else{ $L_name = htmlspecialchars($_POST["LName"]);}
        
        //school validation

		if(empty($_POST["school"]))
		{
			$err_school = "*required school name"; $error = true;
		}
		else{ $Fname = htmlspecialchars($_POST["school"]);}
        
        //college validation
		if(empty($_POST["college"]))
		{
			$err_college = "*required college name"; $error = true;
		}
		else{ $college = htmlspecialchars($_POST["college"]);}
        
         //University validation

         if(empty($_POST["uni"]))
		{
			$err_uni = "*required University name"; $error = true; }
		else{ $uni = htmlspecialchars($_POST["uni"]);}
		
		// email validation
		
		if(empty($_POST["email"]))
		{
			$err_email = "*required email"; $error = true;
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
			else{$err_email = "*invalid email pattern" ;$error = true; }
		}
		
		
		// phone validate
		
		if(empty($_POST["number"]))
		{
			$err_phone = "*required number"; $error = true;
		}
		else if(!is_numeric($_POST["number"]))
		{
			$err_phone = "*required numeric charecter"; $error = true;
		}
		else{ $phone_no = htmlspecialchars($_POST["number"]);}
		
		// address validate
		
		if(isset($_POST['city1'])){
			if($_POST['city1'] != "") {
				$city1 = $_POST['city1'];
				//echo $sub1;
			  } 
			}
			else {			
				$err_city1= "*Select City"; $error = true;
			  }
		// gender validate
		
		if(isset($_POST["gender"]))
		{
			$gender = $_POST["gender"];
		}
		else{$err_gender = "*gender required"; $error = true;}
		
		// description validate
		
		if(isset($_POST["txtarea"]))
		{
			$des = $_POST["txtarea"];
		}
		//skill validate
		if(isset($_POST["txtarea"]))
		{
			$skill = $_POST["txtarea"];
		}

		//year validate

		if(isset($_POST['year'])){
		if($_POST['year'] != "") {
			$year = $_POST['year'];
			//echo $year;
		  } 
		}
		else {			
			$err_year = "*Year required"; $error = true; }

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

		  //year2 validate
		  if(isset($_POST['year2'])){
			if($_POST['year2'] != "") {
				$year2 = $_POST['year2'];
				//echo $year;
			  } 
			}
			else {			
				$err_year2 = "*Year required"; $error = true;
			  }

		   //year3 validate

		   if(isset($_POST['year3'])){
			if($_POST['year3'] != "") {
				$year3 = $_POST['year3'];
				//echo $year3;
			  } 
			}
			else {			
				$err_year3 = "*Year required"; $error = true;
			  }

			   //year4 validate

			   if(isset($_POST['year4'])){
				if($_POST['year4'] != "") {
					$year4 = $_POST['year4'];
					//echo $year4;
				  } 
				}
				else {			
					$err_year4 = "*Year required"; $error = true;
				  }

				   //year5 validate

		   if(isset($_POST['year5'])){
			if($_POST['year5'] != "") {
				$year5 = $_POST['year5'];
				//echo $year5;
			  } 
			}
			else {			
				$err_year5 = "*Year required"; $error = true;
			  }
			  
				   //year6 validate

				   if(isset($_POST['year6'])){
					if($_POST['year6'] != "") {
						$year6 = $_POST['year6'];
						//echo $year6;
					  } 
					}
					else {			
						$err_year6 = "*Year required"; $error = true;
                      }
                      
                      if(isset($_POST['sub1'])){
                        if($_POST['sub1'] != "") {
                            $sub1 = $_POST['sub1'];
                            //echo $sub1;
                          } 
                        }
                        else {			
                            $err_sub1 = "*Select subject"; $error = true;
						  }
						  if(isset($_POST['sub2'])){
							if($_POST['sub2'] != "") {
								$sub2 = $_POST['sub2'];
								//echo $sub1;
							  } 
							}
							else {			
								$err_sub2 = "*Select subject"; $error = true;
							  }
							  
							  
							  //department validate
							  if(isset($_POST['dept1'])){
								if($_POST['dept1'] != "") {
									$dept1 = $_POST['dept1'];
									//echo $sub1;
								  } 
								}
								else {			
									$err_dept1= "*Select department"; $error = true;
								}

								  if(isset($_POST['exp1'])){
									  
									if($_POST['exp1'] != "") {
										$exp1 = $_POST['exp1'];
										//echo $sub1;
									  } 
									  else $err_exp1= "*Select years of experience"; $error = true;
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
			header("location:CVSeek.php");
			}
			else{
				echo "Error";
			}


		
	
		
	
	}
	
?>	