#PHPUnit Selenium 2

##Install

First download [phpunit-selenium-2.zip](https://github.com/roggeo/phpunit-selenium-2/archive/master.zip)

Use Composer commands:

[Using Composer](https://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable)
<br/>
[Install Composer to Windows](https://getcomposer.org/doc/00-intro.md#using-the-installer)

```bash
composer install
```

##Testing

Downloading Selenium Standalone Server in:
    http://docs.seleniumhq.org/download/

Running server Selenium:

```bash
$ mv downloads/selenium-server-standalone-2.48.2.jar /usr/local/bin
$ java -jar selenium-server-standalone-2.48.2.jar
```

Selenium for Windows (Optional)

Create file "selenium.bat" with code:

```bat
@ECHO OFF
SET BIN_TARGET=%~dp0/selenium-server-standalone-2.48.2.jar
java -jar "%BIN_TARGET%" %*
```

Create an environment variable pointing to the file folder .jar

Ready, now you can running Selenium via command line.


```bash
$ cd vendor/bin
phpunit ../../src/App/Tests
```

or if exists variable of enviroment "phpunit", use in the root.
To running phpunit.xml.dist:

```bash
$ phpunit
```

For more, see: [here](https://phpunit.de/manual/3.7/en/selenium.html)