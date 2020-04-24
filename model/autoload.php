<?php

 function autoload($class)
 {
     require $class.'.Class.php';
 }
 spl_autoload_register('autoload');

?>