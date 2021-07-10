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

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = run_code($_POST["password"]);
  }


 if (empty($_POST["confirmpass"])) {
    $confirmpassErr = "confirmpass is required";
  } else {
    $confirmpass = run_code($_POST["confirmpass"]);
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
<html >
<head>
	<title>REGISTRATION</title>
</head>
<body>
	<fieldset>
		<legend><b>REGISTRATION</b></legend>
		<form  method="POST">
			<br/>
			<table width="100%"  cellspacing="0">
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><input name="name" type="text" value="<?php echo $name;?>" >  <span class="error"> *<?php echo $nameErr;?></span></td>
					
				</tr>	
				<tr>
					<td>UserName</td>
					<td>:</td>
					<td><input name="username" type="text" value="<?php echo $username;?>"> <span class="error"> *<?php echo $usernameErr;?></span></td>
					
				</tr>			
				<tr><td colspan="4"></td></tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td>
						<input name="email" type="text" value="<?php echo $email;?>" ><span class="error"> *<?php echo $emailErr;?></span>	
						
					</td>
					
				</tr>		
				<tr><td colspan="4"></td></tr>
				<tr>
					<td>Number</td>
					<td>:</td>
					<td>
						<input name="number" type="text" value="<?php echo $phone;?>"> 
					<span class="error"> *<?php echo $phoneErr;?></span></td>
					</tr>	

				<tr><td colspan="4"></td></tr>
				
				<tr>
								<td>Gender</td>
								<td>:</td>
								<td>	 
									<input name="gender" type="radio"  >Male
									<input name="gender" type="radio" >Female
									<input name="gender" type="radio" >Other

								<span class="error"> *<?php echo $genderErr;?></span></td>
							</tr>		
				<tr><td colspan="4"></td></tr>
				<tr>
					<td>DOB</td>
					<td>:</td>
					<td><input name="DOB" type="date" size="1" value="<?php echo $bd;?>" ><span class="error"> *<?php echo $bdErr;?></span> </td>
				</tr>		
				<tr><td colspan="4"></td></tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input name="password" type="password" value="<?php echo $password;?>" ><span class="error"> *<?php echo $passwordErr;?></span></td> 
					<td></td>
				</tr>		
				<tr><td colspan="4"></td></tr>
				<tr>
					<td>Confirm Password</td>
					<td>:</td>
					<td><input name="confirmpass" type="password" value="<?php echo $confirmpass;?>" ><span class="error"> *<?php echo $confirmpassErr;?></span></td>
					<td></td>
				</tr>		
				
		
			</table>
			<input type="submit" name= "submit" value="Submit">
			<input type="reset">
		</form>
	</fieldset>
</body>
</html>