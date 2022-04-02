<?php 
// VT Baglantı dosyasını include ediyoruz.
include 'baglan.php';


// Kayit Butonuna Basılma Durumunda
if(isset($_POST['güncelle'])){
    $eskideger = $_POST['eskiveri'];
    $yenideger = $_POST['yeniveri'];

    $güncelle = $db -> prepare("UPDATE users SET username = ? WHERE username = ?");
    $güncelle -> execute([
        $yenideger, $eskideger
    ]);
}
?>
