<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'r.aneddame@gmail.com';
  $subject = 'New Contact Form Submission';
  $message = "Name: $name\n\nEmail: $email\n\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo '<p>Your message has been sent successfully.</p>';
  } else {
    echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
  }
}
?>
