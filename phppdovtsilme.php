<?php 
include 'baglan.php';

// Sil Butonuna Basılma Durumunda
if(isset($_POST['sil'])){

    $silincekveri = $_POST['veri']; // Değişken
   
    $sil = $db -> prepare ("DELETE FROM tabloadi WHERE sutunadi = ?"); // ? yerine dokunma
    $sil -> execute([
        $silincekveri
    ]);
}
?>