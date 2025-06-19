<?php
    //phpinfo();
    //exit;
    try
    {
        echo "Sending...";
        $data = json_decode(file_get_contents('php://input'), true);
        //var_dump($data);
        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];
        require_once('contactusBase.php');
        contactusBase($name, $email, $message);
        echo "Sent successfully";
    }
    catch(Exception $ex)
    {
        echo "<pre>Response error:<br/>";
        var_dump($ex);
        echo "</pre>";
        http_response_code(500);
    }
?>
