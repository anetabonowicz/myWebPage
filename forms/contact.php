<?php 

$message_sent = false;

    if(isset($_POST['name']) && $_POST['name'] != ""){

        if(isset($_POST['email']) && $_POST['email'] != "") {

            if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
                
                $name = $_POST['name'];
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];

                $formcontent="From: $name \n Message: $message";
                $recipient = "a.bonowicz@yahoo.com";

                $mailheader = "From: $email \r\n";

                $message_sent = true;
            }
        }
    }

    if($message_sent) {

        mail($recipient, $subject, $formcontent, $mailheader);

        echo "OK";

    } else {

        echo "Error, Please fill in all required fields.";
    }

    
?>