
<html>
<head>
	<title>task 4</title>
</head>
<body aling="center">

<?php

$nameErr = $emailErr = $genderErr = $usernameErr = $passwordErr = $phoneErr = $addressErr = $bdErr = $wnErr = $bioErr = $codeErr = $cityErr = $zipErr= $stateErr = "";
$name = $email = $gender = $username = $password = $phone = $address = $bd = $wn = $bio = $code = $city= $zip = $state ="";

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


 if (empty($_POST["state"])) {
    $stateErr = "state is required";
  } else {
    $state = run_code($_POST["state"]);
  }


   if (empty($_POST["phone"])) {
    $phoneErr = "Phone Number is required";
  } else {
    $phone = run_code($_POST["phone"]);
    if (is_numeric($phone)) {
$phone= "";
}
else {
$phoneErr = " You did not enter numbers only. Please enter only numbers.(on number)";
}
  }

 if (empty($_POST["code"])) {
    $codeErr = "code Number is required";
  } else {
    $code = run_code($_POST["code"]);
    if (is_numeric($code)) {
$code= "";
}
else {
$codeErr = " You did not enter numbers only. Please enter only numbers.(on code)";
}
  }

 if (empty($_POST["city"])) {
    $cityErr = "city is required";
  } else {
    $city = run_code($_POST["city"]);
  }




   if (empty($_POST["zip"])) {
    $zipErr = "zipcode Number is required";
  } else {
    $zip = run_code($_POST["zip"]);
    if (is_numeric($zip)) {
$zip= "";
}
else {
$zipErr = " You did not enter numbers only. Please enter only numbers.(on zip)";
}
  }


 if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = run_code($_POST["address"]);
  }

   if (empty($_POST["wn"])) {
    $wnErr = "checkbox is required";
  } else {
    $wn = run_code($_POST["wn"]);
  }

   if (empty($_POST["bio"])) {
    $bioErr = "Bio is required";
  } else {
    $bio = run_code($_POST["bio"]);
  }




}

