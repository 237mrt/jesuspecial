<?php 
try{
    $db = new PDO("mysql:host=localhost; dbname=vtadı; charset=utf8", 'vtkullanıcıadı', 'vtsifre'); // VT şifreniz yoksa boş bırakın
    //echo "Veritabanı +";
}
catch(Exception $e)
{
    echo $e->getMessage();
}
?>