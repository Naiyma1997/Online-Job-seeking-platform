<?php require "validation5.php"; ?>
<html>
	<head>
		<title>Post vacancies</title>
	</head>
	<body>
		
		<hr>
		<form action="pjob.php" method="post">
			<fieldset>
				<h1>Register for posting vacancies</h1>
        <h3> Upload and seek candidate quick and easy<span style="font-family: wingdings; font-size: 100%;">&#252;</span> </h3>
        <h3> Find your ideal candidate today<span style="font-family: wingdings; font-size: 100%;">&#252;</span> </h3>
				<table>
					<tr>
						<td align="center">Company Name:</td>
						<td><input type="text" name="name" size= "40" placeholder="Insert Company Name" value="<?php echo $name; ?>"><?php echo $err_name; ?></td>
            
					</tr>
					<tr>
						<td align="center">Email:</td>
						<td><input type="text" name="email"  placeholder="Provide company mail" value="<?php echo $email; ?>"><?php echo $err_email; ?></td>
					</tr>

					<tr>
						<td align="right">Address:</td>
						<td>
							<input type="text" placeholder="Street Address" name="street" value="<?php echo $address_street; ?>"><?php echo $err_address; ?>
						</td>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="City" size="3" name="city" value="<?php echo $address_city; ?>"> - <input type="text" placeholder="State" size="11" name="state" value="<?php echo $address_state; ?>">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="text" placeholder="Postal/Zip" name="zip" value="<?php echo $address_zip; ?>">
						</td>
					</tr>
				
					<tr>
						<td align="center">Password:</td>
						<td><input type="password" name="password" placeholder="password" value="<?php echo $password; ?>"><?php echo $err_password; ?></td>
            
					</tr>
					<tr>
						<td align="center">Confirm Password:</td>
						<td><input type="password" name="confirmPassword" placeholder="Retype Password" value="<?php echo $password; ?>"><?php echo $err_confirm_password; ?></td>
  
					</tr>

                    <tr>
						<td align="center">Job Category:</td>
						<td>
							<input type="radio" name="gender" value="Full Time"> Full time
							<input type="radio" name="gender" value="Part Time"> Part time   
							<input type="radio" name="gender" value="Internship"> Internship 
							<?php echo " ".$err_gender; ?>
						</td>
					</tr>
					
			
          <tr>
            <td align="center">Contact No:</td>
						</td>
						<td>
							 <input type="text" placeholder="Number" name = "phone">
							<span>
								<?php
                                  echo $phone_no;
								?>
							</span>
						</td>
					</tr>
					
                    <tr>
						<td align="center">Company Website:</td>
						<td><input type="text" name="web" size= "40" placeholder="Provide link" value="<?php echo $web; ?>"><?php echo $err_web; ?></td>
            
					</tr>
					<tr>
						<td colspan="4" align="center"><input type="submit" name="register" value="Register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>