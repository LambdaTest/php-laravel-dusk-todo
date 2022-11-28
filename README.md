# Run Selenium Tests With Laravel On LambdaTest

![image](https://user-images.githubusercontent.com/70570645/171990329-08cb45ab-7dee-462f-8194-09be1522b5e4.png)

<p align="center">
  <a href="https://www.lambdatest.com/blog/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo" target="_bank">Blog</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.lambdatest.com/support/docs/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo" target="_bank">Docs</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.lambdatest.com/learning-hub/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo" target="_bank">Learning Hub</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.lambdatest.com/newsletter/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo" target="_bank">Newsletter</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.lambdatest.com/certifications/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo" target="_bank">Certifications</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.youtube.com/c/LambdaTest" target="_bank">YouTube</a>
</p>
&emsp;
&emsp;
&emsp;

*Learn how to use Laravel framework to configure and run your PHP automation scripts on the LambdaTest platform*

[<img height="58" width="200" src="https://user-images.githubusercontent.com/70570645/171866795-52c11b49-0728-4229-b073-4b704209ddde.png">](https://accounts.lambdatest.com/register?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo)

## Table Of Contents

* [Pre-requisites](#pre-requisites)
* [Run Your First Test](#run-your-first-test)
* [Local Testing With Laravel](#testing-locally-hosted-or-privately-hosted-projects)


## Prerequisites

Before you begin automation testing with Laravel Dusk, you would need to:

* Download **PHP v7.4**. You can download and install **PHP** using following commands in the terminal:

  * **MacOS:** Previous versions of **MacOS** have **PHP** installed by default. But for the latest **MacOS** versions starting with **Monterey**, **PHP** has to be downloaded and installed manually by using below commands: 
  ```bash
  /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
  brew install php
  ```
    * **Windows:** 
  ```bash
  sudo apt-get install curl libcurl3 libcurl3-dev php
  ```
  **Note:** For **Windows**, you can download **PHP** from [here](http://windows.php.net/download/). Also, refer to this [documentation](http://php.net/manual/en/install.windows.php) for ensuring the accessibility of PHP through Command Prompt(cmd).
  
  You can change the **PHP** version to **7.1** by using below homebrew commands in the terminal:
  ```bash
  brew unlink php && brew link --force php@7.4
  ```
  **Note:** You need to download **PHP v7.1** inorder to link to that version.

* Download **composer** in the project directory ([Linux/MacOS](https://getcomposer.org/download/), [Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)).

  **Note:** To use the **composer** command directly, it either should have been downloaded in the project directory or should be accessible globally which can be done by the command below:
  
  ```bash
  mv composer.phar /usr/local/bin/composer
  ```  

### Installing Selenium Dependencies And Tutorial Repo

**Step 1:** Clone the LambdaTest’s php-laravel-dusk-todo and navigate to the code directory as shown below:

```bash
git clone https://github.com/LambdaTest/php-laravel-dusk-todo
cd php-laravel-dusk-todo
```
**Step 2:** Install the composer dependencies in the current project directory using the commands below:
```bash
composer install
composer dump-autoload
```
if ```composer install``` doesn't work try ```composer update --ignore-platform-reqs```
### Setting Up Your Authentication

Make sure you have your LambdaTest credentials with you to run test automation scripts on LambdaTest Selenium Grid. You can obtain these credentials from the [LambdaTest Automation Dashboard](https://automation.lambdatest.com/build?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo) or through [LambdaTest Profile](https://accounts.lambdatest.com/login?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo).

**Step 3:** Create .env from example file
```bash
cp .env.example .env
```

**Step 4:** You would have to update your LambdaTest credentials in the newly created .env file.

```bash
LT_USERNAME="<Your_Username>"
LT_ACCESS_KEY="<Your_Access_Key"
```

**Step 5:** Set LambdaTest `Username` and `Access Key` in environment variables.

  * For **Linux/macOS**:
  ```bash
  export LT_USERNAME="YOUR_USERNAME" export LT_ACCESS_KEY="YOUR ACCESS KEY"
  ```
  * For **Windows**:
  ```bash
  set LT_USERNAME="YOUR_USERNAME" set LT_ACCESS_KEY="YOUR ACCESS KEY"
  ```

## Run Your First Test

>**Test Scenario**: The sample TodoTest.php file tests a sample to-do list app by marking couple items as done, adding a new item to the list and finally displaying the count of pending items as output.


**Step 6:** In [DuskTestCase.php](https://github.com/LambdaTest/php-laravel-dusk-todo/blob/master/tests/DuskTestCase.php), we are passing browser, browser version, and operating system information, along with LambdaTest Selenium grid capabilities via capabilities object. Update platform configuration in driver method of `tests/DuskTestCase.php`, to specify the target where tests should run. The capabilities object in the above code are defined as:

You can generate capabilities for your test requirements with the help of our inbuilt [Desired Capability Generator](https://www.lambdatest.com/capabilities-generator/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo).

### Executing The Test

**Step 7**: The tests can be executed in the terminal using the following command:

```bash
php artisan dusk
```


### Generate Test Cases

* Change directory to the project root: `cd /your/project`

* To generate the test cases, you need to execute the following command:
* 
  `php artisan dusk:make {test case name}`. 
  
  An example for the same is shown below:

  ```bash
  php artisan dusk:make TodoTest
  ```

Our sample test case can be found in [TodoTest.php](https://github.com/LambdaTest/php-laravel-dusk-todo/blob/master/tests/Browser/TodoTest.php) file. 

## Testing Locally Hosted Or Privately Hosted Projects

You can test your locally hosted or privately hosted projects with LambdaTest Selenium grid using LambdaTest Tunnel. All you would have to do is set up an SSH tunnel using tunnel and pass toggle `tunnel = True` via desired capabilities. LambdaTest Tunnel establishes a secure SSH protocol based tunnel that allows you in testing your locally hosted or privately hosted pages, even before they are live.

Refer our [LambdaTest Tunnel documentation](https://www.lambdatest.com/support/docs/testing-locally-hosted-pages/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo) for more information.

Here’s how you can establish LambdaTest Tunnel.

Download the binary file of:
* [LambdaTest Tunnel for Windows](https://downloads.lambdatest.com/tunnel/v3/windows/64bit/LT_Windows.zip)
* [LambdaTest Tunnel for macOS](https://downloads.lambdatest.com/tunnel/v3/mac/64bit/LT_Mac.zip)
* [LambdaTest Tunnel for Linux](https://downloads.lambdatest.com/tunnel/v3/linux/64bit/LT_Linux.zip)

Open command prompt and navigate to the binary folder.

Run the following command:

```bash
LT -user {user’s login email} -key {user’s access key}
```
So if your user name is lambdatest@example.com and key is 123456, the command would be:

```bash
LT -user lambdatest@example.com -key 123456
```
Once you are able to connect **LambdaTest Tunnel** successfully, you would just have to pass on tunnel capabilities in the code shown below :

**Tunnel Capability**

```
 "tunnel" => true
```

## Documentation & Resources :books:

      
Visit the following links to learn more about LambdaTest's features, setup and tutorials around test automation, mobile app testing, responsive testing, and manual testing.

* [LambdaTest Documentation](https://www.lambdatest.com/support/docs/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo)
* [LambdaTest Blog](https://www.lambdatest.com/blog/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo)
* [LambdaTest Learning Hub](https://www.lambdatest.com/learning-hub/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo)    

## LambdaTest Community :busts_in_silhouette:

The [LambdaTest Community](https://community.lambdatest.com/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo) allows people to interact with tech enthusiasts. Connect, ask questions, and learn from tech-savvy people. Discuss best practises in web development, testing, and DevOps with professionals from across the globe 🌎

## What's New At LambdaTest ❓

To stay updated with the latest features and product add-ons, visit [Changelog](https://changelog.lambdatest.com/) 
      
## About LambdaTest

[LambdaTest](https://www.lambdatest.com/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo) is a leading test execution and orchestration platform that is fast, reliable, scalable, and secure. It allows users to run both manual and automated testing of web and mobile apps across 3000+ different browsers, operating systems, and real device combinations. Using LambdaTest, businesses can ensure quicker developer feedback and hence achieve faster go to market. Over 500 enterprises and 1 Million + users across 130+ countries rely on LambdaTest for their testing needs.    

### Features

* Run Selenium, Cypress, Puppeteer, Playwright, and Appium automation tests across 3000+ real desktop and mobile environments.
* Real-time cross browser testing on 3000+ environments.
* Test on Real device cloud
* Blazing fast test automation with HyperExecute
* Accelerate testing, shorten job times and get faster feedback on code changes with Test At Scale.
* Smart Visual Regression Testing on cloud
* 120+ third-party integrations with your favorite tool for CI/CD, Project Management, Codeless Automation, and more.
* Automated Screenshot testing across multiple browsers in a single click.
* Local testing of web and mobile apps.
* Online Accessibility Testing across 3000+ desktop and mobile browsers, browser versions, and operating systems.
* Geolocation testing of web and mobile apps across 53+ countries.
* LT Browser - for responsive testing across 50+ pre-installed mobile, tablets, desktop, and laptop viewports

    
[<img height="58" width="200" src="https://user-images.githubusercontent.com/70570645/171866795-52c11b49-0728-4229-b073-4b704209ddde.png">](https://accounts.lambdatest.com/register?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo)

## We are here to help you :headphones:

* Got a query? we are available 24x7 to help. [Contact Us](mailto:support@lambdatest.com)
* For more info, visit - [LambdaTest](https://www.lambdatest.com/?utm_source=github&utm_medium=repo&utm_campaign=php-laravel-dusk-todo)
