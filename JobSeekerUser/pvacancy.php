

<?php
require "validation8.php"; ?>
<html>
	<head>
		<title>JobPost</title>
	</head>
	<body>
		
		<hr>
		<form action="pvacancy.php" method="post">
			<fieldset>
				<h1>Post Vacancy</h1>
				<table>
                <tr>
            <td align="center"> Company Name :</td>
						</td>
						<td>
							<input type="text" size="30" placeholder="Company Name" name="Fname" style="margin-right: 10px"> 
							<span>
								<?php
                                  echo $Fname;
								?>
							</span>
                              <?php echo " ".$err_Fname; ?>  
						</td>
					</tr>
                    <tr>
						<td align="center">Job Category:</td>
						<td>
							<input type="radio" name="gender" value="Full Time"> Full Time
							<input type="radio" name="gender" value="Part Time"> Part Time
                            <input type="radio" name="gender" value="Internship"> Internship
                            
                               <?php echo " ".$err_gender; ?>
						</td>
					</tr>
         

                    <tr>
						<td align="center">Avilable Post:</td>
                        <td>
                    <select name="post1">
                     <option disabled="disabled" selected="selected" value=""> Select </option>
                    
                      <option>IT Engineer</option>
					  <option>Admin Support</option>
                      <option>Web Developer</option>
                      <option>Other Post</option>
		               
                      </select>  
					  <?php echo " ".$err_post1; ?> 
					  </td> 
                     </tr>


                     <td align="center"> Avilable Position :</td>
						</td>
						<td>
							<input type="number" size="2" name="ap" > 
							<span>
								<?php
                                  echo $ap;
								?>
							</span>
                              <?php echo " ".$err_ap; ?>  
						</td>
					</tr>



                  
                   

    

   <td style="text-align:right">Job Description</td>
       <td> 
           <textarea id="txtarea" name="jobDes" rows="4" cols="30" ></textarea>
           <?php echo " ".$err_jobdes; ?>  
            <br><br>
       </td>
   </tr> 

   <tr>
                    <tr>
                     <td align="center">Required Working Experience</td>
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
       <td style="text-align:right">Special Requirement (if any)</td>
       <td> 
           <textarea id="txtarea" name="txtarea" rows="5" cols="30" ></textarea>
            <br><br>
       </td>
   </tr>


   <td align="center"> Salary :</td>
						</td>
						<td>
							<input type="text" size="5"  name="sal" style="margin-right: 10px"> 
							<span>
								<?php
                                  echo $sal;
								?>
							</span>
                              <?php echo " ".$err_sal; ?>  
						</td>
					</tr>

					<tr>
						<td align="center">Email:</td>
						<td><input type="text" name="email" placeholder="Company Email only" value="<?php echo $email; ?>"><?php echo $err_email; ?></td>
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
						<td colspan="4" align="center"><input type="submit" name="register" value="Post vacancy"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>