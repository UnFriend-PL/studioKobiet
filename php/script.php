<?php
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
if(isset($_GET['send']) ){
    $to_email = 'szymonecki1233@gmail.com';
    $subject = $_GET['subject'];
    $message = $_GET['message'];
    $from_mail = $_GET['mail'];

    $headers = 'From: noreply @ KangurIT.pl'.$_GET['mail'];
 
    //check if the email address is invalid $secure_check
    $secure_check = sanitize_my_email($to_email);
    if ($secure_check == false) {
        echo "Invalid input";
    } else { //send email 
        mail($to_email, $subject, $message, $headers);
    }
}
?>