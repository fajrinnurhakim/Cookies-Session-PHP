<?php
    $value = "investree";
    $cookie_name = "TestCookie";

    setcookie($cookie_name,$value,time() + (864000 * 30), "/");
    
	
?>

<?php
    echo $_COOKIE[$cookie_name];
?>