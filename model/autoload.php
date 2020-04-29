<?php   
    //on charge tous les fichiers à l'extension Class.php
    function chargerClasse($class)
    {
        include ($class.'.Class.php');
    }
    spl_autoload_register('chargerClasse');    
?>