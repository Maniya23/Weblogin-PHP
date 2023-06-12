<?php
    $server_name="localhost";
    $db_username= "manishka";
    $db_password= "(i6yrTSESeWAv)tJ";
    $db_name="log_base";

    
    try {
        $conn=mysqli_connect($server_name,$db_username,$db_password,$db_name);
        
    } catch (mysqli_sql_exception) {
        echo "Database connection error";
    }
?>