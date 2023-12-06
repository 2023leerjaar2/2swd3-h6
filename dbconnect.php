<?php
    try{
        $conn = new mysqli("localhost", "root","","kookboekala");
    }catch(Exception $e){
        $error = $e->getMessage();
        echo $error;
    }
?>