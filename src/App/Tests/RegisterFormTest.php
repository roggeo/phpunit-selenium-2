<?php

namespace App\Tests;

class RegisterFormTest extends Config {   
    
    
    public function url($url = NULL) {
        
       parent::url('register_form.php');
        
    }
    
    
    public function validDataRegister () {
        
        return  array(            
                    array(
                        //First parameter
                        array(                            
                            'first_name' => 'Geovani',
                            'last_name'  => 'Santos',
                            'email'      => 'email@email.com',
                            'phone'      => '+55 (62)8258-7493'
                        )
                    ),          
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
            array('text', 'phone'),
            //array('text', 'country'),
            //array('text', 'city'),
            
        );        
        
    }
    
    /**
     * @test
     */
    public function linkCss() {
        
        
        $this->url();
        
        $href_css = $this->getBrowserUrl().'/public/css/form.css';
        
        $tag_link = $this->byTag('link');
        
        $this->assertEquals($tag_link->attribute('href'), $href_css);
        
        
    }
    
    /**
     * 
     * @param array $values
     */
    public function fillFormWithValues ( Array $values) {
        
        
        $form = $this->byId('register-form');
        
        foreach ($values as $attr => $val) {
            
            $form->byName( $attr )->value( $val );
            
        }
        
        $this->byCssSelector('#register-form [name=action]')->click();
        
    }
    
    
    /**
     * Verify whether all field are filled
     * 
     * @dataProvider valuesToAttributeName
     * @test
     */
    public function verifyExistsFields( $type, $attr_name ) {
        
        $this->url();

        $name = $this->byName( $attr_name );
        
        $find_type = $name->attribute( 'type' );
                
        $this->assertEquals($type, $find_type, "Not was found type correct for field ".$attr_name );
        
    }
    
    
    /**
     * @dataProvider validDataRegister
     * @test
     */
    public function validForm( $inputs ) {
        
        $this->url();
        
        //print_r($inputs);
        
        $this->fillFormWithValues( $inputs );

        $message = $this->byId('message-form')->text();
        
        $this->assertEquals('Form is valided!', $message);
        
        print "\nSuccess: ".$message;
        

    }
    
}
