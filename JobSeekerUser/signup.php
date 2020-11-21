<?php require "validation2.php"; ?>
<html>
	<head></head>
	<body>
		
		<fieldset>
		<h1> Login</h1>
			<form action="signup.php" method="post">
				<table>
					<tr>
						<td>Username:</td>
						<td><input type="text" value="<?php echo $uname?>" name="uname"></td>
						<td><span style="color:red;">*<?php echo $err_uname;?></span>
						<td><p><?php if($incorrect) echo "invalid id or pass";?></p>
						</td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass"></td>
						<td><span style="color:red;">*<?php echo $err_pass;?></span>
						</td>
					</tr>
					<tr>
						<td colspan="4" align="center"><input type="submit" name="register" value="Login"></td>
					</tr>
                    <tr>
       <td>
    <input type="checkbox" id="1" name="info" value="Remember Me">
    <label for="1">Remember Me</label><br>
    </td>
    <td align="center">
    <span class="psw">Forgot <a href="#">password?</a></span>
   </tr>
				</table>
			</form>
		</fieldset>
	</body>
</html>