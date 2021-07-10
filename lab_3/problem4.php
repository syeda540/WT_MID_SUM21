<html>
<head>
<title>problem 4</title>
</head>
<body>
<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<label> Name: </label>
<input type= "text" name="name" placeholder="Name"><br>
<input type="submit" name="submit"><br>
</form> 

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$name= $_POST['name'];


if ($name=="raju") {

echo "hello";
}
elseif ($name=="mina") {
echo "hello";
}

elseif ($name=="mithu") {
echo "hello";
}

else
 {
echo "you are not recognized";
}



}


?>
</body>
</html>