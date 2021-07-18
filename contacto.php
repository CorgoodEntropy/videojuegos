<?php
 
if($_POST) {
    $user_name = "";
    $user_mail = "";
    $email_title = "correo desde mi web";
    $user_message = "";
    $recipient = "mac.cuezzzo@gmail.com";
     
    if(isset($_POST['user_name'])) {
      $user_name = filter_var($_POST['user_name'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['user_mail'])) {
        $user_mail = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['user_mail']);
        $user_mail = filter_var($user_mail, FILTER_VALIDATE_EMAIL);
    }
     
     
    if(isset($_POST['user_message'])) {
        $user_message = htmlspecialchars($_POST['user_message']);
    }
     
    
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $user_mail . "\r\n";
     
    if(mail($recipient, $email_title, $user_message, $headers)) {
        echo "<p>Thank you for contacting us, $userr_name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
     
} else {
    echo '<p>Something went wrong</p>';
}
 
?>