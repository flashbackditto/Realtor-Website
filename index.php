<<<<<<< HEAD
<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['comments'];
  $subscribe = $_POST['subscribe'];

$mailTo = "sellwithmoms@yahoo.com"; //cant sent to gmail
$headers = "From: $mailFrom";
$txt = "You have received an email from $name.\n\n $message\n\n Phone number: $phone \n\n Subscribe: $subscribe";

  mail($mailTo, $subject, $txt, $headers, $subscribe );
  header("Location: index.php?mailsend");
  echo "Thank You!";
};
?>
=======
<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['comments'];
  $subscribe = $_POST['subscribe'];

$mailTo = "sellwithmoms@yahoo.com"; //cant sent to gmail
$headers = "From: $mailFrom";
$txt = "You have received an email from $name.\n\n $message\n\n Phone number: $phone \n\n Subscribe: $subscribe";

  mail($mailTo, $subject, $txt, $headers, $subscribe );
  header("Location: index.html");
  echo "Thank You!";
};
?>
>>>>>>> 4d1f110aa6b224664f11bfd106835b946ea9df23
