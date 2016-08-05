<?php

try{$bdd = new PDO("mysql:host=localhost;dbname=sito-zft","root","");
   }catch(Exception $e){
    die("ERROR:".$e->getMessage());
}

?>
