<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
</head>
<body>
	<form action="checksecurity_system.php" method="POST">
	<table border ='1' border="2" width="60%" >
			 <tr>	
				<td>

                 <a href="homepage.php"><img src="CLOUDFUNDING.PNG" alt="Logo"></a>



            </td>
       
            <td colspan='2'align="right">
			
                 <a href = "homepage.php" name="username" ></a>
            
        </td>
		</tr>
		
		<tr>		
			<td>
			<b>Donator</b>
			<hr>
				<ul>
			<a href="homepage.php"><li>Home Page</li></a>
                    <a href="profile.php"><li>View volunteer Profile</li></a>
                    <a href="edit_profile.php"><li>Edit Volunteer Profile</li></a>
					<a href="check_data.php"><li>Check volunteer data</li></a>
					<a href="donation_volunteer.php"><li>volunteer donation</li></a>
					<a href="help_center.php"><li>Help Center</li></a>
                    <a href="security_system.php"><li>Security System</li></a>
					<a href="Comment.php"><li>Comment</li></a>
				    <a href="login.php"><li>Logout</li></a>
				</ul>
			</td>
			<td width=80%>
			
			<fieldset>
						<legend><b>Security System</b></legend>
						<table>
                            <tr>
								<td>Current Password</td>
								<td>:</td>
								<td><input name="curPass" type="password" required></td>
							</tr>
							<tr>
								<td>New Password</td>
								<td>:</td>
								<td><input name="newPass" type="password" required></td>
							</tr>
							<tr>
								<td>Confirm Password</td>
								<td>:</td>
								<td><input name="confPass" type="password" required></td>
							</tr>
							</table>
							<hr>
							
			              <input type="submit" name="submit" value="Submit">
						   </fieldset>
				</tr>			
			</table>		
    </form>		
</body>
</html



