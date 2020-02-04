<?php

//declaración de variables
//debug certs almacenados en variables
$certificate = <<<EOF
-----BEGIN PUBLIC KEY-----
MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDXX/MsKEBLcLeKA1d/i7ufG1qs
qS97xFkIRSeX3TwmHic843AfVrzoh2pZUeOvK9ZLZQpHSM7DoHMYDGD1273+FvZX
Ypf5LiFtecfxko/Cku16zy6WAeCYVFjjlveBhwPmPCIk+qDRYeiIW05QE2XK+CuD
nJ7sxxXIJSSgD3Jo5wIDAQAB
-----END PUBLIC KEY-----
EOF;
$key = <<<EOF
-----BEGIN RSA PRIVATE KEY-----
MIIEogIBAAKCAQEA0llCeBjy18RylTdBih9GMUSZIC3GzeN0vQ9W8E3nwy2jdeUn
H3GBXWpMo3F43V68zM2Qz5epRNmlLSkY/PJUfJIC8Yc1VEokT52q87hH/XJ5eS8h
eZnjuSlPAGi8oZ3ImVbruzV7XmlD+QsCSxJW7tBv0dqJ71e1gAAisCXK2m7iyf/u
l6rT0Zz0ptYH4IZfwc/hQ9JcMg69uM+3bb4oBFsixMmEQwxKZsXk3YmO/YRjRbay
+6+79bSV/frW+lWhknyGSIJp2CJArYcOdbK1bXx1dRWpbNSExo7dWwuPC0Y7a5AE
eoZofieQPPBhXlp1hPgLYGat71pDqBjKLvF5GwIDAQABAoIBACPItYsSy3UzYT7L
OKYTrfBBuD8GKpTqBfkHvAWDa1MD15P92Mr7l0NaCxGfAy29qSa6LdFy/oPM9tGY
9TxKyV6rxD5sfwEI3+Z/bw6pIe4W5F1eTDaQnHHqehsatkRUQET9yXp+na8w/zRF
0C0PQKS95tfvcpm59RGCdGQ8+aZw+cIy/xez75W8IS/hagMxe7xYPjpkOkSCCEJU
zmbVq6AyWodASV0p4H9p8I+c0vO2hJ/ELJ167w6T+2/GlZg979rlyHoTW8jK2BbG
IRGaPo+c2GANXa686tdpbkPd6oJliXwBSNolxmXShvlveBbPFAJJACzCmbXNj9kH
6/K+SWkCgYEA7FNudcTkRPV8TzKhJ1AzDjw3VcnraYhY8IlNxbk7RVHLdkoUtwk/
mImeBlEfCoz9V+S/gRgeQ+1Vb/BCbS24+bN/+IGoNRFMRcOieFt6lQUpj7a9NeSo
IEclGgUiU7QR3xH73SB4GC3rgSPeHJhJZC5EJq5TzYjXTPGPpBD3zicCgYEA49wz
zfMDYIH8h4L65r/eJYIbLwpvgktgaYvhijO3qfZSWW+Y19jCBn55f65YOhPGQBHA
my0f+tVxFNZ/OupbrAIIzogxlCIYHNBawDhoHN/sB3/lSBAjifySNLyRlA62oA0w
wXvXVLVWMa3aXim3c9AlnLF1fHwcvwpOKSfdye0CgYBb1mBKq+T5V1yjek1d9bCh
i40FbZ5qOG43q2Ppvn3mBk9G/KroJlPsdy5NziB9/SRGj8JL7I92Xjihc4Cc5PPJ
NZQ5gklXtg0p30i39PTCDGuGScFlvCIJyRwF7JDWblezlE2INSH2Y4HtgX7DJfr/
T2t0jLJMYS0p3YWwgFeMaQKBgHUIe/8y6zAdc5QynSX5tGL1gXrW1FFK39k2RICU
cag1YTSYkhuDNJzbRxJifORPlcsAkzngooVWLb+zMCQVjUI6xUU3RKe+Hz5lccc6
8ZarGHL9qMkrqOVNudamZ+tw5zIrtDgcoIvcm8nmbrtgl94/MaJar2ph4O3qoByZ
Ylw9AoGAIdS79s0VKkj4VVXqK47ZcI7jGL4V4C8ujU8YcMNV88xwCoDg9ZIFprWA
P5p/cnvj6aHnqL58XiH0+bE0Lt3J+U6N6JelQQevgBHooMFh4FpDXcVda7xB3rK3
woqbi8fNhr827H2maxIZPtVG95/mvR4k5z1Jrdnr34ZUmtC6U5Q=
-----END RSA PRIVATE KEY-----
EOF;
$certificateFile = <<<EOF
-----BEGIN CERTIFICATE-----
MIIExDCCA6ygAwIBAgIJAK0JmDc/YXWsMA0GCSqGSIb3DQEBBQUAMIGcMQswCQYD
VQQGEwJJTjELMAkGA1UECBMCQVAxDDAKBgNVBAcTA0hZRDEZMBcGA1UEChMQUm9j
a3dlbGwgY29sbGluczEcMBoGA1UECxMTSW5kaWEgRGVzaWduIENlbnRlcjEOMAwG
A1UEAxMFSU1BQ1MxKTAnBgkqhkiG9w0BCQEWGmJyYWphbkBSb2Nrd2VsbGNvbGxp
bnMuY29tMB4XDTExMDYxNjE0MTQyM1oXDTEyMDYxNTE0MTQyM1owgZwxCzAJBgNV
BAYTAklOMQswCQYDVQQIEwJBUDEMMAoGA1UEBxMDSFlEMRkwFwYDVQQKExBSb2Nr
d2VsbCBjb2xsaW5zMRwwGgYDVQQLExNJbmRpYSBEZXNpZ24gQ2VudGVyMQ4wDAYD
VQQDEwVJTUFDUzEpMCcGCSqGSIb3DQEJARYaYnJhamFuQFJvY2t3ZWxsY29sbGlu
cy5jb20wggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDfjHgUAsbXQFkF
hqv8OTHSzuj+8SKGh49wth3UcH9Nk/YOug7ZvI+tnOcrCZdeG2Ot8Y19Wusf59Y7
q61jSbDWt+7u7P0ylWWcQfCE9IHSiJIaKAklMu2qGB8bFSPqDyVJuWSwcSXEb9C2
xJsabfgJr6mpfWjCOKd58wFprf0RF58pWHyBqBOiZ2U20PKhq8gPJo/pEpcnXTY0
x8bw8LZ3SrrIQZ5WntFKdB7McFKG9yFfEhUamTKOffQ2Y+SDEGVDj3eshF6+Fxgj
8plyg3tZPRLSHh5DR42HTc/35LA52BvjRMWYzrs4nf67gf652pgHh0tFMNMTMgZD
rpTkyts9AgMBAAGjggEFMIIBATAdBgNVHQ4EFgQUG0cLBjouoJPM8dQzKUQCZYNY
y8AwgdEGA1UdIwSByTCBxoAUG0cLBjouoJPM8dQzKUQCZYNYy8ChgaKkgZ8wgZwx
CzAJBgNVBAYTAklOMQswCQYDVQQIEwJBUDEMMAoGA1UEBxMDSFlEMRkwFwYDVQQK
ExBSb2Nrd2VsbCBjb2xsaW5zMRwwGgYDVQQLExNJbmRpYSBEZXNpZ24gQ2VudGVy
MQ4wDAYDVQQDEwVJTUFDUzEpMCcGCSqGSIb3DQEJARYaYnJhamFuQFJvY2t3ZWxs
Y29sbGlucy5jb22CCQCtCZg3P2F1rDAMBgNVHRMEBTADAQH/MA0GCSqGSIb3DQEB
BQUAA4IBAQCyYZxEzn7203no9TdhtKDWOFRwzYvY2kZppQ/EpzF+pzh8LdBOebr+
DLRXNh2NIFaEVV0brpQTI4eh6b5j7QyF2UmA6+44zmku9LzS9DQVKGLhIleB436K
ARoWRqxlEK7TF3TauQfaalGH88ZWoDjqqEP/5oWeQ6pr/RChkCHkBSgq6FfGGSLd
ktgFcF0S9U7Ybii/MD+tWMImK8EE3GGgs876yqX/DDhyfW8DfnNZyl35VF/80j/s
0Lj3F7Po1zsaRbQlhOK5rzRVQA2qnsa4IcQBuYqBWiB6XojPgu9PpRSL7ure7sj6
gRQT0OIU5vXzsmhjqKoZ+dBlh1FpSOX2
-----END CERTIFICATE-----
EOF;
//obtención de clave pública
$publicKey = openssl_pkey_get_public($certificate);