function run_code($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form  method="post" action="task_4.php">
 
		<fieldset style="width: 200px;">

			 <legend><b>Club Member Registration</b></legend>
			 <table width="500px" align="center">
			 	<tr>
			 		<td>Name</td>
			 		<td>:</td>
			 		<td><input type="text" name="name"></td><span class="error">* <?php echo $nameErr;?></span>	
                </tr> 

               	<tr>
			 		<td>Username</td>
			 		<td>:</td>
			 		<td><input type="text" name="username" minlength="6"></td>	<span class="error">* <?php echo $usernameErr;?></span>
                </tr> 


               	<tr>
			 		<td>Password</td>
			 		<td>:</td>
			 		<td><input type="password" name="password"></td><span class="error">* <?php echo $passwordErr;?></span>	
                </tr> 


               	<tr>
			 		<td >Confirm Password</td>
			 		<td>:</td>
			 		<td><input type="password" name="password"></td>	
                </tr> 

                <tr>
			 		<td >Email</td>
			 		<td>:</td>
			 		<td><input type="text" name="email"></td><span class="error">* <?php echo $emailErr;?></span>	
                </tr> 

                <tr>
			 		<td >Phone</td>
			 		<td>:</td>
			 		<td><input type="code" name="code" maxlength="4" placeholder="code" ></td><span class="error">* <?php echo $codeErr;?></span>
			 		<td>-</td>
			 		<td align="left"><input type="phone" name="phone" maxlength="11"  placeholder="Number"></td><span class="error">* <?php echo $phoneErr;?></span>	
                </tr> 

                <tr>
			 		<td >Address</td>
			 		<td>:</td>
			 		<td><input type="text" name="address" placeholder="address"></td><span class="error">* <?php echo $addressErr;?></span>	
                </tr> 

                <tr>
			 		<td><input type="text" name="city" placeholder="City"></td>	<span class="error">* <?php echo $cityErr;?></span>
			 		<td>-</td>	
			 		<td><input type="text" name="state" placeholder="State"></td> <span class="error">* <?php echo $stateErr;?></span>
                </tr> 

                  <tr>
			 		<td><input type="text" name="zip" placeholder="Postal/Zip code"></td>  <span class="error">* <?php echo $zipErr;?></span>
                  </tr> 




                  <tr>
                    <td >Birth Date</td>
			 	    <td>:</td>

			 	    <td colspan="3">
			 	    	<select>
			 	    		<option>date</option>
   							<option>1</option>
   							<option>2</option>
   							<option>3</option>
   							<option>4</option>
   							<option>5</option>
   							<option>6</option>
   							<option>7</option>
   							<option>8</option>
   							<option>9</option>
   							<option>10</option>
   							<option>11</option>
   							<option>12</option>
   							<option>13</option>
   							<option>14</option>
  							<option>15</option>
   							<option>16</option>
   							<option>17</option>
   							<option>18</option>
   							<option>19</option>
   							<option>20</option>
   							<option>21</option>
   							<option>22</option>
   							<option>23</option>
   							<option>24</option>
   							<option>25</option>
   							<option>26</option>
   							<option>27</option>
   							<option>28</option>
   							<option>29</option>
   							<option>30</option>
   							<option>31</option>
			 	    	</select>
			 	    	-
                        <select>
			 	    		<option>Month</option>
                    		<option>Jan</option>
                    		<option>Feb</option>
                    		<option>Mar</option>
                    		<option>Apr</option>
                    		<option>May</option>
                    		<option>Jun</option>
                    		<option>Jul</option>
                    		<option>Aug</option>
                    		<option>Sep</option>
                    		<option>Oct</option>
                    		<option>Nov</option>
                    		<option>Dec</option>
			 	    	</select>
			 	    	-
			 	    	<select>
                            <option>year</option>
                    	    <option>1970</option>
                    	    <option>1971</option>
                    	    <option>1972</option>
                    	    <option>1973</option>
                    	    <option>1974</option>
                    	    <option>1975</option>
                    	    <option>1976</option>
                    	    <option>1977</option>
                            <option>1978</option>
                            <option>1979</option>
                    	    <option>1980</option>
                            <option>1981</option>
                            <option>1982</option>
                            <option>1982</option>
                            <option>1983</option>
                            <option>1984</option>
                            <option>1985</option>
                            <option>1986</option>
                            <option>1987</option>
                            <option>1988</option>
                            <option>1989</option>
                            <option>1990</option>
                            <option>1991</option>
                            <option>1992</option>
                            <option>1993</option>
                            <option>1994</option>
                            <option>1995</option>
                            <option>1996</option>
                            <option>1997</option>
                            <option>1998</option>
 			    			<option>1999</option>
   			    			<option>2000</option>
  			    			<option>2001</option>
   			    			<option>2002</option>
  			    			<option>2003</option>
   			    			<option>2004</option>
   			    			<option>2005</option>
   			    			<option>2006</option>
   			    			<option>2007</option>
   			    			<option>2008</option>
   			    			<option>2009</option>
   			    			<option>2010</option>
   			    			<option>2011</option>
   			    			<option>2012</option>
   			    			<option>2013</option>
   		           		 	<option>2014</option>
   			    			<option>2015</option>
   			    			<option>2016</option>
   			    			<option>2017</option>
   			    			<option>2018</option>
   			    			<option>2019</option>
   			    			<option>2020</option>
   			    			<option>2021</option>
			 	    	</select>
			 	    </td>
                </tr><span class="error">* <?php echo $bdErr;?></span>

                  <tr>
                    <td >Gender</td>
			 		<td>:</td>

			 		<td><input type="radio" id="male" name="gender" value="male">Male <input type="radio" id="Female" name="gender" value="male">Female	</td><span class="error">* <?php echo $genderErr;?></span>
                  </tr>

                 <tr>
                 <td> Where did you hear about us?</td>
                 <td >:</td>
                 <td colspan="4">
                 <input type="checkbox" name="wn" > A Friend or Colleague<br>
                 <input type="checkbox" name="wn" > Google<br>
                 <input type="checkbox" name="wn">Bold Post<br>
                 <input type="checkbox" name="wn">News Article</td>
                  </tr><span class="error">* <?php echo $wnErr;?></span>

                <tr>
                    <td >Bio</td>
			 		<td>:</td>
			 	    <td><textarea name="bio"></textarea></td>
					</tr><span class="error">* <?php echo $bioErr;?></span>
                  

                  <tr>
                  	<td align="right">
                  		
                     <button> register </button>

                  	</td>
                  </tr>



			 </table>

		</fieldset>
	</form>
	

	<?php
echo "<h1>Your Input:</h1>";
echo ' Name : '.$name;
echo "<br>";
echo ' email : '.$email;
echo "<br>";
echo ' Userame : '.$username;
echo "<br>";
echo ' password : '.$password;
echo "<br>";
echo ' gender : '.$gender;
echo "<br>";
echo ' phone : '.$phone;
echo "<br>";
echo ' Phone code : '.$code;
echo "<br>";
echo ' city : '.$city;
echo "<br>";
echo ' zipCode : '.$zip;
echo "<br>";
echo ' state : '.$state;
echo "<br>";
echo ' address : '.$address;
echo "<br>";
echo ' bio : '.$bio;
echo "<br>";
echo ' wn : '.$wn;


?>


</body>
</html>