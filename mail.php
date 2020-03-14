<html>
  <head>
    <title>e-mail</title>
  </head>
  <body>
  
   <?php
$to      = 'nehshwreminder@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: nehshwreminder@gmail.com' . "\r\n" .
    'Reply-To: nehshwreminder@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 

  </body>
</html>
