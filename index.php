<?php
require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587,'TLS'))
  ->setUsername('admin@gmail.com')
  ->setPassword('password')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);
// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setSubject('Your subject')
    ->setFrom(array('monpobon70@gmail.com' => 'Web Master'))
    ->setTo(array('monirulislamccr@gmail.com'))
    ->setBody('Here is the message body')
    ->attach(Swift_Attachment::fromPath('index.php'));

// Send the message
$result = $mailer->send($message);



?>

<!DOCTYPE html>
<html>
<head>
	<title> Mail Sender with attachement</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<form>
	 <div class="form-group">
	    <label for="exampleFormControlInput1">Email address</label>
	    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlFile1">Example file input</label>
	    <input type="file" class="form-control-file" id="exampleFormControlFile1">
	  </div>
	</form>
</body>
</html>