//obtención de clave privada
$privateKey = openssl_pkey_get_private($key);

//obtención de id de certificado
$certificateId = openssl_x509_read($certificateFile);

//encriptación de contraseñas con sha256
$hashPasswordEncryptionResult=password_hash("IEDIB_GS0376", CRYPT_SHA256)."</p>";

//creamos el archivo y realizamos la encriptación del mismo con sha1
file_put_contents('proves_data_encryption.odt', 'Password = IEDIB_GS0376');
$hashFileEncryptionResult=hash_file('SHA1', 'proves_data_encryption.odt')."</p>";

//salidas en pantalla
echo "This is a password: ".$hashPasswordEncryptionResult;
echo "This is a document: ".$hashFileEncryptionResult;

//print_r(openssl_pkey_get_details($publicKey));
//Verificamos que la variable contiene nuestra key con salida de error en caso contrario
if ($publicKey === false) {
    var_dump(openssl_error_string());
}else{
    var_dump($publicKey);
}

echo "</p>";

//print_r(openssl_pkey_get_details($privateKey));
//Verificamos que la variable contiene nuestra key con salida de error en caso contrario
if ($privateKey === false) {
    var_dump(openssl_error_string());
}else{
    var_dump($privateKey);
}

echo "</p>";

//Verificamos que la variable contiene nuestro Id con salida de error en caso contrario
if ($certificateId === false) {
    var_dump(openssl_error_string());
}else{
    var_dump($certificateId);
}
?>
<style>
body {
  background-image: url('Marca de agua.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
