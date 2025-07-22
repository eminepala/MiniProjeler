<?php
session_start();


if (!isset($_SESSION['sayi'])) {
    $_SESSION['sayi'] = rand(1, 100);
}

$gercekSayi = $_SESSION['sayi'];
$tahminSayi = $_POST['gelenSayi'];

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sonuç</title>
</head>
<body>
<h2>Sayı Tahmin Oyunu Sonucu</h2>
<?php
if ($tahminSayi !== null) {
    echo "<p>Tahmininiz: <strong>$tahminSayi</strong></p>";

    if ($tahminSayi == $gercekSayi)
    {
        echo "<p> <strong>Tebrikler!</strong> Doğru tahmin: $gercekSayi</p>";
        unset($_SESSION['sayi']);
    }
    elseif ($tahminSayi > $gercekSayi)
    {
        echo "<p>Tahmin ettiğiniz sayı çok yüksek. Daha küçük bir sayı deneyin.</p>";
    }
    else
    {
        echo "<p>Tahmin ettiğiniz sayı çok düşük. Daha büyük bir sayı deneyin.</p>";
    }
}
?>
<br>
<a href="form.html">Yeni tahmin yapmak için tıklayın</a>
</body>
</html>