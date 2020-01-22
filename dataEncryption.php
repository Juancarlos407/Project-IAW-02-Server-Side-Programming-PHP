<?php

//declaración de variables faltan los certificados
$certificate=[''];
$key=[''];
$certificateFile=[''];

//obtención de clave pública
$publicKey= openssl_pkey_get_public( mixed $certificate ) : resource;
//obtención de clave privada
$privateKey= openssl_pkey_get_private( mixed $key ) : resource;
//obtención de id de certificado
$certificateId= openssl_x509_read( mixed $x509certdata ) : resource;

//encriptación de contraseñas con sha256
$hashPasswordEncryptionResult=password_hash("IEDIB_GS0376", CRYPT_SHA256)."</p>";
//encriptación de archivos con sha1
file_put_contents('proves_data_encryption.odt', 'Password = IEDIB_GS0376');
$hashFileEncryptionResult=hash_file('SHA1', 'proves_data_encryption.odt')."</p>";
//salidas en pantalla
echo $hashPasswordEncryptionResult;
echo $hashFileEncryptionResult;

?>
