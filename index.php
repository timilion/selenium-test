<?php

use app\selenium\SeleniumChrome;

 require_once './vendor/autoload.php';

 use Symfony\Component\Dotenv\Dotenv;

 $dotenv = new Dotenv();
 $dotenv->load(__DIR__ . '/.env');

$selenium = new SeleniumChrome($_ENV['WEBDRAIVER_URL']);
$selenium->getUrl($_ENV['ABYRGA_URL']);

if($login = $selenium->querySelector('#loginform-email')) {
    $login->sendKeys($_ENV['ABYRGA_EMAIL']);
}

if($password = $selenium->querySelector('#loginform-password')) {
    $password->sendKeys($_ENV['ABYRGA_PASSWORD']);
}

if($button = $selenium->querySelector('[name=login-button]')) {
    $button->click();
}
sleep(2);

$selenium->getUrl('https://iw2.abyrga.ru/manage/source/all?Source[channel]=instdir&Source[name]=iviv121234');