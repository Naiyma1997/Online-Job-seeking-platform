<?php
	session_start();
	$Fname = "";
	$err_Fname = "";
	$email = "";
	$err_email = "";
	$phone_no = "";
	$err_phone = "";
    $project = "";
    $err_project="";
	$gender ="";
	$err_gender ="";
	$des="";
	$skill="";
	$exp1="";
    $err_exp1="";
    $post1="";
    $err_post1="";
    $ap="";
    $err_ap="";
    $sal="";
    $err_sal="";
    $err_jobdes="";
    $jobdes="";
	
	$error= false;


	if(isset($_POST["register"]))
	{
		// name validation
		if(empty($_POST["Fname"]))
		{
			$err_Fname = "*required first name"; $error = true;
		}
		else{ $Fname = htmlspecialchars($_POST["Fname"]); $_SESSION['firstName'] = $Fname; }
		
        
       
		
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
		else{$err_gender = "*Category required"; $error = true;}
		
		// job description validate
		
		if(isset($_POST["txtarea"]))
		{
			$des = $_POST["txtarea"];
		}
		//requirment validate
		if(isset($_POST["txtarea"]))
		{
			$skill = $_POST["txtarea"];
        }
        
        //Job post validate

        if(isset($_POST['post1'])){
            if($_POST['post1'] != "") {
                $post1 = $_POST['post1'];
                //echo $sub1;
              } 
            }
            else {			
                $err_post1 = "*Post Required"; $error = true;
              }


              // available position validation
		if(empty($_POST["ap"]))
		{
			$err_ap = "*required number"; $error = true;
		}
        else{ $ap = htmlspecialchars($_POST["ap"]); $_SESSION['ap'] = $ap; }
        
        if(empty($_POST["jobDes"]))
		{
			$err_jobdes = "*required Description"; $error = true;
		}
		else{ $jobdes = htmlspecialchars($_POST["jobDes"]); $_SESSION['jobdes'] = $jobdes; }




		
                     
							 
                               //experience validate
								  if(isset($_POST['exp1'])){
									  
									if($_POST['exp1'] != "") {
										$exp1 = $_POST['exp1'];
										//echo $sub1;
									  } 
									  else $err_exp1= "*Select years of experience"; $error = true;
                                    }
            // salary validation
		if(empty($_POST["sal"]))
		{
			$err_sal = "*required salaray"; $error = true;
		}
		else{ $sal = htmlspecialchars($_POST["sal"]); $_SESSION['sal'] = $sal; }
		
									 
									
									
									  
		if(!$error){
			header("location:");
			}
			else{
				echo "Error";
			}


		
	
		
	
	}
	
?>	