<?
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$field = $_POST['field'];
$message = $_POST['message'];
$email_from =''; //domain name //
$email_subject ='';
$email_body = "User name: $name.\n".
                "User Email: $visitor_email.\n".
                "Field : $field.\n".
                    "User Message: $message.\n";

$to = ''; //receivers email//
$headers = "From: $email_from \r\n";
$headers .= "Reply=TO: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>