<?php
if (isset($_POST['submit'])) {
    $to = "lupkerconsulting@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Inquiry for SingularAI";
    $message = $_POST['message'];
    mail($to, $subject, $message, $from);
    echo "Email Sent, We Will Contact You Shortly. Thanks!";
}
?>
