<?php
$servidor="mysql:dbname=".BD.";hots=".SERVIDOR;

try {
    $pdo= new PDO($servidor,USUARIO,PASSWORD,
                array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
            );
    echo"<scrip>alert('Conectado...')</script>";

} catch (PDOException $e) {

    echo"<scrip>alert('Conectado...')</script>";
    
}

?>