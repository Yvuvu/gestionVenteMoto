<?php
    function dbConnect()
    {
        try{
            $db = new PDO('mysql:host=localhost;dbname=vente', 'root', '');
        }
        catch (Exception $e) {
            $e->getMessage();
        }
         return $db;
        }
?>