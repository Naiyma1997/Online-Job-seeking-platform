<?php require "validation1.php"; ?>
<html>
	<head>
		<title>Registation</title>
	</head>
	<body>
		
		<hr>
		<form action="seekerform.php" method="post">
			<fieldset>
				<h1>Job Seeker</h1>
        <h3> Free Registration <span style="font-family: wingdings; font-size: 100%;">&#252;</span> </h3>
        <h3> Large and good range of vacancies <span style="font-family: wingdings; font-size: 100%;">&#252;</span> </h3>
				<table>
					<tr>
						<td align="center">Full Name:</td>
						<td><input type="text" name="name" placeholder="Insert Full Name" value="<?php echo $name; ?>"><?php echo $err_name; ?></td>
            
					</tr>
					<tr>
						<td align="center">Username:</td>
						<td><input type="text" name="userName" placeholder="Insert User name" value="<?php echo $user_name; ?>"><?php echo $err_user_name; ?></td>
           
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
						<td align="center">Gender:</td>
						<td>
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female   <?php echo " ".$err_gender; ?>
						</td>
					</tr>
					<tr>
						<td align="center">Birth Date:</td>
						</td>
						<td>
							<select name = "day">
								<option disabled="disabled" value="" selected="selected"> Day </option>
								<?php
                                   for($i = 1; $i <= 31; $i++) {
                                   	 echo "<option value=".$i.">" . "$i" . "</option>";
                                   }
								?>
							</select>
							<select name="month">
								<option disabled="disabled" selected="selected"> Month </option>
								<?php
								$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "Octobor", "November", "December");
                                   for($i = 0; $i < 12; $i++) {
                                   	 echo "<option value=".(1+$i).">". $month[$i] ."</option>";
                                   }
								?>
							</select>
							<select name="year1">
								<option disabled="disabled" selected="selected"> Year </option>
								<?php
								   for ($i = 0; $i < 30; $i++) {
									echo "<option value =". (1990+$i) .">" . (1990+$i) . "</option>";
								  }
 								?>
							</select>
							<?php echo " ".$err_year1;  
							 echo " ".$err_mon;
							 echo " ".$err_day; ?>  

						</td>
					</tr>

					<tr>
						<td align="center">Email:</td>
						<td><input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"><?php echo $err_email; ?></td>
					</tr>
          <tr>
            <td align="center">Contact No:</td>
						</td>
						<td>
							 <input type="text" placeholder="Number" name = "phone">
							<span>
								<?php
                                  echo $err_phone;
								?>
							</span>
						</td>
					</tr>


					<tr>
						<td align="center">City:</td>
                        <td>
                    <select name="division1">
                     <option disabled="disabled" selected="selected" value=""> Select </option>
                    
                      <option>Chittagong</option>
					  <option>Dhaka</option>
					  <option>Rajshahi</option>
					  <option>Khulna</option>
					  <option>Sylhet</option>
		               
                      </select>  
					  <?php echo " ".$err_division1; ?> 
					  </td> 
                     </tr>










                     <tr>
       <td>
    <input type="checkbox" id="1" name="info" value="Yes, I agree to the terms and conditions">
    <label for="1">Yes, I agree to the terms and conditions</label><br>
    </td>
   </tr>
					<tr>
						<td colspan="4" align="center"><input type="submit" name="register" value="Register"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>