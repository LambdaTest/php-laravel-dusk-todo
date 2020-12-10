<?php

namespace Tests;

use Laravel\Dusk\TestCase as BaseTestCase;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;

abstract class DuskTestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Prepare for Dusk test execution.
     *
     * @beforeClass
     * @return void
     */
    public static function prepare()
    {
        // static::startChromeDriver();
    }

    /**
     * Create the RemoteWebDriver instance.
     *
     * @return \Facebook\WebDriver\Remote\RemoteWebDriver
     */
    protected function driver()
    {

        $username = env('LT_USERNAME');
        $access_key = env('LT_ACCESS_KEY');
        $url = "https://".$username.":".$access_key."@hub.lambdatest.com/wd/hub";

         $capabilities = array(
		"build" => "LaravelDusk Build",
		"name" => "LaravelDusk Build",
		"platform" => "Windows 10",
		"browserName" => "Chrome",
		"version" => "latest"
     );

        return RemoteWebDriver::create($url,$capabilities);
    }

}
