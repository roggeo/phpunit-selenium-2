<?php

$post = (isset($_POST['action'])
            and $_POST['action'] == "insert") ? $_POST['action'] : false;

$is_validate = false;

if($post) {
    
    //Check validation of form
    //here code...
    
    $is_validate = true;
    
    
}


?>
<html>
        
    <head>
        
        <title>Form of Register</title>
        <link rel="stylesheet" href="public/css/form.css"/>
        
    </head>    
    
    <body>
        
        <?php
        if ($is_validate):
            print "<div id=\"message-form\">Form is valided!</div>";
        endif;
        ?>
        
        <form id="register-form" method="post" action="">
            
            <label>Name</label>
            <input type="text" name="first_name"/>

            <label>Last name</label>
            <input type="text" name="last_name"/>

            <label>Email</label>
            <input type="text" name="email"/>
            
            <label>Phone</label>
            <input type="text" name="phone"/>

            <label>Country</label>
            <input type="text" name="country"/>

            <label>City</label>
            <input type="text" name="city"/>

            <button type="submit" name="action" value="insert">Register now</button>
        
        </form>
        
    </body>
    
</html>