<?php 
try{
    $db = new PDO("mysql:host=localhost; dbname=databaseadı; charset=utf8", 'kullanıcıadı', 'sifre');
    //echo "Veritabanı +";
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>