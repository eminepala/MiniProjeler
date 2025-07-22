<?php
session_start();

$kullaniciAdi = $_POST['kullaniciAdi'] ;
$sifre = $_POST['sifre'];
$beniHatirla = isset($_POST['kaydet']);

if ($kullaniciAdi == "admin" && $sifre == "12345") {

    if ($beniHatirla==true)
    {
        setcookie("kullaniciAdi", $kullaniciAdi, time() + 3600);
        echo "Giriş başarılı. Hoş geldin $kullaniciAdi.<br>";
    }
    else
    {
        $_SESSION['kullaniciAdi'] = $kullaniciAdi;
        $_SESSION['sifre'] = $sifre;
        echo "Giriş başarılı. Hoş geldin $kullaniciAdi <br>";
    }

} else {
    echo "Kullanıcı adı veya şifre hatalı.<br>";
}
?>
<a href="form.html">Giriş sayfasına dön</a>
