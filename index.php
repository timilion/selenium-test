<?php

 require_once './vendor/autoload.php';

 use Symfony\Component\Dotenv\Dotenv;

 $dotenv = new Dotenv();
 $dotenv->load(__DIR__ . '/.env');

// use Facebook\WebDriver\Chrome\ChromeOptions;
// use Facebook\WebDriver\Remote\RemoteWebDriver;
// use Facebook\WebDriver\Remote\DesiredCapabilities;

// $capabilities = DesiredCapabilities::chrome();
// $options = new ChromeOptions();
// $capabilities->setCapability(ChromeOptions::CAPABILITY, $options);
// $r = RemoteWebDriver::create('http://localhost:4444',$capabilities);
// $r->get('https://google.com');

// sleep(10);
// $r->quit();