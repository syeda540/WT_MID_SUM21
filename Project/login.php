<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="homepage.php" method="POST">
		<fieldset>
			<legend>LOGNIN</legend>
		<table>
			<tr>
				<td>User Name :</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password"  required></td>
			
			</tr>
		
		</table>
		
		<hr>
			<input type="checkbox" name="checkRemember" autocomplete="on" >Remember Me
			<br><br>
			<button>Login</button>&nbsp<a href="forgotpassword.html">Forgot Paswword?</a>
			
	
		</fieldset>
	</form>
</body>
</html>