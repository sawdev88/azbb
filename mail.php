<?php
  $email	= ($_POST['email']);
  $buying = (isset($_POST['buying']));
  $selling = (isset($_POST['selling']));
  $to	= "azbarbroker@gmail.com";
  $subject = "INFO REQUEST";

  if($selling && $buying) {
    $message = "$email is requesting information on buying and selling";
  } elseif ($buying) {
    $message = "$email is requesting information on buying";
  } elseif ($selling) {
    $message = "$email is requesting information on selling";
  } else {
    $message = "$email is requesting information";
  }


  $headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "X-Priority: 1\r\n";
	$headers .= "X-MSMail-Priority: High\r\n\r\n";

  mail($to, $subject, $message, $headers);
 ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta rel="icon" href="img/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=”description” content="Arizona Bar Brokers was created with one purpose in mind, to be the best bar brokers in Arizona.  Our focus is 100% directed towards the bar business.  We set the standard and make the market for bar properties and bar brokerage transactions.  We bring buyers and sellers together to efficiently complete transactions.">
  <title>Arizona Bar Broker</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/mailer.css">
</head>
<body>

<main class="mailer-content">
  <h2>Thank you</h2>
  <h3>Your request has been received</h3>
  <figure>
    <a href="index.html"><span class="glyphicon glyphicon-home"></span></a>
  </figure>
  <figcaption>
    <a href="index.html">Return Home</a>
  </figcaption>
  <br>
  <a href="tel:1-480-862-4064">(480)862-4064</span></p></a>
</main>

</body>
</html>
