<?php

$nameErr = $emailErr = $genderErr = $usernameErr = $passwordErr = $phoneErr = $confirmpassErr = $bdErr =  "";
$name = $email = $gender = $username = $password = $phone = $confirmpass = $bd = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = run_code($_POST["name"]);
  }
  
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = run_code($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = run_code($_POST["gender"]);
  }

  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = run_code($_POST["username"]);
  }

   if (empty($_POST["number"])) {
    $phoneErr = "Phone Number is required";
  } else {
    $phone = run_code($_POST["number"]);
    if (is_numeric($phone)) {
$phone= "";
}
else {
$phoneErr = " You did not enter numbers only. Please enter only numbers.(on number)";
}
  }



 if (empty($_POST["DOB"])) {
    $bdErr = "DOB is required";
  } else {
    $bd = run_code($_POST["DOB"]);
  }

}

  function run_code($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>







<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
</head>
<body>
     <form method="POST" >
		<br/>
		<table border ='1'   border="2" width="60%" >
			<tr>
				<td>
				<a href="homepage.php"><img src="CLOUDFUNDING.PNG" alt="Logo"></a>
				</td>
				<td align="right" >
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
						<legend><b>EDIT PROFILE</b></legend>
						<table>
                            <tr>
								<td>Name</td>
								<td>:</td>
								<td><input name="name" type="text" value="<?php echo $name;?>" ><span class="error"  > * <?php echo $nameErr;?></span></td>
							</tr>		
							
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><input name="email" type="email" value="<?php echo $email;?>" ><span class="error" > * <?php echo $emailErr;?></span></td>
						       
							</tr>						
							 <tr>
								<td>Number</td>
								<td>:</td>
								<td><input name="number" type="text" value="<?php echo $phone;?>" ><span class="error" > * <?php echo $phoneErr;?></span></td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td>	 
									<input name="gender" type="radio" >Male
									<input name="gender" type="radio" >Female
									<input name="gender" type="radio" >Other
								
								<span class="error"> * <?php echo $genderErr;?></span></td>
							</tr>
							
							<tr>
								<td>Date of Birth</td>
								<td>:</td>
								<td>	   
									    <input name="DOB" type="Date" size="1" value="<?php echo $bd;?>">
								<span class="error"> * <?php echo $bdErr;?></span></td>
							</tr>
					
							
						</table>	
						<hr/>
						
					<input type="submit" name= "submit" value="Submit">
					
				</fieldset>
				</tr>			
            
			</table>
				
    </form>		
</body>
</html
