<?php
require 'vendor/autoload.php';

$email = new \SendGrid\Mail\Mail();
$email->setFrom("contato@mxtheuz.com.br", "Mxtheuz");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("mategame2402@gmail.com", "Henrique Viadinho");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
// YOUR_SENDGRID_APIKEY
$sendgrid = new \SendGrid("");
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}
