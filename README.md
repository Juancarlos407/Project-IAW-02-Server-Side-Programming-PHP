# Projecte-IAW-02-Server-Side-Programming-PHP

Este proyecto esta compuesto por cuatro partes distintas:

## 1- Exception management:

- Add the coding needed to convert euros into pounds.
- Add a Exception management, when a user types a rate exchange = 0 Catch it and show the exception message with code in the screen.
- Add a text area control in the form where showing an explanation about the error. 
- The result of the convertion calculated has to be shown in the input text named amount_in_pounds

## 2- Cookies management:

Added the coding needed to set cookies as follows:
- cookie name: user
- cookie value: firstname value plus lastname value separated by a space
- cookie expire time is: 24 hours

Added the coding needed to show in the screen:
- the name, value and expire time of the cookie in case the cookie is set
- and the message "cookie is not set" when the cookie hasn't been set yet.

## 3- Session variables management:

Add the coding needed to set a session variables as follows:
- session variable name user with the value typed in the user input text
- session variable name password with the value typed in the pass input text

Add the coding needed to show in the screen:
- the name and value of the two session variables in case those vars are set.
- and the message "session vars are not set" when those vars haven't been set yet.

Develop a function called remove_destroy_session and implement the code to:
- remove all session variables. Tip:
- destroy all session variables

After coding the question 6.1, call the function remove_destroy_session

## 4- Data encryption with PHP:

Add the needed code to dataEncryption.php file to:
- encrypt the following password = IEDIB_GS0376
- using the function PHP hash with the algorithm sha256,
- show the encrypted result in the screen

Add the needed code to dataEncryption.php file to:
- encrypt the provided file proves_data_encryption.odt
- using the function PHP hash_file with the algorithm sha1,
- show the encrypted result in the screen

Write the code you need to:
- extract the public key form a certificate saved in $certificate variable
- save the public key content in the variable $publicKey

Write the code you need to:
- extract the private key form a certificate saved in $certificate variable
- save the private key content in the variable $privateKey

Write the code you need to:
- Extract de identification from a certificate file, supplied by x509certdata, saved in the variable $certificateFile
- Save that id content in the variable $certificateId

## Para hacer comprobaciones:

Puedes Probar la web [Aquí]()
