<?php
// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'Jordancouch18@gmail.com';

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Send email using your preferred method or library
  // Here's an example using the built-in mail function
  $to = $receiving_email_address;
  $headers = "From: $name <$email>" . "\r\n";
  $body = "Subject: $subject\n\n$message";
  $success = mail($to, $subject, $body, $headers);

  if ($success) {
    echo "success";
  } else {
    echo "error";
  }
} else {
  echo "error";
}
?>
