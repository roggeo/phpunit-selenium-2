#PHPUnit Selenium 2

##Install

Create a file composer.json with the following content:
    
```json 
{
    "require": {
        "phpunit/phpunit-selenium": ">=1.2"
    }
}
```

```bash
composer install
```
    

##Testing

```bash
cd vendor/bin
phpunit TestLogin
```