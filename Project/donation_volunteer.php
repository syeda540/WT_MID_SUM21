<?php

$nameErr =  $genderErr = $amountErr = $cardErr = $bdErr =  "";
$name = $gender= $amount = $card = $bd = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = run_code($_POST["name"]);
  }

    
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = run_code($_POST["gender"]);
  }




   if (empty($_POST["card"])) {
    $cardErr = "Card Number is required";
  } else {
    $card = run_code($_POST["card"]);
    if (is_numeric($card)) {
$card= "";
}
else {
$cardErr = " You did not enter numbers only. Please enter only numbers.(on card)";
}
  }


     if (empty($_POST["amount"])) {
    $amountErr = "amount Number is required";
  } else {
    $amount = run_code($_POST["amount"]);
    if (is_numeric($amount)) {
$amount= "";
}
else {
$amountErr = " You did not enter numbers only. Please enter only numbers.(on amount)";
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
	<form  method="POST">
	<table border ='1' border="2" width="60%" >
			 <tr>	
				<td>

                 <a href="homepage.php"><img src="CLOUDFUNDING.PNG" alt="Logo"></a>



            </td>
       
            <td colspan='2'align="right">
			
                 <a href = "homepage.php" name="username" >
            
        </td>
		</tr>
		
		<tr>		
			<td>
			<b>Donation</b>
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
						<legend><b>Volunteer Donor</b></legend>
						<table>
						<tr>
								<td>Name</td>
								<td>:</td>
								<td><input name="name" type="text" value="<?php echo $name;?>"><span class="error"  >* <?php echo $nameErr;?></span></td>
							</tr>
							<td>Date of Birth</td>
								<td>:</td>
								<td>	   
								 <input name="DOB" type="date" size="1" value="<?php echo $bd;?>" ><span class="error" >* <?php echo $bdErr;?></span>
								</td>
							</tr>
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td>	 
									<input name="gender" type="radio" >Male
									<input name="gender" type="radio" >Female
									<input name="gender" type="radio" >Other
								
								<span class="error" >* <?php echo $genderErr;?></span></td>
							</tr>
                            <tr>
								<td>Amount</td>
								<td>:</td>
								<td><input name="amount" type="text"  value="<?php echo $amount;?>"><span class="error">* <?php echo $amountErr;?></span></td>
							</tr>		
							
							<tr>
								<td>Credit Card Number</td>
								<td>:</td>
								<td><input name="card" type="text" value="<?php echo $card;?>"> <span class="error"  >* <?php echo $cardErr;?></span></td>
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
