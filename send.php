
<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
        <style>
            *{
                padding:0;
                margin: 0;
            }
            body{
                width: 100vw;
                height: 100vh;
            }
            .wyslano{
                display: flex;
                align-items: center;
                align-content: center;
                justify-content: center;
                flex-wrap: wrap;

                width: 100vw;
                height: 100vh;
                background-color: rgba(243, 180, 180, 0.7);
            }
            .info{
                display: flex;
                align-items: center;
                align-content: center;
                justify-content: center;
                flex-wrap: wrap;
                color: #303847;
                flex-basis: 100%;
                font-size: 1.8em;
            }
            .span{
                flex-basis: 100%;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <?php
function sanitize_my_email($field)
{
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

if (isset($_GET['send'])) {
    $to_email = 'Iwona.Cypryanska@gmail.com';
    $subject = $_GET['subject'];
    $message = $_GET['message'];
    $from_mail = $_GET['mail'];

    if ($subject == "" || $message == "" || $from_mail == "") {
    } else {

        $additional_headers = array(
            'From' => 'Strona - Iwona Cypryanska',
            'Reply-To' => $from_mail,
            'X-Mailer' => 'PHP/' . phpversion()
        );
        //check if the email address is invalid $secure_check
        $secure_check = sanitize_my_email($to_email);
        $success =  mail($to_email, $subject, $message, $additional_headers);
        // $success = true;
        if ($secure_check == false) {
            echo "Invalid input";
        } else { //send email 
            if($success){
            echo '<div class="wyslano">';
            echo '<div class="info">';
            echo '<div class="span" style="justify-content: center;">Wiadomość została wysłana.</div>';
            echo '<br />';
            echo '<div class="span" style="justify-content: center;">Kliknij <a href="index.php#Oferta" style="color:red;">TUTAJ</a>, aby wrócić.</div>';
            echo '</div>';
            echo '</div>';
            }
            else{
                $errorMessage = error_get_last()['message'];
                echo '<div class="wyslano">';
                echo '<div class="info">';
                echo '<div class="span" style="justify-content: center;">Wiadomość nie została wysłana.</div>';
                echo '<br />';
                echo '<div class="span">'.$errorMessage .'</div>';
                echo '</div>';
                echo '</div>';
            }
        }
    }
}
?>
    </body>
</html>
