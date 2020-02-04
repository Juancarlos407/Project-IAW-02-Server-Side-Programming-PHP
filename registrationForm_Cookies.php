<?php
error_reporting(E_ALL ^ E_NOTICE);

//declare variables PHP and set to  empty values
$cookie_name = "user";
$cookie_value = $_POST['firstname'];
$cookie_value2 = $_POST['lastname'];

//You cannot read the cookie expiry time, because browsers do not send it to your server, only the value of cookies.
$CookieInfo = session_get_cookie_params();

//establecemos las cookies y el tiempo que perdurarán
setcookie($cookie_name, $cookie_value, $cookie_value2, time() + (86400), "/"); // 86400s are 24h

//catching the action method and vars from request here
if($_SERVER["REQUEST_METHOD"]=="POST"){

  //creamos la condición para mostrar en pantalla si se han establecido o no las cookies
  if( $cookie_value != null and $cookie_value2 != null ) {
      echo "Cookie ".$cookie_name . " with value ". $cookie_value . " ". $cookie_value2 ." is set, it will last 24h. <br>";
  } else {
      echo "Cookie is not set, fill first name and last name to try.<br>";
  }
  }
  ?>

<html>
<head>
	<title>Registration Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
  <style>
  body {
    background-image: url('Marca de agua.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
  </style>

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
