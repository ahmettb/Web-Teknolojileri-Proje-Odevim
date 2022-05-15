





<?php

$kullaniciAdi=$_POST['kullaniciAdi'];
$sifre=$_POST['sifre'];

if($sifre=="b211210003"&& $kullaniciAdi=="b211210003")
{
    echo ("HOŞGELDİNİZ ".$kullaniciAdi);
    header("Refresh: 2; hakkimda.html");


}
else{
    echo "Girilen bilgiler yanlış.Giriş Ekranına Yönlendiriliyorsunuz...";
    header("Refresh: 2; login.html");
}
?>