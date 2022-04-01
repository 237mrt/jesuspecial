<?php 
// VT Baglantı dosyasını include ediyoruz.
include 'baglan.php';


// Kayit Butonuna Basılma Durumunda
if(isset($_POST['kayit'])){

    $user = $_POST['user']; // Değişkenler
    $sifre = $_POST['user2']; // Değişkenler

    if(!$user or !$sifre){
        echo "Alanları doldurunuz!";
    }else{
        $kullanicisor = $db -> prepare("INSERT INTO users SET username = ?, userpassword = ?"); // VT öğelerini seçme
        $kayit = $kullanicisor -> execute([ 
            $user, $sifre // Seçtiğimiz Vt öğelerine değer atama
        ]);

        if($kayit){
            echo "VT kaydı başarılı!";
        }else{
            echo "VT kaydı başarısız!";
        }
    }
}

?>
