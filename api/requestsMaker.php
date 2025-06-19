<?php

    function SendgridRequest($full_message, $subject, $email, $name) {
        require_once "auth.php";
        require_once "sendgrid-php/sendgrid-php.php";

        $from=new SendGrid\Email('IR CTOaaService', 'info@akita.cloud');
        $to=new SendGrid\Email(null, "rabiigor@gmail.com"); //'viktor.iv.svk@gmail.com'
        $content=new SendGrid\Content("text/plain", $full_message);
        $mail=new SendGrid\Mail($from, $subject, $to, $content);

        $apiKey=SGAuthKey();
        $sg=new \SendGrid($apiKey);

        //echo 'API Key: '. $apiKey;

        $response=$sg->client->mail()->send()->post($mail);
        http_response_code($response->statusCode());

        echo "<pre>Send grid response:<br/>";
        var_dump($response);
        echo "</pre>";
    }
?>
