<?php

    
require_once('config.php');



$server = 'localhost';
    define( 'MYSQL_USER', 'root' );
    define( 'MYSQL_PASSWORD', '' );
    define( 'MYSQL_DB_NAME', 'infowebr' );


    try {
        $pdo = new PDO( 'mysql:host=' . $server . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
       
    } catch (Throwable $th) {
        //throw $th;
        echo 'error de '.$th;
    }
?>