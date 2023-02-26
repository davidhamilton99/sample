<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $guests = $_POST['guests'];
  $comments = $_POST['comments'];

  // Create the email message
  $to = 'david.nash.hamilton@gmail.com'; // Replace with your email address
  $subject = 'New Booking';
  $message = "Name: $name\nEmail: $email\nPhone: $phone\nDate: $date\nTime: $time\nGuests: $guests\nComments: $comments";

  // Send the email
  $headers = "From: $email\r\n";
  if (mail($to, $subject, $message, $headers)) {
    echo 'Thank you for your booking!';
  } else {
    echo 'Sorry, there was a problem sending your booking. Please try again later.';
  }
}
?>
