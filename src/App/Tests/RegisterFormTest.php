<?php

namespace App\Tests;

class RegisterFormTest extends Config {   
    
    
    public function url($url = NULL) {
        
       parent::url('register_form.php');
        
    }
    
    
    public function validDataRegister () {
        
        
        return array(
                array(
                    'first_name' => 'Geovani',
                    'last_name'  => 'Santos',
                    'email'      => 'email@email.com'
                )
        );
        
        
    }
    
    
    /**
     * value valid to attribute name
     */
    public function valuesToAttributeName() {
        
        return array(
            
            array('text', 'first_name'),
            array('text', 'last_name'),
            array('text', 'email'),
            //array('text', 'phone'),
            //array('text', 'country'),
            //array('text', 'city'),
            
        );        
        
    }
    
    
    /**
     * 
     * @param array $values
     */
    public function fillFormWithValues ( array $values) {
        
        
        $form = $this->byId('register-form');
        
        foreach ($values as $attr_name => $value) {
            
            $form->byName( $attr_name )->value( $value );
            
        }
        
        $form->submit();
        
        
    }
    
    
    /**
     * Verify whether all field are filled
     * 
     * @dataProvider valuesToAttributeName
     */
    public function testVerifyExistsFields( $type, $attr_name ) {
        
        $this->url();

        $name = $this->byName( $attr_name );
        
        $find_type = $name->attribute( 'type' );
                
        $this->assertEquals($type, $find_type, "Not was found type correct for field ".$attr_name );
        
    }
    
    
    /**
     * @dataProvider validDataRegister
     */
    public function testValidForm( array $inputs ) {
        
        
        $this->fillFormWithValues( $inputs );
        
        $message = $this->byTag('body')->text();
        
        $this->assertEquals('Form is valided!', $message);
        
    }
    
}
