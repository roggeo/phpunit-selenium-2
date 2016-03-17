<?php

namespace App\Tests;

use PHPUnit_Extensions_Selenium2TestCase;

class Config extends PHPUnit_Extensions_Selenium2TestCase {
    
    public function setUp(){
    
        $this->setHost('localhost');
        $this->setPort(4444);
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost/phpunit-selenium-2');

    }

}
