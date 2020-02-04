<?php
error_reporting(E_ALL ^ E_NOTICE);
//Start the session
session_start();
//catching the action method and vars from request here
if($_SERVER["REQUEST_METHOD"]=="POST"){

// variables de sesión con los valores introducidos en el cuestionario
$_SESSION["username"] = $_POST['user'];
$_SESSION["password"] = $_POST['pass'];

//condiciones de salida en pantalla para cuando se establecen las variables de sesión o se encuentran vacias
if( $_SESSION["username"] != null) {
    echo "Session username is " . $_SESSION["username"] . "<br>";
} else {
    echo "Username session variable is not set <br>";
}

if( $_SESSION["password"] != null) {
  echo "Session password is " . $_SESSION["password"] . "<br>";
} else {
  echo "Password session variable is not set <br>";
}
}

//funcion para destruir la sesión
function remove_destroy_session() {
// remove all session variables
session_unset();
// destroy the session
session_destroy();
}
//llamamos a la funcion remove_destroy_session
remove_destroy_session();
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

        <input type="submit" value="Submit">
    </form>

</body>
</html>
