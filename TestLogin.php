<?php

class TestLogin extends PHPUnit_Extensions_Selenium2TestCase {
    
    public function setUp(){
    
        $this->setHost('localhost');
        $this->setPort(4444);
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost/phpunit-selenium-2');

    }
    
    public function testLoginForm() {
        
        $this->url('index.php');

        $username = $this->byName('username');
        $password = $this->byName('password');
        
        $this->assertEquals('', $username->value());
        $this->assertEquals('', $password->value());
        
    }
    
    public function testLoginFormSubmit() {
        
        $this->url('index.php');
        $action = $this->byCssSelector('form')->attribute('action');
        
        $this->assertEquals('login.php', $action);
        
    }
    
}