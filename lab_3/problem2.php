<html>
<head>
<title>problem 2</title>
</head>
<body>
<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<label>Marks:</label>
<input type="number" name="number" placeholder="Enter your sub. marks"><br>
<input type="submit" name="submit"><br>
</form> 

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$num= $_POST['number'];

if ($num>=90) {

echo "GPA: A+";
}
elseif ($num>=80) {
echo "GPA: A";
}

elseif ($num>=70) {
echo "GPA: B";
}
elseif ($num>=60) {
echo "GPA: C";
}

elseif ($num<60) {
echo "Failed";
}



}


?>
</body>
</html>