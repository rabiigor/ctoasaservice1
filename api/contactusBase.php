<?php
    function contactusBase($name, $email, $message)
    {
        $subject = "Contact Us request from CTO as a Service";
        $full_message = $message."\n\nName: ".$name."\nEmail: ".$email;
        require_once("requestsMaker.php");
        SendgridRequest($full_message, $subject, $email, $name);
    }
?>
