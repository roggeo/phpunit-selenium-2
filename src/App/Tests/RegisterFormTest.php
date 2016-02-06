<?php

namespace App\Tests;

class RegisterFormTest extends Config {   
    
    /**
     * value valid to attribute name
     */
    public function valuesToAttributeName() {
        
        return array(
            
            array('text', 'first_name'),
            array('text', 'last_name'),
            array('text', 'email'),
//            array('text', 'phone'),
//            array('text', 'country'),
//            array('text', 'city'),
            
        );        
        
    }
    
    
    public function url($url = NULL) {
        
       parent::url('register_form.php');
        
    }
    
    /**
     * Verify whether all field are filled
     * 
     * @dataProvider valuesToAttributeName
     */
    public function testFillAllField( $type, $attr_name ) {
        
        $this->url();

        $name = $this->byName( $attr_name );
        
        $find_type = $name->attribute( 'type' );
                
        $this->assertEquals($type, $find_type, "Not was found type correct for field ".$attr_name );
        
    }
    
}
