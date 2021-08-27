<?php
if(isset($_POST['submit'])){
    $to = "lupkerconsulting@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Inquiry for SingularAI";
    $message = $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Email Sent, We Will Contact You Shortly. Thanks!";
}
?>
