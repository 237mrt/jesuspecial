<?php 
include 'baglan.php';

$veribul = $db -> prepare("SELECT * FROM tabloadı"); // Select komutuyla Tabloyu Seçiyoruz
$veribul -> execute(array());

$veribul = $verilistele -> fetchAll(PDO::FETCH_ASSOC);

foreach($veribul as $liste){
    $list['listelencekverisutunadı']; // Listelenecek Sutun adı
    echo "<br>";
    $list['listelencekverisutunadı']; // Listelenecek Sutun adı
}

?>