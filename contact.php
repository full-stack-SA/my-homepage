<?php
if (isset($_POST['mail']) && !empty($_POST['mail'])) {
  $name = "New contact request from: $_POST['fullname']";
  $email = "Email address: $_POST['mail']";
  $character = $_POST['character'];
//   $headers = 'From: info@website.com' . "\r\n" .
//              'Reply-To: ' . $_POST['email']. "\r\n" .
//              'X-Mailer: PHP/' . phpversion();

  mail('shaked.peretz@gmail.com', $name, $character, $email);

  die('Thank you for your email');
}