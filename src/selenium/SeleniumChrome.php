<?php

namespace app\selenium;

use app\selenium\core\BaseSelenium;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;

class SeleniumChrome extends BaseSelenium
{
   

    public function __construct(string $host)
    {
        $capabilities = DesiredCapabilities::chrome();
        $options = new ChromeOptions();
        $capabilities->setCapability(ChromeOptions::CAPABILITY, $options);
        $this->driver = RemoteWebDriver::create($host, $capabilities);
    }
   
}
