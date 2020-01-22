
<?php
//declare variables PHP and set to  empty values
$cookie_name = 'User';
$cookie_value = "Juan Fandos";
//define your functions here
setcookie($cookie_name, $cookie_value, time() + (86400), "/"); // 86400s are 24h
//catching the action method and vars from request here
if($_SERVER["REQUEST_METHOD"]=="POST"){
  //asign value to variables here
  //call the functions you need here
  //write your code here
  if(!isset($_COOKIE[$cookie_name])) {
      echo "Cookie name '" . $cookie_name . "' is not set";
  } else {
      echo "Cookie '" . $cookie_name . "' is set<br>";
      echo "Value is: " . $_COOKIE[$cookie_name];
  }
  }
  ?>

<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <h2>Registration Form</h2>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

    First name:<p>
    <input type="text" name="firstname"> <p>
		Last name:<p>
    <input type="text" name="lastname"> <p>
   	User:<p>
		<input type="text" name="user"> <p>
    Password:<p>
    <input type="text" name="pass"> <p>

    <input type="submit" value="Submit"> <br><p>

    </form>
</body>
</html>
