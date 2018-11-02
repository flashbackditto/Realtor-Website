<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['email'];
  $phoneNumber = $_POST['phone'];
  $message = $_POST['comments'];
  $subscribe = $_POST['subscribe'];

$mailTo = "amelia@yahoo.com"; //cant sent to gmail
$headers = "From: ".$mailFrom;
$txt = "You have received an email from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers, $phoneNumber, $subscribe );
  header("Location: index.php?mailsend");
}
