<?php
error_reporting(E_ALL ^ E_NOTICE);
//declaración de variables
$amount_in_euros=$amount_in_pounds=0;
$rate=0.89; //variable ya inicializada
$converted_amount = 0;
$controlmessage = "error";
//catching the action method and vars from request here
if($_SERVER["REQUEST_METHOD"]=="POST"){

//conversor
function convert_euros_to_pounds($param_euros, $param_rate){

//condición por la cual salta la excepción
if($_POST['rate']==0){
throw new Exception('rate is not correct, it must be greater than zero.');
}
return $converted_amount;
}

//creamos el text area donde mostramos el mensaje de excepción al hacer submit
?>
<p><textarea name="control" cols="40" rows="5">
<?php
//capturamos la excepción
try{
$amount_in_pounds = convert_euros_to_pounds($amount_in_euros, $rate);
}
catch (Exception $e) {
echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
}
?>
</textarea></p>


<html>
<head>
<title>Currency converter</title>
<meta http-equiv="Content-Type" content="text/html;charset-UTF-8">
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
  
<h2>Currency converter</h2>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
EUROS:
<input type="text" name="amount_in_euros" value="<?php echo $amount_in_euros;?>"><br><p>
EXCHANGE RATE:
<input type="text" name="rate" value="<?php echo $rate;?>"><br><p>
POUNDS:
<input type="text" name="amount_in_pounds" value="<?php echo (($_POST['amount_in_euros'])*$rate);?>"><br><p>

<input type="submit" value="Submit"><p>

</form>
</body>
</html>
