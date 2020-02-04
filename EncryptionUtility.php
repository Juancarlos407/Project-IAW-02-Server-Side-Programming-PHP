
<?php
error_reporting(E_ALL ^ E_NOTICE);
if($_SERVER["REQUEST_METHOD"]=="POST"){

// input that needs to be Encrypted
$simple_string = $_POST['pass'];
$ciphering = "AES-128-CTR";
// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;
// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';
// Non-NULL key for encryption
$encryption_key = "Charizardx";
$encryption = openssl_encrypt($simple_string, $ciphering,
$encryption_key, $options, $encryption_iv);

// decryption
$decryption_iv = '1234567891011121';
$decryption_key = "Charizardx";
$decryption=openssl_decrypt ($_POST['dec'], $ciphering,
$decryption_key, $options, $decryption_iv);
}
?>
<style>
.div1 {
  width: 400px;
  height: 60px;
  border: 1px solid blue;
}
</style>
<div class="div1">
  <?php
  //encriptación de contraseñas
if( $_POST['pass'] != null or $_POST['dec'] != null ) {
  // Display the decrypted string
  echo "Original password: " . $simple_string."<br>";
  // Display the encrypted string
  echo "Encrypted password: " . $encryption ."<br>";
  // Display the decrypted string
  echo "Decrypted password: " . $decryption."<br>";
} else {
  echo "Introduce your password.";
}
?>
</div>


















<html>
<head>
        <meta charset="UTF-8"> <!--definimos la codificación de la página-->
        <meta name="Description" content="Author: Juan Carlos Ureña Fandos, Category: php"> <!--descripción de la página para el buscador-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Encryption Utility</title>
</head>
<body>
  <style>
  body
  { background-image: url('Marca de agua.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover; }
  </style>

    <h2>Encryption Utility</h2>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

       	Password Encrypter:<p>
    		<input type="text" name="pass" maxlength="20"> <p>
        Password Decrypter:<p>
        <input type="text" name="dec"> <p>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
