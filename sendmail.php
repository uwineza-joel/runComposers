<?php
    require_once __DIR__."/vendor/autoload.php";
    $credentials = require_once __DIR__."/config/mail.php";
    
    // Create the Transport
    $transport = (new Swift_SmtpTransport($credentials['host'], $credentials['port'], $credentials['secure']))
    ->setUsername($credentials['user'])
    ->setPassword($credentials['key'])
    ;

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Mastering composer'))
    ->setFrom([$credentials['user'] => 'Joel pr.'])
    ->setTo(['joeluwineza35@gmail.com' => 'Joel'])
    ->setBody('Hey there, I have been mastering <b>composer staffs</b>!<br/> See you then.', 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message) > 0 ? 'Your email has been sent': 'Please retry again you email fail to be sent!';
    echo $result;
?>