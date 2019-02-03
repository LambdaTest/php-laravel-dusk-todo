# php-laravel-dusk-todo
A Sample app to automate on lambdatest grid. 


### Prerequisites
- Make sure php and composer is installed in your system. Setup Instrcutions can be found at. https://www.lambdatest.com/support/docs/display/TD/Quick+Guide+To+Run+PHP+Tests+on+LambdaTest+Selenium+Grid


### Installating project dependencies.
```bash
composer install
composer dump-autoload
```


### Configuring test.
```bash
cp .env.example .env
```
- Set LT_USERNAME with your username can be obtained from lamabdtest dashbaord
- Set LT_ACCESS_KEY with your access key can be genrated from lamabdtest dashbaord 
- To update platform configuration. 
Go to -> tests/DuskTestCase.php -> driver method:
```php
return RemoteWebDriver::create($url, 
            DesiredCapabilities::chrome()
                ->setCapability("platform", "win10")
                ->setCapability("browserName", "chrome")
                ->setCapability("version", "71.0")
                ->setCapability("resolution", "1024x768")
                ->setCapability("build", "LaravelDusk Build")
                ->setCapability("name", "LaravelDusk Test")
                ->setCapability("network", true)
                ->setCapability("video", true)
                ->setCapability("visual", true)
                ->setCapability("console", true)
                ->setCapability("tunnel", false)
        );
```

- List of supported platfrom, browser, version can be found at https://www.lambdatest.com/capabilities-generator/

###  Note: To use lambdatest ssh tunnel 
- Please set tunnel value `true` in capabilities. e.g:

    Go to -> tests/DuskTestCase.php -> driver method:
    ```php
    return RemoteWebDriver::create($url, 
                DesiredCapabilities::chrome()
                    ->setCapability("platform", "win10")
                    ->setCapability("browserName", "chrome")
                    ->setCapability("version", "71.0")
                    ->setCapability("resolution", "1024x768")
                    ->setCapability("build", "LaravelDusk Build")
                    ->setCapability("name", "LaravelDusk Test")
                    ->setCapability("network", true)
                    ->setCapability("video", true)
                    ->setCapability("visual", true)
                    ->setCapability("console", true)
                    ->setCapability("tunnel", true)
            );
    ```
- Download and setup tunnel binary. Tunnel Instruction can be found at
For windows https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+Windows

For Mac https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+MacOS

For Linux https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+Linux


### To run test
```bash
php artisan dusk
```





### To generate test cases
- To generate test case class execute `php artisan dusk:make {test case name}` in your project dir.  e.g:
```bash
php artisan dusk:make TodoTest
```
- Our sample Test case Go to -> tests/Browser/TodoTest.php file. It navigates to our sample app check some checkboxes add some to do.
