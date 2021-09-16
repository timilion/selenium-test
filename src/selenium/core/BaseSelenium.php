<?php

namespace app\selenium\core;

use Facebook\WebDriver\WebDriverBy;


abstract class BaseSelenium
{
    protected $driver;

    public function getDriver()
    {
        return $this->driver;
    }

    public function getUrl(string $url): self
    {
        $this->driver->get($url);
        return $this;
    }

    public function close(): self
    {
        $this->driver->quit();
        return $this;
    }

    public function querySelector(string $selector)
    {
        try {
            return $this->driver->findElement(WebDriverBy::cssSelector($selector));
        } catch (\Exception $e) {
            return null;
        }
    }
}
