
<?php require "validation4.php"; ?>
<html>
	<head>
		<title>CVFormat</title>
	</head>
	<body>
		
		<hr>
		<form action="CVSeek.php" method="post">
			<fieldset>
				<h1>Provide your personal information</h1>
				<table>
                <tr>
            <td align="center"> Name :</td>
						</td>
						<td>
							<input type="text" size="15" placeholder="First Name" name="Fname" style="margin-right: 10px"> <input type="text" size="15" placeholder="Last Name" name = "Lname" >
							<span>
								<?php
                                  echo $Fname;
								?>
							</span>
                            <span>
								<?php
                                  echo $L_name;
								?>
							</span>  <?php echo " ".$err_Fname; ?>  <?php echo " ".$err_L_name; ?>
						</td>
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
								<option disabled="disabled" value="" selected="selected"> Month </option>
								<?php
								$month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "Octobor", "November", "December");
                                   for($i = 0; $i < 12; $i++) {
									echo "<option value=".(1+$i).">". $month[$i] ."</option>";
                                   }
								?>
							</select>
							<select name="year1">
							<option disabled="disabled" selected="selected" value=""> Year </option>
								<?php
								  for ($i = 0; $i < 30; $i++) {
								  	echo "<option value =". (1990+$i) .">" . (1990+$i) . "</option>";
								  }
 								?>
							</select>
							<?php echo " ".$err_year1;
							echo " ".$err_mon;
							echo " ".$err_day;
							?> 
						</td>
					</tr>



                    <tr>
						<td align="center">School:</td>
						<td><input type="text" name="school" placeholder="School name" size = "30" value="<?php echo $school; ?>"> <select name="year2">
						<option disabled="disabled" selected="selected" value=""> Year </option>
								<?php
								  for ($i = 0; $i < 30; $i++) {
								  	echo "<option value =". (1990+$i) .">" . (1990+$i) . "</option>";
								  }
 								?>
							</select> to
                            <select name="year3">
							<option disabled="disabled" selected="selected" value=""> Year </option>
								<?php
								  for ($i = 0; $i < 30; $i++) {
								  	echo "<option value =". (1990+$i) .">" . (1990+$i) . "</option>";
								  }
 								?>
							</select>
							

  <!-- validate subject -->                         
                     <select name="sub1">
                     <option disabled="disabled" selected="selected" value=""> Subject </option>
                    
                      <option>Science</option>
					  <option>Commerce</option>
		               
                      </select> 
					  <?php echo " ".$err_school; ?> 
					  <?php echo " ".$err_year2; ?> 
					  <?php echo " ".$err_year3; ?> 
					  <?php echo " ".$err_sub1; ?> 
					  </td> 
                     </tr>
					   
	


                    <tr>
						<td align="center">College:</td>
						<td><input type="text" name="college" placeholder="College name" size = "30" value="<?php echo $college; ?>"> 
						<select name="year4">
						<option disabled="disabled" selected="selected" value=""> Year </option>
								<?php
								  for ($i = 0; $i < 30; $i++) {
								  	echo "<option value =". (1990+$i) .">" . (1990+$i) . "</option>";
								  }
 								?>
							</select> to
                            <select name="year5">
								<option disabled="disabled" selected="selected" value=""> Year </option>
								<?php
								  for ($i = 0; $i < 30; $i++) {
								  	echo "<option value =". (1990+$i) .">" . (1990+$i) . "</option>";
								  }
 								?>
							</select>

                            
                     <select name="sub2">
                     <option disabled="disabled" selected="selected"> Subject </option>
                      <option>Science</option>
                      <option>Commerce</option>
                      </select> 
					  <?php echo " ".$err_college; ?> 
					  <?php echo " ".$err_year4; ?> 
					  <?php echo " ".$err_year5; ?> 
					  <?php echo " ".$err_sub2; ?> 
		            </td>

                            
		           
					</tr> 

                    <tr>
						<td align="center">University:</td>
						<td><input type="text" name="uni" placeholder="University name" size = "30" value="<?php echo $uni; ?>">
						 <select name="year">
								<option disabled="disabled" selected="selected" value=""> Year </option>
								<?php
								  for ($i = 0; $i < 30; $i++) {
								  	echo "<option value =". (1990+$i) .">" . (1990+$i) . "</option>";
								  }
 								?>
							</select> to
                            <select name="year6">
							<option disabled="disabled" selected="selected" value=""> Year </option>
								<?php
								  for ($i = 0; $i < 30; $i++) {
								  	echo "<option value =". (1990+$i) .">" . (1990+$i) . "</option>";
								  }
 								?>
							</select>
							<?php echo " ".$err_uni; ?> <?php echo " ".$err_year; ?> 
							<?php echo " ".$err_year6; ?> 
					</tr> 




					<tr>
						<td align="center">Department</td>
                        <td>
                    <select name="dept1">
                     <option disabled="disabled" selected="selected" size="8" value=""> Select </option>
                    
                      <option>CSE</option>
					  <option>EEE</option>
					  <option>Architecture</option>
		               
                      </select>  
					  <?php echo " ".$err_dept1; ?> 
					  </td> 
                     </tr>






                     <tr>
    <td style="text-align:center">Skills</td>
    <td>
    <input type="checkbox" id="1" name="1" value="C++">
    <label for="1">C++</label><br>
    <input type="checkbox" id="2" name="2" value="java">
    <label for="2">Java</label><br>
    <input type="checkbox" id="3" name="3" value="pyhton">
    <label for="3">Python</label><br>
    <input type="checkbox" id="4" name="4" value="matlab">
    <label for="4">Matlab</label><br>
    <input type="checkbox" id="4" name="4" value="html">
    <label for="4">HTML5,CSS</label><br>
    <input type="checkbox" id="4" name="4" value="django">
    <label for="4">Django or Javascript</label><br>

    </td>
   </tr> 

   <td style="text-align:right">Other Skills (if any)</td>
       <td> 
           <textarea id="txtarea" name="txtarea" rows="4" cols="30" ></textarea>
            <br><br>
       </td>
   </tr> 

   <tr>
                    <tr>
                     <td align="center">Years of Working Experience</td>
                     <td>
                     <select name="exp1" style="width: 180px">
					 <option value="">Select</option>
                      <option value="1 to 3 years">1 to 3 years</option>
                      <option value="3 or more years">3 or more years</option>
                      <option value="0">No experience yet</option>
                      </select> 
					  <?php echo " ".$err_exp1; ?> 
                      </td>
                     </tr>


                     <tr>
       <td style="text-align:right">Project descrption (if any)</td>
       <td> 
           <textarea id="txtarea" name="txtarea" rows="5" cols="30" placeholder = "Give title of your project and write a short description. If more than one project write them serially."></textarea>
            <br><br>
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
							 <input type="text"  placeholder="Number" name = "phone">
							<span>
								<?php
                                  echo $phone_no;
								?>
							</span>
							<?php echo " ".$err_phone; ?> 
						</td>
					</tr>


					
					<tr>
						<td align="center">City:</td>
                        <td>
                    <select name="city1">
                     <option disabled="disabled" selected="selected" value=""> Select </option>
                    
                      <option>Chittagong</option>
					  <option>Dhaka</option>
					  <option>Rajshahi</option>
					  <option>Khulna</option>
					  <option>Sylhet</option>
		               
                      </select>  
					  <?php echo " ".$err_city1; ?> 
					  </td> 
                     </tr>





					<tr>
						<td colspan="4" align="center"><input type="submit" name="register" value="Generate CV"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>