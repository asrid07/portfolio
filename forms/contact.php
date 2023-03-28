<?php
// Replace contact@example.com with your real receiving email address
$to = 'asridc07@gmail.com';

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set the email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Compose the email body
$body = "
<p><strong>Name:</strong> $name</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Subject:</strong> $subject</p>
<p><strong>Message:</strong></p>
<p>$message</p>
";

// Send the email
if(mail($to, $subject, $body, $headers)) {
  echo "Email sent successfully!";
} else {
  echo "An error occurred. Please try again later.";
}
?>