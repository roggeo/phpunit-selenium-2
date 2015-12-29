<?php

namespace App\Tests;

class LoginTest extends Config {   

    //
    public function url($url = NULL) {
        
       parent::url('login.php');
        
    }
    
    //
    public function testTitle() {
        
        $this->url();
        $this->assertEquals('PHPUnit Selenium 2 - Test login', $this->title());
        
    }
    
    //
    public function testLoginForm() {

        $this->url();
        
        $username = $this->byName('username');
        $password = $this->byName('password');
        $button = $this
                    ->byCssSelector('form #button-enter')
                    ->attribute('type');
        
        $this->assertEquals('admin', $username->value());
        $this->assertEquals('admin', $password->value());
        $this->assertSame('submit',$button);
        
    }
    
    //
    public function testLoginFormSubmit() {
        
        $this->url();
        
        $action = $this
                    ->byCssSelector('form')
                    ->attribute('action');
        
        $this->assertEquals($this->getBrowserUrl()."/login-enter.php", $action);

    }
    
}