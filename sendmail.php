<?php
    require_once __DIR__."/vendor/autoload.php";
    $data = [
        'host'=>'smtp.gmail.com',
        'port'=>'587',
        'user'=>'gisayvan53@gmail.com',
        'key'=>'53gisayvan',
        'secure'=>'tls'
    ];
    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', '587'))
    ->setUsername('gisayvan53@gmail.com')
    ->setPassword('53gisayvan')
    ;

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Mastering composer'))
    ->setFrom(['gisayvan53@gmail.com' => 'Joel pr.'])
    ->setTo(['mnanibosco@gmail.com', 'joeluwineza35@gmail.com' => 'Joel'])
    ->setBody('Hey there, I have been mastering <b>composer staffs</b>!', 'text/html')
    ;

    // Send the message
    $result = $mailer->send($message);
    echo $result;
?>