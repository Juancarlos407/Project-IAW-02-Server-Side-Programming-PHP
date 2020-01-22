<?php
// Start the session
session_start();
?>
<?php
//declare variables PHP and set to  empty values

//define your functions here

//catching the action method and vars from request here
if($_SERVER["REQUEST_METHOD"]=="POST"){
   //asign value to variables here
   //call the functions you need here
   //write your code here

// material para trabajar
$_SESSION["username"] = "user";
$_SESSION["password"] = "pass";
echo "username is " . $_SESSION["username"] . ".<br>";
echo "password is " . $_SESSION["password"] . ".<br>";
echo "Session variables are set.<br>";
echo "Session variables are not set.<br>";

// remove all session variables
session_unset();

// destroy the session
session_destroy();

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


        <input type="submit" value="Submit">

    </form>
</body>
</html>
