<?php
$sonuc = $_POST['dil'];
$php = 0;
$python = 0;
$javascript = 0;


if (file_exists("BasitAnketSistemi.txt")) {
    $satirlar = file("BasitAnketSistemi.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($satirlar as $satir) {
        list($dil, $sayi) = explode("=", $satir);
        if ($dil == "PHP") $php = (int)$sayi;
        if ($dil == "Python") $python = (int)$sayi;
        if ($dil == "JavaScript") $javascript = (int)$sayi;
    }
}


if ($sonuc == "PHP") {
    $php++;
} elseif ($sonuc == "Python") {
    $python++;
} elseif ($sonuc == "JavaScript") {
    $javascript++;
} else {
    echo "Hatalı seçim.";
    exit;
}


$myFile = fopen("BasitAnketSistemi.txt", "w"); // "w" önceki veriyi siler ve yenisini yazar
fwrite($myFile, "PHP=$php\n");
fwrite($myFile, "Python=$python\n");
fwrite($myFile, "JavaScript=$javascript\n");
fclose($myFile);

echo "Oyunuz kaydedildi.";
?>
