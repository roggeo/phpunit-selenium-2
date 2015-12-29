<?php

namespace App\Tests;

class IndexTest extends Config{
    
    public function url($url = NULL) {
        
       parent::url('index.php');
        
    }
    
    //
    public function testTitle() {
        
        $this->url();
        $this->assertEquals('PHPUnit Selenium 2', $this->title());

    }
    
}
