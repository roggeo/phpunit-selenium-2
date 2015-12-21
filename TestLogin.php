<?php

class TestLogin extends PHPUnit_Extensions_Selenium2TestCase {
    
    public function setUp(){
    
        $this->setHost('localhost');
        $this->setPort(4444);
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost/phpunit-tests');

    }
    
    public function testHasLoginForm() {
        
        $this->url('index.php');

        $username = $this->byName('username');
        $password = $this->byName('password');
        
        $this->assertEquals('', $username->value());
        $this->assertEquals('', $password->value());
        
    }
    
    
}