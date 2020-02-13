<?php
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_form ='friss368@hotmail.com';
    $email_subject ='From Rolling Benches Contact Form';
    $email_body = "Client Name:  $name .\n Email Address: $visitor_email .\n\n Question:\n\n $message";
    
    $to = "sean_tucker366@hotmail.com";
    
    mail($to,$email_subject,$email_body);

    header("Location: index.php?mailsend");
    }

?>